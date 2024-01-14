<?php
        include "config.php";
        session_start();
        $idkey=$_SESSION['id'];
    $id=rand(2,100000);
    $date=$_POST['date'];
    $desc=$_POST['desc'];
    
    if($date==""||$desc==""){
        echo 0;
    }else{
          $sql="INSERT INTO award (aid, adate, adesc,idkey)
              VALUES ({$id},'{$date}', '{$desc}','{$idkey}');";
            if(mysqli_query($conn, $sql)){
                echo 1;
               }else{
                echo 2;
               }
    }

?>