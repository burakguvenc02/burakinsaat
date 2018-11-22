<?php include 'header.php' ?>
<?php 
$habersor=$db->prepare("SELECT * FROM haberler ORDER BY haber_sira asc, id desc");
$habersor->execute();
?>

<?php include 'sidebar.php' ?>
<section id="main-content">
	<section class="wrapper site-min-height">
		



		<div class="row mt">

			<div class="col-md-12">

				<div class="content-panel">

					<h4>haberlerinizi Buradan Yönetin</h4>
					<hr>


					<table class="table table-striped table-advance table-hover">
						<h4><i class="fa fa-angle-right"><?php 

						if (@$_GET['durum']=="ok") { ?>

							<h7 style="color:green" class="page-subhead-line"><b>Güncelleme Başarıyla Kaydedildi</b></h7>


						<?php } elseif (@$_GET['durum']=="no") { ?>

							<h7 style="color:red"class="page-subhead-line"><b>Güncelleme Gerçekleştirilemedi</b> </h8>


							<?php } else { ?>


								<h9 style="color: blue"class="page-subhead-line">Haberlerinizi Bu Sayfadan Ekleyebilir Silebilir Veya Düzenleyebilrisiniz</h9>


								<?php } ?></i></h4>

								<hr>

								<thead>

									<tr>
										<th>#</th>
										<th>Eklenme Tarihi</th>
										<th>Haber Ad</th>

										<th class="text-center">Haber Sıra</th>
										<th class="text-center">Haber Durum</th>

										<th> <a href="haber-ekle.php"><button class="btn btn-round btn-danger"><i class="fa fa-plus"></i>&nbsp;&nbsp;Yeni Ekle</button></a></th>

									</tr>

								</thead>

								<tbody>




									<?php while($habercek=$habersor->fetch(PDO::FETCH_ASSOC)){?>
										<tr>
											<td><?php echo $habercek['id'] ?></td>
											<td><?php echo $habercek['haber_zaman'] ?></td>
											<td width="400"><?php echo $habercek['haber_ad'] ?></td>

											<td class="text-center"><?php echo $habercek['haber_sira'] ?></td>
											<td class="text-center"><?php 
											if ($habercek['haber_durum']==1 ) {
												echo "AKTİF"; 
											}else {
												echo "PASİF";
											}
											?></td>
											<td>

												<a href="haber-duzenle.php?id=<?php echo $habercek['id'] ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Düzenle</button></a>
												<a href="netting/islem.php?id=<?php echo $habercek['id']?>&habersil=ok&haberresimsil=<?php echo $habercek['haber_resim'] ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>&nbsp;&nbsp;Sil</button></a>
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