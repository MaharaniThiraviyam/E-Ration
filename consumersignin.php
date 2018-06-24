<style>
/* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

*{
  margin: 0px auto;
  padding: 0px;
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}

.cotn_principal {
  position: absolute;
  width: 100%;
  height: 100%;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#cfd8dc+0,607d8b+100,b0bec5+100 */
background: #cfd8dc; /* Old browsers */
background: -moz-linear-gradient(-45deg,  #cfd8dc 0%, #607d8b 100%, #b0bec5 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg,  #cfd8dc 0%,#607d8b 100%,#b0bec5 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfd8dc', endColorstr='#b0bec5',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

}


.cont_centrar {
  position: relative;
  float: left;
   width: 100%;
}

.cont_login {
  position: relative;
  width: 640px;
left: 50%;
margin-left: -320px;
  
}

.cont_back_info {  
position: relative;
  float: left;
  width: 640px;
  height: 280px;
overflow: hidden;
  background-color: #fff;
  margin-top: 100px;
box-shadow: 1px 10px 30px -10px rgba(0,0,0,0.5);
}

.cont_forms {
  position: absolute;
  overflow: hidden;
  top:100px;
  left: 0px;
  width: 320px;
  height: 280px;
  background-color: #eee;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

.cont_forms_active_login {
box-shadow: 1px 10px 30px -10px rgba(0,0,0,0.5);
height: 420px;  
top:20px;
left: 0px;
  -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;

}

.cont_forms_active_sign_up {
box-shadow: 1px 10px 30px -10px rgba(0,0,0,0.5);
height: 730px;  
top:10px;
left:320px;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

.cont_img_back_grey {
  position: absolute;
  width: 950px;
  top:-80px;
  left: -116px;
}

.cont_img_back_grey > img {
  width: 100%;
 -webkit-filter: grayscale(100%);     filter: grayscale(100%);
opacity: 0.2;
animation-name: animar_fondo;
  animation-duration: 20s;
animation-timing-function: linear;
animation-iteration-count: infinite;
animation-direction: alternate;

}

.cont_img_back_ {
  position: absolute;
  width: 950px;
top:-80px;
  left: -116px;
}

.cont_img_back_ > img {
  width: 100%;
opacity: 0.3;
animation-name: animar_fondo;
animation-duration: 20s;
animation-timing-function: linear;
animation-iteration-count: infinite;
animation-direction: alternate;
}

.cont_forms_active_login > .cont_img_back_ {
top:0px;  
  -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

.cont_forms_active_sign_up > .cont_img_back_ {
top:0px;  
left: -435px;
 -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}
 

.cont_info_log_sign_up {
position: absolute;
  width: 640px;
  height: 280px;
  top: 100px;
z-index: 1;
} 

.col_md_login {
  position: relative;
  float: left;
  width: 50%;
}

.col_md_login > h2 {
  font-weight: 400;
margin-top: 70px;
    color: #757575;
}

.col_md_login > p {
 font-weight: 400;
margin-top: 15px;
width: 80%;
    color: #37474F;
}

.btn_login { 
background-color: #26C6DA;
  border: none;
  padding: 10px;
width: 200px;
border-radius:3px;
box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.4);
  color: #fff;
margin-top: 10px;
cursor: pointer;
}

.col_md_sign_up {
  position: relative;
  float: left;
  width: 50%;  
}

.cont_ba_opcitiy > h2 {
  font-weight: 400;
  color: #fff;
}

.cont_ba_opcitiy > p {
 font-weight: 400;
margin-top: 15px;
 color: #fff;
}
/* ----------------------------------
background text    
------------------------------------
 */
.cont_ba_opcitiy {
  position: relative;
  background-color: rgba(120, 144, 156, 0.55);
  width: 80%;
  border-radius:3px ;
margin-top: 60px;
padding: 15px 0px;
}

.btn_sign_up { 
background-color:#FF0066;
  border: none;
  padding: 10px;
width: 200px;
border-radius:3px;
box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.4);
  color:#FFFFFF;
margin-top: 10px;
cursor: pointer;
font-family:Kristen ITC;
font-size:18px;
}
.cont_forms_active_sign_up {
z-index: 2;  
}


@-webkit-keyframes animar_fondo {
  from { -webkit-transform: scale(1) translate(0px);
-moz-transform: scale(1) translate(0px);
-ms-transform: scale(1) translate(0px);
-o-transform: scale(1) translate(0px);
transform: scale(1) translate(0px); }
  to { -webkit-transform: scale(1.5) translate(50px);
-moz-transform: scale(1.5) translate(50px);
-ms-transform: scale(1.5) translate(50px);
-o-transform: scale(1.5) translate(50px);
transform: scale(1.5) translate(50px); }
}
@-o-keyframes identifier {
  from { -webkit-transform: scale(1);
-moz-transform: scale(1);
-ms-transform: scale(1);
-o-transform: scale(1);
transform: scale(1); }
  to { -webkit-transform: scale(1.5);
-moz-transform: scale(1.5);
-ms-transform: scale(1.5);
-o-transform: scale(1.5);
transform: scale(1.5); }

}
@-moz-keyframes identifier {
  from { -webkit-transform: scale(1);
-moz-transform: scale(1);
-ms-transform: scale(1);
-o-transform: scale(1);
transform: scale(1); }
  to { -webkit-transform: scale(1.5);
-moz-transform: scale(1.5);
-ms-transform: scale(1.5);
-o-transform: scale(1.5);
transform: scale(1.5); }

}
@keyframes identifier {
  from { -webkit-transform: scale(1);
-moz-transform: scale(1);
-ms-transform: scale(1);
-o-transform: scale(1);
transform: scale(1); }
  to { -webkit-transform: scale(1.5);
-moz-transform: scale(1.5);
-ms-transform: scale(1.5);
-o-transform: scale(1.5);
transform: scale(1.5); }
}
.cont_form_login {
  position: absolute;
  opacity: 0;
display: none;
  width: 320px;
  -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

.cont_forms_active_login {
z-index: 2;  
}
.cont_forms_active_login  >.cont_form_login {
}

.cont_form_sign_up {
  position: absolute;
  width: 320px;
  height:inherit;
  
float: left;
  opacity: 0;
display: none;
  -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

  
.cont_form_sign_up > input {
text-align: left;
  padding: 15px 5px;
margin-left: 10px;
margin-top: 20px;
  width: 260px;
border: none;
    color: #757575;
}

.cont_form_sign_up > h2 {
margin-top: 50px; 
font-weight: 400;
  color: #757575;
}


.cont_form_login > input {
  padding: 15px 5px;
margin-left: 10px;
margin-top: 20px;
  width: 260px;
border: none;
text-align: left;
  color: #757575;
}

.cont_form_login > h2 {
margin-top: 110px; 
font-weight: 400;
  color: #757575;
}
.cont_form_login > a,.cont_form_sign_up > a  {
    color: #757575;
    position: relative;
    float: left;
    margin: 10px;
    margin-left: 30px;
}
</style>

<div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https/images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
	   <form action="" method="post">
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 <input type="email" placeholder="Mail Id" name="mail_id" required/>
<input type="password" placeholder="Password" name="password" required/>
<center><input type="submit" class="btn_login"  value="SIGN IN" name="signin" ></center>

<!--<button class="btn_login" onclick="cambiar_login()">LOGIN</button>-->
  </div>
</form>

 <!-- SIGN UP FORM -->
<form action="" method="post">  <font face="Lucida Console">
   <div class="cont_form_sign_up" height="80%">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>

     <h2>SIGN UP</h2>
	


<input type="text" name="username" placeholder="User name" required autofocus />
<input type="text" name="card_no" placeholder="Ration Card Number" required  />
<input type="email" name="mail"  placeholder="Mail-ID" required/>
<input type="password" id="password" name="password" placeholder="Password" required/>
<input type="password" id="password_repeat" name="password_repeat" placeholder="Confirm Password" onfocusout="valid()" required/>
<input type="number" name="no_of_members" placeholder="Number of Family Members" required  />

<input type="text" name="mobile" placeholder="Mobile" maxlength="10" required/>
<input type="number" name="shop_id" placeholder="Ration Shop Number" required  />
<select name="card_type">
<option value="Green Card">Green Card</option>
<option value="White Card">White Card</option>
</select>
<br><br>
<pre>
 Profile Picture <input type="file" name="image" id="image" />
</pre>
<center><input type="submit" class="btn_sign_up"  value="SIGN UP" name="signup" ></center>
					
<!--<button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>-->

  </div></font>
</form>
    </div>
    
  </div>
 </div>
</div>






<script>

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";               

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
  
setTimeout(function(){    
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);  
  }

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";
  
setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);  

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);  


}    


