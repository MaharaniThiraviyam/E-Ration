<html>
<head>
<link rel="stylesheet" href="stylelogin.css">
</head>
<body>
<div class="container">
 <div class="card"></div>
 
 <div class="card">
    <div class="toggle"></div>
    <h1 class="title" align="left"><b><font face="Kristen ITC">
Login</font></b>
      <div class="close"></div>
    </h1>
    <form action="" method="post">
      <div class="input-container">
        <input type="email" name="mail_id" required="required"/>
        <label for="#{label}"><b>Username</b></label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" required="required"/>
        <label for="#{label}"><b>Password</b></label>
        <div class="bar"></div>
	    </div>
      <center> <input type="checkbox" checked/><font face="Arial" color="#000000" size="+1">Keep me Signed in </font></center><br />
     
      <div class="button-container">
        <input type="submit"   value="SIGN IN" name="signin" class="button1">
			
      </div>
	  <br>
	  <center><font face="Comic Sans MS" color="#CC0066" size="+2">New User ? </font><a href="adminsignup.php">Sign Up here </a></form></center>
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
   
   <?php
  
 if(isset($_POST['signin'])){
        
		
  $mail_id=$_POST['mail_id'];
	$password1=$_POST['password'];
	
	$con=mysql_connect("localhost","root") or die("Connection error !!!");
	$db=mysql_select_db("ration management",$con) or die(" Cannot connect to Database ...");
	
	echo $mail_id." ".$password1;
	$rs=mysql_query("select admin_id,mailid,name,password,shop_no from admintable where mailid='$mail_id' and password='$password1'");
	 $row=mysql_fetch_array($rs);

	 $admin_id=$row['admin_id'];
   $admail_id=$row['mailid'];
   $adname=$row['name'];
   $adpass=$row['password']; 
   $shop_no=$row['shop_no'];
   
	 
    

   if(($mail_id==$admail_id)&&($password1==$adpass)){  
		session_start();
		$_SESSION['adminid']=$admin_id;
		$_SESSION['username']=$adname;
    $_SESSION['shop_no']=$shop_no;

		 
        echo " <script>window.location = 'adminhome.php';</script>";

		 }	  
  else
    echo "<script>alert('Sorry !!!Invalid Username and Password !!!')</script>";
		}
?>