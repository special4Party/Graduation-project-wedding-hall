<?php 

if(isset($_POST['email_customer_login'])){
$email=$_POST['email_customer_login'];
$pass=$_POST['password_customer_login'];

echo "EMail is  " .$email;//.' password is '.$pass;

}else{
  header('Location: http://localhost/wedding_hall_booking_project/include/php_page/register_customer.php');
  echo "i need you";
  exit();
}

  ?>