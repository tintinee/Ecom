<?php

    $server="localhost";
    $user="id19327753_kickzamazing1";
    $pass="57]P+CI9~+2dOvNi";
    $dbname="id19327753_kickzamazing";
    $conn = mysqli_connect($server,$user,$pass,$dbname);

    if(!$conn){
        die("<script> alert('CONNECTION FAILED.')</script>");
    }

?>