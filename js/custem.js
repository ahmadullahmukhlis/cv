
 $(document).ready(function(){
// LOGIN COODING 
$("#login-modal-btn").click(function(){
  login();
}); 
//login in function declering
function login(){
  $.ajax({
    url:"php/test-login.php",
    method: "POST",
    success: function(data){
      if(data==0){
        $("#warrning-message").html("");   
        $("#log-in").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you are already login please dont try again");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
      }else if(data==1){
        $("#log-in").modal("show");
        $("#log-in").on('shown.bs.modal', function () {
          var lemail= $("#login-email").val('');
          var lpassword= $("#login-password").val('');
          $("#login-btn").click(function(){
            var lemail= $("#login-email").val();
            var lpassword= $("#login-password").val();
            if(lemail==""||lpassword==""){
              $("#warrning-message").html("");
              $("#log-in").modal("hide");
              $("#warrning").modal("show");
              $("#warrning-message").append("all feilds are required");
              setTimeout(function(){
                 $("#warrning").modal("hide");
             }, 5000);
            }else{
              $.ajax({
                url:"php/login.php",
                method: "POST",
                data: { email:lemail,password:lpassword },
                success: function(response){
                 if (response==0) {
                  $("#warrning-message").html("");
                  $("#log-in").modal("hide");
                  $("#warrning").modal("show");
                  $("#warrning-message").append("all feilds are required.");
                  setTimeout(function(){
                     $("#warrning").modal("hide");
                 }, 5000);
                 }else if(response==2){
                  $("#warrning-message").html("");
                  $("#log-in").modal("hide");
                  $("#warrning").modal("show");
                  $("#warrning-message").append("email  and Password are not matched.");
                  setTimeout(function(){
                     $("#warrning").modal("hide");
                 }, 5000);
                 }else{
                  $("#success-message").html("");
                  $("#log-in").modal("hide");
                  $("#success").modal("show");
                  $("#success-message").append("you are login successfully");
                  setTimeout(function(){
                     $("#success").modal("hide");
                 }, 5000);
                 }
                }
             }); 
            }
          });
        });
        $("#log-in").on('hidden.bs.modal', function () {
          var lemail= $("#login-email").val('');
          var lpassword= $("#login-password").val('');
        });
      }
    }
  });
}

// registeration  COODING 
$("#register-modal-btn").click(function(){
  $("#registration").modal("show");
  registration();
}); 
// resgistration function cod 
function registration(){
  $("#registration").on('shown.bs.modal', function () {
    var name= $("#name").val('');
    var email= $("#email").val('');
    var password= $("#password").val('');
    $("#register-btn").click(function(){
      var name= $("#name").val();
      var email= $("#email").val();
      var password= $("#password").val();
      if(name==""||email==""||password==""){
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("all feild required");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       
      }else{
        $.ajax({
          url:"php/register.php",
          method: "POST",
          data: { name:name,email:email,password:password },
          success: function(response){
            console.log(response);
           if (response==0) {
            $("#warrning-message").html("");
            $("#registration").modal("hide");
            $("#warrning").modal("show");
            $("#warrning-message").append("your email is already exist  please login with this email.");
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);
           }
           else if(response==2){
            $("#warrning-message").html("");
            $("#registration").modal("hide");
            $("#warrning").modal("show");
            $("#warrning-message").append("query failled");
            setTimeout(function(){
               $("#warrning").modal("hide");
           }, 5000);
           } else{
            $("#success-message").html("");
            $("#registration").modal("hide");
            $("#success").modal("show");
            $("#success-message").append("your acount is created successfully");
            setTimeout(function(){
               $("#success").modal("hide");
           }, 5000);
          }
          }
       }); 
      }
    });
  });
  $("#registration").on('hidden.bs.modal', function () {
    var name= $("#name").val('');
    var email= $("#email").val('');
    var password= $("#password").val('');
  });

}


//logout btn code
$("#logout").click(function(){
  $.ajax({
    url:"php/logout.php",
    method: "POST",
    success: function(response){
    if(response==1){
      $("#success-message").html("");
      $("#registration").modal("hide");
      $("#success").modal("show");
      $("#success-message").append("you log out successfully");
      setTimeout(function(){
         $("#success").modal("hide");
     }, 5000);
    }else{
      $("#warrning-message").html("");
      $("#registration").modal("hide");
      $("#warrning").modal("show");
      $("#warrning-message").append("some problem oocoured");
      setTimeout(function(){
         $("#warrning").modal("hide");
     }, 5000);

    }
    }

 }); 
});

// download btn worked as pdf fiel
$('#btn').click(function(){
    const element = document.querySelector('main');
        html2pdf(element);
        const opt = {
      filename: 'mycv.pdf',
      margin: 1,
      image: {type: 'jpeg', quality:0.9},
      jsPDF: {format: 'letter', orientation: 'portrait'}
    };
    
    // Old monolithic-style usage:
    html2pdf(element, opt);
    // Adds page-breaks according to the CSS break-before, break-after, and break-inside properties.
    // Only recognizes always/left/right for before/after, and avoid for inside.
    html2pdf().set({
      pagebreak: {mode: 'css' }
    });
       });
       // get start btn 
       $("#get-start , #get-start-btn").click(function(){
        creatcvform();
       });
// load the creat cv form data function 
function creatcvform(){
  $.ajax({
    url:"cv/index.php",
    method: "POST",
    success: function(response){
      if(response==0){
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and make cv");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
         creatcvform();
       });
       registration();
      }else{
        $("#cv-body").html(response);
      }
    }
 }); 
}


