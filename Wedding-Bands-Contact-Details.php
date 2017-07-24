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
		
		    <a href="index.php" title="Who We Are">WHO WE ARE</a>
		
		    <a href="Wedding-Bands.php" title="Weddings">WEDDINGS</a>
		
		    <a href="Corporate.php" title="Corporate Events">CORPORATE EVENTS</a>
		
		    <a href="Festivals.php" title="Festivals">FESTIVALS</a>
		
		    <a href="Wedding-Bands-Gig-Guide.php" title="See Us Play">SEE US PLAY</a>
		
		    <a href="Wedding-Bands-Songs.php" title="Our Music">OUR MUSIC</a>
		
		    <a href="Wedding-Bands-Contact-Details.php" title="Contact Us"><span class = "imhere">CONTACT US</span></a>
		
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
		    <img class="mySlides w3-animate-fading" src="img/wedding_band_contact_01.jpg" alt="Bachelor Boys Band - Wedding Band  - Weddings" style="width:100%">
            <img class="mySlides w3-animate-fading" src="img/wedding_band_contact_02.jpg" alt="Bachelor Boys Band - Wedding Band  - Weddings" style="width:100%">
            <img class="mySlides w3-animate-fading" src="img/wedding_band_contact_03.jpg" alt="Bachelor Boys Band - Wedding Band  - Weddings" style="width:100%">
            <img class="mySlides w3-animate-fading" src="img/wedding_band_contact_04.jpg" alt="Bachelor Boys Band - Wedding Band  - Weddings" style="width:100%">
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

    <!-- contact -->
    <div class = "contactcontainer">
	
	    <h1>CONTACT US</h1>
		
		<div class = "formcontainer">
		
		    <form action="../Astro/DB/ConfirmSentEnquiry.php" method="post">
			
			    <!-- First Name -->
                <div class="contactform">
				    <label for="ClientFirstName text">First Name</label>
                    <input class="init" type="text" name="ClientFirstName" placeholder="First Name" />
			    </div>
				
				<!-- Last Name -->
                <div class="contactform">
				    <label for="ClientSurname text">Last Name</label>
                    <input class="init" type="text" name="ClientSurname" placeholder="Last Name" />
				</div>
				
				<!-- Email address -->
                <div class="contactform">
				    <label for="ClientEmailAddress text">Email address</label>
                    <input class="init" type="text" name="ClientEmailAddress" placeholder="Email address" />
				</div>
				
				<!-- Phone number -->
				<div class="contactform">
				    <label for="ClientPhoneNumber text">Phone number</label>
                    <input class="init" type="text" name="ClientPhoneNumber" placeholder="Phone number" />
				</div>
				
				<!-- Event date -->
				<div class="contactgroup">
				    
					<p>Event date [For band availability]</p>
					
					<div class = "contactinput">
					<label for="EventDateYear select">Year</label>
					<select name="EventDateYear">
					<option value="Year">Year</option>
                    <option value="---">---</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					</select>
					</div>
					
					<div class = "contactinput">
					<label for="EventDateMonth select">Month</label>
					<select name="EventDateMonth">
					<option value="Month">Month</option>
					<option value="---">---</option>
					<option value="1">January</option>
                    <option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
                    <option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
                    </select>
					</div>
					
					<div class = "contactinput">
					<label for="EventDateDay select">Day</label>
					<select name="EventDateDay">
					<option value="Day">Day</option>
					<option value="---">---</option>
					<option value="1">1</option>
                    <option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
                    <option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
                    <option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
                    <option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
                    <option value="30">30</option>
					<option value="31">31</option>
					</select>
					</div>
					
					<div class="contactinput">
					    <label for="ReceptionVenueName text">Venue Name</label>
					    <input class="init" type="text" name="ReceptionVenueName" placeholder="Venue Name" />
					</div>
					
					<div class="contactinput">
					    <label for="ReceptionVenueSuburb text">Venue Town/Suburb</label>
					    <input class="init" type="text" name="ReceptionVenueSuburb" placeholder="Venue Town/Suburb" />
					</div>
					
					<div class="contactinput">
					    <label for="ReceptionVenueState select">Venue State</label>
					        
						<select name="ReceptionVenueState">
					
					        <option value="State">State</option>
					        <option value="AL">AL</option>
                            <option value="AK">AK</option>
					        <option value="AZ">AZ</option>
                            <option value="AR">AR</option>
							<option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DE">DE</option>
                            <option value="DC">DC</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="IA">IA</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="ME">ME</option>
                            <option value="MD">MD</option>
                            <option value="MA">MA</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MS">MS</option>
                            <option value="MO">MO</option>
                            <option value="MT">MT</option>
                            <option value="NE">NE</option>
                            <option value="NV">NV</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>
                            <option value="NY">NY</option>
                            <option value="NC">NC</option>
                            <option value="ND">ND</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VT">VT</option>
                            <option value="VA">VA</option>
                            <option value="WA">WA</option>
                            <option value="WV">WV</option>
                            <option value="WI">WI</option>
                            <option value="WY">WY</option>
                            <option value=""></option>
                            <option value="--">--</option>
                            <option value=""></option>
                            <option value="AS">AS</option>
                            <option value="GU">GU</option>
                            <option value="MP">MP</option>
                            <option value="PR">PR</option>
                            <option value="VI">VI</option>
                            <option value="FM">FM</option>
                            <option value="MH">MH</option>
                            <option value="PW">PW</option>
                            <option value="AA">AA</option>
                            <option value="AE">AE</option>
                            <option value="AP">AP</option>
                            <option value="CZ">CZ</option>
                            <option value="PI">PI</option>
                            <option value="TT">TT</option>
                            <option value="CM">CM</option>
                            <option value=""></option>

                        </select>
                    </div>

                    <div class="contactinput">
                        <p>Free Demo CD (Express Post) [optional]</p>
                    </div>
					
                    <div class="contactinput">
                        <label for="ClientMailingAddressLine1 text">Address[line 1]</label>
                        <input class="init" type="text" name="ClientMailingAddressLine1" placeholder="Address [line 1]" />
                    </div>

                    <div class="contactinput">
                        <label for="ClientMailingAddressLine2 text">Address [line 2 - optional]</label>
                        <input class="init" type="text" name="ClientMailingAddressLine2" placeholder="Address [line 2 - optional]" />
                    </div>

                    <div class="contactinput">
                        <label for="ClientMailingSuburb text">City</label>
                        <input class="init" type="text" name="ClientMailingSuburb" placeholder="City" />
                    </div>

                    <div class="contactinput">
                        <label for="ClientMailingState select">State</label>

						<select name="ClientMailingState">
                            <option value="State">State</option>
                            <option value="AL">AL</option>
                            <option value="AK">AK</option>
                            <option value="AZ">AZ</option>
                            <option value="AR">AR</option>
                            <option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DE">DE</option>
                            <option value="DC">DC</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="IA">IA</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="ME">ME</option>
                            <option value="MD">MD</option>
                            <option value="MA">MA</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MS">MS</option>
                            <option value="MO">MO</option>
                            <option value="MT">MT</option>
                            <option value="NE">NE</option>
                            <option value="NV">NV</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>
                            <option value="NY">NY</option>
                            <option value="NC">NC</option>
                            <option value="ND">ND</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VT">VT</option>
                            <option value="VA">VA</option>
                            <option value="WA">WA</option>
                            <option value="WV">WV</option>
                            <option value="WI">WI</option>
                            <option value="WY">WY</option>
                            <option value=""></option>
                            <option value="--">--</option>
                            <option value=""></option>
                            <option value="AS">AS</option>
                            <option value="GU">GU</option>
                            <option value="MP">MP</option>
                            <option value="PR">PR</option>
                            <option value="VI">VI</option>
                            <option value="FM">FM</option>
                            <option value="MH">MH</option>
                            <option value="PW">PW</option>
                            <option value="AA">AA</option>
                            <option value="AE">AE</option>
                            <option value="AP">AP</option>
                            <option value="CZ">CZ</option>
                            <option value="PI">PI</option>
                            <option value="TT">TT</option>
                            <option value="CM">CM</option>
                            <option value=""></option>
                        </select>
                    </div>
					
					
					<div class="contactinput">
                        <label for="ClientMailingPostcode text">ZIP</label>
                        <input class="init" type="text" name="ClientMailingPostcode" placeholder="ZIP" />
                    </div>

                    <div class="contactinput">
				        <label for="ClientMailingCountry text">Country</label>
					    <input class="init" type="text" name="ClientMailingCountry" placeholder="Country" />
				    </div>

                    <div class="contactinput">
                        <p>Please tell us a little more about your event<span> [optional]</span></p>
                        <textarea class="init" name="InitialEnquiryComments" data-default="Please tell us a little more about your event [optional]">Please tell us a little more about your event [optional]</textarea>
				    </div>
				
				    <div class="submitinput">
				        <input type="submit" name="submit" value="Submit" />
				    </div>


		
		        </div>
	        </form>
		</div>
		
		
		
		 
	
	    <div class = "clientssay2">
	        <h2>FAQ</h2>	
			
			<blockquote class = "quote2">
			    <h3> How long should I have the band play for? </h3>
                <p>Usually, we quote for a 5 hour event – this is the “industry standard” length – but it can be lengthened with little cost.  Naturally, the band cannot physically play continuously for this 
				entire 5 hour period, and so you’ll need to schedule the band to play at the most effective times.  We recommend 4 x 45min sets, to be spread throughout the night as you feel best.  With speeches 
				and other formalities, you’ll find that this is usually the perfect amount of time to have the band playing.  See further below for our recommendations on how to get the most out of these sets.  
				Also note that we are always very flexible to your needs, and anything can be customized to your plan – this is all just a “recommendation”.  Talk to us about your ideas and dreams!  We’ll do our 
				best to accommodate (within reason!!)…</p>
			</blockquote>
			
			<blockquote class = "quote2">
                <h3>What happens during the breaks between band sets?</h3>
                <p>As a free service to you, we always bring basic DJ equipment so that the room is still buzzing when the band is not playing.  If you like, you can bring your own iPod for these breaks, or just leave 
			    it up to us if you prefer – we always carry a selection of appropriate background and “dance floor” music.  By the time you get to the main course, you’ll find that the room is too noisy for a 
			    background band anyway, so we recommend quiet iPod background music during this time too.  If you are looking for specific songs to be played at these times, we strongly recommend bringing an iPod, 
			    which we will happily manage for you, free of charge.  Alternatively, just leave it up to us.</p>
			</blockquote>
			
			<blockquote class = "quote2">
                <h3>How do I choose what music will be played by the band over the course of the night?</h3>
                <p>Here is what we recommend – a compromise.  Give the lead singer plenty of room to decide what is right for that moment.  But give us a good indication of the kind of music that you love and hate.  
			    A great way to do this is to look at our songlist on the website.</p>
			</blockquote>
			
			<blockquote class = "quote2">
                <h3>What is the best way to spread the music throughout the night?</h3>
                <p>We have found that the best way to spread out the music is to divide the band time into 4 x 45min sets.</p>
			</blockquote>
			
	    
			
			<button class="quotebuttonleft" onclick="plusDivs(-1)">&#10094;</button>
            <button class="quotebuttonright" onclick="plusDivs(1)">&#10095;</button>
			
		
	   
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
                    var x = document.getElementsByClassName("quote2");
					
                    if (n > x.length) {quoteIndex = 1}    
                    if (n < 1) {quoteIndex = x.length}
                    for (i = 0; i < x.length; i++) 
					{
                        x[i].style.display = "none";  
                    }
				
                    x[quoteIndex-1].style.display = "block";  
                }
        </script>
		
		
		</div>
	</div>

<?php  
require_once('footer.php');  
?>  
	
	
	
	
	
	


</div>
</body>
</html>
   
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	