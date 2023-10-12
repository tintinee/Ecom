<?php

    $server="localhost";
    $user="id19327753_kickzamazing1";
    $pass="57]P+CI9~+2dOvNi";
    $dbname="id19327753_kickzamazing";
    $conn = mysqli_connect($server,$user,$pass,$dbname);

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $query = "DELETE FROM register WHERE id = '$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo ("<script>alert('User Data is Deleted.')</script>");
        echo("<script>window.location = 'admin.php';</script>");
    }
    else{
        echo '<script>alert("User Data is Not Deleted");</script>';
    }
}

?>