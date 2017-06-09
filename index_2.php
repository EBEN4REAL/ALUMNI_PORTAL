<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CU Alumni Login Portal</title>
  
  
 

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
     <style type="text/css">
        
        
        .form-control:focus {
        border-color: inherit;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-bottom-color: purple;
        }
        a{
          color: black;
        }
        a:hover{
          text-decoration: none;
       }
       body{
        font-family: 'Open Sans', sans-serif;
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
        <li class=""><a href=""  style="" class=" " data-toggle="modal" data-target="#myModal"><span class=""><img src="img/login (4).png" width="25px"></span> Login</a></li>
       
      </ul>
   </div><!-- /.container-fluid -->
</nav>







<body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class=" container-fluid">
        	 <h4 class="modal-title text-center" id="myModalLabel" ><img src="img/download (1).jpg" width="200px" style=""></h4>
        </div>
        
   
      </div>
      <div class="modal-body">
        <div class="text-center">
        	<h3><b>Sign in to Cu Alumni  to connect with fellow alumni.</b> </h3><br>

        	<a href="" class="btn " style="background: #00aced; border-radius: 0; color: white; width: 70%; font-size: 25px" ><span><img src="img/twitter (1).png" width="30px"> </span>  &nbsp;Connect with twitter</a><br><br>

        	<a href="" class="btn " style="background: #3b5998; border-radius: 0; color: white; width: 70%; font-size: 25px" ><span><img src="img/facebook (1).png" width="30px"> </span> &nbsp; Connect with facebook</a><br><br>
        	 <a href="" class="btn " style="background: white; border-radius: 0;  color: black; border: 1px solid grey; width: 70%; font-size: 25px" ><span><img src="img/google.jpg" width="40px"> </span> &nbsp; Continue with google </a><br><br>

        	 <h3><a href="" class=" " data-dismiss="modal" data-toggle="modal" data-target="#emailModal">Sign in or sign up with email</a> </h3>
        </div>      

        </div>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Process request</button>
      </div>
    </div>
  </div>



 <!-- Modal -->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class=" container-fluid">
        	 <h4 class="modal-title text-center" id="myModalLabel" ><img src="img/download (1).jpg" width="200px" style=""></h4>
        </div>
        
   
      </div>
      <div class="modal-body" >
        <div class="">
        	<div class="text-center">
        		<h4>Enter your email address to sign in or create an account on Cu Alumni platform</h4>
        	</div><br>
        	<form>
        	   <div class="form-group" style="">
        	   	 <h5 style="">Email address</h5><br>
        		<input type="text" name="" class="form-control" style="border-top: 0; border-right: 0;border-left: 0; " id="x" placeholder="Yourname@example.com">
        	   </div>
        		
        	</form><br>
        	<div class="text-center"><a href="" style="font-size: 20px; " >Or Sign in with Facebook, Twitter or google</a> </div><br><br>
           <div class="text-center">
           	 <a href="" class="btn " style="background: white; border-radius: 0;  color:purple ; border: 1px solid purple; width: 70%;  "  ><span><img src="img/mail-black-envelope-symbol.png" width="40px"> </span> &nbsp; Email me a link to sign in</a><br><br>
           </div>
        	

        	
        </div>      

        </div>      
      </div>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Process request</button> -->
      </div>
    </div>
  </div>




  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='js/jquery.js'></script>'></script>

    <script src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>


  


</body>
</html>
