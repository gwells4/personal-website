<!DOCTYPE html>
<html lang="en">




	<head>




		<!-- Tells the browser that the page is written in UTF-8 unicode. This is for internationalization. -->
		<meta charset="UTF-8">
		<!-- This tag is for Internet Explorer, and it allows us to specify what version of IE to render page in. "IE=edge" tells IE to display our content in the highest mode available, which avoids "IE Compatibility Mode" bugs. -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- This is the responsive meta tag. This is used to scale and size our content relative to the "viewport" - which is essentially is the visible portion of screen itself. This tag also sets the inital zoom scale to 1:1. This <meta> tag is required when creating a responsive web site. -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Bootstrap Latest compiled and minified CSS -->
		<!-- This loads our Bootstrap CSS file directly from maxcdn. -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
		<!-- This tag is optional. It loads the default Bootstrap theme directly from maxcdn. -->
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />
		<!-- The two oss. scripts (below) will go away with Bootstrap 4, so the older versions of Internet Explorer will no longer be supported. -->
		<!-- This is an HTML Conditional Comment. These are conditional statements that are read and executed only by Internet Explorer versions 5 - 9, and are now officially deprecated. We use this block of code to serve up a couple fo specific JavaScript files just for users of older versions of IE. Here, we will load html5shiv.js and respond.js in IE 8 and below. Respond.js enables CSS media query support for IE 6-8. HTML5 shiv enables styling of HTML5 elements in IE8 and below. (IE8 and below does not allow unknown elements to be styled without JavaScript.) -->
		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- This loads the minified jQuery JavaScript library from Google's CDN. jQuery required for many of Bootstrap's built-in functionality. -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<!-- This is Bootstrap's JavaScript file, which is required if you want to feature many of Bootstrap's built-in components such as modal windows, dropdown menus, and transitions. This file, which is being directly loaded from maxcdn, includes all the Bootstrap components. -->
		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




		<!-- Favicon Statements -->
		<link rel="Browser-Tab Icon" href="../img/icon-list.svg" type="image/svg">
		<link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="../img/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="../img/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="../img/manifest.json">
		<link rel="mask-icon" href="../img/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="../img/favicon.ico">
		<meta name="msapplication-config" content="../img/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">




		<link rel="stylesheet" href="css/milestone-3.css" type="text/css" />




		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<script src="js/contact-form-validator.js"></script>




		<title>Personal Website</title>




	</head>




	<body>




		<header>





		</header>




		<main>




<!--Top Background Image-->
			<section id="top-of-page">
<!--				<div class="container-fluid">-->
<!--					<div class="row">-->
<!--						<div id="top-image" class="col-xs-12 top-image">-->

							<div class="carousel-slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active">
										<img src="img/sunset-railing-people.jpg" alt="" class="img-responsive">
										<div class="carousel-caption">
											Caption
										</div>
									</div>
								</div>
							</div>

<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
			</section>




<!--About Me-->
			<section id="about-me" class="content-section">
				<div class="container">

					<div class="row">
	<!--About Me Label-->
						<div class="col-sm-4">
							<div class="section-heading">
								<p class="section-heading-text">Info</p>
							</div>
						</div>
	<!--Professional Summary-->
						<div class="col-sm-4">
							<div class="subsection-heading">
								<p class="subsection-heading-text">Professional Summary</p>

							</div>
							<div class="subsection-content">
								Vivamus eget velit sit amet libero elementum ultrices ut id risus. Suspendisse potenti. Donec dapibus rhoncus sem. Phasellus quis consectetur tellus. In commodo leo et libero laoreet, sit amet faucibus elit aliquam. Nam in lacus semper, pharetra arcu sed, volutpat est. Suspendisse posuere enim ac lorem egestas, eget vulputate libero semper. Nulla dignissim felis non finibus venenatis. Aenean aliquam justo nulla, sed porttitor felis accumsan quis. Nunc tristique nunc vel est pretium maximus. Sed a tincidunt erat, id pharetra lectus. Maecenas pretium tellus quis massa posuere, sit amet cursus lacus pharetra.


							</div>
						</div>
	<!--Abilities-->
						<div class="col-sm-4">
							<div class="subsection-heading">
								<p class="subsection-heading-text">Abilities</p>

							</div>
							<div class="subsection-content">
								Integer aliquam, turpis at dapibus pellentesque, mauris massa porta massa, quis dictum urna neque id quam. Aliquam laoreet tempus enim id condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tristique eget risus ac ultrices. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus porttitor tortor turpis, ut congue magna mattis eu. Phasellus non rutrum nisl, vel consectetur quam. Proin mattis odio imperdiet enim tincidunt blandit. Pellentesque vitae elementum ante. Cras gravida elementum faucibus.


							</div>
						</div>
					</div>

				</div>
			</section>




