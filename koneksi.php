<?php
$koneksi = mysqli_connect("localhost", "root", "", "oemarhm");
if (mysqli_connect_error()) {
    echo "Koneksi Database Gagal";
}