function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";  
document.querySelector('.cont_form_sign_up').style.opacity = "0";               
document.querySelector('.cont_form_login').style.opacity = "0"; 

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);  
  
  }

 
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
   if(isset($_POST['signin'])){
    $mail_id=$_POST['mail_id'];
	  $password=$_POST['password'];

	  $host="localhost";
    $user="root";
    $password1="";
    $dbname="ration management";
  //echo "<script>alert($password)</script>";

$conn = new mysqli($host, $user, $password1, $dbname);
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  } 

    $sql="SELECT * FROM consumer_table where mail_id='$mail_id' and password='$password'";
	  $result = $conn->query($sql);
    
	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();
		
		session_start();
    $_SESSION['consumer_id']=$row['consumer_id'];
    $_SESSION['user_name']=$row['name'];
    $_SESSION['card_no']=$row['card_no'];
    $_SESSION['shop_no']=$row['shop_id'];
    
		?><script>alert("Welcome to E-Ration"); 
    window.location="consumerhome.php";
    </script> <?php	
		
	}
	 
	else{

	   echo"<script>alert('Sorry ... Invalid Mail-Id or Password !!!')</script>";
    }		
  }
 
 else if(isset($_POST['signup'])){
 
  $username=$_POST['username'];
  $card_no=$_POST['card_no'];
  $card_type=$_POST['card_type'];
  $no_of_members=$_POST['no_of_members'];
  $password=$_POST['password'];
  $repeat=$_POST['password_repeat'];
  $mail_id=$_POST['mail'];
  $mobile=$_POST['mobile'];
  $shop_id=$_POST['shop_id'];

 
  
  if($password==$repeat){
      $host="localhost";
      $user="root";
      $password1="";
      $dbname="ration management";
	  
	  $conn = new mysqli($host, $user, $password1, $dbname);
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    } 
   $sql="select * from consumer_table where mail_id='$mail_id'";
    $result = $conn->query($sql);
  if ($result->num_rows > 0) 
 {
 ?><script>	alert("Email-Id registered Already"); </script> <?php	
 }
 else{
  
    if(!empty($_FILES['image']['tmp_name']) && file_exists($_FILES['image']['tmp_name'])) {
          $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
      }
  
     $query="insert into consumer_table(card_no,card_type,no_of_members,mail_id,password,mobile,shop_id,pic,name)values('$card_no','$card_type',$no_of_members,'$mail_id','$password',$mobile,$shop_id,'$file','$username')";
   
     $result=mysqli_query($conn,$query);
      // Mail sent to admin or company 
	$msg = " \n	Warm Welcome ,\n		Congrats !!!    Welcome to E-Ration ... \n Thanks for signup . Here all the works are computerized and takes less time.So You can complete the works quickly and easily . You can also detect fraud activities ... Do wonders ...
 
 ------------------------

 Username: $username
 Password: $password

 ------------------------

Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
  
 Please click this link to activate your account:
      http://localhost/ration/consumerverify.php?email=".$mail_id."&key=".$key.
	  
"\n Thank you.
  With Regards,
  E-Ration Team	...";
   // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,1000);
	

   // send email
  mail($mail,"E-Ration Consumer Confirmation ...",$msg);
	 

   // send email
  mail($mail_id,"E-Ration Consumer Signup Confirmation ...",$msg);
	echo "<script>	alert('Signup successfully ... Check your mail !!! '); </script>";    
   
	
    
     
	    
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