<?php
include_once "components/functions.php";
include_once "components/templates.php";
?>
<!doctype html>

<html>

<head>

	<!-- BEGIN PHP Include for Meta Content -->
	<?php include "components/meta.php"; ?>
	<!-- END PHP Include for Meta Content -->

	<title>Car Enthusiast Art - Contact Us</title>

</head>

<body>
	<div class="main">


		<!-- BEGIN PHP Include for Header/Nav Element -->
		<?php include "components/header.php"; ?>
		<!-- END PHP Include for Header/Nav Element -->


		<div class="siteInfo">
			<h3>Contact us</h3>
			<div class="card"><img src="img/digital-911turbos-hr.jpg" class="aboutImage" alt="Car Enthusiast Art 911 GT3"></div>

			<p>For the finest in performance car art and design, contact Jhay Davis using the form below.</p>

			<form action="email-confirmation.php">
				<label class="form-control-label">Name</label>
				<input type="text" class="form-input" placeholder="Name" id="name" name="name" required>

				<label class="form-control-label">Email</label>
				<input type="text" class="form-input" id="email" placeholder="Email Address" name="Email" required>

				<label class="form-control-label">Message</label><br>
				<textarea class="form-input" rows="4" cols="50" required>
				</textarea>
				<hr>
				<div>
					<button class="productButton" type="submit" value="Send Email"> Send</button>
				</div>
			</form>
		</div>





	</div>

	<!-- BEGIN PHP Include for Footer Element -->
	<?php include "components/footer.php"; ?>
	<!-- END PHP Include for Footer Element -->







	</div>
</body>

</html>