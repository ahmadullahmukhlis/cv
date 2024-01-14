<?php
include "config.php";
if($_FILES['file']['name']!=""){
  session_start();
  $idkey=$_SESSION['id'];
    $id=rand(2,100000);
    $name=$_POST['name'];
    $profession=$_POST['profession'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $facebook=$_POST['facebook'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $birthdate=$_POST['birthdate'];


  $file_name = $_FILES['file']['name'];
  $file_size = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
  $file_type = $_FILES['file']['type'];
  $file_ext= pathinfo($file_name,PATHINFO_EXTENSION);
  //$file_ext = end(explode('.',$file_name));

  $extensions = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");

  if(in_array($file_ext,$extensions) === false)
  {
    echo 0;
  }else {
    if($file_size > 13097152){
        echo 1;
      }else {
        $new_name = time(). "-".basename($file_name);
        $target = "../upload-img/".$new_name;
        if(move_uploaded_file($file_tmp,$target)){
            $sql= " INSERT INTO contect (cid,cname, cmission, caddress, cemail, cphone, cfacebook, cimg , idkey , gender , birthdate )
             VALUES ('{$id}','{$name}', '{$profession}', '{$address}', '{$email}', '{$phone}', '{$facebook}', '{$new_name}','{$idkey}','{$gender}','{$birthdate}')";
          if(mysqli_query($conn, $sql)){
           echo 2;
           die();
          }else{
           echo 3;
          }
        }else{
          echo 4;
        }
          
      }
  }
}



?>