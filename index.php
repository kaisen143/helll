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
								<a class="nav-link" href="javascript:void(0)">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)">Contact</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">FrontEnd</a></li>
									<li><a class="dropdown-item" href="#">Back End</a></li>
									<li><a class="dropdown-item" href="#">Database</a></li>
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

				<!-- The slideshow/carousel -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/images/home1.jpg" alt="Los Angeles" class="d-block w-100">
						<div class="carousel-caption">
						
							<p>Escape to a heavenly realm where every moment sparkles with peace and wonder. Bask in breathtaking views, gentle breezes, and serene landscapes that soothe your soul. Discover the magic of a place where dreams and nature unite perfectly.</p>

						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/home2.jpg" alt="Chicago" class="d-block w-100">
						<div class="carousel-caption">
						<p>Escape to a heavenly realm where every moment sparkles with peace and wonder. Bask in breathtaking views, gentle breezes, and serene landscapes that soothe your soul. Discover the magic of a place where dreams and nature unite perfectly.</p>

						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/home3.jpg" alt="New York" class="d-block w-100">
						<div class="carousel-caption">
							<p>Escape to a heavenly realm where every moment sparkles with peace and wonder. Bask in breathtaking views, gentle breezes, and serene landscapes that soothe your soul. Discover the magic of a place where dreams and nature unite perfectly.</p>

						</div>
					</div>
				</div>

				<!-- Left and right controls/icons -->
				<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
				</button>
			</div>

		</section>
		<section>
			<h1 class="text-center mt-5 mb-5">About Us</h1>

			<div class="container px-4">
				<div class="row gx-5">
					<div class="col">
						<div class="p-3 border bg-light">
							<img src="assets/images/home4.jpg" height="350px" width="100%">

						</div>
					</div>
					<div class="col">
						<div class="p-3 border bg-light">
							<p>
								Warm Welcome to our beloved customer , where design meets functionality.

								We're a team of passionate web developers and creative thinkers dedicated to building websites that do more than just look great — they work hard for your business. Whether you're a small startup, an established brand, or an individual with a big idea, we’re here to bring your vision to life online.
								With years of experience in web development, we specialize in 
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
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
		<section id="services">
			<h1 class="text-center mt-5">Services</h1>
			<p>
				<marquee><b>Visit Some beautiful views of heaven of Nepal pokhara</b></marquee>
			</p>
			<div class="container mt-5 mb-5">
				<div class="row ">
					<div class="col-4">
						<div class="card" width="100%" height="400px">
							<img class="card-img-top" src="assets/images/pokhara.png" alt="Card image" height="400px">
							<div class="card-body">
								<h4 class="card-title">Pumdikot</h4>
								<p class="card-text">
									<b>Pumdikot Viewpoint</b><br>
									Visit Pumdikot for a peaceful hilltop experience with a stunning view of Pokhara, Phewa Lake, and the Himalayas.
									See the giant Shiva statue, enjoy fresh air, and take beautiful photos.
									A perfect spot for sunrise, sunset, and quiet moments in nature.
									A perfect spot for sunrise, sunset.

								</p>
								<a href="#" class="btn btn-primary">Rs.10000</a>
							</div>
						</div>

					</div>

					<div class="col-4">
						<div class="card"  width="100%" height="415px">
							<img class="card-img-top" src="assets/images/boating.png" alt="Card image" height="400px">
							<div class="card-body">
								<h4 class="card-title">Lakeside of Pokhara</h4>
								<p class="card-text">
									<b>Pokhara Lakeside Tour Package</b><br>
									Enjoy boating on Phewa Lake, visit the World Peace Pagoda, and relax by the lakeside.
									Beautiful mountain views, peaceful walks, and fun activities like paragliding.
									Hotel, breakfast, and local sightseeing included.
									On the eastern shore, the Lakeside district has yoga centers and restaurants. 


								</p>
								<a href="#" class="btn btn-primary">Rs.20000</a>
							</div>
						</div>

					</div>

					<div class="col-4">
						<div class="card" width="100%" height="400px">
							<img class="card-img-top" src="assets/images/everest.png" alt="Card image" height="400px" width="100%">
							<div class="card-body">
								<h4 class="card-title">Mount Everest</h4>
								<p class="card-text">
									<b>Mount Everest</b><br>
									Mount Everest is the highest mountain in the world, standing at 8,848 meters.
									It attracts adventurers, trekkers, and nature lovers from around the world.
									Enjoy close views from Everest Base Camp, helicopter tours, or scenic flights.
									A once-in-a-lifetime experience in the heart of the Himalayas.		
								.</p>
								<a href="#" class="btn btn-primary">RS.30000</a>
							</div>
						</div>

					</div>


				</div>

			</div>
		</section>
		<footer class="hello">
			<h1 class="text-center mt-5 mb-5">Contact</h1>
			<div  class="container-fluid">
				<div class="container">
					<div class="row gap-3 " >

						<div class="col k mt-5 p-3 bg-dark  text-center">
							<h1 style="color: white; margin-top: 10px; margin-bottom: 10px ;">Contact For Any Queries</h1>
							<input type="textbox" placeholder="Full Name"><br>
							<input type="textbox" placeholder="Email Address">
							<br>
							<textarea rows="4" cols="40" placeholder="Message"></textarea><br>
							<input type="button"  class="ren2" value="Send"><br>
						</div>

						<div class="col  mt-5 p-3  text-center bg-light">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.540598745585!2d85.32773519999999!3d27.7314672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191780acf2a5%3A0xbba21002062d13d9!2sLe%20Sherpa%20Restaurant!5e0!3m2!1sen!2snp!4v1750743975054!5m2!1sen!2snp" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>




					</div>

				</div>

			</div>
		</footer>

		<footer class ="demo">
			<h5 class="text-center mt-5 mb-5 ">INFO</h5>
			<div  class="container-fluid">
				<div class="container">
					<div class="row gap-3 bg-dark hell" >
						<div class="col  mt-5 p-3   text-center" >
							<h1> Bhuwan Nepal Tourism</h1><br>
							<h2> Contact</h2><br>
							<p>nepaltourism.com.np<br>
								01-4528604
							</p><br>
							<h2> Opening hour</h2><br>
							<p>
								Opening Hours: 24hours a day

								(Monday to Friday)
							</p>
							<a href="https://www.facebook.com/"><i class="fa-brands fa-facebook " ></i></a>
							<a href="https://x.com/?lang=en"><i class="fa-brands fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
						</div>
						<div class="col  mt-5 p-3   text-center">
							<h3> For Reservation</h3><br>
							<p>
								Call us at: +977-9801159480,
								01-4528604
							</p>
							<h4> location</h4><br>
							<p>
								Maharajgunj, Butwal, Nepal
								Opposite of President House
							</p>
						</div>
						<div class="col  pt-5  ">
							<h3> Quick links</h3><br>
							<ul class="mt-1 pt-5">
								<li class="mb-2">
									<a href="">Home</a>
								</li>
								<li class="mb-2">
									<a href="#">About Us</a>
								</li>
								<li class="mb-2">
									<a href="#">tourism sport</a>
								</li>
								<li class="mb-2">
									<a href="#">Career</a>
								</li>
								<li class="mb-2">
									<a href="#">Events</a>
								</li>
								<li class="mb-2">
									<a href="#">Contacts</a>
								</li>
								<li class="mb-2">
									<a href="#">Reviews</a>
								</li>
							</ul>
						</div>



					</div>

				</div>

			</div>
		</footer>




	</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body