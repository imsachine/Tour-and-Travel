<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/tour-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2022 06:45:23 GMT -->
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
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>
	
<?php include 'admin/connection.php';
	
	$id=$_GET['id'];
	$type=$_GET['type'];
	$query1 = "select *from  photos  WHERE tour_type='$type' AND tour_id=$id";
	$result1 = mysqli_query($conn,$query1);
?>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="main.html"><img src="images/logo.png" alt="" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <!-- <h4>Home pages</h4> -->
                            <ul>
							<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                           <!-- <li><a href="corporate.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Corporate</a></li> -->
                           <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
                           <li><a href="about.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> About Us</a></li>
                           <li><a href="share.php"><i class="fa fa-share-alt" aria-hidden="true"></i> Share App</a></li>
                            </ul>
                            <!-- <h4>Tour Packages</h4>
                            <ul>
                                <li><a href="all-package.html">All Package</a></li><li><a href="family-package.html">Family Package</a></li>
                                <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                <li><a href="group-package.html">Group Package</a></li>
                                <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                <li><a href="regular-package.html">Regular Package</a></li>
                                <li><a href="custom-package.html">Custom Package</a></li>
                            </ul>
                            <h4>Sighe Seeings Pages</h4>
                            <ul>
                                <li><a href="places.html">Seight Seeing 1</a></li>
                                <li><a href="places-1.html">Seight Seeing 2</a></li>
                                <li><a href="places-2.html">Seight Seeing 3</a></li>
                            </ul>
                            <h4>User Dashboard</h4>
                            <ul>
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
                            </ul>
                            <h4>Other pages:1</h4>
                            <ul>
                                <li><a href="tour-details.html">Travel details</a></li>
                                <li><a href="hotel-details.html">Hotel details</a></li>
                                <li><a href="all-package.html">All package</a></li><li><a href="hotels-list.html">All hotels</a></li>
                                <li><a href="booking.html">Booking page</a></li>
                            </ul>
                            <h4 class="ed-dr-men-mar-top">User login pages</h4>
                            <ul>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login and Sign in</a></li>
                                <li><a href="forgot-pass-2.html">Forgot pass</a></li>
                            </ul>
                            <h4>Other pages:2</h4>
                            <ul>
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
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +101-1231-1231</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
							<?php
									if(!isset($_SESSION['user'])){
										echo"<li><a href='login.php'>Sign In</a></li>
										<li><a href='register.php'>Sign Up</a></li>";
									}
									else{
									echo" <li><a href='logout.php'>Logout</a></li>
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
                            <a href="main.html"><img src="images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
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
		
		<!-- TOP SEARCH BOX -->
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
						<form class="tourz-search-form">
							<div class="input-field">
								<input type="text" id="select-city" class="autocomplete">
								<label for="select-city">Enter city</label>
							</div>
							<div class="input-field">
								<input type="text" id="select-search" class="autocomplete">
								<label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
							</div>
							<div class="input-field">
								<input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
						</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- END TOP SEARCH BOX -->
    </section>
    <!--END HEADER SECTION-->
		
	<!--====== BANNER ==========-->
	<section>
	<?php 
        $query = "select *from  other_tour  WHERE type_tour='$type' AND id=$id";
        $result = mysqli_query($conn,$query);
		$row = mysqli_fetch_row($result);
		// print_r($row);
        // echo mysqli_num_rows($result);
			$price=$row[6]-$row[7];
            $night = $row[5]-1;
            $x="";
            if($row[5]==1) $x=$row[5].'Day';
            else $x=$night.'Nights/'.$row[5].'Days';
       ?>
		<div class="rows inner_banner inner_banner_4">
			<div class="container">
				<h2><span><?php echo $row[2]?>-</span><?php echo $row[1]?></h2>
				<ul>
					<li><a href="#inner-page-title">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="#inner-page-title" class="bread-acti"><?php echo $row[2]?></a>
					</li>
				</ul>
				<p>Book travel packages and enjoy your holidays with distinctive experience</p>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS - BOOKING ==========-->
	<section>
		<div class="rows banner_book" id="inner-page-title">
			<div class="container">
				<div class="banner_book_1">
					<ul>
						<li class="dl1">Location : <?php echo $row[2]?></li>
						<li class="dl2">Price : ₹<?php  echo $price?>/-</li>
						<li class="dl3">Duration : <?php echo $x ?></li>
						<li class="dl4"><a href="pay/index.php?location=<?php echo $row[2]?>&type=<?php echo $type?>&price=<?php echo $price?>&duration=<?php echo $x?>">Book Now </a> </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS ==========-->
	<section>

		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space">
				<div class="col-md-9">
					<!--====== TOUR TITLE ==========-->
					<div class="tour_head">
						<h2>The Best of <?php echo $row[2]?> <span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span><span class="tour_rat">4.5</span></h2> </div>
					<!--====== TOUR DESCRIPTION ==========-->
					<div class="tour_head1">
						<h3>Description</h3>
						<p><?php echo $row[8]?></p>
						
					</div>
					<div></div>
					<!--====== ROOMS: HOTEL BOOKING ==========-->
					<div class="tour_head1 hotel-book-room">
						<h3>Photo Gallery</h3>
						<div id="myCarousel1" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators carousel-indicators-1">
								<?php 
								  
									// if(mysqli_num_rows($result1)>0)
									// {
									for($i=0; $i<mysqli_num_rows($result1); $i++)
									//  while($row1 = mysqli_fetch_row($result1))
									{ 
										$row1 = mysqli_fetch_row($result1);
								  		echo"<li data-target='#myCarousel1' data-slide-to='$i'><img src='../../resort/admin/photos/$row1[3]' alt='Chania'></li>";
										 
									}
								//   }

								
								?>
								<style>
										.inner_banner_4 {
											background: url('../../resort/admin/photos/<?php echo $row1[3] ?>') no-repeat center center;
											background-size: cover;
										}
								</style>
								<!-- <li data-target="#myCarousel1" data-slide-to="0"><img src="images/gallery/t1.jpg" alt="Chania">
								</li>
								
								<li data-target="#myCarousel1" data-slide-to="1"><img src="images/gallery/t2.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="2"><img src="images/gallery/t3.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="3"><img src="images/gallery/t4.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="4"><img src="images/gallery/t5.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="5"><img src="images/gallery/s6.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="6"><img src="images/gallery/s7.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="7"><img src="images/gallery/s8.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="8"><img src="images/gallery/s9.jpg" alt="Chania">
								</li> -->
							</ol>
							<!-- Wrapper for slides -->
							<style>
								.duck {

									max-height : 400px !important;
									
								}
							</style>
							<div class="carousel-inner carousel-inner1" role="listbox">
							<?php 
								    $query1 = "select *from  photos  WHERE tour_type='$type' AND tour_id=$id";
									$result1 = mysqli_query($conn,$query1);
									if(mysqli_num_rows($result1)>0)
									{
										$i=0;
									 while($row1 = mysqli_fetch_row($result1))
									{ 
										if($i==0){
								  			echo"<div class='item active '> <img class='duck' src='../../resort/admin/photos/$row1[3]' alt='Chania' > </div>";
										}
										else{
											echo"<div class='item  '> <img class='duck' src='../../resort/admin/photos/$row1[3]' alt='Chania'> </div>";
										}
										$i++;
									}
								  }
								?>
								<!-- <div class="item active"> <img src="images/gallery/t1.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="images/gallery/t2.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="images/gallery/t3.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="images/gallery/t4.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="images/gallery/t5.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="images/gallery/t6.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="images/gallery/t7.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="images/gallery/t8.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="images/gallery/t9.jpg" alt="Chania" width="460" height="345"> </div> -->
							</div>
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
							<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
						</div>
					</div>
					<!--====== TOUR LOCATION ==========-->
					<!-- <div class="tour_head1 tout-map map-container">
						<h3>Location</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290415.157581651!2d-93.99661009218904!3d39.661150926343694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1467884030780" allowfullscreen></iframe>
					</div> -->
					<!--====== ABOUT THE TOUR ==========-->
					<!-- <div class="tour_head1">
						<h3>About The Tour</h3>
						<table>
							<tr>
								<th>Places covered</th>
								<th class="event-res">Inclusions</th>
								<th class="event-res">Exclusions</th>
								<th>Event Date</th>
							</tr>
							<tr>
								<td>Rio De Janeiro ,Brazil</td>
								<td class="event-res">Accommodation</td>
								<td class="event-res">Return Airfare & Taxes</td>
								<td>Nov 12, 2017</td>
							</tr>
							<tr>
								<td>Iguassu Falls </td>
								<td class="event-res">8 Breakfast, 3 Dinners</td>
								<td class="event-res">Arrival & Departure transfers</td>
								<td>Nov 14, 2017</td>
							</tr>
							<tr>
								<td>Peru,Lima </td>
								<td class="event-res">First-class Travel</td>
								<td class="event-res">travel insurance</td>
								<td>Nov 16, 2017</td>
							</tr>
							<tr>
								<td>Cusco & Buenos Aires </td>
								<td class="event-res">Free Sightseeing</td>
								<td class="event-res">Service tax of 4.50%</td>
								<td>Nov 18, 2017</td>
							</tr>
						</table>
					</div> -->
					<!--====== DURATION ==========-->


					 <?php
				// 	 $query2 = "select title,description from  day  WHERE tour_type='$type' AND tour_id=$id";
				// 	 $result2 = mysqli_query($conn,$query2);
				// 	 if(mysqli_num_rows($result2)>0)
				// 	 {
				// 	  while($row2 = mysqli_fetch_row($result2))
				// 	 { 
				// 		echo"
				// 		<li class='l-info-pack-plac'> <i class='fa fa-clock-o' aria-hidden='true'></i>
				// 				<h4><span>Day : 1</span> $row2[0]</h4>
				// 				<p>$row2[1]</p>
				// 		</li>";
				// 	 }
				//    }
					?>


					<div class="tour_head1 l-info-pack-days days">
						<h3>Detailed Day Wise Itinerary</h3>
						<ul>
						<?php
								$query2 = "select title,description from  day  WHERE tour_type='$type' AND tour_id=$id";
								$result2 = mysqli_query($conn,$query2);
								if(mysqli_num_rows($result2)>0)
								{
								// while($row2 = mysqli_fetch_row($result2))
								for($i=1; $i<=mysqli_num_rows($result2); $i++)
								{ 
									$row2 = mysqli_fetch_row($result2);
									echo"
									<li class='l-info-pack-plac'> <i class='fa fa-clock-o' aria-hidden='true'></i>
											<h4><span>Day : $i</span> $row2[0]</h4>
											<p>$row2[1]</p>
									</li>";
									}
								}
						?>
							<!-- <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 1</span> Arrival and Evening Dhow Cruise</h4>
								<p>Arrive at the airport and transfer to hotel. Check-in time at the hotel will be at 2:00 PM. In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.</p>
							</li>
							<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 2</span> City Tour and Evening Free for Leisure</h4>
								<p>After breakfast, proceed for tour of Dubai city. Visit Jumeirah Mosque, World Trade Centre, Palaces and Dubai Museum. Enjoy your overnight stay at the hotel.In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.</p>
							</li>
							<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 3</span> Desert Safari with Dinner</h4>
								<p>Relish a yummy breakfast and later, proceed to explore the city on your own. Enjoy shopping at Mercato Shopping Mall, Dubai Mall and Wafi City. In the evening, enjoy the desert safari experience and belly dance performance. Relish a mouth-watering barbecue dinner and enjoy staying overnight in Dubai.</p>
							</li>
							<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 4</span> Day at leisure</h4>
								<p>Savour a satiating breakfast and relax for a while. Day Free for leisure. Overnight stay will be arranged in Dubai. In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.</p>
							</li>
							<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 5</span> Departure</h4>
								<p>Fill your tummy with yummy breakfast and relax for a while. Later, check out from the hotel and proceed for your onward journey.In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.</p>
							</li> -->
						</ul>
					</div>
					<div>
						<!-- <div class="dir-rat"> -->
							<!-- <div class="dir-rat-inn dir-rat-title">
								<h3>Write Your Rating Here</h3>
								<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
								<fieldset class="rating">
									<input type="radio" id="star5" name="rating" value="5" />
									<label class="full" for="star5" title="Awesome - 5 stars"></label>
									<input type="radio" id="star4half" name="rating" value="4 and a half" />
									<label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
									<input type="radio" id="star4" name="rating" value="4" />
									<label class="full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" id="star3half" name="rating" value="3 and a half" />
									<label class="half" for="star3half" title="Meh - 3.5 stars"></label>
									<input type="radio" id="star3" name="rating" value="3" />
									<label class="full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" id="star2half" name="rating" value="2 and a half" />
									<label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
									<input type="radio" id="star2" name="rating" value="2" />
									<label class="full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" id="star1half" name="rating" value="1 and a half" />
									<label class="half" for="star1half" title="Meh - 1.5 stars"></label>
									<input type="radio" id="star1" name="rating" value="1" />
									<label class="full" for="star1" title="Sucks big time - 1 star"></label>
									<input type="radio" id="starhalf" name="rating" value="half" />
									<label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
							</div> -->
							<!-- <div class="dir-rat-inn">
								<form class="dir-rat-form">
									<div class="form-group col-md-6 pad-left-o">
										<input type="text" class="form-control" id="email11" placeholder="Enter Name"> </div>
									<div class="form-group col-md-6 pad-left-o">
										<input type="number" class="form-control" id="email12" placeholder="Enter Mobile"> </div>
									<div class="form-group col-md-6 pad-left-o">
										<input type="email" class="form-control" id="email13" placeholder="Enter Email id"> </div>
									<div class="form-group col-md-6 pad-left-o">
										<input type="text" class="form-control" id="email14" placeholder="Enter your City"> </div>
									<div class="form-group col-md-12 pad-left-o">
										<textarea placeholder="Write your message"></textarea>
									</div>
									<div class="form-group col-md-12 pad-left-o">
										<input type="submit" value="SUBMIT" class="link-btn"> </div>
								</form>
							</div> -->
							<!--COMMENT RATING-->
							<!-- <div class="dir-rat-inn dir-rat-review">
								<div class="row">
									<div class="col-md-3 dir-rat-left"> <img src="images/reviewer/4.jpg" alt="">
										<p>Orange Fab & Weld <span>19th January, 2017</span> </p>
									</div>
									<div class="col-md-9 dir-rat-right">
										<div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										<p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
										<ul>
											<li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div> -->
							<!--COMMENT RATING-->
							<!-- <div class="dir-rat-inn dir-rat-review">
								<div class="row">
									<div class="col-md-3 dir-rat-left"> <img src="images/reviewer/3.jpg" alt="">
										<p>Orange Fab & Weld <span>19th January, 2017</span> </p>
									</div>
									<div class="col-md-9 dir-rat-right">
										<div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										<p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
										<ul>
											<li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div> -->
							<!--COMMENT RATING-->
							<!-- <div class="dir-rat-inn dir-rat-review">
								<div class="row">
									<div class="col-md-3 dir-rat-left"> <img src="images/reviewer/1.jpg" alt="">
										<p>Orange Fab & Weld <span>19th January, 2017</span> </p>
									</div>
									<div class="col-md-9 dir-rat-right">
										<div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										<p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
										<ul>
											<li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div> -->
						<!-- </div> -->
					</div>
				</div>
				<div class="col-md-3 tour_r">
					<!--====== SPECIAL OFFERS ==========-->
					<div class="tour_right tour_offer">
						<div class="band1"><img src="images/offer.png" alt="" /> </div>
						<p>Special Offer</p>
						<h4>$500<span class="n-td">
								<span class="n-td-1">$800</span>
								</span>
							</h4> <a href="booking.html" class="link-btn">Book Now</a> </div>
					<!--====== TRIP INFORMATION ==========-->
					<div class="tour_right tour_incl tour-ri-com">
						<h3>Trip Information</h3>
						<ul>
							<li>Location : Rio,Brazil</li>
							<li>Arrival Date: Nov 12, 2017</li>
							<li>Departure Date: Nov 21, 2017</li>
							<li>Free Sightseeing & Hotel</li>
						</ul>
					</div>
					<!--====== PACKAGE SHARE ==========-->
					<div class="tour_right head_right tour_social tour-ri-com">
						<h3>Share This Package</h3>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
						</ul>
					</div>
					<!--====== HELP PACKAGE ==========-->
					<div class="tour_right head_right tour_help tour-ri-com">
						<h3>Help & Support</h3>
						<div class="tour_help_1">
							<h4 class="tour_help_1_call">Call Us Now</h4>
							<h4><i class="fa fa-phone" aria-hidden="true"></i> 10-800-123-000</h4> </div>
					</div>
					<!--====== PUPULAR TOUR PACKAGES ==========-->
					<!-- <div class="tour_right tour_rela tour-ri-com">
						<h3>Popular Packages</h3>
						<div class="tour_rela_1"> <img src="images/related1.png" alt="" />
							<h4>Dubai 7Days / 6Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
						<div class="tour_rela_1"> <img src="images/related2.png" alt="" />
							<h4>Mauritius 4Days / 3Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
						<div class="tour_rela_1"> <img src="images/related3.png" alt="" />
							<h4>India 14Days / 13Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--====== TIPS BEFORE TRAVEL ==========-->
	<!-- <section>
		<div class="rows tips tips-home tb-space home_title">
			<div class="container tips_1">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<h3>Tips Before Travel</h3>
					<div class="tips_left tips_left_1">
						<h5>Bring copies of your passport</h5>
						<p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
					</div>
					<div class="tips_left tips_left_2">
						<h5>Register with your embassy</h5>
						<p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
					</div>
					<div class="tips_left tips_left_3">
						<h5>Always have local cash</h5>
						<p>Donec et placerat ante. Etiam et velit in massa. </p>
					</div>
				</div>
				<div class="col-md-8 col-sm-6 col-xs-12 testi-2">
					
					<h3>Customer Testimonials</h3>
					<div class="testi">
						<h4>John William</h4>
						<p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
				
					<h3>Arrangement & Helps</h3>
					<div class="arrange">
						<ul>
							<li>
								<a href="#"><img src="images/Location-Manager.png" alt=""> </a>
							</li>
							<li>
								<a href="#"><img src="images/Private-Guide.png" alt=""> </a>
							</li>
							<li>
								<a href="#"><img src="images/Arrangements.png" alt=""> </a>
							</li>
						
							<li>
								<a href="#"><img src="images/Events-Activities.png" alt=""> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--====== FOOTER 1 ==========-->
	<!-- <section>
		<div class="rows">
			<div class="footer1 home_title tb-space">
				<div class="pla1 container"> -->
					<!-- FOOTER OFFER 1 -->
					<!-- <div class="col-md-3 col-sm-6 col-xs-12">
						<div class="disco">
							<h3>30%<span>OFF</span></h3>
							<h4>Eiffel Tower,Rome</h4>
							<p>valid only for 24th Dec</p> <a href="booking.html">Book Now</a> </div>
					</div> -->
					<!-- FOOTER OFFER 2 -->
					<!-- <div class="col-md-3 col-sm-6 col-xs-12">
						<div class="disco1 disco">
							<h3>42%<span>OFF</span></h3>
							<h4>Colosseum,Burj Al Arab</h4>
							<p>valid only for 18th Nov</p> <a href="booking.html">Book Now</a> </div>
					</div> -->
					<!-- FOOTER MOST POPULAR VACATIONS -->
					<!-- <div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
						<h4><span>Most Popular</span> Vacations</h4>
						<ul>
							<li><a href="tour-details.html">Angkor Wat</a> </li>
							<li><a href="tour-details.html">Buckingham Palace</a> </li>
							<li><a href="tour-details.html">High Line</a> </li>
							<li><a href="tour-details.html">Sagrada Família</a> </li>
							<li><a href="tour-details.html">Statue of Liberty </a> </li>
							<li><a href="tour-details.html">Notre Dame de Paris</a> </li>
							<li><a href="tour-details.html">Taj Mahal</a> </li>
							<li><a href="tour-details.html">The Louvre</a> </li>
							<li><a href="tour-details.html">Tate Modern, London</a> </li>
							<li><a href="tour-details.html">Gothic Quarter</a> </li>
							<li><a href="tour-details.html">Table Mountain</a> </li>
							<li><a href="tour-details.html">Bayon</a> </li>
							<li><a href="tour-details.html">Great Wall of China</a> </li>
							<li><a href="tour-details.html">Hermitage Museum</a> </li>
							<li><a href="tour-details.html">Yellowstone</a> </li>
							<li><a href="tour-details.html">Musée d'Orsay</a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--====== FOOTER 2 ==========-->
	<!-- <section>
		<div class="rows">
			<div class="footer">
				<div class="container">
					<div class="foot-sec2">
						<div>
							<div class="row">
								<div class="col-sm-3 foot-spec foot-com">
									<h4><span>Holiday</span> Tour & Travels</h4>
									<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
								</div>
								<div class="col-sm-3 foot-spec foot-com">
									<h4><span>Address</span> & Contact Info</h4>
									<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
									<p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
								</div>
								<div class="col-sm-3 col-md-3 foot-spec foot-com">
									<h4><span>SUPPORT</span> & HELP</h4>
									<ul class="two-columns">
										<li> <a href="#">About Us</a> </li>
										<li> <a href="#">FAQ</a> </li>
										<li> <a href="#">Feedbacks</a> </li>
										<li> <a href="#">Blog </a> </li>
										<li> <a href="#">Use Cases</a> </li>
										<li> <a href="#">Advertise us</a> </li>
										<li> <a href="#">Discount</a> </li>
										<li> <a href="#">Vacations</a> </li>
										<li> <a href="#">Branding Offers </a> </li>
										<li> <a href="#">Contact Us</a> </li>
									</ul>
								</div>
								<div class="col-sm-3 foot-social foot-spec foot-com">
									<h4><span>Follow</span> with us</h4>
									<p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--====== FOOTER - COPYRIGHT ==========-->
	<!-- <section>
		<div class="rows copy">
			<div class="container">
				<p>Copyrights © 2017 Company Name. All Rights Reserved</p>
			</div>
		</div>
	</section>
	<section>
		<div class="icon-float">
			<ul>
				<li><a href="#" class="sh">1k <br> Share</a> </li>
				<li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
			</ul>
		</div>
	</section> -->
	<!--========= Scripts ===========-->
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/tour-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2022 06:45:29 GMT -->
</html>