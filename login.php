<?php  header("Access-Control-Allow-Origin: *"); 


//header("Access-Control-Allow-Origin: http://localhost:70800");
include('server.php'); ?>

<!DOCTYPE html>
<html>

<head>
   <meta content="text/html; charset=UTF-8; X-Content-Type-Options:nosniff"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link type="text/css" rel="stylesheet" href="main.css"> 
  <link type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"> </script>
   
  <script type="text/javascript" src="login_reg.js"> 

     /*  $(document).ready(function () {   
 $('#login_form').click(function(e) {
    e.preventDefault();
    var username = $('#username').val();
    
    var password = $('#password').val();

    $(".error").remove();

    if (username.length === 0) {
      $('#error').text("please enter name");
    }

   
  });  });
  */
    
  </script> 
    
<style type="text/css">
     .valid{ border: 1px solid green;
    border-radius: 25px;
    --box-shadow: 12px 80px 40px 20px #0ff;}
    
        .error {color: red}
    </style>
</head>

<body>
    
    <div id="form_wrapper">
       
        <div id="form_left">
            <img src="sea.png" alt="sea store">
        </div> 
        
        <form id="form1" method="post" action="login.php">
        <div id="form_right">
            <?php include('errors.php'); ?>
            
            <h1>Member Login</h1>
            <div class="input_container">
                <i class="fas fa-envelope"></i>
               
                <input placeholder="Username" type="text" name="username" id="username" class='input_field' >
               <span id="$username_err"> </span>
               
            </div>
            
            
            <div class="input_container">
                <i class="fas fa-lock"></i>
                
                <input  placeholder="Password" type="password" name="password" id="field_password" class='input_field'>
            </div>
            
            
            
            <input name="login_user" type="submit" value="Login" id='input_submit' class='input_field'>
            
            <span>Forgot <a href="#"> Username / Password ?</a></span>
            
            
            <span> <a href="Product_list.php"> Login as Guest</a></span>
            <span id='create_account'>
                <a href="register.php">Create your account &#x27A1; </a>
            </span>
        </div>
                </form>
    </div>

</body>

</html>