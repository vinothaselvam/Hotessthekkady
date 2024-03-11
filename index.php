

<?php 
include_once 'config/Database.php';
include_once 'class/Articles.php';
include_once 'class/Post.php';

 $database = new Database();
$db = $database->getConnection();

$post = new Post($db);

$post->id = 0;

$result = $post->getPost();

 $host  = 'localhost';
     $user  = 'root';
     $password   = "";
     $database  = "mgs"; 
            $conn = mysqli_connect($host, $user, $password, $database);
            if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>MGS - Best Hotel,Residency In Theni,Bodi; </title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
               <!--  <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form> -->
            </div>
        </div>

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>+91 9342976133,+91 9342929370</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>mgsbodiresidency@gmail.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a> 
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.jpeg" height="50" width="150" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="./room.php">Rooms</a></li>
                                    <li><a href="./about.html">About Us</a></li>
                               
                                    <li><a href="./blog.html">Tourist Place</a></li> 
                                   <!--  <li><a href="./contact.html">Contact</a></li> -->
                                </ul>

                                <!-- Search -->
                                <!-- <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div> -->

                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="./contact.html">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/w1.jpeg);" data-img-url="img/bg-img/w1.jpeg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">Hotel &amp; Resort</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Welcome To MGS</h2>
                                    <a href="./room.html" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/b2.jpeg);" data-img-url="img/bg-img/17.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInUp" data-delay="200ms">Hotel &amp; Residency</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms">Welcome To MGS</h2>
                                    <a href="./room.html" class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/s5.jpeg);" data-img-url="img/bg-img/18.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms">Hotel &amp; Resort</h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms">Welcome To MGS</h2>
                                    <a href="./room.html" class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/w2.jpeg);" data-img-url="img/bg-img/17.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInUp" data-delay="200ms">Hotel &amp; Residency</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms">Welcome To MGS</h2>
                                    <a href="./room.html" class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/w3.jpeg);" data-img-url="img/bg-img/18.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms">Hotel &amp; Resort</h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms">Welcome To MGS</h2>
                                    <a href="./room.html" class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/w4.jpeg);" data-img-url="img/bg-img/18.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms">Hotel &amp; Resort</h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms">Welcome To MGS</h2>
                                    <a href="./room.html" class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <form action="#" method="post">
                        <div class="row justify-content-between align-items-end" align="center">
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Phone Number</label>
                                <input type="phone" class="form-control" id="phno" name="phno" >
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Check In</label>
                                <input type="date" class="form-control" id="checkIn" name="checkin-date">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkOut">Check Out</label>
                                <input type="date" class="form-control" id="checkOut" name="checkout-date">
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="room">Room</label>
                                <select name="room" id="room" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="adults">Adult</label>
                                <select name="adults" id="adults" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-2 col-lg-1">
                                <label for="children">Children</label>
                                <select name="children" id="children" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="col-12 col-md-12 center" >
                                <button type="submit" class="form-control btn roberto-btn w-100">Check Availability</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>About Us</h6>
                        <h2>Welcome to <br>MGS Hotel Luxury</h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">With over 340 hotels in theni district, MGS Hotel Group offers a wide variety of hotels catering for a perfect stay no matter where your destination.</h5>
                        <p class="wow fadeInUp" data-wow-delay="400ms"> <span>Leisure travellers enjoying the liberation from their daily grind and adventure tourists seeking surprises in the hilly terrain around. With all the creature comforts in place, a team of dedicated and experienced personnel, the latest communication facilities made accessible, combined with elegant architecture and charming decor, </span></p>
                        <!-- <img src="img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms"> -->
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="img/bg-img/s4.jpeg" alt="">
                                </div>
                               <div class="single-thumb">
                                    <img src="img/bg-img/s3.jpeg" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="img/bg-img/b2.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="img/bg-img/b1.jpeg" alt="">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->
   <!-- Rooms Area Start -->
    <div class="roberto-rooms-area ">
         <div class="section-heading" align="center">
                        <h5 style="color: orange;">Discover Our Gallery</h5><br>
                        <h2>A picture can paint a thousand words.</h2>
                    </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/bg-img/s3.jpeg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bg-img/s4.jpeg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bg-img/s5.jpeg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bg-img/s6.jpeg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bg-img/b2.jpeg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bg-img/b5.jpeg" class="d-block w-100" alt="">
                                    </div>
                                </div>

                              
                            </div>
                        </div>

                       

               
                </div>

              

                </div>
            </div>
        </div>
    </div>
    <!-- Service Area Start -->
    <div class="roberto-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <img src="img/core-img/icon-1.png" alt="">
                            <h5>Parking</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Room service</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <img src="img/core-img/icon-3.png" alt="">
                            <h5>Restaurant</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <img src="img/core-img/icon-4.png" alt="">
                            <h5>Party Hall</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Conference Hall</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->
 
    <!-- Our Room Area Start -->
    <section class="roberto-rooms-area">
        <div class="rooms-slides owl-carousel">
            <?php
                                        $result = mysqli_query($conn,"SELECT * FROM cms_posts");
                                        while($row = mysqli_fetch_array($result)) {
                                               $imageURL = $row["filename"];
            ?>
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background:url(admin/<?php echo $imageURL; ?>) "></div>

                <!-- Content -->
                <div class="room-content">

    
                    <h2 data-animation="fadeInUp" data-delay="100ms"><?php echo $row['title']; ?></h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms"><?php echo $row['rate']; ?> Rs<span>/ Day</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="250ms">
                        <li><span><i class="fa fa-check"></i> Size</span> <span>: <?php echo $row['size']; ?> ft</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max person<?php echo $row['capacity']; ?></span></li>
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>:<?php echo $row['bed']; ?></span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: <?php echo $row['services']; ?></span></li>
                    </ul>
                    <a href="./single-room.php?id=<?php echo $row['id']; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>
            <?php } ?> 
           
        </div>
    </section>
    <!-- Our Room Area End -->

    <!-- Testimonials Area Start -->
    <section class="roberto-testimonials-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="testimonial-thumbnail owl-carousel mb-100">
                        <img src="img/bg-img/10.jpg" alt="">
                        <img src="img/bg-img/11.jpg" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h6>Testimonials</h6>
                        <h2>Our Guests Love Us</h2>
                    </div>
                    <!-- Testimonial Slide -->
                    <div class="testimonial-slides owl-carousel mb-100">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>“The hotel rooms were neat and clean. Amenities which kept inside the room was nice. The room service was quick and delicious and the restaurant food is very delicious. The situation of covid was kept in mind hence place is sanitized. The front office staffs are very helpful and friendly. Thank you so much the entire MGS team for provide me one of my best stay. ”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Robert Downey <span></span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>“Good stay and best service. Had a wonderful stay with le meridien kochi. The food was tasty . The ambience of the hotel was very soothing. Staff were friendly and humble . Definitely recommend the place for the other  thanks!”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Akash Downey <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>“Overall stay was very good. Rooms were very comfortable. Food were delicious. All staffs were very cooperative. Planning for a family trip again. Especial thanks to Chogyal and Sreelaxmi. Thankyou for your hospitality.!”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Downey Sarah <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>“Everything was great at this hotel,room was spacious and clean. We had a wonderful dinner &BF at Latest recipe. The staff at the Latest recipe were the nicest staff I have ever encountered at a hotel, special mention to Pradeep, Avishek and Shabarish, These guys made our day special,Thank you.. And chef Naveen takes time to ask our suggestions.Will come back here again.”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Robert Brown <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->

    <!-- Projects Area Start -->
    <section class="roberto-project-area">
         <div class="section-heading" align="center">
                        <h5 style="color: orange;">Discover Our Restaurant </h5>
                        <h2>Special Menu</h2>
                    </div>
        <!-- Projects Slide -->
        <div class="projects-slides owl-carousel">
            <!-- Single Project Slide -->
            <div class="single-project-slide active bg-img" style="background-image: url(img/bg-img/60.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/71.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/7.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/8.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>A one pot biryani to spice up your week. This is the perfect and delicious classic biryani from the all over south india...</p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/64.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6></h6>
                        <h5>South Indian Breakfast</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                       
                        <h5></h5>
                        <p>With more than a hundred varieties of dosas, choose the one you love the most. Not just dosas, we serve delicious Idly, Medu Vada and Uttapam.</p>
                    </div>
                    <a href="#" class="btn project-btn">South Indian Breakfast</a>
                </div>
            </div>
            <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/68.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                      
                        <h5>Chinese</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                       
                        <h5>Chinese</h5>
                        <p>We serve fine ranges of soup, starters, and sizzlers that pack a punch with lots of flavors, variety, and best value for money.</p>
                    </div>
                    <a href="#" class="btn project-btn">Chinese Receipe <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
             <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/69.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        
                        <h5>Desserts</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects"> 
                    <div class="text">
                        <h5>Desserts</h5>
                        <p>Tend to steer towards traditional dessert recipes. Pumpkin pie, fudge, gingerbread houses, and sugar cookies are all popular standbys..</p>
                    </div>
                    <a href="#" class="btn project-btn">Desserts </a>
                </div>
            </div>
             <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/21.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Area End -->

    <!-- Blog Area Start -->
    <!-- <section class="roberto-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
               
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Our Blog</h6>
                        <h2>Latest News &amp; Event</h2>
                    </div>
                </div>
            </div>

            <div class="row">
              
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail"><img src="img/bg-img/2.jpg" alt=""></a>
                        
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory">Event</a>
                        </div>
                       
                        <a href="#" class="post-title">Learn How To Motivate Yourself</a>
                        <p>How many free autoresponders have you tried? And how many emails did you get through using them?</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

            
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="#" class="post-thumbnail"><img src="img/bg-img/3.jpg" alt=""></a>
                       
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory">Event</a>
                        </div>
                     
                        <a href="#" class="post-title">What If Let You Run The Hubble</a>
                        <p>My point here is that if you have no clue for the answers above you probably are not operating a followup.</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                
              <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <a href="#" class="post-thumbnail"><img src="img/bg-img/4.jpg" alt=""></a>
                     
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory">Event</a>
                        </div>
                       
                        <a href="#" class="post-title">Six Pack Abs The Big Picture</a>
                        <p>Some good steps to take to ensure you are getting what you need out of a autoresponder include…</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section> 
    <!-- Blog Area End -->
 <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact +91-9342976133 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="#" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="img/core-img/logo.jpeg" height="100" width="140" alt=""></a>

                            <h4>+91-9342976133</h4>
                            <h4>+91-9342929370</h4>

                            <span>mgsbodiresidency@gmail.com</span>
                            <span>62/3,PH Road,<br/> Bodinayakanur-625513,<br/>
                            Theni</span>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Tourist Places</h5>

                            <!-- Single Blog Area -->
                        
                            <!-- Single Blog Area -->
                          <div class="latest-blog-area">
                                <a href="./blog.html" class="post-title">Munnar rises as three mountain streams...</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i>58 KMS / FROM MGS</span>
                            </div>

                            <!-- Single Blog Area -->
                             <div class="latest-blog-area">
                                <a href="./blog.html" class="post-title">Kurangani Falls and Top station</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 16 KMS/ FROM MGS</span>
                            </div> 
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Links</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Room</a></li>
                                <!-- <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Career</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li> -->
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Subscribe Newsletter</h5>
                            <span>Subscribe our newsletter gor get notification about new updates.</span>

                            <!-- Newsletter Form -->
                           <div class="col-12 col-md-8">
                              <div class="copywrite-content">
                        <!-- Social Info -->
                            <div class="row align-items-center">
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div></div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://twikibot.com" target="_blank">Twiki BOT</a>
</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                           <!--  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>