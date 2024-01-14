<div class="container-fluid">
    <div class="row">
      <div class="col-md-6 mx-auto" >
            <form id="form-data">
            <div class="input-group  mb-3">
              <input type="file" class="form-control" name="word-file" id="word-file">
              <label class="input-group-text" for="word-file">Upload word cv template</label>
        </div>
             <div class="input-group  mb-3">
              <input type="file" class="form-control" name="img-file" id="img-file">
              <label class="input-group-text" for="img-file">Upload cv image</label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" for="descrip">description</span>
            <input type="text" class="form-control"  id="descrip" placeholder="descreption about word cv" name="desc">
        </div>
        <div class="input-group mb-3">
            <input type="submit" class="form-control btn-success"  id="add-btn" value="word cv submit btn" >
        </div>
            </form>
            <div id="message" class="text-center alert "></div>
      </div>
    </div>
</div>

<script>
    $(document).ready(function(){
      $("#form-data").on("submit",function(e){
    e.preventDefault();
    var word= $("#word-file").val();
    var img=$("#img-file").val();
    var desc=$("#descrip").val();
    function empty(){
      var word= $("#word-file").val("");
    var img=$("#img-file").val("");
    var desc=$("#descrip").val(""); 
    }
    if(word==""||img==""){
      $("#message").html("<div class='text-center alert alert-danger'>all feilds required</div>");
      setTimeout(function(){
          $("#message").html('');
       }, 5000);
      empty();
    }
    else{
      var formData= new FormData(this);
    $.ajax({
      url:"php/save-wordcv.php",
      method:"POST",
      data: formData,
      contentType:false,
      processData:false,
      success : function(response){
        empty();
        $("#message").html(response);
        setTimeout(function(){
          $("#message").html('');
       }, 5000);
      }
      });

    }
      });
    });
</script>