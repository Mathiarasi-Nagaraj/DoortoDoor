<?php
require('db.php');
require('./registeration-login-system-master/db.php');

$server="localhost";
$db="registration";
$username="techsquadkec";
$password="kv3*tp1gG4tvsRCm";

$conn=mysqli_connect($server,$username,$password,$db);
 
$data=array();
$fetch=fetch_data();
function fetch_data(){
	global $conn;
	$query="SELECT * from customerdb ORDER BY cid DESC";
  $exec=mysqli_query($conn, $query);
if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
echo json_encode($fetch);
?>


