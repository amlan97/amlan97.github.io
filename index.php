<!-- <?php

    $myemail = $name = $email = $msg = $subject = $headers = "";

    if(isset($_POST['submit'])) {
        if($_POST['submit'] == "submit") {

            $myemail="pikuamlan@gmail.com";
            $name = strip_tags($_POST['name']);
            $email = strip_tags($_POST['email']);
            $msg = strip_tags($_POST['message']);
            $subject = "Personal website data";

            $headers =  'From: '.$email."\r\n".
            $headers .= 'X-Mailer: PHP/' . phpversion().
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
            $sucess_msg = "Here is success msg";

            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $mail_send = mail($myemail, $subject, $message, $headers);
                if($mail_send) {
                    echo "<script>alert('".$sucess_msg."');
                     window.location.href='index.html';</script>";
                } else {
                    echo "<script>alert('This is embarassing, but seems that something went wrong. Please try again.');
                     window.location.href='index.html';</script>";
                }
            } else {
                echo "<script>alert('Please enter a valid email address');
                     window.location.href='index.html';</script>";
            }

        }
    }

?> -->



<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Amlan Datta</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
		
		<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48 img"><img src="images/me.jpg" alt="" /></span>
							<h1 id="title">Amlan Datta</h1>
							<!-- <p>Physicist</p> -->
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Home</span></a></li>
								<li><a href="#about" id="about-link"><span class="icon solid fa-user">About Me</span></a></li>
								<li><a href="#edu" id="edu-link"><span class="icon solid fa-graduation-cap">Education</span></a></li>
								<li><a href="#work" id="work-link"><span class="icon solid fa-skull-crossbones">Research</span></a></li>
								<li><a href="#publication" id="publication-link"><span class="icon solid fa-file-alt">Publications</span></a></li>
							<!--	<li><a href="#exps" id="experiences-link"><span class="icon solid fa-chalkboard-teacher">Experiences</span></a></li> -->
								<li><a href="#passion" id="passion-link"><span class="icon solid fa-th">Passion</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Contact</span></a></li>
							</ul>
						</nav>

				</div>
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="https://www.researchgate.net/profile/Amlan_Datta3" target="_blank" class="icon brands fa-researchgate"><span class="label">Instagram</span></a></li>
							<li><a href="https://www.facebook.com/amlan.datta.507" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/master_amlan/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://twitter.com/amlanrom" target="_blank" class="icon brands fa-twitter"><span class="label">Instagram</span></a></li>
						<!--	<li><a href="#" class="icon solid fa-google"><span class="label"></span></a></li> -->
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Hi! I'm <strong>Amlan</strong>, a graduate student devoted to <strong>Science</strong>.</h2>
								<p>Welcome to my webpage. Here you will find out more about me. </p>
							</header>

							<footer>
								<a href="#about" <button class="button2 scrolly"><span>Let's Begin</span></button></a>
							</footer>

						</div>
					</section>
				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>About Me</h2>
							</header>

							<a href="#" class="image featured"><img src="images/me.jpg" alt="" /></a>

							<p>I am a third year graduate student pursuing PhD in Physics with specialization in superconductivity in the Department of Physics and Astronomy at Iowa State University, Ames, (<a href="https://www.physastro.iastate.edu/" target="_blank">ISU</a>), USA. I am currently working in the  Superconductivity and Magnetism Low-Temperature Laboratory group
								<a href="https://supermaglab.physics.iastate.edu/" target="_blank">SUPERMAGLAB</a>.</p>
							<ul class="actions">
								<a target="_blank" href="pdfs/CV_Amlan.pdf" <button class="button1" style="vertical-align:middle"><span>Download My CV</span></button> ></a>
								
							</ul>

						</div>
					</section>
				<!-- Education -->
					<section id="edu" class="five">
						<div class="container">
							<header>
								<h2>Educational Qualifications</h2>
							</header>
							<ul style="list-style-type:disc;">
								  <li> Presently a <strong>First-year Graduate student of PhD Program in the Department of Physics and Astronomy at ISU, Ames, Iowa, USA.
							          </li>
								  <li><strong>BS-MS(Physics)</strong> (2016-2021) from IISER Kolkata, West Bengal, India. (Admitted through JEE Advanced (2016) Channel)
								  </li>
								  <li><strong>Higher Secondary (10+2)</strong>: Burdwan CMS High School, West Bengal, India. 
								  <strong>(West Bengal Board of Highrer Secondary Education)</strong> Marks obtained: 90%</li>
								  <li><strong>Madhyamik (10)</strong>: Burdwan CMS High School, West Bengal, India.
								  <strong>(West Bengal Board of Secondary Education)</strong> Marks obtained: 88.43%
								  </li>
							</ul>

						</div>
					</section>
				
				<!-- Project -->
					<section id="work" class="two">
						<div class="container">
							<header>
								<h2>Research Experiences</h2>
							</header>
							<ol type="1">
								<li><h1>MS project under <strong><a href="https://www.iiserkol.ac.in/~rangeet/" target="_blank">Dr. Rangeet Bhattacharyya</a>, IISER Kolkata, India</strong> since August 2020.</h1>
								  <p><strong>Topic:</strong> A Master Equation Approach to Spin Noise</p></li>
								 <li><h1>Independent study under <strong><a href="https://www.iiserkol.ac.in/~nghosh/nghosh.php" target="_blank"> Dr. Nirmalya Ghosh</a>, IISER Kolkata, India
