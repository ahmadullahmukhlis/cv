<?php
  include "php/config.php";
  session_start();

  if(!isset($_SESSION["email"])){
  echo 0;
  }else{
?>
<style> 
body {
  background-color: #d8d8d8;
  line-height: 1.5;
  margin: 10px auto;
  max-width: 2560px;
  text-transform: capitalize; }
  h6{
    font-size:15px !important;
    margin: 2px auto;
  }
main  ul,li{
    font-size:15px !important;
    padding: 2px auto;
    margin: 2px auto;
  }
p{
    font-size:10px !important;
}
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
</head>
<body>
<div class="col-6 mx-auto text-center my-3">
<button id="btn" class="bnt btn-success ">
        download as pdf
    </button>
</div>
    <main>
        <?php
        include "php/config.php";
        $idkey=$_SESSION['id'];
        ?>
        <div class="container-fluid" id="creative-cv">
            <div class="row">
                <?php 
                $psql="SELECT * FROM contect WHERE idkey='{$idkey}'";
                $prsult = mysqli_query($conn,$psql);
                if(mysqli_num_rows($prsult) > 0){
                   $prow = mysqli_fetch_assoc($prsult);
                ?>
                <div class="col-12 " id="personal-info">
                    <div id="cv-img">
                        <img src="cv/upload-img/<?php echo $prow['cimg']; ?>" alt="" class="img-fluid w-25">
                    </div>
                   <div class="name">
                   <h1> <?php echo $prow['cname']; ?></h1>
                   <small><?php echo $prow['cmission']; ?></small>
                   </div>
                </div>
                <div class="hr"></div>
                <div class="row" id="about-me">
                <?php 
                $osql="SELECT * FROM objective WHERE idkey='{$idkey}'";
                $orsult = mysqli_query($conn,$osql);
                if(mysqli_num_rows($orsult) > 0){
                    echo "<h6>objective</h6>";
                   $orow = mysqli_fetch_assoc($orsult);
                    ?>
                     <p> 
                     <?php echo $orow['odesc']; ?> 
                    </p>
                    <?php }?>
                </div>
                <div class="hr"></div>
                <div class="row" id="contect">
                    <h6>contect</h6>
                    <div class="col-6">
                    <p><span class="px-2"><i class="fas fa-map-marker-alt"></i></span><?php echo $prow['caddress']; ?> </p>
                    <p><span class="px-2"><i class="fas fa-phone"></i></span><?php echo $prow['cphone']; ?></p>
                    </div>
                    <div class="col-6">
                    <p><span class="px-2"><i class="fas fa-at"></i></span><?php echo $prow['cemail']; ?></p>
                    <p><span class="px-2"><i class="fab fa-facebook-f"></i></span><?php echo $prow['cfacebook']; ?></p>
                    </div>
                </div>
                        <?php }?>
            <div class="row" id="skile-edu-intr">
                <div class="col-6" id="edu-exp">
                <div id="edu-head">
                    <?php 
                    $esql="SELECT * FROM education WHERE idkey='{$idkey}'";
                    $eresult=mysqli_query($conn,$esql);
                    if(mysqli_num_rows($eresult) > 0){
                        echo "<h5>education</h5>";
                        while($erow = mysqli_fetch_assoc($eresult)){ 
                    ?>
                    <div id="edu-desc">
                        <h6><?php echo $erow['sdate'] ?> - <?php echo $erow['edate'] ?><span> <?php echo $erow['major'] ?></span></h6>
                        <p><?php echo $erow['uname'] ?></p>
                    </div>
                    <?php  }}?>
                </div>
                
                <div id="exp-head">
                <?php 
                    $exsql="SELECT * FROM experience WHERE idkey='{$idkey}'";
                    $exresult=mysqli_query($conn,$exsql);
                    if(mysqli_num_rows($exresult) > 0){
                        echo "<h5>experience</h5>";
                        while($exrow = mysqli_fetch_assoc($exresult)){ 
                    ?>
                     <div id="edu-desc">
                        <h6><?php echo $exrow['sdate'] ?> - <?php echo $exrow['edate'] ?> <span> <?php echo $exrow['comp-name'] ?></span></h6>
                        <small><?php echo $exrow['major'] ?></small>
                        <p><?php echo $exrow['expdesc'] ?></p>
                    </div>
                    <?php  }}?>
                </div>
                </div>
                <div class="col-1 "id="vl"></div>
                <div class="col-5" id="intrest">
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
                         <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $srow['sper'] ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><?php echo $srow['sper'] ?></div>
                     </div>
                    </div>
                    <?php }}?>
                </div>
               
                <div id="intrest" class="col-12">
                <?php 
                    $isql="SELECT * FROM intrest WHERE idkey='{$idkey}'";
                    $iresult=mysqli_query($conn,$isql);
                    if(mysqli_num_rows($iresult) > 0){
                        echo "<h5>intrest</h5>";
                        while($irow = mysqli_fetch_assoc($iresult)){ 
                    ?>
                    <ul>
                        <li><?php echo $irow['iname'] ?></li>
                    </ul>
                    <?php }}?>
                </div>
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

</body>
</html>
<?php } ?>