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
    <nav class = "sticky">
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
	
	<!-- VIDEOS -->
	<div class = "twovideocontainer">

        <div class = "videocontainer1">
            <iframe src="https://www.youtube.com/embed/QFzh6n9hGKg?showinfo=0&hd=1&rel=0&hl=en-us&origin=https://www.BachelorBoysBand.com" frameborder="0" allowfullscreen class="video"></iframe>
        </div>

        <div class = "videocontainer2">
            <iframe  src="https://www.youtube.com/embed/_LpfMjHMa-o?showinfo=0&hd=1&rel=0&hl=en-us&origin=https://www.BachelorBoysBand.com" frameborder="0" allowfullscreen class="video"></iframe>
        </div>
		
	</div>

	<!-- MUSIC STYLES -->
    <div class="music">
        <h2><a href="Wedding-Bands-Songs.php.html">STYLES</a></h2>
	    <p>The Bachelor Boys can perform a unique mix of songs all individually tailored to meet the tastes of you and your guests. Head to <a href="Wedding-Bands-Songs.php.html">Our Music</a> for more examples from our song list, and some sample recordings.</p>
	
	<div class = "genresback">
	
	    <a href="Wedding-Bands-Songs.php.html">
	    <div class="genredark rockpop">
	        <h3>ROCK</h3>
			<div class="rockpoptext">
			
			   <div class="poptextleft">
			       <h3>ROCK</h3>
			   </div>
			   
			   <div class="poptextright">
			   
			       <ul>

                       <li>
                       <span class="title">Don't Stop Believing</span>
                       <span class="artist">Journey</span>
                       </li>

                       <li>
                       <span class="title">Jessie's Girl</span>
                       <span class="artist">Rick Springfield</span>
                       </li>

                       <li>
                       <span class="title">Twist 'n' Shout</span>
                       <span class="artist">The Beatles</span>
                       </li>

                       <li>
                       <span class="title">You Are The Best Thing</span>
                       <span class="artist">Ray Lamontagne</span>
                       </li>

                       <li>
                       <span class="title">Sweet Caroline</span>
                       <span class="artist">Neil Diamond</span>
                       </li>

                       <li>
                       <span class="title">Call Me Al</span>
                       <span class="artist">Paul Simon</span>
                       </li>

                       <li>
                       <span class="title">American Girl</span>
                       <span class="artist">Tom Petty</span>
                       </li>

                       <li>
                       <span class="title">Lonely Boy</span>
                       <span class="artist">Black Keys</span>
                       </li>


                       <li>
                       <span class="title">Hit Me With Your Best Shot</span>
                       <span class="artist">Pat Benatar</span>
                       </li>

                       <li>
                       <span class="title">Wagon Wheel</span>
                       <span class="artist">Old Crow Medicine Show</span>
                       </li>

                    </ul>
			   
			   </div>
			   
			</div>
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genrelight dancepop">
	        <h3>DANCE</h3>
			
			<div class="dancepoptext">
			
			   <div class="poptextleft">
			       <h3>DANCE</h3>
			   </div>
			   
			   <div class="poptextright">
			   
			       <ul>

                       <li>
                       <span class="title">Shake It Off</span>
                       <span class="artist">Taylor Swift</span>
                       </li>

                       <li>
                       <span class="title">Wake Me Up</span>
                       <span class="artist">Avicii</span>
                       </li>

                       <li>
                       <span class="title">Can’t Stop The Feeling</span>
                       <span class="artist">Justin Timberlake</span>
                       </li>

                       <li>
                       <span class="title">Shut Up and Dance</span>
                       <span class="artist">Walk The Moon</span>
                       </li>

                       <li>
                       <span class="title">Locked Out of Heaven</span>
                       <span class="artist">Bruno Mars</span>
                       </li>

                       <li>
                       <span class="title">Hey Ya</span>
                       <span class="artist"> Outkast</span>
                       </li>

                       <li>
                       <span class="title">Get Lucky</span>
                       <span class="artist">Daft Punk</span>
                       </li>

                       <li>
                       <span class="title">Happy</span>
                       <span class="artist">Pharrell Williams</span>
                       </li>

                       <li>
                       <span class="title">Rolling In The Deep</span>
                       <span class="artist">Adele</span>
                       </li>

                       <li>
                       <span class="title">Forget You</span>
                       <span class="artist">Cee Lo Green</span>
                       </li>

                    </ul>
			   
			   </div>
			   
			</div>
			
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genredark jazzpop">
	        <h3>JAZZ</h3>
			
			<div class="jazzpoptext">
			
			   <div class="poptextleft">
			       <h3>JAZZ</h3>
			   </div>
			   
			   <div class="poptextright">
			   
			       <ul>

                      <li>
                      <span class="title">Fly Me To The Moon</span>
                      <span class="artist">Frank Sinatra</span>
                      </li>

                      <li>
                      <span class="title">Unforgettable</span>
                      <span class="artist">Nat King Cole</span>
                      </li>

                      <li>
                      <span class="title">Moondance</span>
                      <span class="artist">Van Morisson</span>
                      </li>

                      <li>
                      <span class="title">Don’t Know Why</span>
                      <span class="artist">Norah Jones</span>
                      </li>

                      <li>
                      <span class="title">At Last</span>
                      <span class="artist">Etta James</span>
                      </li>

                      <li>
                      <span class="title">Save The Last Dance</span>
                      <span class="artist">Michael Buble</span>
                      </li>

                      <li>
                      <span class="title">L-O-V-E</span>
                      <span class="artist">Nat King Cole</span>
                      </li>

                      <li>
                      <span class="title">In The Mood</span>
                      <span class="artist">Glen Miller</span>
                      </li>

                      <li>
                      <span class="title">What A Wonderful World</span>
                      <span class="artist">Louis Armstrong</span>
                      </li>

                      <li>
                      <span class="title">Georgia On My Mind</span>
                      <span class="artist">Ray Charles</span>
                      </li>

                    </ul>
			   
			   </div>
			   
			</div>
			
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genrelight funkpop">
	        <h3>FUNK + MOTOWN</h3>
			
			<div class="funkpoptext">
			
			   <div class="poptextleft">
			       <h3>FUNK</h3>
			   </div>
			   
			   <div class="poptextright">
			   
			       <ul>

                       <li>
                       <span class="title">Respect</span>
                       <span class="artist">Aretha Franklin</span>
                       </li>

                       <li>
                       <span class="title">Stand By Me</span>
                       <span class="artist">Ben E King</span>
                       </li>

                       <li>
                       <span class="title">Ain’t Too Proud To Beg</span>
                       <span class="artist">Temptations</span>
                       </li>

                       <li>
                       <span class="title">The Way You Make Me Feel</span>
                       <span class="artist">Michael Jackson</span>
                       </li>

                       <li>
                       <span class="title">Superstition</span>
                       <span class="artist">Stevie Wonder</span>
                       </li>

                       <li>
                       <span class="title">Hold On I’m Comin</span>
                       <span class="artist">Sam & Dave</span>
                       </li>

                       <li>
                       <span class="title">Son Of A Preacher Man</span>
                       <span class="artist">Dusty Springfield</span>
                       </li>

                       <li>
                       <span class="title">Heard It Through The Grapevine</span>
                       <span class="artist">Marvin Gaye</span>
                       </li>

                       <li>
                       <span class="title">Hard To Handle</span>
                       <span class="artist">Otis Redding</span>
                       </li>

                       <li>
                       <span class="title">My Girl</span>
                       <span class="artist">Temptations</span>
                       </li>

                    </ul>
			   
			   </div>
			   
			</div>
			
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genredark oldpop">
	        <h3 class = "bumpup">OLD SCHOOL<br />FAVORITES</h3>
			
			<div class="oldpoptext">
			
			   <div class="poptextleft">
			       <h3>OLD SCHOOL</h3>
			   </div>
			   
			   <div class="poptextright">
			   
			       <ul>

                       <li>
                       <span class="title">Billie Jean</span>
                       <span class="artist">Michael Jackson</span>
                       </li>

                       <li>
                       <span class="title">Signed, Sealed, Delivered</span>
                       <span class="artist">Stevie Wonder</span>
                       </li>

                       <li>
                       <span class="title">I Feel Good</span>
                       <span class="artist">James Brown</span>
                       </li>

                       <li>
                       <span class="title">Shout</span>
                       <span class="artist">Isley Brothers</span>
                       </li>

                       <li>
                       <span class="title">Valerie</span>
                       <span class="artist">Amy Winehouse</span>
                       </li>

                       <li>
                       <span class="title">I Wanna Dance With Somebody</span>
                       <span class="artist">Whitney Houston</span>
                       </li>

                       <li>
                       <span class="title">December 1963 (Oh What A Night)</span>
                       <span class="artist">The Four Seasons</span>
                       </li>

                       <li>
                       <span class="title">Walking On Sunshine</span>
                       <span class="artist">Katrina and the Waves</span>
                       </li>

                       <li>
                       <span class="title">Proud Mary</span>
                       <span class="artist">Tina Turner</span>
                       </li>

                       <li>
                       <span class="title">All Night Long</span>
                       <span class="artist">Lionel Richie</span>
                       </li>

                    </ul>
			   
			   </div>
			   
			</div>
			
	    </div>
	    </a>
		
		<a href="Wedding-Bands-Songs.php.html">
	    <div class="genrelight anypop">
	        <h3>ANYTHING REALLY</h3>
			
			<div class="anypoptext">
			
			   <div class="poptextleft">
			       <h3>ANYTHING</h3>
			   </div>
			   
			   <div class="poptextright">
			   
			       <ul>

                       <li>
                       <span class="titlelong">Various Traditional Jewish Folk Dances (Horahs)</span>
                       </li>

                       <li>
                       <span class="titlelong">Various Bluegrass Tunes</span>
                       </li>

                       <li>
                       <span class="titlelong">Hundreds of String Quartet Standards, and Traditional Ceremony Music</span>
                       </li>

                       <li>
                       <span class="titlelong">Hundreds of Jazz Standards</span>
                       </li>

                       <li>
                       <span class="titlelong">Various Italian Folk Songs/Dances</span>
                       </li>

                       <li>
                       <span class="titlelong">Anything, really!</span>
                       </li>

                    </ul>
			   
			   </div>
			   
			</div>
			
	    </div>
	    </a>
	
	</div>
	</div>
	
	<!-- BOOKING -->
	<div class="booking">
	
	    <h2>BOOK US</h2>

        <p>For many people, booking a band is a daunting task. The Bachelor Boys Band prides itself on a level of pre-event service that is unrivaled - we guarantee that the band will be the easiest part of 
		planning your event. Any logistical complications are taken care of behind the scenes, and we proactively guide you through the process so that you can simply enjoy your event to the fullest. Just 
		tell us about your vision, and let us take care of the rest.</p>

		<h6>Click below for more info on pricing and to see how we can help you with your specific event...</h6>
		
		
        <a href="Wedding_Band/Wedding-Bands.php.html">
		<div class = "linkcontainer2">
		    <div class = "thelink">
		        <img src="img/links/WeddingPage_Colour.jpg" alt="Paris">
			
		        <div class = "textoverlay">
                    <h3>Weddings</h3>
                    <span>Ceremony, Cocktail Hour, Reception. We are wedding entertainment experts.</span>
			    </div>
				
		    </div>
		</div>
        </a>
		

        <a href="Wedding_Band/Corporate.php.html">
		<div class = "linkcontainer2">
		    <div class = "thelink">
		        <img src="img/links/CorporatePage_Colour.jpg" alt="Paris">
			
	            <div class = "textoverlay">
                    <h3>Corporate Events</h3>
                    <span>Professional, versatile & highly organized musicians available for any scale event.</span>
		        </div>
				
		    </div>
		</div>
        </a>
		

        <a href="Wedding_Band/Festivals.php.html">
        <div class = "linkcontainer2">
		    <div class = "thelink">
		        <img src="img/links/FestivalPage_Colour.jpg" alt="Paris">
			
		        <div class = "textoverlay">
                    <h3>Festivals</h3>
                    <span>Parties, Festivals, Bar/Bat Mitzvahs, any event, large or small.</span>
		        </div>
				
		    </div>
		</div>
        </a>
		
		
	</div>
	
	<!-- REVIEWS AND RECOGNITION -->
	<div class = "reviewsandrecognition">
	
	    <div class = "clientssay">
	        <h2>OUR CLIENTS SAY</h2>	
			
			<blockquote class = "quote">
			    <h3> One of the best decisions we made </h3>
                <p>SPECTACULAR! Hiring the Bachelor Boys Band was one of the best decisions we made for our wedding. Not only were they incredibly easy to work with and helped us think of every detail for the 
				night, they played amazing music all night that both our parents friends and ourfriends knew! They did an incredible job of MCing the event and organized the wedding party for the announcement 
				so we didnt have to think about it. They also easily took care of every aspect of music for the evening through the ceremony, cocktail hour and reception, and covered totally different types of 
				music throughout the night. During the reception, they had guests dancing the entire time, right until the end. Most of our guests told us the next day that was one of the best wedding bands they 
				had ever heard, and one of our friends even said he danced more in the first 20 minutes of our wedding than he had cumulatively at many others. I cannot recommend these guys highly enough!</p>
				<h6>Review via TheKnot On 3/30/2016 by Quinn T.</h6>
			</blockquote>
			
			<blockquote class = "quote">
            <h3> Absolutely amazing Band!! </h3>
            <p>Absolutely amazing Band!! If we could give them more stars we would. From the very first email interaction to the last song of the night, the Bachelor Boys Band was perfect and one of our best 
			decisions for our wedding! The musicians are very talented, friendly, and fun! They created a great vibe for the evening. And the coordinator for the pre-event details was absolutely wonderful - he 
			was very responsive, accommodating, and I was never left with any doubt about our decision to have the Band at our reception. Our dance floor was never empty - even our 85 yr old grandparents danced 
			for a majority of the night!! If youre considering Bachelor Boys Band for your event, you will not be disappointed!</p>
			<h6>Review via TheKnot On 3/27/2016 by Jaime F.</h6>
			</blockquote>
			
			<blockquote class = "quote">
            <h3> We would hire them again! </h3>
            <p>The Bachelor Boys were great! They were so helpful leading up to the day of the wedding. My daughter had choreographed a dance for her and her dad and they helped with the music for that - mixing 
			the music. They were so flexible and willing to help! The music was great and everybody really enjoyed them! We had the 6 piece band and that was the perfect size. The horns really added a lot to the 
			sound of the music. We thought it was well worth the money!!!! We would hire them again!</p>
            <h6>Review via WeddingWire On 1/02/2016 by Susan.</h6>
			</blockquote>
			
			<blockquote class = "quote">
            <h3>The party is taken care of! </h3>
            <p>All I have to say is WOW! We stumbled across the Bachelor Boys Band on youtube and instantly were impressed! After seeing them in a showcase it was a done deal and we knew we were booking them for 
			our wedding! Amber was our point of contact from day 1 and she made everything so EASY and stress free! She was quick to respond to all of my questions and made planning a breeze. At our wedding at 
			The Waterfall, they were able to accommodate a 2 piece for the ceremony, a 3 piece jazz piece for the cocktail hour, and a full 10 piece band for our reception with them MCing and DJing between sets! 
			Every single part was fantastic and my guests are still raving about the music. They did NOT disappoint! I only wish we could have stayed longer as my guests were still on the dance floor (I had a party 
			crowd for sure, and there was no one sitting!). THANK you Amber & the entire band for an unforgettable night!</p>
            <h6>Review via WeddingWire On 11/14/2016 by Rachel.</h6>
			</blockquote>
			
			<blockquote class = "quote">
            <h3> EXCELLENT BAND </h3>
            <p>I wanted a young energetic band that could appeal to my friends in their 20s and 30s and to my family, many of whom are in their older years. This band was able to make a wide range of people happy 
			and keep them energetically on the dance floor. Diego was our MC and was very polite and pleasant to work with on the wedding day. Andrew, the manager, was amazing. We had a lot of hesitation about 
			spending the extra money to hire a band over a DJ and Andrew was willing to work with us and answer all of our questions and provide suggestions for us to get what we wanted. In the end I am thrilled 
			that we went with this band, and I would truly recommend them!</p>
            <h6>Review via TheKnot On 10/19/2015 by Carolyn B</h6>
			</blockquote>
			
	    
			
			<button class="quotebuttonleft" onclick="plusDivs(-1)">&#10094;</button>
            <button class="quotebuttonright" onclick="plusDivs(1)">&#10095;</button>
			
		</div>	
	   
		<!-- Script for quote carousel -->
		<script>
            var quoteIndex = 1;
            showDivs(quoteIndex);

            function plusDivs(n) 
			    {
                    showDivs(quoteIndex += n);
                }

            function showDivs(n) 
			    {
                    var i;
                    var x = document.getElementsByClassName("quote");
					
                    if (n > x.length) {quoteIndex = 1}    
                    if (n < 1) {quoteIndex = x.length}
                    for (i = 0; i < x.length; i++) 
					{
                        x[i].style.display = "none";  
                    }
				
                    x[quoteIndex-1].style.display = "block";  
                }
        </script>
		
		
		<div class="awards">
		    <h2>RECOGNITION</h2>

			<div class = "awardsimagecontainer">
                <img src="img/awards/CouplesChoice2015.png" alt="Wedding Wire - Couple%27s Choice 2015" />
			</div>
			
			<div class = "awardsimagecontainer">
			    <img src="img/awards/CouplesChoice2016.png" alt="Wedding Wire - Couple%27s Choice 2016" />
			</div>
			
			<div class = "awardsimagecontainer">
                <img src="img/awards/CouplesChoice2017.png" alt="Wedding Wire - Couple%27s Choice 2017" />
			</div>
			
			
            <div class = "awardsimagecontainer">
                <img src="img/awards/2015BOW_VendorProfile_Blue_300x300.jpg" alt="The Knot - Best of Weddings 2015" />
			</div>
			
			<div class = "awardsimagecontainer">
                <img src="img/awards/2016BOW_VendorProfile_Blue_300x300.jpg" alt="The Knot - Best of Weddings 2016" />
			</div>
			
			<div class = "awardsimagecontainer">
                <img src="img/awards/2017BOW_VendorProfile_Blue_300x300.jpg" alt="The Knot - Best of Weddings 2017" />
			</div>
			
			
            <div class = "awardsimagecontainer">
                <img src="img/awards/BB2016.jpg" alt="B&B Award 2016" />
			</div>
			
			<div class = "awardsimagecontainer">
                <img src="img/awards/BB2017.jpg" alt="B&B Award 2017" />
			</div>
			
			<div class = "awardsimagecontainer">
                <img src="img/awards/gay_weddings_icon.jpg" alt="Gay Weddings by Weddingwire.com" />
			</div>

        </div>
		  
      
		
	</div>
	
	<!-- Contact -->
	<div class = "contactrow">
	
	    <div class="promopack">
	        <a href="Wedding-Bands/Wedding-Bands-Contact-Details.php.html">Get a promo pack with a free demo CD</a>
	    </div>
		
	    <div class="contact">
	        <a href="Wedding-Bands/Wedding-Bands-Contact-Details.php.html">Contact Us</a>
	    </div>
		
	</div>
	
	<!-- Quote -->
	<div class="getyourquote">
	    <a href="Wedding-Bands/Wedding-Bands-Contact-Details.php.html">Get your quote now</a>
	</div>
	
	<!-- footer -->
	<footer class= "thefoot">
	
