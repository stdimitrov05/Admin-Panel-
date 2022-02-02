<?php 
include './login.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>LoginPage</title>
</head>
<body>
<form method="POST" action="">
    <div class="loginbox">
       
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Please enter your email" id="email"  required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Please enter your password" id="password"  required>
        </div>
        <div class="form-group">
            <input type="submit" value="Login" class="btn btn-primary">
            <input type="hidden" name="action" value="Login">
        </div>
        
    </div>
</form>
</body>
</html>