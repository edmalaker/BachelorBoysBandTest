<!DOCTYPE html>
<html lang="en">

<head>

  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Wedding Band. Save over $1000 by booking your band directly through our website. Servicing Philadephia, Baltimore, Richmond, Pittsburgh and Washington D.C. - Bachelor Boys | Who We Are</title>
	
	<meta name='description' content=''>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">

    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	
</head>

<body>
<div>
<!-- header -->
<header>




		<!-- top nav -->
    <nav>
		<div class="topnav" id="myTopnav">
		
		    <a href="index.php.html" title="Who We Are"><span class = "imhere"> WHO WE ARE </span></a>
		
		    <a href="Wedding_Band/Wedding-Bands.php.html" title="Weddings">WEDDINGS</a>
		
		    <a href="Wedding_Band/Corporate.php.html" title="Corporate Events">CORPORATE EVENTS</a>
		
		    <a href="Wedding_Band/Festivals.php.html" title="Festivals">FESTIVALS</a>
		
		    <a href="Wedding_Band/Wedding-Bands-Gig-Guide.php.html" title="See Us Play">SEE US PLAY</a>
		
		    <a href="Wedding-Bands-Songs.php.html" title="Our Music">OUR MUSIC</a>
		
		    <a href="Wedding-Bands/Wedding-Bands-Contact-Details.php.html" title="Contact Us">CONTACT US</a>
		
		    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	    </div>
    </nav>
	
	
	<!-- this script is for the small screen menu button -->
	<script>
        function myFunction() 
	    {
            var x = document.getElementById("myTopnav");
			
            if (x.className === "topnav") 
			{
                x.className += " responsive";
            } else 
			{
                x.className = "topnav";
            }
        }
    </script>
	
	
    <!-- carousel -->
		<div class="w3-content w3-section" style="max-width:100%">
		    <img class="mySlides w3-animate-fading" src="img/wedding_band_home_01.jpg" style="width:100%">
            <img class="mySlides w3-animate-fading" src="img/wedding_band_home_02.jpg" alt="Bachelor Boys Band - Wedding Band  - Who We Are" style="width:100%">
            <img class="mySlides w3-animate-fading" src="img/wedding_band_home_03.jpg" alt="Bachelor Boys Band - Wedding Band  - Who We Are" style="width:100%">
            <img class="mySlides w3-animate-fading" src="img/wedding_band_home_04.jpg" alt="Bachelor Boys Band - Wedding Band  - Who We Are" style="width:100%">
		</div>
		
		
	<!-- grey box and logo image under carousel -->	
		<div class = "logoimage">
		    <div class = "logoimageposition">
                <img class = "logoimagecenter" src="img/Logo_BachelorBoysBand_800px_ColorA_On_Transparent.png" alt="Logo">
            </div>
			
            <p class = "centertext">HIGH-ENERGY MUSIC FOR EVENTS. PLAYING ALL YOUR FAVORITE SONGS.</p>
			
        </div>
		
		
	<!-- this script works the animation of the carousel -->
	<script>
        var myIndex = 0;
        carousel();

        function carousel() 
		{
            var i;
            var x = document.getElementsByClassName("mySlides");
    
	        for (i = 0; i < x.length; i++) 
			{
                x[i].style.display = "none";  
            }
			
             myIndex++;
             
			if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 9000);    
        }
    </script>
	
