<?php
session_start();
require "config.php";
error_reporting(-1);
if($_SERVER['REQUEST_METHOD']=="POST")
{
 if(isset($_POST['button']))
{
	 $did=$_SESSION['id'];
  $firstname= $_POST['firstname'];
  $lastname= $_POST['lastname'];
  $email= $_POST['email'];
  $phone = $_POST['phone'];
  $address= $_POST['address'];
   $city= $_POST['city'];
   $pincode= $_POST['pincode'];
   $reference= $_POST['refrence'];
   $worktime= $_POST['worktime'];
      $experience= $_POST['experience'];
      $companyname = $_POST['companyname'];
     $companycontact = $_POST['companycontact'];
      $manager = $_POST['managername'];
      $managercontact = $_POST['managercontact'];
     $assurance= $_POST['assurance'];
      $descriptions= $_POST['descriptions'];
     
     
  
  //2.for Aadthar
            $aimg_name= mysqli_real_escape_string($con,$_FILES['Aadhar']['name']);
            $aimg_size= mysqli_real_escape_string($con,$_FILES['Aadhar']['size']);
            $aimg_tmp= mysqli_real_escape_string($con,$_FILES['Aadhar']['tmp_name']);
            $directory='Aadthar/';
            $atarget_file=$directory.$aimg_name;
            move_uploaded_file( $aimg_tmp, $atarget_file);
 
  
 
 
  $query= "INSERT INTO  driverformdb
  VALUES ('{$did}','{$firstname}','{$lastname}','{$email}','{$phone}','{$address}',' {$city}','{$pincode}','{$reference}','{$worktime}' ,'{$experience}',
  ' {$companyname}',' {$companycontact}','{$manager}',' {$managercontact}','{$assurance}','{$descriptions}','{$atarget_file}')";
  
 
 
   $query_run= mysqli_query($con,$query);
   if(false==$query_run)
   {
     echo  mysqli_error($con);

   }
   else{
     echo "done";
   }
                if($query_run)
                      {
                     
                       echo "<script type='text/javascript'> alert('user ss enterd ..'); </script>";
                       header( 'Location: /Drivers.php' );
                      }
                  else{
                     echo "not  connected";
                     }

              
  
 }
 else{
   echo "<script type='text/javascript'> alert('user not  enterd sorry..'); </script>";
   echo  mysqli_error($con);
 }
}



 $query    = "SELECT * FROM `driverformdb` WHERE did='{$_SESSION['driverid']}'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
      
			if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
			
			$_SESSION['did']=$row["did"];
				$_SESSION['firstname']=$row["firstname"];	
					$_SESSION['lastname']=$row["lastname"];	
					$_SESSION['email']=$row["email"];	
					$_SESSION['phone']=$row["phone"];	
				}
			}


$q    = "SELECT * FROM `dynamic_db` WHERE driverid='{$_SESSION['driverid']}'";
        $res = mysqli_query($con, $q) or die(mysql_error());
        $row = mysqli_num_rows($res);
      
			if ($res->num_rows > 0) {
                // output data of each row
                while($r = $res->fetch_assoc()) {
			
			$_SESSION['amount']=$r["amount"];
			$_SESSION['customerid']=$r["customerid"];
				}
			}
		

?>