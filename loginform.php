<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://use.fontawesome.com/e8d21bbd8e.js"></script>
  
  <style>
  
  	.mynavhdr1 li{
	
	border-left:1px solid #504c4f;
	border-right:1px solid #504c4f;
	
	}
	.mynavhdr1 li:hover{
	
	background:#504c4f;
	
	}
	
	.mynavhdr2 li{
	
       height:80px;
	
	}
	.mynavhdr2 li:hover{
	
	background:white;
	position:relative;
	
	}
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
	  height:50%;
      min-height:50px;
  }
	 footer {
      background-color:black;
      padding: 50px;
    }
  </style>
</head>
<body>
<header class="header header-menu-fullw">
<nav class="navbar navbar-inverse" style="border-radius:0px">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!---a class="navbar-brand" href="#">Brand</a--->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav mynavhdr1 navbar-nav">
        <li><a href="#" class="fa fa-twitter" style="color:white"></a></li>
        <li><a href="#" class="fa fa-facebook" style="color:white"></a></li>
        <li><a href="#" class="fa fa-google-plus" style="color:white"></a></li>
        <li><a href="#" class="fa fa-pinterest" style="color:white"></a></li>
        <li><a href="#" class="fa fa-instagram" style="color:white"></a></li>
        <li><a href="#" class="fa fa-rss" style="color:white"></a></li>
       
      </ul>
   
      <ul class="nav navbar-nav mynav navbar-right">
        <li><a href="regform.php"><i class="fa fa-user-plus" style="color:red"></i>&nbsp;&nbsp;&nbsp;REGISTER</a></li>
        <li><a href="loginform.php"><i class="fa fa-sign-in" style="color:red"></i>&nbsp;&nbsp;&nbsp;LOGIN</a></li>
		<li><a href="loginform.php"><i class="glyphicon glyphicon-shopping-cart" style="color:red"></i>&nbsp;&nbsp;&nbsp;CART</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>

<nav class="navbar  ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand"href="index.html" style="width:250px;height:80px;margin-left:40px;"><img src="images/bookshop_logo.png" alt="TheBoookSHOP" style="width:200px;height:80px"></a>
         </div>

        
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Home</a></li>
		<li><a href="#">About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Books By catagories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">By Author</a></li>
            <li><a href="#">By Publication</a></li>
            <li><a href="#">By Price</a></li>
           </ul>
		   <li><a href="contact_us.html">Contact Us</a></li>
        </li>
      </ul>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
  <h2>Login form</h2>
  <form action="loginprocess.php" method="post">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" name="username" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter Password">
    </div>
	
    <button type="submit" class="btn btn-success">Login</button><br><br>
	<input type="checkbox" checked="checked"> Remember me
	<?php
error_reporting(0);
 echo $_GET["err"];
 ?>
  </form>
</div>

 <footer>
                   <div class="container text-center">
							Copyright &copy; 2017 <a href="index.html">DoorStep</a> &nbsp;| &nbsp;All Rights Reserved
					</div>
	               </footer>


</body>
</html>

