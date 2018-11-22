<?php include 'header.php' ?>
<?php  
$habersor=$db->prepare("SELECT * FROM haberler where id=:id ");
$habersor->execute(array('id' => $_GET['id']));
$habercek=$habersor->fetch(PDO::FETCH_ASSOC);
?>
		<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->



		<div class="page-title" style="background-color: blue" >
			<div class="inner">
				<h1>Haber Detay</h1>
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="services-details">
								<h3><?php echo $habercek['haber_ad'] ?></h3>

								<img style="width: 750px;height: 300px" src="nedmin/<?php echo $habercek['haber_resim'] ?>" class="img-responsive aligncenter" alt="" >
									<h6> Eklenme Tarihi : <?php echo $habercek['haber_zaman'] ?></h6> 
									<hr>   
							</div> <!-- end .services-details -->
												<p><?php echo $habercek['haber_detay'] ?></p>
						</div> <!-- end .col-sm-8 -->
						<?php include 'sidehaber.php' ?>
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

<?php include 'footer.php' ?>