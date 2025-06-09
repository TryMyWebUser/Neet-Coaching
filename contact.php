<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php include "temp/head.php" ?>

    </head>

    <body>
        <?php include "temp/header.php" ?>

        <section class="page-header">
            <div class="bg-item">
                <div class="bg-img" data-background="assets/img/bg-img/page-header-bg.png"></div>
                <div class="overlay"></div>
                <div class="shapes">
                    <div class="shape shape-1"><img src="assets/img/shapes/page-header-shape-1.png" alt="shape" /></div>
                    <div class="shape shape-2"><img src="assets/img/shapes/page-header-shape-2.png" alt="shape" /></div>
                    <div class="shape shape-3"><img src="assets/img/shapes/page-header-shape-3.png" alt="shape" /></div>
                </div>
            </div>
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Contact Us</h1>
                    <h4 class="sub-title"><a class="home" href="index.html">Home </a><span class="icon">/</span><a class="inner-page" href="contact.html"> Contact Us</a></h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="contact-section pt-120 pb-120">
            <div class="container">
                <div class="row gy-lg-0 gy-5">
                    <div class="col-lg-7">
                        <div class="blog-contact-form contact-form">
                            <h2 class="title mb-0">Leave A Reply</h2>
                            <p class="mb-30 mt-10">Fill-up The Form and Message us of your amazing question</p>
                            <div class="request-form">
                                <form action="https://html.rrdevs.net/edcare/mail.php" method="post" id="ajax_contact" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-item">
                                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name" />
                                                <div class="icon"><i class="fa-regular fa-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-item">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" />
                                                <div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="form-item">
                                                <select name="subject" id="subject" class="niceSelect select-control form-control">
                                                    <option value="">Select Subject</option>
                                                    <option value="2">Plan 1</option>
                                                    <option value="3">Plan 2</option>
                                                    <option value="4">Plan 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="form-item message-item">
                                                <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
                                                <div class="icon"><i class="fa-light fa-messages"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-btn">
                                        <button id="submit" class="ed-primary-btn" type="submit">Submit Message</button>
                                    </div>
                                </form>
                                <div id="form-messages" class="alert mt-20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-content">
                            <div class="contact-top">
                                <h3 class="title">Contact Details</h3>
                                <p>With over 30 years of excellence in education, S.M.B NEET Coaching has been a trusted name in guiding students towards medical success.</p>
                            </div>
                            <div class="contact-list">
                                <div class="list-item">
                                    <div class="icon">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Address</h4>
                                        <p>
                                            Plot No: 3, K.Kamaraj Nagar, Ganapathy Coimbatore - 06
                                        </p>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="icon">
                                        <i class="fa-sharp fa-solid fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Phone Number</h4>
                                        <span><a href="tel:919842090972">+91 9842 090 972</a></span>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="icon">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Official Work Time</h4>
                                        <span><a href="mailto:ravimala2001@gmail.com">ravimala2001@gmail.com</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ contact-section -->

        <?php include "temp/footer.php" ?>

    </body>
</html>