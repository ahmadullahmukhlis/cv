<?php
  include "php/config.php";
?>
<style>
    .col-8{
        display: inline-block;
    }
    .col-4{
        display: inline-block;
    }
</style>
<?php
    $id=$_POST['id'];
    $sql="SELECT * FROM wordtemplate WHERE id='{$id}'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
       
       $row = mysqli_fetch_assoc($result)
    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-4">
            <h1 class="text-center">free  cv template download in word</h1>
        </div>
    
        <div class="col-8">
            <img src="admin/upload-img/<?php echo $row['imgfile'] ?>" alt="" class="img-fluid">
            
            
        </div>
        <div class="col-3 text-center">
        <a href="admin/upload-template/<?php echo $row['wordfile'] ?>"  class="btn btn-success my-3">download cv template</a>
            <h1 class="my-3"> download</h1>
            <p><?php echo $row['description'] ?></p>
        </div>

    </div>
</div>
<?php }?>