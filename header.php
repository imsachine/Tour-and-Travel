<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from rn53themes.net/themes/demo/travelz/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2022 06:44:27 GMT -->
<?php session_start();
 ?>
<head>
   <title>The Travel - Tour Travel</title>
   <!--== META TAGS ==-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <!-- FAV ICON -->
   <link rel="shortcut icon" href="images/fav.ico">
   <!-- GOOGLE FONTS -->
   <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
   <!-- FONT-AWESOME ICON CSS -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!--== ALL CSS FILES ==-->
   <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="stylesheet" href="css/materialize.css"> -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/mob.css">
   <link rel="stylesheet" href="css/animate.css">
   <!-- <link rel="stylesheet" href="css/main.css"> -->
   <!-- Latest compiled and minified CSS -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- owl -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
  
  <style>
    .underline{
    background-color:red;
      height:2px;
     
    }
    #abtcon {
      padding-top:100px;
       padding-bottom:100px;
  }
    .contact{
    	margin:0 auto;
      	/* width:50%; */
       padding-top:100px;
       padding-bottom:100px;
       /* text-align: center; */
    }
    .con{
     font-family: "Times New Roman", Times, serif;
    }
    </style>
   
</head>

<body>
   <?php
   //     if(!isset($_SESSION['user']))
   // {  
   //    header('Location: login.php');
   //    exit();
   // }
   ?>
   <style>
      .carousel-control-next,
      .carousel-control-prev {
         width: 3% !important;
      }
   </style>

   <!-- Preloader -->
   <!-- <div id="preloader">
      <div id="status">&nbsp;</div>
   </div> -->
   <!-- MOBILE MENU -->
   <section>
      <div class="ed-mob-menu">
         <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
               <div class="wed-logo">
                  <a href="index.html"><img src="images/logo.png" alt="" />
                  </a>
               </div>
            </div>
            <div class="ed-mm-right">
               <div class="ed-mm-menu">
                  <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                  <div class="ed-mm-inn">
                     <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                    
                           <ul>
                           <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                           <!-- <li><a href="corporate.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Corporate</a></li> -->
                           <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
                           <li><a href="about.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> About Us</a></li>
                           <li><a href="share.php"><i class="fa fa-share-alt" aria-hidden="true"></i> Share App</a></li>
                           </ul>
                   
                     <!-- <ul>
                           <li><a href="all-package.html">All Package</a></li><li><a href="family-package.html">Family Package</a></li>
                           <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                           <li><a href="group-package.html">Group Package</a></li>
                           <li><a href="weekend-package.html">WeekEnd Package</a></li>
                           <li><a href="regular-package.html">Regular Package</a></li>
                           <li><a href="custom-package.html">Custom Package</a></li>
                           </ul> -->
                     <!-- <h4>Sighe Seeings Pages</h4> -->
                     <!-- <ul>
                           <li><a href="places.html">Seight Seeing 1</a></li>
                           <li><a href="places-1.html">Seight Seeing 2</a></li>
                           <li><a href="places-2.html">Seight Seeing 3</a></li>
                           </ul> -->
                     <!-- <h4>User Dashboard</h4> -->
                     <!-- <ul>
                           <li><a href="dashboard.html">My Bookings</a></li>
                           <li><a href="db-my-profile.html">My Profile</a></li>
                           <li><a href="db-my-profile-edit.html">My Profile edit</a></li>
                           <li><a href="db-travel-booking.html">Tour Packages</a></li>
                           <li><a href="db-hotel-booking.html">Hotel Bookings</a></li>
                           <li><a href="db-event-booking.html">Event bookings</a></li>
                           <li><a href="db-payment.html">Make Payment</a></li>
                           <li><a href="db-refund.html">Cancel Bookings</a></li>
                           <li><a href="db-all-payment.html">Prient E-Tickets</a></li>
                           <li><a href="db-event-details.html">Event booking details</a></li>
                           <li><a href="db-hotel-details.html">Hotel booking details</a></li>
                           <li><a href="db-travel-details.html">Travel booking details</a></li>
                           </ul> -->
                     <!-- <h4>Other pages:1</h4> -->
                     <!-- <ul>
                           <li><a href="tour-details.html">Travel details</a></li>
                           <li><a href="hotel-details.html">Hotel details</a></li>
                           <li><a href="all-package.html">All package</a></li><li><a href="hotels-list.html">All hotels</a></li>
                           <li><a href="booking.html">Booking page</a></li>
                           </ul> -->
                     <!-- <h4 class="ed-dr-men-mar-top">User login pages</h4> -->
                     <!-- <ul>
                           <li><a href="register.html">Register</a></li>
                           <li><a href="login.html">Login and Sign in</a></li>
                           <li><a href="forgot-pass-2.html">Forgot pass</a></li>
                           </ul> -->
                     <!-- <h4>Other pages:2</h4> -->
                     <!-- <ul>
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="testimonials.html">Testimonials</a></li>
                           <li><a href="events.html">Events</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="tips.html">Tips Before Travel</a></li>
                           <li><a href="price-list.html">Price List</a></li>
                           <li><a href="discount.html">Discount</a></li>
                           <li><a href="faq.html">FAQ</a></li>
                           <li><a href="sitemap.html">Site map</a></li>
                           <li><a href="404.html">404 Page</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                           </ul> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <!--HEADER SECTION-->
   <section>
      <!-- TOP BAR -->
      <div class="ed-top">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="ed-com-t1-left">
                     <ul>
                        <li><a href="#">Contact:  Block B, Sector 51, Noida, Uttar Pradesh 201303</a>
                        </li>
                        <li><a href="#">Phone: +101-1231-1231</a>
                        </li>
                     </ul>
                  </div>
                  <div class="ed-com-t1-right">
                     <ul>
                        <?php
                        if (!isset($_SESSION['user'])) {
                           echo "<li><a href='login.php'>Sign In</a></li>
                        <li><a href='register.php'>Sign Up</a></li>";
                        } else {
                           echo " <li><a href='logout.php'>Logout</a></li>
                        <li><a href='#'>Show Profile</a></li>";
                        }
                        ?>

                     </ul>
                  </div>
                  <div class="ed-com-t1-social">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- LOGO AND MENU SECTION -->
      <div class="top-logo" data-spy="affix" data-offset-top="250">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="wed-logo">
                     <a href="index.html"><img src="images/logo.png" alt="" />
                     </a>
                  </div>
                  <div class="main-menu">
                     <ul>
                        <!--<li><a href="index.html">Home</a>
                        </li>
                        <li class="about-menu">
                           <a href="family-package.html" class="mm-arr">Packages</a>-->
                           <!-- MEGA MENU 1 -->
                           <!-- <div class="mm-pos">
                              <div class="about-mm m-menu">
                                  <div class="m-menu-inn">
                                      <div class="mm1-com mm1-s1">
                                          <div class="ed-course-in">
                                              <a class="course-overlay menu-about" href="all-package.html">
                                                  <img src="images/sight/5.jpg" alt="">
                                                  <span>Popular Package</span>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="mm1-com mm1-s2">
                                          <p>Want to change the world? At Berkeley we’re doing just that. When you join the Golden Bear community, youre part of an institution that shifts the global conversation every single day.</p>
                                          <a href="all-package.html" class="mm-r-m-btn">Read more</a>
                                      </div>
                                      <div class="mm1-com mm1-s3">
                                          <ul>
                                              <li><a href="booking-all.html">All Booking</a></li>
                                              <li><a href="booking-tour-package.html">Tour Package Booking</a></li>
                                              <li><a href="booking-hotel.html">Hotel Booking</a></li>
                                              <li><a href="booking-car-rentals.html">Car Rentals Booking</a></li>
                                              <li><a href="booking-flight.html">Flight Booking</a></li>
                                              <li><a href="booking-slider.html">Slider Booking</a></li>
                                          </ul>
                                      </div>
                                      <div class="mm1-com mm1-s4">
                                          <ul>
                                              <li><a href="all-package.html">All Package</a></li><li><a href="family-package.html">Family Package</a></li>
                                              <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                              <li><a href="group-package.html">Group Package</a></li>
                                              <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                              <li><a href="regular-package.html">Regular Package</a></li>
                                              <li><a href="custom-package.html">Custom Package</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              </div>
                              </li>
                              <li class="admi-menu">
                              <a href="#" class="mm-arr">Seight Seeing</a> -->
                           <!-- MEGA MENU 1 -->
                          <!-- <div class="mm-pos">
                              <div class="admi-mm m-menu">
                                 <div class="m-menu-inn">
                                    <div class="mm2-com mm1-com mm1-s1">
                                       <div class="ed-course-in">
                                          <a class="course-overlay" href="places.html">
                                             <img src="images/sight/1.jpg" alt="">
                                             <span>Seight Seeing - 1</span>
                                          </a>
                                       </div>
                                       <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros.
                                          Vestibulum congue nec eros quis lacinia. Mauris non tincidunt
                                          lectus. Nulla mollis, orci vitae accumsan rhoncus.
                                       </p>
                                       <a href="places.html" class="mm-r-m-btn">Read more</a>
                                    </div>
                                    <div class="mm2-com mm1-com mm1-s1">
                                       <div class="ed-course-in">
                                          <a class="course-overlay" href="places-1.html">
                                             <img src="images/sight/2.jpg" alt="">
                                             <span>Seight Seeing - 2</span>
                                          </a>
                                       </div>
                                       <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros.
                                          Vestibulum congue nec eros quis lacinia. Mauris non tincidunt
                                          lectus. Nulla mollis, orci vitae accumsan rhoncus.
                                       </p>
                                       <a href="places-1.html" class="mm-r-m-btn">Read more</a>
                                    </div>
                                    <div class="mm2-com mm1-com mm1-s1">
                                       <div class="ed-course-in">
                                          <a class="course-overlay" href="places-2.html">
                                             <img src="images/sight/3.jpg" alt="">
                                             <span>Seight Seeing - 3</span>
                                          </a>
                                       </div>
                                       <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros.
                                          Vestibulum congue nec eros quis lacinia. Mauris non tincidunt
                                          lectus. Nulla mollis, orci vitae accumsan rhoncus.
                                       </p>
                                       <a href="places-2.html" class="mm-r-m-btn">Read more</a>
                                    </div>
                                    <div class="mm2-com mm1-com mm1-s4">
                                       <div class="ed-course-in">
                                          <a class="course-overlay" href="places-3.html">
                                             <img src="images/sight/4.jpg" alt="">
                                             <span>Seight Seeing - 4</span>
                                          </a>
                                       </div>
                                       <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros.
                                          Vestibulum congue nec eros quis lacinia. Mauris non tincidunt
                                          lectus. Nulla mollis, orci vitae accumsan rhoncus.
                                       </p>
                                       <a href="places-3.html" class="mm-r-m-btn">Read more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li><a href="hotels-list.html">Hotels</a></li>-->
                        <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                       <!-- <li class="cour-menu">
                           <a href="#!" class="mm-arr">All Pages</a>
                        </li>
                        <li><a href="events.html">Events</a>
                        </li>
                        <li><a href="dashboard.html">Profile</a>
                        </li>
                        <li><a href="contact.html">Contact us</a>
                        </li>-->
                      <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                           <!-- <li><a href="corporate.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Corporate</a></li> -->
                           <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
                           <li><a href="about.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> About Us</a></li>
                           <li><a href="share.php"><i class="fa fa-share-alt" aria-hidden="true"></i> Share App</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>


      