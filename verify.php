<?php
session_start();
include("adminhomeheader.php");
$admin_id=$_SESSION['adminid'];
$username=$_SESSION['username'];
$shop_no=$_SESSION['shop_no']

?>
<head>
  <title>Verification</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<style type="text/css">
          .button5{
            background-color:green;
            font-size: 25px;
            color: white;
            border-radius: 10px;
            font-family: "monotype Corsiva";
}

.textbox{
   font-family:"Lucida Fax";
   background-color:#FFFFFF;
   color:#000000;
   }
 
  .textbox1{
   font-family:"Lucida Fax";
   font-size:21px;
   }

        </style>
</head>

<div class="w3-padding w3-large w3-text-black">
    <div align="right">
        
        <i class="material-icons">person</i><?php echo $username;?></i>
         <a href="adminhome.php"> <i class="fa fa-arrow-circle-o-left" style="font-size:25px"></i>Back to home</a>
        
        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
      </div>
         <div align="right">
        <i class="material-icons">store</i><?php echo $shop_no;?>(shop Id)
      </div>
          
 </div>

 <body>
 	<center>
 		<h2><font color="blue"> Welcome To Verification Section</font></h2>
 		<form method="post" action="">
 			 <input type="submit" name="verify" value="Verification" class="button5">
 			</form>
 		</center>
 	</body>


<?php
 if(isset($_POST['verify'])){
   $host="localhost";
   $user="root";
   $password1="";
   $dbname="ration management";
 
   $conn = new mysqli($host, $user, $password1, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

 $date1=date('Y-m-d',strtotime("-1 days"));
 
 
 //get product_quantity

$sql="SELECT * FROM product_quantity_history where shop_id=$shop_no and date1='$date1'";

$result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    

  }


     $rice_quan=$row['rice_quan'];
     $sugar_quan=$row['sugar_quan'];
     $wheat_quan=$row['wheat_quan'];
     $maida_quan=$row['maida_quan'];
     $rava_quan=$row['rava_quan'];

     $oil_quan=$row['oil_quan'];
     $tea_quan=$row['tea_quan'];
     $salt_quan=$row['salt'];
     $fried_gram=$row['fried_gram'];
     $kerosene_oil_quan=$row['kerosene_oil_quan'];

 

 //get temp_purchase table
     $sql="SELECT sum(rice_quan) as rice_quan1 ,sum(sugar_quan) as sugar_quan1 ,sum(wheat_quan) as wheat_quan1,sum(maida_quan) as maida_quan1, sum(rava_quan) as rava_quan1,sum(oil_quan) as oil_quan1,sum(tea_quan) as tea_quan1 , sum(salt_quan) as salt_quan1 ,sum(fried_gram) as fried_gram1, sum(kerosene_oil_quan) as kerosene_oil_quan1 from temp_purchase where shop_id=$shop_no";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
     }


     $rice_quan1=$row['rice_quan1'];
     $sugar_quan1=$row['sugar_quan1'];
     $wheat_quan1=$row['wheat_quan1'];
     $maida_quan1=$row['maida_quan1'];
     $rava_quan1=$row['rava_quan1'];

     $oil_quan1=$row['oil_quan1'];
     $tea_quan1=$row['tea_quan1'];
     $salt_quan1=$row['salt_quan1'];
     $fried_gram1=$row['fried_gram1'];
     $kerosene_oil_quan1=$row['kerosene_oil_quan1'];

  

  $sql="SELECT * FROM product_quantity where shop_id=$shop_no";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    

  }


     $rice_quan_today=$row['rice_quan'];
     $sugar_quan_today=$row['sugar_quan'];
     $wheat_quan_today=$row['wheat_quan'];
     $maida_quan_today=$row['maida_quan'];
     $rava_quan_today=$row['rava_quan'];

     $oil_quan_today=$row['oil_quan'];
     $tea_quan_today=$row['tea_quan'];
     $salt_quan_today=$row['salt'];
     $fried_gram_today=$row['fried_gram'];
     $kerosene_oil_quan_today=$row['kerosene_oil_quan'];

     //Verification Process

     echo"<table align=right><tr></table>";   


