<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CU Alumni Login Portal</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
      <style type="text/css"></style>
      <style type="text/css">
        body{
          background-image: url("img/g.jpg");
          background-size: cover;
          font-family: 'Josefin Sans', sans-serif;
        }
      </style>

  
</head>



  <nav class="navbar navbar-default navbar-fixed-top" style="border-radius: 0 0 10px 10px; ; border-bottom: none; ">
  <div class="container-fluid"  id="nav_header">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/download (1).jpg" width="120px" style="transform: translateY(-28px);"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php" style=""><span class=""><img src="img/thumb-up-sign-in-circular-badge.png" width="25px"></span> Register</a></li>
        <li class=""><a href="index.php"  style=""><span class=""><img src="img/login (4).png" width="25px"></span> Login</a></li>
       
      </ul>
   </div><!-- /.container-fluid -->
</nav>







<body>
  <div class="login-form" style="border-radius: 0">
     <h1 ><span class=""><img src="img/login (4).png" width="25px"></span> Login</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " id="UserName">
       <i class="fa fa-user" style="color: #543c64;"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="Passwod">
       <i class="fa fa-lock" style="color: #543c64;"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="#">Lost your password?</a>
     <button type="button" class="log-btn" style="font-family: 'Josefin Sans', sans-serif;">Log in</button>
     
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
