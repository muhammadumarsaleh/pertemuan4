<?php 
// DATE
// untuk menampilkan format waktu tertentu.
// echo date("l, d-M-Y");
// echo date("l, d M Y", time()+60*60*24*9);

// echo date("l, d, M, Y");

//  TIME
// echo date("d-M-Y", time()-60*60*24*100);

//  MKTIME
// echo mktime(0,0,0,0,0,0);
// echo mktime(jam,menit,detik,bulan,tanggal,tahun);

// echo date("l", mktime(0,0,0,5,12,2003));

// STRTOTIME
// echo strtotime("12 may 2003");
echo date("l", strtotime("12 may 2003"));

// dan lain-lain.


?>