<?php 

	ob_start();
	session_start();

	include ('admin/db-connection.php');
	
	$custom = $db->from('customtext')
				->first();

	$setting = $db->from('setting')
				->first();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>Blog | Mono </title>
		<!-- Favicon -->
        <link href="assets/images/favicon.png" rel="shortcut icon">
		<!-- CSS -->
		<link href="assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
		<link href="assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="assets/plugins/sal/sal.min.css" rel="stylesheet">
		<link href="assets/css/theme.min.css" rel="stylesheet">
		<!-- Fonts/Icons -->
		<link href="assets/plugins/font-awesome/css/all.css" rel="stylesheet">
		<link href="assets/plugins/themify/themify-icons.min.css" rel="stylesheet">
		<link href="assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">
	</head>
	<body data-preloader="2">
        
        <?php include ('header.php'); ?>

		<div class="section-sm bg-grey">
			<div class="container text-center">
				<h3 class="font-family-secondary">mono blog.</h3>
			</div><!-- end container -->
		</div>

		<!-- Scroll to top button -->
		<div class="scrolltotop">
			<a class="button-circle button-circle-sm button-circle-dark"><i class="ti-arrow-up"></i></a>
		</div>
		<!-- end Scroll to top button -->

		<!-- Blog section  -->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2">
						<?php 
                            $blogs = $db->from('blog')
                                    ->all();

                                foreach ($blogs as $blog): 
                            ?>
								<div class="margin-bottom-50">
									<div class="hoverbox-8">
										<a href="blog-detail.php?id=<?=$blog['id']?>">
											<img src="assets/images/blog-minimal-post-1.jpg" alt="">
										</a>
									</div>
									<div class="margin-top-30">
										<h5><a href="blog-detail.php?id=<?=$blog['id']?>"><?=$blog['title'];?></a></h5>
										<p><?=$blog['short_description'];?></p>
										<div class="margin-top-20">
											<a class="text-button button-font-2" href="blog-detail.php?id=<?=$blog['id']?>">Read More</a>
										</div>
									</div>
								</div>
						<?php endforeach; ?>

						<!-- <nav>
							<ul class="pagination justify-content-center margin-top-70">
								<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
							</ul>
						</nav> -->
					</div>
				</div>
			</div>
		</div>

        <?php include ('footer.php'); ?>

		<script src="assets/plugins/jquery.min.js"></script>
		<script src="assets/plugins/plugins.js"></script>
		<script src="assets/js/functions.min.js"></script>
	</body>
</html>