<?php include 'header.php' ?>

<div class="responsive-menu">
	<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
	<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->



<div class="page-title" style="background-image: url('images/banner.jpg');">
	<div class="inner">
		<h1>Hakkımızda</h1>
	</div> <!-- end .inner -->
</div> <!-- end .section -->


<div class="main-content">

	<div class="section white aboutsection">
		<div class="inner">
			<div class="container">
				<div class="row">
				
					<div class="col-sm-7">
						<div class="title-def-black">
							<h3><?php echo $hakkımızdacek['hakkımızda_baslik'] ?></h3>
						</div>


						<p class="text-light"><?php echo substr($hakkımızdacek['hakkımızda_icerik'],0,862)?>.</p>

<?php if (strlen($hakkımızdacek['hakkımızda_icerik'])>2000){?>

                     

											
<a href="dahafazla" class="button">Devamını Oku</a>

<?php } ?>


					</div> <!-- end .col-sm-6 -->
				</div> <!-- end .row -->
			</div> <!-- end .container -->
		</div> <!-- end .inner -->
	</div> <!-- end .section -->

	<div class="section medium blue transparent text-center" style="background-image: url('<?php echo $hakkımızdacek['hakkımızda_resim'] ?>');">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">


						<div class="button-row">

						</div> <!-- end .button-row -->
					</div> <!-- end .col-sm-8 -->
				</div> <!-- end .row -->
			</div> <!-- end .container -->
		</div> <!-- end .inner -->
	</div> <!-- end .section -->

	<div class="section white">
		<div class="inner">
			<div class="container">
				<div class="row aligned-cols">


				</div> <!-- end .row -->
			</div> <!-- end .container -->
		</div> <!-- end .inner -->
	</div> <!-- end .section -->



	<div class="section white">
		<div class="inner pt0">
			<div class="container">
				<div class="title-def-black">
					<h3>GRUP YÖNETİCİLERİMİZ</h3>
				</div>
			</div> <!-- end .container -->
			<div class="container-fluid">
				<div class="team">
					<div class="team-member">
						<img src="images/team1.png" alt="John Martin" class="img-responsive center-block">
						<div class="info">
							<h6>John Martin</h6>
							<span>Founder & CEO</span>
							<div class="social-icons">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div> <!-- end .team-member -->
					<div class="team-member">
						<img src="images/team2.png" alt="Mitcheal Kuis" class="img-responsive center-block">
						<div class="info">
							<h6>Mitcheal Kuis</h6>
							<span>Chief Mechanic</span>
							<div class="social-icons">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div> <!-- end .team-member -->
					<div class="team-member">
						<img src="images/team3.png" alt="Mike Hussey" class="img-responsive center-block">
						<div class="info">
							<h6>Mike Hussey</h6>
							<span>Chief Mechanic</span>
							<div class="social-icons">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div> <!-- end .team-member -->
					<div class="team-member">
						<img src="images/team4.png" alt="David Warner" class="img-responsive center-block">
						<div class="info">
							<h6>David Warner</h6>
							<span>Chief Mechanic</span>
							<div class="social-icons">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div> <!-- end .team-member -->
				</div> <!-- end .team -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .inner -->
	</div> <!-- end .section -->

</div>

<?php include 'footer.php' ?>