<!-- Company -->
	    <div class="contact-info-container">
		    <div class="company">
			    <span class="bandName">Bachelor Boys Band</span>, 
			    <span class="address">111 Congress Street, Suite 400, Austin, TX 78701</span>
		    </div>
<!-- General Contact -->
		    <div class="general-contact">
			    <span class="label">General Contact</span> | 
			    <span class="name">Adam Hopkins</span> | 
			    <span class="phone"><a target="_blank" href="tel:(517)775-2815" >(517) 775-2815</a> | </span>
			    <span class="email"><a target="_blank" href="mailto:adam@BachelorBoysBand.com?subject=Inquiry | Bachelor Boys Band">adam@BachelorBoysBand.com</a></span>
		    </div>
<!-- Emergency Contact -->
		    <div class="emergency-contact">
			    <span class="label">Emergency Contact</span> | 
			    <span class="phone"><a target="_blank" href="tel:(917)834-2122">(917) 834-2122</a></span>
		    </div>
	    </div>

	    <div class="social">
			<a class="facebook" title="Bachelor Boys Band on Facebook"  target="_blank" href="http://www.facebook.com/BachelorBoysBand"></a>
			
			<a class="instagram" title="Bachelor Boys Band on Instagram" target="_blank" href="http://www.instagram.com/bachelorboysband"></a>
		
			<a class="twitter" title="Bachelor Boys Band on Twitter"  target="_blank" href="http://www.twitter.com/BachelorBand"></a>
			
			<a class="googleplus" title="Bachelor Boys Band on Google+"  target="_blank" href="http://plus.google.com/110706503156085390666"></a>
				
		    <!-- <a class="pinterest" target="_blank" href="#"></a> -->

	    </div>

	
    </footer>
	
	
	
	
	
	
	


</div>
</body>
</html>