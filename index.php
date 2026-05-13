
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System||Home Page</title>

<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->

 
    
  <link rel="stylesheet" href="css/swiper.css" />   
  <script src="js/swiper.js"></script>
  <link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
 
</head>

<body>

    
  <?php $current_page='index.php';
 include_once('includes/header.php');?>


  <!-- Swiper -->
  <div class="swiper">
    <div class="swiper-wrapper">
    
      <div class="swiper-slide" style="background-image: url('images/bg1.jpg');">
        <div class="slide-content">
            <h1>Bring the Beat to Your Event  Book the Perfect DJ in Minutes!</h1>
            <p>CARNAVORA is your one-stop platform for finding, booking, and managing top-tier DJs for any occasion — weddings, parties, corporate events, and more.
            </p>
            <button onclick="window.location.href='about.php'" >Get Started</button>
            </div>
           
      </div>
      <div class="swiper-slide" style="background-image: url('images/bg2.jpg');">
        <div class="slide-content">
            <h1>Bring the Beat to Your Event  Book the Perfect DJ in Minutes!</h1>
            <p>CARNAVORA is your one-stop platform for finding, booking, and managing top-tier DJs for any occasion — weddings, parties, corporate events, and more.
            </p>
            <button onclick="window.location.href='about.php'">Get Started</button>
            </div>
      </div>
      <div class="swiper-slide" style="background-image: url('images/bg3.jpg');">
        <div class="slide-content">
            <h1>Bring the Beat to Your Event  Book the Perfect DJ in Minutes!</h1>
            <p>CARNAVORA is your one-stop platform for finding, booking, and managing top-tier DJs for any occasion — weddings, parties, corporate events, and more.
    </p>
            <button onclick="window.location.href='about.php'" >Get Started</button>
            </div>
      </div>
      
    </div>
  </div>


 <
<script>
  
    const swiper = new Swiper('.swiper', {
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      effect: 'fade', // Optional for fade transition
      speed: 1000,
      slidesPerView: 1,         // ⭐ Only one slide visible
      spaceBetween: 0,          // No spacing between slides
    });
    console.log(swiper);
  </script>
    
  
</body>
</html>
 