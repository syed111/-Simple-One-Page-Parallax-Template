<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="BRI :: Basic Right Initiative">
	<title>BRI :: Basic Right Initiative</title>

	<!-- add bootstrap css here -->
	<link href="<?php echo base_url ('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
	<!--jquery ui css-->
	<link href="<?php echo base_url ('assets/css/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css"/>
	<!-- add custom css -->
	<link href="<?php echo base_url ("assets/css/custom.css") ?>" rel="stylesheet" type="text/css"/>

	<!-- roboto fonts -->
	<!--<link href='https://fonts.googleapis.com/css?family=RobotoDraft:400,500,700,400italic' rel='stylesheet'
		  type='text/css'> -->
</head>
<body>
<div id="siteheader">
	<!-- =============================navigation bar starts-->
	<nav class="navbar navbar-default navbar-fixed-top navbar-custom-padding">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
				        data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><p class="custom-base-text-color"><strong>BRI</strong></p></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#what_we_do"><span class="custom-base-text-color"><strong>What We Do</strong></span></a></li>
					<li><a href="#gallery"><span class="custom-base-text-color"><strong>Gallery</strong></span></a></li>
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
							<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
							<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<div class="jumbotron custom-jumbtron-style custom-base-color">
		<div class="container">

			<h1 style="color: #e3f2fd">Hello, world!</h1>

			<p>...</p>

			<!--<p><a button type="button" class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target=".bs-example-modal-lg">Learn more</a></p>-->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">Learn More</button>

			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
					...
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="main_container" class="main_container-custom-style">