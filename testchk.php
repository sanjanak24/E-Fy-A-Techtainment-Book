<?php

$servername = "localhost"; $username = "root"; $password = ""; $database = "test"; 
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);
    
    
    // When form submitted, insert values into the database.
    if (isset($_POST['save'])) {
        // removes backslashes
        $fname = $_POST['name'];
        $usn    = $_POST['usn'];
        $email = $_POST['email'];
        $collegename = $_POST['Collegename'];
        $contactnumber = $_POST['contact'];        
        $password = $_POST['password'];
        $transaction_id = $_POST['transaction_id'];
        $event = $_POST['amt'];
		$event_list = $_POST['value'];
		
        $accomendation = $_POST['yes'];	
        $in = $_POST['in'];		
      
	  
					$verify_query = mysqli_query($con, "SELECT email FROM eregisteration WHERE email='$email'");

					if (mysqli_num_rows($verify_query) != 0) {
						echo '<script type="text/javascript">'; 
						echo 'alert("The username you entered already exist please try with another username");'; 
						echo 'window.location.href = "studentRegister.php";';
						echo '</script>';                          

					}
					else{
						$query1    = "INSERT into eregisteration(name,email,contact,password)
						VALUES ('$fname','$email','$contactnumber','$password')";
						mysqli_query($con, $query1);
						$id = mysqli_insert_id($con);
	  
						for ($i=0;$i<sizeof ($event_list);$i++) {
						$a=0;						
						$query2    = "INSERT into events(fkid,ename,eid,evt)
						VALUES ('$id','$event_list[$i]','$a','$i')";
						mysqli_query($con, $query2);
	 
					}
						$query    = "INSERT into tudent_register(s_name,usn,email,c_name,c_number,s_password,s_event,t_id,accomendation,fkid)
						VALUES ('$fname','$usn','$email','$collegename','$contactnumber','$in','$event','$transaction_id','$accomendation','$id')";
        
						//print_r($query);
	   
	   
						$result   = mysqli_query($con, $query);
	 
						// print_r($result);
					if($result==1) {
						echo '<script type="text/javascript">'; 
						echo 'alert("You Have been registered Successfully Please Login");'; 
						echo 'window.location.href = "studentLogin.php";';
						echo '</script>';    
					} 
					else {
						echo '<script type="text/javascript">'; 
						echo 'alert("Please try again something went Wrong");'; 
						echo 'window.location.href = "studentRegister.php";';
						echo '</script>';    
					}
	 
			}
	}

	
?>