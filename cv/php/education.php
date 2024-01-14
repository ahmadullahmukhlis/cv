<?php
        include "config.php";
        session_start();
        $idkey=$_SESSION['id'];
    $id=rand(2,100000);
    $name=$_POST['uname'];
    $profession=$_POST['professions'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    $gpa=$_POST['gpa'];
    
    if($name==""||$profession==""||$sdate==""||$edate==""||$gpa==""){
        echo 0;
    }else{
          $sql="INSERT INTO education (eid, uname, sdate, edate,  major, GPA ,idkey)
              VALUES ({$id},'{$name}', '{$sdate}',  '{$edate}','{$profession}', '{$gpa}','{$idkey}');";
              if(mysqli_query($conn, $sql)){
                echo 1;
               }else{
                echo 2;
               }
    }








?>