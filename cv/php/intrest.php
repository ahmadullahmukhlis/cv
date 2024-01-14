<?php
        include "config.php";
        session_start();
        $idkey=$_SESSION['id'];
    $id=rand(2,100000);
    $intrest=$_POST['intrest'];
    if($intrest==""){
        echo 0;
    }else{
        $sql=" INSERT INTO `intrest` (`iid`, `iname`, `idkey`) VALUES ('{$id}', '{$intrest}', '{$idkey}')";
           if(mysqli_query($conn, $sql)){
                echo 1;
               }else{
                echo 2;
               }
    }

?>