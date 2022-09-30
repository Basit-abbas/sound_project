<!DOCTYPE HTML>
<html lang="en">

<head>
  <title>Music Website Template</title>
  
  <meta name="viewport" content="width=device-width" />
  <meta name="description" content="Music website coded in HTML, CSS, and JQuery" />
  <meta name="keywords" content="msuic, website, template, responsive" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="icon" type="image/png" href="http://waldronmatthew.com/favicon.png">
  
  <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css" title="style" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!-- scoll-fix resolves Firefox anchor location bug -->
  <!-- When clicking a navigation option from a different page it does not accurately go to the intended id tag area. -->
  <!-- This script reloads the page to force the anchor into the right location -->
  <script>
	function now(){
		window.location.reload(true);
	}
  </script>
  
</head>

<body>
	
    <header>
		<div id="logo">
          <h1><a href="index.html">BE MUSIC</a></h1>
		
      </div>
	 </header>
	 
		<nav class="container">
			<ul class="clearfix" id="cfix">
				<li class="icon" id="icon">
					<a href="javascript:void(0);" onclick="myMenu()">&#9776; Menu</a>
				</li>
				<li>
					<ul class="scroll" id="scroll">
						<li><a href="#home">Home</a></li>											
						<li><a href="#music">Music</a></li>
						<li><a href="#videos">Videos</a></li>
						<li><a href="#about">About</a></li>							
						<li><a href="#contact">Contact</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	  
	<section id="home">
	<hr class="horizontal" />
	<div class="hero">
		<div id="overlay">
			<div class="hero-text">

				<h2>California Blues Live</h2>
				<p>Acoustic live session ft. Jane Doe</p>
				
				<div class="pagesbar-music">
					<ul class="pages-music">
						<li><a href="index.html#videos">Click Here to Watch</a></li>
					</ul>	
				</div>			
			 
				<div id="go-btm"><a href="#about" class="go-btm">&#9660;</a></div>
			</div>
		</div>
	</div>

	</section>
			
	<?php include 'about.php'; ?>
			
		<div class="anchor-box">
			<hr class="horizontal" />
			<section id="merch">
			<h3 class="anchor">Merch</h3>
			</section>
			<hr class="horizontal" />
		</div>

			<ul class="grid">
				<li class="grid_item span j"><a href="index.html" class="grid_link"><div class="tile">New Lgog Designs</div></a></li>
				<li class="grid_item span k"><a href="index.html" class="grid_link"><div class="tile">All T-Shirts 20% Off</div></a></li>
				<li class="grid_item span l"><a href="index.html" class="grid_link"><div class="tile">Women's Apparel</div></a></li>
			</ul>

		<div class="anchor-box">
			<hr class="horizontal" />
			<section id="subscribe">
			<h3 class="anchor">Subscribe</h3>
			</section>
			<hr class="horizontal" />
		</div>
		
			<form id="email-form">
					<div class="form_settings">
					<h2>Join our Mailing List</h2>
					<p>Subscribe to get the latest news, tour dates, and mailing list exclusives</p>
						<div class="field">
							<input type="email" name="email" placeholder="jane.doe@gmail.com" required />
						</div>
							
						<div id="myBtn">
							<div class="field">
								<input type="button" value="submit" class="submit"/>
							</div>
						</div>					
					</div>
			</form>
			
			<div id="myModal" class="modal">

			<div class="modal-content">
			<span class="close">&times;</span>
				<div class="center">
				<p>Thanks for joining our mailing list!</p>
				<p><a href="https://docs.google.com/spreadsheets/d/1lqfvMxZgZgZkYTMEHQfcmEHSunweDe9XukE-aVWE2PY/edit?usp=sharing" target="blank" >Click here</a> to view the email address you entered.</p>
				</div>
			</div>

			</div>
		
			<div id="myError" class="modal">

				<div class="modal-content">
				<span class="close_error">&times;</span>
					<div class="center">
					<p>Invalid email address. Please try again.</p>
					</div>
				</div>

			</div>		
			
		<div class="anchor-box">
		<hr class="horizontal" >
		<section id="music">
		<h3 class="anchor">Music</h3>
		</section>
		<hr class="horizontal" >
		</div>

			<div class="music-hero">
					<div id="music-overlay">
						<div class="hero-text">

				<h2>Kaleidoscope Memories</h2>
				<div class="pagesbar-music">
					<ul class="pages-music">
						<li><a href="index.html">Stream</a></li>
					</ul>	
				</div>


				<ul class="social_media_music">
				
				<li><a href="index.html">
				<img src="pictures/icons/itunes.png" alt="iTunes" /></a></li>
				
				<li><a href="index.html">
				<img src="pictures/icons/spotify.png" alt="Spotify" /></a></li>
				
				<li><a href="index.html">
				<img src="pictures/icons/play.png" alt="Google Play" /></a></li>

				<li><a href="index.html">
				<img src="pictures/icons/amazon.png" alt="Amazon" /></a></li>

				</ul>
				
					</div>
				</div>
			</div>
		
			<div id="audio-players"></div>

			
		<div class="anchor-box">
			<hr class="horizontal" />
			<section id="news">
			<h3 class="anchor">News</h3>
			</section>
			<hr class="horizontal" />
		</div>

			<ul class="grid">
				<li class="grid_item span g"><a href="blog_video.html" class="grid_link"><div class="tile">New Music Video</div></a></li>
				<li class="grid_item span h"><a href="blog_tour.html" class="grid_link"><div class="tile">Tour Dates Announced</div></a></li>
				<li class="grid_item span i"><a href="blog_studio.html" class="grid_link"><div class="tile">In the Studio</div></a></li>
			</ul>
			
		<div class="anchor-box">
			<hr class="horizontal" />
			<section id="press">
			<h3 class="anchor">Press</h3>
			</section>
			<hr class="horizontal" />
		</div>
				<table>
					<tr>
						<td>"Fusce commodo malesuada ipsum non volutpat. Nulla quis ullamcorper leo, nec tristique lorem."</td>
					</tr>
					<tr>
						<td><b>A&M Press</b></td>
					</tr>  
					<tr>
						<td>"Nulla quis ullamcorper leo, nec tristique lorem."</td>
					</tr>
					<tr>
						<td><b>Kstudio Productions</b></td>
					</tr>  
					<tr>
						<td>"Fusce commodo malesuada ipsum non volutpat, nulla quis ullamcorper."</td>
					</tr>
					<tr>
						<td><b>The Courant News</b></td>
					</tr>
					<tr>
						<td>"Nulla quis ullamcorper leo, nec tristique lorem. Nulla quis ullamcorper leo."</td>
					</tr>
					<tr>
						<td><b>Jane Doe - Singer / Songwriter</b></td>
					</tr>
				</table>
		
		
			<div class="anchor-box">
			<hr class="horizontal" />
			<section id="videos">
			<h3 class="anchor">Videos</h3>
			</section>
			<hr class="horizontal" />
			</div>
			
				<div class="flexbox-video">
				<div class="video">
					<h4 class="center">Coldplay - Fix You</h4>
					<div class="youtube-player" data-id="k4V3Mo61fJM"></div>
				</div>
			
				<div class="video">
					<h4 class="center">Adele - Hello</h4>
					<div class="youtube-player" data-id="YQHsXMglC9A"></div>
				</div>
				</div>
				
			
			<div class="anchor-box">
			<hr class="horizontal" />
			<section id="shows">
			<h3 class="anchor">Shows</h3>
			</section>
			<hr class="horizontal" />
			</div>
			
			<div class="flexbox-shows">

				<div class="shows-text">
						<div class="center"><h4>New York Theatre</h4></div>
						<div class="center"><p>Albany, NY</p></div>
						<div class="center"><p>April 15th | 8 - 10 PM</p></div>
				
				<div class="pagesbar">
					<ul class="pages">
						<li><a href="index.html">Buy Tickets</a></li>
					</ul>	
				</div>
				</div>

				<div class="shows-text">
						<div class="center"><h4>California Music Hall</h4></div>
						<div class="center"><p>Sacramento, CA</p></div>
						<div class="center"><p>April 18th | 4 - 5 PM</p></div>
				
				<div class="pagesbar">
					<ul class="pages">
						<li><a href="index.html">Buy Tickets</a></li>
					</ul>	
				</div>
				</div>
				
				<div class="shows-text">
						<div class="center"><h4>St. Louis Stadium</h4></div>
						<div class="center"><p>St. Louis, MO</p></div>
						<div class="center"><p>May 3rd | 8 - 12 PM</p></div>
				
				<div class="pagesbar">
					<ul class="pages">
						<li><a href="index.html">Buy Tickets</a></li>
					</ul>	
				</div>
				</div>
				
				<div class="shows-text">
						<div class="center"><h4>Hartford Fair</h4></div>
						<div class="center"><p>Hartford, CT</p></div>
						<div class="center"><p>May 6th | 2 - 3 PM</p></div>
				
				<div class="pagesbar">
					<ul class="pages">
						<li><a href="index.html">Buy Tickets</a></li>
					</ul>	
				</div>
				</div>

				<div class="shows-text">
						<div class="center"><h4>Boston Park</h4></div>
						<div class="center"><p>Boston, MA</p></div>
						<div class="center"><p>May 27th | 10 - 2 PM</p></div>
				
				<div class="pagesbar">
					<ul class="pages">
						<li><a href="index.html">Buy Tickets</a></li>
					</ul>	
				</div>
				</div>
				
				<div class="shows-text">
						<div class="center"><h4>Nashville Center</h4></div>
						<div class="center"><p>Nasville, TN</p></div>
						<div class="center"><p>April 19th | 10 - 11:30 AM</p></div>
				
				<div class="pagesbar">
					<ul class="pages">
						<li><a href="index.html">Buy Tickets</a></li>
					</ul>	
				</div>
				</div>
				
			</div>


			<div class="anchor-box">
			<hr class="horizontal" />
			<section id="photos">
			<h3 class="anchor">Photos</h3>
			</section>
			<hr class="horizontal" />
			</div>
				
			<ul class="grid">
			    <li class="grid_item span a"><a href="pictures/gallery/light-show.jpg" class="grid_link" data-lightbox="pics" data-title="Light show"></a></li>
				<li class="grid_item span b"><a href="pictures/gallery/synth.jpg" class="grid_link" data-lightbox="pics" data-title="Playing synth"></a></li>
				<li class="grid_item span c"><a href="pictures/gallery/singing.jpg" class="grid_link" data-lightbox="pics" data-title="Singing"></a></li>
				<li class="grid_item span d"><a href="pictures/gallery/guitar.jpg" class="grid_link" data-lightbox="pics" data-title="Playing guitar"></a></li>
				<li class="grid_item span e"><a href="pictures/gallery/bass.jpg" class="grid_link" data-lightbox="pics" data-title="Playing bass"></a></li>
				<li class="grid_item span f"><a href="pictures/gallery/concert.jpg" class="grid_link" data-lightbox="pics" data-title="Concert in CA"></a></li>
			</ul>
		
		<div class="anchor-box">
			<hr class="horizontal" />
			<section id="contact">
			<h3 class="anchor">Contact</h3>
			</section>
			<hr class="horizontal" />
		</div>
		
		<form id="contacts" name="htmlform" action="" method="post">
          <div class="form_settings">
            <input class="name" type="text" name="name" placeholder="Name" required />
            <input class="email" type="email" name="email" placeholder="Email" required />
			<input class="subject" type="text" name="subject" placeholder="Subject" required />
            <textarea class="message" rows="4" cols="50" name="message" placeholder="Message" required></textarea>
			<div>
            <input class="submit" type="submit" name="contact_submitted" value="submit" />
			</div>
          </div>
        </form>


	</div>
	</div>

	<footer>
		<ul id="social_media">
			<li><a href="index.html">
			<img src="pictures/icons/facebook.png" alt="Facebook" /></a></li>

			<li><a href="index.html">
			<img src="pictures/icons/instagram.png" alt="Instagram" /></a></li>
			
			<li><a href="index.html">
			<img src="pictures/icons/youtube.png" alt="YouTube" /></a></li>
			
			<li><a href="index.html">
			<img src="pictures/icons/twitter.png" alt="Twitter" /></a></li>
			
			<li><a href="index.html">
			<img src="pictures/icons/itunes.png" alt="iTunes" /></a></li>
			
			<li><a href="index.html">
			<img src="pictures/icons/spotify.png" alt="Spotify" /></a></li>

			<li><a href="index.html">
			<img src="pictures/icons/amazon.png" alt="Amazon" /></a></li>
						
			<li><a href="index.html">
			<img src="pictures/icons/play.png" alt="Google Play" /></a></li>
			
			<li><a href="index.html">
			<img src="pictures/icons/shop.png" alt="Store" /></a></li>
			
			<li><a href="index.html#mail">
			<img src="pictures/icons/mail.png" alt="Subscribe" /></a></li>
		</ul>
			
		<ul id="btmtext">
		  <li><h6><a href="terms.html">Copyright &copy; 2018 Your Artist / Band Name. All Rights Reserved.</a></h6></li>
		  <li><h6><a href="web.html">Website Credits</a></h6></li>
		</ul>
	</footer>
	
	<script src="js/mailingList.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/jquery.serialize-object.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/fixedNavMenu.js"></script>
	<script src="js/scroll.js"></script>
	<script src="js/musPlayer.js"></script>	
	<script src="js/vid.js"></script>
	<script src="js/lightbox.js"></script>
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" title="style">
</body>
</html>
