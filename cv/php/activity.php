<?php
        include "config.php";
        session_start();
        $idkey=$_SESSION['id'];
    $id=rand(2,100000);
    $name=$_POST['name'];
    $profession=$_POST['professions'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    $desc=$_POST['desc'];
    
    if($name==""||$profession==""||$sdate==""||$edate==""||$desc==""){
        echo 0;
    }else{
             $sql="INSERT INTO activities (acid, `comp-name`, sdate, edate, major, acdesc ,idkey)
              VALUES ({$id},'{$name}', '{$sdate}',  '{$edate}','{$profession}', '{$desc}','{$idkey}');";
            if(mysqli_query($conn, $sql)){
                echo 1;
               }else{
                echo 2;
               }
    }








?>