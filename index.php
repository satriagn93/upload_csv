<?php
include "koneksi.php";
include "header.php";

$menu = isset($_GET['menu'])?$_GET['menu']:"";
if($menu == "")         { include 'home.php';}
if($menu == "user") { include 'user.php';}

include "footer.php";
?>