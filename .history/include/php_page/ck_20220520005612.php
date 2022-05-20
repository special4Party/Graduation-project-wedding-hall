<?php 
$email=$_POST['email_customer_login'];
$pass=$_POST['password_customer_login'];
if(isset($email)){


echo "EMail is  " .$email.' password is '.$pass;
}else{
  echo "i need you";
}

  ?>