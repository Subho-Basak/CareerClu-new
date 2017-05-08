<!doctype html>
<html lang="en">

<head>
<title>Elements | Klorofil - Free Bootstrap Dashboard Template</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet"
	href="vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="vendor/linearicons/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<!-- MAIN CSS -->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/news.css">
<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
<!-- NEWS MODAL CSS -->
<link rel="stylesheet" href="css/news-modal.css">
<!-- GOOGLE FONTS -->
<link
	href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,700i"
	rel="stylesheet">
<!-- ICONS -->
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
<!-- links for news modal -->

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="img/logo-dark.png" alt="Klorofil Logo"
					class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth">
						<i class="lnr lnr-arrow-left-circle"></i>
					</button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control"
							placeholder="Search dashboard..."> <span class="input-group-btn"><button
								type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro"
						href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro"
						title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i>
						<span>UPGRADE TO PRO</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a href="#" class="dropdown-toggle icon-menu"
							data-toggle="dropdown"> <i class="lnr lnr-alarm"></i> <span
								class="badge bg-danger">5</span>
						</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span
										class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span
										class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span
										class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span
										class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span
										class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span>
								<i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown"><img src="img/user.png" class="img-circle"
								alt="Avatar"> <span>Samuel</span> <i
								class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul></li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="elements.php" class="active"><i class="lnr lnr-code"></i>
								<span>News</span></a></li>
						<li><a href="charts.php" class=""><i class="lnr lnr-chart-bars"></i>
								<span>Charts</span></a></li>
						<li><a href="panels.php" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.php" class=""><i class="lnr lnr-alarm"></i>
								<span>Notifications</span></a></li>
						<li><a href="#subPages" data-toggle="collapse" class="collapsed"><i
								class="lnr lnr-file-empty"></i> <span>Pages</span> <i
								class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.php" class="">Profile</a></li>
									<li><a href="page-login.php" class="">Login</a></li>
									<li><a href="page-lockscreen.php" class="">Lockscreen</a></li>
								</ul>
							</div></li>
						<li><a href="tables.php" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.php" class=""><i
								class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.php" class=""><i class="lnr lnr-linearicons"></i>
								<span>Icons</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">News</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BUTTONS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Recent Headlines</h3>
								</div>

								<div class="container-fluid">
									<div class="row">

										<div class="col-md-2 col-xs-5 news add-news">
											<h4 style="text-align: center">
												<i class="material-icons">add_circle</i>
											</h4>
											<p align="center">Create a news</p>
										</div>

										<div class="col-md-2 col-xs-5 news">
											<h4>News Heading</h4>
											<span>news date</span>
											<p>News content goes from here</p>
										</div>
										<div class="col-md-2 col-xs-5 news">
											<h4>News Heading</h4>
											<span>news date</span>
											<p>News content goes from here</p>
										</div>
										<div class="col-md-2 col-xs-5 news">
											<h4>News Heading</h4>
											<span>news date</span>
											<p>News content goes from here</p>
										</div>
										<div class="col-md-2 col-xs-5 news">
											<h4>News Heading</h4>
											<span>news date</span>
											<p>News content goes from here</p>
										</div>
									</div>
								</div>
							</div>
							<!-- END BUTTONS -->


						</div>
					</div>
				</div>


				<!-- END MAIN CONTENT -->
			</div>
			<!-- END MAIN -->

			<!-- NEWS MODAL STARTS -->
			<div class="container-fluid news-wrapper">

				<div class="row news-header">
					<div class="col-md-10 col-xs-12">
						<h2>Create a News</h2>
					</div>
					<div class="col-md-1 col-xs-6">
						<button>CANCEL</button>
					</div>
					
					<div class="col-md-1 col-xs-6">
						<button>CREATE</button>
					</div>

				</div>

			</div>
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">
						&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme
							I Need</a>. All Rights Reserved.
					</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="scripts/klorofil-common.js"></script>

		<!-- Open news modal -->
		<script type="text/javascript">
		$(document).ready(function(){

			$('.news-wrapper').fadeOut();
			$('.add-news').click(function(){

				$('.news-wrapper').fadeIn();
			});
			
		});

		</script>

</body>

</html>
