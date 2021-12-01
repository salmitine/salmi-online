<?php

   $server    = "localhost";
   $user      = "root";
   $password  = "";
   $db        = "mahasiswa_salmi";

   $koneksi   = mysqli_connect($server, $user, $password, $db);

   if(!$koneksi) {
      die("koneksi tidak berhasil" . mysql_connect_eror());
    } 
    