</header>
<!-- end of header -->
		
		
	<!-- Who we are -->	
    <div class="whoweare">
	
        <h1>WHO WE ARE</h1>

	    <p>The Bachelor Boys are a premium 3-14 piece band specializing in high-energy music for festivals, weddings, corporate events and private functions - 
        at a sensible price. We pride ourselves on having a "cooler-than-average" song list that is never cheesy, and focuses squarely on filling your dance floor. With the Bachelor Boys you'll get 
        the best musicians in the country, playing your favorite music. Where we play: Mostly in Philadephia, Baltimore, Richmond, Pittsburgh and Washington D.C., but we travel around the world.</p>

    </div>
	
	
	<!-- See us play -->
	<div class="seeusplay">
	
	<h2><a href="Wedding_Band/Wedding-Bands-Gig-Guide.php.html">SEE US PLAY</a></h2>

    <p>Join us at one of our regular Bachelor Boys Band showcases to see us live in action for yourself. At the showcase, we will present a number of different band sizes and configurations, 
    so you can find the style that grabs you. It's a fun night out and an excellent demonstration of our passion, professionalism and our versatility.</p>

	</div>
	
	
	<!-- Shows -->
	<div class = "shows">
	
	    <div class = "linkcontainer">
	        <div class = "circlelink">
                <a href="Wedding_Band/Wedding-Bands-Gig-Guide.php.html">
			        <div class = "circlelinktop">UPCOMING SHOWCASES</div>
				    <div class = "circlelinkmiddle"><hr /></div>
				    <div class = "circlelinkbottom">FREE PUBLIC GIGS TO <br/>SEE THE BAND LIVE</div>
			    </a>
		    </div>
	    </div>
		
		<div class = "showlist">
		
		    <table class = "showlisttext">
                <tr>
                    <th>location</th>
                    <th>date</th>
	                <th>venue</th>
	                <th>time</th>
                </tr>
                <tr>
                    <td>Arlington</td>
	                <td>Mon Jul 17th</td>
                    <td>Iota Club</td>
	                <td>8pm</td>
                </tr>
				<tr>
                    <td>Baltimore</td>
	                <td>Tue Jul 18th</td>
                    <td>The Windup Space Bar</td>
	                <td>7:30pm</td>
                </tr>
				<tr>
                    <td>Pittsburgh</td>
	                <td>Tue Jul 25th</td>
                    <td>James Street Gastropub</td>
	                <td>7:30pm</td>
                </tr>
				<tr>
                    <td>Philadelphia</td>
	                <td>Wed Jul 26th</td>
                    <td>The Twisted Tail</td>
	                <td>8pm</td>
                </tr>
				<tr>
                    <td>Richmond</td>
	                <td>Wed Aug 23rd</td>
                    <td>The Camel Bar</td>
	                <td>7pm</td>
                </tr>
            </table>
            
			
        </div>

    </div>

    <div class = "videocontainer1">
        <iframe src="https://www.youtube.com/embed/QFzh6n9hGKg?showinfo=0&hd=1&rel=0&hl=en-us&origin=https://www.BachelorBoysBand.com" frameborder="0" allowfullscreen class="video"></iframe>
    </div>

    <div class = "videocontainer2">
        <iframe  src="https://www.youtube.com/embed/_LpfMjHMa-o?showinfo=0&hd=1&rel=0&hl=en-us&origin=https://www.BachelorBoysBand.com" frameborder="0" allowfullscreen class="video"></iframe>
    </div>

    <div class="music">
        <h2><a href="Wedding-Bands-Songs.php.html">STYLES</a></h2>
	    <p>The Bachelor Boys can perform a unique mix of songs all individually tailored to meet the tastes of you and your guests. Head to <a href="Wedding-Bands-Songs.php.html">Our Music</a> for more examples from our song list, and some sample recordings.</p>
	
	<div class = "genresback">
	
	    <a href="Wedding-Bands-Songs.php.html">
	    <div class="genredark">
	        <h3>ROCK</h3>
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genrelight">
	        <h3>DANCE</h3>
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genredark">
	        <h3>JAZZ</h3>
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genrelight">
	        <h3>FUNK + MOTOWN</h3>
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genredark">
	        <h3 class = "bumpup">OLD SCHOOL<br />FAVORITES</h3>
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genrelight">
	        <h3>ANYTHING REALLY</h3>
	    </div>
	    </a>
	
	</div>
	
	


</div>
</body>
</html>