echo" <br><table class=login align=center cellpadding=0 cellspacing=0 width=90% height=15% border=2   bordercolor=#3333CC
  >
   <tr><th align=center>Product Name </th><th align=center>Quantity (in Kgs) (Morning)</th><th align=center></th><th align=center>Today Sales(in Kgs)</th><th></th><th> Quantity (in Kgs)(Evening)</th><th  align=center>Verification</th>";

   if($rice_quan_today==($rice_quan-$rice_quan1))
   	echo"<tr><td class=textbox align=center> அரிசி</td><td class=textbox align=center>$rice_quan</td><td align=center>--</td><td class=textbox align=center>$rice_quan1</td><td align=center>=</td><td align=center>$rice_quan_today</td>
   <td><img src=images/correct.gif width=100 height=70></td></tr>";
   	  
   else
   	  	echo"<tr><td class=textbox align=center>அரிசி</td><td class=textbox align=center>$rice_quan</td><td align=center>-</td><td class=textbox align=center>$rice_quan1</td><td align=center>=</td><td align=center>$rice_quan_today</td>
   <td><img src=images/wrong.png></td></tr>";
   	  


   	 if($sugar_quan_today==($sugar_quan-$sugar_quan1))
   	  	echo"<tr><td class=textbox align=center>சர்க்கரை</td><td class=textbox align=center>$sugar_quan</td><td align=center>--</td><td class=textbox align=center>$sugar_quan1</td> <td align=center>=</td><td align=center>$sugar_quan_today</td> <td><img src=images/correct.gif width=100 height=70></td></tr>";
   	  
   	else
   		echo"<tr><td class=textbox align=center>சர்க்கரை</td><td class=textbox align=center>$sugar_quan</td><td align=center>--</td><td class=textbox align=center>$sugar_quan1</td> <td align=center>=</td><td align=center>$sugar_quan_today</td> <td><img src=images/wrong.png></td></tr>";
  
     if($wheat_quan_today==($wheat_quan-$wheat_quan1))
   	  echo"<tr><td class=textbox align=center>கோதுமை</td><td class=textbox align=center>$wheat_quan</td><td align=center>--</td><td class=textbox align=center>$wheat_quan1</td><td align=center>=</td><td align=center>$wheat_quan_today</td>  <td><img src=images/correct.gif width=100 height=70></td></tr>";
   	  
   	else
   
