<?php include 'header.php'; ?>
      <style>
         * {
            margin: 0;
            padding: 0;
         }
      </style>
      <style>
         .carousel-caption {
            position: absolute;
      /* bottom: 220px; */
             /* right:0 !important;  */
            /* padding: auto; */
    /* margin-left: 90px;  */
    margin: auto;
    padding: auto;
    margin-bottom:100px;
            /* margin-left: auto; */
            /* margin-right: auto; */
            /* right: 15%; */
            /* bottom: 1.25rem; */
            /* left: 15%; */
   /* padding-top: 1.25rem;
   padding-bottom: 1.25rem; */
            color:white;
            text-align: center;
         }
         .carousel-caption {
            position: absolute;
            right:0 !important; 
            left:0 !important;
           

         }

         .carousel-caption h5 {
            font-size: 95px;
            /* text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 25px;
            padding: 10px; */
         }

         .carousel-caption a {
            text-transform: uppercase;
            text-decoration: none;
            background: darkorange;
            padding: 10px 30px;
            display: inline-block;
            color: #000;
            margin-top: 15px;
         }

         .h {
            height: 500px;
         }

         .t {
            color: white;
            /* text- shadow: 3px 3px white; */
         }
         a {
            text-decoration: none;
         }
      </style>
            <style>
         .owl-carousel .owl-stage {
            display: flex;
         }

         .owl-carousel .owl-item img {
            width: auto;
            height: 100%;
         }

         .owl-item {
            width: 100% !important;
            height: 100% !important;
         }

         .owl-carousel .animated {
            /* animation-duration: 1s;
         animation-fill-mode: both; */
            width: 100%;
            height: 100%;
         }

         .cityb {
            font-size: 11px;
         }

         .bg {
            background-image: url("bg15.jpg");
            background-repeat: no-repeat;
            background-size: 100% 50%;
         }

         .xy {
            padding: 0 25px 0 5px;
         }

         .day {
            padding: 2px 20px;
         }

         .v_pl_name {
            font-size: 13px !important;
         }

         .im {
            height: 200px;
         }
         .welcome{
			z-index: 2;
			background-color:black !important;
			opacity: .7;
}
         .capt{
            /* background-color: red; */
            margin: 0 auto !important;
            vertical-align: center !important;
            /* padding: 0 !important; */
            padding-bottom: 50px;
         }
      </style>
      <script>
         $(document).ready(function() {
            $(".carousel").carousel({
               interval: 4200,
               pause: "false",
            });
         });
      </script>
      <?php include 'admin/connection.php';
      $query = "select other_tour.id, other_tour.type_tour, other_tour.place, other_tour.title, other_tour.day, other_tour.price, photos.photo  from  other_tour INNER JOIN photos ON other_tour.id=photos.tour_id WHERE type_tour='top_sliding'";
      $result = mysqli_query($conn, $query);


      //   echo mysqli_num_rows($result);
      ?>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel ">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <?php
            for ($i = 1; $i < mysqli_num_rows($result); $i++) {
               echo " <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='$i' aria-label='Slide $(i+1)'></button>";
            }
            ?>
         </div>
         <div class="carousel-inner">


            <?php

            if (mysqli_num_rows($result) > 0) {
               $i = 0;

               while ($row = mysqli_fetch_row($result)) {
                  $active = "";
                  if ($i == 0) {
                     $active = "active";
                     $i++;
                  }
                  echo "
                        <div class='carousel-item $active'>
                        <div class='welcome'>
                        <a href='tour-details.php?id=$row[0]& type=$row[1]'>
                                 <img src='../../resort/admin/photos/$row[6]' class='d-block w-100 h welcome' alt='...'> </a>
                                 <div class='carousel-caption capt'>
                                    <h5 >$row[2]</h5>
                                    <h1>Hotels, Meals, Sightseeing</h1>
                                    <h2>₹ $row[5]</h2>
                                 </div>

                        </div>
                                 <div class='carousel-caption d-none d-md-block'>
                  
                                    <!-- <h5>First slide label</h5>
                                 <p>Some representative placeholder content for the first slide.</p>-->
                                 </div>
                              </div>";
               }
            }
            ?>

         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
      </div>
      
      <!-- section end -->

      <section class="bg">
         <div class="rows pad-bot-redu  tb-space">
            <div class="container">
               <!-- TITLE & DESCRIPTION -->
               <div class="spe-title">
                  <h2>Domestic <span>Holiday Resorts</span></h2>
                  <div class="title-line">
                     <div class="tl-1"></div>
                     <div class="tl-2"></div>
                     <div class="tl-3"></div>
                  </div>
                  
               </div>
               
               <div class="blog_slider_area owl-carousel">
                  <!-- TOUR PLACE 1 -->
              
                  <?php
                   
                  $query = "select other_tour.id, other_tour.type_tour, other_tour.place, other_tour.title, other_tour.day, other_tour.price, photos.photo,other_tour.discount,other_tour.description from  other_tour INNER JOIN photos ON other_tour.id=photos.tour_id WHERE type_tour='domestic_holyday'";
                  $result = mysqli_query($conn, $query);
                  if (mysqli_num_rows($result) > 0) {

                     while ($row = mysqli_fetch_row($result)) {
						      $night = $row[4]-1;
                       	$x="";
                       	if($row[4]==1) $x=$row[4].'D';
                       	else $x=$night.'N/'.$row[4].'D';
                      $discount=$row[5]-$row[7];

                      $queryy = "select photo from  photos  WHERE tour_id=$row[0]";
                     $resulty = mysqli_query($conn, $queryy);
                     $roww = mysqli_fetch_row($resulty);
                    
                     
                        echo "
                              <a href='tour-details.php?id=$row[0]& type=$row[1]'>

                                 <div class='col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp box-area' data-wow-duration='0.5s'>
                                       <div class='v_place_img im'> <img class='im' src='../../resort/admin/photos/$row[6]' alt='Tour Booking' title='Tour Booking' />
                                       </div>
                                       <div class='b_pack rows'>
                                       <div class='xy'>
                                       <div class='row'>
                                          <div class='col-12'>  <span class='day rounded-pill text-center text-light bg-dark'>$x</span> </div>
                                          <div class='col-6'>
                                             <h3>$row[2]</h3>
                                          </div>
                                          <div class='col-6 text-end'>
                                             <h3>$row[3]</h3>
                                          </div>
                                          <div class='col-12 '><span class='v_pl_name'>$row[8]</span></div>
                                          <div class='col-4  text-end'> <span >₹ <del>$row[5]</del>/-</span></div>
                                          <div class='col-8  text-end'> <span class='hot-list-p3-2'>₹ $discount/-</span></div>
                                          <div class='col-12 text-end'>
                                             <p class='card-title'>Per Person</p>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                  </div>
                               </a>";
                     }
                  }
                  ?>
               </div>
            </div>
         </div>
      </section>

      <section>
         <div class="rows pad-bot-redu ">
            <div class="container">
               <!-- TITLE & DESCRIPTION -->
               <div class="spe-title">
                  <h2>Event<span> Based Resorts</span></h2>
                  <div class="title-line">
                     <div class="tl-1"></div>
                     <div class="tl-2"></div>
                     <div class="tl-3"></div>
                  </div>
               </div>
               <style>
                  .xy {
                     padding: 0 25px 0 5px;
                  }

                  .day {
                     padding: 2px 20px;
                  }
               </style>
               <div class="blog_slider_area owl-carousel">
                  <!-- TOUR PLACE 1 -->
                  <?php
                  $query1 = "select other_tour.id, other_tour.type_tour, other_tour.place, other_tour.title, other_tour.day, other_tour.price, photos.photo,other_tour.discount,other_tour.description from  other_tour INNER JOIN photos ON other_tour.id=photos.tour_id WHERE type_tour='event_based'";
                  $result1 = mysqli_query($conn, $query1);
                  if (mysqli_num_rows($result1) > 0) {

                     while ($row1 = mysqli_fetch_row($result1)) {
                       
                       $night = $row1[4]-1;
                       	$x1="";
                       	if($row1[4]==1) $x1=$row1[4].'D';
                       	else $x1=$night.'N/'.$row1[4].'D';
                 		$discount1=$row1[5]-$row1[7];

                        echo "
                           <a href='tour-details.php?id=$row1[0]& type=$row1[1]'>
                                 <div class='col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp box-area' data-wow-duration='0.5s'>
                                       <div class='v_place_img im'> <img class='im' src='../../resort/admin/photos/$row1[6]' alt='Tour Booking' title='Tour Booking' />
                                       </div>
                                       <div class='b_pack rows'>
                                       <div class='xy'>
                                       <div class='row'>
                                          <div class='col-12'>  <span class='day rounded-pill text-center text-light bg-dark'>$x1</span> </div>
                                          <div class='col-6'>
                                             <h3>$row1[2]</h3>
                                          </div>
                                          <div class='col-6 text-end'>
                                             <h3>$row1[3]</h3>
                                          </div>
                                          <div class='col-12 '><span class='v_pl_name'>$row1[8]</span></div>
                                         <div class='col-4  text-end'> <span >₹ <del>$row1[5]</del>/-</span></div>
                                          <div class='col-8  text-end'> <span class='hot-list-p3-2'>₹ $discount1/-</span></div>
                                          <div class='col-12 text-end'>
                                             <p class='card-title'>Per Person</p>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                  </div>
                                  </a>";
                     }
                  }
                  ?>

               </div>
            </div>


      
         </div>
      </section>
      <section>
         <div class="rows pad-bot-redu ">
            <div class="container">
               <!-- TITLE & DESCRIPTION -->
               <div class="spe-title">
                  <h2>Place<span>Based Tour</span></h2>
                  <div class="title-line">
                     <div class="tl-1"></div>
                     <div class="tl-2"></div>
                     <div class="tl-3"></div>
                  </div>
               </div>
               <style>
                  .xy {
                     padding: 0 25px 0 5px;
                  }

                  .day {
                     padding: 2px 20px;
                  }
               </style>
               <div class="blog_slider_area owl-carousel">
                  <!-- TOUR PLACE 1 -->
                  <?php
                  $query1 = "select other_tour.id, other_tour.type_tour, other_tour.place, other_tour.title, other_tour.day, other_tour.price, photos.photo,other_tour.discount, other_tour.description  from  other_tour INNER JOIN photos ON other_tour.id=photos.tour_id WHERE type_tour='place_based'";
                  $result1 = mysqli_query($conn, $query1);
                  if (mysqli_num_rows($result1) > 0) {

                     while ($row1 = mysqli_fetch_row($result1)) {
                       $night = $row1[4]-1;
                       	$x2="";
                       	if($row1[4]==1) $x2=$row1[4].'D';
                       	else $x2=$night.'N/'.$row1[4].'D';
                        $discount1=$row1[5]-$row1[7];

                        echo "
                              <a href='tour-details.php?id=$row1[0]& type=$row1[1]'>
                                 <div class='col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp box-area' data-wow-duration='0.5s'>
                                       <div class='v_place_img im'> <img class='im' src='../../resort/admin/photos/$row1[6]' alt='Tour Booking' title='Tour Booking' />
                                       </div>
                                       <div class='b_pack rows'>
                                       <div class='xy'>
                                       <div class='row'>
                                          <div class='col-12'>  <span class='day rounded-pill text-center text-light bg-dark'>$x2</span> </div>
                                          <div class='col-6'>
                                             <h3>$row1[2]</h3>
                                          </div>
                                          <div class='col-6 text-end'>
                                             <h3>$row1[3]</h3>
                                          </div>
                                          <div class='col-12 '><span class='v_pl_name'>$row1[8]</span></div>
 											<div class='col-4  text-end'> <span >₹ <del>$row1[5]</del>/-</span></div>
                                          <div class='col-8  text-end'> <span class='hot-list-p3-2'>₹ $discount1/-</span></div>
                                          <div class='col-12 text-end'>
                                             <p class='card-title'>Per Person</p>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                  </div>
                              </a>";
                     }
                  }
                  ?>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="rows pad-bot-redu ">
            <div class="container">
               <!-- TITLE & DESCRIPTION -->
               <div class="spe-title">
                  <h2>Popular<span>Resorts</span></h2>
                  <div class="title-line">
                     <div class="tl-1"></div>
                     <div class="tl-2"></div>
                     <div class="tl-3"></div>
                  </div>
               </div>
               <style>
                  .xy {
                     padding: 0 25px 0 5px;
                  }

                  .day {
                     padding: 2px 20px;
                  }
               </style>
               <div class="blog_slider_area owl-carousel">
                  <!-- TOUR PLACE 1 -->
                  <?php
                  $query1 = "select other_tour.id, other_tour.type_tour, other_tour.place, other_tour.title, other_tour.day,other_tour.price, photos.photo,other_tour.discount,other_tour.description  from  other_tour INNER JOIN photos ON other_tour.id=photos.tour_id WHERE type_tour='populer_resort'";
                  $result1 = mysqli_query($conn, $query1);
                  if (mysqli_num_rows($result1) > 0) {

                     while ($row1 = mysqli_fetch_row($result1)) {
                         $night = $row1[4]-1;
                       	$x3="";
                       	if($row1[4]==1) $x3=$row1[4].'D';
                       	else $x3=$night.'N/'.$row1[4].'D';
                        $discount1=$row1[5]-$row1[7];

                        echo "
                            <a href='tour-details.php?id=$row1[0]& type=$row1[1]'>
                                 <div class='col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp box-area' data-wow-duration='0.5s'>
                                       <div class='v_place_img im'> <img class='im' src='../../resort/admin/photos/$row1[6]' alt='Tour Booking' title='Tour Booking' />
                                       </div>
                                       <div class='b_pack rows'>
                                       <div class='xy'>
                                       <div class='row'>
                                          <div class='col-12'>  <span class='day rounded-pill text-center text-light bg-dark'>$x3</span> </div>
                                          <div class='col-6'>
                                             <h3>$row1[2]</h3>
                                          </div>
                                          <div class='col-6 text-end'>
                                             <h3>$row1[3]</h3>
                                          </div>
                                          <div class='col-12 '><span class='v_pl_name'>$row1[8]</span></div>
                                          <div class='col-4  text-end'> <span >₹ <del>$row1[5]</del>/-</span></div>
                                          <div class='col-8  text-end'> <span class='hot-list-p3-2'> $discount1/-</span></div>
                                          <div class='col-12 text-end'>
                                             <p class='card-title'>Per Person</p>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                  </div>
                              </a>";
                     }
                  }
                  ?>
               </div>
            </div>
         </div>
      </section>

      <section>
         <div class="rows pad-bot-redu ">
            <div class="container">
               <!-- TITLE & DESCRIPTION -->
               <div class="spe-title">
                  <h2>Other<span>Tour</span></h2>
                  <div class="title-line">
                     <div class="tl-1"></div>
                     <div class="tl-2"></div>
                     <div class="tl-3"></div>
                  </div>
                  
               </div>
               <style>
                  .xy {
                     padding: 0 25px 0 5px;
                  }

                  .day {
                     padding: 2px 20px;
                  }
               </style>
               <div class="blog_slider_area owl-carousel">
                  <!-- TOUR PLACE 1 -->
                  <?php
                  $query1 = "select other_tour.id, other_tour.type_tour, other_tour.place, other_tour.title, other_tour.day,other_tour.price, photos.photo,other_tour.discount,other_tour.description from  other_tour INNER JOIN photos ON other_tour.id=photos.tour_id WHERE type_tour='other'";
                  $result1 = mysqli_query($conn, $query1);
                  if (mysqli_num_rows($result1) > 0) {

                     while ($row1 = mysqli_fetch_row($result1)) {
						$night = $row1[4]-1;
                       	$x4="";
                       	if($row1[4]==1) $x4=$row1[4].'D';
                       	else $x4=$night.'N/'.$row1[4].'D';
                        $discount1=$row1[5]-$row1[7];
                        echo "
                        <a href='tour-details.php?id=$row1[0]& type=$row1[1]'>
                                 <div class='col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp box-area' data-wow-duration='0.5s'>
                                       <div class='v_place_img im'> <img class='im' src='../../resort/admin/photos/$row1[6]' alt='Tour Booking' title='Tour Booking' />
                                       </div>
                                       <div class='b_pack rows'>
                                       <div class='xy'>
                                       <div class='row'>
                                          <div class='col-12'>  <span class='day rounded-pill text-center text-light bg-dark'>$x4</span> </div>
                                          <div class='col-6'>
                                             <h3>$row1[2]</h3>
                                          </div>
                                          <div class='col-6 text-end'>
                                             <h3>$row1[3]</h3>
                                          </div>
                                          <div class='col-12 '><span class='v_pl_name'>$row1[8]</span></div>
                                          <div class='col-4  text-end'> <span >₹ <del>$row1[5]</del>/-</span></div>
                                          <div class='col-8  text-end'> <span class='hot-list-p3-2'>₹ $discount1/-</span></div>
                                          <div class='col-12 text-end'>
                                             <p class='card-title'>Per Person</p>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                  </div>
                                  </a>";
                     }
                  }
                  ?>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="rows pad-bot-redu ">
            <div class="container">
               <!-- TITLE & DESCRIPTION -->
               <div class="spe-title">
                  <h2>Popular<span>Tour</span></h2>
                  <div class="title-line">
                     <div class="tl-1"></div>
                     <div class="tl-2"></div>
                     <div class="tl-3"></div>
                  </div>
                
               </div>
               <style>
                  .xy {
                     padding: 0 25px 0 5px;
                  }

                  .day {
                     padding: 2px 20px;
                  }
               </style>
               <div class="blog_slider_area owl-carousel">
                  <!-- TOUR PLACE 1 -->
                  <?php
                  $query1 = "select other_tour.id, other_tour.type_tour, other_tour.place, other_tour.title, other_tour.day,other_tour.price, photos.photo,other_tour.discount,other_tour.description  from  other_tour INNER JOIN photos ON other_tour.id=photos.tour_id WHERE type_tour='populer'";
                  $result1 = mysqli_query($conn, $query1);
                  if (mysqli_num_rows($result1) > 0) {
				
                    
                     while ($row1 = mysqli_fetch_row($result1)) {
                     
                         $night = $row1[4]-1;
                       	$x5="";
                       	if($row1[4]==1) $x5=$row1[4].'D';
                       	else $x5=$night.'N/'.$row1[4].'D';
						 $discount1=$row1[5]-$row1[7];
                        echo "
                        <a href='tour-details.php?id=$row1[0]& type=$row1[1]'>
                                 <div class='col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp box-area' data-wow-duration='0.5s'>
                                       <div class='v_place_img im'> <img class='im' src='../../resort/admin/photos/$row1[6]' alt='Tour Booking' title='Tour Booking' />
                                       </div>
                                       <div class='b_pack rows'>
                                       <div class='xy'>
                                       <div class='row'>
                                          <div class='col-12'>  <span class='day rounded-pill text-center text-light bg-dark'>$x5</span> </div>
                                          <div class='col-6'>
                                             <h3>$row1[2]</h3>
                                          </div>
                                          <div class='col-6 text-end'>
                                             <h3>$row1[3]</h3>
                                          </div>
                                          <div class='col-12 '><span class='v_pl_name'>$row1[8]</span></div>
                                         <div class='col-4  text-end'> <span >₹ <del>$row1[5]</del>/-</span></div>
                                          <div class='col-8  text-end'> <span class='hot-list-p3-2'>₹ $discount1/-</span></div>
                                          <div class='col-12 text-end'>
                                             <p class='card-title'>Per Person</p>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                  </div>
                                  </a>";
                     }
                  }
                  ?>

               </div>
            </div>
         </div>
      </section>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
      <script>
         $(".blog_slider_area").owlCarousel({
            autoplay: true,
            slideSpeed: 1000,
            items: 3,
            loop: true,
            nav: false,
            margin: 30,
            dots: true,

            responsive: {
               320: {
                  items: 1
               },
               767: {
                  items: 2
               },
               600: {
                  items: 2
               },
               1000: {
                  items: 3
               }
            }

         });
      </script>

      <!--====== FOOTER 1 ==========-->
     <?php include'footer.php';?>