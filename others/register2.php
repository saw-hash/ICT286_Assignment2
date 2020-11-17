<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="text/css" rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">  
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"> </script>
   
  <script type="text/javascript" src="login_reg.js"> 
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
            <img src="sea.png" alt="computer icon">
        </div> <form id="form" method="post" action="register.php">
        <div id="form_right">
            <?php include('errors.php'); ?>
            
            <h1>Register Form</h1>
            <div class="input_container">
                <i class="fas fa-envelope"></i>
                <input placeholder="Username" type="text" name="username" id="field_username" value="<?php echo $username; ?>"class='input_field'>
            </div>
            
            <div class="input_container">
                <i class="fas fa-envelope"></i>
                <input placeholder="Email" type="email" name="email" id="field_email" value="<?php echo $email; ?>"class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input  placeholder="Password" type="password" name="password" id="field_password1" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input  placeholder="Confirm password" type="password" name="confirmpassword" id="field_password2" class='input_field'>
            </div>
            <input type="submit" value="Register" id='input_submit' class='input_field'>
            <span>Forgot <a href="#"> Username / Password ?</a></span>
            
            <span> Already a member?<a href="login.php"> Login &#x27A1;</a></span>
            
        </div>
                </form>
    </div>

</body>

</html>