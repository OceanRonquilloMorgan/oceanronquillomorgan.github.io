<!-- 
	   _    (^)
      (_\   |_|
       \_\  |_|
       _\_\,/_|
      (`\(_|`\|
     (`\,)  \ \
      \,)   | | 
        \__(__|
        ~Fight On!

	Heyo! Welcome to my first attempt at making a personal website from scratch.
	In the near future, I plan on reworking the code and adding a USC-related easter egg (see the SC logo in the top left corner?) to spice things up a bit. 
	For now, enjoy the vanilla, and check out future projects on my Github:

	github.com/OceanRonquilloMorgan
 -->
<?php
if($_POST["message"]) {
    mail("oronquil@usc.edu", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!DOCTYPE html>
<html>
	<head>
	    <!-- Meta Tags and Title -->
	    <title>Ocean Ronquillo-Morgan</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset='utf-8'>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Ocean Ronquillo-Morgan. Entrepreneur, Developer, Trojan. USC Computer Science / Business Administration 2020."/>
	    <meta name="keyword" content= "Ocean Ronquillo-Morgan, Ronquillo-Morgan, Ocean, HTML, CSS, Java, Python, Bootstrap, Web Development"/>
	    <meta property='og:title' content="Ocean Ronquillo-Morgan. USC Computer Science / Business Administration 2020.">
	    <meta property="og:description" content="Entrepreneur, Developer, Trojan. USC Computer Science / Business Administration 2020."/>
	    <meta property='og:url' content="http://oceanronquillomorgan.com">

	    <!-- Website Icon -->
	    <link rel="icon" type="img/png" href="http://piq.codeus.net/static/media/userpics/piq_87354_400x400.png">

	    <!-- Bootstrap and CSS -->
	    <link rel="stylesheet" type="text/css" href="stylesheet.css">
	    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<div class="wrapper">

			<div id="hawaii" class="jumbotron text-center">

			<nav class="navbar navbar-static-top">
				<div id="nav-container" class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					    	<span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>
					</div>

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
					        <img id="fighton" class="nav-fighton" src="img/fighton.png">
					            <li><a class="nav-items" href="#about">BIO</a></li>
					            <li><a class="nav-items" href="#organizations">INVOLVEMENTS</a></li>
					            <li><a class="nav-items" href="#projects">PROJECTS</a></li>
					            <li><a id="contact-style" class="nav-items" href="#contact">CONTACT</a></li>
					    </ul>
					</div>
				</div>
			</nav>

				<div class="landing-text">
					<div class="container text-center">
						<h1>ocean ronquillo morgan</h1>
						<h3>entrepreneur, developer, trojan.</h3>

						<ul class="social-icons list-unstyled list-inline"> 
							<li><a href="https://www.linkedin.com/in/oceanronquillomorgan/" target="_blank" class="icon"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a></li><li><a href="https://github.com/OceanRonquilloMorgan/" target="_blank" class="icon"><i class="fa fa-github-square" style="font-size:36px"></i></a></li><li><a href="https://www.facebook.com/oceanronquillomorgan/" target="_blank" class="icon"><i class="fa fa-facebook-square" style="font-size:36px"></i></a></li><li><a href='mailto:oronquil@usc.edu' class="icon"><i class="fa fa-wpforms" style="font-size:36px"></i></a></li></ul>
					</div>
				</div>
			</div>
			
			<div id="about" class="container text-center">
				<div class="row">
					<div class="myinfo col-lg-8 col-md-6 col-sm-6">
						<div class="col-lg-8 col-md-6 col-sm-6">
						<h1>Aloha!</h1>
							<p>Ocean Ronquillo-Morgan is the name.</p>
							<p>Born in Honolulu, Hawaii, I was raised on an island for most of my life. I moved to Charleston, South Carolina for a few years. Now, I live in sunny Los Angeles, California.</p>
							<p>I currently attend the University of Southern California (2020) as a Computer Science and Business Administration major.</p>
							<p>Please feel free to talk or message me with any inquiries or opportunities at oronquil@usc.edu!</p>
							</div>
						<h1>Skills</h1>
							<p><b>Languages:</b> Java, Python, HTML/CSS, Javascript</p>
							<p><b>Frameworks:</b> Bootstrap, ReactJS</p>
							<p><b>Applications:</b> Xcode</p>
							<p><b>Business-Related:</b> Search Engine Optimization, Google Analytics</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
							<img id="me-img" class="img-responsive" src="img/dinnerme.png">
					</div>
				</div>
			</div>

			<div id="waves" class="jumbotron text-center">
				<div id="background-box">
					<h1><b>clubs</b></h1>
				</div>
			</div>

			<div id="organizations">
				<div class="container text-center">
				<h2>community service</h2>
					<div class ="row outer-organizations">
						<div class="border col-lg-6">
							<img class="club-images" src="img/tfla.jpg">
							<h3 class="text-uppercase"><b><a style="color:#333333;" href="http://teachforla.wixsite.com/teachforlausc" target="_blank">teach for los angeles</a></b></h3>
							<h4>tutor</h4>
							<p>I served as a writing and reading tutor for underserved students within the Los Angeles County school district, the nation’s second largest school district, which serves almost 700,000 students and the most diverse student populations.</p>
						</div>
						<div class="border col-lg-6">
							<img class="club-images" src="img/jep.jpg">
							<h3 class="text-uppercase"><b><a style="color:#333333;" href="https://dornsife.usc.edu/joint-educational-project" target="_blank">joint educational project</a></b></h3>
							<h4>instructor</h4>
							<p>I developed a comprehensive classroom curriculum with a group of two others and formed close-knit bonds with kindergarten students at a local elementary school to foster mindfulness and yoga practices to cultivate positivity, self-love, and healthy habits for their futures.</p>
						</div>
					</div>
					<br><h2>computer science</h2></br>
					<div class="row outer-organizations">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<img class="club-images" src="img/scope.jpeg">
							<h3 class="text-uppercase"><b><a style="color:#333333;" href="http://scopeusc.com" target="_blank">scope usc</a></b></h3>
							<h4>student developer</h4>
							<p>Scope guides a select number of students to improve their coding skills, build exciting projects, and bolster resumes through excellent curriculum, networking opportunities and more. In the spring semester of 2017, we learned React.js and built a variety of projects using this Javascript framework in small development teams.</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<img class="club-images" src="img/acm.jpg" height="175">
							<h3 class="text-uppercase"><b><a style="color:#333333;" href="http://uscacm.org" target="_blank">acm usc</a></b></h3>
							<h4>member</h4>
							<p>USC's premier computer science organization, dedicated to bringing industry networking, hackathons, workshops, mentorship, and a community.</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<img class="club-images" src="img/swe.png">
							<h3 class="text-uppercase"><b><a style="color:#333333;" href="http://www.sweusc.com" target="_blank">society of women engineers</a></b></h3>
							<h4>member</h4>
							<p>USC's chapter aims to provide female engineers with a supportive community and a greater voice in the engineering industry.</p>
						</div>
					</div>
				</div>
			</div>

			<div id="code" class="jumbotron text-center">
				<div id="background-box">
					<h1><b>projects</b></h1>
				</div>
			</div>

			<div id="projects">
				<div class="container text-center">
					<h2>projects</h2>
					<img class="project-fill" src="img/projectfill.jpg">
					<br><br><br><h2>coming soon...</h2></br></br></br>
				</div>
			</div>

			<div id="sunset" class="jumbotron text-center">
				<div id="background-box">
					<h1>contact</h1>
				</div>
			</div>

			<div id="contact">
				<div class="container text-center">
					<h2>contact form</h2>

				<div id="form-main" class="jumbotron text-center">
					<div id="form-div" class="jumbotron text-center">
						<form class="form" id="form1" method="post" action="index.php">
					      
					    <p class="name">
					    	<input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
					    </p>
					      
					    <p class="email">
					    	<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
					    </p>

					    <p class="text">
					    	<textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Message"></textarea>
					   	</p>
					      
					      
					    <div class="submit">
					    	<input type="submit" value="SEND" id="button-blue"/>
					        <div class="ease"></div>
					    </div>
					    </form>
					</div>
				</div>
				</div>
			</div>

			<div class="text-center footer">
				<footer>
					<div class="col-md-6 text-center">
						<p>&copy; 2017 Ocean Ronquillo-Morgan | <a style="color:white;" href='mailto:oronquil@usc.edu'>oronquil@usc.edu</a></p>
					</div>

						<ul class="social-icons list-unstyled list-inline"> 
							<li>
								<a href="https://www.linkedin.com/in/oceanronquillomorgan/" target="_blank" class="icon">
									<i class="fa fa-linkedin-square" style="font-size:36px"></i>
								</a>
							</li>

							<li>
								<a href="https://github.com/OceanRonquilloMorgan/" target="_blank" class="icon">
									<i class="fa fa-github-square" style="font-size:36px"></i>
								</a>
							</li>

							<li>
								<a href="https://www.facebook.com/oceanronquillomorgan/" target="_blank" class="icon">
									<i class="fa fa-facebook-square" style="font-size:36px"></i>
								</a>
							</li>

							<li>
								<a href='mailto:oronquil@usc.edu' class="icon">
									<i class="fa fa-wpforms" style="font-size:36px"></i>
								</a>
							</li>
						</ul>
		      	</footer>
		    </div>

			</div>
		</div>
	</body>

	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-100363982-1', 'auto');
	  ga('send', 'pageview');

	</script>
	
</html>