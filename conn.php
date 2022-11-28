<?php
    session_start();

    $base_url = 'localhost/beasiswa/';
    $con = ocilogon("C##BEASISWA", "fafa");
    if(!$con) {
        $err = oci_error();
        // echo "Gagal";
    } else {
        // echo "berhasil";
    }

    if(!empty($_GET['logout'])){
        session_destroy();
        header('location: http://localhost/beasiswa/');
    }