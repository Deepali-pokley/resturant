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
      .mainrow
      {
      	height:100%;
      	width:100%;
      	background-color:white;
      }
      .header
      {
      	height:8%;
      	width:100%;
      	background-color:white;
      	margin-top:0px;
        position:fixed;
        
      }
      
      .middle
      {
      	height:100%;
      	width:100%;
      	background-color:white;    

       }


       

/* Bottom right text */
.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
.col1
{
	float:left;
	height:86.85%;
	width:20%;
	background-color:f9ebdf;
}
.col2
{
	float:left;
	height:100%;
	width:80%;
}
.colrow1
{
   height:70%;
   width:100%;
   background-color:cyan;
}
.colrow2
{
   height:30%;
   width:80%;
  
}   
    </style>
	<body>
          <div class="mainrow">
       	<nav class="navbar navbar-inverse" style="                                                  height:10%;
                                                  top:0px;">
         <div class="container-fluid" >
        <div class="navbar-header" >
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
       	 <marquee direction="up" height="100%">	
         <h2><i>WELCOME TO THE DELICIOUS WORLD!!!</i></h2>
         <br><br>
         <img src="welcome.jpg" style="height:250px; border-radius:50%; padding-left:5px;">
         </marquee>
       	</div>
       	<div class="col2">
       	<div class="colrow1">
       		
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="aaa.jpg" alt="Los Angeles" style="height:100%; width:100%;">
    </div>

    <div class="item">
      <img src="bbb.jpg" alt="Chicago"style="height:100%; width:100%;">
    </div>

    <div class="item">
      <img src="ccc.jpg" alt="New York"style="height:100%; width:100%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

       	</div>
       	<div class="colrow2">
       		
          <marquee direction="left" width="120%"><h2>“There’s no better feeling in the world than a warm pizza box on your lap.” “Anything is good if it’s made of chocolate.”</h2></marquee>

          
       	</div>	
       	</div>
       </div>
 
 </div>
 <div style="
      	height:60%;
      	width:100%;
      	background-color:black;
       
        color: red;
        text-align: center;
        margin-top:0px;">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/xPPLbEFbCAo?autoplay=1&loop=1&playlist=GRonxog5mbw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height:250px; width:400px;padding-top:10px;"></iframe>
        	<p style="padding-top:40px;"><a href="#">@copyright2020:REATURANT.COM</a></p>
    
    
	</body>
</head>
</html>  

