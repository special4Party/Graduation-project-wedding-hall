<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../layout/css/halls.css">
    <link rel="stylesheet" href="../../layout/css/normalize.css">
    <link rel="stylesheet" href="../../layout/css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>Wedding-Hall Page</title>
</head>

<body>
    <!----------START HEADER -------------------->




    <!----------END HEADER -------------------->

    <!--------START BODY AND NAVBAR  AND HEADER----------->
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="../../images/img/logo.jpeg">
                </div>
                <nav>
                    <ul>
                        <li><a href="../../index.php">Home</a></li>
                        <li><a href="../../index.php#about-us-link">About us</a></li>
                        <li><a href="../../index.php#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="row-1">
                <div class="colum-2">
                    <h1>Go to see<br> wedding-halls !</h1>
                    <p>success isn't always about greatness, it's about consistency.<br> consistent hard work gains
                        success.greatness will come.</p>
                    <a href="#galary" class="btn">Book Now &#8594</a>
                    <!--&#8594 the Arrow -->
                </div>
                <div class="colum-2">
                    <img src="../../images/img/logo.jpeg" alt="">
                </div>
            </div>
        </div>

    </div>

    <!--------END BODY AND NAVBAR AND HEADER ------->

    <!----------START CATEGORIES -------------------->
    <!-- <div class="categories">
    <div class="small-container">
        <h2 class="title">Halls near to you </h2>
        <div class="row">
            <div class="colum-3">
               <a href="#galary"><img src="/images/halls/h6.jpg" ></a> 
            </div>
           
        </div>
    </div>  
</div> -->

    <!----------END CATEGORIES -------------------->
    <div class="small-container">
        <h2 class="title" id="galary">Halls Galary</h2>
        <div class="input-field">
            <i class="search">
                <button class="search-icon"></button>
                <input type="text" placeholder="search for any wedding hall or location">
            </i>
        </div>

        <div class="row">
            <div class="colum-4" data-name="p-1">
                <img src="../../images/halls/2.jpg">
                <h4>???????? ?????? ????????????????</h4>
            </div>
            <div class="colum-4" data-name="p-2">
                <img src="../../images/halls/5.jpg">
                <h4>Riyadh Halls </h4>
            </div>
            <div class="colum-4" data-name="p-3">
                <img src="../../images/halls/4.jpg">
                <h4>???????? ???????? ??????????????</h4>
            </div>
            <div class="colum-4" data-name="p-4">
                <img src="../../images/halls/6.jpg">
                <h4>?????????? ?????????????? ????????????????????</h4>
            </div>
            <div class="colum-4" data-name="p-5">
                <img src="../../images/halls/h8.jpg">
                <h4>Memories Hall </h4>
            </div>
            <div class="colum-4" data-name="p-6">
                <img src="../../images/halls/3.jpg">
                <h4>?????????? ?????????????? ????????????????????</h4>
            </div>
            <div class="colum-4" data-name="p-7">
                <img src="../../images/halls/1.png">
                <h4>?????????? ???????? ??????????????????</h4>
            </div>
            <div class="colum-4" data-name="p-8">
                <img src="../../images/halls/h6.jpg">
                <h4>?????????? ???????????? ????????????????????</h4>
            </div>
        </div>
    </div>

    <!-- ---------------------------------- -->
    <div class="products-preview">

        <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <h3>???????? ?????? ????????????????</h3>
            <p>07 7581 6070</p>
            <div class="city">????????</div>
            <div class="buttons">
                <button class="book" onclick="go1()">Book Now</button>
                <button class="details" onclick="go2()">Details</button>

            </div>
        </div>
        <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <!-- <img src="images/2.png" alt=""> -->
            <h3>Riyadh Halls</h3>
            <p>0796244445</p>
            <div class="city">??????????</div>
            <div class="buttons">
                <button class="book" onclick="go1()">Book Now</button>
                <button class="details" onclick="go2()">Details</button>
            </div>
        </div>

        <div class="preview" data-target="p-3">
            <i class="fas fa-times"></i>
            <!-- <img src="images/3.png" alt=""> -->
            <h3>???????? ???????? ??????????????</h3>
            <p>0796495094</p>
            <div class="city">??????????</div>
            <div class="buttons">
                <button class="book" onclick="go1()">Book Now</button>
                <button class="details" onclick="go2()">Details</button>
            </div>
        </div>

        <div class="preview" data-target="p-4">
            <i class="fas fa-times"></i>
            <!-- <img src="images/4.png" alt=""> -->
            <h3>?????????? ?????????????? ????????????????????</h3>
            <p>0795485377</p>
            <div class="city">????????</div>
            <div class="buttons">
                <button class="book" onclick="go1()">Book Now</button>
                <button class="details" onclick="go2()">Details</button>
            </div>
        </div>

        <div class="preview" data-target="p-5">
            <i class="fas fa-times"></i>
            <!-- <img src="images/5.png" alt=""> -->
            <h3>Memories Hall</h3>
            <p>0797114892</p>
            <div class="city">????????</div>
            <div class="buttons">
                <button class="book" onclick="go1()">Book Now</button>
                <button class="details" onclick="go2()">Details</button>
            </div>
        </div>

        <div class="preview" data-target="p-6">
            <i class="fas fa-times"></i>
            <!-- <img src="/images/img/a.png" alt=""> -->
            <h3>?????????? ?????????????? ????????????????????</h3>
            <p>065548989</p>
            <div class="city">????????</div>
            <div class="buttons">
                <button class="book" onclick="go1()">Book Now</button>
                <button class="details" onclick="go2()">Details</button>
            </div>
        </div>
        <div class="preview" data-target="p-7">
            <i class="fas fa-times"></i>
            <!-- <img src="/images/img/a.png" alt=""> -->
            <h3>?????????? ???????? ??????????????????</h3>
            <p>064207602</p>
            <div class="city">????????</div>
            <div class="buttons">
                <button class="book" onclick="go1()">Book Now</button>
                <button class="details" onclick="go2()">Details</button>
            </div>
        </div>
        <div class="preview" data-target="p-8">
            <i class="fas fa-times"></i>
            <!-- <img src="/images/img/a.png" alt=""> -->
            <h3>?????????? ???????????? ????????????????????</h3>
            <p>0795202655</p>
            <div class="city">????????</div>
            <div class="buttons">
                <button class="book" onclick="go1()">Book Now</button>
                <button class="details" onclick="go2()">Details</button>
            </div>
        </div>
    </div>


    <!--    -----------footer-------------->
    <div class="footer">
        <div class="container-footer">
            <span>copyright &copy; 2014 wedding-hall</span>
            <ul>
                <li>
                    <a href="http://facebook.com">
                        <img src="/images/img/face.png" alt="facebook">
                    </a>
                </li>
                <li>
                    <a href="http://web.whatsapp.com">
                        <img src="/images/img/what.png" alt="whatsapp">
                    </a>
                </li>
                <li>
                    <a href="http://accounts.snapchat.com">
                        <img src="/images/img/snap.png" alt="snapchat">
                    </a>
                </li>
                <li>
                    <a href="http://www.instagram.com">
                        <img src="/images/img/insta.png" alt="instagram">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script src="/layout/js/show.js"></script>

</body>

</html>