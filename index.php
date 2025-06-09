<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php include "temp/head.php" ?>

        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
        <style>
            .popup {
                background-color: #ffffff;
                width: 420px;
                padding: 30px;
                position: fixed;
                transform: translate(-50%, -50%);
                left: 50%;
                top: 50%;
                border-radius: 8px;
                display: none;
                text-align: center;
                z-index: 1000;
                box-shadow: 0 0 10px 1px;
            }

            .popup button#close {
                display: flex;
                margin: 0 0 20px auto;
                background-color: #2196F3;
                font-size: 30px;
                color: #ffffff;
                border-radius: 100%;
                width: 30px;
                height: 30px;
                border: none;
                outline: none;
                cursor: pointer;
                align-items: center;
                justify-content: center;
            }

            .popup h3 {
                margin-bottom: 20px;
            }

            .popup input,
            .popup textarea {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 14px;
            }

            .popup textarea {
                resize: none;
            }

            .popup button.submit-btn {
                background-color: #0f72e5;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                border-radius: 20px;
                cursor: pointer;
                font-size: 16px;
            }

            .popup button.submit-btn:hover {
                background-color: #064aa8;
            }
        </style>

    </head>
    <body>
        <?php include "temp/header.php" ?>

        <section class="hero-section-16">
            <div class="container">
                <div class="hero-wrap-16">
                    <div class="hero-content hero-content-16 white-content">
                        <div class="section-heading">
                            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                                <span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Welcome to
                            </h4>
                            <h2 class="section-title wow fade-in-bottom mb-3" data-wow-delay="400ms">
                                S.M.B Neet Coaching
                            </h2>
                            <p>
                                With over 30 years of excellence in education,<br />
                                S.M.B NEET Coaching has been a trusted name in guiding<br />
                                students towards medical success.
                            </p>
                        </div>
                        <div class="hero-btn-wrap mb-0">
                            <a href="tel:9842090972" class="ed-primary-btn">Contact Now</a>
                        </div>
                    </div>
                    <div class="hero-men"><img src="assets/img/new-update-4/hero-img-3.png" alt="hero" /></div>
                    <div class="shapes">
                        <div class="shape-1"><img src="assets/img/new-update-4/shapes/hero-shape-9.png" alt="hero" /></div>
                        <div class="shape-2"><img src="assets/img/new-update-4/shapes/hero-shape-10.png" alt="hero" /></div>
                        <div class="shape-3"><img src="assets/img/new-update-4/shapes/hero-shape-11.png" alt="hero" /></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ hero-section -->

        <section class="counter-section-12 pt-120 pb-120 overflow-hidden">
            <div class="container">
                <div class="counter-wrap-12 row align-items-center">
                    <div class="col-lg-5">
                        <div class="counter-left-content">
                            <div class="section-heading mb-20">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                                    <span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>About Us
                                </h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                                    Experience <br />
                                    Status
                                </h2>
                            </div>
                            <p class="mb-0">Immunology for both national and international students.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="counter-item-wrap-12">
                            <div class="counter-item-12">
                                <div class="icon"><img src="assets/img/icon/category-1.png" alt="icon" /></div>
                                <div class="content">
                                    <h3 class="title"><span class="odometer" data-count="2025">0</span><span class="number">+</span></h3>
                                    <p>Since</p>
                                </div>
                            </div>
                            <div class="counter-item-12">
                                <div class="icon"><img src="assets/img/new-update-3/icon/counter-2.png" alt="icon" /></div>
                                <div class="content">
                                    <h3 class="title"><span class="odometer" data-count="1000">0</span><span class="number">+</span></h3>
                                    <p>Successflly Trained</p>
                                </div>
                            </div>
                            <div class="counter-item-12">
                                <div class="icon"><img src="assets/img/new-update-3/icon/counter-3.png" alt="icon" /></div>
                                <div class="content">
                                    <h3 class="title"><span class="odometer" data-count="97">0</span><span class="number">+</span></h3>
                                    <p>Satisfaction Rate</p>
                                </div>
                            </div>
                            <div class="counter-item-12">
                                <div class="icon"><img src="assets/img/new-update-3/icon/counter-4.png" alt="icon" /></div>
                                <div class="content">
                                    <h3 class="title"><span class="odometer" data-count="1000">0</span><span class="number">+</span></h3>
                                    <p>Students Enrolled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ counter-section -->

        <section class="about-section-3 pt-120 pb-120">
            <div class="shapes">
                <div class="shape shape-1"><img src="assets/img/shapes/about-shape-1.png" alt="shape"></div>
                <div class="shape shape-2"><img src="assets/img/shapes/about-shape-2.png" alt="shape"></div>
                <div class="shape shape-3"><img src="assets/img/shapes/about-shape-3.png" alt="shape"></div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img-wrap-3 wow fade-in-left" data-wow-delay="400ms">
                            <div class="about-img">
                                <img class="main-img" src="assets/img/images/about-img-3.png" alt="about">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content-3">
                            <div class="section-heading mb-20">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>About Us</h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">S.M.B Neet Coaching</h2>
                            </div>
                            <p class="mb-30 wow fade-in-bottom" data-wow-delay="500ms">Our coaching center for NEET is led by Dr. P. Soundarapandian, M.Sc. (Medical Microbiology), M.Phil., Ph.D. (USA) in Medical Microbiology. He has 30 years of experience in teaching. <b>Dr. P. Soundarapandian (proprietor).</b></p>
                            <div class="sidebar-widget d-block about-counter-items wow fade-in-bottom" data-wow-delay="600ms">
                                <ul class="category-list">
                                    <li><a href="page1.php"><i class="fa-sharp fa-solid fa-circle-check"></i>NEET/Biology, +1 , +2 Std Students</a></li>
                                    <li><a href="page2.php"><i class="fa-sharp fa-solid fa-circle-check"></i>Medical Micro biology for MBBS / M.B.Ch.B Students</a></li>
                                    <li><a href="page3.php"><i class="fa-sharp fa-solid fa-circle-check"></i>USMLE Coaching Class for Medical Students</a></li>
                                </ul>
                            </div>
                            <div class="about-btn wow fade-in-bottom" data-wow-delay="600ms">
                                <a href="about.php" class="ed-primary-btn">Read More <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ category-section -->

        <section class="promo-section-16 pb-120 pt-120">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                        <span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>S.M.B Neet Coaching
                    </h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Courses</h2>
                </div>
                <div class="row gy-lg-0 gy-4">
                    <div class="col-lg-4 col-md-6 wow fade-in-bottom" data-wow-delay="400ms">
                        <a href="page1.php"><div class="promo-item-16">
                            <div class="icon"><img src="assets/img/images/promo-img-1.png" alt="promo" /></div>
                            <div class="promo-content text-center">
                                <h3 class="title">Neet (Biology)</h3>
                                <p>A focused biology curriculum tailored for NEET aspirants, covering all key topics with conceptual clarity, diagrams, and regular assessments.</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fade-in-bottom" data-wow-delay="500ms">
                        <a href="page2.php"><div class="promo-item-16">
                            <div class="icon"><img src="assets/img/images/promo-img-2.png" alt="promo" /></div>
                            <div class="promo-content text-center">
                                <h3 class="title">MBBS / M.B.Ch.B Student (US)</h3>
                                <p>Designed for MBBS/M.B.Ch.B students in the US, this module ensures flexible access to resources anytime, from any device.</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fade-in-bottom" data-wow-delay="600ms">
                        <a href="page3.php"><div class="promo-item-16">
                            <div class="icon"><img src="assets/img/images/promo-img-3.png" alt="promo" /></div>
                            <div class="promo-content text-center">
                                <h3 class="title">USMLE - Medical Student (Coaching)</h3>
                                <p>Interactive coaching with quizzes, simulations, and multimedia aids to support USMLE exam preparation in an engaging way.</p>
                            </div>
                        </div></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ promo-section -->

        <?php include "temp/footer.php" ?>

        <div class="popup">
            <button id="close">&times;</button>
            <h3>Contact Form</h3>
            <form id="careerForm">
                <input type="text" name="fullName" placeholder="Enter Your Full Name" required />
                <input type="email" name="email" placeholder="Enter email" required />
                <input type="number" name="phoneNumber" placeholder="Contact Number" required />
                <input type="text" name="subject" placeholder="Subject" required />
                <textarea name="message" rows="5" placeholder="We expect drop some line from you..." required></textarea>
                <button type="submit" name="submit" value="contact-form" class="submit-btn">Send Message</button>
            </form>
        </div> 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            window.addEventListener("load", function () {
                setTimeout(function () {
                    document.querySelector(".popup").style.display = "block";
                }, 6000);
            });

            document.querySelector("#close").addEventListener("click", function () {
                document.querySelector(".popup").style.display = "none";
            });

            // Add event listener to form submission
            document.getElementById("careerForm").addEventListener("submit", function(e) {
                e.preventDefault(); // Prevent default form submission
                showWaitingMessageAndSendRequest();
            });

            function showWaitingMessageAndSendRequest() {
                Swal.fire({
                    title: 'Submitting...',
                    text: 'Please wait while we process your application.',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                sendApplicationRequest();
            }

            function sendApplicationRequest() {
                let formData = new FormData(document.getElementById("careerForm"));
                // console.log("Sending form data:", Object.fromEntries(formData.entries()));
                
                fetch("temp/Broker.class.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // console.log("Response Data:", data);
                    if (data.success) {
                        showSuccessMessage();
                    } else {
                        showErrorMessage(data.message);
                    }
                })
                .catch(error => {
                    console.error("Fetch Error:", error);
                    showErrorMessage("An unexpected error occurred. Please try again later.");
                });
            }

            function showSuccessMessage() {
                Swal.fire({
                    icon: "success",
                    title: "Application Submitted!",
                    text: "Our team will review your application and get back to you.",
                    confirmButtonText: 'OK',
                }).then(() => {
                    document.querySelector(".popup").style.display = "none";
                    // Clear the form if needed
                    document.getElementById("careerForm").reset();
                });
            }

            function showErrorMessage(message) {
                Swal.fire({
                    icon: "error",
                    title: "Submission Failed",
                    text: message,
                    confirmButtonText: 'OK',
                }).then(() => {
                    document.querySelector(".popup").style.display = "none";
                    // Clear the form if needed
                    document.getElementById("careerForm").reset();
                });
            }
        </script>

    </body>
</html>