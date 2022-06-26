<?php  
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <script defer src="js/script.js"></script>
    <title>Login Template</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    
    
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Blogs</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto"> 
                <li class="nav-item">
                    <a class="nav-link " href="discover.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Find Blogs</a>
                </li>
                <?php 
                if(isset($_SESSION["useruid"])){
                     echo '<li class="nav-item"><a class="nav-link" href="profile.php">Profile page</a></li>' ;
                     echo '<li class="nav-item "><a class="nav-link" href="logout.php">Log out</a></li>';
                } 
                else {
                     echo '<li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>' ;
                     echo '<li class="nav-item "><a class="nav-link" href="login.php">Log in</a></li>';
                }
                
                ?>

             </ul> 
            </div>
        </div>
    </nav>