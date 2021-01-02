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


   <!--connect to database -->
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
                        <li><a class="active" href="#log">Log</a></li>
                        <li><a class="active" href="#patient">Patient</a></li>
                        <li><a class="active" href="#doc">Doc</a></li>
                        <li><a class="active" href="#nurse">Nurse</a></li>
                        <li><a class="active" href="#diag">Diag</a></li>
                        <li><a class="active" href="#test">Test</a></li>
                        <li><a class="active" href="#lab">Lab</a></li>
                        <li><a class="active" href="#reg">Reg</a></li>
                        <li><a class="active" href="#supply">Supply</a></li>
                        <li><a class="active" href="#appoint">Appoint</a></li>

                  </ul>
                  </div>
               </nav>
      
               </div>
            </div>
      </header>


      <!--insert data here-->
<body>
<div id="log" class="section wow fadeIn">
         <div class="container">
          <br><br><br><br><br>
            <h3> Visit Log </h3>
               <!--
               This file is to display the records from the database
               -->

               <?php


                      include "connect-db.php";

                           $sql = "SELECT * FROM visit";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
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
                                           <td style="border: solid 1px black;"> <a href="delete.php?Log_NO= '.$row['Log_NO'].'&mode=delete"> Delete </a></td>


                                     </tr>';  
                                    }

                                    echo "</table>";

                        ?>
                        
 <div id="patient" class="section wow fadeIn">

         <div class="container">
            <h3> Patients </h3>
               <!--
               This file is to display the records from the database
               -->

               <?php
               
                           include "connect-db.php";

                           $sql = "SELECT * FROM patient";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <th>SSN</th>
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
                                         <td> '.$row['SSN'].' </td>
                                          <td> '.$row['LastName'].' </td>
                                          <td> '.$row['FirstName'].' </td>
                                          <td> '.$row['Gender'].' </td>
                                          <td> '.$row['DOB'].' </td>
                                          <td> '.$row['Address'].' </td>
                                          <td> '.$row['Phone'].' </td>
                                          <td style="border: solid 2px black;"> <a href="delete.php"> delete </a></td>

                                     </tr>';  
                                    }

                                    echo "</table>";

                        ?>





 <div id="doc" class="section wow fadeIn">
         <div class="container">
            <h3> Doctors </h3>
               <!--
               This file is to display the records from the database
               -->

               <?php

                           include "connect-db.php";

                           $sql = "SELECT * FROM Doctor";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <th>Doctor ID</th>
                                        <th>Last Name</th>
                                        <td>First Name</td>
                                        <td>Gender</td>
                                        <td>Office</td>
                                        <td>Phone</td>
                                    </tr>";
                                 }

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['Doctor_ID'].' </td>
                                          <td> '.$row['LastName'].' </td>
                                          <td> '.$row['FirstName'].' </td>
                                          <td> '.$row['Gender'].' </td>
                                          <td> '.$row['Office'].' </td>
                                          <td> '.$row['Phone'].' </td>
                                          <td style="border: solid 2px black;"> <a href="delete.php"> delete</a></td>

                                     </tr>';  
                                    }

                                    echo "</table>";

                        ?>


      <div id="nurse" class="section wow fadeIn">
         <div class="container">
            <h3> Nurses </h3>
               <!--
               This file is to display the records from the database
               -->

               <?php

                           include "connect-db.php";

                           $sql = "SELECT * FROM nurse";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <th>Nurse ID</th>
                                        <th>Last Name</th>
                                        <td>First Name</td>
                                        <td>Gender</td>
                                        <td>Office</td>
                                        <td>Phone</td>
                                    </tr>";
                                 }

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['Nurse_ID'].' </td>
                                          <td> '.$row['LastName'].' </td>
                                          <td> '.$row['FirstName'].' </td>
                                          <td> '.$row['Gender'].' </td>
                                          <td> '.$row['Office'].' </td>
                                          <td> '.$row['Phone'].' </td>
                                          <td style="border: solid 2px black;"> <a href="delete.php"> delete </a></td>

                                     </tr>';  
                                    }

                                    echo "</table>";
                        ?>


 <div id="diag" class="section wow fadeIn">

         <div class="container">
            <h3> Diagnosis </h3>
               <!--
               This file is to display the records from the database
               -->

               <?php
               
                           include "connect-db.php";

                           $sql = "SELECT * FROM Diagnosis";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <td>SSN</td>
                                        <th>Diagnosis</th>
                                        <td>Hospitalization</td>
                                        <td>Treatment_period</td>
                                        <td>Room_Assigned</td>
                                        <td>Test_frequency</td>
                                        <td>Doctor_ID</td>
                                        <td>Nurse_ID</td>
                                        
                                    </tr>";
                                    }

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['SSN'].' </td>
                                          <td> '.$row['Diagnosis'].' </td>
                                          <td> '.$row['Hospitalization'].' </td>
                                          <td> '.$row['Treatment_period'].' </td>
                                          <td> '.$row['Room_Assigned'].' </td>
                                          <td> '.$row['Test_frequency'].' </td>
                                          <td> '.$row['Doctor_ID'].' </td>
                                          <td> '.$row['Nurse_ID'].' </td>
                                          <td style="border: solid 2px black;"> <a href="delete.php"> delete</a></td>

                                     </tr>';  
                                    }

                                    echo "</table>";

                        ?>

      <div id="test" class="section wow fadeIn">
         <div class="container">
            <h3> Tests </h3>
              <?php

                           include "connect-db.php";

                           $sql = "SELECT * FROM tests";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <td>SSN</td>
                                        <th>Number of Tests</th>
                                        <th>Date</th>
                                        <td>Result</td>  
                                        <td>Lab_NO</td>
                                    </tr>";

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['SSN'].' </td>
                                          <td> '.$row['NumberOfTests'].' </td>
                                          <td> '.$row['Date'].' </td>
                                          <td> '.$row['Result'].' </td>
                                          <td> '.$row['Lab_NO'].' </td>
                                          <td style="border: solid 2px black;"> <a href="delete.php"> delete </a></td>

                                     </tr>';  
                                    }

                                    echo "</table>";
                                  }
                        ?> 


