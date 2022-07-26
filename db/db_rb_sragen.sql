/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16 : Database - db_rb_sragen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tb_blog` */

DROP TABLE IF EXISTS `tb_blog`;

CREATE TABLE `tb_blog` (
  `idblog` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `isi` text,
  `foto` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `idpengguna` int(11) DEFAULT NULL,
  PRIMARY KEY (`idblog`),
  KEY `idpengguna` (`idpengguna`),
  CONSTRAINT `tb_blog_ibfk_1` FOREIGN KEY (`idpengguna`) REFERENCES `tb_pengguna` (`idpengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_blog` */

insert  into `tb_blog`(`idblog`,`judul`,`jenis`,`isi`,`foto`,`tanggal`,`idpengguna`) values (1,'Pengumuman Akhir Semester','Pengumuman','Kepada: Bapak/Ibu Orang Tua Murid Rumah Belajar Sragen\r\nDengan ini kami sampaikan bahwa berkaitan dengan adanya libur akhir semester genap 2022, dengan menyesuaikan dengan Kalender Pendidikan, maka dengan ini kami memutuskan bahwa kegiatan bimbingan belajar diliburkan, dengan ketentuan sebagai berikut:\r\n\r\nLibur mulai Senin, 27 Juni 2022 hingga Sabtu, 9 Juli 2022\r\nKegiatan bimbingan belajar dimulai lagi pada Senin, 11 Juli 2022.\r\nDemikian surat pemberitahuan ini kami buat untuk diperhatikan.\r\nSragen, 24 Juni  2022\r\nKepala Bimbel Rumah Belajar Sragen\r\n','blog1.jpg','2022-07-06',1),(2,'BEST TEACHER','Informasi','Selamat kepada Mr. Harun telah menjadi \"BEST TEACHER\" third period Tahun ajaran 2021/2022 Rumah Belajar Sregen. Semoga bisa menjadi teladan, panutan, semangat berprestasi, dan semangat berkereatifitas bagi rekan-rekan lainnya.','blog2.jpg','2022-06-29',1),(3,'Congratulation','Informasi','Selamat buat mba Nafeeza telah meraih juara 1 English Speech Competition dalam acara Milad SD Birrul Walidain... Mba Nafeeza adalah salah satu siswa dari program Good Morning.. Semoga sukses selalu.. We proud of you','default.png','2022-06-29',1);

/*Table structure for table `tb_gallery` */

DROP TABLE IF EXISTS `tb_gallery`;

CREATE TABLE `tb_gallery` (
  `idgallery` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idgallery`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_gallery` */

insert  into `tb_gallery`(`idgallery`,`judul`,`foto`) values (1,'kegiatan ayo baca','kegiata1.jpg'),(2,'kegiatan cermath','kegiata1.jpg'),(3,'kegiatan good morning','kegiata1.jpg'),(4,'kegiatan mata pelajaran SD','kegiata1.jpg'),(5,'kegiatan fun learning','kegiata1.jpg'),(6,'kegiatan ayo baca','kegiata1.jpg');

/*Table structure for table `tb_guru` */

DROP TABLE IF EXISTS `tb_guru`;

CREATE TABLE `tb_guru` (
  `idguru` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`idguru`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tb_guru` */

insert  into `tb_guru`(`idguru`,`nama`,`pendidikan`,`foto`,`deskripsi`) values (1,'Quo proident aspern','Consectetur hic vol',NULL,'Sunt dicta aut accus'),(2,'Biuty Prama','S1 Pendidikan Matematika ','guru2.jpg','Tutor program regular SMP mata pelajaran matematika'),(3,'Fatma Fitria','S1 Pendidikan Fisika','guru3.jpg','Tutor program BTA regular dan privat'),(4,'Quis dolores illo qu','Qui a voluptatem Mo','2022-07-26 04:56:59Fakhry Jonniyanto_Lanyard.JPG','Magna sunt libero se'),(5,'Culpa cillum qui inv','Et incidunt nisi de','2022-07-26 04:57:36Fakhry Jonniyanto_Lanyard.JPG','Labore temporibus ne'),(6,'Quis qui ut numquam ','Explicabo Ea proide','Fakhry Jonniyanto_Lanyard.JPG','Dolore assumenda et '),(7,'Eiusmod repellendus','Ut hic non est volup','Fakhry Jonniyanto_Lanyard.JPG','Dolore non dicta adi'),(8,'Dolores non omnis re','Omnis nemo fugiat si','Fakhry Jonniyanto_Lanyard.JPG','Molestias nulla ipsa'),(9,'Commodo pariatur Ni','Dolor quos architect','Rika Nofitri & Ardiansyah - STMIK Royal.docx','Blanditiis qui volup'),(10,'Commodo pariatur Ni','Dolor quos architect','Rika Nofitri & Ardiansyah - STMIK Royal.docx','Blanditiis qui volup'),(11,'Commodo pariatur Ni','Dolor quos architect','Rika Nofitri & Ardiansyah - STMIK Royal.docx','Blanditiis qui volup'),(12,'Commodo pariatur Ni','Dolor quos architect','Rika Nofitri & Ardiansyah - STMIK Royal.docx','Blanditiis qui volup'),(13,'Commodo pariatur Ni','Dolor quos architect','Rika Nofitri & Ardiansyah - STMIK Royal.docx','Blanditiis qui volup'),(14,'Commodo pariatur Ni','Dolor quos architect','Rika Nofitri & Ardiansyah - STMIK Royal.docx','Blanditiis qui volup'),(15,'Commodo pariatur Ni','Dolor quos architect','Rika Nofitri & Ardiansyah - STMIK Royal.docx','Blanditiis qui volup');

