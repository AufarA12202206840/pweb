<?php
session_start();
if($_SESSION['is_logged_in']!=TRUE)
{
    header("Location:form.php");
}
    include('dbconnect.php');
    $id = $_GET['urut'];
    $data = $k -> query("SELECT * FROM users WHERE id = '".$id."'");
    if($data -> num_rows == 1)
    {
        $datauser = $data -> fetch_assoc();
        ?>
        <form acrion ="editaction.php" menthod=  "post">
            <input type = " text" name = "username" required placeholder="username"value="<?php echo $datauser
            ['username']?>">
             <input type = " text" name = "nama" required placeholder="Nama Lengkap"value="<?php echo $datauser
            ['nama']?>">
             <input type = " email" name = "email" required placeholder="Email"value="<?php echo $datauser
            ['email']?>">
             <input type = " password" name = "paswd" required placeholder="password"value="<?php echo $datauser
            ['password']?>">
            <input type="hidden" name="userid" value = "<?php echo $datauser ['id']?>">
            <input type = "submit" value = "simpan">
            
        </form>
        <?php

    }
    else{
        echo"data tidak ditemukan";
    }
