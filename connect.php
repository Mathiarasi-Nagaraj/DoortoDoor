<?php
require('db.php');
require('./registeration-login-system-master/db.php');
$cid=$_SESSION['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phnnum=$_POST['phnnum'];
$mailid=$_POST['mailid'];
$a1=$_POST['a1'];
//$a2=$_POST['a2'];
$a3=$_POST['a3'];
$a4=$_POST['a4'];
$a5=$_POST['a5'];
$ept=$_POST['ept'];
$lpt=$_POST['lpt'];
$rfirstname=$_POST['rfirstname'];
$rlastname=$_POST['rlastname'];
$rphnnum=$_POST['rphnnum'];
$rmailid=$_POST['rmailid'];
$ra1=$_POST['ra1'];
//$ra2=$_POST['ra2'];
$ra3=$_POST['ra3'];
$ra4=$_POST['ra4'];
$ra5=$_POST['ra5'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$width=$_POST['width'];
//$img=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
$dlt=$_POST['dlt'];

$server="localhost";
$db="registration";
$username="techsquadkec";
$password="kv3*tp1gG4tvsRCm";

$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
{
    die("connection failed:".mysqli_connect_error());

}
else{
    echo "connected successfully!!!";
}


$dimg_name=$_FILES['img']['name'];
   $dimg_size=$_FILES['img']['size'];
   $dimg_tmp=$_FILES['img']['tmp_name'];
   $directory='productimg/';
   $target_file=$directory.$dimg_name;
   move_uploaded_file( $dimg_tmp, $target_file);

   $stmt=$con->prepare("insert into customerdb(cid,cfname,clname,phn,mail,ca1,ca3,ca4,ca5,ept,lpt,rfname,rlname,rphn,rmail,ra1,ra3,ra4,ra5,height,weight,width,dlt,image)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
   $stmt->bind_param("isssssssisssssssssisssss",$cid,$firstname,$lastname,$phnnum,$mailid,$a1,$a3,$a4,$a5,$ept,$lpt,$rfirstname,$rlastname,$rphnnum,$rmailid,$ra1,$ra3,$ra4,$ra5,$height,$weight,$width,$dlt,$target_file);
   $stmt->execute();
   echo "successfully completed...";
header( 'Location: /customer.php' );
   $stmt->close();
   $con->close();




?>