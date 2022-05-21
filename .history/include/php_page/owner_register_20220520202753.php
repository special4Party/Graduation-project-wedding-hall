<?php

require_once("../../conn.php");

if(isset($_POST["btn_next_owner_signup"])){

        $gender=$_POST["gender_owner_signup"];
        $age= $_POST["age_owner_signup"];
        $password= $_POST["password_owner_signup"];
        $email= $_POST["email_owner_signup"];
        $name_owner=$_POST["name_owner_signup"];

        $phone=$_POST["phone_owner_signup"];
        $imag_hall=$_POST["upload_person_id_signup_owner"];

        $queryyy ="INSERT INTO owner_register ( full_name, email, password, birthday_date, phone_number, gender) VALUES ( '$name_owner', '$email', '$password', '$age', '$phone', ' $gender');";
        $stm='';
        if ($con->query($queryyy) === TRUE) {
            $stm= "New record created successfully";
             
        } else {
            echo "Error: " . $con->error; 
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../layout/css/owner_regis.css">
    <script src="https://kit.fontawesome.com/92219ffc4f.js" crossorigin="anonymous"></script>
    <title>Register and log in owner halls</title>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn">

                </div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
            </div>
            <!-- <div class="social-icons">
                <img src="/images/img/faaaa.png" >
                <img src="/images/img/google-removebg-preview.png" >
                <img src="/images/img/ista-removebg-preview.png" >
            </div> -->
            <form id="logIn" class="input-group" action="" method="post">
                <input type="email" name="email_owner_login" class="input-field" placeholder="Enter your Email"
                    required>
                <input type="password" name="password_owner_login" class="input-field" placeholder="Enter your Password"
                    required>
                <input type="checkbox" name="remember_password_owner_login" value="remember-password-owner-login"
                    class="check-box"><span class="log-in">Rmember password</span>
                <!-- <input type="checkbox" id="click" class="cli"> -->
                <button type="submit" name="btn_login_owner" value="btn-login-owner" class="submit-btn">Log in</button>
            </form>
            <!-- <div class="contant">
                <div class="header">
                    <h2>Thank's</h2>
                    <label for="click" class="fas fa-times"></label>
                </div>
                <label for="click" class="fas fa-check"></label>
                <p>We will review your request</p>
                <div class="line"></div>
                <label for="click" class="close-btn">close</label>
            </div> -->
            <!-- --------------------- -->
            <form id="signup" class="input-group" action="../temp/confirm_email_owner.html" method="post">

                <input type="text" name="name_owner_signup" class="input-field" placeholder="Enter your Full Name "
                    required>

                <input type="email" name="email_owner_signup" class="input-field" placeholder="Enter your Email"
                    required>

                <input type="password" name="password_owner_signup" class="input-field"
                    placeholder="Enter your Password" required>

                <input type="date" name="age_owner_signup" class="input-field" placeholder="Enter Your Age" required>

                <input type="tel" name="phone_owner_signup" class="input-field"
                    placeholder="Enter your Phone Number (07xxxxxxxx)" required>

                <label>Upload Personal Id image:</label>
                <input type="file" name="upload_person_id_signup_owner" class="input-field">

                <input type="radio" name="gender_owner_signup" value="male" class="check-box" required><span
                    class="signUp">male</span>

                <input type="radio" name="gender_owner_signup" value="female" class="check-box" required><span
                    class="signUp">female</span>

                <button type="submit" name="btn_next_owner_signup" class="submit-btn">Next</button>

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
    //     document.location.href = "/include/temp/complet_register_owner.html";
    // }
    </script>
</body>

</html>