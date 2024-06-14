<?php
  session_start();

  // Retrieve session variables
  // if(isset($_SESSION['mail'])){
  //   echo "hello";
  //   $email = $_SESSION['mail'];
  // }else{
  //   header("location: ../LOGIN/login.php");
  // }
  

  // Destroy the session
  //session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NITW GUEST HOUSE</title>
  <link rel="shortcut icon" href="Main Images/pointer.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@220&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Caveat&family=Gamja+Flower&family=Josefin+Sans:wght@100&family=Noto+Serif&family=Nunito:wght@200&family=Poppins:ital,wght@0,300;1,500&family=Quicksand&family=Roboto+Condensed:ital,wght@1,300&family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="final.css" />
  
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="image_slider.css">
  <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="collage.css">
  <link rel="stylesheet" href="./navbar/style.css">

</head>

<body onload="load()" >

      <!--  NAV BAR  -->

  <nav class="navbar">
		<div class="navdiv">
			<div class="logo"><img src="./Main Images/logo.png" style="width: 260px; margin-left: -100px;" alt=""></div>
			<div class="center-nav">
				<ul>
				  <li style="font-family: cursive;"><a href="final.php" >Home</a></li>
				  <li><a href="#foot_end">About</a></li>
          <li><a href="./gallery/gallery.php">Gallery</a></li> 
          <li><a href="#facilities_id">Facilities</a></li>
				  <li><a href="contact.php">Contact</a></li>
				  <div class="button-right">
					  <button class="book_no"><a href="../LOGIN/login.php" target="_blank">BOOK</a></button>
				    <button class="book_no" id="change" onclick="updatePage1()"><a href="../LOGIN/login.php">LOGIN/SIGN UP</a></button>
				  </div>
				</ul>
			</div>
		</div>
	</nav>
  <!-- <script>
    function updateSharedVariable() {
            var sharedInputValue = 1;
            if(sharedInputValue==1){
              document.getElementById("change").innerHTML = "LOGIN/SIGN UP";
            }
            else{
              document.getElementById("change").innerHTML = "LOGOUT";
            }
            localStorage.setItem("sharedVariable", sharedInputValue);
            updatePage1(); // Update the value on this page
            // You can also notify other pages about the update using web sockets or other methods
        }

        // Function to update the value on Page 1
        function updatePage1() {
            var sharedVariable = localStorage.getItem("sharedVariable");
            if(sharedVariable==1){
            document.getElementById("sharedValuePage1").innerText = 0;}
            else{
              document.getElementById("sharedValuePage1").innerText = 1;
            }
        }

        // Initial update on page load
        updatePage1();
  </script> -->

     <!--  LANDING PAGE DIV  -->

  <div class="collage">
    <div class="randomText">
        <div class="sizechange cool-text">
            <h3 class="sizechange">Experience the ultimate</h3>
            <h3><span class="sizechange change-text-color" style="font-weight: 700;"> in luxury,</span></h3>
            <h3 style="margin-top: 45px;" class="sizechange bottom-h3"> complete with our </h3>
            <h3><span class="sizechange change-text-color" style="font-weight: 700;">exclusive signature amenities </span></h3>
            <h3 class="sizechange">and services</h3>    
        </div>  
    </div>
    <div class="collageImages">
        <div class="col1 randomPlace"></div>
        <div class="col2 randomPlace"></div>
        <div class="col3 randomPlace"></div>
        <div class="col4 randomPlace"></div>
        <div class="col5 randomPlace"></div>
        <div class="col6 randomPlace"></div>
        <div class="col7 randomPlace"></div>
    </div>
</div>

      <!--  LOADER  -->

<div id="animation-container" style="background-color: #e84d6c; width: 90%; margin: auto; margin-top: -40px;">
  <div class="container" style="background-color: #e84d6c; margin-bottom: 50px;">
      <div class="row">
          <div class="col-sm">
              <p style="text-align: center;" id="0101" class="fs-2 text-light">0</p>
              <p style="text-align: center;" class="text-light">Site visits</p>
          </div>
          <div class="col-sm">
              <p style="text-align: center;" id="0102" class="fs-2 text-light">0</p>
              <p style="text-align: center;" class="text-light">Happy Customers</p>
          </div>
          <div class="col-sm">
              <p style="text-align: center;" class="fs-2 text-light"><span id="0103">0</span>%</p>
              <p style="text-align: center;" class="text-light align-content-center">Positive Feedback</p>
          </div>
      </div>
  </div>
