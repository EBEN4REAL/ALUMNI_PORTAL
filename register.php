<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form shake effect</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
       <style type="text/css">
        body{
          background-image: url("img/4760404_caf2outsideview_jpeg48d4e2367d8ea86c55e12b38cb6f2eb8 (2).jpg");
          background-size: cover;
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
     <h1><span class=""><img src="img/thumb-up-sign-in-circular-badge.png" width="25px"></span> Register</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " id="UserName">
       <i class="fa fa-user" style="color: #543c64;"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="Passwod">
       <i class="fa fa-lock" style="color: #543c64;"></i>
     </div>

      <div class="form-group log-status">
       <input type="text" class="form-control" placeholder="Degree Obtained" >
       
     </div>
      <div class="form-group log-status">
       <input type="text" class="form-control" placeholder="Class of degree" >
       
     </div>

      <div class="form-group log-status">
       <textarea cols="" rows="4" class="form-control" placeholder="Purpose of transcirpt" id="Passwod"></textarea>
       <i class="fa fa-status"></i>
     </div>

      <div class="form-group log-status">
       <select  class="form-control">
         <option>Select type of file</option>
         <option>Hard copy</option>
         <option>Soft copy</option>

        </select> 
      
     </div>
      
     <button type="button" class="log-btn" >Register</button>
     
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
