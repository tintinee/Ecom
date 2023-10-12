<?php

    $server="localhost";
    $user="id19327753_kickzamazing1";
    $pass="57]P+CI9~+2dOvNi";
    $dbname="id19327753_kickzamazing";
    $conn = mysqli_connect($server,$user,$pass,$dbname);

 session_start();
 
 if(isset($_SESSION['username'])){
    $user= $_SESSION['username'];
 }else{
    $user = '';
 };
 
 if(isset($_POST['SUBMIT'])){
 
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $msg = $_POST['message'];
    $msg = filter_var($message, FILTER_SANITIZE_STRING);
 
    $select_mess = $conn->prepare("SELECT * FROM `contact` WHERE name = $name AND email = $email AND message = $message");
    $select_mess->execute([$name, $email, $message]);
 
    if($select_mess->rowCount() > 0){
        echo "<script>alert('Message Sent')</script>";
    }else{
 
       $insert_mess = $conn->prepare("INSERT INTO `contact`(username, name, email, message) VALUES(?,?,?,?)");
       $insert_mess->execute([$username, $name, $email, $message]);
 
       echo '<script>alert("Message Sent Succesfully!");</script>';
 
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
    <link rel="stylesheet" href="contactusdes.css">
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

    <div class="contact_form" id="ContactUs">
        <h1> Contact Us Here </h1>
        <div class="contactus">
        <form action="">
            <h1>LEAVE A MESSAGE</h1>
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Email Address">
            <input type="text" placeholder="Subject">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
           <button class="SUBMIT"><a href="login.php">Send Message</a></button>
        </form>
        
        <div class="user">
            <div>
                <img src="upload/logo.png" alt="">
                <p><span>Kickzamazing</span>B3 L45 Lipa Batangas <br>+639 48 596 9694 <br>kickzamazing@gmail.com</p>
                
            </div>
        </div>

        </div>
    </div>
</head>
</html>