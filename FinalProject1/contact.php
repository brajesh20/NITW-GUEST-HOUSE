<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NITW GUEST HOUSE</title>
    <link rel="shortcut icon" href="Main Images/pointer.png" type="image/x-icon">
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="final.css">
    <link rel="stylesheet" href="navbar/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <nav class="navbar">
		<div class="navdiv">
			<div class="logo"><img src="./Main Images/logo.png" style="width: 260px; margin-left: -100px;" alt=""></div>
			<div class="center-nav">
				<ul>
				    <li style="font-family: cursive;"><a href="final.php" >Home</a></li>
				    <li><a href="#foot_end">About</a></li>
            <li><a href="./gallery/gallery.php">Gallery</a></li> 
            <li><a href="final.php#facilities_id">Facilities</a></li>
				    <li><a href="./contact.php">Contact</a></li>
            
				    <div class="button-right">
              <button class="book_no"><a href="../LOGIN/login.php" target="_blank">BOOK</a></button>
              <?php
                if(isset($_SESSION["mail"])) {?>
                  <button class="book_no" id="change" onclick="updatePage1()"><a href="final.php">
                    <?php
                  echo "logOut";?>
                  </a></button>  
                  <?php  
              } else {?>
                <button class="book_no" id="change" onclick="updatePage1()"><a href="../LOGIN/login.php"><?php
                  echo "LOGIN/SIGN UP";?>
                  </a></button>
                  <?php
              }
              ?>
            </div>
				</ul>
			</div>
		</div>
	</nav>


    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div>
                        <h3 style="font-weight: bolder; color: black;">How Can We Help?</h3>
                        <p style="font-weight: 500;">Welcome to NITW GUEST HOUSE ! We're here to assist you in any way we can. Whether you have questions, need assistance with our products or services, or simply want to share feedback, we're all ears. Our goal is to make your experience with us as seamless and enjoyable as possible.</p>
                    </div>
                    <div>
                        <h3 style="font-weight: bolder; color: black;">Address</h3>
                        <p style="font-weight: 500;">Prof.H.P.Rani/Prof.T.D.G.Rao/Prof.S. Babu</p>
                        <p style="font-weight: 500;">Organizing Secretary, ISTAM-2023</p>
                        <p style="font-weight: 500;">NIT Warangal</p>
                        <p style="font-weight: 500;">E-Mail: istam2023@nitw.ac.in</p>
                        <p style="font-weight: 500;">Contact:+91-0870-246 2800/2300/2100</p>
                    </div>
                    <br>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.8970071767044!2d79.52826367463997!3d17.983528085359406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a334fbb37aee6c3%3A0xf1b2c37fcb8fefce!2sNational%20Institute%20of%20Technology%2C%20Warangal%20(NIT%20Warangal)!5e0!3m2!1sen!2sin!4v1707245575753!5m2!1sen!2sin"
                        width="320" height="250" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-2" style="margin-top: -100px;">
                  <form id="contactForm">
                      <input type="text" placeholder="Name" required>
                      <input type="email" placeholder="Email Address" required>
                      <textarea row="20" cols="20" placeholder="Your Message" required></textarea>
                      <button type="submit" class="btn btn-white">Send</button>
                      <span id="sentMessage" style="display: none; color: green; font-size: 1.5rem; margin-left: 25px;"><i class="fas fa-check-circle"></i> Input sent</span>
                  </form>
              </div>              
            </div>
        </div>
    </section>


    <div class="footer_end" id="foot_end" style="margin-top: -20px;">
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
</body>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const sentMessage = document.getElementById('sentMessage');

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();

        sentMessage.style.display = 'inline';

        setTimeout(function() {
            contactForm.reset();
            sentMessage.style.display = 'none';
        }, 5000);
    });
});
</script>

</html>