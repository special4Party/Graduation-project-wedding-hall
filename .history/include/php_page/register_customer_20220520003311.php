<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../layout/css/register-customer.css">
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
            <form id="logIn" class="input-group">
                <input type="email" name="email-customer-login"  class="input-field" placeholder="Enter your Email" required>
                <input type="password" name="password-customer-login"  class="input-field" placeholder="Enter your Password" required>
                <input type="checkbox" name="remember-password-customer-login" value="remember-password-customer-login" class="check-box"><span class="log-in">Rmember password</span>
                <!-- <input type="checkbox" id="click" class="cli"> -->
                <button type="submit" name="btn-login-customer" value="btn-login-customer" class="submit-btn" >Log in</button>
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
            <form id="signup" class="input-group">

                <input type="text" name="name-customer-signup" class="input-field" placeholder="Enter your Full Name " required>

                <input type="email" name="email-customer-signup" class="input-field" placeholder="Enter your Email" required>

                <input type="password" name="password-customer-signup" class="input-field" placeholder="Enter your Password" required>
                <input type="password" name="repet-password-customer-signup"  class="input-field" placeholder="Repet your Password" required>

                <input type="date" name="age-customer-signup" class="input-field" placeholder="Enter Your Age" required>

                <!-- <input type="tel" name="phone-customer-signup"  class="input-field" placeholder="Enter your Phone Number (07xxxxxxxx)" required> -->

                <!-- <label>Upload Personal Id image:</label>
                <input type="file" name="upload-person-id-signup-customer" class="input-field"> -->

                <input type="radio" name="gender-customer-signup" value="male" class="check-box" required><span class="signUp">male</span>

                <input type="radio" name="gender-customer-signup" value="female" class="check-box" required><span class="signUp">female</span>

                <button type="submit" name="btn-signup-customer-signup" class="submit-btn" onclick="compl()">sign Up</button>

            </form>
            <!-- --------------------------- -->
            
        </div>
    </div>
   
    <script>
        var x=document.getElementById("logIn");
        var y=document.getElementById("signup");
        var z=document.getElementById("btn");
        // var w=document.getElementById("comp");
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
            // w.style.left="400px";
            }
        function signup(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
            // w.style.left="450px";
            }
            // function compl(){
            // y.style.left="450px";
            // z.style.left="110px";
            // // w.style.left="50px";
            // }
            function compl(){
                document.location.href="/include/temp/confirm_email_customer.html";
            }
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