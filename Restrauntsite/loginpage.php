<html>
<head>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link href="bootstrap.min.css" rel="stylesheet">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    

	<style>
    .main
    {
    	height:100%;
    	width:100%;
    	background-color:white;
    }
    .middle
    {
    	height:65%;
    	width:100%;
    	background-color: f3f4f7;
        top:0px;
    }
    .footer
      {
      	height:50%;
      	width:100%;
      	background-color:black;
       
        color: red;
        text-align: center;
        margin-top:0px;  
      }
      .col1
      {
        height:100%;
        width:20%;
        background-color:f9ebdf;
        float:left;
      }
      .col2
      {
        height:100%;
        width:60%;
        background-color:e64b50;
        float:left;
      }
      .col3
      {
        height:100%;
        width:20%;
        background-color:e64b50;
        float:left;
      }

	</style>


	<body>
		<div class="main">
        <nav class="navbar navbar-inverse">
         <div class="container-fluid" >
        <div class="navbar-header">
        <a class="navbar-brand" href="#">RESTURANT SITE</a>
        </div>
        <ul class="nav navbar-nav" >
      <li><a href="homepage.php">HOME</a></li>
      <li><a href="aboutpage.php">ABOUT US</a></li>
      <li><a href="contactpage.php">CONTACT US</a></li>
      <li><a href="menupage.php">MENU</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="signuppage.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
      <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
         </ul>
        </div>
        </nav>
        <div class="middle">
          <div class="col1">
            <marquee direction="up" height="70%"><b style="color:003a70;"><h1>HURRY!! <h1>
            <h3>HERE IS THE FOODIE DAY...**</h3></b>
           <img src="cute.jpg" style="border-radius: 50%;" ></marquee>
          </div>
          <div class="col2">
            <br><br><br><br>
            <form class="form-horizontal" method="post" action="salerpage.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
          </div>
          <div class="col3"></div>
        </div>
        <div class="footer">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/xPPLbEFbCAo?autoplay=1&loop=1&playlist=GRonxog5mbw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height:250px; width:400px;padding-top: 50px;"></iframe>
          <p style="padding-top:50px;"><a href="#">@copyright2020:REATURANT.COM</a></p>
        </div>
	    </div>		

	</body>


	</head>
</html>


<?php
if(isset($_REQUEST['pwd']))
{
  $e=$_REQUEST['email'];
  $p=$_REQUEST['pwd'];

  $con=mysqli_connect('localhost','root','','rest');
  $sql="select * from login";
  $rs=mysqli_query($con,$sql);

  $c=0;
  while($row=mysqli_fetch_array($rs))
{
    if($row['mail']==$e && $row['pwd']==$p)
  {
    $c++;
  }
  else
  {
    echo"invalid mail id and password";
  }
}
  
}
?>