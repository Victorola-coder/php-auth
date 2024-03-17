<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
  
  <div class="signup">
  <h1>Login to your account</h1>
    <form class="signup-form " action="includes/login.inc.php" method="post">     
        <input class="input" placeholder="email" name="email" type="text"/>        
        <input class="input" placeholder="password" name="password" type="password"/>
        <button type="submit">Login</button> 
        <div class="dont-have-an-account">
        <p>Already a user?</p><a href="index.php" class="login-link">Sign up here</a>  
        </div>     
    </form>
</div>

      
</body>
</html>