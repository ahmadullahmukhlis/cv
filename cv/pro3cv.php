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
    <div class="cnotainer-fluid" id="pro3">
        <div class="row" id="cv-body">
        <div class="col-5" id="left-side">
        <?php 
                $psql="SELECT * FROM contect WHERE idkey='{$idkey}'";
                $prsult = mysqli_query($conn,$psql);
                if(mysqli_num_rows($prsult) > 0){
                   $prow = mysqli_fetch_assoc($prsult);
                ?>
            <div id="name">
                     <h1><?php echo $prow['cname']; ?></h1>
                    <small><?php echo $prow['cmission']; ?></small>
            </div>
            <div id="img">
            <img src="cv/upload-img/<?php echo $prow['cimg']; ?>" alt="ahmad" class="img-fluid">
            </div>
            <div id="contect">
                    <h5>contect</h5>
                <div id="cont-desc">
                <p><span class="px-2"><i class="fas fa-map-marker-alt"></i></span><?php echo $prow['caddress']; ?> </p>
                    <p><span class="px-2"><i class="fas fa-phone"></i></span><?php echo $prow['cphone']; ?></p>
                    <p><span class="px-2"><i class="fas fa-at"></i></span><?php echo $prow['cemail']; ?></p>
                    <p><span class="px-2"><i class="fab fa-facebook-f"></i></span><?php echo $prow['cfacebook']; ?></p>
                 </div>
             </div>
             <?php }?>
             <div id="objective">
             <?php 
                $osql="SELECT * FROM objective WHERE idkey='{$idkey}'";
                $orsult = mysqli_query($conn,$osql);
                if(mysqli_num_rows($orsult) > 0){
                    echo '<h5>objective</h5>';
                   $orow = mysqli_fetch_assoc($orsult);
                    ?>
                   <p> 
                     <?php echo $orow['odesc']; ?> 
                    </p>
                    <?php }?>
             </div>
             <div id="skile">
             <?php 
                    $ssql="SELECT * FROM skile WHERE idkey='{$idkey}'";
                    $sresult=mysqli_query($conn,$ssql);
                    if(mysqli_num_rows($sresult) > 0){
                        echo "<h5>skile</h5>";
                        echo '<div id="skile-desc">';
                        while($srow = mysqli_fetch_assoc($sresult)){ 
                    ?>
                     <small><?php echo $srow['shead'] ?></small>
                     <?php }?>
                 </div>
                <?php }?>
             </div>
            <div id="intrest">
            <?php 
                    $isql="SELECT * FROM intrest WHERE idkey='{$idkey}'";
                    $iresult=mysqli_query($conn,$isql);
                    if(mysqli_num_rows($iresult) > 0){
                        echo " <h5>intrests</h5>";
                        echo " <ul>";
                        while($irow = mysqli_fetch_assoc($iresult)){ 
                    ?>
                   
                  
                        <li><?php echo $irow['iname'] ?></li>
                    <?php }?>
                    </ul>
                </div>
                <?php }?>
        </div>




        <div class="col-7" id="right-side">
                <div id="education">
                <?php 
                    $esql="SELECT * FROM education WHERE idkey='{$idkey}'";
                    $eresult=mysqli_query($conn,$esql);
                    if(mysqli_num_rows($eresult) > 0){
                        echo "<h5>education</h5>";
                        while($erow = mysqli_fetch_assoc($eresult)){ 
                    ?>   
                <div class="edu-desc my-1">
                <h6><?php echo $erow['uname'] ?> </h6>
                <h6><?php echo $erow['major'] ?></h6>
                <h6><?php echo $erow['sdate'] ?> - <?php echo $erow['edate'] ?><span> <?php echo $erow['major'] ?></h6>
                <h6>CPA <?php echo $erow['GPA'] ?>/4</h6>
               
                <?php }?>
                </div>
                <?php }?>
                <div id="experience">
                     <?php 
                    $exsql="SELECT * FROM experience WHERE idkey='{$idkey}'";
                    $exresult=mysqli_query($conn,$exsql);
                    if(mysqli_num_rows($exresult) > 0){
                        echo "<h5>experience</h5>";
                        while($exrow = mysqli_fetch_assoc($exresult)){ 
                    ?>
                    <div id="exp-desc my-1">
                    <h6><?php echo $exrow['comp-name'] ?></h6>
                        <h6><?php echo $exrow['major'] ?></h6>
                        <h6><?php echo $exrow['sdate'] ?> - <?php echo $exrow['edate'] ?></h6>
                        <p><?php echo $exrow['expdesc'] ?></p>
                        <?php }?>
                </div>
                <?php }?>
                </div>
            <div id="activity">
                <?php 
                    $acsql="SELECT * FROM activities WHERE idkey='{$idkey}'";
                    $acresult=mysqli_query($conn,$acsql);
                    if(mysqli_num_rows($acresult) > 0){
                        echo "<h5>activities</h5>";
                        while($acrow = mysqli_fetch_assoc($acresult)){ 
                    ?>
                    <div id="exp-desc">
                    <h6><?php echo $acrow['comp-name'] ?></h6>
                        <h6><?php echo $acrow['major'] ?></h6>
                        <h6><?php echo $acrow['sdate'] ?> - <?php echo $acrow['edate'] ?></h6>
                        <p><?php echo $acrow['acdesc'] ?></p>
                        <?php }?>
                </div>
                <?php }?>
            </div>
            <div id="award">
            <?php 
                    $awsql="SELECT * FROM award WHERE idkey='{$idkey}'";
                    $awresult=mysqli_query($conn,$awsql);
                    if(mysqli_num_rows($awresult) > 0){
                        echo " <h5>award or honer</h5>";
                        while($awrow = mysqli_fetch_assoc($awresult)){ 
                    ?>
                    <h6><?php echo $awrow['adate'] ?></h6>
                    <h6><?php echo $awrow['awname'] ?></h6>
                    <p><?php echo $awrow['adesc'] ?></p>
                     <?php } }?>       
                </div>
                </div>
            </div>




        </div>
    </div>
    </main>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
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

</script>
<?php }?>