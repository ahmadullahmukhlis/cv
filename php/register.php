<?php
include "config.php";

    $id= 1000+rand(1,100000);
    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $email = $_POST['email'];
    $password = mysqli_real_escape_string($conn,md5($_POST['password']));
    
   if($id==""||$name==""||$email==""||$password==""){
    echo "all feild required";
   }else{
          
      
    $sql = "SELECT email FROM registration WHERE email='{$email}'"; 
      
    $result = mysqli_query($conn, $sql) or die("Query Failed.");
  
    if(mysqli_num_rows($result) > 0){
      echo 0;
    }else{
        $sql1="INSERT INTO registration (id, name, email, password) VALUES ($id, '{$name}', '{$email}', '{$password}')";
if(mysqli_query($conn,$sql1)){
  echo 1;
  }else{
    echo 2;
  }
}

   }

   
    


?>