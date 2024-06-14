<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NITW GUEST HOUSE</title>
    <link rel="shortcut icon" href="../Main Images/pointer.png" type="image/x-icon">
    <link rel="stylesheet" href="gallery_style.css" />
    <link rel="stylesheet" href="../final.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="../navbar/style.css" />
  </head>
  <body style="background-color: antiquewhite;">
    <nav class="navbar">
      <div class="navdiv">
        <div class="logo"><img src="../Main Images/logo.png" style="width: 260px; margin-left: -100px;" alt=""></div>
        <div class="center-nav">
          <ul>
            <li><a href="../final.php">Home</a></li>
            <li><a href="#foot_end">About</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li>
              <a href="../final.php#facilities_id">Facilities</a>
            </li>
            <li><a href="../contact.php">Contact</a></li>
            <div class="button-right">
              <button class="book_no">
                <a href="../../LOGIN/login.php" target="_blank">BOOK</a>
              </button>
              <button class="book_no"><a href="../../LOGIN/login.php">LOGIN/SIGN UP</a></button>
            </div>
          </ul>
        </div>
      </div>
    </nav>

    <div class="gallery">
      <br />
      <br />
      <h2 class="gallery-heading">GALLERY</h2>
      <br />
      <br />
      <div class="image-container">
        <div class="image-gallery"><img src="./images/1.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/2.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/3.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/4.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/5.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/7.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/8.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/9.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/10.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/11.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/12.jpeg" alt="" /></div>
        <div class="image-gallery"><img src="./images/13.jpeg" alt="" /></div>
      </div>
      <div class="popup-img">
        <span class="close-popup">&times;</span>
        <img src="./images/1.jpeg" alt="" />
      </div>
    </div>
    <br /><br /><br /><br />

    <div class="footer_end" id="foot_end">
      <div class="foot_inner">
        <div class="about block">
          <div>
            <div id="foot_h"><h3>ABOUT</h3></div>
            <div class="foot_div" style="width: 330px; line-height: 25px">
              National Institute of Technology, Warangal, formerly known as
              Regional Engineering College, was established in 1959. Pandit
              Jawaharlal Nehru laid the foundation stone for this institute on
              October 10, 1959.
            </div>
          </div>
        </div>

        <div class="block" style="margin-left: 110px">
          <div>
            <div id="foot_h"><h3>PAYMENT METHODS</h3></div>
            <div class="foot_div" style="width: 330px">
              Pay any way you choose, we support all payment options
            </div>
            <div style="margin-top: 9px">
              <img class="bank" src="../Main Images/visa.webp" alt="" />
              <img class="bank" src="../Main Images/sbi.png" alt="" />
              <img class="bank" src="../Main Images/american.png" alt="" />
              <img class="bank" src="../Main Images/master_card.png" alt="" />
            </div>
          </div>
        </div>

        <div class="block" style="margin-left: 90px">
          <div>
            <div id="foot_h"><h3>GET SOCIAL</h3></div>
            <div class="foot_div" style="width: 330px">
              Follow us on social media and keep in touch with NIT Guest House
            </div>
            <div class="social-icons" style="margin-top: 5px">
              <a
                href="https://twitter.com/warangal_nit?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                target="_blank"
                ><i class="fab fa-twitter"></i
              ></a>
              &nbsp;&nbsp;
              <a
                href="https://www.instagram.com/nitwarangalofficial?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                target="_blank"
                ><i class="fab fa-instagram"></i></a
              >&nbsp;&nbsp;&nbsp;
              <a
                href="https://linkedin.com/in/nit-warangal-2a9169247"
                target="_blank"
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.querySelectorAll(".image-gallery").forEach((image) => {
        image.onclick = () => {
          document.querySelector(".popup-img").style.display = "block";
          document.querySelector(".popup-img img").src =
            image.querySelector("img").src;
        };
      });

      document.querySelector(".popup-img .close-popup").onclick = () => {
        document.querySelector(".popup-img").style.display = "none";
      };
    </script>
  </body>
</html>