<div id="reg" class="section wow fadeIn">
         <div class="container">
            <h3> Register </h3>
              <?php

                           include "connect-db.php";

                           $sql = "SELECT * FROM registers";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <td>SSN</td>  
                                        <td>Log_NO</td>
                                    </tr>";

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['SSN'].' </td>
                                          <td> '.$row['Log_NO'].' </td>
                                          <td style="border: solid 2px black;"> <a href="delete.php"> delete </a></td>

                                     </tr>';  
                                    }

                                    echo "</table>";
                                  }                       
?>

               


 <div id="supply" class="section wow fadeIn">
         <div class="container">
            <h3> Lab Supply </h3>
              <?php

                           include "connect-db.php";

                           $sql = "SELECT * FROM medical_supply";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <td>Supply ID</td>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <td>Quantity</td>  
                                        <td>Lab_NO</td>
                                    </tr>";
              

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['Supply_NO'].' </td>
                                          <td> '.$row['Name'].' </td>
                                          <td> '.$row['Type'].' </td>
                                          <td> '.$row['Quantity'].' </td>
                                          <td> '.$row['Lab_NO'].' </td>
                                          <td style="border: solid 2px black;"><a href="delete.php"> delete </a></td>

                                     </tr>';  
                                    }

                                    echo "</table>";
                                  }
                        ?> 



    <div id="appoint" class="section wow fadeIn">
         <div class="container">
            <h3> Appointed </h3>
              <?php

                           include "connect-db.php";

                           $sql = "SELECT * FROM appointed";

                           $result = $conn->query($sql);
                           if($result->num_rows > 0){
                                 echo "<table style='border: solid 4px black;'>
                                  <tr>
                                        <td>Doctor ID</td>  
                                        <td>Log Number</td>
                                    </tr>";

                           while ($row = $result -> fetch_assoc()){
                                 echo '<tr>
                                          <td> '.$row['Doctor_ID'].' </td>
                                          <td> '.$row['Log_NO'].' </td>
                                          <td style="border: solid 2px black;"> <a href="delete.php"> delete</a></td>

                                     </tr>';  
                                    }

                                    echo "</table>";
                                  }                       
?>


        
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