<!--Sample Work-->
			<section id="sample-work" class="content-section">
				<div class="container">

					<div class="row">
	<!--Sample Work Label-->
						<div class="col-sm-4">
							<div class="section-heading">
								<p class="section-heading-text">Projects</p>
							</div>
						</div>
	<!--Project 1-->
						<div class="col-sm-4">
							<div class="subsection-heading">
								<p class="subsection-heading-text">Project 1</p>

							</div>
							<div class="subsection-content">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at nibh facilisis, euismod erat sed, laoreet lorem. Donec rhoncus aliquet mauris elementum faucibus. Maecenas euismod quis turpis nec bibendum. Proin vestibulum lorem leo, non molestie velit condimentum porttitor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sed quam pretium, eleifend tortor at, sodales dui. Quisque feugiat aliquam sem, quis pharetra massa accumsan nec. Quisque nec lobortis diam, id venenatis ante.


							</div>
						</div>
	<!--Project 2-->
						<div class="col-sm-4">
							<div class="subsection-heading">
								<p class="subsection-heading-text">Project 2</p>

							</div>
							<div class="subsection-content">
								Vestibulum placerat tempus placerat. Nullam eget ligula vel nibh facilisis maximus ac vel magna. Phasellus ultrices varius ante ac aliquam. Morbi sit amet ligula leo. Aenean a purus vel sapien egestas auctor vitae venenatis quam. Nunc fringilla erat elit, et malesuada leo ultrices ac. Aenean ut consectetur ligula, sed consectetur augue. Aliquam accumsan odio vel est blandit molestie a at enim. Integer tempor vehicula laoreet. Etiam malesuada porta nibh, non placerat diam dapibus placerat.


							</div>
						</div>


					</div>

				</div>
			</section>




<!-- Contact -->
			<section id="contact" class="content-section">
				<div class="container">

					<div class="row">
	<!--Contact Label-->
						<div class="col-sm-4">
							<div class="section-heading">
								<p class="section-heading-text">Contact</p>
							</div>
						</div>
	<!--Contact Form-->
						<div class="col-sm-8">
							<div class="contact-form">


								<form id="contact-form" class="form-horizontal well" action="php/sendemail.php" method="post">
									<div class="form-group">
										<label for="name">Name</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
											</div>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="subject">Subject</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="glyphicon glyphicon-modal-window" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
										</div>
									</div>
									<div class="form-group">
										<label for="message">Message</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></i>
											</div>
											<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
										</div>
									</div>

									<!-- CAPTCHA -->
									<div class="captcha-container text-center">
										<img id="captcha" src="securimage/securimage_show.php" alt="Captcha Image" title="Captcha image"/>
										<div>
											<button id="captcha-reload-button" class="btn btn-info" onclick="loadNewCaptcha(); return false;" title="Load a different captcha"><i class="glyphicon glyphicon-refresh"></i></button>
											<input type="text" name="captcha_code" title="Please enter the captcha text, here" size="10" maxlength="6" />
										</div>
									</div>

									<!--Empty area for form error (or success) notification output-->
									<div class="row">
										<div class="col-xs-12">
											<div id="output-area"></div>
										</div>
									</div>

									<div class="submit-and-reset-buttons text-center">
										<button class="btn btn-warning" type="reset" title="Clear all fields in form"><i class="glyphicon glyphicon-trash"></i> Reset</button>
										<button class="btn btn-success" type="submit" title="Send email"><i class="glyphicon glyphicon-send"></i> Send</button>
									</div>

								</form>


							</div>
						</div>

					</div>

				</div>
			</section>




		</main>




		<footer>


			<nav class="navbar navbar-default navbar-fixed-bottom">
				<div class="container-fluid">

					<div class="navbar-heading">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle Button</span>
							<span class="glyphicon glyphicon-plus"></span>
						</button>
						<!--<a href="#" class="navbar-left"><img src="img/navbar-logo.png" alt="Nav Bar Logo" class="navbar-brand navbar-left"></a>-->
<!--						<img src="img/navbar-logo.png" alt="Nav Bar Logo" class="navbar-brand navbar-left">-->
						<a class="navbar-brand" href="#top-of-page" >G</a>
<!--						<span class="navbar-brand navbar-left">G</span>-->
					</div>


					<div class="collapse navbar-collapse" id="navbar-collapse-1">
						<ul class="nav navbar-nav">

							<li><a href="#about-me">Info</a></li>
							<li><a href="#sample-work">Projects</a></li>
							<li><a href="#contact">Contact</a></li>

						</ul>
					</div>
				</div>
			</nav>


		</footer>



	</body>

</html>