/*Table structure for table `tb_materi` */

DROP TABLE IF EXISTS `tb_materi`;

CREATE TABLE `tb_materi` (
  `idmateri` int(11) NOT NULL AUTO_INCREMENT,
  `idprogram` int(11) DEFAULT NULL,
  `idpengguna` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idmateri`),
  KEY `idpengguna` (`idpengguna`),
  KEY `idprogram` (`idprogram`),
  CONSTRAINT `tb_materi_ibfk_1` FOREIGN KEY (`idpengguna`) REFERENCES `tb_pengguna` (`idpengguna`),
  CONSTRAINT `tb_materi_ibfk_2` FOREIGN KEY (`idprogram`) REFERENCES `tb_program` (`idprogram`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_materi` */

insert  into `tb_materi`(`idmateri`,`idprogram`,`idpengguna`,`tanggal`,`judul`,`deskripsi`,`link`) values (1,1,1,'2022-06-08','Materi 1','Materi mengenai latihan soal pendampingan pat (penilaian akhir tahun) 2022 kelas 2',NULL),(2,1,1,'2022-06-08','Materi 2','Materi mengenai CERMATH (spesial matematika) bab penjumlahan SD level 2',NULL),(3,1,1,'2022-06-08','Materi 3','Materi mengenai CERMATH bab pecahan SD level 4',NULL);

/*Table structure for table `tb_pengguna` */

DROP TABLE IF EXISTS `tb_pengguna`;

CREATE TABLE `tb_pengguna` (
  `idpengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idpengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengguna` */

insert  into `tb_pengguna`(`idpengguna`,`nama`,`username`,`password`,`level`) values (1,'admin','admin','admin','admin'),(2,'kepala','kepala','kepala','kepala');

/*Table structure for table `tb_profil` */

DROP TABLE IF EXISTS `tb_profil`;

CREATE TABLE `tb_profil` (
  `idprofil` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  PRIMARY KEY (`idprofil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_profil` */

insert  into `tb_profil`(`idprofil`,`judul`,`isi`) values (1,'Visi Misi','Visi : menciptakan pendidikan anak yang berkarakter.\r\nMisi : menciptakan pendidikan anak yang cerdas dan menyenangkan.\r\n'),(2,'Pegurus','Direktur Utama :  Aziz Maula Rahman\r\nDirektur Pelaksana : Irma Widianingrum\r\nKepala Bimbel Rumah Belajar Sragen : Arina Mukti Shofia\r\n');

/*Table structure for table `tb_program` */

DROP TABLE IF EXISTS `tb_program`;

CREATE TABLE `tb_program` (
  `idprogram` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `biayadaftar` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprogram`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_program` */

insert  into `tb_program`(`idprogram`,`nama`,`deskripsi`,`biayadaftar`) values (1,'Program ayo baca (baca tulis)','Uang SPP Rp. 175.000/bulan\r\n1 kelompok maks 3 siswa\r\n1 minggu 2x pertemuan (@90 menit)\r\nFun Learning & Games\r\nKelas Indoor & Outdoor\r\n',175000),(2,'Program good morning (Spesial B.Inggris): ','Uang SPP TK/SD Rp 175.000/bulan \r\nUang SPP SMP/SMA Rp 200.000/bulan\r\n1 kelompok maks 10 siswa\r\n1 minggu 2x pertemuan (@90 menit)\r\nFun Learning & Games\r\nKelas Indoor & Outdoor\r\n',175000),(3,'Program Cermath (Spesial Matematika)','Uang SPP TK/SD Rp 175.000/bulan\r\nUang SPP SMP Rp 250.000/bulan\r\nUang SPP SMA Rp 300.000/bulan\r\n1 kelompok maks 10 siswa\r\n1 minggu 2x pertemuan (@90 menit)\r\nFun Learning & Games\r\nKelas Indoor & Outdoor\r\nSesuai dengan materi sekolah\r\n',175000),(4,'Program BTA (Baca Tulis Al-Qur\'an)','Uang SPP TK/SD Rp 125.000/bulan\r\nUang SPP SMP Rp 150.000/bulan\r\n1 kelompok maks 5 siswa\r\n1 minggu 2x pertemuan (@90 menit)\r\nFun Learning & Games\r\n',125000),(5,'Program MAPEL SD','Uang SPP (Kelas 1-3) MTK, PKN, B.Indonesia Rp 175.000/bulan\r\nUang SPP (Kelas 4-6) MTK, PKN, B.Indonesia, IPA, IPS Rp 200.000/bulan\r\n1 kelompok maks 10 siswa\r\n1 minggu 3x pertemuan (@90 menit)\r\nGratis Konsultasi PR\r\nMapel sesuai tema (Kecuali mulok)\r\n',175000),(6,'Program TK-SD','4 Sesi (Pertemuan) biaya Rp 180.000,-\r\n8 Sesi (Pertemuan) biaya Rp 350.000\r\n@60 menit\r\n1 Tutor 1 Siswa\r\nMateri bisa memilih sesuai kebutuhan\r\n',180000);

/*Table structure for table `tb_siswa` */

DROP TABLE IF EXISTS `tb_siswa`;

CREATE TABLE `tb_siswa` (
  `iddaftar` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `sekolahasal` varchar(100) DEFAULT NULL,
  `namaortu` varchar(100) DEFAULT NULL,
  `nohportu` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `statusdaftar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iddaftar`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_siswa` */

insert  into `tb_siswa`(`iddaftar`,`nama`,`tempatlahir`,`tanggallahir`,`jk`,`agama`,`alamat`,`sekolahasal`,`namaortu`,`nohportu`,`email`,`password`,`foto`,`statusdaftar`) values (1,'Vicky Alvaro G','Sragen','2015-01-30','L','Islam','Mojo Kulon PT 3 RW 7 Sragen','SDN Mojomulyo II','Sumantu dan Puji Cahyo','0895422640920','ambarpuryani@gmail.com',NULL,NULL,'Langsung'),(2,'Muhamad Naufal Afkar H','Lamongan','2007-05-10','L','Islam','Geneng Srimulyo RT 23',NULL,'andri hartanto',NULL,'andi12@gmail.com',NULL,NULL,'Online'),(3,'Deandra Jesie Valencia','Sragen','2015-01-30','P','Islam','Pilang Sari',NULL,'Julianisutopo',NULL,'julianiandre20@gmail.com',NULL,NULL,'Online');

/*Table structure for table `tb_siswa_daftar` */

DROP TABLE IF EXISTS `tb_siswa_daftar`;

CREATE TABLE `tb_siswa_daftar` (
  `iddaftarpaket` int(11) NOT NULL AUTO_INCREMENT,
  `iddaftar` int(11) DEFAULT NULL,
  `idprogram` int(11) DEFAULT NULL,
  `tanggalbayar` date DEFAULT NULL,
  `dibayar` int(11) DEFAULT NULL,
  `jenisbayar` varchar(50) DEFAULT NULL,
  `no_vca` varchar(50) DEFAULT NULL,
  `rekening_vca` varchar(50) DEFAULT NULL,
  `no_referensi` varchar(50) DEFAULT NULL,
  `linkinfo` varchar(100) DEFAULT NULL,
  `statusbayar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iddaftarpaket`),
  KEY `idprogram` (`idprogram`),
  KEY `iddaftar` (`iddaftar`),
  CONSTRAINT `tb_siswa_daftar_ibfk_1` FOREIGN KEY (`idprogram`) REFERENCES `tb_program` (`idprogram`),
  CONSTRAINT `tb_siswa_daftar_ibfk_2` FOREIGN KEY (`iddaftar`) REFERENCES `tb_siswa` (`iddaftar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_siswa_daftar` */

insert  into `tb_siswa_daftar`(`iddaftarpaket`,`iddaftar`,`idprogram`,`tanggalbayar`,`dibayar`,`jenisbayar`,`no_vca`,`rekening_vca`,`no_referensi`,`linkinfo`,`statusbayar`) values (1,1,1,'2022-07-12',175000,'Offline',NULL,NULL,NULL,NULL,'Lunas'),(2,2,2,'2022-07-06',175000,'Offline',NULL,NULL,NULL,NULL,'Lunas');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
