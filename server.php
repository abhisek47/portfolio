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

// if(!mysqli_query($connection, $sql)){
//     echo 'Not submitted!!';
// } else {
//     echo 'Submit successfull';
// }

header("refresh:2; url=index.html");

?>

<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="media.css" />
<link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
    crossorigin="anonymous"
/>
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
    rel="stylesheet"
/>
<link
    href="https://fonts.googleapis.com/css2?family=Esteban&family=Montserrat:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
/>
<div class="container">
    <?php if(!mysqli_query($connection, $sql)): ?>
        <p class="alert alert-danger my-4">There is some problem, Please try again</p>
    <?php else:  ?>
        <p class="alert alert-success my-4">Subscribe successfully</p>
    <?php endif;  ?>
</div>


