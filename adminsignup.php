<html>
<head>
 <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
<div class="container">
 <div class="card"></div>
 
 <div class="card">
    <div class="toggle"></div>
    <h1 class="title" align="left"><b><font face="Kristen ITC" >SIGN UP</b></font>
      <div class="close"></div>
    </h1>
    <form method="post" action="" enctype="multipart/form-data">
	<center>Sign UP take less than a minitue !!! </center><br />
      <div class="input-container">
        <input type="text" name="username" required="required"/>
        <label for="#{label}"><b>Username</b></label>
        <div class="bar"></div>
      </div>
	  
      <div class="input-container">
        <input type="password" id="password" name="password" required="required"/>
        <label for="#{label}"><b>Password</b></label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password_repeat" name="password_repeat" onfocusout="valid()" required="required"/>
        <label for="#{label}"><b>Repeat Password</b></label>
        <div class="bar"></div>
      </div>
	   <div class="input-container">
        <input type="email" name="mailid" required="required"/>
        <label for="#{label}"><b>Mail ID</b></label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" name="mobile" maxlength="10"required="required"/>
        <label for="#{label}"><b>Mobile Number</b></label>
        <div class="bar"></div>
      </div>
	   <div class="input-container">
        <input type="text" name="shop_no" required="required"/>
        <label for="#{label}"><b>Shop Number</b></label>
        <div class="bar"></div>
      </div>
	   <div class="input-container">
        <input type="text" name="ward_no" required="required"/>
        <label for="#{label}"><b>Ward Number</b></label>
        <div class="bar"></div>
      </div>
	   <div class="input-container">
        <input type="text" name="city" required="required"/>
        <label for="#{label}"><b>City Name</b></label>
        <div class="bar"></div>
      </div>
       <div class="button-container">
        <pre>
        
Profile Picture    <input type="file" name="image" id="image" />  
       
      </pre>
                     
         </div>
         <br><br>
     
      <div class="button-container">
        <input type="submit" value="SIGN UP" name="signup" class="button1" >
	   </div>
	   <br>
	     <center><font face="Comic Sans MS" color="#CC0066" size="+2">Registered User   </font><a href="adminsignin.php">Login Here </a></form></center>
    </form>
  </div>
  
  
   <div class="card alt">
    <div class="toggle"> 
	<img src="images/adminsignuplogo.png" height="150" width="150"></img>
	
	</div>
	
	   	

    <h1 class="title">Register
      <div class="close"></div>
    </h1>

  
   </div>
   </body>
</html>  
  <script>
  function valid()
{
	
	var pwd = document.getElementById("password").value;
	var confrimpwd = document.getElementById("password_repeat").value;
	if(pwd != confrimpwd)
	{
		alert("Password miss match");
	}
	if(pwd==""||confrimpwd=="")
	{
		alert("please enter a valid password");
	}
 }
</script>
<?php
 if(isset($_POST['signup'])){
 
  $key = md5( rand(0,1000) );
  $username=$_POST['username'];
  $mailid=$_POST['mailid'];
  $password=$_POST['password'];
  $repeat=$_POST['password_repeat'];
  $mobile=$_POST['mobile'];
  $shop_no=$_POST['shop_no'];
  $ward_no=$_POST['ward_no'];
  $city=$_POST['city'];
  
  
  if($password==$repeat){
  
   $host="localhost";
   $user="root";
   $password1="";
   $dbname="ration management";


 
  
$conn = new mysqli($host, $user, $password1, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
   $sql="select *from admintable where mailid='$mailid'";
 
  $result = $conn->query($sql);
if ($result->num_rows > 0) 
{
?><script>	alert("Email-Id registered Already"); </script> <?php	
}
else{

     if(!empty($_FILES['image']['tmp_name']) && file_exists($_FILES['image']['tmp_name'])) {
          $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
      }

       
       
 
   $query="insert into admintable(name,mailid,password,mobile,shop_no,ward_no,city,pic) values ('$username','$mailid','$password',$mobile,$shop_no,$ward_no,'$city','$file')" or die(mysql_error());
   
 $result=mysqli_query($conn,$query);
   
	   // Mail sent to admin or company 
	$msg = " \n	Warm Welcome,\n		Congrats !!!    Welcome to E-Ration ... \n Thanks for signup . Here all the works are computerized .So You can complete the works quickly and easily. Do wonders ...
 
 ------------------------

 Username: $username
 Password: $password

 ------------------------

Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
	  
\n Thank you.
  With Regards,
  E-Ration Team	...";
   // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,1000);
	

   // send email
  mail($mailid,"E-Ration Admin Confirmation ...",$msg);
	 

   // send email
  mail($mailid,"E-Ration Admin Signup Confirmation ...",$msg);
	echo "<script>	alert('Kindly check your mail for Signup Verification!!! '); </script>";    
   }
   }
   else
       echo"<script>alert('Sorry Password Mismatch. Cannot Signup!!!')</script>";
	  
  }  
?>



 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  