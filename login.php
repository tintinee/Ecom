<?php
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kickzamazing</title>
    <link rel="stylesheet" href="logindes.css">
    <link rel="shortcut icon" href="upload/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section>
        <nav>
            <div class="logo">
                <a href="index.php" class="logo"><img src="upload/logo.png" alt=""></a>
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#Products">Products</a></li>
                <li><a href="#AboutUs">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>

            <div class="icons">
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-cart-shopping"></i>
                <a href="login.php"><i class="fa-solid fa-user"></i></a>
            </div>

        </nav>
        <div class ="BOX">
            <div class ="title-text">
                <div class="title login">Login Form </div>
            </div>
    
            <div class="form-container">
              
                <div class="form-inner"> 
                    <form action="login_check.php"  method="POST" class="login">
                        <div class ="field">
                        <input type="text" placeholder="Username" name="username" required>
                        </div>
                        <div class ="field">
                        <input type="password" placeholder="Password" name="password" required>
                        </div>
                        <input type="checkbox" id="remember" name="remember" value="remember">
                        <label for="remember"> Remember me on this computer.</label><br>
                        <div class ="field">
                            <input type ="submit" name="submit" value="Login">
                        </div>
                        <div class ="register">Not yet Registered? <a href="register.php">Register?</a></div>
                    </form>
                </div>
            </div>
            
        </div>
        </section>
        <footer>
            <div class="footer_main" id="ContactUs">
                <div class="ftag">
                    <h1>Contact</h1>
                    <a href="#"><i class="fa-solid fa-house"></i>B3 L45 Lipa Batangas</a>
                    <a href="#"><i class="fa-solid fa-phone"></i>+639 48 596 9694</a>
                    <a href="#"><i class="fa-solid fa-envelope"></i>kickzamazing@gmail.com</a>
                </div>
    
                <div class="ftag">
                    <h1>Get Help</h1>
                    <a href="#" class="center">Shipping</a>
                    <a href="#" class="center">Returns</a>
                    <a href="#" class="center">Payment Options</a>
                </div>
    
                <div class="ftag">
                    <h1>Our Stores</h1>
                    <a href="#" class="center">Lipa Batangas</a>
                    <a href="#" class="center">Calamba Laguna</a>
                    <a href="#" class="center">Bonifacio Global City</a>
                </div>
    
                <div class="ftag">
                    <h1>Contact Us</h1>
                    <div class="socialmed">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                </div>
        </footer>
    </body>
</html>