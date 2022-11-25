<?php

session_start();

// $conn = mysqli_connect('localhost','id19738167_afand','l_=IP(r_Pvk0vp}?','id19738167_wisata');
$conn = mysqli_connect('localhost', 'root', '', 'wisata');

if (!$conn) {
    echo mysqli_connect_error();
    exit;
}
