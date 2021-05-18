<?php

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="db_connect";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}


$query="SELECT * FROM corona_info where City="Pune";
$run=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($run));
{
	<?php echo $row['Name']  ?><br>
	<?php echo $row['Gender']  ?><br>
	
}

$conn -> close();
?>