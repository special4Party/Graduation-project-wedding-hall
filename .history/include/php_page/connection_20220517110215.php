<?php
    $fullName = $_POST['name-customer-signup'];
    $email = $_POST['email-customer-signup'];
    $password = $_POST['password-customer-signup'];
    $age = $_POST['age-customer-signup'];
    $gender = $_POST['gender-customer-signup'];

//database connection :

$conn = new mysqli('localhost','root','','wedding_hall');
if($conn->connect_error){
    die('connection failed asooooooom :'.$conn->connect_error);
}else{
   echo 'good job';
}

?>







