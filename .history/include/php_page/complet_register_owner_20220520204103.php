<?php

require_once("../../conn.php");

if(isset($_POST["btn_signup_customer_signup"])){

        $gender=$_POST["gender_customer_signup"];
        $age= $_POST["age_customer_signup"];
        $repet= $_POST["repet_password_customer_signup"];
        $password= $_POST["password_customer_signup"];
        $email= $_POST["email_customer_signup"];
        $name=$_POST["name_customer_signup"];

        $queryyy ="INSERT INTO customer_register ( full_name, email, password, gender, birthday_date) 
                VALUES ( '$name', '$email', '$password', '$gender', '$age');";
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
            <form id="comp" class="input-group">
                <input type="text" name="hall-name-signup-owner" class="input-field" placeholder="Enter your Hall Name "
                    required>
                <input type="number" name="max-person-signup-owner" class="input-field"
                    placeholder="Enter Max Pesron Number" required>
                <label id="personal">Upload your License Hall :</label>
                <input type="file" name="upload-License-signup-owner" class="input-field">
                <input type="text" name="License-number-signup-owner" class="input-field"
                    placeholder="Enter your License Number" required>
                <button type="submit" name="btn-signup-owner" class="submit-btn" onclick="confirm()">Sign Up</button>
        </div>
    </div>
    </form>
    <!-- -------------------------------- -->
    <script>
    function confirm() {
        document.location.href = "/include/temp/confirm_email_owner.html";
    }
    </script>
</body>

</html>