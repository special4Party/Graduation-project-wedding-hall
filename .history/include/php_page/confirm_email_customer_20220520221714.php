<?php

require_once("../../conn.php");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/layout/css/confirm_cusomer.css">
    <title>Comfirm customer email</title>
</head>

<body>
    <main>
        <h3>Customer Account Verification</h3>
        <h1>Special Party</h1>
        <p>we have send you access code via email : <span class="email">hello@gmail.com</span></p>
        <h4>Enter Your OTP Code Here</h4>
        <div>
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
        </div>
        <button>Verify</button>
        <h4>Not Receive Code <span>Resend</span></h4>
    </main>
</body>

</html>