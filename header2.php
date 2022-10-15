

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Don Chimerk | Dashboard</title>

	<link rel="canonical" href="dashboard.php" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link href="css/light.css" rel="stylesheet">
	<!-- END SETTINGS -->
	<!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>-->
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-Q3ZYEKLQ68');
	</script>
</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="dark" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
	
	<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
						xml:space="preserve">
						<path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z" />
						<path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z" />
						<path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z" />
					</svg>

					<span class="align-middle me-3">Don Chimerk</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Dashboard
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="vendor_dashboard.php">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Sales</span>
						</a>
						<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="create_sales_user.php">Create Sales</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="view_sales_user.php">View My Sales</a></li>
						</ul>
					</li>

					<li class="sidebar-header">
						Profile
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Change Password</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Settings</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="logout.php">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Logout</span>
						</a>
					</li>
					
					
				</ul>

			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
						<button class="btn" type="button">
							<i class="align-middle" data-feather="search"></i>
						</button>
					</div>
				</form>

				<!--<ul class="navbar-nav">-->
				<!--	<li class="nav-item px-2 dropdown">-->
				<!--		<a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"-->
				<!--			data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
				<!--			Mega menu-->
				<!--		</a>-->
						
				<!--		<div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="servicesDropdown">-->
				<!--			<div class="d-md-flex align-items-start justify-content-start">-->
				<!--				<div class="dropdown-mega-list">-->
				<!--					<div class="dropdown-header">UI Elements</div>-->
				<!--					<a class="dropdown-item" href="#">Alerts</a>-->
				<!--					<a class="dropdown-item" href="#">Buttons</a>-->
				<!--					<a class="dropdown-item" href="#">Cards</a>-->
				<!--					<a class="dropdown-item" href="#">Carousel</a>-->
				<!--					<a class="dropdown-item" href="#">General</a>-->
				<!--					<a class="dropdown-item" href="#">Grid</a>-->
				<!--					<a class="dropdown-item" href="#">Modals</a>-->
				<!--					<a class="dropdown-item" href="#">Tabs</a>-->
				<!--					<a class="dropdown-item" href="#">Typography</a>-->
				<!--				</div>-->
				<!--				<div class="dropdown-mega-list">-->
				<!--					<div class="dropdown-header">Forms</div>-->
				<!--					<a class="dropdown-item" href="#">Layouts</a>-->
				<!--					<a class="dropdown-item" href="#">Basic Inputs</a>-->
				<!--					<a class="dropdown-item" href="#">Input Groups</a>-->
				<!--					<a class="dropdown-item" href="#">Advanced Inputs</a>-->
				<!--					<a class="dropdown-item" href="#">Editors</a>-->
				<!--					<a class="dropdown-item" href="#">Validation</a>-->
				<!--					<a class="dropdown-item" href="#">Wizard</a>-->
				<!--				</div>-->
				<!--				<div class="dropdown-mega-list">-->
				<!--					<div class="dropdown-header">Tables</div>-->
				<!--					<a class="dropdown-item" href="#">Basic Tables</a>-->
				<!--					<a class="dropdown-item" href="#">Responsive Table</a>-->
				<!--					<a class="dropdown-item" href="#">Table with Buttons</a>-->
				<!--					<a class="dropdown-item" href="#">Column Search</a>-->
				<!--					<a class="dropdown-item" href="#">Muulti Selection</a>-->
				<!--					<a class="dropdown-item" href="#">Ajax Sourced Data</a>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</li>-->
				<!--</ul>-->
				<!--<ul class="navbar-nav">-->
				<!--<li class="nav-item px-2"><h2 class="nav-link" id="time"></h2></li>-->
				<!--</ul>-->

				<h3 class="mb-2" ></h3>

				<script>
        var Time = document.getElementById("time");
        Time.innerText = new Date().toLocaleString()
        setInterval(function() {
          Time.innerText = new Date().toLocaleString()
        }, 1000)
        </script>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
								data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
								data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle me-1"
									alt="Chris Wood" /> <span class="text-dark"><?php echo $userDetails['fullname']; ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
										data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
								<a class="dropdown-item" href="#">Help</a>
								<a class="dropdown-item" href="logout.php">Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
