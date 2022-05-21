<?php

require_once("../../conn.php");

$my_queryyy="select * from customer_register";
$result=mysqli_query($con,$my_queryyy);
//ASSOC  جلب المعلومات وتنظيمها في مصفوفة باستخدام دالة  
$customers=mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../layout/css/Dashboard.css">
    <link rel="stylesheet" href="../../layout/css/normalize.css">
    <script src="https://kit.fontawesome.com/92219ffc4f.js" crossorigin="anonymous"></script>
    <title>Admin Dashboard Panel</title>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="#" class="logo">
                        <img src="../../images/img/logo.jpeg">
                        <span class="nav-item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="active-dish">
                        <i class="fa-solid fa-house"></i>
                        <span class="nav-item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#owner-list">
                        <i class="fa-solid fa-user-shield"></i>
                        <span class="nav-item">Owner Halls</span>
                    </a>
                </li>
                <li>
                    <a href="#customer-list">
                        <i class="fa-solid fa-users-between-lines"></i>
                        <span class="nav-item">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="nav-item">Log Out</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-moon"></i>
                        <span class="nav-item">Night Mode</span>
                        <div class="nav-item mode-toggle">
                            <span class="switch"></span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <section class="main">
            <div class="main-top">

                <button class="search-icon">Search</button>
                <input type="text" class="input" placeholder="search here">
            </div>
            <div class="users">
                <div class="card">
                    <img src="../../images/img/png-clipart-youtube-facebook-computer-icons-conversation-social-network-blue-computer-wallpaper-thumbnail-removebg-preview.png"
                        alt="">
                    <h4>Requests</h4>
                    <button onclick="btnClicked1()">Go</button>
                </div>
                <!-- <div class="card">
                <img src="/images/halls/5.jpg" alt=""> 
                <h4>Owner Halls</h4>
                <button onclick="btnClicked2()">Show</button>
            </div>
            <div class="card">
                <img src="/images/halls/5.jpg" alt=""> 
                <h4>Customers</h4>
                <button onclick="btnClicked3()">Show</button>
            </div> -->
                <div class="card">
                    <img src="../../images/img/inquiry_icon.png" alt="">
                    <h4>Inquiries</h4>
                    <button onclick="btnClicked4()">Go</button>
                </div>
            </div>


            <section class="attendence" id="owner-list">
                <div class="attendence-list">
                    <h1>Owner Hall</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>hall name</th>
                                <th>license number</th>
                                <th>Date Joined</th>
                                <th>Location</th>
                                <th>delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>amman</td>
                                <td><button>delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>amman</td>
                                <td><button>delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>amman</td>
                                <td><button>delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>amman</td>
                                <td><button>delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="attendence" id="customer-list">
                <div class="attendence-list">
                    <h1>Customers list</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>Age</th>
                                <th>Date Joined</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            
                            ?>
                            <tr>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>Queens halls</td>
                                <td><button>delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>Queens halls</td>
                                <td><button>delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>Queens halls</td>
                                <td><button>delete</button></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>01</td>
                                <td>Queens halls</td>
                                <td><button>delete</button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </section>

        </section>
    </div>

    <!-- /include/temp/halls.html -->
    <script>
    function btnClicked1() {
        document.location.href = "../../include/temp/requests_admin.html";
    }
    // function btnClicked2(){
    //     document.location.href="#owner-list";
    // }
    // function btnClicked3(){
    //     document.location.href="#customer-list";
    // }
    function btnClicked4() {
        document.location.href = "../../include/temp/quistions_admin.html";
    }
    </script>
    <script src="../../layout/js/dashboard.js"></script>
</body>

</html>