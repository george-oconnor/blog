<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="blog_stylesheet.css">
	<script async src="https://www.tiktok.com/embed.js"></script>
	
	<title>Blog</title>
</head>
<body>
	<a id="top"></a>
	<div class="header">
		<h2>George's Projects Blog</h2>
	</div>
	

	<div class="row">
	  <div class="leftcolumn">

	  	<a id="intro">
	    	<div class="card">
	      		<h2>Introduction</h2>
	      		<h5>Title description, Dec 7, 2017</h5>
	      		<div class="fakeimg" style="height:200px;">Image</div>
	      		<p>This is an even newer new test change</p>
	      		<button type="button" onclick="window.location.href = 'http://<?php echo $_SERVER['HTTP_HOST']; ?>/refresh/shell.php';">Click Me!</button>
	    	</div>
		</a>

		<a id="vimeo-api">
	    	<div class="card">
	      		<h2>Vimeo API</h2>
	      		<h5>Title description, Feb 2, 2022</h5>
	      		<div class="fakeimg" style="height:200px;">Image</div>
	      		<p>Some text..</p>
	    	</div>
		</a>

		<a id="thesis">
	    	<div class="card">
	      		<h2>Thesis Project</h2>
	      		<h5>Title description, Dec 7, 2017</h5>
	      		<div class="fakeimg" style="height:200px;">Image</div>
	      		<p>Some text..</p>
	    	</div>
		</a>

	  	<a id="macbook-repair"></a>
    	<div class="card">
    		
      		<h2>MacBook Repair</h2>
      		<h5>2017 A1708 13" MacBook Pro display assembly replacement due to 'flexgate' damage - Feb 2, 2022 - <a href="./macbook-repair/">view full post</a></h5>
      		
	      		<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@george.oconnor/video/7060202625471384837" data-video-id="7060202625471384837" style="max-width: 720px;min-width: 325px;" > 
	      			<section> 
	      				<a target="_blank" title="@george.oconnor" href="https://www.tiktok.com/@george.oconnor">@george.oconnor</a> 
	      				2017 13 inch Macbook Pro display assembly replacement caused by ‘flexgate’ display cable issue 
	      				<a title="pepsiapplepiechallenge" target="_blank" href="https://www.tiktok.com/tag/pepsiapplepiechallenge">#PepsiApplePieChallenge</a> <a title="apple" target="_blank" href="https://www.tiktok.com/tag/apple">#apple</a> 
	      				<a title="macbook" target="_blank" href="https://www.tiktok.com/tag/macbook">#macbook</a> 
	      				<a title="macbookpro" target="_blank" href="https://www.tiktok.com/tag/macbookpro">#macbookpro</a> 
	      				<a title="repair" target="_blank" href="https://www.tiktok.com/tag/repair">#repair</a> 
	      				<a title="righttorepair" target="_blank" href="https://www.tiktok.com/tag/righttorepair">#righttorepair</a> 
	      				<a title="display" target="_blank" href="https://www.tiktok.com/tag/display">#display</a> 
	      				<a title="flexgate" target="_blank" href="https://www.tiktok.com/tag/flexgate">#flexgate</a> 
	      				<a title="ireland" target="_blank" href="https://www.tiktok.com/tag/ireland">#ireland</a> 
	      				<a title="repairtok" target="_blank" href="https://www.tiktok.com/tag/repairtok">#repairtok</a> 
	      				<a target="_blank" title="♬ FEEL THE GROOVE - Queens Road, Fabian Graetz" href="https://www.tiktok.com/music/FEEL-THE-GROOVE-6769046027488987137">♬ FEEL THE GROOVE - Queens Road, Fabian Graetz</a> 
	      			</section> 
	      		</blockquote>
      		
      		
    	</div>

	    <a id="rack-overview">
	    	<div class="card">
	      		<h2>Rack Overview</h2>
	      		<h5>Title description, Sep 2, 2017</h5>
	      		<div class="fakeimg" style="height:200px;">Image</div>
	      		<p>Some text..</p>
	    	</div>
		</a>

	  </div>
	  <div class="rightcolumn">

	    <div class="card">
	      <h2>About Me</h2>
	      <img id="profilePic" src="./profile.jpg">
	      <p>My name is George O Connor and I am a final year Theoretical Physics student at Trinity College Dublin, Ireland. Here is a collection of my projects and work relating to CS.</p>
	    </div>

	    <div class="card">
	      <h3>All Posts</h3>
	      <!--<div class="fakeimg">Image</div><br>
	      <div class="fakeimg">Image</div><br>
	      <div class="fakeimg">Image</div>-->
	      <ul>
	      		<li><a href="#intro">Introduction</a></li>
				<li><a href="#rack-overview">Rack Overview</a></li>
				<li>Network Setup</li>
				<li>Truenas Box</li>
				<li>Dell r610</li>
				<li>OpenVPN</li>
				<li><a href="#vimeo-api">Vimeo API</a></li>
				<li>Proxmox</li>
				<li>Windows-Server</li>
				<li><a href="#thesis">Thesis Project</a></li>
				<li>Plex + ARM + Dell r210</li>
				<li>Webserver + Cloudflare + Kemp</li>
				<li>Truenas</li>
				<li>Old Projects</li>
				<li>Pi Setup</li>
				<li><a href="#macbook-repair">MacBook Repair</a></li>
			</ul>
	    </div>

	    <div class="card">

	      	<h3>Contact Me</h3>

	      	<div id="emailLinkDiv"><a id="emailLink" href="mailto:george@georgestools.com">george@georgestools.com</a></div>

	      	<div class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="light" data-type="HORIZONTAL" data-vanity="georgeoconnor-tcd" data-version="v1">
	      		<!--<a class="badge-base__link LI-simple-link" href="https://ie.linkedin.com/in/georgeoconnor-tcd?trk=profile-badge">George O Connor</a>-->
	      	</div><script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>

	     	<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@george.oconnor" data-unique-id="george.oconnor"  data-embed-type="creator" style="max-width: 372px; min-width: 290px;" > <section> <a target="_blank" href="https://www.tiktok.com/@george.oconnor?refer=creator_embed">@george.oconnor</a> </section> </blockquote> 

	      	<div class="github-card" data-github="george-oconnor" data-width="100%" data-height="151" data-theme="medium"></div>
			<script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
	    </div>

	  </div>
	</div>

	<div class="footer">
	  <a href="#top">Back to Top</a>
	</div>

</body>
</html>