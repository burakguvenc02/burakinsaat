
		<?php include 'header.php' ?>
		<?php 
$habersor=$db->prepare("SELECT * FROM haberler order by haber_zaman DESC limit 3 ");
$habersor->execute();
?>
<?php 
$kadrosor=$db->prepare("SELECT * FROM kadro");
$kadrosor->execute();
?>	
		
<?php  
$projesor=$db->prepare("SELECT * FROM projeler ");
$projesor->execute();

?>

		<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->


		<div id="rev_slider_12_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:#E9E9E9;padding:0px;">
			<!-- START REVOLUTION SLIDER 4.6.5 fullscreen mode -->
			<div id="rev_slider_12_1" class="rev_slider fullscreenbanner" style="display:none;">
				<ul>
					<!-- SLIDE  -->
					
					<!-- SLIDE  -->
					<?php while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)){?>

					<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-thumb="" data-saveperformance="off" data-title="Slide">
					<!-- MAIN IMAGE -->
					<img src="nedmin/<?php echo $slidercek['slider_resimyol'] ?>" alt="building-slide2" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
		
					</li>
				
<?php } ?>

				</ul>
				<div class="tp-bannertimer">
				</div>
			</div>
		</div>
		<!-- END REVOLUTION SLIDER -->

  



		<section class="servs">
		    <div class="container">
		    	 <div class="title-def">
                <h2>Haberler</h2>
                </div>
		      <h4>En Son Eklenen Haberler</h4>
		        <div class="row">
		            <?php while($habercek=$habersor->fetch(PDO::FETCH_ASSOC)){?>
		            <div class="col-md-4">
		                <div class="serv-box">

		                    <a class="popup-image" href="nedmin/<?php echo $habercek['haber_resim'] ?>"><i class="fa fa-image"></i><img src="nedmin/<?php echo $habercek['haber_resim'] ?>" alt=""></a>
		                    <a href="haber-detay.php?id=<?php echo $habercek['id'] ?>"><h4><?php echo $habercek['haber_ad'] ?></h4></a>
		                    <p><b>Eklenme Tarihi</b> : <?php echo $habercek['haber_zaman'] ?></p>
		                    <p><?php echo substr($habercek['haber_detay'],0,250) ?></p>
		                    <a href="haber-<?=seo($habercek["haber_ad"]).'-'.$habercek["id"]?>">Devamını Oku</a>
		                    <hr>
		                </div>
		            </div>
		        <?php } ?>
		           
		        </div>
		    </div>
		</section>











		







		<div class="section brown testimonial-section">
			<div class="inner">
				<div class="container">
					<div class="title-def-black">
	                	<h3>Kadromuz</h3>
	                </div>

		            
		            
					<div class="testimonial-slider owl-carousel">
						
						<?php while($kadrocek=$kadrosor->fetch(PDO::FETCH_ASSOC)){?>
						<div class="testimonial">
							<div class="quote"><?php echo $kadrocek['kadro_detay'] ?></div>
							<div class="author">
								<div class="image"><img src="nedmin/<?php echo $kadrocek['kadro_resim'] ?>" alt="Chris Evans" class="img-responsive"></div>
								<h6><?php echo $kadrocek['kadro_ad'] ?></h6>
								<h6><b> Yetki : </b><?php 
									if ($kadrocek['kadro_yetki']==1 ) {
										echo "Yönetici"; 
									}elseif($kadrocek['kadro_yetki']==2) {
										echo "Yardımcı";
									}elseif($kadrocek['kadro_yetki']==3){
										echo "Normal";
									}
									?></h6>
								<span><?php echo $kadrocek['kadro_adres'] ?></span>
							</div> <!-- end .author -->
						</div> <!-- end .testimonial -->
					<?php } ?>
					</div> <!-- end .testimonial-slider -->
			
			</div> <!-- end .inner -->
		</div> <!-- end .section -->




		


	




		<?php include 'footer.php' ?>