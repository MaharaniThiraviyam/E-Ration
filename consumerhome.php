
<?php
session_start();
include("consumerheader.php");
$card_no=$_SESSION['card_no'];
$user_name=$_SESSION['user_name'];
$shop_no=$_SESSION['shop_no'];

 
 ?>
 

  <title>E-Ration</title>
  <!--Custom CSS-->
  
  <link rel="stylesheet" type="text/css" href="../css1/global.css">
  <!--Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="../css1/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material-icons.css">
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">

.material-icons {vertical-align:-14%}

.img1{
 border-radius:75px;
 }
.big {
    line-height: 2.2;
}
.title1{
font-family:"Imprint MT Shadow";
color:#0000FF;
font-size:25px;
}
.text1{
font-family:"Lucida Console";
color:#000000;
font-size:15px;
}
.flash {
   animation-name: flash;
    animation-duration: 0.2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
	font-family:"Courier New";
	font-size:30px;
}
@keyframes flash {
    from {color:blue;}
    to {color: black;}
}
 
body {margin:0;}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #1E90FF;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img1 {
    border-radius: 50%;
}
 .mydiv{
   background-color:blue;
   color: white;
   width: 100%;

 }
 .mydiv1{
   background-color:red;
   color: white;
   width: 100%;

 }
</style>
<body>
  


<div id="mySidenav" class="sidenav">
  
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
  <a href="#" id="top">Home</a>
  <a href="consumerprofile.php">Profile</a>
  <a href="consumersearch.php">Product Quantity</a>
  <a href="consumerbill.php">View Bill</a>
  <a href="consumerfeedback.php">Feed Back</a>
  <a href="consumercomment.php">Discussion Forum</a>
</div>
<span style="font-size:20px;cursor:pointer" onClick="openNav()">&#9776; MENU</span>

<div class="w3-padding w3-small w3-text-black">
    <div align="right">
        <i class="material-icons">home</i>Home
        <i class="material-icons">person</i><?php echo $user_name;?></i>
        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
      </div>
          <div align="right">
        <i class="material-icons">store</i><?php echo $shop_no;?>(shop Id)
         <i class="fa fa-file" style="font-size:20px;"></i><?php echo " ".$shop_no." (Card Number)";?>
          
        
      </div>
 </div>

                          

 <h2 class="w3-center" align="center"> Welcome to E-Ration</h2>

    <div class="mydiv">
     <h2><b>செய்திகள் :</b></h2>
    <ul type="desc">
    <li>ரேஷன் அட்டையில், ஆதார் எண்னை கைபேசி செயலி மற்றும் இணையதளம் வழியாக இணைக்கும் வழி செயல்படுத்தப்பட்டது.</li>
    <li>மேம்படுத்தப்பட்ட நுகர்வோர் ஆன்லைன் சேவைகள்</li>
       <ul type="square"> 
        <li>  பொது வலைதளம் </li>
        <li> கைபேசி பயன்பாடு</li> 
        <li>குறுஞ்செய்தி சேவை</li>
        <li> அழைப்பு மையம்</li>
        <li>மின்னஞ்சல்</li>
       </ul>
    <li>அதிக வெளிப்படைத்தன்மை…..அதிக பொறுப்புடைமை….அதிக தெரிவுநிலை</li>

    <li>தமிழ் நாடு அரசு பொது விநியோகத் திட்டத்தினைத் தானியக்க செயல்பாடாக மாற்ற திட்டமிட்டுள்ளது கைமுறை செயல்பாட்டிலிருந்து தானியங்கி முறை.
    <li>உங்களது மின்னணு குடும்ப அட்டை "தமிழ் நாடு இ-சேவை மையம்" மூலமாகவும் அச்சிட வழிவகை செய்யப்பட்டுள்ளது.</li>
    <li>அச்சிடும் முன் அதில் உள்ள விவரங்கள் சரியாக உள்ளதா என்பதை உறுதி செய்து கொள்ளவும்.
மின்னணு குடும்ப அட்டைகள் அச்சிட தயாராக உள்ளது. அதில் உள்ள தகவல்கள் அனைத்தும் சரியாக உள்ளது என்பதை உறுதி செய்து கொள்ள அனைத்து குடும்ப அட்டைதாரர்களும் கேட்டு கொள்ளப்படுகிறார்கள்</li>
   </ul>
   <br>
</div>
<br><br>
 <div class="mydiv1">
     <h2><b>குறுஞ்செய்தி சேவைகள் :</b></h2>
    <ul type="desc">
      <li>குறுஞ்செய்தி குறியீடு விளக்கம்</li>
      <li>PDS <இடைவெளி> 101 - நியாய விலைக் கடையில் உள்ள பொருள் விவரங்கள்</li>
      <li>PDS <இடைவெளி> 102 - நியாய விலைக் கடையின் நிலை (திறந்துள்ளது/மூடப்பட்டுள்ளது)</li>
      <li>PDS <இடைவெளி> 107 - கட்டண தொகை பற்றிய புகாருக்கு</li>
    </ul>
    <br>
  </div>
  <br><br> 
<div class="w3-content w3-section" style="max-width:500px" align="center">
  <img class="mySlides" src="images/shop1.jpg" style="width:100%">
  <img class="mySlides" src="images/shop2.jpg" style="width:100%">
  <img class="mySlides" src="images/shop3.jpg" style="width:100%">
   <img class="mySlides" src="images/shop5.jpg" style="width:100%">
</div>
<br><br>

    <table align="center" width="90%">
    <tr>
        <td width="35%"><img src="images/image1.png" align="center" height="380" width="500"></td>
        <td width="20%"></td>
        <td width="35%"><img src="images/image3.png" align="center" height="380" width="500"></td>
    </tr>
   


</body>




<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>



