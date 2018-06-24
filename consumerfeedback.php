<html>
<head>
	  <title>Feedback</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	.container{
	padding-top: 20px;
    background-color: #fff;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 20px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    border-radius: 8px; 
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
    width: 50%;
}
.button1{
	font-size: 30px;
	font-family: Kristen ITC;
	color: blue;

}
	</style>
</head>
<body bgcolor="black">
	<br><br>
	<center>
	<form action="" method="post" class="container">
		 <div class="w3-padding w3-large w3-text-black" align="right">
           
		 <a href="consumerhome.php"> <i class="fa fa-arrow-circle-o-left" style="font-size:25px"></i>Back to home</a>
        
         </div>
		
		 <h2><font color="blue"><b><u>Feedback</u></b></font></h2>
		 Provide the feedback about product quality :<br><br>
		 Rate the performance of distributor ?<br><br>
		 <input type="radio" name="rating" value="good"><label>Good</label>
		 <input type="radio" name="rating" value="averaage"><label>Average</label>
		 <input type="radio" name="rating" value="bad"><label>Bad</label>
		 <br><br>

		 <table width="80%" height="40%">
		 	

		 	<tr>
		 		 <td>Product Name</td> <td><input type="text" name="product_name" required/></td>
		 	</tr>
		 	<tr>
		 		 <td>Ration Shop Number</td> <td><input type="text" name="shop_id"   required/></td>
		 	</tr>
		 	<tr>
		 		 <td>Card Number</td> <td><input type="text" name="card_num" required/></td>
		 	</tr>
		 	<tr>
		 		 <td>Comments</td> <td><textarea name="comments" rows="5"></textarea></td>
		 	</tr>

		 </table>
		 <br>
		 <input type="submit" value="Post feedback" name="post" class="button1">
		 <br><br>
		</form>
	</center>
</body>
</html>


<?php

if(isset($_POST['post'])){

$shop_id=$_POST['shop_id'];
$comments=$_POST['comments'];
$card_num=$_POST['card_num'];
$product_name=$_POST['product_name'];
$rating=$_POST['rating'];



    $host="localhost";
    $user="root";
    $password1="";
    $dbname="ration management";
   $conn=new mysqli($host,$user,$password1,$dbname);

   if($conn->connect_error){
    die($conn->connect->error);
   }

  $query="insert into rating_shop values($shop_id,'$card_num','$rating','$comments','$product_name')" or die(mysql_error());

  $result=mysqli_query($conn,$query);
  echo "<script>alert('Feedback Posted..')</script>";

}
?>

