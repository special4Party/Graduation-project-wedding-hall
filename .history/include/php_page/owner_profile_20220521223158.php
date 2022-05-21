<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../layout/css/owner_profile.css">
    <title>Profile test</title>
</head>

<body>
    <section>
        <div class="container">
            <header>
                <a href="#" class="logo">Special <span>Party</span></a>
                <ul>
                    <li><a href="../../index.html" class="active">Home</a></li>
                    <li><a href="../../index.html#contact-footer">Contact us</a></li>
                </ul>
            </header>
            <div class="content">
                <h2>Queens Hall</h2>
                <!-- table info here -->
                <!--
                     th:table header cell
                     tr: table row
                     td:table data cell
                 -->
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Asmaa</td>
                            <td>assd@gmail.com</td>
                            <td>009639987876</td>
                            <td>Amman- st.1 - num:30A</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <button onclick="gotopage1()">View Your Hall</button>
                                <button onclick="gotopage2()">View Request Booking</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- <a href="#">More..</a> -->
            </div>
            <div class="imgbox">
                <!-- -----hall image----- -->
                <img src="../../images/img/1.jpg">
            </div>
        </div>
    </section>
    <!-- ----------script-------------- -->
    <script>
    function gotopage1() {
        document.location.href = "../../include/temp/hall_owner_profile.html";
    }

    function gotopage2() {
        document.location.href = "../../include/temp/request_owner.html";
    }
    </script>
</body>

</html>