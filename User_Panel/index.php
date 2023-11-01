<?php
require("shared/nav.php");
require("shared/config.php");
?>
		<div class="hero">
			<div class="slides">
				<li data-bg-image="images/slider-1.jpg">
					<div class="container">
						<div class="slide-content">
							<h2 class="slide-title fw-bold" id="text">Research</h2>
							<p id="text">Research carried out in a laboratory for testing chemical substances, growing tissues
								in cultures...</p>
							<a href="#research" class="custom-button">Learn More</a>
						</div>
					</div>
				</li>
				<li data-bg-image="images/slider-2.jpg">
					<div class="container">
						<div class="slide-content">
							<h2 class="slide-title fw-bold" id="text">Medicine</h2>
							<p id="text">A medical laboratory or clinical laboratory is a laboratory where tests are conducted out on...</p>
							<a href="#medicine" class="custom-button">Learn More</a>
						</div>
					</div>
				</li>
				<li data-bg-image="images/slider-3.jpg">
					<div class="container">
						<div class="slide-content">
							<h2 class="slide-title fw-bold" id="text">Genetics</h2>
							<p id="text">Clinical Molecular Genetics is a laboratory-based specialty of medical genetics that
								focuses..</p>
							<a href="#genetics" class="custom-button">Learn More</a>
						</div>
					</div>
				</li>
			</div>
		</div>

		<main class="main-content">
			<div class="fullwidth-block">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12 m-2 con" id="research">
							<div class="feature" id="div1">
								<img src="images/icon-research-small.png" alt="" class="feature-image">
								<h2 class="feature-title">Research</h2>
								<p>Research carried out in a laboratory for testing chemical substances, growing tissues
									in cultures...</p>
								<a href="services.php#research" class="custom-button">Learn more</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-12 m-2 con"  id="medicine">
							<div class="feature" id="div1">
								<img src="images/icon-medicine-small.png" alt="" class="feature-image">
								<h2 class="feature-title">Medicine</h2>
								<p>A medical laboratory or clinical laboratory is a laboratory where tests are conducted out on...</p>
								<a href="services.php#medicine" class="custom-button">Learn more</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 m-2 con"  id="genetics">
							<div class="feature" id="div1">
								<img src="images/icon-genetics-small.png" alt="" class="feature-image">
								<h2 class="feature-title">Genetics</h2>
								<p>Clinical Molecular Genetics is a laboratory-based specialty of medical genetics that
									focuses..</p>
								<a href="services.php#genetics" class="custom-button">Learn more</a>
							</div>
						</div>
					</div> <!-- .row -->
				</div> <!-- .container -->
			</div> <!-- .fullwidth-block -->

			<div class="fullwidth-block">
				<div class="container">
					<div class="row">
						<h2 class="text-center fw-bold mb-5">PRODUCTS</h2>
					<?php 
                                $query ="SELECT * FROM `products` Where prod_status='6'";
                                $run = mysqli_query($conn, $query);
                                while ($data = mysqli_fetch_assoc($run))
                                {
                                
                                ?>
						<div class="col-md-4 p-2">
							<img class="d-block w-100 rounded" src="../Admin_Panel/assets/images/<?php echo $data['prod_image']?>" alt="">
							<h2 class="section-title mt-2 mb-3"><?php echo $data['prod_name']?></h2>
							<p><?php echo $data['prod_desc']?></p>
							<p class="text-white rounded-pill text-center w-50 m-auto" id="input-design">Price: <?php echo $data['prod_price']?></p>
						</div>
						<?php
                            }
                        ?>
					</div>
				</div>
			</div>


			<div class="fullwidth-block">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="section-title text-center">Our mission and vision</h2>
							<p>The Mission is a statement in which the laboratory explains the methods and approaches it
								wants to use to fulfill the Vision. In developing the Mission you have to ask yourself
								the question: "What can the laboratory do to fulfill the Vision?". The answer to that
								question is the Mission. An example of a Mission could be "Our Mission is to provide
								quality laboratory services and to strengthen the national public health laboratory
								network through leadership and expert guidance to reduce the burden of disease</p>
							<p>In the previous activity the Vision was formulated. This can be considered as the dream
								of the laboratory. Making a concrete policy and planning based on the Vision is not yet
								possible. The second step on the road to an efficient management cycle is the Mission
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="fullwidth-block cta" data-bg-image="images/cta-bg.jpg">
				<div class="container">
					<h2 class="cta-title" id="text">What is laboratory Organisation?</h2>
					<p id="text">Laboratory organization involves both the physical establishment and its operations while lab management is maintaining the laboratory which includes planning,</p>
					<a href="about.php#col" class="custom-button">Learn More</a>
				</div>
			</div>

		</main> <!-- .main-content -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<?php
		require("shared/footer.php");
		?>
		
	</div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>

</body>

</html>