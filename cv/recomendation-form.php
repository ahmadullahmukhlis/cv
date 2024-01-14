<?php
  include "php/config.php";
  session_start();

  if(!isset($_SESSION["email"])){
  echo 0;
  }else{
    $idkey=$_SESSION['id'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
                <h2 class="text-center my-2">recommendation latter information</h2>
                <form id="recomend-form">
                <div class="input-group mb-3">
                <span class="input-group-text" >chose recommendation type</span>
           <select class="form-select" id="type" name="type">
            <option disabled selected>Choose your recommendation type.</option>
              <option value="primary school">primary school</option>
              <option value="high school">high school</option>
            <option value="higher secondary school ">higher secondary school </option>
            <option value="college">college</option>
            <option value="university">university</option>
            <option value="scholership" selected>scholership</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" >teacher full name</span>
            <input type="text" class="form-control" id="teacher" placeholder="teacher full name" name="teacher" >
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" >student full name</span>
            <input type="text" class="form-control" id="student" placeholder="student full name" name="student" >
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" >time  </span>
            <input type="text" class="form-control" id="time" placeholder="time you know the student like 3 years" name="time" >
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" > name of place </span>
            <input type="text" class="form-control" id="place" placeholder="name of the place school college or university" name="place" >
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" > date   </span>
            <input type="date" class="form-control" id="date" name="date" >
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" >email  </span>
            <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" >
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" >phone </span>
            <input type="tel" class="form-control" id="phone" placeholder="+093 xxxxxxxxxxxx" name="phone" >
          </div>
          <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success"   name="btn" value="recommendation submit" >
          </div>




                </form>



        </div>
    </div>
</div>
<script>
  // iobjective  data submite js cod
$("#recomend-form").on("submit",function(e){
    e.preventDefault();
    var tname=$("#teacher").val();
    var sname=$("#student").val();
    var type=$("#type").val();
    var time=$("#time").val();
    var place=$("#place").val();
    var date=$("#date").val();
    var email=$("#email").val();
    var phone=$("#phone").val();
    // empty form function
    function emptyform(){
      var tname=$("#teacher").val("");
    var sname=$("#student").val("");
    var type=$("#type").val("");
    var time=$("#time").val("");
    var place=$("#place").val("");
    var date=$("#date").val("");
    var email=$("#email").val("");
    var phone=$("#phone").val("");
    }
if(tname==""||sname==""||type==""||time==""||place==""||date==""||email==""){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
               emptyform();
           }, 5000);  

      }else{
        var formData= new FormData(this);
        $.ajax({
      url:"cv/php/save-recomend.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        if (response==0) {
          $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            setTimeout(function(){
               $("#warrning").modal("hide");
               emptyform();
           }, 5000);
           }
           else if(response==1){
            $("#success-message").html("");
            $("#success").modal("show");
            $("#success-message").append("your data is saved successfully");
            emptyform();
            setTimeout(function(){
               $("#success").modal("hide");
               
           }, 5000);

          }else if(response==2){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("database query failled");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
               
           }, 5000);
          }
          }
    });
      }
  });
</script>
<?php }?>