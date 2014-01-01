<!DOCTYPE HTML>
<!--
	ProblemManje 1.0 by Bunch Of Bunnies
	
	Free for personal and commercial use under the CCA 3.0 license
-->
<html>
<head>
	<title>ProblemManje.org</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="baza problema, problemi, problem manje" />
	<link href="http://fonts.googleapis.com/css?family=Signika:400,600&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dropotron.js"></script>
	<script src="js/config.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-panels.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByZ_o2suWrlQj5Z4i8joLCCR2g5oNMzHQ&sensor=false"></script>
	<link rel="stylesheet" href="css/skel-noscript.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style-desktop.css" />
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
</head>
	<body class="homepage" onload="initialize()">
		<!-- Heder Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Heder -->
								<section id="header">
									
									<!-- Logo -->
										<br>
										<img style="width:10%; height:10%; halign:left;" src="images/problemmanje.png" alt="" />
										<h1 style="color: white; text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);"><a href="index.php">ProblemManje.org</a></h1>
									
									<!-- Navigacija -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="index.php">Naslovna</a></li>
												<li><a href="#">O projektu</a></li>
												<li>
													<a href="#">Problemi</a>
													<ul>
														<li><a href="#">Mapa</a></li>
														<li><a href="#">Tabela</a></li>
														<li><a href="#">Prijavi</a></li>
													</ul>
												</li>
												<li><a href="#">Android aplikacija</a></li>
												<li><a href="#">Kontakt Info</a></li>
											</ul>
										</nav>

								</section>

						</div>
					</div>
					<div class="row">
						<div class="12u">

							<!-- Baner -->
								<section id="banner">
									<a href="#intro">
										<span class="image image-full"><img src="http://lorempixel.com/1200/444/nature/" alt="" /></span>
										<header>
											<h2>Divan dan za problem manje.</h2>
											<span id="intro" class="byline">Detaljnije informacije o projektu | ></span>
										</header>
									</a>
								</section>

						</div>
					</div>
					<div class="row">
						<div class="12u">
								
							<!-- Intro -->
								<section id="intro">
								
									<div>
										<div class="row">
											<div class="4u">
												<section class="first">
													<span class="pennant"><span class="icon64 icon64-1"></span></span>
													<header>
														<h2>Za volontere</h2>
													</header>
													<p>Svako od nas može se prihvatiti nekog manjeg problema i rešiti ga bez čekanja na aktivnost nadležne službe. Par prijatelja može veoma lako rešiti takav jedan problem u svom okruženju ili na bilo kojoj drugoj lokaciji.</p>
												</section>
											</div>
											<div class="4u">
												<section class="middle">
													<span class="pennant pennant-alt"><span class="icon64 icon64-2"></span></span>
													<header>
														<h2>Za sve od 7 do 77</h2>
													</header>
													<p>Svako od nas je primetio problem u parku, na ulici, trotoaru, pored zgrade, gde god. Napravi fotografiju i pošalji je pomoću android aplikacije koju možeš preuzeti <a href="#">ovde</a>.</p>
												</section>
											</div>
											<div class="4u">
												<section class="last">
													<span class="pennant pennant-alt2"><span class="icon64 icon64-3"></span></span>
													<header>
														<h2>Za nadležne službe</h2>
													</header>
													<p>Ovde možete naći objedinjene probleme sa kojima se građani na teritoriji Vaše nadležnosti susreću, u obliku tabelarnog prikaza ili označene na mapi. Baza poseduje zapise problema za sva mesta u Republici Srbiji.</p>
												</section>
											</div>
										</div>
									</div>

									<div class="actions">
										<a href="o-projektu.php" class="button button-big">Detaljnije</a>
										<a href="#" class="button button-alt button-big">Nazad</a>
									</div>
								
								</section>
							<section id="najaktuelniji"></section>
						</div>
					</div>
				</div>
			</div>

		<!-- Glavni Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							<!-- Najaktuelniji problemi -->
								<section>
									<header class="major">
										<h2>Najaktuelniji problemi u tvojoj okolini</h2>
									</header>
									<div>
										<div class="row">
											<div class="4u">
												<section class="box">
													<a href="#" class="image image-full"><img src="http://www.emedjimurje.hr/uploads/20120826/DSC01460_1.JPG" alt="" /></a>
													<header>
														<h3>Hyde park</h3>
													</header>
													<div id="map1_canvas" style="width: 116%; height: 262px; margin-left:-26px;"></div>
												</section>
											</div>
											<div class="4u">
												<section class="box">
													<a href="#" class="image image-full"><img src="http://www.057info.hr/images/vijesti/orginal/znak__pristani_te_1273149660.JPG" alt="" /></a>
													<header>
														<h3>Trg Marksa i Engelsa</h3>
													</header>
														<div id="map2_canvas" style="width: 116%; height: 262px; margin-left:-26px;"></div>
												</section>
											</div>
											<div class="4u">
												<section class="box">
													<a href="#" class="image image-full"><img src="http://www.b92.net/news/pics/2007/06/98150633546628840b2e94639833328_extreme.jpg" alt="" /></a>
													<header>
														<h3>Požeška ulica</h3>
													</header>
													<div id="map3_canvas" style="width: 116%; height: 262px; margin-left:-26px;"></div>
												</section>
											</div>
										</div>
									</div>
								</section>
						</div>
					</div>
					<div class="row">
						<div class="12u">
						</div>
					</div>
				</div>
				<section id="kontaktinfo"> </section>
			</div>
		<!-- Zaglavlje Wrapper -->
			<div id="footer-wrapper">
				
				<!-- Zaglavlje -->
					<section id="footer" class="container">
						<div class="row">
							<div class="8u">

								<section>
									<header>
										<h2>Novosti</h2>
									</header>
									<ul class="dates">
										<li>
											<span class="date">Okt <strong>29</strong></span>
											<h3><a href="#">Predstavljanje projekta u Estoniji</a></h3>
											<p>Projekat Problem Manje je predstavljen u Estoniji u seriji neformalnih razgovora sa potencijalnim investitorima.</p>
										</li>
										<li>
											<span class="date">Okt <strong>24</strong></span>
											<h3><a href="http://afflatusnews.com/Serbia/10/Problem_manje_-_aplikacija_za_mapiranje_problema_od_sada_dostupna_javnosti" target="_blank">Projekat predstavljen na AfflatusNews sajtu</a></h3>
											<p>Predstavili smo projekat na sajtu AfflatusNews.</p>
										</li>
									</ul>
								</section>
							
							</div>
							<div class="4u">
							<section>
									<header>
										<h2>Kontakt</h2>
									</header>
									<ul class="social">
										<li class="facebook"><a href="https://www.facebook.com/problemi.rs" class="icon48 icon48-1" target="_blank">Facebook</a></li>
									</ul>
								</section>								
							</div>
						</div>
						<br><br><br><br><br><br><br><br><br><br><br><br><br>
						<div class="row">
							<div class="12u">
								<!-- Kopirajt -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; 2013 Problem Manje</li>
											<li>Fotografije: <a href="#">Dreametry Doodle</a> + <a href="#">Iconify.it</a></li>
											<li>Dizajn: <a href="tim.php">Tim</a></li>
										</ul>
									</div>
							</div>
						</div>
					</section>
				
			</div>

	</body>
</html>
