<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/92219ffc4f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../layout/css/quistio_admin.css">
    <title>Quistion Admin Page</title>
</head>
<?php
                    require_once("../../conn.php");
                    if(isset($_POST["btn_signup_customer_signup"])){
                        $password_signUp= $_POST["password_customer_signup"];
                        $repet_password_signUp= $_POST["repet_password_customer_signup"];
                        $email_signUp= $_POST["email_customer_signup"];
                        $full_name= $_POST["name_customer_signup"];
                        $age_signUp= $_POST["age_customer_signup"];
                        $gender_signUp= $_POST["gender_customer_signup"];
                        //
                        //insert into 'customer_register' ( 'full_name', 'email', 'password', 'gender', 'birthday_date') VALUES ('rama', 'rama@roro.ro', '232323', 'female', '2022-05-17');
                       
                        if($password_signUp===$repet_password_signUp){
                            
                            $my_query_signUp="INSERT INTO  customer_register (full_name, email, password, gender, birthday_date) VALUES ('$full_name', '$email_signUp', '$password_signUp', '$gender_signUp', '$age_signUp');";
                            
                            if($con->query($my_query_signUp) === TRUE){
                                echo"success register new customer";
                            }
                        }else{
                             echo"your password its not same!!";
                        }
                    }else{
                        echo"your email or password is incorrect customer!!";
                    }

                ?>

<body>
    <div class="table">
        <div class="table_header">
            <p>Inquiries and Complaints</p>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>lisa</td>
                        <td>raup@gmail.com</td>
                        <td>+962789909898</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum corndae minima vel, ipsum
                            reprehenderit repellat pariatur obcaecati adipisci eos!</td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>maher</td>
                        <td>guta@gmail.com</td>
                        <td>+962789909898</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum s!</td>

                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ahmed</td>
                        <td>igupt@gmail.com</td>
                        <td>+962789909898</td>
                        <td>Lohenderit repellat pariatur obcaecati adipisci eos!</td>

                    </tr>
                    <tr>
                        <td>4</td>
                        <td>roaa</td>
                        <td>akhigu@gmail.com</td>
                        <td>+962789909898</td>
                        <td>Lorem ipsum dolor sit amet consinus ipsum doloremque officiis eius quaerat voluandae minima
                            vel, ipsum reprehenderit repellat ci eos!</td>

                    </tr>
                    <tr>
                        <td>5</td>
                        <td>mohammad</td>
                        <td>rgupta@gmail.com</td>
                        <td>+962789909898</td>
                        <td>Lo repellendus repudiandae minima vel, ipsum reprehenderit repellat pariatur obcaecati
                            adipisci eos!</td>

                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Camera</td>
                        <td>rakhigupta@gmail.com</td>
                        <td>+962789909898</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum corruecati adipisci eos!
                        </td>

                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Camera</td>
                        <td>rakhigupta@gmail.com</td>
                        <td>+962789909898</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum corruecati adipisci eos!
                        </td>

                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Camera</td>
                        <td>rakhigupta@gmail.com</td>
                        <td>+962789909898</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum corruecati adipisci eos!
                        </td>

                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Camera</td>
                        <td>rakhigupta@gmail.com</td>
                        <td>+962789909898</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum corruecati adipisci eos!
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>