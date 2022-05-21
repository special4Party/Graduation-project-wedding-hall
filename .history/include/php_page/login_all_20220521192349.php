<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../layout/css/log_in_all.css">

    <title>Log in Page</title>
</head>

<body>

    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn">Log in Page</button>
            </div>

            <form id="logIn" class="input-group">
                <input type="email" name="email-all-login" class="input-field" placeholder="Enter your Email" required>

                <input type="password" name="password-all-login" class="input-field" placeholder="Enter your Password"
                    required>

                <input type="checkbox" name="remember-password-all-login" value="remember-password-customer-login"
                    class="check-box"><span class="log-in">Rmember password</span>

                <!-- <input type="checkbox" id="click" class="cli"> -->
                <button type="submit" name="btn-login-all" value="btn-login-all" class="submit-btn">Log in</button>

                <?php
                    require_once("../../conn.php");
                    if(isset($_POST["btn-login-all"])){
                        $password_login_all= $_POST["password_owner_login"];
                        $email_login_all= $_POST["email_owner_login"];
                        $my_query_new="select * from owner_register where email='$email_login' and password='$password_login'";
                        $result=mysqli_query($con,$my_query);
                        $count=mysqli_num_rows($result);
                        if($count>0){
                            echo "success log in owner ";
                        }else{
                            echo "falied log in owner";
                        }
                    }else{
                        echo"your email or password is incorrect owner!!";
                    }

                ?>


            </form>



</body>

</html>