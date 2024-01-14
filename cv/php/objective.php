<?php
        include "config.php";
        session_start();
        $idkey=$_SESSION['id'];
    $id=rand(2,100000);
    $objective=$_POST['objective'];
    if( $objective==""){
        echo 0;
    }else{
             $sql="INSERT INTO objective ( oid, odesc,idkey)
              VALUES ({$id},'{ $objective}','{$idkey}');";
            if(mysqli_query($conn, $sql)){
                echo 1;
               }else{
                echo 2;
               }
    }

?>