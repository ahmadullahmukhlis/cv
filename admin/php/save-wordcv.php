<?php
include "config.php";
if($_FILES['img-file']['name']!=""&&$_FILES['word-file']['name']!=""){
  $id=rand(1,100000);
  $desc=$_POST['desc'];
    // image information varible
  $file_name = $_FILES['img-file']['name'];
  $file_size = $_FILES['img-file']['size'];
  $file_tmp = $_FILES['img-file']['tmp_name'];
  $file_type = $_FILES['img-file']['type'];
  $file_ext= pathinfo($file_name,PATHINFO_EXTENSION);
  // word file arry information varibles
  $wfile_name = $_FILES['word-file']['name'];
  $wfile_size = $_FILES['word-file']['size'];
  $wfile_tmp = $_FILES['word-file']['tmp_name'];
  $wfile_type = $_FILES['word-file']['type'];
  $wfile_ext= pathinfo($wfile_name,PATHINFO_EXTENSION);
  //$file_ext = end(explode('.',$file_name));
  $wextensions = array("pdf","ppt","docx","PDF","PPT","DOCX",);
  $extensions = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");

  if(in_array($file_ext,$extensions) === false || in_array($wfile_ext,$wextensions) === false)
  {
    echo '<div class="text-center alert alert-danger ">pleas upload img and word  extenstion file</div>';
  }else {
    if($file_size > 13097152||$wfile_size > 1300097152){
        echo '<div class="text-center alert alert-danger ">your file is not allwod please chose image 12 mbs and word cv 129 mbs</div>';
      }else {
        $wnew_name = time(). "-".basename($wfile_name);
        $wtarget = "../upload-template/".$wnew_name;
        $new_name = time(). "-".basename($file_name);
        $target = "../upload-img/".$new_name;
        if(move_uploaded_file($file_tmp,$target)==true && move_uploaded_file($wfile_tmp,$wtarget)==true ){
          $sql="INSERT INTO wordtemplate (`id`, `wordfile`, `imgfile`, `description`)
           VALUES ('{$id}', '$wnew_name', '$new_name', '{$desc}')";
         if(mysqli_query($conn, $sql)){
          echo '<div class="text-center alert alert-success ">your file is  submited successfuly</div>';
          die();
         }else{
          echo '<div class="text-center alert alert-danger ">quiry faild</div>';
         }
            
          }else{
           echo '<div class="text-center alert alert-danger ">your file is not submited successfuly</div>';
          }
        }
  }
}



?>