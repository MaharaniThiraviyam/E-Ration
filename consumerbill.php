<?php
session_start();
include("adminhomeheader.php");

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  
 
  
    <div class="w3-padding w3-large w3-text-black" align="right">
           
        <i class="material-icons">person</i><?php echo "maha";?></i>
        <a href="consumerhome.php"> <i class="fa fa-arrow-circle-o-left" style="font-size:25px"></i>Back to home</a>
        
    </div>
          
 
    <center>
    <form action="" method="post" >

     <pre>
     <h2><font color="blue"><b><u>View Bill</u></b>  <i class="fa fa-file" style="font-size:30px;"></i></font></h2>
    </pre>

 <table width="50%" height="20%">
      <tr>
         <td>அட்டை எண்  :</td> <td><input type="text" name="card_num" required/></td>
      </tr>

      <tr>
         <td>மாதம் :</td> <td><input type="text" name="month1" required/></td>
      </tr>
    </table>

    <br>
     <input type="submit" value="View" name="display" class="button1">
     <br><br>
    </form>
  </center>
<?php
 
 $shop_id=0;
 $card_num="";
 $purchase_date="";
 $rice_quan=0;
 $wheat_quan=0;
 $sugar_quan=0;
 $maida_quan=0;
 $rava_quan=0;

 $tea_quan=0;
 $oil_quan=0;
 $salt_quan=0;
 $fried_gram=0;
 $kerosene_oil_quan=0;


if(isset($_POST['display'])){

   
    $card_num=$_POST['card_num'];
    $month1=$_POST['month1'];

  $_SESSION["card_num"]=$_POST['card_num'];
  
  $_SESSION["month1"]=$_POST['month1'];



   $host="localhost";
   $user="root";
   $password1="";
   $dbname="ration management";

  
$conn = new mysqli($host, $user, $password1, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 



$sql="SELECT * FROM history_logs where card_no='$card_num' and month1='$month1'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
    while($row=$result->fetch_assoc()){
      $shop_id=$row['shop_id'];

      $rice_quan=$row['rice_quan'];
      $sugar_quan=$row['sugar_quan'];
      $wheat_quan=$row['wheat_quan'];
      $maida_quan=$row['maida_quan'];
      $rava_quan=$row['rava_quan'];
      $fried_gram=$row['fried_gram'];
      $salt_quan=$row['salt_quan'];
      $tea_quan=$row['tea_quan'];
      $oil_quan=$row['oil_quan'];
      $kerosene_oil_quan=$row['kerosene_oil_quan'];
      $purchase_date=$row['purchase_date'];
    }
    }
 }
 ?>

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
                                <font color="black">கடை எண் :<?php echo $shop_id; ?><br>
                                அட்டை எண்  :<?php echo $card_num; ?><br>
                                 தேதி :<?php echo $purchase_date;?></font>
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
                     <?php echo $rice_quan; ?>
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
                    <?php echo $sugar_quan; ?>
                </td>
                <td>
                    X
                </td>
                <td>
                    13.50
                </td>

                <td>
                 <?php echo $sugar_quan *13.5; ?>
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                   
                    <font color="black"><b>கோதுமை
               </b> 
                </td>
                
                 <td >
                      <?php echo $wheat_quan; ?>
                </td>
                <td>
                    X
                </td>
                <td>
                    7.50
                    </td>
                    <td>
                         <?php echo $sugar_quan * 7.5; ?>
                         </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
               மைதா</b>
                 </font>
                    
                    </td>
                
                <td>
                    <?php echo $maida_quan; ?> 
                </td>
                <td>
                    X
                </td>
                <td>
                    23.00
                </td>

                <td>
                 <?php echo $sugar_quan * 23; ?>
                </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
               ரவா</b>
                 </font>
                    
                    </td>
                
                <td>
                     <?php echo $rava_quan; ?>
                    </td>
                <td>
                    X
                </td>
                <td>
                    20.00
                </td>

                <td>
                       <?php echo $rava_quan *20; ?>
                      </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
               வறுத்த  பருப்பு</b>
                 </font>
                    
                    </td>
                
                <td>
                   <?php echo $fried_gram; ?>
                   
                    
                </td>
                <td>
                    X
                </td>
                <td>
                    45.00
                </td>

                <td>
               
               <?php echo $fried_gram *45; ?>
                    </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
                  
           உப்பு </b>
                 </font>
                    
                    </td>
                
                <td>
                    <?php echo $salt_quan; ?>
                   
                </td>
                <td>
                    X
                </td>
                <td>
                    36.00
                </td>

                <td>
                <?php echo $salt_quan *36; ?>
                   
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    <font color="black"><b>
                  தேநீர் </b>
                 </font>
                    
                    </td>
                
                <td>
                   <?php echo $tea_quan; ?>
                   
                    
               
                </td>
                <td>
                    X
                </td>
                <td>
                    15.50
                </td>

                <td>
                 <?php echo $tea_quan * 15.5; ?>
                   </td>
            </tr>
            <tr class="item">
                <td>
                    <font color="black"><b>
                  எண்ணெய்</b>
                 </font>
                    
                    </td>
                
                <td>
                    <?php echo $oil_quan; ?>
                   
                </td>
                <td>
                    X
                </td>
                <td>
                    25.00
                </td>

                <td>
                 <?php echo $oil_quan* 25; ?>
                   
                 </td>
            </tr>
             <tr class="item">
                <td>
                    <font color="black"><b>
                  மண்ணெண்ணெய்</b>
                 </font>
                    
                    </td>
                
                <td>
                    <?php echo $kerosene_oil_quan; ?>
                   
                </td>
                <td>
                    X
                </td>
                <td>
                    35.00
                </td>

                <td>
               <?php echo $kerosene_oil_quan * 35; ?>
                    </td>
            </tr>
            <tr class="total">
                <td></td>
                <td></td>
                <td></td>
                <td><input type="button" value="மொத்தம்" ></td>
                <td>
                   
                    </td>
            </tr>
           
        </font>
        
         
        </table>
        </table>
        <br><br>
        <center>
        <input type="button" onclick="fun()" value="Download"><br>
    </center>
    </div>
    </form>
</body>
</html>

<script type="text/javascript">
function fun(){
	window.location.href="download.php";
}
</script>