// creative click btn cv
$("#creative").click(function(){
  loadcreativecv();
});
// creativecv load function or first cv
function loadcreativecv(){
  $.ajax({
    url: "cv/creativecv.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and download your  cv");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        loadcreativecv();
       });
       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}

// creative 2 click btn cv
$("#creative2").click(function(){
  loadcreative2cv();
});
// creativecv load function or first cv
function loadcreative2cv(){
  $.ajax({
    url: "cv/creative2cv.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and download your  cv");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        loadcreative2cv();
       });
 

       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}
// creative 3 click btn cv
$("#creative3").click(function(){
  loadcreative3cv();
});
// creativecv load function or first cv
function loadcreative3cv(){
  $.ajax({
    url: "cv/creative3cv.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and download your  cv");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        loadcreative3cv();
       });
       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}

// creative 3 click btn cv
$("#info1").click(function(){
  info1cv();
});
// creativecv load function or first cv
function info1cv(){
  $.ajax({
    url: "cv/info1cv.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and download your  cv");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        info1cv();
       });
       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}
// profetional 3 click btn cv
$("#pro3").click(function(){
  pro3cv();
});
function pro3cv(){
  $.ajax({
    url: "cv/pro3cv.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and download your  cv");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        pro3cv();
       });
       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}
// profetional 4 click btn cv
$("#pro4").click(function(){
  pro4cv();
});
function pro4cv(){
  $.ajax({
    url: "cv/pro4cv.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and download your  cv");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        pro4cv();
       });
       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}
// profetional 5 click btn cv
$("#pro5").click(function(){
  pro5cv();
});
function pro5cv(){
  $.ajax({
    url: "cv/profetional2cv.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and download your  cv");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        pro5cv();
       });
       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}
// profetional  click btn cv
$("#pro1").click(function(){
  pro1cv();
});
function pro1cv(){
  $.ajax({
    url: "cv/profetionalcv.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and download your  cv");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        pro1cv();
       });
       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}
//total cv template looking js
$("#total-cv").click(function(){
  totalcv();
});
function totalcv(){
  $.ajax({
    url: "cv/total-cv.php",
    method:"GET",
    success:function(data){
      $("#cv-body").html("");
        $("#cv-body").html(data);
      }  
  });
}
// word template loade btn 
$("#word-template").click(function(){
  $.ajax({
    url: "cv/word-cv.php",
    method:"GET",
    success:function(data){
      $("#cv-body").html("");
        $("#cv-body").html(data);
      
      }  
  });
});
// recomendation latter downlodaing btn 
$("#download-latter").click(function(){
  recomandation();
});
// recomandation latter download btn function 
function recomandation(){
  $.ajax({
    url: "cv/recmandation-latter.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and download your  built latter");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        recomandation();
       });
       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}
// recomendation latter form and date btn
$("#creat-latter").click(function(){
  recomandationform();
});
// recomandation latter download btn function 
function recomandationform(){
  $.ajax({
    url: "cv/recomendation-form.php",
    method:"GET",
    success:function(data){
      if (data==0) {
        $("#cv-body").html("");
        $("#warrning-message").html("");
        $("#registration").modal("hide");
        $("#warrning").modal("show");
        $("#warrning-message").append("you have to login and built your latter  ");
        setTimeout(function(){
           $("#warrning").modal("hide");
       }, 5000);
       $("#warrning").on('hidden.bs.modal', function () {
        login();
       });
       $("#log-in").on('hidden.bs.modal', function () {
        recomandationform()
       });
       registration();
      } else{
        $("#cv-body").html(data);
      } 
      }  
  });
}
// word cv looking as single page and download
$(document).on("click","#word.product-grid a ,#word .product-grid img",function(e){
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