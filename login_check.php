<?php 

error_reporting(0);

$server="localhost";
$user="id19327753_kickzamazing1";
$pass="57]P+CI9~+2dOvNi";
$dbname="id19327753_kickzamazing";

session_start();

$connect = mysqli_connect($server,$user,$pass,$dbname);

if($connect===false)
{
	die("connection error");
}

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=md5($_POST["password"]);

	$sql="SELECT * FROM register WHERE username='".$username."' AND password='".$password."' 
	";

	$result=mysqli_query($connect, $sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		header("Location:index.php");

	}

	elseif($row["usertype"]=="admin")
	{

		header("Location:admin.php");
	}
	
	else
	{
		echo "<script>alert('Account not Register Please Register Fisrt Thankyou')</script>";
	}
}

?>