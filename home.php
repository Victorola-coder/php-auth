<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: ./login.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="home">
        <h1>Welcome user</h1>
    </div>
  
</body>
</html>