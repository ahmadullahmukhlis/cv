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
  color: #333333;
  text-overflow: auto !important;
    overflow-x: auto !important ;
    overflow-x: scroll;
  
  }
 main img{
      width: 100px;
      height: 100px !important;
  }
  p{
      font-size: 10px !important;
  }
</style>
<body>
<div class="col-6 mx-auto text-center my-3">
<button id="btn" class="bnt btn-success ">
        download as pdf
    </button>
</div>
   
        <div class="container-fluid" id="creative3">
        <main>
            <div class="row">
            <div class="col-4" id="l-free"></div>
            <div class="col-8" id="r-free"></div>
            </div>
<!-- the above div for free and solve problem -->
                <?php 
                $psql="SELECT * FROM contect WHERE idkey='{$idkey}'";
                $prsult = mysqli_query($conn,$psql);
                if(mysqli_num_rows($prsult) > 0){
                   $prow = mysqli_fetch_assoc($prsult);
                ?>
        <div class="row" id="name-img">
            <div class="col-10" id="name">
        <h1><?php echo $prow['cname']; ?></h1>
        <small><?php echo $prow['cmission']; ?></small>
            </div>
            <div class="col-2" id="img">
                <img src="cv/upload-img/<?php echo $prow['cimg']; ?>" alt="" class="img-fluid" >
            </div>
        </div>
       <div class="row" id="cv-body">
       <div class="col-4" id="left-side">
            <div id="contect">
                    <h5>contect</h5>
                <div id="cont-desv">
                    <p><span class="px-2"><i class="fas fa-map-marker-alt"></i></span><?php echo $prow['caddress']; ?> </p>
                    <p><span class="px-2"><i class="fas fa-phone"></i></span><?php echo $prow['cphone']; ?></p>
                    <p><span class="px-2"><i class="fas fa-at"></i></span><?php echo $prow['cemail']; ?></p>
                    <p><span class="px-2"><i class="fab fa-facebook-f"></i></span><?php echo $prow['cfacebook']; ?></p>
                 </div>
             </div>
             <?php } ?>
            <hr class="hr">
            <div id="skile">
                    <?php 
                    $ssql="SELECT * FROM skile WHERE idkey='{$idkey}'";
                    $sresult=mysqli_query($conn,$ssql);
                    if(mysqli_num_rows($sresult) > 0){
                        echo "<h5>skile</h5>";
                        while($srow = mysqli_fetch_assoc($sresult)){ 
                    ?>
                    <div class="row" id="skile-desc">
                    <div class="col-6" id="skile-head">
                        <h6><?php echo $srow['shead'] ?></h6>
                    </div>
                    <div class="progress col-6" >
                         <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $srow['sper'] ?>" aria-valuenow=" <?php echo $srow['sper'] ?>" aria-valuemin="0" aria-valuemax="100"> <?php echo $srow['sper'] ?></div>
                     </div>
                    </div>
                    <?php }} ?>
                </div>
                <hr class="hr">
                <div id="award">
                <?php 
                    $awsql="SELECT * FROM award WHERE idkey='{$idkey}'";
                    $awresult=mysqli_query($conn,$awsql);
                    if(mysqli_num_rows($awresult) > 0){
                        echo " <h5>award or honer</h5>";
                        while($awrow = mysqli_fetch_assoc($awresult)){ 
                    ?>
                    <small><?php echo $awrow['adate'] ?></small>
                    <small><?php echo $awrow['awname'] ?></small>
                    <p><?php echo $awrow['adesc'] ?></p>
                     <?php } }?>       
                </div>
                    <hr class="hr">
                    <div id="intrest" class="col-12">
                    <?php 
                    $isql="SELECT * FROM intrest WHERE idkey='{$idkey}'";
                    $iresult=mysqli_query($conn,$isql);
                    if(mysqli_num_rows($iresult) > 0){
                        echo " <h5>intrests</h5>";
                        while($irow = mysqli_fetch_assoc($iresult)){ 
                    ?>
                   
                   <ul>
                        <li><?php echo $irow['iname'] ?></li>
                    </ul>
                    <?php }?>
                </div>
                <?php }?>
       </div>
       <div class="col-8 " id="right-side">
           <div class="row" id="profile">
               <div class="col-3" id="pro-head">
                <h5>objective </h5>
               </div>
               <div class="col-9" id="pro-head">
                <hr class="hr">
               </div>
               <div class="col-12" id="pro-desc">
               <?php 
                $osql="SELECT * FROM objective WHERE idkey='{$idkey}'";
                $orsult = mysqli_query($conn,$osql);
                if(mysqli_num_rows($orsult) > 0){
                   $orow = mysqli_fetch_assoc($orsult);
                    ?>
                   <p> 
                     <?php echo $orow['odesc']; ?> 
                    </p>
                    <?php }?>
                </div>
           </div>

           <div class="row" id="education">
           <?php 
                    $esql="SELECT * FROM education WHERE idkey='{$idkey}'";
                    $eresult=mysqli_query($conn,$esql);
                    if(mysqli_num_rows($eresult) > 0){
                        echo ' <div class="col-3" id="edu-head">
                        <h5>education </h5>
                       </div>
                       <div class="col-9" id="edu-head">
                        <hr class="hr">
                        </div>';
                        while($erow = mysqli_fetch_assoc($eresult)){ 
                    ?>
                <div class="row" id="pro-desc">
                    <div class="col-6" id="un-name">
                        <h6><?php echo $erow['uname'] ?></h6>
                        <small><?php echo $erow['major'] ?> </small>
                        <p>gpa <?php echo $erow['GPA'] ?></p>
                    </div>
                    <div class="col-6 p-2" id="date">
                        <h6><?php echo $erow['sdate'] ?> - <?php echo $erow['edate'] ?></h6>
                    </div>
                </div>
                <?php }}?>
           </div>
           <div class="row" id="experience">
           <?php 
                    $exsql="SELECT * FROM experience WHERE idkey='{$idkey}'";
                    $exresult=mysqli_query($conn,$exsql);
                    if(mysqli_num_rows($exresult) > 0){
                        echo '<div class="col-5" id="exp-head">
                        <h5>work experience </h5>
                       </div>
                       <div class="col-7" id="edu-head">
                        <hr class="hr">
                        </div>';
                        while($exrow = mysqli_fetch_assoc($exresult)){ 
                    ?>
               
                <div class="row" id="exp-desc">
                    <div class="col-6" id="comp-name">
                        <h6><?php echo $exrow['comp-name'] ?></h6>
                        <small><?php echo $exrow['major'] ?>  </small>
                    </div>
                    <div class="col-6 p-2" id="date">
                        <h6><?php echo $exrow['sdate'] ?> - <?php echo $exrow['edate'] ?></h6>
                    </div>
                    <p><?php echo $exrow['expdesc'] ?></p>
                </div>
               <?php }} ?>
           </div>
           <div class="row" id="activity">
           <?php 
                    $acsql="SELECT * FROM activities WHERE idkey='{$idkey}'";
                    $acresult=mysqli_query($conn,$acsql);
                    if(mysqli_num_rows($acresult) > 0){
                        echo '<div class="col-3" id="act-head">
                        <h5> activities </h5>
                       </div>
                       <div class="col-9" id="act-head">
                        <hr class="hr">
                       </div>';
                        while($acrow = mysqli_fetch_assoc($acresult)){ 
                    ?>
                    <div class="col-12" id="act-desc">
                    <h6><?php echo $acrow['comp-name'] ?></h6>
                        <h6><?php echo $acrow['major'] ?></h6>
                        <h6><?php echo $acrow['sdate'] ?> - <?php echo $acrow['edate'] ?></h6>
                        <p><?php echo $acrow['acdesc'] ?></p>
                        <?php }?>
                </div>
                <?php }?>
           </div>
            
       </div>
       </div>
       </main>
</dve>
    
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