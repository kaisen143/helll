
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
								</p>
								<a href="#" class="btn btn-primary">RS.30000</a>
							</div>
						</div>

					</div>


				</div>

			</div>
		</section>
		


	</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body