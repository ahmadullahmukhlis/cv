<?php
  include "php/config.php";
?>
<div class="container-fluid">
<div class="row my-3">
    <?php
    $sql="SELECT * FROM wordtemplate";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
       
       while($row = mysqli_fetch_assoc($result)){ 
    ?>
    <div class="col-md-3 col-sm-6 my-3" >
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image" id="<?php echo $row['id'] ?>" >
                    <img class="pic-1" src="admin/upload-img/<?php echo $row['imgfile'] ?>" id="<?php echo $row['id'] ?>">
                    <img class="pic-2" src="admin/upload-img/<?php echo $row['imgfile'] ?>"id="<?php echo $row['id'] ?>">
                </a>
                <ul class="product-links">
                    <li><a href="admin/upload-template/<?php echo $row['wordfile'] ?>"id="<?php echo $row['id'] ?>">download</a></li>
                    <li><a href="#" id="<?php echo $row['id'] ?>"><i class="fa fa-eye"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="admin/upload-template/<?php echo $row['wordfile'] ?>" id="<?php echo $row['id'] ?>" download>download</a></h3>
            </div>
        </div>
    </div>
    <?php }}?>
</div>
</div>  
<script>
   $(document).ready(function(){
    $(document).on("click",".product-grid a , .product-grid img",function(e){
        e.preventDefault();
        var id=$(this).attr("id");
        $.ajax({
    url: "cv/single-cv.php",
    type:"POST",
    data: {id :id} ,
    success:function(data){
      $("#cv-body").html("");
        $("#cv-body").html(data);
      
      }  
  });
        

    });

   });
</script>