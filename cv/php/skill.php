<?php
        include "config.php";
        session_start();
        $idkey=$_SESSION['id'];
    $id=rand(2,100000);
    $head=$_POST['head'];
    $headper=$_POST['head-per'];
    $desc=$_POST['sdesc'];
    
    if($head==""||$headper==""){
        echo 0;
    }else{
             $sql="INSERT INTO skile (sid, shead, sper, sdesc,idkey)
              VALUES ({$id},'{$head}', '{$headper}',  '{$desc}','{$idkey}');";
            if(mysqli_query($conn, $sql)){
                echo 1;
               }else{
                echo 2;
               }
    }








?>