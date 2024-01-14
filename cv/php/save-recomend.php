<?php

include "config.php";
        session_start();
        $idkey=$_SESSION['id'];
    $id=rand(2,100000);
    $type=$_POST['type'];
    $tname=$_POST['teacher'];
    $sname=$_POST['student'];
    $time=$_POST['time'];
    $place=$_POST['place'];
    $date=$_POST['date'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    if( $type==""||$tname==""||$sname==""||$time==""||$place==""||$date==""||$email==""){
        echo 0;
    }else{
             $sql="INSERT INTO `recommendation` (`id`, `type`, `teacher`, `student`, `time`, `place`, `date`, `email`, `phone`, `idkey`) 
             VALUES ('$id', '{$type}', '{$tname}', '{$sname}', '{$time}', '$place', '{$date}', '{$email}', '{$phone}', '$idkey');;";
            if(mysqli_query($conn, $sql)){
                echo 1;
               }else{
                echo 2;
               }
    }









?>