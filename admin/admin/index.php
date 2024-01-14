<?php
include "php/config.php";
session_start();
if(!isset($_SESSION["email"])){
    header("location: ../index.php");
}else{
    if($_SESSION['roll']==1){

?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mukhlis document official website admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font_awsome/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="font_awsome/all.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <!-- header starting-->
<?php 
include "import/header.php";
?>
<div class="container-fluid">
    <div class="row table-responsive">
    


    </div>
</div>

<script src="js/jquery.js"></script>
<script>
  
    $(document).ready(function(){
        var links="home";
        $("#home").click(function(){
        links="home";
        $(".bg-light .nav-item a").removeClass( "active" );
        loadtable(links); 
        $("#home").addClass("active");
    });

    $("#activities").click(function(){
        links="activities";
        $(".bg-light .nav-item a").removeClass( "active" );
        loadtable(links); 
        $("#activities").addClass("active");
    });

    $("#award").click(function(){
        links="award";
        $(".bg-light .nav-item a").removeClass( "active" );
        loadtable(links); 
        $("#award").addClass("active");
    });

    $("#contect").click(function(){
        links="home";
        $(".bg-light .nav-item a").removeClass( "active" );
        loadtable(links); 
        $("#contect").addClass("active");
    });

    $("#education").click(function(){
        links="education";
        $(".bg-light .nav-item a").removeClass( "active" );
        loadtable(links); 
        $("#education").addClass("active");
    });
    $("#experience").click(function(){
        links="experience";
        $(".bg-light .nav-item a").removeClass( "active" );
        loadtable(links); 
        $("#experience").addClass("active");
    });
    $("#intrest").click(function(){
        links="intrest";
        $(".bg-light .nav-item a").removeClass( "active" );
        loadtable(links); 
        $("#intrest").addClass("active");
    });
    $("#objective").click(function(){
        links="objective";
        $(".bg-light .nav-item a").removeClass( "active" );
        loadtable(links); 
        $("#objective").addClass("active");
    });
    $("#skill").click(function(){
        links="skill";
        $(".bg-light .nav-item a").removeClass( "active" );
        loadtable(links); 
        $("#skill").addClass("active");
    });

        function loadtable(link){
            $.ajax({
               url:"php/loadtable.php",
               method: "POST",
               data: { link:link },
               success: function(response){
                   $(".row").html(response);
               }
            });
        }

loadtable(links);

    });

    // add word template js cod
$("#wordcv").click(function(){
        $(".bg-light .nav-item a").removeClass( "active" ); 
        $("#wordcv").addClass("active");
        $.ajax({
               url:"php/add-wordcv.php",
               method: "POST",
               success: function(response){
                   $(".row").html(response);
               }
            });



        });
   
</script>
<?php }else{
    header("location: ../index.php");

}

}?>
