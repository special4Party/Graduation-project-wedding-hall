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
                        $password_login_all= $_POST["password-all-login"];
                        $email_login_all= $_POST["email-all-login"];

                        $check1 = mysqli_query($con, "select * from owner_register where email='$email_login_all' and password='$password_login_all'");


                        $check2 = mysqli_query($con, "select * from customer_register where email='$email_login_all' and password='$password_login_all'");


                        $check3 = mysqli_query($con, "select * from admin_register where where email='$email_login_all' and password='$password_login_all'");

// mysqli_num_rows($check1) == 0 && mysqli_num_rows($check2) == 0 && mysqli_num_rows($check3) == 0
                        if(mysqli_num_rows($check1) > 0){
                            echo "success";
                        }else if(mysqli_num_rows($check1) > 0){
                            echo "success";
                        }else if(mysqli_num_rows($check1) > 0){
                            echo "success";
                        }else{
                            echo "sorry is not found !!";
                        }

                        $my_query_new="select * from owner_register where email='$email_login_all' and password='$password_login_all'";
                        $result=mysqli_query($con,$my_query_new);
                        $count=mysqli_num_rows($result);
                        if($count>0){
                            echo "success log in  ";
                        }else{
                            echo "falied log in ";
                        }
                    }else{
                        echo"your email or password is incorrect !!";
                    }

                ?>


            </form>



</body>

</html>