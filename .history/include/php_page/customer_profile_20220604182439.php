<?php

require_once("../../conn.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../layout/css/customer_profile.css">
    <title>Customer Profile Page </title>
</head>

<body>
    <section>
        <div class="container">
            <header>
                <a href="#" class="logo">Special <span>Party</span></a>
                <ul>
                    <li><a href="../../index.php" class="active">Home</a></li>
                    <li><a href="../../index.php#contact-footer">Contact us</a></li>
                </ul>
            </header>
            <div class="content">
                <h2>Hayat Malek</h2>
                <!-- table info here -->
                <!--
                     th:table header cell
                     tr: table row
                     td:table data cell
                 -->
                <table>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>assd@gmail.com</td>
                            <td>25</td>
                            <td>Female</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <button onclick="gotopage1()">View Your Booking Halls</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- <a href="#">More..</a> -->
            </div>
            <div class="imgbox">
                <!-- -----customer photo ------ -->
                <img src="../../images/img/a10.jpg">
            </div>
        </div>
        <a href=""></a>
    </section>
    <!-- ----------script-------------- -->
    <script>
    function gotopage1() {
        document.location.href = "../php_page/view_booking_customer.php";
    }
    // function gotopage2(){
    //     document.location.href="/include/temp/request_owner.html";
    // }
    </script>
</body>

</html>