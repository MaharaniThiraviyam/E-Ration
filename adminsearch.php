<?php
session_start();
include("adminhomeheader.php");
   
   $admin_id=$_SESSION['adminid'];
   $user_name=$_SESSION['username'];
   $shop_no=$_SESSION['shop_no'];
 

 ?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Stock Information</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  
        <link rel="stylesheet" href="css/style5.css">
        <style type="text/css">
          .button5{
            background-color:green;
            font-size: 25px;
            color: white;
            border-radius: 10px;
            font-family: "monotype Corsiva";
}
        </style>

</head>

<body >
 
 <div class="w3-padding w3-large w3-text-black">
    <div align="right">
        
        <i class="material-icons">person</i><?php echo $user_name;?></i>
        <a href="adminhome.php"> <i class="fa fa-arrow-circle-o-left" style="font-size:25px"></i>Back to home</a>
        
        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
      </div>
       <div align="right">
        <i class="material-icons">store</i><?php echo $shop_no;?>(shop Id)
          
        
      </div>
          
 </div>

 <form action="" method="post">
<table align="center" height="15%" width="20%" cellpadding="0" cellspacing="30" >
<tr ><td align="center"><input type="submit" name="all" value="All Stock Information" class="button2" align="center"></td>
<td align="center"><input type="submit" name="minimum" value="Minimum Stock Information" class="button2" align="center"></td>
</tr>
</table>
</form>

  <?php
    $stockname="";
    $rice_quan=0;
    $sugar_quan=0;
    $wheat_quan=0;
    $oil_quan=0;
    $tea_quan=0;
    $kerosene_oil_quan=0;
    $rava_quan=0;
    $maida_quan=0;
   
   
   $host="localhost";
   $user="root";
   $password1="";
   $dbname="ration management";

   $conn = new mysqli($host, $user, $password1, $dbname);
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

  $sql="SELECT * FROM product_quantity where shop_id=$shop_no";
  
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    
     while($row = $result->fetch_assoc()){
      
       

      $rice_quan=$row['rice_quan'];
      $sugar_quan=$row['sugar_quan'];
      $wheat_quan=$row['wheat_quan'];
      $maida_quan=$row['rice_quan'];
      $rava_quan=$row['rava_quan'];
      

      $fried_gram=$row['fried_gram'];
      $salt=$row['salt'];
      $tea_quan=$row['tea_quan'];
      $oil_quan=$row['oil_quan'];
      $kerosene_oil_quan=$row['kerosene_oil_quan'];
      

       if(isset($_POST['minimum'])){
        if($rice_quan>5)
           $rice_quan="Above 5";
         if($sugar_quan>5)
           $sugar_quan="Above 5";
         if($wheat_quan>5)
           $wheat_quan="Above 5";
         if($maida_quan>5)
           $maida_quan="Above 5";
         if($rava_quan>5)
           $rava_quan="Above 5";
         
         if($fried_gram>5)
           $fried_gram="Above 5";
         if($salt>5)
           $salt="Above 5";
         if($tea_quan>5)
           $tea_quan="Above 5";
         if($oil_quan>5)
           $oil_quan="Above 5";
         if($kerosene_oil_quan>5)
           $kerosene_oil_quan="Above 5";
         
      }

    if((isset($_POST['all']))||(isset($_POST['minimum']))) {
    
    echo '
  <div class="intro">
  </div>

    <div id="container">
    <div class="pricetab">
      <h1> Quantity ';
      echo ":"." ".$rice_quan." Kgs";
     echo'</h1>
      <div class="price"> 
        <img src="images/rice.jpg" height="120" width="120">

      </div>
      <div class="infos">
        <h1>  அரிசி</h1>
       
      </div>
      <div class="pricefooter">
        <div class="button">
          <br>
          <b><font color="white">FREE</font></b>
        </div>
      </div>
    </div>
    <div class="pricetab">
    <h1> Quantity';

      echo ":"." ".$sugar_quan." Kgs";
    echo'
                             </h1>
      <div class="price"> 
        <img src="images/sugar.jpg" height="120" width="120"> 
      </div>
      <div class="infos">
        <h1> சர்க்கரை </h1>
        
      </div>
      <div class="pricefooter">
        <div class="button">
          <br>
          <b><font color="white"><i>&#8377;</i>  13.50</font></b>
        </div>
      </div>
    </div>
    <div class="pricetabmid">
      <h1>Quantity';

  echo ":"." ".$wheat_quan." Kgs";
  echo '<div class="pricemid"> 
         <img src="images/wheat.jpg" height="125" width="120">  
      </div>
      <div class="infos">
        <h1> கோதுமை</h1>
       
      </div>
      <div class="pricefootermid">
        <div class="buttonmid">
          <br>
          <b><font color="white"><i>&#8377;</i> 7.50</font></b>
        
          </div>
      </div>
    </div>
    <div class="pricetab">
      <h1> Quantity';
       echo ":"." ".$maida_quan." Kgs";
       echo ' </h1>
      <div class="price"> 
         <img src="images/maida.png" height="120" width="120"> 
      </div>
      <div class="infos">
        <h1> மைதா</h1>
       
      </div>
      <div class="pricefooter">
        <div class="button">
          <br>
         <b><font color="white"><i>&#8377;</i>  23.00</font></b>
        
        </div>
      </div>
    </div>
    <div class="pricetab">
      <h1> Quantity';
       echo ":"." ".$rava_quan." Kgs";
       echo '
      </h1>
   
      <div class="price"> 
        <img src="images/rava.jpg" height="120" width="120">
      </div>
      <div class="infos">
        <h1> ரவா </h1>
     
      </div>
      <div class="pricefooter">
        <div class="button">
          <br>
           <b><font color="white"><i>&#8377;</i>  20.00</font></b>
       
         </div>
      </div>
    </div>  
  </div>';

  echo '<!-- SECOND ROW -->
<div id="container">
    <div class="pricetab">
      <h1> Quantity ';
      echo ":"." ".$fried_gram." Kgs";
      echo '</h1>
      <div class="price"> 
        <img src="images/rice.jpg" height="120" width="120">
      </div>
      <div class="infos">
        <h1>  வறுத்த 
 பருப்பு</h1>
       
      </div>
      <div class="pricefooter">
        <div class="button">
          <br>
          <b><font color="white">45.00</font></b>
        </div>
      </div>
    </div>
    <div class="pricetab">
      <h1>Quantity';
       echo ":"." ".$salt." Kgs";
       echo '      </h1>
      <div class="price"> 
        <img src="images/sugar.jpg" height="120" width="120"> 
      </div>
      <div class="infos">
        <h1> உப்பு </h1>
        
      </div>
      <div class="pricefooter">
        <div class="button">
          <br>
          <b><font color="white"><i>&#8377;</i> 36.00</font></b>
        </div>
      </div>
    </div>
    <div class="pricetabmid">
      <h1> Quantity';
       echo ":"." ".$tea_quan." Kgs";

       echo '</h1>
      <div class="pricemid"> 
         <img src="images/wheat.jpg" height="125" width="120">  
      </div>
      <div class="infos">
        <h1> தேநீர்</h1>
       
      </div>
      <div class="pricefootermid">
        <div class="buttonmid">
          <br>
          <b><font color="white"><i>&#8377;</i>  15.50</font></b>
        
          </div>
      </div>
    </div>
    <div class="pricetab">
      <h1> Quantity';
       echo ":"." ".$oil_quan." Kgs";
       echo ' </h1>
      <div class="price"> 
         <img src="images/maida.png" height="120" width="120"> 
      </div>
      <div class="infos">
        <h1> எண்ணெய்</h1>
       
      </div>
      <div class="pricefooter">
        <div class="button">
          <br>
         <b><font color="white"><i>&#8377;</i>  25.00</font></b>
        
        </div>
      </div>
    </div>
    <div class="pricetab">
      <h1> Quantity';
      echo ":"." ".$kerosene_oil_quan." Kgs";
                                  


    echo '</h1>
   
      <div class="price"> 
        <img src="images/rava.jpg" height="120" width="120">
      </div>
      <div class="infos">
        <h1> மண்ணெண்ணெய் </h1>
     
      </div>
      <div class="pricefooter">
        <div class="button">
          <br>
           <b><font color="white"><i>&#8377;</i>  36.00</font></b>
       
         </div>
      </div>
    </div>  
  </div>';





 }

}
      
  }

  
 ?>



