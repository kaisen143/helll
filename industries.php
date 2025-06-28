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
	
		<section id="industries">
			<h1 class="text-center mt-5 mb-5">Our Industries</h1>
			<div  class="container-fluid bg-img">
				<div class="container">
					<div class="row gap-3">

						<div class="col bg-light mt-5 p-3   text-center">
							
							<h1 class="text-center">Food and Beverages <i class="fa-solid fa-utensils"></i></h1>
							<p>
								Restaurants, cafes, bars, and food services cater to tourists' dining needs, offering diverse culinary experiences. 
								
								
							</p>
						</div>

						<div class="col bg-primary mt-5 p-3  text-center">

							<h1 class="text-center">Transportation	<i class="fa-solid fa-car"></i></h1>
							<p>
								This involves various modes of travel, including airlines, railways, buses, rental cars, and cruise lines, facilitating the movement of tourists. 
								
								
								
							</p>
						</div>

						<div class="col bg-light mt-5 p-3 text-center">
							
							<h1 class="text-center">Accommodation:<i class="fa-solid fa-house"></i></h1>
							<p>
								This sector includes hotels, motels, resorts, bed and breakfasts, and campgrounds, providing lodging options for tourists. 
							</p>
						</div>


					</div>

				</div>

			</div>
		</section>
		




	</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body