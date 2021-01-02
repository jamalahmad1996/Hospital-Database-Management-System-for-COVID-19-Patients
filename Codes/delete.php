<!--
This file is used to delete a record from database
Copy this file in C://xampp/htdocs/ and open run http://localhost/delete.php
-->
<html>
<body>

<?php

if (!empty($_GET['Log_NO'])){
$pid = $_GET['Log_NO'];// get the id value from url parameters
}

include "connect-db.php";


if(isset($_GET['mode']) == 'delete'){

$sqldelete = "DELETE FROM visit WHERE Log_NO='$pid'";//delete statement
$delete = $conn->query($sqldelete);//execute the query
if($delete)
 { 
  echo "Record deleted successfully!";
 }
}


//Below is the code to show the list of records
$sql = "SELECT * FROM visit";// embed a select statement
$result = $conn->query($sql);// get result

if($result->num_rows > 0){// check for number of rows; if there are records, build html table
 echo "<table style='border: solid 1px black;'>
	<tr>
	    <th>Log_NO</th>
	    <th>Date</th>
	    <th>Symptoms</th>


	</tr>";
}

while ($row = $result -> fetch_assoc()){// store the result in an array; then put them in html table one by one
	echo '<tr>
		<td>'.$row['Log_NO'].'</td>
		<td>'.$row['Date'].'</td>
		<td>'.$row['Symptoms'].'</td>


<!-- below, creates a hyperlink (Delete) and change the mode to "delete". Please note that the link is redirected to the same page (href="delete.php"). -->
		<td> <a href="delete.php?PersonID='.$row['Log_NO'].'&mode=delete">Delete </a></td>
	      </tr>';
}
 echo "</table>";


?>
</body>
</html>