echo"<tr><td class=textbox align=center>கோதுமை</td><td class=textbox align=center>$wheat_quan</td><td>-</td><td class=textbox align=center>$wheat_quan1</td><td align=center>=</td><td align=center>$wheat_quan_today</td>  <td><img src=images/wrong.png></td></tr>";
   	  

  if($maida_quan_today==($maida_quan-$maida_quan1))
   	  echo"<tr><td class=textbox align=center>மைதா</td><td class=textbox align=center>$maida_quan</td><td align=center>--</td><td class=textbox align=center>$maida_quan1</td><td align=center>=</td><td align=center>$maida_quan_today</td>  <td><img src=images/correct.gif width=100 height=70></td></tr>";
   	  
   	else
   		  echo"<tr><td class=textbox align=center>மைதா</td><td class=textbox align=center>$maida_quan</td><td align=center>--</td><td class=textbox align=center>$maida_quan1</td> <td align=center>=</td><td align=center>$maida_quan_today</td> <td><img src=images/wrong.png></td></tr>";
   	
   	
  
     if($rava_quan_today==($rava_quan-$rava_quan1))
   	  echo"<tr><td class=textbox align=center>ரவா</td><td class=textbox align=center>$rava_quan</td><td align=center>--</td><td class=textbox align=center>$rava_quan1</td> <td align=center>=</td><td align=center>$rava_quan_today</td> <td><img src=images/correct.gif width=100 height=70></td></tr>";
   	else
   		 echo"<tr><td class=textbox align=center>ரவா</td><td class=textbox align=center>$rava_quan</td><td align=center>--</td><td class=textbox align=center>$rava_quan1</td><td align=center>=</td><td align=center>$rava_quan_today</td>  <td><img src=images/wrong.png></td></tr>";
   
  
  
  if($tea_quan_today==($tea_quan-$tea_quan1))
   	   echo"<tr><td class=textbox align=center>தேநீர்</td><td class=textbox align=center>$tea_quan</td><td align=center>--</td><td class=textbox align=center>$tea_quan1</td> <td align=center>=</td><td align=center>$tea_quan_today</td> <td><img src=images/correct.gif width=100 height=70></td></tr>";
   else
   	  
 echo"<tr><td class=textbox align=center>தேநீர்</td><td class=textbox align=center>$tea_quan</td><td align=center>--</td><td class=textbox align=center>$tea_quan1</td> <td align=center>=</td><td align=center>$tea_quan_today</td> <td><img src=images/wrong.png width=100 height=70></td></tr>";

   	 if($oil_quan_today==($oil_quan-$oil_quan1))
   	   echo"<tr><td class=textbox align=center> எண்ணெய்</td><td class=textbox align=center>$oil_quan</td><td align=center>--</td><td class=textbox align=center>$oil_quan1</td> <td align=center>=</td><td align=center>$oil_quan_today</td> <td><img src=images/correct.gif width=100 height=70></td></tr>";
   
   	else
   		echo"<tr><td class=textbox align=center> எண்ணெய்</td><td class=textbox align=center>$oil_quan</td><td align=center>--</td><td class=textbox align=center>$oil_quan1</td> <td align=center>=</td><td align=center>$oil_quan_today</td> <td><img src=images/wrong.png width=100 height=70></td></tr>";
  
     if($salt_quan_today==($salt_quan-$salt_quan1))
   	   echo"<tr><td class=textbox align=center>  உப்பு</td><td class=textbox align=center>$salt_quan</td><td align=center>--</td><td class=textbox align=center>$salt_quan1</td> <td align=center>=</td><td align=center>$salt_quan_today</td> <td><img src=images/correct.gif width=100 height=70></td></tr>";
   	else
   		
    echo"<tr><td class=textbox align=center>  உப்பு</td><td class=textbox align=center>$salt_quan</td><td align=center>--</td><td class=textbox align=center>$salt_quan1</td> <td align=center>=</td><td align=center>$salt_quan_today</td> <td><img src=images/wrong.png width=100 height=70></td></tr>";

  if($fried_gram_today==($fried_gram-$fried_gram1))
   	 echo"<tr><td class=textbox align=center>   வறுத்த  பருப்பு</td><td class=textbox align=center>$fried_gram</td><td align=center>--</td><td class=textbox align=center>$fried_gram1</td> <td align=center>=</td><td align=center>$fried_gram_today</td> <td><img src=images/correct.gif width=100 height=70></td></tr>";
   
   	else
   		 echo"<tr><td class=textbox align=center>   வறுத்த  பருப்பு</td><td class=textbox align=center>$fried_gram</td><td align=center>--</td><td class=textbox align=center>$fried_gram1</td> <td align=center>=</td><td align=center>$fried_gram_today</td> <td><img src=images/wrong.png width=100 height=70></td></tr>";
  
     if($kerosene_oil_quan_today==($kerosene_oil_quan-$kerosene_oil_quan1))
   	  echo"<tr><td class=textbox align=center>மண்ணெண்ணெய்</td><td class=textbox align=center>$kerosene_oil_quan</td><td align=center>--</td><td class=textbox align=center>$kerosene_oil_quan1</td> <td align=center>=</td><td align=center>$kerosene_oil_quan_today</td> <td><img src=images/correct.gif width=100 height=70></td></tr>";
   
   	else
   		echo"<tr><td class=textbox align=center>மண்ணெண்ணெய்</td><td class=textbox align=center>$kerosene_oil_quan</td><td align=center>--</td><td class=textbox align=center>$kerosene_oil_quan1</td> <td align=center>=</td><td align=center>$kerosene_oil_quan_today</td> <td><img src=images/wrong.png width=100 height=70></td></tr>";
    
   
  echo"</table><br><br>";   

}

?>