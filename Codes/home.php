<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<?php

if(isset($_POST['inserttb'])){ //things to do, once the "submit" key is hit

  $id=$_POST['IDtb'];//get form value ID attribute
  $ln = $_POST['LNtb'];//get form value Last Name attribute
  $fn = $_POST['FNtb'];//get form values First Name attribute
  $city = $_POST['Citytb'];//get form value City attribute

  $servername = "localhost";// sql server machine name/IP (if your computer is the server too, then just keep it as "localhost"). 
  $username = "root";// mysql username
  $password = "";// sql password
  $dbname  = "fall2020";// database name

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "INSERT INTO Persons VALUES ('$id', '$ln', '$fn', '$city')";//embed insert statement in PHP
  $result = $conn->query($sql);

  if($result) //if the insert into database was successful
  {
  echo "Records inserted successfully";
  }
}


    /* Your password */
    $username = 
    $password = 'MYPASS';

    /* Redirects here after login */
    $redirect_after_login = 'menu.php';

    /* Will not ask password again for */
    $remember_password = strtotime('+30 days'); // 30 days

    if (isset($_POST['password']) && $_POST['password'] == $password) {
        setcookie("password", $password, $remember_password);
        header('Location: ' . $redirect_after_login);
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Password protected</title>
</head>
<body>
    <div style="text-align:center;margin-top:50px;">
        You must enter the password to view this content.
        <form method="POST">
            <input type="text" name="password">
        </form>
    </div>
</body>
</html>