<?php 
include './stock/stock.php';
include './web-service/collect-and-print-data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store Catalog</title>
    <?php include "./includes/styles.php"; ?>
    
</head>
<body>
    <div id="boot-over">
       
        <!--NAVBAR-->
        <div class="container">
             <?php include './includes/navigation.php'; ?>
        </div>
        <!--MASTHEAD-->
        <div class="container">
            
         <?php include './includes/masthead.php'; ?>
        </div>
        <!--MAIN-->
        <div class="container img">
           <?php
             printHtml();
            ?>
          
        </div>

        <!--FOOTER-->
        <div class="container">
          <?php include './includes/footer.php'; ?>
        </div>
    </div>
    <?php include './includes/scripts.php'; ?>
  
</body>
</html>