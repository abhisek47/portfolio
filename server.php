<?php

// Connect with database
$connection = mysqli_connect('localhost','root','','portfolio' );

// verify connection
if(!$connection){
    echo 'Not connected to server!!';
}

if(!mysqli_select_db($connection, 'portfolio')){
    echo 'Database not selected!!';
}


$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if(!mysqli_query($connection, $sql)){
    echo 'Not submitted!!';
} else {
    echo 'Submit successfull';
}

header("refresh:2; url=index.html");

?>