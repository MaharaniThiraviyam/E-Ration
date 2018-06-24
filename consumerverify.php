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
	
	 $sql="select * from consumer_table where mail_id='$email'";
     $result = $conn->query($sql);
if ($result->num_rows > 0) 
{

 echo"<script>alert('Already Verified User ....')</script> ";
 header("location:consumbersignin.php");
	 	  
}
else{
   $sql="select * from temp_consumer_table where mail_id='$email' ";
   $result = $conn->query($sql);
   if ($result->num_rows > 0){
    $row = $result->fetch_assoc();
	$card_no=$row['card_no'];
	$passwordmd5=$row['password'];
	$mail_id=$row['mail_id'];
	$mobile=$row['mobile'];
	$shop_id=$row['shop_id'];
	$card_type=$row['card_type'];
	$no_of_members=$row['no_of_members'];
	echo "<script>alert('hi')</script>";
	 $query="insert into consumer_table(card_no,card_type,no_of_members,mail_id,password,mobile,shop_id)values('$card_no','$card_type',$no_of_members,'$mail_id','$passwordmd5',$mobile,$shop_id)";
	 
      $result=mysqli_query($conn,$query);
	   echo "<script>alert('Signup Verification Done Successfully ...')</script>";
	  // $query="delete from temp_consumer_table where mail_id='$email'";
	   // $result=mysqli_query($conn,$query);
		header("location:consumersignin.php");
	 	  
}
else
 echo "<script>alert(Signup Verification Failed ...)</script>";
 }  
}
 ?>