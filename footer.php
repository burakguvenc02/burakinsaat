<footer class="footer" style="background-image: url('images/footer-bg.jpg');">
			<div class="inner">
				<div class="top">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<img src="nedmin/<?php echo $ayarcek['alt_logo'] ?>" alt="constructor" class="footer-logo">
								<p></p>
								<div class="footer-social-icons">
									<a target="blank" href="<?php echo $ayarcek['ayar_facebook'] ?>"><i class="fa fa-facebook"></i></a>
									<a target="blank" href="<?php echo $ayarcek['ayar_twitter'] ?>"><i class="fa fa-twitter"></i></a>
								
									<a target="blank"  href="<?php echo $ayarcek['ayar_gmail'] ?>"><i class="fa fa-google-plus"></i></a>
								</div> <!-- end .footer-social-icons -->
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-3">
								<h4>İletişim Bilgilerimiz</h4>
								<div class="footer-contact clearfix">
									<i class="icon-pointer"></i>
									<div class="content"><?php echo $ayarcek['ayar_adres'] ?></div>
								</div> <!-- end .footer-contact -->
								<div class="footer-contact clearfix">
									<i class="icon-call-end"></i>
									<div class="content"><?php echo $ayarcek['ayar_telefon'] ?></div>
								</div> <!-- end .footer-contact -->
								<div class="footer-contact clearfix">
									<i class="icon-printer"></i>
									<div class="content"><?php echo $ayarcek['ayar_gsm'] ?></div>
								</div> <!-- end .footer-contact -->
								<div class="footer-contact clearfix">
									<i class="icon-envelope"></i>
									<div class="content"><?php echo $ayarcek['ayar_mail'] ?></div>
								</div> <!-- end .footer-contact -->
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-3">
								<h4>Çalışma Saatleri/Günleri</h4>
								<div class="footer-hours"><?php echo $ayarcek['ayar_mesai'] ?></div>
								>
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-3">
								<h4>Konumumuz</h4>
								<div class="footer-map" id="footer-map"></div>
							</div> <!-- end .col-sm-3 -->
						</div> <!-- end .row -->
						<hr>
					</div> <!-- end .container -->
				</div> <!-- end .top -->
				<div class="bottom">
					<div class="container">
						<span><?php echo $ayarcek['ayar_footer'] ?></span>

						<div id="back-to-top">
				          <a href="#top">Yukarı Cık <i class="fa fa-caret-up"></i></a>
				        </div>
				        <div class="clear"></div>
			        </div>
				</div> <!-- end .bottom -->
			</div> <!-- end .inner -->
		</footer> <!-- end .footer -->

		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg'></script>
		<!-- FlexSlider -->
		<script src="scripts/FlexSlider/jquery.flexslider-min.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.countTo.js"></script>
		<!-- Scripts.js -->
		<script src="js/scripts.js"></script>
	     <!-- jQuery KenBurn Slider  -->
	    <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.tools.min.js'></script>
	    <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.essential.min.js'></script>
    	<script type='text/javascript' src='rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

	    <script type='text/javascript' src='js/esgrid.js'></script>
		<script type='text/javascript' src='js/essential-grid/public/assets/js/jquery.themepunch.essential.min.js'></script>
		<script type='text/javascript' src='js/essential-grid/public/assets/js/lightbox.js'></script>
		<script type='text/javascript' src='js/essential-grid/public/assets/js/jquery.themepunch.tools.min.js'></script>


		<script type="text/javascript">

			/******************************************
				-	PREPARE PLACEHOLDER FOR SLIDER	-
			******************************************/
			

			var setREVStartSize = function() {
				var	tpopt = new Object();
					tpopt.startwidth = 960;
					tpopt.startheight = 350;
					tpopt.container = jQuery('#rev_slider_12_1');
					tpopt.fullScreen = "on";
					tpopt.forceFullWidth="off";

				tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
			};

			/* CALL PLACEHOLDER */
			setREVStartSize();


			var tpj=jQuery;
			tpj.noConflict();
			var revapi12;

			tpj(document).ready(function() {

			if(tpj('#rev_slider_12_1').revolution == undefined){
				revslider_showDoubleJqueryError('#rev_slider_12_1');
			}else{
			   revapi12 = tpj('#rev_slider_12_1').show().revolution(
				{	
											dottedOverlay:"none",
					delay:9000,
					startwidth:960,
					startheight:350,
					hideThumbs:200,

					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:2,
					
											
					simplifyAll:"off",

					navigationType:"bullet",
					navigationArrows:"solo",
					navigationStyle:"custom",

					touchenabled:"on",
					onHoverStop:"on",
					nextSlideOnWindowFocus:"off",

					swipe_threshold: 75,
					swipe_min_touches: 1,
					drag_block_vertical: false,
					
											
											
					keyboardNavigation:"off",

					navigationHAlign:"center",
					navigationVAlign:"bottom",
					navigationHOffset:0,
					navigationVOffset:20,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:20,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:20,
					soloArrowRightVOffset:0,

					shadow:0,
					fullWidth:"off",
					fullScreen:"on",

											spinner:"spinner2",
											
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,

					shuffle:"off",

					
					forceFullWidth:"off",
					fullScreenAlignForce:"off",
					minFullScreenHeight:"",
					
					hideThumbsOnMobile:"off",
					hideNavDelayOnMobile:1500,
					hideBulletsOnMobile:"off",
					hideArrowsOnMobile:"off",
					hideThumbsUnderResolution:0,

											fullScreenOffsetContainer: "#site-header",
					fullScreenOffset: "",
											hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:751,
					startWithSlide:0					});



								}
			});	/*ready*/

		</script>
	</body>
</html>