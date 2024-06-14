<?php
    $server = '192.168.10.253:3306'; 
    $username = 'a122206840';
    $password = 'polke001';
    $namadb = 'a122206840';

   $k = new mysqli($server, $username, $password, $namadb);
   if($k->connect_errno)
   {
        echo "failed ", $k->connect_error;
        exit();
   }