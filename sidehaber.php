				
<?php 
$habersor=$db->prepare("SELECT * FROM haberler");
$habersor->execute();
$habercek=$habersor->fetch(PDO::FETCH_ASSOC);
?>	
						<div class="col-sm-4">
							
							<div class="sidebar-widget">
								<h4>En Son Eklenen Haberler</h4>
								<ul>
								<?php while($habercek=$habersor->fetch(PDO::FETCH_ASSOC)){?>

									<li><a href="haber-detay.php?id=<?php echo $habercek['id'] ?>"><?php echo $habercek['haber_ad'] ?></a></li>
									<?php } ?>
								</ul>
							</div> <!-- end .sidebar-widget -->
							
							

						</div> <!-- end .col-sm-4 -->
