<?php
//mengambil data dari parameter input halaman biodata
$nama = $_GET['nama'];
$ttl = $_GET['ttl'];
$kelamin = $_GET['kelamin'];
$alamat = $_GET['alamat'];
$agama = $_GET['agama'];
$kerjaan = $_GET['kerja'];

//menampilkan data
echo "Nama = $nama"."<br>";
echo "Tempat & Tanggal Lahir = $ttl"."<br>";
echo "Jenis Kelamin = $kelamin"."<br>";
echo "Alamat = "."<br>";
echo "Agama = $agama"."<br>";
echo "Pekerjaan = $kerjaan"."<br>";
?>