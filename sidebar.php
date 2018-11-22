				
<?php 
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:id");
$ayarsor->execute(array('id' => 0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>	
						<div class="col-sm-4">
							
							<div class="sidebar-widget">
								<h4></h4>
								<ul>
									<li><a href="dahafazla">Hakkımızda</a></li>
									<li><a href="hazırproje">Hazırda Olan Projeler</a></li>
									<li><a href="devamproje">Devam Eden Projeler</a></li>
									<li><a href="bitmisproje">Bitmiş Projeler</a></li>
					
								</ul>
							</div> <!-- end .sidebar-widget -->
							
						
						

						</div> <!-- end .col-sm-4 -->
