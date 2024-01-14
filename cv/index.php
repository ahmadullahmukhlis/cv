
<?php
  include "php/config.php";
  session_start();

  if(!isset($_SESSION["email"])){
  echo 0;
  }else{
?>
<div class="container-fluid">
    <div class="row">
    <div class="accordion  accordion-flush" id="cv-form">
  <div class="accordion-item">
    <h2 class="accordion-header " id="profile">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#profile" aria-expanded="true" aria-controls="profile" id="p-btn">
       cv  profile 
      </button>
    </h2>
    <div id="profile" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#cv-form">
      <div class="accordion-body">  
<form  id="profile-form">
      <div class="row">
        <div class="col-md-6">
        <div class="input-group  mb-3">
              <input type="file" class="form-control" name="file" id="img">
              <label class="input-group-text" for="img">Upload cv image</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="name">name</span>
            <input type="text" class="form-control"  id="name"placeholder="full name" name="name" aria-describedby="name">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="name">birth date</span>
            <input type="date" class="form-control"  id="birthdate"name="birthdate" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
        <label class="form-check-label input-group-text" >gender </label>
                        <div class="form-check  mx-4 ">
                            <input class="form-check-input" type="radio" name="gender" value="male" id="male">
                            <label class="form-check-label" for="male">male </label>
                        </div>
                         <div class="form-check mx-4 ">
                            <input class="form-check-input" type="radio" name="gender" value="female" id="female" checked>
                            <label class="form-check-label" for="female"> female </label>
                        </div>
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="professions"  >professions</span>
            <input type="text" class="form-control" id="professions"placeholder="professions"  name="profession">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="Address" >Address</span>
            <input type="text" class="form-control" id="Address" placeholder="Address" name="address" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="email">email</span>
            <input type="text" class="form-control"  id="email" placeholder="example@gmail.com" name="email">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="phone" >phone</span>
            <input type="text" class="form-control"  id="phone" placeholder="+93xxxxxxxxxxx" name="phone" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >facebook</span>
            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="www.facebook.com/nxxx.php" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success" id="profile-submit-btn" value="profile submit" >
        </div>
          </div>
      </div>
      </form>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header " id="education">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#education" aria-expanded="false" aria-controls="collapseTwo">
        education 
      </button>
    </h2>
    <div id="education" class="accordion-collapse collapse" aria-labelledby="education" data-bs-parent="#cv-form">
      <div class="accordion-body">
        
<form id="education-form">
      <div class="row">
        <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="uname"> university name</span>
            <input type="text" class="form-control" id="uname" name="uname" placeholder="university name" aria-label="name" aria-describedby="name">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
        <span class="input-group-text" for="profession"  >professions</span>
            <input type="text" class="form-control" id="profession" placeholder="professions"  name="professions">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="sdate">start date </span>
            <input type="date" class="form-control" name="sdate" id="sdate" placeholder="25/4/2021" aria-label="Address" aria-describedby="Address">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="edate">end date</span>
            <input type="date" class="form-control" name="edate"  id="edate"  >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" for="gpa">GPA</span>
            <input type="number" class="form-control" id="gpa" name="gpa" placeholder="3.5" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success" id="education-submit-btn" value="profile submit" >
        </div>
          </div>
      </div>
      </form>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header " id="experience">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#experience" aria-expanded="false" aria-controls="collapseThree">
        work  experience
      </button>
    </h2>
    <div id="experience" class="accordion-collapse collapse" aria-labelledby="experience" data-bs-parent="#cv-form">
      <div class="accordion-body">
        
      <form id="work-experience-form">
      <div class="row">
        <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" > company name</span>
            <input type="text" class="form-control" id="cname"  name="cname">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >professions</span>
            <input type="text" class="form-control" id="cprofessions" name="profetion" name="profetion" placeholder="professions" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >experience start date </span>
            <input type="date" class="form-control" id="csdate" name="sdate">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >experience end date</span>
            <input type="date" class="form-control"id="cedate" name="edate" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >work experience description</span>
            <input type="text" class="form-control" id="cdesc" name="desc" placeholder="say something about your work experience" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success" id="experience-submit" value="profile submit" >
        </div>
          </div>

      </div>
      </form>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header " id="activity">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#activity" aria-expanded="false" aria-controls="collapseThree">
        activities
      </button>
    </h2>
    <div id="activity" class="accordion-collapse collapse" aria-labelledby="activity" data-bs-parent="#cv-form">
      <div class="accordion-body">
        
      <form id="activity-form">
      <div class="row">
        <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" > company name</span>
            <input type="text" class="form-control" id="acname"  name="name" placeholder="company name" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >professions</span>
            <input type="text" class="form-control" id="acprofessions" name="professions" placeholder="professions" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >activity start date </span>
            <input type="date" class="form-control" id="acsdate" placeholder="25/4/2021" name="sdate">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >activity end date</span>
            <input type="date" class="form-control" id="acedate" name="edate" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >activities description</span>
            <input type="text" class="form-control" id="acdesc" placeholder="say something about your activities " name="desc">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success" id="profile-submit" value="save activites " >
        </div>
          </div>

      </div>
      </form>
      </div>
    </div>
  </div>
<div class="accordion-item">
    <h2 class="accordion-header " id="skill">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#skill" aria-expanded="false" aria-controls="skill">
        skills
      </button>
    </h2>
    <div id="skill" class="accordion-collapse collapse" aria-labelledby="skill" data-bs-parent="#cv-form">
      <div class="accordion-body">
        
      <form id="skill-form">
      <div class="row">
        <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" > skill heading</span>
            <input type="text" class="form-control"id="shead" name="head" placeholder="skill heading" >
        </div>
          </div>
          <div class="col-md-6">
          <div class="input-group mb-3">
           <select class="form-select" id="head-per" name="head-per">
            <option disabled selected>Choose your experience in this skill.</option>
              <option value="25%">25%</option>
              <option value="35%">35%</option>
            <option value="50%">50%</option>
            <option value="65%">65%</option>
            <option value="75%">75%</option>
            <option value="85%">85%</option>
            <option value="100%">100%</option>
            </select>
          </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >skill  description</span>
            <input type="text" class="form-control" id="sdesc" placeholder="say something about your skill " name="sdesc" >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success" id="profile-submit" value="profile submit" >
        </div>
          </div>
      </div>
      </form>
      </div>
    </div>
  </div>

  
<div class="accordion-item">
    <h2 class="accordion-header " id="award">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#award" aria-expanded="false" aria-controls="award">
        awards
      </button>
    </h2>
    <div id="award" class="accordion-collapse collapse" aria-labelledby="award" data-bs-parent="#cv-form">
      <div class="accordion-body">
        
      <form id="award-form">
      <div class="row">
        <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" > award  date</span>
            <input type="date" class="form-control" name="date"  id="adate">
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >award  description</span>
            <input type="text" class="form-control" id="adesc" name="desc" placeholder="say something about your award " >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success" id="award-subbmite" value="award submit" >
        </div>
          </div>
      </div>
      </form>
      </div>
    </div>
  </div>
 
  <div class="accordion-item">
    <h2 class="accordion-header " id="intrest">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intrest" aria-expanded="false" aria-controls="intrest">
        intrets
      </button>
    </h2>
    <div id="intrest" class="accordion-collapse collapse" aria-labelledby="award" data-bs-parent="#cv-form">
      <div class="accordion-body">
        
      <form id="intrest-form">
      <div class="row">
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >intrest</span>
            <input type="text" class="form-control" id="intrests" name="intrest" placeholder="write that hobbies in which you are intrest " >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success" id="profile-submit" value="save intres" >
        </div>
          </div>
      </div>
      </form>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header " id=" objective">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#objective" aria-expanded="false" aria-controls="objective">
        objectives
      </button>
    </h2>
    <div id="objective" class="accordion-collapse collapse" aria-labelledby="objective" data-bs-parent="#cv-form">
      <div class="accordion-body">
        
      <form id="objective-form">
      <div class="row">
          <div class="col-md-6">
        <div class="input-group mb-3">
            <span class="input-group-text" >objectives</span>
            <input type="text" class="form-control" name="objective" id="objectives"placeholder="write some thing about your self " >
        </div>
          </div>
          <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success" id="profile-submit" value="save objective" >
        </div>
          </div>
      </div>
      </form>
      </div>
    </div>
  </div>

</div>
    </div>
</div>

<script>
  $(document).ready(function(){
    // profile form js code
    $("#profile-form").on("submit",function(e){
    e.preventDefault();
    var img=$("#img").val();
    var name=$("#name").val();
    var male=$("#male").val();
    var female=$("#female").val();
    var birthdate=$("#birthdate").val();
    var address=$("#Address").val();
    var profession=$("#professions").val();
    var email=$("#email").val();
    var phone=$("#phone").val();
    var facebook=$("#facebook").val();
    // empty form function
    function emptyform(){
      var male=$("#male").val("");
    var female=$("#female").val("");
    var birthdate=$("#birthdate").val("");
      var img=$("#img").val("");
    var name=$("#name").val("");
    var address=$("#Address").val("");
    var profession=$("#professions").val("");
    var email=$("#email").val("");
    var phone=$("#phone").val("");
    var facebook=$("#facebook").val("");
    }
if(img==""||name==""||address==""||profession==""||email==""||phone==""||facebook==""||birthdate==""){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
              
           }, 5000);  

      }else{
        var formData= new FormData(this);
    $.ajax({
      url:"cv/php/profile.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        console.log(response);
        if (response==0) {
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("just you can upload jpg png jpeg gif file.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
              
           }, 5000);
           }
           else if(response==1){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("just you can upload 13 MB image file");
            setTimeout(function(){
               $("#warrning").modal("hide");
               emptyform();
           }, 5000);
           }
           else if(response==2){
            $("#success-message").html("");
            $("#success").modal("show");
            $("#success-message").append("your data is saved successfully");
            emptyform();
            setTimeout(function(){
               $("#success").modal("hide");
              
           }, 5000);
          }else if(response==3){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("database query failled");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
              
           }, 5000);
           }
            else if(response==4){
            $("#success-message").html("");
            $("#registration").modal("hide");
            $("#success").modal("show");
            $("#success-message").append("your acount is created successfully");
            emptyform();
            setTimeout(function(){
               $("#success").modal("hide");
              
           }, 5000);
          }
          }
    });
      }
  });
  // education data submite js cod
  $("#education-form").on("submit",function(e){
    e.preventDefault();
    var name=$("#uname").val();
    var profession=$("#profession").val();
    var sdate=$("#sdate").val();
    var edate=$("#edate").val();
    var gpa=$("#gpa").val();
    // empty form function
    function emptyform(){
      var name=$("#uname").val("");
    var professions=$("#profession").val("");
    var sdate=$("#sdate").val("");
    var edate=$("#edate").val("");
    var gpa=$("#gpa").val("");
    }
if(name==""||professions==""||sdate==""||edate==""||gpa==""){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
               
           }, 5000);  

      }else{
        var formData= new FormData(this);
    $.ajax({
      url:"cv/php/education.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        if (response==0) {
          $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
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
              // emptyform();
           }, 5000);
          }
          }
    });
      }
  });
 // work experience  data submite js cod
 $("#work-experience-form").on("submit",function(e){
    e.preventDefault();
    var name=$("#cname").val();
    var professions=$("#cprofessions").val();
    var sdate=$("#csdate").val();
    var edate=$("#cedate").val();
    var desc=$("#cdesc").val();
    // empty form function
    function emptyform(){
      var name=$("#cname").val("");
    var professions=$("#cprofessions").val("");
    var sdate=$("#csdate").val("");
    var edate=$("#cedate").val("");
    var desc=$("#cdesc").val("");

    }
if(name==""||professions==""||sdate==""||edate==""||desc==""){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
              // emptyform();
           }, 5000);  

      }else{
        var formData= new FormData(this);
        $.ajax({
      url:"cv/php/experience.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        if (response==0) {
          $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
              // emptyform();
           }, 5000);
           }
           else if(response==1){
            $("#success-message").html("");
            $("#success").modal("show");
            $("#success-message").append("your data is saved successfully");
            emptyform();
            setTimeout(function(){
              
               $("#success").modal("hide");
              // emptyform();
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
  // activity  data submite js cod
 $("#activity-form").on("submit",function(e){
    e.preventDefault();
    var name=$("#acname").val();
    var profession=$("#acprofessions").val();
    var sdate=$("#acsdate").val();
    var edate=$("#acedate").val();
    var desc=$("#acdesc").val();
    // empty form function
    function emptyform(){
      var name=$("#acname").val("");
    var profession=$("#acprofessions").val("");
    var sdate=$("#acsdate").val("");
    var edate=$("#acedate").val("");
    var desc=$("#acdesc").val("");

    }
if(name==""||profession==""||sdate==""||edate==""||desc==""){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);  

      }else{
        var formData= new FormData(this);
        $.ajax({
      url:"cv/php/activity.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        if (response==0) {
          $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
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
  
  // skills   data submite js cod
 $("#skill-form").on("submit",function(e){
    e.preventDefault();
    var head=$("#shead").val();
    var headper=$("#head-per").val();
    var desc=$("#sdesc").val();
    // empty form function
    function emptyform(){
      var head=$("#shead").val("");
    var headper=$("#head-per").val("");
    var desc=$("#sdesc").val("");

    }
if(head==""||headper==""){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);  

      }else{
        var formData= new FormData(this);
        $.ajax({
      url:"cv/php/skill.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        console.log(response);
        if (response==0) {
          $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);
           }
           else if(response==1){
            $("#success-message").html("");
            $("#success").modal("show");
            $("#success-message").append("your data is saved successfully");
            emptyform();
            setTimeout(function(){
               $("#success").modal("hide");
               alert("please add more skills  ");
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
  // award   data submite js cod
 $("#award-form").on("submit",function(e){
    e.preventDefault();
    var date=$("#adate").val();
    var desc=$("#adesc").val();
    // empty form function
    function emptyform(){
      var date=$("#adate").val("");
    var desc=$("#adesc").val("");


    }
if(date==""||desc==""){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);  

      }else{
        var formData= new FormData(this);
        $.ajax({
      url:"cv/php/award.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        console.log(response);
        if (response==0) {
          $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);
           }
           else if(response==1){
            $("#success-message").html("");
            $("#success").modal("show");
            $("#success-message").append("your data is saved successfully");
            emptyform();
            setTimeout(function(){
               $("#success").modal("hide");
               alert("please add more award if you have ");
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
// intrest  data submite js cod
$("#intrest-form").on("submit",function(e){
    e.preventDefault();
    var intrest=$("#intrests").val();
    // empty form function
    function emptyform(){
      var intrest=$("#intrests").val("");
    }
if(intrest==""){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);  

      }else{
        var formData= new FormData(this);
        $.ajax({
      url:"cv/php/intrest.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        console.log(response);
        if (response==0) {
          $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);
           }
           else if(response==1){
            $("#success-message").html("");
            $("#success").modal("show");
            $("#success-message").append("your data is saved successfully");
            emptyform();
            setTimeout(function(){
               $("#success").modal("hide");
               alert("please add more hobbies if you intrested ");
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
// iobjective  data submite js cod
$("#objective-form").on("submit",function(e){
    e.preventDefault();
    var objective=$("#objectives").val();
    // empty form function
    function emptyform(){
      var objective=$("#objectives").val("");
    }
if(objective==""){
            $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);  

      }else{
        var formData= new FormData(this);
        $.ajax({
      url:"cv/php/objective.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        if (response==0) {
          $("#warrning-message").html("");
            $("#warrning").modal("show");
            $("#warrning-message").append("all feild required please feil the feild.");
            emptyform();
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);
           }
           else if(response==1){
            $("#success-message").html("");
            $("#success").modal("show");
            $("#success-message").append("your data is saved successfully");
            setTimeout(function(){
               $("#success").modal("hide");
               emptyform();
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
});

</script>
<?php } ?>

