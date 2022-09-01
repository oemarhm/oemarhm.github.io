<?php
include 'koneksi.php';
$name = $_GET['name'];
mysqli_query($koneksi, "DELETE FROM komentar WHERE name='$name'");
header("location:komentar.php");
