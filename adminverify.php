<?php
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['key']) && !empty($_GET['key'])){
     $email = mysql_escape_string($_GET['email']); 
     $key = mysql_escape_string($_GET['key']); 
	 echo $email." ".$key;
	$host="localhost";
    $user="root";
    $password1="";
    $dbname="ration management";
 
  
$conn = new mysqli($host, $user, $password1, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
	
	 $sql="select * from admintable where mailid='$email'";
     $result = $conn->query($sql);
if ($result->num_rows > 0) 
{

 echo"<script>alert('Already Verified User ....')</script> ";
 header("location:adminsignin.php");
	 	  
}
else{
   $sql="select * from temp_admintable where mailid='$email' ";
   $result = $conn->query($sql);
   if ($result->num_rows > 0){
    $row = $result->fetch_assoc();
	$username=$row['username'];
	$passwordmd5=$row['password'];
	$mailid=$row['mailid'];
	$mobile=$row['mobile'];
	$shop_no=$row['shop_no'];
	 $query="insert into admintable(name,mailid,password,mobile,shop_no)values('$username','$mailid','$passwordmd5',$mobile,$shop_no)" or die(mysql_error());
  
      $result=mysqli_query($conn,$query);
	   echo "<script>alert('Signup Verification Done Successfully ...')</script>";
	   $query="delete from temp_admintable where mailid='$email'";
	    $result=mysqli_query($conn,$query);
		header("location:adminsignin.php");
	 	  
}
else
 echo "<script>alert(Signup Verification Failed ...)</script>";
 }  
}
 ?>