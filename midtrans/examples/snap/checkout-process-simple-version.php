<?php
// This is just for very basic implementation reference, in production, you should validate the incoming requests and implement your backend more securely.
// Please refer to this docs for snap popup:
// https://docs.midtrans.com/en/snap/integration-guide?id=integration-steps-overview

namespace Midtrans;

require_once dirname(__FILE__) . '/../../Midtrans.php';
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


$namaorangtua="Nama namaorangtua";
$alamat="Alamat namaorangtua";
$nohportu="123";
$biayadaftar="20000";
$namaprogram="Program Data";
$email="email@email.com";

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
