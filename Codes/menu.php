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
   <!-- Modernizer for Portfolio -->
   <script src="/life-care/js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="/life-care/images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="index.html"><img src="/life-care/images/logo.png" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><img src="/life-care/images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:800 123 456">800 123 456</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@Lifecare.com</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">Daily: 7:00am - 8:00pm</a></span>	
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="menu.php">Home</a></li>
                        <li><a data-scroll href="#log">Visit Log</a></li>
                        <li><a data-scroll href="#docInfo">Doctors & Nurses</a></li>
                        <li><a data-scroll href="#patient">Patients</a></li>
                        <li><a data-scroll href="menu_insert.php">Insert Data</a></li>
                        <li><a data-scroll href="menu_update.php">Update Data</a></li>
			<li><a data-scroll href="menu_delete.php">Delete Data</a></li>
                  </ul>
                  </div>
               </nav>
               <div class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('/life-care/images/slider-bg.png');">
         <div class="container">
            <div class="row">




            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->

      <div id="log" class="section wow fadeIn">
         <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


               <!--connect to database -->
               <div class="menu">
               <?php include 'connect-db.php';?>
                  </div>



               <?php   

               $sql = "SELECT * FROM visit  ORDER BY Log_NO DESC LIMIT 5";

               $result = $conn->query($sql);

               if($result->num_rows > 0){
                     echo "<table style='border: solid 4px black;'>
                     <ul> Log</ul>
                      <tr>
                            <th>Log Number</th>
                            <td>Date</td>
                            <td>Symptoms</td>
                        </tr>";
                     }

               while ($row = $result -> fetch_assoc()){
                     echo '<tr>
                              <td> '.$row['Log_NO'].' </td>
                              <td> '.$row['Date'].' </td>
                              <td> '.$row['Symptoms'].' </td>
                         </tr>';  
                        }
                        echo "</table>";
                  ?>
                  </form>
         </div>
      </div>

      <div id="log" class="section wow fadeIn">
         <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Log Number: <input type="text"  name="LOGtb"/> (yy-mm-3 digit log number)
               Date: <input type="date" name="datetb"/>
               Symptoms: <input type="text" name="symptb"/><br><br>
               SSN: <input type="text" name="ssntb"/>
               Last Name: <input type="text" name="LNtb"/>
               First Name: <input type="text" name="FNtb"/>
               Gender: <input type="text" name="gendertb"/>(M/F)<br><br>
               DOB: <input type="date" name="dobtb"/>
               Address: <input type="text" name="addtb"/>
               phone: <input type="text" name="phonetb"/> (xxx-xxx-xxxx)
               <input type="submit" value="Insert" name="inserttb"/>
               <?php

               if(isset($_POST['inserttb'])){ //things to do, once the "submit" key is hit

                     $log=$_POST['LOGtb'];//get form value ID attribute
                     $date = $_POST['datetb'];//get form values First Name attribute
                     $symp = $_POST['symptb'];//get form value City attribute
                     $SSN = $_POST['ssntb'];
                     $LName = $_POST['LNtb'];
                     $FName = $_POST['FNtb'];
                     $gender = $_POST['gendertb'];
                     $DOB = $_POST['dobtb'];
                     $addr = $_POST['addtb'];
                     $phone = $_POST['phonetb'];

                     $servername = "localhost";// sql server machine name/IP (if your computer is the server too, then just keep it as "localhost"). 
                     $username = "root";// mysql username
                     $password = "jamal96;";// sql password
                     $dbname  = "covid_tracker";// database name

                     // Create connection
                     $conn = new mysqli($servername, $username, $password, $dbname);
                     $sql = "INSERT INTO Visit VALUES ('$log', '$date', '$symp')";//embed insert statement in PHP
                     $sql2 = "INSERT INTO Registers VALUES ('$SSN', '$log')";
                     $sql3 = "INSERT INTO Patient VALUES ('$SSN', '$LName', '$FName', '$gender', '$DOB', '$addr', '$phone')";

                     $result = $conn->query($sql);
                     $result2 = $conn->query($sql2);
                     $result3 = $conn->query($sql3);

                     if($result) //if the insert into database was successful
                     {
                     echo "Records inserted successfully";
                  }
               }
                  ?>

            </form>
         </div>
      </div>




      <div id="docInfo" class="section wow fadeIn">
         <div class="container">
            <h3> Doctors </h3>
               <!--
               This file is to display the records from the database
               -->

               <?php

                           $servername = "localhost";
                           $username = "root";
                           $password = "jamal96;";
                           $dbname  = "covid_tracker";
                           $conn = new mysqli($servername, $username, $password, $dbname)or die("Connect failed: %s\n". $conn -> error);


                           $sql = "SELECT LastName, FirstName, Gender, Office, Phone FROM Doctor";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <th>Last Name</th>
                                        <td>First Name</td>
                                        <td>Gender</td>
                                        <td>Office</td>
                                        <td>Phone</td>
                                    </tr>";
                                 }

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['LastName'].' </td>
                                          <td> '.$row['FirstName'].' </td>
                                          <td> '.$row['Gender'].' </td>
                                          <td> '.$row['Office'].' </td>
                                          <td> '.$row['Phone'].' </td>
                                     </tr>';  
                                    }

                                    echo "</table>";

                        ?>
                        <h3> Nurses </h3>
                        <?php
                           $servername = "localhost";
                           $username = "root";
                           $password = "jamal96;";
                           $dbname  = "covid_tracker";
                           $conn = new mysqli($servername, $username, $password, $dbname)or die("Connect failed: %s\n". $conn -> error);


                           $sql = "SELECT LastName, FirstName, Gender, Office, Phone FROM Nurse";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <th>Last Name</th>
                                        <td>First Name</td>
                                        <td>Gender</td>
                                        <td>Office</td>
                                        <td>Phone</td>
                                    </tr>";
                                 }

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['LastName'].' </td>
                                          <td> '.$row['FirstName'].' </td>
                                          <td> '.$row['Gender'].' </td>
                                          <td> '.$row['Office'].' </td>
                                          <td> '.$row['Phone'].' </td>
                                     </tr>';  
                                    }
                                    echo "</table>";
                                    ?>
         </div>
      </div>


      <div id="patient" class="section wow fadeIn">
         <div class="container">
               <!--
               This file is to display the records from the database
               -->
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Patient Last Name: <input type="text"  name="PLNtb"/>
               <input type="submit" value="Search" name="patienttb"/>

               <?php


               if(isset($_POST['patienttb'])){ //things to do, once the "submit" key is hit

                     $patient = $_POST['PLNtb'];


                     $servername = "localhost";// sql server machine name/IP (if your computer is the server too, then just keep it as "localhost"). 
                     $username = "root";// mysql username
                     $password = "jamal96;";// sql password
                     $dbname  = "covid_tracker";// database name

                     // Create connection
                     $conn = new mysqli($servername, $username, $password, $dbname);
                     $sql = "SELECT LastName, FirstName, Gender, DOB, Address,Phone FROM patient WHERE LastName='$patient'";

                     $result = $conn->query($sql);
                     
                     if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <th>Last Name</th>
                                        <td>First Name</td>
                                        <td>Gender</td>
                                        <td>DOB</td>
                                        <td>Address</td>
                                        <td>Phone</td>
                                    </tr>";
                                 }

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['LastName'].' </td>
                                          <td> '.$row['FirstName'].' </td>
                                          <td> '.$row['Gender'].' </td>
                                          <td> '.$row['DOB'].' </td>
                                          <td> '.$row['Address'].' </td>
                                          <td> '.$row['Phone'].' </td>
                                     </tr>';  
                                    }

                                   echo "</table>";

                  }
                  ?>

            </form>
                           </div>
                        </div>
               
            <!-- end title -->
            <div class="row">
               <div class="col-md-6">
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="hr1">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- end service -->
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <div class="inner-services">
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="/life-care/images/wash hands.png" width=50px alt="#" /></span>
                           <h4>Wash Hands</h4>
                           <p>Clean your hands often, either with soap and water for 20 seconds or a hand sanitizer that contains at least 60% alcohol.</p>
                        </div>

                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                        <div class="serv">
                           <span class="icon-service"><img src="/life-care/images/wearmask.png" alt="#" /></span>
                           <h4>Wear a Mask</h4>
                           <p>Masks may help prevent people who have COVID-19 from spreading the virus to others.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="/life-care/images/distancing.jpg" alt="#" /></span>
                           <h4>Social Distancing</h4>
                           <p>Social distancing is especially important for people who are at higher risk for severe illness from COVID-19.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               </div>
            </div>
         </div>
      </div>
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



