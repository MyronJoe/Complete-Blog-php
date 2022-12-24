<?php
require_once(ROOT_PATH . "/app/includes/session.php");

?>
<header id="header">
	<!-- NAV -->
	<div id="nav">
		<!-- Top Nav -->
		<div id="nav-top">
			<div class="container">
				<!-- social -->
				<ul class="nav-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
				<!-- /social -->

				<!-- logo -->
				<div class="nav-logo">
					<a href="<?php echo BASE_URL . '/' ?>" class="logo">
						<h1 style="margin-top:17px">Frank<spn style='color:orangered'>Naija</span></h1>
					</a>
				</div>
				<!-- /logo -->

				<!-- search & aside toggle -->
				<div class="nav-btns">
					<button class="aside-btn"><i class="fa fa-bars"></i></button>
					<button class="search-btn"><i class="fa fa-search"></i></button>
					<div id="nav-search">
						<form action="search.php" method="POST">
							<input class="input" name="term" placeholder="Enter your search...">
						</form>
						<button class="nav-close search-close">
							<span></span>
						</button>
					</div>
				</div>
				<!-- /search & aside toggle -->
			</div>
		</div>
		<!-- /Top Nav -->

		<!-- Main Nav -->
		<div id="nav-bottom">
			<div class="container">
				<!-- nav -->
				<ul class="nav-menu">
					<li class="has-dropdown">
						<a href="<?php echo BASE_URL . '/' ?>">Home</a>
						<div class="dropdown">
							<div class="dropdown-body">
								<ul class="dropdown-list">
									<li><a href="category.html">Category page</a></li>
									<li><a href="blog-post.html">Post page</a></li>
									<li><a href="author.html">Author page</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="contact.html">Contacts</a></li>
									<?php if (isset($_SESSION['id'])) : ?>
										<li><a href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a></li>
									<?php else : ?>
										<li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="#">Lifestyle</a></li>
					<li><a href="#">Fashion</a></li>
					<li><a href="#">Technology</a></li>
					<li><a href="#">Health</a></li>
					<li><a href="#">Travel</a></li>

					<?php if (isset($_SESSION['id'])) : ?>
						<li class="has-dropdown">
							<a href="#"><?php echo $_SESSION['username']; ?></a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										<?php if ($_SESSION['admin']) : ?>
											<li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
										<?php endif; ?>
										<li><a href="profile.php?user_id=<?php echo $_SESSION['id']; ?>">Profile</a></li>
										<li><a href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a></li>
									</ul>
								</div>
							</div>
						</li>
					<?php endif; ?>
				</ul>
				<!-- /nav -->
			</div>
		</div>
		<!-- /Main Nav -->

		<!-- Aside Nav -->
		<div id="nav-aside">
			<ul class="nav-aside-menu">
				<li><a href="<?php echo BASE_URL . '/' ?>">Home</a></li>
				<li class="has-dropdown"><a>Categories</a>
					<ul class="dropdown">
						<li><a href="#">Lifestyle</a></li>
						<li><a href="#">Fashion</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Travel</a></li>
						<li><a href="#">Health</a></li>
					</ul>
				</li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="contact.html">Contacts</a></li>
				<li><a href="#">Advertise</a></li>
			</ul>
			<button class="nav-close nav-aside-close"><span></span></button>
		</div>
		<!-- /Aside Nav -->
	</div>
	<!-- /NAV -->

</header>
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>