</strong> since August 2020.</h1><p><strong>Topic:</strong> Weak Measurements in Optics. (Slides to be uploaded soon)</p>
								  </li>
								  <li><h1>Summer project 2019 under <strong><a href="http://www.desy.de/about_desy/lead_scientists/melanie_schnell/index_eng.html" target="_blank"> Prof. Dr. Melanie Schnell</a>, Deutsches Elektronen Synchrotron
DESY, Hamburg, Germany</strong></h1><p><strong>Topic:</strong> Experimental and Theoretical Investigation of Photofrgamentation Mechanisms of Polycyclic Aromatic Hydrocarbons (PAHs) Exposed to XUV Radiation. <a href="pdfs/Report_DESY.pdf" target="_blank">(Project report here)</a></p>
								  </li>
								  <li><h1>Summer project 2018 under <strong><a href="https://www.iiserkol.ac.in/~rangeet/" target="_blank">Dr. Rangeet Bhattacharyya</a>, IISER Kolkata, India</strong></h1>
								  <p><strong>Topic:</strong> Measurement of the surface tension and the viscosity of a liquid using the capillary
waves as diffraction grating. <a href="pdfs/Report_IISER.pdf" target="_blank">(Project report here)</a></p></li>
								  <li><h1>Summer project 2017 under <strong><a href="https://iitbhu.ac.in/dept/app/people/rajeevsphy" target="_blank">Dr. Rajeev Singh</a>, IIT Varanasi, India.</strong></h1>
								  <p><strong>Topic:</strong> Entanglement Entropy and Mutual Information of Many-body Localized Quantum System. <a href="pdfs/Report_IITV.pdf" target="_blank">(Project report here)</a></p>
								  </li>
							</ol>

						</div>
					</section>
				
				<!-- Project -->
					<section id="publication" class="three">
						<div class="container">
							<header>
								<h2>Publications</h2>
							</header>
							<ol type="1">
								  <li><h1>Tikhonov, D. S., <strong>Datta, A.</strong>, Chopra, P., Steber, A. L., Manschwetus, B., & Schnell, M. (2020). <b>Approaching black-box calculations of pump-probe fragmentation dynamics of polyatomic molecules.</b> <i>Zeitschrift  f&#252;r Physikalische Chemie</i>, 234(7-9), 1507-1531.
								  </li>
								  
							</ol>

						</div>
					</section>
					
					
				<!-- Passion -->
					<section id="passion" class="two">
						<div class="container">

							<header>
								<h2>Follow your passion</h2>
							</header>

							<p>Apart from doing physics all day, I follow my passion which includes photography, playing table tennis, touring specifically 
							driving. Here are some clicks by me. For more pictures you can visit my <a href="https://www.instagram.com/master_amlan/" target="_blank">Instagram profile.</a>
							(The picture in the cover was taken in Meghalaya enroute to Mawlynnong( Cleanest village of Asia))
							</p>

							<div class="row">
								<div class="col-4 col-5-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic8.jpg" alt="" /></a>
											Ayodhya hills, Purulia, India(2019)
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/me4.jpg" alt="" /></a>
											Posing at Berlin wall, Germany(2019)
									</article>
								<article class="item">
										<a href="#" class="image fit"><img src="images/pic4.jpg" alt="" /></a>
											Shandeswar Tola, West Bengal, India(2018)
									</article>
								</div>
								<div class="col-4 col-5-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic9.jpg" alt="" /></a>
										Chau Dance, Purulia, India(2019)
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic2.jpg" alt="" /></a>
										Dawki river, Meghalaya, India(2018)
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/me2.jpg" alt="" /></a>
										Laitlum Grand Canyon, Meghalaya, India(2018)
									</article>
									
								</div>
								<div class="col-4 col-5-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic3.jpg" alt="" /></a>
										Baltic sea, beach of Kiel, Germany(2019)
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic1.jpg" alt="" /></a>
										
											Umiam Lake, Shillong, India(2018)
										
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/me3.jpg" alt="" /></a>
										Shandeswar Tola(Temple of Lord Shiva), West Bengal, India.
									</article>
								</div>
						</div>
					</section>
					<!-- Trigger the Modal -->



				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>
							<p> I am available at:<br>
							<i class="icon solid fa-envelope"></i>&nbsp; <a href="mailto:ad16ms156@iiserkol.ac.in">ad16ms156@iiserkol.ac.in</a> &nbsp;&nbsp;  <span class="icon solid fa-envelope">  </span> &nbsp;<a href="mailto:pikuamlan@gmail.com">pikuamlan@gmail.com</a>
						<br>
								<i class="icon solid fa-phone">&nbsp;+91 97349 75910,&nbsp;+91 94754 71508&nbsp;(<i class="fab fa-whatsapp"></i>)</i>
						<br>
							<i class="fas fa-university"></i>&nbsp;F-105, ICV Hall, IISER Kolkata, Mohanpur, Nadia, West Bengal 741246, India.
							</p>

							<form method="post" action="formHandler.php">
								<div class="row">
									<div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Name" /></div>
									<div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" /></div>
									<div class="col-12">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									<div class="col-12">
										<input type="submit" name = "submit" value="submit" />
									</div>
								</div>
							</form>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<!-- <ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul> -->

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

