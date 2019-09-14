<?php
if (isset($_POST['add']))
	{	   
	$conn = mysql_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("waterbilling", $conn);
			 		
					$lname= $_POST['lname'] ;					
					$fname=$_POST['fname'] ;
					$mi=$_POST['mi'] ;
					$address=$_POST['address'] ;
					$contact=$_POST['contact'] ;
					$meterReader = $_POST['meterReader'];
					
		 mysql_query("INSERT INTO  owners (lname,fname,mi,address,contact) 
		 VALUES ('$lname','$fname','$mi','$address','$contact')"); 
		 mysql_query("INSERT INTO  tempo_bill (Client,Prev)
		 VALUES ('$fname','$meterReader')");
				
				header("Location: clients.php");
				
				
	        }
	
?>