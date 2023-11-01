<?php
require("shared/nav.php");
require("shared/config.php");
?>

			<div class="page-head" data-bg-image="images/page-head-4.jpg">
				<div class="container mt-5">
				</div>
			</div>

			<main class="main-content">
				
				<div class="fullwidth-block">
					<div class="container">


						 <div class="row">
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Address</h2>
						 			<address>
						 				<p>Company Name INC.</p>
										<p>423 Avenue Street, Chicago, IL 60610</p>
									</address>
						 		</div>
						 	</div>
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Telephone</h2>
						 			<p><strong>Office:</strong> +1 800 321 431</p>
									<p><strong>Support:</strong> +1 800 903 412</p>
						 		</div>
						 	</div>
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Email</h2>
						 			<p><strong>Office:</strong> <a href="mailto:office@companyname.com">office@companyname.com</a></p>
									<p><strong>Support:</strong> <a href="mailto:support@companyname.com">support@companyname.com</a></p>
						 		</div>
						 	</div>
						 </div>

						 <div class="row contact-form">
						 	<form method="POST">
						 		<div class="col-md-12 col-lg-4">
						 			<input class="text-white form-control py-2 mb-3" name="Name" id="input-design" type="text" required placeholder="Your name...">
						 			<input class="text-white form-control py-2" name="email" id="input-design" type="email" required placeholder="Email...">
						 		</div>
						 		<div class="col-md-12 col-lg-8">
						 			<p>
						 				<textarea class="text-white" required id="input-design" name="mess" placeholder="Message"></textarea>
										 <p class="text-center">
						 				<button type="submit" name="submit" class="custom-btn">Send message</button>
						 			</p>
						 			</p>
						 		</div>

						 	</form>
							<?php
							if(isset($_POST['submit']))
							{
								$name = $_POST['Name'];
								$email = $_POST['email'];
								$mess = $_POST['mess'];
								$insertt = "INSERT INTO `contact`(`cont_name`, `cont_email`, `cont_mess`) 
								VALUES ('$name','$email','$mess')";
								$run = mysqli_query($conn, $insertt);
								echo "<script>alert('Your Message Has Been Received!');</script>";
							}
							?>
						 </div>
					</div>
				</div>

 

			</main> <!-- .main-content -->

			<?php
			require("shared/footer.php");
			?>

		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>