<?php

require_once("../../conn.php");

if(isset($_POST["btn_signup_customer_signup"]){
        if($_POST["repet_password_customer_signup"]=== $_POST["password_customer_signup"] )){
            $gender=$_POST["gender_customer_signup"];
            $age= $_POST["age_customer_signup"];
            $repet= $_POST["repet_password_customer_signup"];
            $password= $_POST["password_customer_signup"];
            $email= $_POST["email_customer_signup"];
            $name=$_POST["name_customer_signup"];

            $queryyy ="INSERT INTO customer_register (full_name, email, password, gender, birthday_date) 
                    VALUES ( '$name', '$email', '$password', '$gender', '$age');";
        
            if ($con->query($queryyy) === TRUE) {
                header('Location: http://localhost/wedding_hall_booking_project/include/php_page/customer_profile.php');

            } else {
                echo "Error: " . $con->error; 
            }
        }
        
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../layout/css/register-customer.css">
    <!-- <script src="https://kit.fontawesome.com/92219ffc4f.js" crossorigin="anonymous"></script> -->
    <title>Register and log in customer </title>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
            </div>
            <!-- <div class="social-icons">
                <img src="/images/img/faaaa.png" >
                <img src="/images/img/google-removebg-preview.png" >
                <img src="/images/img/ista-removebg-preview.png" >
            </div> -->
            <form id="logIn" class="input-group" action="" method="post">
                <input type="email" name="email_customer_login" class="input-field" placeholder="Enter your Email"
                    required>

                <input type="password" name="password_customer_login" class="input-field"
                    placeholder="Enter your Password" required>

                <input type="checkbox" name="remember_password_customer_login" value="remember-password-customer-login"
                    class="check-box"><span class="log-in">Rmember password</span>

                <!-- <input type="checkbox" id="click" class="cli"> -->
                <button type="submit" name="btn_login_customer" value="btn-login-customer" class="submit-btn">Log
                    in</button>
                <?php
                require_once("../../conn.php");
                    if(isset($_POST["btn_login_customer"])){
                        $password_login= $_POST["password_customer_login"];
                        $email_login= $_POST["email_customer_login"];
                        $my_query="select * from customer_register where email='$email_login' and password='$password_login'";
                        $result=mysqli_query($con,$my_query);
                        $count=mysqli_num_rows($result);
                        if($count>0){
                            echo "success log in customer ";
                        }else{
                            echo "falied log in customer";
                        }
                    }else{
                        echo"your email or password is incorrect customer!!";
                    }

                ?>
            </form>


            <!-- --------------------- -->
            <form id="signup" class="input-group" action="../php_page/confirm_email_customer.php" method="post">

                <input type="text" name="name_customer_signup" class="input-field" placeholder="Enter your Full Name "
                    required>

                <input type="email" name="email_customer_signup" class="input-field" placeholder="Enter your Email"
                    required>

                <input type="password" name="password_customer_signup" class="input-field"
                    placeholder="Enter your Password" required>
                <input type="password" name="repet_password_customer_signup" class="input-field"
                    placeholder="Repet your Password" required>

                <input type="date" name="age_customer_signup" class="input-field" placeholder="Enter Your Age" required>

                <input type="radio" name="gender_customer_signup" value="male" class="check-box" required><span
                    class="signUp">male</span>

                <input type="radio" name="gender_customer_signup" value="female" class="check-box" required><span
                    class="signUp">female</span>

                <button type="submit" name="btn_signup_customer_signup" class="submit-btn">sign
                    Up</button>

            </form>
            <!-- --------------------------- -->

        </div>
    </div>

    <script>
    var x = document.getElementById("logIn");
    var y = document.getElementById("signup");
    var z = document.getElementById("btn");
    // var w=document.getElementById("comp");
    function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
        // w.style.left="400px";
    }

    function signup() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
        // w.style.left="450px";
    }
    // function compl(){
    // y.style.left="450px";
    // z.style.left="110px";
    // // w.style.left="50px";
    // }
    // function compl() {
    //     document.location.href = "/include/temp/confirm_email_customer.html";
    // }
    </script>
</body>

</html>
<!-- <script>
     var card=document.getElementById("card");
     function openRegister(){
        card.style.transform="rotateY(-180deg)";
     }
     function openLogin(){
        card.style.transform="rotateY(0deg)";
     }
 </script> -->