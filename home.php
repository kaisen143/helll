<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="wrapper">
		<header>
			<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="javascript:void(0)">Nepal Tourism</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="mynavbar">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item">
								<a class="nav-link" href="home.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="industries.php">Our Industries</a></li>
									<li><a class="dropdown-item" href="services.php">Services</a></li>
									<li><a class="dropdown-item" href="info.php">Info</a></li>
								</ul>
							</li>
						</ul>
						<form class="d-flex">
							<input class="form-control me-2" type="text" placeholder="Search">
							<button class="btn btn-primary" type="button">Search</button>
						</form>
					</div>
				</div>
			</nav>
		</header>
		<section id="home">

			<!-- Carousel -->
			<div id="demo" class="carousel slide" data-bs-ride="carousel">

				<!-- Indicators/dots -->
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
					<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
					<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
				</div>

			
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/images/home1.jpg" alt="Los Angeles" class="d-block w-100">
						<div class="carousel-caption">
						
							<h3>✨ Welcome, traveler, to a land so grand,</h3>
							<p>Welcome to a place where dreams come alive and every corner tells a story. Here, nature’s beauty and ancient wonders blend to create unforgettable memories. Step into a world filled with magic and adventure, where your journey begins with awe and delight. We’re thrilled to have you explore this enchanting destination—your perfect escape awaits.

</p>
							
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/home2.jpg" alt="Chicago" class="d-block w-100">
						<div class="carousel-caption">
							
						<h3>✨ Welcome, traveler, to a land so grand,</h3>
							<p>Welcome to a place where dreams come alive and every corner tells a story. Here, nature’s beauty and ancient wonders blend to create unforgettable memories. Step into a world filled with magic and adventure, where your journey begins with awe and delight. We’re thrilled to have you explore this enchanting destination—your perfect escape awaits.

</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/home3.jpg" alt="New York" class="d-block w-100">
						<div class="carousel-caption">
							
							<h3>✨ Welcome, traveler, to a land so grand,</h3>
							<p>Welcome to a place where dreams come alive and every corner tells a story. Here, nature’s beauty and ancient wonders blend to create unforgettable memories. Step into a world filled with magic and adventure, where your journey begins with awe and delight. We’re thrilled to have you explore this enchanting destination—your perfect escape awaits.

</p>
						</div>
					</div>
				</div>

			
				<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
				</button>
			</div>

		</section>
		





	</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body