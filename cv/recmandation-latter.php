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
  
  }
  p{
      font-size: 100%;
  }
</style>
<div class="col-6 mx-auto text-center my-3">
<button id="btn" class="bnt btn-success ">
        download recommendation latter as pdf
    </button>
</div>
<main>
<div class="container">
    <div class="row">
            <?php 
                $sql="SELECT * FROM recommendation WHERE idkey='{$idkey}'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                   $row = mysqli_fetch_assoc($result);
                ?>
        <div id="header" class="my-md-5 my-2 text-center">

            <h4 class="h4"><?php echo $row['type']  ?> recommendation latter</h4>
           
        </div>
        <div id="desc">
        <p> my name is <span> <?php echo $row['teacher']  ?> </span> and i am proud to offer my recommendation of <span><?php echo $row['student']  ?></span>
        to whom i have personally known for <span> <?php echo $row['time']  ?> </span>as <span> <?php echo $row['student']  ?> </span> student
        at <span><?php echo $row['place']  ?></span>.</p>

        <p >
            during my relationship with <span> <?php echo $row['student']?>'s</span> i have experienced an individual who shows up earlier
            than asked, works hard and carries themselves in a polite, respectable manner, in addition,
            <span> <?php echo $row['student']  ?></span> is a devout student who has always presented themselves with 
            levelheadedness and grace.
        </p>
        <p>if you have any requests or question about <span> <?php echo $row['student']  ?></span> do not hesitate to contact me.</p>
            <p>best,</p>
        </div>
        <div id="foter " class="mt-md-4 py-md-3">
            <p style="margin-bottom: 0px">Signature <span>___________________________</span></p>
           <p> by  <span> <?php echo $row['teacher'] ?> </span class="ml-2">  date: <span> <?php echo $row['date']  ?> </span></p>
            <p style="margin-bottom: 5px"><?php echo $row['email']  ?></p>
            <p style="margin-bottom: 5px"><?php echo $row['phone']  ?> </p>
        </div>
        <?php }else{
            echo "<script>alert('you have to add requirment for recommendation latter');</script>";
        }
        
        ?>
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


<?php } ?>