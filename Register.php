<?php	

		include_once("DBConnect.php");

		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			$dob = $_POST['dob'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$confirmpass = $_POST['confirmpass'];
			$gender = $_POST['gender'];
			$messages = "Yoo";

			$query = mysql_query("select email from userinfo where email = '$email'");
			$check = mysql_fetch_array($query);

			if($check){				
				echo 	"<div class='alert alert-danger text-center'>
							<strong>Alert!</strong> Email already exists!
						</div>";
				return 0;				
			}
			
			$query = mysql_query("select Name from userinfo where Name = '$name'");
			$check = mysql_fetch_array($query);

			if($check){				
				echo 	"<div class='alert alert-warning text-center'>
							<strong>Oops!</strong> UserName already taken, try a different name 
						</div>";
				return 0;				
			}

			if(strcmp($pass, $confirmpass)){				
				echo 	"<div class='alert alert-warning text-center'>
							<strong>Oops!</strong> Passwords do not match 
						</div>";
				return 0;				
			}

			$query = mysql_query("insert into userinfo(Name,DOB,Email,Password,Gender) values('$name', '$dob','$email','$pass','$gender')");

			
			if(!$query){
				echo 	"<div class='alert alert-danger text-center'>
							<strong>Alert!</strong> Registration failed. Error in connecting to Server. Please try again later.
						</div>";
				return 0;
				
			}					
			echo 	"<div class='alert alert-success text-center'>
					<strong>Registration Successful!</strong><a href='Sign-in.html'>Signin</a>
					</div>";
		}
		else{
			header("Location: ../Sign-in.html");
		}	
		
?>

