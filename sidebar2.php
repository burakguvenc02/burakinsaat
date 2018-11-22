				
<?php 
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:id");
$ayarsor->execute(array('id' => 0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>	
						<div class="col-sm-4">
							
							<div class="sidebar-widget">
								<div style="" class="col-sm-12">

<div style="margin-top: 30px;" class="services-sidebar-widget">
									<div class="title-def-black">
										
										<center><h3>Tanıtım Videosu</h3></center>
										
										
									</div>
										<div class="embed-responsive embed-responsive-16by9 mb-xl">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $hakkımızdacek['hakkımızda_video'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
								</div> <!-- end .services-sidebar-widget -->
								<div style="margin-top: 30px;" class="services-sidebar-widget">
									<div class="title-def-black">

										<center><h3>Vizyonumuz</h3></center>
										
										
									</div>
									<p><?php echo $hakkımızdacek['hakkımızda_vizyon'] ?></p>
								</div> <!-- end .services-sidebar-widget -->
								<div style="margin-top: 30px;" class="services-sidebar-widget">
									<div class="title-def-black">
										<center><h3>Misyonumuz</h3></center>
										
										
									</div>
									<p><?php echo $hakkımızdacek['hakkımızda_misyon'] ?></p>
								</div> <!-- end .services-sidebar-widget -->

							</div> <!-- end .col-sm-4 -->
							</div> <!-- end .sidebar-widget -->
							
							<div class="sidebar-widget">
							
								</div> <!-- end .social-icons -->
							</div> <!-- end .sidebar-widget -->
						

						</div> <!-- end .col-sm-4 -->
