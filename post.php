<!DOCTYPE html>
<html lang="en">

<?php
include 'path.php';
include ROOT_PATH . "/app/database/db.php";


?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	include(ROOT_PATH . "/app/includes/css.php");

	?>
	<title>FrankNaija</title>

</head>

<body>

	<!-- HEADER -->
	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
	<!-- /HEADER -->

	<!-- SECTION -->
	
	<!-- /SECTION -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<?php require(ROOT_PATH . "/app/includes/footer.php") ?>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contacts</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<a href="index.html" class="logo">
							<h1 style='color:white'>Frank<span>Naija</span></h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>