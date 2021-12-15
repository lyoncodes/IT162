<?php include 'includes/header.php'; ?>
	<h1><?=$subtitle ?></h1>
    <div class="bg">
        <div class="form-bg">
        <?php
            /*
            * Below are 2 different forms to be re-used       
            * 
            * Only use one at a time, comment out the other!       
            *
            */

            include 'includes/contact_include.php'; #site keys & code here
        
            $toAddress = "lyoncodes@gmail.com";  //place your/your client's email address here
            $toName = "Michael Lyon"; //place your client's name here
            $website = "lyoncodes.com";  //place NAME of your client's website

            echo loadContact('simple.php');#demonstrates a simple contact form
            //echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>
        </div>
    </div>
<?php include 'includes/footer.php';?>
