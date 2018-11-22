<?php include 'header.php' ?>
 <?php  
$projesor=$db->prepare("SELECT * FROM projeler where proje_id=:proje_id ");
$projesor->execute(array('proje_id' => $_GET['proje_id']));
$projecek=$projesor->fetch(PDO::FETCH_ASSOC);
?>
		<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->



		<div class="page-title" style="background-image: url('images/banner.jpg');">
			<div class="inner">
				<h1>Proje Detayı</h1>
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


		<div class="main-content">

			<div class="section white aboutsection">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 clearfix">
								<img src="nedmin/<?php echo $projecek['proje_resim'] ?>" alt="about us" class="img-responsive">
							</div> <!-- end .col-sm-6 -->
							<div class="col-sm-7">
				                <div class="title-def-black">
				                	<h3><?php echo $projecek['proje_ad'] ?></h3>
				                </div>
								
								<p class="text-light"><?php echo $projecek['proje_detay'] ?></p>
								
							</div> <!-- end .col-sm-6 -->
						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</div> <!-- end .inner -->
			</div> <!-- end .section -->

			<div class="section medium blue transparent text-center" style="background-image: url('images/background05.jpg');">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<h1 class="large-heading"><?php echo $ayarcek['ayar_telefon'] ?></h1>
								<h3>HER SEYİN EN İYİSİNE LAYIKSINIZ...</h3>
								<div class="button-row">
									
								</div> <!-- end .button-row -->
							</div> <!-- end .col-sm-8 -->
						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</div> <!-- end .inner -->
			</div> <!-- end .section -->

		


		</div>

		<?php include 'footer.php' ?>