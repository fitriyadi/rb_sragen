<?php
// This is just for very basic implementation reference, in production, you should validate the incoming requests and implement your backend more securely.
// Please refer to this docs for snap popup:
// https://docs.midtrans.com/en/snap/integration-guide?id=integration-steps-overview

namespace Midtrans;

require_once '../midtrans/Midtrans.php';
// Set Your server key
// can find in Merchant Portal -> Settings -> Access keys
Config::$serverKey = 'SB-Mid-server-oSZRh4rw7iNrLAEPD0p6sUcF';
Config::$clientKey = 'SB-Mid-client-ucohWkyK8UmJOfAw';

// non-relevant function only used for demo/example purpose
printExampleWarningMessage();

// Uncomment for production environment
// Config::$isProduction = true;
Config::$isSanitized = Config::$is3ds = true;

// Required
$transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => 94000, // no decimal allowed for creditcard
);
// Optional


$idprogram=$_POST['idprogram'];
$iddaftar=$_SESSION['siswa'];
$tanggal=date('Y-m-d');
$namaorangtua=_dataCustom($mysqli,"select namaortu from tb_siswa where iddaftar='$iddaftar'");
$alamat=_dataCustom($mysqli,"select alamat from tb_siswa where iddaftar='$iddaftar'");
$nohportu=_dataCustom($mysqli,"select nohportu from tb_siswa where iddaftar='$iddaftar'");
$biayadaftar=_dataCustom($mysqli,"select biayadaftar from tb_program where idprogram='$idprogram'");
$namaprogram=_dataCustom($mysqli,"select nama from tb_program where idprogram='$idprogram'");
$email=_dataCustom($mysqli,"select email from tb_siswa where iddaftar='$iddaftar'");

$jenisbayar="Online";
$statusbayar="Proses";

$stmt = $mysqli->prepare("INSERT INTO tb_siswa_daftar 
        (iddaftar,idprogram,tanggalbayar,dibayar,jenisbayar,statusbayar) 
        VALUES (?,?,?,?,?,?)");

    $stmt->bind_param(
        "ssssss",
        $iddaftar,
        $idprogram,
        $tanggal,
        $biayadaftar,
        $jenisbayar,
        $statusbayar
    );

$stmt->execute();


$billing_address = array(
    'first_name'    => $namaorangtua,
    'last_name'     => "",
    'address'       => $alamat,
    'city'          => "",
    'postal_code'   => "16602",
    'phone'         => $nohportu,
    'country_code'  => 'IDN'
);

// Optional
$shipping_address = array(
    'first_name'    => $namaorangtua,
    'last_name'     => "",
    'address'       => $alamat,
    'city'          => "",
    'postal_code'   => "16601",
    'phone'         => $nohportu,
    'country_code'  => 'IDN'
);

$item_details = array (
    array(
        'id' => 'KODE',
        'price' => $biayadaftar,
        'quantity' => 1,
        'name' => $namaprogram
    ),
  );
// Optional
$customer_details = array(
    'first_name'    => $namaorangtua,
    'last_name'     => "",
    'email'         => $email,
    'phone'         => $nohportu,
    'billing_address'  => $billing_address,
    'shipping_address' => $shipping_address
);
// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

$snap_token = '';
try {
    $snap_token = Snap::getSnapToken($transaction);
}
catch (\Exception $e) {
    echo $e->getMessage();
}
echo "snapToken = ".$snap_token;

function printExampleWarningMessage() {
    if (strpos(Config::$serverKey, 'your ') != false ) {
        echo "<code>";
        echo "<h4>Please set your server key from sandbox</h4>";
        echo "In file: " . __FILE__;
        echo "<br>";
        echo "<br>";
        echo htmlspecialchars('Config::$serverKey = \'<your server key>\';');
        die();
    } 
}

?>

<!DOCTYPE html>
<html>
    <body>
        <button id="pay-button">Pembayaran!</button>
        <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo Config::$clientKey;?>"></script>
        <script type="text/javascript">
            document.getElementById('pay-button').onclick = function(){
                // SnapToken acquired from previous step
                snap.pay('<?php echo $snap_token?>');
            };
        </script>
    </body>
</html>
