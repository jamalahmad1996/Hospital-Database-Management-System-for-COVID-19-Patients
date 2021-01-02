<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Covid Tracker</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   
  

   <!-- Site Icons -->
   <link rel="shortcut icon" href="/life-care/images/fevicon.ico.png" type="/life-care/image/x-icon" />
   <link rel="apple-touch-icon" href="/life-care/images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="/life-care/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="/life-care/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="/life-care/css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="/life-care/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="/life-care/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="/life-care/css/custom.css">
   <!-- table CSS -->
   <link rel="stylesheet" href="/life-care/css/table.css">

   <!-- Modernizer for Portfolio -->
   <script src="/life-care/js/modernizer.js"></script>
   <!-- [if lt IE 9] -->



	<body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="/life-care/images/loaders/heart-loading2.gif" alt="">
      </div>
   <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="menu.php">Home</a></li>
                        <li><a href="menu_insert.php">Insert Data</a></li>
                        <li><a href="menu_update.php">Update Data</a></li>
                  </ul>
                  </div>

<?php

$servername = "localhost";// sql server name
$username = "root";// sql username
$password = "jamal96;";// sql password
$dbname  = "covid_tracker";// database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM visit";// embed a select statement in php
$result = $conn->query($sql);// get result



if($result->num_rows > 0){// check for number of rows. If there are records, build a table to show them
 echo "<table style='border: solid 1px black;'>
	<tr style='border: solid 1px black;'>
	    <th style='border: solid 1px black;'>Log number</th>
	    <th style='border: solid 1px black;'>Date</th>
	    <th style='border: solid 1px black;'>Symptoms</th>
	</tr>";
}

while ($row = $result -> fetch_assoc()){// Fetch the query result and store them in an array
	echo '<tr style="border: solid 1px black;">
		<td style="border: solid 1px black;">'.$row['Log_NO'].'</td>
		<td style="border: solid 1px black;">'.$row['Date'].'</td>
		<td style="border: solid 1px black;">'.$row['Symptoms'].'</td>

<!-- the core edit operation is done in edit.php. Here, we create only a hyperlink and send parameters to edit.php -->		
<!--For each row of the table, we create a hyperlink and include the parameter PerID to be used it in the destination page (edit.php)-->
		<td style="border: solid 1px black;"> <a href="logedit.php?PerID='.$row['Log_NO'].'">Update </a></td>
		</tr>';
}

echo "</table>";
?>

                  </form>
         </div>
      </div>



      </body>
    

      <!-- end section -->
     
     <!-- doctor -->

     <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">


            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                </div><!-- end col -->




     <!-- end doctor section -->

      <!-- end section -->

      </div>
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="/life-care/images/logo.png" alt=""></a>
                     <p>Help prevent the spread of Covid-19</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 Johnston Street Lafayette, LA</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> (+1) 800 123 456</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>SUBSCRIBE</h3>
                     <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                     <div class="subcriber-box">
                        <form id="mc-form" class="mc-form">
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                              <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                              <div class="clearfix"></div>
                              <!-- mailchimp-alerts Start -->
                              <div class="mailchimp-alerts">
                                 <div class="mailchimp-submitting"></div>
                                 <!-- mailchimp-submitting end -->
                                 <div class="mailchimp-success"></div>
                                 <!-- mailchimp-success end -->
                                 <div class="mailchimp-error"></div>
                                 <!-- mailchimp-error end -->
                              </div>
                              <!-- mailchimp-alerts end -->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="/life-care/js/all.js"></script>
      <!-- all plugins -->
      <script src="/life-care/js/custom.js"></script>
      <!-- map -->
    
   </body>
</html>