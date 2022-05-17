<!-- this page its checked the entered data from log in form if it is existe in database or not -->


<?php

$connction=$mysqli_connect('localhost','root','','wedding_hall');

if(!$connction){
die('Error Asoooooooooooooooooooooooooom'.$mysqli_connect_error());
}else{
    echo 'good job';
}












