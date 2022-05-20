<?php 

if(isset($_POST['email_customer_login'])){
$email=$_POST['email_customer_login'];
$pass=$_POST['password_customer_login'];

echo "EMail is  " .$email.' password is '.$pass;
}else{
  echo "i need you";
}

  ?>