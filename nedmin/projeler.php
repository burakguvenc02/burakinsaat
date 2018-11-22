<?php include 'header.php' ?>
<?php 
$projesor=$db->prepare("SELECT * FROM projeler 	");
$projesor->execute();
?>

<?php include 'sidebar.php' ?>
<section id="main-content">
	<section class="wrapper site-min-height">
		



		<div class="row mt">

			<div class="col-md-12">

				<div class="content-panel">

					<h4>Projelerinizi Buradan Yönetin</h4>
					<hr>


					<table class="table table-striped table-advance table-hover">
						<h4><i class="fa fa-angle-right"><?php 

						if (@$_GET['durum']=="ok") { ?>

							<h5 style="color:green" class="page-subhead-line"><b>İşleminiz Başarıyla Kaydedildi</b></h5>


						<?php } elseif (@$_GET['durum']=="no") { ?>

							<h5 style="color:red"class="page-subhead-line"><b>İşleminiz Gerçekleştirilemedi</b> </h5>


						<?php } else { ?>


							<h5 style="color:blue"class="page-subhead-line"><b>Projelerinizi Bu Sayfadan Ekleyebilir Düzenleyebilir Veya Silebilirsiniz</b> </h5>


							<?php } ?></i></h4>

							<hr>

							<thead>

								<tr>
									<th>#</th>
									<th>Eklenme Tarihi</th>
									<th>Proje Ad</th>
									<th class="text-center">Proje Sıra</th>

									<th class="text-center">Proje Durum</th>

									
									<th> <a href="proje-ekle.php"><button class="btn btn-round btn-danger"><i class="fa fa-plus"></i>&nbsp;&nbsp;Yeni Ekle</button></a></th>

								</tr>

							</thead>

							<tbody>




								<?php while($projecek=$projesor->fetch(PDO::FETCH_ASSOC)){?>
									<tr>
										<td><?php echo $projecek['proje_id'] ?></td>
										<td><?php echo $projecek['proje_zaman'] ?></td>
										<td width="350"><?php echo $projecek['proje_ad'] ?></td>
										<td class="text-center"><?php echo $projecek['proje_sira'] ?></td>
										
										<td class="text-center"><?php 
										if ($projecek['proje_durum']==0 ) {
											echo "Hazırda Olan Proje"; 
										}

										elseif ($projecek['proje_durum']==1 ) {
											echo "Yapımda Olan Proje"; 
										}

										elseif ($projecek['proje_durum']==2 ) {
											echo "Bitmiş Olan Proje"; 


										}	?>
										<td>

											<a href="proje-duzenle.php?proje_id=<?php echo $projecek['proje_id'] ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Düzenle</button></a>
											<a href="netting/islem.php?proje_id=<?php echo $projecek['proje_id']?>&projesil=ok&projeresimsil=<?php echo $projecek['proje_resim'] ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>&nbsp;&nbsp;Sil</button></a>
										</td>
									</tr>

								<?php } ?>


							</tbody>
						</table>
					</div><!-- /content-panel -->



				</div><!-- /col-md-12 -->
			</div><!-- /row -->



		</section><!--/wrapper -->

	</section><!-- /MAIN CONTENT -->
	<?php include 'footer.php' ?>