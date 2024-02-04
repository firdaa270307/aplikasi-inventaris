<?php
    $koneksi = mysqli_connect("localhost", "root", "", "inventaris(linda)");

    if(mysqli_connect_errno()){
        echo "koneksi error :" . mysqli_connect_error();
    }
?>