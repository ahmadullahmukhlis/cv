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
  max-width: 2424px;
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
  p{
      font-size: 10px !important;
  } h6{
    font-size:15px !important;
    margin: 2px auto;
  }
 main ul,li{
    font-size:15px !important;
    padding: 2px auto;
    margin: 2px auto;
  }

</style>
<body>
<div class="col-6 mx-auto text-center my-3">
<button id="btn" class="bnt btn-success ">
        download as pdf
    </button>
</div>
    <main>
        <div class="container-fluid" id="creative2-cv">
            <div class="row">
            <?php 
                $psql="SELECT * FROM contect WHERE idkey='{$idkey}'";
                $prsult = mysqli_query($conn,$psql);
                if(mysqli_num_rows($prsult) > 0){
                   $prow = mysqli_fetch_assoc($prsult);
                ?>
                <div class="col-12" id="name">
                    <h1><?php echo $prow['cname']; ?></h1>
                    <small><?php echo $prow['cmission']; ?></small>
                </div>
            </div>
            <div class="row" id="cv-body">
                <div class="col-4" id="left-side">
                    <div id="personal-info">
                        <div id="img">
                            <img src="cv/upload-img/<?php echo $prow['cimg']; ?>" alt="" class="img-fluid">
                        </div>
                        <div id="p-desc">
                            <small>gender</small>
                            <h6><?php echo $prow['gender']; ?></h6>
                            <small>date of birth</small>
                            <h6><?php echo $prow['birthdate']; ?></h6>
                            <small>email</small>
                            <h6><?php echo $prow['cemail']; ?></h6>
                            <small>phone</small>
                            <h6><?php echo $prow['cphone']; ?></h6>
                            <small>address</small>
                            <h6><?php echo $prow['caddress']; ?></h6>
                        </div>
                    </div>
                    <?php }?>
                    <div id="skile">
                    <?php 
                    $ssql="SELECT * FROM skile WHERE idkey='{$idkey}'";
                    $sresult=mysqli_query($conn,$ssql);
                    if(mysqli_num_rows($sresult) > 0){
                        echo "<h5>skile</h5>";
                        echo '<div class="skile-desc">';
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
                        echo "<ul>";
                        while($irow = mysqli_fetch_assoc($iresult)){ 
                    ?>
                        <li><?php echo $irow['iname'] ?></li>
                    <?php }?>
                    </ul>
                </div>
                <?php }?>
                </div>          
                <div class="col-8" id="right-side">
                <div id="education">
                <?php 
                    $esql="SELECT * FROM education WHERE idkey='{$idkey}'";
                    $eresult=mysqli_query($conn,$esql);
                    if(mysqli_num_rows($eresult) > 0){
                        echo "<h5>education</h5>";
                        while($erow = mysqli_fetch_assoc($eresult)){ 
                    ?>   
                <div class="edu-desc">
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
                    <div id="exp-desc">
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
<?php }?>