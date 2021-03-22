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
        width:40%;
        float:left;
        background-color:f9ebdf;
      }
      .col2
      {
        height:100%;
        width:60%;
        float:left;
        background-image:url("back.jpg");
        
      }
      .centered {
  position: absolute;
  top: 30%;
  left: 60%;
  

	</style>


	<body>
		<div class="main">
        <nav class="navbar navbar-inverse" style=" height:10%;top:0px;">                                              
                                                  
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
            <marquee><h2 style="color: blue;">
              <i>CONTACT US :-</i>
            </h2>
          </marquee>
          <img src="contact.jpg" style="height:70%; width:80%; padding-left:40px;">


          </div>
            <div class="col2">
              <div class="centered">
              <i><h2 style="color:white;"><u>FOR CONTACT :</u></i></h2>
              <br><br>
              <table style="color:white; font-size: 20px;">
                <tr><td>email id : </td><td><a href="https://accounts.google.com/" style="color:white;">deep123@gmail.com</a></td></tr>
                <tr><td>phone no :</td><td>8559642587</td></tr>
                <tr><td>address : </td><td>EWM - 99 , Kailash Nagar</td></tr>
              <tr><td></td><td>CHHATTISGARH</td></tr>

              </table>
              </div>
            </div>
        </div>
        <div class="footer">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/xPPLbEFbCAo?autoplay=1&loop=1&playlist=GRonxog5mbw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height:250px; width:400px;padding-top: 50px;"></iframe>
          <p style="padding-top:50px;"><a href="#">@copyright2020:REATURANT.COM</a></p>
        </div>
	    </div>		

	</body>


	</head>
</html>