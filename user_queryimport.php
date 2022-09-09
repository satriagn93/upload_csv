<?php
include "koneksi.php";

$folder   = 'berkas';
$tmp_name = $_FILES["filecsv"]["tmp_name"];
$name     = "file_upload.csv";
move_uploaded_file($tmp_name, "$folder/$name");

//cek apakah delimiter menggunakan , atau ;
$file = fopen("berkas/file_upload.csv", "r"); //buka file csv
$cek  = fgetcsv($file, 0, ','); //baca isi csv perbaris dengan koma
if (!empty($cek[1])) {
  $delimiter = ",";
} else {
  $delimiter = ";";
}
fclose($file);
//batas

//insert ke database
$file = fopen("berkas/file_upload.csv", "r"); //buka file csv
$baris = 0;
while (!feof($file)) //cari akhir baris csv
{
  $auth1 = 'manual';
  $data = fgetcsv($file, 0, $delimiter);
  if (!empty($data[0])) //tidak mengikutkan spasi kosong
  {
    if ($baris >= 1) //karena baris 0 adalah judul kolom/field
    {

      $firstname = $data[0];
      $lastname  = $data[1];
      $address  = $data[2];

      $sql = "INSERT INTO mdl_coba
   (firstname, lastname, address) 
   VALUES 
   ('$firstname','$lastname', '$address')";
      mysqli_query($koneksi, $sql);
    }
  }
  $baris++;
}
fclose($file); //tutup akses file csv

$pesan = "Data berhasil diimpor";
$url   = "index.php";

echo "<script> 
  alert('$pesan'); 
  location='$url';
   </script>";
