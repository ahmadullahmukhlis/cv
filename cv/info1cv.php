<?php
  include "php/config.php";
  session_start();

  if(!isset($_SESSION["email"])){
  echo 0;
  }else{
    $idkey=$_SESSION['id'];
?>
<style>
    
body {
  background-color: #d8d8d8;
  line-height: 1.5;
  margin: 10px auto;
  max-width: 2224px;
  text-transform: capitalize; }

main {
  margin: 0 auto;
  box-sizing: border-box;
  padding: 0.5in;
  width: 8.5in;
  height: 11in;
  background-color: white;
  box-shadow: 0 3px 8px -3px rgba(0, 0, 0, 0.7);
  font-family: 'Times New Roman', Times, serif;
  color: #333333; }
</style>
<body>
<div class="col-6 mx-auto text-center my-3">
<button id="btn" class="bnt btn-success ">
        download as pdf
    </button>
</div>
    <main>
<div class="container-fluid" id="classic-cv">
    <div class="row">
<div class="col-3"id="p-info">
                <?php 
                $psql="SELECT * FROM contect WHERE idkey='{$idkey}'";
                $prsult = mysqli_query($conn,$psql);
                if(mysqli_num_rows($prsult) > 0){
                   $prow = mysqli_fetch_assoc($prsult);
                ?>
        <div id="cv-img" >
            <img src="cv/upload-img/<?php echo $prow['cimg']; ?>" alt="not found cv img"  class="img-fluid mx-auto d-block">
        </div>
        <div id="profile">
        <?php 
                $osql="SELECT * FROM objective WHERE idkey='{$idkey}'";
                $orsult = mysqli_query($conn,$osql);
                if(mysqli_num_rows($orsult) > 0){
                    echo ' <h6>profile</h6>
                    <hr>';
                   $orow = mysqli_fetch_assoc($orsult);
                    ?>
                   <p> 
                     <?php echo $orow['odesc']; ?> 
                    </p>
                    <?php }?>
           
        
        </div>
    <div id="contact">  
        <h6>contacts</h6>
        <hr>
        <p><span class="px-2"><i class="fas fa-map-marker-alt"></i></span><?php echo $prow['caddress']; ?> </p>
                    <p><span class="px-2"><i class="fas fa-phone"></i></span><?php echo $prow['cphone']; ?></p>
                    <p><span class="px-2"><i class="fas fa-at"></i></span><?php echo $prow['cemail']; ?></p>
                    <p><span class="px-2"><i class="fab fa-facebook-f"></i></span><?php echo $prow['cfacebook']; ?></p>
    </div>
    <?php }?>
    <div id="intrest">
    <?php 
                    $isql="SELECT * FROM intrest WHERE idkey='{$idkey}'";
                    $iresult=mysqli_query($conn,$isql);
                    if(mysqli_num_rows($iresult) > 0){
                        echo "        <h6>intrest</h6>
                        <hr>
                        <ol>";
                        while($irow = mysqli_fetch_assoc($iresult)){ 
                    ?>
        <li><?php echo $irow['iname'] ?></li>
        <?php }?>
        </ol>
    </div>
    <?php }?>
</div>
<div class="col-9  px-0"id="main">
<div id="name" class="py-md-6">
                <?php 
                $psql="SELECT * FROM contect WHERE idkey='{$idkey}'";
                $prsult = mysqli_query($conn,$psql);
                if(mysqli_num_rows($prsult) > 0){
                   $prow = mysqli_fetch_assoc($prsult);
                ?>
    <h2><?php echo $prow['cname']; ?></h2>
    <p><?php echo $prow['cmission']; ?></p>
    <?php }?>
</div>
<div id="experience">
    
    <div class="row" id="p-experience">
                    <?php 
                    $exsql="SELECT * FROM experience WHERE idkey='{$idkey}'";
                    $exresult=mysqli_query($conn,$exsql);
                    if(mysqli_num_rows($exresult) > 0){
                        echo "<h6>experiences</h6>
                        <hr>";
                        while($exrow = mysqli_fetch_assoc($exresult)){ 
                    ?>
        <div class="col-4" id="start-date">
        <h6><?php echo $exrow['major'] ?></h6>
            <small><?php echo $exrow['sdate'] ?> - <?php echo $exrow['edate'] ?></small>
        </div>
        <div class="col-8" id="comp-desc">
        <h6><?php echo $exrow['comp-name'] ?></h6>
        <p><?php echo $exrow['expdesc'] ?></p>
        </div>
        <?php }?>
    </div>
    <?php }?>
<div id="e-s-i" class="row px-0">
    <div class="col-4" id="education">
    <?php 
                    $esql="SELECT * FROM education WHERE idkey='{$idkey}'";
                    $eresult=mysqli_query($conn,$esql);
                    if(mysqli_num_rows($eresult) > 0){
                        echo "<h6>education</h6>
                        <hr> ";
                        while($erow = mysqli_fetch_assoc($eresult)){ 
                    ?>   
       <div class="edu-desc">
        <h5><?php echo $erow['major'] ?></h5>
        <h6><?php echo $erow['uname'] ?></h6>
        <small><?php echo $erow['sdate'] ?> - <?php echo $erow['edate'] ?></small>
       </div>
       <?php }?>
    </div>
    <?php }?>
    <div class="col-8" id="skile">
                <?php 
                    $ssql="SELECT * FROM skile WHERE idkey='{$idkey}'";
                    $sresult=mysqli_query($conn,$ssql);
                    if(mysqli_num_rows($sresult) > 0){
                        echo " <h6>skile</h6>
                        <hr> ";
                        while($srow = mysqli_fetch_assoc($sresult)){ 
                    ?>
       
        <div class="row" id="skile-desc">
            <div class="col-6" id="skile-head">
                <h5><?php echo $srow['shead'] ?></h5>
            </div>
                <div class="progress col-6" >
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $srow['sper'] ?>" aria-valuenow="<?php echo $srow['sper'] ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $srow['sper'] ?></div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>
</div>
    </div>
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('#btn').click(function(){
const element = document.querySelector('main');
    html2pdf(element);
    const opt = {
  filename: 'myPage.pdf',
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

</script>


</body>
</html>
<?php } ?>