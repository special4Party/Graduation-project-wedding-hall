<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book Page</title>
    <link rel="stylesheet" href="/layout/css/booking.css">
    <link rel="stylesheet" href="/layout/css/normalize.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  </head>
  <body>
    <div class="container">
        <header>Booking Form</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details :</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="full-name-booking-page" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="birthday-person-booking-page" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email-person-booking-page" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="phone-person-booking-page" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>City</label>
                            <select required>
                                <option disabled selected>Select your city: </option>
                                <option>Amman</option>
                                <option>Irbid</option>
                                <option>Zarqa</option>
                                <option>Salt</option>
                                <option>Mafraq</option>
                                <option>Karak</option>
                                <option>Madaba</option>
                                <option>Jerash</option>
                                <option>Ajloun</option>
                                <option>Tafila</option>
                                <option>Aqaba</option>
                                <option>Ma'an</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Lounge Reservation Details :</span>

                    <div class="fields">

                        
                        <div class="input-field">
                            <label>Party time</label>
                            <input type="time" name="party-time-booking-page" placeholder="Enter issued state" required>
                        </div>

                        <div class="input-field">
                            <label>Party Date</label>
                            <input type="date"name="party-date-booking-page" placeholder="Enter Party Month/year" required>
                        </div>

                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" name="id-number-person-booking-page" placeholder="Enter ID number" required>
                        </div>

                        <div class="input-field">
                            <label>Number of invitees</label>
                            <input type="number" name="number-of-person-booking-page" placeholder="Enter Number of invitees" required>
                        </div>
                        
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Go To Pay</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>


            <div class="form-2">
                <div class="details address">
                    <span class="title">Services Details:</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Number of Cake Layer</label>
                            <input type="number" name="number-of-Cake-layer-booking-page" max="7" min="1" placeholder="max:7, min:1" required>
                        </div>
                        
                         <div class="input-field"> 
                            <label>Type Of Drinks:</label>
                        </div>
                        <div>
                            <label for="">Water</label>
                            <input type="checkbox" name="type-of-drink-booking-page" id="water">
                        </div>
                        <div>
                            <label for="">Soft Drinks</label>
                            <input type="checkbox" name="type-of-drink-booking-page" id="soft-drink">
                        </div>
                        <div class="input-field2"> 
                            <label>Music:</label>
                        </div>
                        <div>
                            <label for="">Arabic</label>
                            <input type="checkbox" name="type-of-Music-booking-page" id="A-music">
                        </div>
                        <div>
                            <label for="">English</label>
                            <input type="checkbox" name="type-of-music-booking-page" id="E-music">
                        </div>
                        <div>
                            <label for="">Video or Photo</label>
                            <input type="checkbox" name="video-photo-booking-page" id="Photo">
                        </div>
                    </div>
                </div>
            </div> 


            <div class="form second">
                <div class="details address">
                    <span class="title">Payment Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>cards accepted :</label>
                            <img src="/images/img/images.jpg" alt="">
                        </div>

                        <div class="input-field">
                            <label>name on card :</label>
                            <input type="text" name="name-on-card-payment-page" placeholder="mr. john deo" required>
                        </div>

                        <div class="input-field">
                            <label>credit card number :</label>
                            <input type="number" name="number-on-card-payment-page" placeholder="1111-2222-3333-4444" required>
                        </div>

                        <div class="input-field">
                            <label>exp month :</label>
                            <input type="number" name="exp-month-card-payment-page" placeholder="1" required>
                        </div>

                        <div class="input-field">
                            <label>exp year :</label>
                            <input type="number" name="exp-year-card-payment-page" placeholder="2022" required>
                        </div>

                        <div class="input-field">
                            <label>CVV :</label>
                            <input type="text" name="CVV-card-payment-page" placeholder="1234" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    
                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div> 
                </div>
<!-- -------------------------------------------- -->
                    
                </div> 
            </div>
        </form>
    </div>
<script>
    const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));

</script>
    <!--<script src="script.js"></script>-->
</body>
</html>
