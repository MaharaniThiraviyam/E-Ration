<?php
session_start();
include("adminhomeheader.php");
$admin_id=$_SESSION['adminid'];
$username=$_SESSION['username'];
   
   $host="localhost";
   $user="root";
   $password1="";
   $dbname="ration management";
 
   $row="";
   $conn = new mysqli($host, $user, $password1, $dbname);
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

       $sql="SELECT * FROM admintable where admin_id=$admin_id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
    $row = $result->fetch_assoc();
  }
?>
<head>
  <title>Admin Profile</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <!------ Include the above in your HEAD tag ---------->

<style type="text/css">
                input.hidden {
    position: absolute;
    left: -9999px;
}

.display1{
  border-radius:50%;
}
#profile-image1 {
    cursor: pointer;
  
     width: 150px;
    height: 150px;
    border:3px solid green ;}
  .tital{ font-size:16px; font-weight:500;}
   .bot-border{ border-bottom:1px #f8f8f solid;  margin:5px 0  5px 0}
</style>
</head>
<div class="w3-padding w3-large w3-text-black">
    <div align="right">
        
        <i class="material-icons">person</i><?php echo $username;?></i>
         <a href="adminhome.php"> <i class="fa fa-arrow-circle-o-left" style="font-size:25px"></i>Back to home</a>
        
        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
      </div>
          
 </div>
 <br>

  <h2><b><center><font color="blue">Welcome to E-Ration</font></center></b></h3>

<div class="container"  >
  <div class="row" >
  
        
        
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h3 <b><font color="green"><center>Admin (Shop Distributor) Profile</center></font></b></h3></div>
   <div class="panel-body">
       
    <div class="box box-info" >
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align> <?php echo '<img alt="Admin Pic" src="data:image/jpeg;base64,'.base64_encode($row['pic']).'"  id="profile-image1" class="display1">'?>
                
                    
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:green"><?php echo $row['name'];?></h4></span>
              <span><p>Shop Distributor</p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >ID:</div><div class="col-sm-7 col-xs-6 "><?php echo $row['admin_id'];?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " > Name:</div><div class="col-sm-7"> <?php echo $row['name'];?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Mail-Id:</div><div class="col-sm-7"><?php echo $row['mailid'];?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Shop Number:</div><div class="col-sm-7"><?php echo $row['shop_no'];?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Ward Number:</div><div class="col-sm-7"><?php echo $row['ward_no'];?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >City:</div><div class="col-sm-7">Madurai</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >State</div><div class="col-sm-7">Tamil Nadu</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Nationality:</div><div class="col-sm-7">Indian</div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
   




         