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
  $data = fgetcsv($file, 0, $delimiter);
  if (!empty($data[0])) //tidak mengikutkan spasi kosong
  {
    if ($baris >= 1) //karena baris 0 adalah judul kolom/field
    {

      $auth = "manual";
      $confirmed = "0";
      $policyagreed = "0";
      $deleted = "0";
      $suspended = "0";
      $mnethostid = "0";
      $username = $data[0];
      $password = '$2y$10$MHpNLfRFSejSoeSFchZhU.sz0/hGPjILHOy/jzQeAMUUlODOQYVq6';
      $idnumber = $data[1];
      $firstname = $data[2];
      $lastname = $data[3];
      $email = $data[4];
      $emailstop = "0";
      $icq = " ";
      $skype = " ";
      $yahoo = " ";
      $aim = " ";
      $msn = " ";
      $phone1 = $data[5];
      $phone2 = "0";
      $institution = " ";
      $department = " ";
      $address = $data[6];
      $city = $data[7];
      $country = "ID";
      $lang = "id";
      $calendartype = "gregorian";
      $theme = " ";
      $timezone = "Asia/Jakarta";
      $firstaccess = "0";
      $lastaccess = "0";
      $lastlogin = "0";
      $currentlogin = "0";
      $lastip = "0";
      $secret = "0";
      $picture = "0";
      $url = " ";
      $description = " ";
      $descriptionformat = "1";
      $mailformat = "1";
      $maildigest = "0";
      $maildisplay = "2";
      $autosubscribe = "1";
      $trackforums = "0";
      $timecreated = "0";
      $timemodified = "0";
      $trustbitmask = "0";
      $imagealt = " ";
      $lastnamephonetic = " ";
      $firstnamephonetic = " ";
      $middlename = " ";
      $alternatename = " ";

      $sql = "INSERT INTO mdl_user
   (auth, confirmed, policyagreed, deleted, suspended, mnethostid, username, password, idnumber, firstname, lastname, email, emailstop, icq, skype, yahoo, aim, msn, phone1, phone2, institution, department, address, city, country, lang, calendartype, theme, timezone, firstaccess, lastaccess, lastlogin, currentlogin, lastip, secret, picture, url, description, descriptionformat, mailformat, maildigest, maildisplay, autosubscribe, trackforums, timecreated, timemodified, trustbitmask, imagealt, lastnamephonetic, firstnamephonetic, middlename, alternatename) 
   VALUES 
   ('$auth','$confirmed', '$policyagreed','$deleted','$suspended','$mnethostid','$username','$password','$idnumber','$firstname','$lastname','$email','$emailstop','$icq','$skype','$yahoo','$aim','$msn','$phone1','$phone2','$institution','$department','$address','$city','$country','$lang','$calendartype','$theme','$timezone','$firstaccess','$lastaccess','$lastlogin','$currentlogin','$lastip','$secret','$picture','$url','$description','$descriptionformat','$mailformat','$maildigest','$maildisplay','$autosubscribe','$trackforums','$timecreated', '$timemodified', '$trustbitmask', '$imagealt', '$lastnamephonetic', '$firstnamephonetic', '$middlename', '$alternatename')";
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
