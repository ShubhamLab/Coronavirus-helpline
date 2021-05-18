<?php

$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$contact=filter_input(INPUT_POST,'contact');
$city=filter_input(INPUT_POST,'city');
$address=filter_input(INPUT_POST,'address');
$gender=filter_input(INPUT_POST,'gender');
$incon=filter_input(INPUT_POST,'incon');
$symptoms=filter_input(INPUT_POST,'symptoms');






if (preg_match ('/[a-zA-Z]/', $name)){
	if(!empty($email)){
		if (preg_match ("/^[0-9]*$/", $contact) ){
			if (preg_match ('/[a-zA-Z]/', $city)){
				if(!empty($address)){
					if(!empty($gender)){
						if(!empty($incon)){
						
					
						$host="localhost";
				$dbusername="root";
				$dbpassword="";
				$dbname="db_connect";
					
				$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
				
				if(mysqli_connect_error()){

					die('Connection Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
				}
				else{
					$check=implode(',',$_POST['ch']);
				    
					
					$sql="INSERT INTO corona_info(name,email,contact,city,address,gender,Symptoms,Incontact) values ('$name','$email','$contact','$city','$address','$gender','$check','$incon')";
					
					
					
					
			
					if($conn->query($sql)){
						
						echo "New record inserted";
						
						
						
						
						
					}
					else{
						echo "Error: ".$sql."<br>".$conn->error;
					}
					
					
					
					$conn->close();
					
					
					
				}
				
						}
						else{
							echo "Enter whether you have been incontact with a covid patient or not";
							die();
						}
				
						
							

					}
					else{
						echo "Gender should not be empty";
						die();
					}
					
				}
				else{
					echo "Address should not be empty";
					die();	
					}
			}
			else{
				echo "City should not be empty";
				die();	
				}
		}
		else{
			echo "Contact should not be empty and should not contain any alphabets";
			die();	
		}
	}
	else{
		echo "Email should not be empty";
		die();	
	}
}
else{
		echo "Name cannot be empty and should not contain  number or special characters";
		die();	
}

?>