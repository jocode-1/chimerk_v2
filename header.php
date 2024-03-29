<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content=" Admin Dashboard ">
	<!--<meta name="author" content="Bootlab">-->

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
	<!--<script src="js/settings.js"></script>-->
	<!-- END SETTINGS -->
	<!--<script>-->
	<!--	(function (h, o, t, j, a, r) {-->
	<!--		h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };-->
	<!--		h._hjSettings = { hjid: 2120269, hjsv: 6 };-->
	<!--		a = o.getElementsByTagName('head')[0];-->
	<!--		r = o.createElement('script'); r.async = 1;-->
	<!--		r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;-->
	<!--		a.appendChild(r);-->
	<!--	})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');-->
	<!--</script>-->
	<!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>-->
	<!--<script>-->
	<!--	window.dataLayer = window.dataLayer || [];-->
	<!--	function gtag() { dataLayer.push(arguments); }-->
	<!--	gtag('js', new Date());-->

	<!--	gtag('config', 'G-Q3ZYEKLQ68');-->
	<!--</script>-->
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
				<a class="sidebar-brand" href="dashboard.php">
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
						<a class="sidebar-link" href="dashboard.php">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="category.php">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Category</span>
						</a>
					</li>
					<!--<li class="sidebar-item">-->
					<!--	<a class="sidebar-link" href="brand.php">-->
					<!--		<i class="align-middle" data-feather="list"></i> <span class="align-middle">Brand</span>-->
					<!--	</a>-->
					<!--</li>-->
					<li class="sidebar-item">
						<a class="sidebar-link" href="product.php">
							<i class="align-middle" data-feather="list"></i> <span class="align-middle">Product</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="layout"></i> <span class="align-middle">Staff</span>
						</a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="add_staff.php">Add Staff</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="view_staff.php">View Staff</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Sales</span>
						</a>
						<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="create_sales.php">Create Sales</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="view_sales.php">View Sales</a></li>
							</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#documentation" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="book-open"></i> <span
								class="align-middle">Expenses</span>
						</a>
						<ul id="documentation" class="sidebar-dropdown list-unstyled collapse "
							data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link"
									href="create_expenses.php">Create Expenses</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="view_expenses.php">View Expenses</a></li>
							
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

				
				<ul class="navbar-nav">
				<li class="nav-item px-2"><h2 id="time"></h2></li>
				</ul>

				<h3 class="mb-2" ></h3>

				<!--<script>-->
    <!--    var Time = document.getElementById("time");-->
    <!--    Time.innerText = new Date().toLocaleString()-->
    <!--    setInterval(function() {-->
    <!--      Time.innerText = new Date().toLocaleString()-->
    <!--    }, 1000)-->
    <!--    </script>-->

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<!--<li class="nav-item dropdown">-->
						<!--	<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"-->
						<!--		data-bs-toggle="dropdown">-->
						<!--		<div class="position-relative">-->
						<!--			<i class="align-middle" data-feather="message-circle"></i>-->
						<!--			<span class="indicator">4</span>-->
						<!--		</div>-->
						<!--	</a>-->
						<!--	<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"-->
						<!--		aria-labelledby="messagesDropdown">-->
						<!--		<div class="dropdown-menu-header">-->
						<!--			<div class="position-relative">-->
						<!--				4 New Messages-->
						<!--			</div>-->
						<!--		</div>-->
						<!--		<div class="list-group">-->
						<!--			<a href="#" class="list-group-item">-->
						<!--				<div class="row g-0 align-items-center">-->
						<!--					<div class="col-2">-->
						<!--						<img src="img/avatars/avatar-5.jpg"-->
						<!--							class="avatar img-fluid rounded-circle" alt="Ashley Briggs">-->
						<!--					</div>-->
						<!--					<div class="col-10 ps-2">-->
						<!--						<div class="text-dark">Ashley Briggs</div>-->
						<!--						<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu-->
						<!--							tortor.</div>-->
						<!--						<div class="text-muted small mt-1">15m ago</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</a>-->
						<!--			<a href="#" class="list-group-item">-->
						<!--				<div class="row g-0 align-items-center">-->
						<!--					<div class="col-2">-->
						<!--						<img src="img/avatars/avatar-2.jpg"-->
						<!--							class="avatar img-fluid rounded-circle" alt="Carl Jenkins">-->
						<!--					</div>-->
						<!--					<div class="col-10 ps-2">-->
						<!--						<div class="text-dark">Carl Jenkins</div>-->
						<!--						<div class="text-muted small mt-1">Curabitur ligula sapien euismod-->
						<!--							vitae.</div>-->
						<!--						<div class="text-muted small mt-1">2h ago</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</a>-->
						<!--			<a href="#" class="list-group-item">-->
						<!--				<div class="row g-0 align-items-center">-->
						<!--					<div class="col-2">-->
						<!--						<img src="img/avatars/avatar-4.jpg"-->
						<!--							class="avatar img-fluid rounded-circle" alt="Stacie Hall">-->
						<!--					</div>-->
						<!--					<div class="col-10 ps-2">-->
						<!--						<div class="text-dark">Stacie Hall</div>-->
						<!--						<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.-->
						<!--						</div>-->
						<!--						<div class="text-muted small mt-1">4h ago</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</a>-->
						<!--			<a href="#" class="list-group-item">-->
						<!--				<div class="row g-0 align-items-center">-->
						<!--					<div class="col-2">-->
						<!--						<img src="img/avatars/avatar-3.jpg"-->
						<!--							class="avatar img-fluid rounded-circle" alt="Bertha Martin">-->
						<!--					</div>-->
						<!--					<div class="col-10 ps-2">-->
						<!--						<div class="text-dark">Bertha Martin</div>-->
						<!--						<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,-->
						<!--							posuere ac, mattis non.</div>-->
						<!--						<div class="text-muted small mt-1">5h ago</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</a>-->
						<!--		</div>-->
						<!--		<div class="dropdown-menu-footer">-->
						<!--			<a href="#" class="text-muted">Show all messages</a>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</li>-->
						<!--<li class="nav-item dropdown">-->
						<!--	<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">-->
						<!--		<div class="position-relative">-->
						<!--			<i class="align-middle" data-feather="bell-off"></i>-->
						<!--		</div>-->
						<!--	</a>-->
						<!--	<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"-->
						<!--		aria-labelledby="alertsDropdown">-->
						<!--		<div class="dropdown-menu-header">-->
						<!--			4 New Notifications-->
						<!--		</div>-->
						<!--		<div class="list-group">-->
						<!--			<a href="#" class="list-group-item">-->
						<!--				<div class="row g-0 align-items-center">-->
						<!--					<div class="col-2">-->
						<!--						<i class="text-danger" data-feather="alert-circle"></i>-->
						<!--					</div>-->
						<!--					<div class="col-10">-->
						<!--						<div class="text-dark">Update completed</div>-->
						<!--						<div class="text-muted small mt-1">Restart server 12 to complete the-->
						<!--							update.</div>-->
						<!--						<div class="text-muted small mt-1">2h ago</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</a>-->
						<!--			<a href="#" class="list-group-item">-->
						<!--				<div class="row g-0 align-items-center">-->
						<!--					<div class="col-2">-->
						<!--						<i class="text-warning" data-feather="bell"></i>-->
						<!--					</div>-->
						<!--					<div class="col-10">-->
						<!--						<div class="text-dark">Lorem ipsum</div>-->
						<!--						<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate-->
						<!--							hendrerit et.</div>-->
						<!--						<div class="text-muted small mt-1">6h ago</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</a>-->
						<!--			<a href="#" class="list-group-item">-->
						<!--				<div class="row g-0 align-items-center">-->
						<!--					<div class="col-2">-->
						<!--						<i class="text-primary" data-feather="home"></i>-->
						<!--					</div>-->
						<!--					<div class="col-10">-->
						<!--						<div class="text-dark">Login from 192.186.1.1</div>-->
						<!--						<div class="text-muted small mt-1">8h ago</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</a>-->
						<!--			<a href="#" class="list-group-item">-->
						<!--				<div class="row g-0 align-items-center">-->
						<!--					<div class="col-2">-->
						<!--						<i class="text-success" data-feather="user-plus"></i>-->
						<!--					</div>-->
						<!--					<div class="col-10">-->
						<!--						<div class="text-dark">New connection</div>-->
						<!--						<div class="text-muted small mt-1">Anna accepted your request.</div>-->
						<!--						<div class="text-muted small mt-1">12h ago</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</a>-->
						<!--		</div>-->
						<!--		<div class="dropdown-menu-footer">-->
						<!--			<a href="#" class="text-muted">Show all notifications</a>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</li>-->
						<!--<li class="nav-item dropdown">-->
						<!--	<a class="nav-flag dropdown-toggle" href="#" id="languageDropdown"-->
						<!--		data-bs-toggle="dropdown">-->
						<!--		<img src="img/flags/us.png" alt="English" />-->
						<!--	</a>-->
						<!--	<div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">-->
						<!--		<a class="dropdown-item" href="#">-->
						<!--			<img src="img/flags/us.png" alt="English" width="20" class="align-middle me-1" />-->
						<!--			<span class="align-middle">English</span>-->
						<!--		</a>-->
						<!--		<a class="dropdown-item" href="#">-->
						<!--			<img src="img/flags/es.png" alt="Spanish" width="20" class="align-middle me-1" />-->
						<!--			<span class="align-middle">Spanish</span>-->
						<!--		</a>-->
						<!--		<a class="dropdown-item" href="#">-->
						<!--			<img src="img/flags/de.png" alt="German" width="20" class="align-middle me-1" />-->
						<!--			<span class="align-middle">German</span>-->
						<!--		</a>-->
						<!--		<a class="dropdown-item" href="#">-->
						<!--			<img src="img/flags/nl.png" alt="Dutch" width="20" class="align-middle me-1" />-->
						<!--			<span class="align-middle">Dutch</span>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</li>-->
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
