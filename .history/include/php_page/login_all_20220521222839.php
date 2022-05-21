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

            <form id="logIn" class="input-group" action="" method="post">
                <input type="email" name="email_all_login" class="input-field" placeholder="Enter your Email" required>

                <input type="password" name="password_all_login" class="input-field" placeholder="Enter your Password"
                    required>

                <input type="checkbox" name="remember-password-all-login" value="remember-password-customer-login"
                    class="check-box"><span class="log-in">Rmember password</span>

                <!-- <input type="checkbox" id="click" class="cli"> -->
                <button type="submit" name="btn_login_all" value="btn-login-all-a" class="submit-btn">Log in</button>

                <?php
                    require_once("../../conn.php");
                    if(isset($_POST["btn_login_all"])){
                        $password_login_all= $_POST["password_all_login"];
                        $email_login_all= $_POST["email_all_login"];

                        $check1 = "select * from owner_register where email='$email_login_all' and password='$password_login_all'";
                        $result=mysqli_query($con,$check1);
                        $count=mysqli_num_rows($result);

                        $check2 ="select * from customer_register where email='$email_login_all' and password='$password_login_all'";
                        $result2=mysqli_query($con,$check2);
                        $count2=mysqli_num_rows($result2);

                        $check3 ="select * from admin_register where email='$email_login_all' and password='$password_login_all'";
                        $result3=mysqli_query($con,$check3);
                        $count3=mysqli_num_rows($result3);

                       

// mysqli_num_rows($check1) == 0 && mysqli_num_rows($check2) == 0 && mysqli_num_rows($check3) == 0
                        if($count > 0){
                            echo "success owner log in";
                            header('Location: http://localhost/wedding_hall_booking_project/include/php_page/customer_profile.php');
                        }else if($count2 > 0){
                            echo "success customer log in";
                            header('Location: http://localhost/wedding_hall_booking_project/include/php_page/customer_profile.php');
                        }else if($count3 > 0){
                            echo "success Admin log in ";
                            header('Location: http://localhost/wedding_hall_booking_project/include/php_page/customer_profile.php');
                        }else{
                            echo "sorry is not found your email or password is incorrect !! !!";
                        }
                       
                    }else{
                        echo"go back to register some thing is wrong..";
                    }
                ?>

            </form>



</body>

</html>