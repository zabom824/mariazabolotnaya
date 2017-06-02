
<!DOCTYPE html>

<html>

<head>
	<title>Maria Zabolotnaya's Portfolio</title>
	<link rel="stylesheet" type="text/css" href="http://www.mariazabolotnaya.me/assets/css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
</head>


<body>

	<header>
		<h1>Maria Zabolotnaya</h1>
		<h2>Designer. Writer. Artist.</h2>

		<div id="navigation">
			<nav><ul>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#about">About Maria</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul></nav>
		</div>
	</header>

	<main>
		<section id="portfolio">
			<a href="http://mariazabolotnaya.me/designwork"><div id="design">
				<img src="http://www.mariazabolotnaya.me/assets/media/nighttodiefor3.png">
				<p style="position: absolute; top: 140%; left: -3%">Design Work</p> 
			</div></a>
			<a href="http://mariazabolotnaya.me/writtenwork"><div id="write">
				<img src="http://www.mariazabolotnaya.me/assets/media/warning.png">
				<p style="position: absolute; top: 140%; left: 28%;">Written Work</p>
			</div></a>
			<a href="http://mariazabolotnaya.me/fineart"><div id="art">
				<img src="http://www.mariazabolotnaya.me/assets/media/jacket.jpg">
				<p style="position: absolute;top: 140%; left: 61%;">Fine Art</p>
			</div></a>
		</section>
		<section id="about">
			<h3>About Maria</h3>
			<q><i>
				Graphic design is, in some ways, a Frankenstein; The designer must stitch together elements from several different fields (illustration, photography, writing, psychology, sociology) to form the body, a physical manifestation of the idea they want to communicate.
			</i></q>
			<p>
				Maria Zabolotnaya is an aspiring graphic designer and writer from Brooklyn, NY. She currently studies Communication Design at Parsons. Having originally entered Parsons as a Fine Arts student, Maria has adapted her skills as an artist for use in creating visuals for print and web design. She aims to piece together these abilities with her passion for music and creative writing and work as a designer for the music industry in the near future.
			</p>
		</section>
		<section id="contact">
			<h3>Contact</h3>
				<?php
$to = "zabom824@newschool.edu"; 
$subject = "Subject"; 

$name = $_GET["name"];
$mail = $_GET["mail"];
$comment = $_GET["comment"];

$body = "Message From: ". $name ." With Email: ". $mail ." Who Said: ".$comment."."; 

if(mail($to,$subject,$body)) { 
echo "<center><h3>An e-mail was sent.</h3></center>"; 
} else { 
echo "<center><h3> was a problem sending the mail.</h3></center>"; 
}
				?>
		</section>
	</main>

</body>

</html>