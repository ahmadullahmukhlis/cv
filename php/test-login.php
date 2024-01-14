<?php
  include "config.php";
  session_start();

  if(isset($_SESSION["email"])){
    echo 0;
  }else{
    echo 1;
    
  }

?>