<?php 

	ob_start();
	session_start();

	include ('admin/db-connection.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>Blog | Mono</title>
        <link href="assets/images/favicon.png" rel="shortcut icon">
		<link href="assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
		<link href="assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="assets/plugins/sal/sal.min.css" rel="stylesheet">
		<link href="assets/css/theme.min.css" rel="stylesheet">
		<link href="assets/plugins/font-awesome/css/all.css" rel="stylesheet">
		<link href="assets/plugins/themify/themify-icons.min.css" rel="stylesheet">
		<link href="assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">
	</head>
	<body data-preloader="2">
        
        <?php include ('header.php');?>


		<div class="section-sm bg-grey">
			<div class="container text-center">
				<h3 class="font-family-secondary"><a class="text-link-0" href="index.php">mono blog.</a></h3>
			</div>
		</div>

		<div class="scrolltotop">
			<a class="button-circle button-circle-sm button-circle-dark" href="sidebar-left.html#"><i class="ti-arrow-up"></i></a>
		</div>
		
		<div class="section">
			<div class="container">


            <?php 
				$id = $_GET['id'];

				$blog = $db->from('blog')
							->where('id', $id)
							->first();

				if (!$blog) {
					echo '<script language="Javascript">window.location.href="blog.php"</script>';
				}
           ?>

				<div class="row col-spacing-50">
					<div class="col-12 col-lg-8 order-lg-2">
						<div class="margin-bottom-50">
							<div class="hoverbox-8">
								<img src="assets/images/blog-minimal-post-1.jpg" alt="">
							</div>
							<div class="margin-top-30">
								<h5><?=$blog['title']?></h5>
								<p><?=$blog['text']?></p>
							</div>
						</div>
					</div>
				
					<div class="col-12 col-lg-4 order-lg-1 sidebar-wrapper">
						<div class="sidebar-box">
							<h6 class="font-small font-weight-normal uppercase">BLOGS</h6>
							<ul class="list-category">
								<li><a class="active" href="#">Benefits of Minimalism </a></li>
								<li><a href="#">10 Books that I will recommend</a></li>
								<li><a href="#">Benefits of house plants</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

        <?php include ('footer.php');?>

		<script src="assets/plugins/jquery.min.js"></script>
		<script src="assets/plugins/plugins.js"></script>
		<script src="assets/js/functions.min.js"></script>
	</body>
</html>