<?php
  session_start(); 
  include("adminhomeheader.php");
   $username=$_SESSION['username'];
   $shop_no=$_SESSION['shop_no'];
?>
<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css1/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   
</head>
<style type="text/css">
  .display{
    
    font-size:21px;
    cursor: pointer;
    color:blue;
    user-select: none;
     
  }
   .display:hover {
  color: black;
    }
</style>
<body>
	
    <div class="container" style="margin:7% auto;">
    	<h4>Latest Discussion</h4>
    	<hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Product Quality and Shop Maintenance Discussion</h3><h3><?php echo "Shop Number :".$shop_no;?></h3>
                </div> 
                 <div class="panel-body">
         
              
                
                            <?php

                      include ("database.php");
                      echo "<label>Topic Title: </label>  Discussion Product Quality and Shop Maintenance<br>";
                       
                       echo "<label>Date time posted: </label> 2015-03-24 02:46:55";
                       echo "<p class='well'>Here We can discuss about product quality and shop maintenance details and also ask doubts if you have ... Others are ready to solve your doubts .</p>";
                       echo "<label>Posted By: </label> Admin";
                   
                     
                    
                
              
                    
              ?>

              <br><label>Comments</label><br>
              <div id="comments">
              <?php 

              $sql="SELECT * FROM consumercomment where shop_id=$shop_no";
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0)  {
                   while($row=$result->fetch_assoc()){

                    echo "<label>Comment by: </label> ".$row['user_name']."<br>";
                     echo '<label class="pull-right">'.$row['date1'].'</label>';
                     echo "<p class='well'>".$row['comment']."</p>";
                     ?>
                     <i onclick="myFunction(this)" class="display" >

                       <span class="glyphicon glyphicon-thumbs-up" id="likedisplay" name="likedisplay"><?php echo $row['like1']; ?></span>Like
                     </i><br><br><br><br>
                     
                     <?php
              }

            }

              ?>
            </div>
              </div>
          </div>
          <hr>
            <div class="col-sm-5 col-md-5 sidebar">
          <h3>Comment</h3>
          <form method="POST">
            <textarea type="text" class="form-control" name="commenttext"></textarea><br>
            <input type="submit" name="comment" id="save" class="btn btn-success pull-right" value="Comment">
          </form>
        </div>
    </div>

	
</body>
</html>
<?php
if(isset($_POST['comment'])){

  $commenttext=$_POST['commenttext'];
  date_default_timezone_set("Asia/Taipei");
  $datetime=date("Y-m-d h:i:sa");



   $query="insert into consumercomment(comment,date1,user_name,like1)values('$commenttext','$datetime','$username',1)" or die(mysql_error());
   
   $result=mysqli_query($conn,$query);


   echo "<label>Comment by: </label> ".$username."<br>";
                     echo '<label class="pull-right">'.$datetime.'</label>';
                     echo "<p class='well'>".$commenttext."</p>";
   }
   ?>


   <script>
  var counter=0;
function myFunction(x) {
  
 
    var num = document.getElementById("likedisplay");
     num=parseInt(num.innerHTML); 
    if(counter%2==0)
     document.getElementById("likedisplay").innerHTML=++num;
    else
     document.getElementById("likedisplay").innerHTML=--num; 
     counter++;     

}
</script>