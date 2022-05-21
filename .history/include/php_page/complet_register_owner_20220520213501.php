<?php

require_once("../../conn.php");

if(isset($_POST["btn_next_owner_signup"])){
    
        $gender=$_POST["gender_customer_signup"];
        $age= $_POST["age_customer_signup"];
        $repet= $_POST["repet_password_customer_signup"];
        $License_img= $_POST["upload_License_signup_owner"];
        $max_person= $_POST["max_person_signup_owner"];
        $name_hall=$_POST["hall_name_signup_owner"];

        $queryyy ="INSERT INTO customer_register ( full_name, email, password, gender, birthday_date) 
                VALUES ( '$name', '$email', '$password', '$gender', '$age');";
        $stm='';
        if ($con->query($queryyy) === TRUE) {
            $stm= "Your request will be reviewed by the administrator as soon as possible.
            Thank you....";
             
        } else {
            echo "Error: " . $con->error; 
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../layout/css/comp-owner_regis.css">
    <title>Complete Owner Register Pages</title>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <!-- ------------- -->
            <div class="title">
                <h2>Complete Register</h2>
            </div>
            <!-- -------------- -->
            <form id="comp" class="input-group" action="../temp/confirm_email_owner.html" method="post">
                <input type="text" name="hall_name_signup_owner" class="input-field" placeholder="Enter your Hall Name "
                    required>
                <input type="number" name="max_person_signup_owner" class="input-field"
                    placeholder="Enter Max Pesron Number" required>
                <label id="personal">Upload your License Hall :</label>
                <input type="file" name="upload_License_signup_owner" class="input-field">
                <input type="number" name="License_number_signup_owner" class="input-field"
                    placeholder="Enter your License Number" required>
                <button type="submit" name="btn_signup_owner" class="submit-btn">Sign Up</button>

        </div>
    </div>
    </form>
    <!-- -------------------------------- -->
    <script>
    // function confirm() {
    //     document.location.href = "/include/temp/confirm_email_owner.html";
    // }
    </script>
</body>

</html>