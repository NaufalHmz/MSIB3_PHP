<?php
require 'Pegawai.php';
//ciptakan object
$neur = new Pegawai('001','Neur','Manager','Kristen Katholik','Belum Menikah');
$salah = new Pegawai('002','Mohammed Salah','Asisten Manager','Islam','Menikah');
$bagus = new Pegawai('003', 'Ahmad Bagus', 'Kabag', 'Islam', 'Belum Menikah' );
$agung = new Pegawai('004','Agung','Asisten Manager','Buddha','Balum Menikah');
$yamin = new Pegawai('005','Yamin','Kabag','Hindu','Menikah');


//cetak struktur gaji

echo '<h3 align="center">'.Pegawai::PT.'</h3>';
$neur->mencetak();
$salah->mencetak();
$bagus->mencetak();
$agung->mencetak();
$yamin->mencetak();
//dst ...
echo 'Jumlah Pegawai: '.Pegawai::$jml;