<?php


    $fullName = $_POST['name-customer-signup'];
    $email = $_POST['email-customer-signup'];
    $password = $_POST['password-customer-signup'];
    $birthday_date= $_POST['age-customer-signup'];
    $gender = $_POST['gender-customer-signup'];

if(!empty($fullName)|| !empty($email) || !empty($password) || !empty($gender) ||!empty($age)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="wedding_hall";

    //create connection:
    $connection= new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error ( '.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT ="SELECT email From customer_register Where email=? limit 1";
        $INSERT="INSERT Into customer_register(fullName,email,password,gender,birthday_date)values(?,?,?,?,?)";
        $stmt = $connection->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt=$connection->prepare($INSERT);
            $stmt->bind_param("sssss",$fullName,$email,$password,$gender,$birthday_date);
            $stmt->execute();
            echo"new record inserted succesfully";
        }
    }
}else{
    echo "All field are requered";
    die();
}
// --------------------------------------------
//----------------------------------------------
    // $fullName = $_POST['name-customer-signup'];
    // $email = $_POST['email-customer-signup'];
    // $password = $_POST['password-customer-signup'];
    // $age = $_POST['age-customer-signup'];
    // $gender = $_POST['gender-customer-signup'];

//database connection :

// $conn = new mysqli('localhost','root','','wedding_hall');
// if($conn->connect_error){
//     die('connection failed asooooooom :'.$conn->connect_error);
// }else{
//   $stmt = $conn->prepare("insert into customer_register(full_name,email,password,gender,birthday_date)values(?,?,?,?,?)");
//   $stmt->bind_param("sssss",$fullName,$email,$password,$gender,$age);
//   $stmt->execute();
//   echo 'register is succesfully .....';
//   $stmt->close();
//   $conn->close();
// }
// i-integer......d-double.....s-string...b-BLOB
//------------------------------
//------------------------------
?>







