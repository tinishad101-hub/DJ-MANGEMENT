<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System || About Us</title>

<!-- Custom Theme files
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
  --><!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/about.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body>
<!---->
<?php $current_page='about.php';
 include_once('includes/header.php');?>
<div class="about-main">
            <div class=" abt-pic-info">
              
				 <h2>Welcome to Carnavora</h2>
				 <br>
                <p>
         Our Carnavora is a powerful, all-in-one platform designed to simplify and modernize the way DJs and clients connect. Whether you're planning a wedding, party, corporate event, or nightlife experience, our system allows you to easily browse, book, and manage professional DJs with just a few clicks. Clients can explore detailed DJ profiles, complete with music samples, pricing, availability calendars, and verified reviews, helping them make confident, informed decisions.<br><br>

DJs can showcase their skills, manage bookings through a personalized dashboard, set their availability, and receive real-time notifications for new gigs. Integrated with secure online payment options such as Stripe and PayPal, the system ensures safe and seamless transactions for both parties. A built-in messaging feature allows direct communication between DJs and clients, making it easy to discuss event details, requests, and playlists. With a user-friendly interface, smart scheduling, and automated reminders, our platform delivers a smooth and stress-free booking experience from start to finish—saving time, reducing hassle, and bringing high-quality entertainment to every occasion.


</p>

				<br>
				<br>
				<a href="services.php">Explore Now</a>
               
            </div>
			<!-- <div class=" abt-pic picc">
				 <img src="img/abt.jpg" class="img-responsive" alt="">
			 </div>
			-->

            <div class="video">
              <video autoplay loop muted>
                <source src="img/Untitled video - Made with Clipchamp (1).mp4" type="video/mp4">
            </div>
            <div class="overlay"></div>

			 
			 <div class="clearfix"></div>
		 </div>
	
		  <div class="latest">
			 <h3>LATEST EVENTS</h3>		
			 <div class="pic start">
				 <a class="fancybox" href="img/Wedding.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/Wedding.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Wedding Party</a></h4>
				 <p>We recently organized a lively wedding DJ event filled with love, laughter, and non-stop dancing. The music kept the energy high and created unforgettable moments for the couple and their guests.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="img/tmdj.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/tmdj.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Hyderabad Party Night</a></h4>
				 <p>We recently hosted an electrifying party night in Hyderabad that had the crowd dancing from start to finish. High-energy beats and a vibrant atmosphere, it was a night to remember for everyone.

</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="img/BD.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/BD.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Birthday Event</a></h4>
				 <p>We recently organized a fun-filled birthday party that brought joy, laughter, and great music to everyone. From lively games to an energetic dance floor, it was a celebration to remember.








</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="img/blr.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/blr.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Armin Performed at Bangalore</a></h4>
				 <p>Armin recently performed in Bangalore, delivering an unforgettable night of music and energy. The crowd was electrified by his beats, making it a truly epic experience for all.
</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="img/kochi.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/kochi.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Vedan Performed at Kochi</a></h4>
				 <p>Vedan recently performed in Kochi, lighting up the stage with his powerful music and energy. The audience was thrilled and engaged, making it a truly memorable night of rhythm, celebration, joy, and connection.

</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	
	 </div>
</div>
 <div class="art">
           
            <div class="head">
    
	<h1>OUR ARTISTS</h1>

			</div>
<div class="artist-container">
    <div class="artist-card">
        <img src="img/snake.jpg">
        <h2>DJ Snake</h2>
        <p>DJ Snake is a global EDM icon known for his explosive performances and chart-topping hits. With tracks like “Turn Down for What” and “Taki Taki,” he brings unmatched energy, style, and crowd control to every stage.</p>
        

    </div>
    <div class="artist-card">
        <img src="img/bill2.jpg">
        <h2>Billie Eilish</h2>
        <p>Billie Eilish is a Grammy-winning artist known for her haunting vocals and genre-defying sound. With hits like “Bad Guy” and “Happier Than Ever,” she brings a unique blend of emotion, artistry, and stage presence to every performance.
</p>

    </div>
    <div class="artist-card">
        <img src="img/js3.jpg">
        <h2>Justin Bieber</h2>
        <p>Justin Bieber is a global pop sensation known for his smooth vocals and dynamic performances. With hits like “Sorry” and “Peaches,” he brings star power, energy, and unforgettable moments to every stage he steps on.
</p>
        

    </div>
    <div class="artist-card">
        <img src="img/hanu2.jpg">
        <h2>HanumanKind</h2>
        <p>Hanuman Kind is a rising star known for his bold style and genre-blending sound that pushes creative boundaries. With powerful performances and unique beats, he brings raw energy, originality, and vibrant vibes to every stage.
</p>
        

    </div>


    </ul>
</div>
        </div>

<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>