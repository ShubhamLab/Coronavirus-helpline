<?php

$email=filter_input(INPUT_POST,'email');


if(!empty($email)){
	
	
				$host="localhost";
				$dbusername="root";
				$dbpassword="";
				$dbname="db_connect";
					
				$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
				
				if(mysqli_connect_error()){

					die('Connection Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
				}
				else{
					
				    
					
					$sql="INSERT INTO corona_email_updates(Email_Address) values ('$email')";
					
					
					
					
			
					if($conn->query($sql)){
						echo "New record inserted<br><br>You will now recieve all updates regarding corona";
					}
					else{
						echo "Error: ".$sql."<br>".$conn->error;
					}
					$conn->close();
	
			}
}			
else{
	echo "Email address cannot be empty";
	die();
	
}


?>