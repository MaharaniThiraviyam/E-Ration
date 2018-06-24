<?php
session_start();
include("adminhomeheader.php");
$username=$_SESSION['username'];
$shop_no=$_SESSION['shop_no']
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>BILL</title>
    
    <style>
    .button1{
    font-size: 30px;
    font-family: Imprint MT Shadow;
    color: green;

}
 .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    .borderdisplay{
        border: 3px solid;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background:#99ff66;
        border-bottom: 6px solid #ddd;
        font-weight: bold;
        color:black;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
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
 <br><br>
   <center><h3>Bill Generation</h3></center>
    <form method="post" action="">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0"  >
            <tr class="top">
                <td colspan="2">
                    <table width="100%" >
                        <tr>
                            <td class="title">
                                <img src="images/adminsignuplogo.png" width="125" height="150">
                            </td>
                            <td><center>
                                <font color="green" size="5"><b>உணவு பொருள் வழங்கல் மற்றும் நுகர்வோர்
                                 பாதுகாப்பு துறை , தமிழ்நாடு அரசு</b></font>
                             </center>
                            </td>
                           
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table >
                        <tr>
                            <td>
                                <font color="black">கடை எண் : <?php echo $shop_no; ?><br>
                                அட்டை எண்  : <input type="text" name="card_num" required/><br>
                                 தேதி :<?php echo date("d.m.Y");?></font>
                            </td>
                            
                            <td>
                                <font color="black">
                                E-Ration Scheme<br>
                                
                                மாநிலம்: தமிழ்நாடு <br>
                                இந்தியா.
                                </font>
                            </td>
                        
                        </tr>
                    </table>
                </td>
            </tr>
            
            <table width="80%" class="borderdisplay" >
           
            
            <tr class="heading">
                <td>
                    பொருட்கள்
                </td>
                 <td>
                    அளவு (கிலோ)
                </td>  
                <td>
                </td>  
                <td>
                    விலை
                </td>
                <td>
                    மொத்த விலை
                </td>
            </tr>
            <tr class="item">
                <td>
                 <font color="black"><b>
               அரிசி</b>
                 </font>
                </td>
                
                <td >
                     <input type="text" name="rice_quan"  placeholder="0" align="right" style="width:25px; text-align: right;" >
               
                </td>
                <td>
                    -
                </td>
                <td>
                    -
                    </td>
                    <td>
                        <b>FREE</b>
                    </td>
            </tr>
            
            <tr class="item">
                <td>
                    <font color="black"><b>
               சர்க்கரை</b>
                 </font>
                    
                    </td>
                
                <td>
                    <input type="text" name="sugar_quan" id="sugar_quan" placeholder="0" align="right" style="width:25px; text-align: right;" onfocusout="sugar_quan1()" >
               
                </td>
                <td>
                    X
                </td>
                <td>
                    13.50
                </td>

                <td>
                 <input type="text" name="sugar_total" id="sugar_total" placeholder="0">
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                   
                    <font color="black"><b>கோதுமை
               </b> 
                </td>
                
                 <td >
                     <input type="text" name="wheat_quan"  id="wheat_quan" placeholder="0" align="right" style="width:25px; text-align: right;" onfocusout="wheat_quan1()" >
               
                </td>
                <td>
                    X
                </td>
                <td>
                    7.50
                    </td>
                    <td>
                        <input type="text" id="wheat_total" placeholder="0">
                    </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
               மைதா</b>
                 </font>
                    
                    </td>
                
                <td>
                    <input type="text" name="maida_quan" id="maida_quan" placeholder="0" align="right" style="width:25px; text-align: right;" onfocusout="maida_quan1()" >
                    
                </td>
                <td>
                    X
                </td>
                <td>
                    23.00
                </td>

                <td>
                 <input type="text" id="maida_total" placeholder="0">
                </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
               ரவா</b>
                 </font>
                    
                    </td>
                
                <td>
                    <input type="text" name="rava_quan" id="rava_quan" placeholder="0" align="right" style="width:25px; text-align: right;" onfocusout="rava_quan1()" >
                </td>
                <td>
                    X
                </td>
                <td>
                    20.00
                </td>

                <td>
                      <input type="text" id="rava_total" placeholder="0">
                </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
               வறுத்த  பருப்பு</b>
                 </font>
                    
                    </td>
                
                <td>
                    <input type="text" name="fried_quan"  id="fried_gram" placeholder="0" align="right" style="width:25px; text-align: right;" onfocusout="fried_gram1()" >
               
                    
                </td>
                <td>
                    X
                </td>
                <td>
                    45.00
                </td>

                <td>
                <input type="text" id="fried_total" placeholder="0">
                </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
                  
           உப்பு </b>
                 </font>
                    
                    </td>
                
                <td>
                    <input type="text" name="salt_quan"  id="salt_quan" placeholder="0" align="right" style="width:25px; text-align: right;" onfocusout="salt_quan1()" >
               
                </td>
                <td>
                    X
                </td>
                <td>
                    36.00
                </td>

                <td>
                <input type="text" id="salt_total" placeholder="0">
                
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    <font color="black"><b>
                  தேநீர் </b>
                 </font>
                    
                    </td>
                
                <td>
                    <input type="text" name="tea_quan"  id="tea_quan" placeholder="0" align="right" style="width:25px; text-align: right;" onfocusout="tea_quan1()" >
               
                    
               
                </td>
                <td>
                    X
                </td>
                <td>
                    15.50
                </td>

                <td>
                 <input  type="text" id="tea_total" placeholder="0">
                </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
                  எண்ணெய்</b>
                 </font>
                    
                    </td>
                
                <td>
                     <input type="text" name="oil_quan"  id="oil_quan" placeholder="0" align="right" style="width:25px; text-align: right;" onfocusout="oil_quan1()" >
               
                </td>
                <td>
                    X
                </td>
                <td>
                    25.00
                </td>

                <td>
                 <input  type="text" id="oil_total" placeholder="0">
                </td>
            </tr>
             <tr class="item">
                <td>
                    <font color="black"><b>
         மண்ணெண்ணெய்</b>
                 </font>
                    
                    </td>
                
                <td>
                    <input type="text" name="kerosene_oil_quan"  id="kerosene_oil_quan" placeholder="0" align="right" style="width:25px; text-align: right;" onfocusout="kerosene_quan1()" >
                </td>
                <td>
                    X
                </td>
                <td>
                    35.00
                </td>

                <td>
                <input  type="text" id="kerosene_total" placeholder="0">
                </td>
            </tr>
            <tr class="total">
                <td></td>
                <td></td>
                <td></td>
                <td><input type="button" value="TOTAL" onclick="tot_cal()"></td>
                <td>
                   <input  type="number" id="total" placeholder="0"> 
                </td>
            </tr>
           
        </font>
        
         
        </table>
        </table>
    </div>
    <center><input type="submit" name="logs" value="Submit" class="button1"></center>
    </form>
</body>
</html>

<script type="text/javascript">
    function sugar_quan1(){
        
       var sugar_quan= document.getElementById("sugar_quan").value;
       var total=sugar_quan*13.5;
       document.getElementById("sugar_total").value=total;
       
     
   }
 function wheat_quan1(){
        
       var wheat_quan= document.getElementById("wheat_quan").value;
       var total=wheat_quan*7.5;
        document.getElementById("wheat_total").value=total;
      
      }
    function maida_quan1(){
        
       var maida_quan= document.getElementById("maida_quan").value;
       var total=maida_quan*23;
       document.getElementById("maida_total").value=total;
       
        
   }
 function rava_quan1(){
        
       var rava_quan= document.getElementById("rava_quan").value;
       var total=rava_quan*20;
        document.getElementById("rava_total").value=total;
  
        }


   function fried_gram1(){
        
       var fried_gram= document.getElementById("fried_gram").value;
       var total=fried_gram*45;
       
       document.getElementById("fried_total").value=total;
       }
 function salt_quan1(){
        
       var salt_quan= document.getElementById("salt_quan").value;
       var total=salt_quan*36;
      
       document.getElementById("salt_total").value=total;
     }
    function tea_quan1(){
        
       var tea_quan= document.getElementById("tea_quan").value;
       var total=tea_quan*15.5;
     
       document.getElementById("tea_total").value=total;
 }
 function oil_quan1(){
        
       var oil_quan= document.getElementById("oil_quan").value;
       var total=oil_quan*25;
      
       document.getElementById("oil_total").value=total;
           
   }

   function kerosene_quan1(){
        
       var kerosene_quan= document.getElementById("kerosene_oil_quan").value;
       var total=kerosene_quan*35;
       
       document.getElementById("kerosene_total").value=total;
        
   }

   function tot_cal(){

      var sugar_total=document.getElementById('sugar_total').value;
      var wheat_total=document.getElementById('wheat_total').value;
      var maida_total=document.getElementById('maida_total').value;
      var rava_total=document.getElementById('rava_total').value;
      var fried_total=document.getElementById('fried_total').value;
 
      var salt_total=document.getElementById('salt_total').value;
      var tea_total=document.getElementById('tea_total').value;
      var oil_total=document.getElementById('oil_total').value;
      var kerosene_total=document.getElementById('kerosene_total').value;
      
       
     if(sugar_total==0)
        sugar_total=0;
    
     if(wheat_total==0)
        wheat_total=0;

     if(maida_total==0)
        maida_total=0;

     if(rava_total==0)
        rava_total=0;

    if(fried_total==0)
        fried_total=0;

    if(salt_total==0)
        salt_total=0;

     if(tea_total==0)
        tea_total=0;

     if(oil_total==0)
        oil_total=0;

     if(kerosene_total==0)
        kerosene_total=0;

    


        var total=parseInt(sugar_total)+parseInt(wheat_total)+parseInt(maida_total)+parseInt(rava_total)+parseInt(fried_total)+parseInt(salt_total)+parseInt(tea_total)+parseInt(oil_total)+parseInt(kerosene_total);
       document.getElementById("total").value=total;


   }
</script>



<?php
 $date1=date("Y-m-d");
 $month1=date('M');
 
if(isset($_POST['logs'])){

  
  
  
  $card_num=$_POST['card_num'];

  


  $rice_quan=$_POST['rice_quan'];
  $sugar_quan=$_POST['sugar_quan'];
  $wheat_quan=$_POST['wheat_quan'];
  $maida_quan=$_POST['maida_quan'];
  $rava_quan=$_POST['rava_quan'];



  $fried_gram=$_POST['fried_quan'];
  $salt_quan=$_POST['salt_quan'];
  $tea_quan=$_POST['tea_quan'];
  $oil_quan=$_POST['oil_quan'];
  $kerosene_oil_quan=$_POST['kerosene_oil_quan'];


  if($sugar_quan==0)
        $sugar_quan=0;
    
     if($wheat_quan==0)
        $wheat_quan=0;

     if($maida_quan==0)
        $maida_quan=0;

     if($rava_quan==0)
        $rava_quan=0;

    if($fried_gram==0)
        $fried_gram=0;

    if($salt_quan==0)
        $salt_quan=0;

     if($tea_quan==0)
        $tea_quan=0;

     if($oil_quan==0)
        $oil_quan=0;

     if($kerosene_oil_quan==0)
        $kerosene_oil_quan=0;

    
   $host="localhost";
   $user="root";
   $password1="";
   $dbname="ration management";

  
$conn = new mysqli($host, $user, $password1, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 


$query="insert into temp_purchase(shop_id,rice_quan,sugar_quan,wheat_quan,maida_quan,rava_quan,oil_quan,kerosene_oil_quan,fried_gram,salt_quan,today_date,card_no,tea_quan)values($shop_no,$rice_quan,$sugar_quan,$wheat_quan,$maida_quan,$rava_quan,$oil_quan,$kerosene_oil_quan,$fried_gram,$salt_quan,'$date1','$card_num',$tea_quan)" or die(mysql_error());
 $result=mysqli_query($conn,$query);

$query="insert into history_logs(card_no,shop_id,rice_quan,sugar_quan,wheat_quan,maida_quan,rava_quan,fried_gram,salt_quan,tea_quan,oil_quan,kerosene_oil_quan,purchase_date,month1)values('$card_num',$shop_no,$rice_quan,$sugar_quan,$wheat_quan,$maida_quan,$rava_quan,$fried_gram,$salt_quan,$tea_quan,$oil_quan,$kerosene_oil_quan,'$date1','$month1')" or die(mysql_error());
   
 $result=mysqli_query($conn,$query);

 //Update Product quantity table

$sql="SELECT * FROM product_quantity where shop_id=$shop_no";
   $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    

  }
     
     $rice_quan=$row['rice_quan']-$rice_quan;
     $sugar_quan=$row['sugar_quan']-$sugar_quan;
     $wheat_quan=$row['wheat_quan']-$wheat_quan;
     $maida_quan=$row['maida_quan']-$maida_quan;
     $rava_quan=$row['rava_quan']-$rava_quan;

     $oil_quan=$row['oil_quan']-$oil_quan;
     $tea_quan=$row['tea_quan']-$tea_quan;
     $salt_quan=$row['salt']-$salt_quan;
     $fried_gram=$row['fried_gram']-$fried_gram;
     $kerosene_oil_quan=$row['kerosene_oil_quan']-$kerosene_oil_quan;



  $query="update product_quantity set rice_quan=$rice_quan,sugar_quan=$sugar_quan,wheat_quan=$wheat_quan,maida_quan=$maida_quan,rava_quan=$rava_quan,fried_gram=$fried_gram,salt=$salt_quan,tea_quan=$tea_quan,oil_quan=$oil_quan,kerosene_oil_quan=$kerosene_oil_quan where shop_id=$shop_no" or die(mysql_error());
   
 
  $result = $conn->query($query);


 echo "<script>alert('Bill details Updated')</script>";

 echo "<font color=red><h3><u><b>Important Remainder Alerts</b></u></h3></font>";

 if($rice_quan<6)
  echo "<script>alert('Rice Quantity is less than 5 Kgs')</script> * Rice Quantity is less than 5 Kgs .<br>";
  
  if($sugar_quan<6)
  echo "<script>alert('Sugar Quantity is less than 5 Kgs')</script> * Sugar Quantity is less than 5 Kgs .<br>";
  

 if($wheat_quan<6)
  echo "<script>alert('Wheat Quantity is less than 5 Kgs')</script> * Wheat Quantity is less than 5 Kgs .<br>";
  

 if($maida_quan<6)
  echo "<script>alert('Maida Quantity is less than 5 Kgs')</script> * Maida Quantity is less than 5 Kgs .<br>";
  

 if($rava_quan<6)
  echo "<script>alert('Rava Quantity is less than 5 Kgs')</script> * Rava Quantity is less than 5 Kgs .<br>";
  

 if($tea_quan<6)
  echo "<script>alert('Tea Quantity is less than 5 Kgs')</script> * Tea Quantity is less than 5 Kgs .<br>";

 if($salt_quan<6)
  echo "<script>alert('Salt Quantity is less than 5 Kgs')</script> * Salt Quantity is less than 5 Kgs .<br>";
  

 if($fried_gram<6)
  echo "<script>alert('fried gram Quantity is less than 5 Kgs')</script> * fried gram Quantity is less than 5 Kgs .<br>";
  
 if($oil_quan<6)
  echo "<script>alert('Oil Quantity is less than 5 Kgs')</script> * Oil Quantity is less than 5 Kgs .<br>";
  
 if($kerosene_oil_quan<6)
  echo "<script>alert('kerosene Oil Quantity is less than 5 Kgs')</script> * kerosene Oil Quantity is less than 5 Kgs .<br>";
  

  

 }
 ?>