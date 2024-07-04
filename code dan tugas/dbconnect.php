<?php
    $server = '192.168.10.253:330';//localhost:3306
    $username = 'a12206840';
    $password = 'polke001';
    $namadb = 'a122206840';

   $k = new mysqli($server, $username, $password, $namadb);
   if($k->connect_errno)
   {
        echo "failed ", $k->connect_error;
        exit();
   }