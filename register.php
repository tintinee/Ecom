<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$confirmpass = md5($_POST['confirmpass']);
	$email = $_POST['email'];

	if ($password == $confirmpass) {
		$sql = "SELECT * FROM register WHERE username='$username'";
		$result = mysqli_query($conn, $sql);


		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO register (username, password, email)
					VALUES ('$username', '$password', '$email')";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				echo '<script>alert("Register Done!");</script>';
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['confirmpass'] = "";
			} 
            else {
				echo "<script>alert('Please Try Again!')</script>";
			}
		} 
        else {
			echo "<script>alert('Oops, Username Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Your Password Does Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kickzamazing</title>
    <link rel="stylesheet" href="registerdes.css">
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
                <div class="title rgstr">Register Form </div>
            </div>
    
            <div class="form-container">
                <div class="form-inner">
                
                    <form action="" method="POST" class="rgstr">
                        <div class ="field">
                        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                        </div>
                        <div class ="field">
                        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                        </div>
                        <div class ="field">
                        <input type="password" placeholder="Confirm Password" name="confirmpass" value="<?php echo $_POST['confirmpass']; ?>" required>
                        </div>
                        <div class ="field">
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                        <div class ="field">
                            <input type ="submit" name="submit" value="Register">
                        </div>
                        <div class ="field">
                            <input type ="submit" value="Clear">
                        </div>
                        <div class ="login">Already Registered?<a href="login.php">Click Here!</a></div>

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