</div>

      <!--  IMAGE SLIDER   -->

  <div class="carousel">
    <div class="carousel-inner">
      <div class="carousel-slide active">
        <img src="./Main Images/hall.jpg" style="display: block;" class="hall" alt="Slide 1" />
      </div>
      <div class="carousel-slide">
        <img src="./pics/pic6.jpg" alt="Slide 2" />
      </div>
      <div class="carousel-slide">
        <img src="./pics/pic3.jpg" alt="Slide 3" />
      </div>
      <div class="carousel-slide">
        <img src="./pics/pic4.jpg" alt="Slide 4" />
      </div>
      <div class="carousel-slide">
        <img src="./pics/pic5.jpg" alt="Slide 5" />
      </div>
      <div class="carousel-slide">
        <img src="./pics/pic2.jpg" alt="Slide 6" />
      </div>
    </div>
    <button class="prev-btn">&lt;</button>
    <button class="next-btn">&gt;</button>
    <div class="navigation-dots"></div>
  </div>

       <!--  FACILITIES  -->

  <div class="main_div" style="margin-top: 40px; width: 90%; margin: auto; margin-top: 50px;" id="facilities_id">
    <div class="lines">
    </div>
    <div class="bigText">
      <p>Sleeping arrangements</p>
    </div>

    <div class="smallText">
      <p>GET THE COMFORT THAT YOU DESERVE</p>
    </div>

    <div class="cards">
      <div class="first_div">
        <img src="./Main Images/beds.png" alt="" />
        <h5>Beds</h5>
        <p>
          The cabin is equipped with 1 office table and a king size bed. The rent
          includes linens for all beds
        </p>
      </div>
      <div class="first_div">
        <img src="./Main Images/bedroom.png" alt="" />
        <h5>Bedrooms</h5>
        <p>
          Spread out over two rooms, the cabin offers a drawing room along with a bedroom. Ranging
          from 2 to 4 persons per room
        </p>
      </div>
      <div class="first_div">
        <img src="./Main Images/tub.png" alt="" />
        <h5>Bathrooms</h5>
        <p>
          The cabin has big bathrooms, all equipped with showers and essentials
        </p>
      </div>
    </div>
  </div>


  <div class="main" style="margin-top: 20px; margin-bottom: 40px;">
    <div class="first">
      <div class="linee"></div>
      <h2 style="font-weight: 900">Come Together</h2>
      <div class="para">
        Join us and experience the luxurious facilities we are providing you
        at Kalam International Hall.
      </div>
    </div>

    <div class="second">
      <div class="upper">
        <img src="./Main Images/wifi.png" alt="" />
        <div class="content">
          Wifi-routers that are enabled with a bandwidth of 5 GHZ and 2.4GHz.
        </div>
      </div>
      <div class="upper">
        <img src="./Main Images/hanger.png" alt="" />
        <div class="content">
          Laundry facilities available at your doorstep
        </div>
      </div>
    </div>

    <div class="second">
      <div class="upper">
        <img src="./Main Images/bread.png" alt="" />
        <div class="content">
          2 Mess where we provide a hygenic meal at an
          affordable price.
        </div>
      </div>
      <div class="upper">
        <img src="./Main Images/fork.png" alt="" />
        <div class="content">
          Canteen items available including a wide variety of food and drinks.
        </div>
      </div>
    </div>
  </div>

       <!--  USER FEEDBACK SECTION  -->

  <div class="slide-container swiper" >
    <div class="slide-content" >
        <div class="card-wrapper swiper-wrapper" >
            <div class="card swiper-slide" >
                <div class="image-content" style="background-color: rgb(52, 5, 59);" >
                    <div class="card-image">
                        <img src="images/img_avatar1.png" class="card-img">
                    </div>
                </div>

                <div class="card-content" style="height: 220px;">
                    <h2 class="name">Harsh Rathore</h2>
                    <p class="description"><i> "Great location. Amazing staff and an overall great experience. The rooms are spacious and clean."</i></p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <button class="button" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='red'" style="background-color: rgb(52, 5, 59);">View More</button>
                </div>
            </div>


            <div class="card swiper-slide">
                <div class="image-content" style="background-color: rgb(52, 5, 59);">
                    <div class="card-image">
                        <img src="images/img_avatar2.png" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Simran Yadav</h2>
                    <p class="description"><i> "This is my first choice hotel when i visit Telengana,
                            Everyone is friendly. Everything is clean and well maintained." </i></p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <button class="button" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='red'" style="background-color: rgb(52, 5, 59);">View More</button>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content" style="background-color: rgb(52, 5, 59);">
                    <div class="card-image">
                        <img src="images/img_avatar3.png" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Nitin Yadav</h2>
                    <p class="description"><i>"Great Staff!
                            Excellent Service and Ambiance!
                            Cozy room and Washroom, slept like a baby after a tiring day."</i></p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <button class="button" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='red'" style="background-color: rgb(52, 5, 59);">View More</button>
                </div>
            </div>
            

            <div class="card swiper-slide">
                <div class="image-content" style="background-color: rgb(52, 5, 59);">
                    <div class="card-image">
                        <img src="images/img_avatar4.png" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Ankita Kumari</h2>
                    <p class="description"><i>"The initial night we were told that the rooms we booked could not be
                            provided as these were already booked."</i></p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <button class="button" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='red'" style="background-color: rgb(52, 5, 59);">View More</button>
                </div>
            </div>


            <div class="card swiper-slide">
                <div class="image-content" style="background-color: rgb(52, 5, 59);">
                    <div class="card-image">
                        <img src="images/img_avatar5.png" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Payal Mishra</h2>
                    <p class="description"><i> "Their staff is so much cooperative. They provide all the required
                            things within a minute."</i></p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <button class="button" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='red'" style="background-color: rgb(52, 5, 59);">View More</button>
                </div>
            </div>


            <div class="card swiper-slide">
                <div class="image-content" style="background-color: rgb(52, 5, 59);">
                    <div class="card-image">
                        <img src="images/img_avatar1.png" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Rakshit Anand</h2>
                    <p class="description"><i> "Breakfasts are rather dull and small. Also a help with airport
                            transport would be appreciated"</i></p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <button class="button" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='red'" style="background-color: rgb(52, 5, 59);">View More</button>
                </div>
            </div>


            <div class="card swiper-slide">
                <div class="image-content" style="background-color: rgb(52, 5, 59);">
                    <div class="card-image">
                        <img src="images/img_avatar2.png" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Aditi</h2>
                    <p class="description"><i> "Great staff, great service, reasonably priced,
                            safe and secure place. Convenient location. Easy access to main road."</i></p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <button class="button" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='red'" style="background-color: rgb(52, 5, 59);">View More</button>
                </div>
            </div>


            <div class="card swiper-slide">
                <div class="image-content" style="background-color: rgb(52, 5, 59);">
                    <div class="card-image">
                        <img src="images/img_avatar3.png" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Praveen</h2>
                    <p class="description"><i> "Its comparable to any 5-star hotel with a fraction of the cost.
                            Everything  were
                            exceptional."</i></p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <button class="button" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='red'" style="background-color: rgb(52, 5, 59);">View More</button>
                </div>
            </div>


            <div class="card swiper-slide">
                <div class="image-content" style="background-color: rgb(52, 5, 59);">
                    <div class="card-image">
                        <img src="images/img_avatar4.png" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Pooja Kulkarni</h2>
                    <p class="description"><i> "Great location, very cordial and helpful staff. Clean and hygenic. great hospitality. No negative feedback"</i></p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <button class="button" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='red'" style="background-color: rgb(52, 5, 59);">View More</button>
                </div>
            </div>
        </div>
    </div>    

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>

        <!--  BOOK NOW AND HOTEL DETAILS  -->

  <footer>
    <div class="footer">
      <div class="footer_div">
        <div class="line">
          <img id="orange_line" src="./Main Images/orange_line.svg" alt="orange" />
        </div>
        <div class="line">
          <h2 id="Hospitality_quote_1">
            Serving each and every visitor with unmatched hospitality and
            individualised care is our goal at NIT Warangal.
          </h2>
        </div>
        <div class="line quote2">
          <span id="Hospitality_quote_2">Relax, unwind, and make yourself at home</span>
        </div>
        <div class="line button_section">
          <a href="./Main Images/hotel_detail.png" target="_blank"><button class="details">Hotel Details</button></a>
          <a href="../LOGIN/login.php" target="_blank"><button class="book_now">Book now</button></a>
        </div>
      </div>
    </div>

            <!--  FOOTER  -->

    <div class="footer_end" id="foot_end">
      <div class="foot_inner">
        <div class="about block">
          <div>
            <div id="foot_h"><h3>ABOUT</h3></div>
            <div class="foot_div" style="width: 330px; line-height: 25px;">National Institute of Technology, Warangal, formerly known as Regional Engineering College, was established in 1959.
              Pandit Jawaharlal Nehru laid the foundation stone for this institute on October 10, 1959.
            </div>
          </div>
          
        </div>
        
        <div class="block" style="margin-left: 110px;">
          <div>
            <div id="foot_h"><h3>PAYMENT METHODS</h3></div>
            <div class="foot_div" style="width: 330px;">Pay any way you choose, we support all payment options</div>
            <div style="margin-top: 9px;">
              <img class="bank" src="./Main Images/visa.webp" alt="">
              <img class="bank" src="./Main Images/sbi.png" alt="">
              <img class="bank" src="./Main Images/american.png" alt="">
              <img class="bank" src="./Main Images/master_card.png" alt="">
            </div>
          </div>
        </div>
        
        <div class="block" style="margin-left: 90px;">
          <div>
            <div id="foot_h"><h3>GET SOCIAL</h3></div>
            <div class="foot_div" style="width: 330px;">Follow us on social media and keep in touch with NIT Guest House</div>
            <div class="social-icons" style="margin-top: 5px;">
              <a href="https://twitter.com/warangal_nit?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fab fa-twitter"></i></a> &nbsp;&nbsp;
              <a href="https://www.instagram.com/nitwarangalofficial?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="https://linkedin.com/in/nit-warangal-2a9169247" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </footer> 
</body>
<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>
<script src="loader.js"></script>
<script src="image_slider.js"></script>
</html>