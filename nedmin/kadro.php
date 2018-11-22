<?php include 'header.php' ?>
<?php 
$kadrosor=$db->prepare("SELECT * FROM kadro");
$kadrosor->execute();
?>

<?php include 'sidebar.php' ?>
<section id="main-content">
	<section class="wrapper site-min-height">
		



		<div class="row mt">

			<div class="col-md-12">

				<div class="content-panel">

					<h4>Kadronuzu Buradan Yönetebilirsiniz</h4>
					<hr>


					<table class="table table-striped table-advance table-hover">
						<h4><i class="fa fa-angle-right"><?php 

                if (@$_GET['durum']=="ok") { ?>

                  <h5 style="color:green" class="page-subhead-line"><b>İşleminiz Başarıyla Kaydedildi</b></h5>


                <?php } elseif (@$_GET['durum']=="no") { ?>

                  <h5 style="color:red"class="page-subhead-line"><b>İşleminiz Gerçekleştirilemedi</b> </h5>


                <?php } else { ?>


                <h5 style="color:blue"class="page-subhead-line"><b>Kadronuzu Bu Sayfadan Ekleyebilir Düzenleyebilir Veya Silebilirsiniz</b> </h5>


                <?php } ?></i></h4>
						<hr>

						<thead>

							<tr>
								
								<th width="200">Resim</th>
								<th>Kişi Ad</th>
								<th>Adres Bilgileri</th>
								<th class="text-center">Yetki</th>
								
<th> <a href="kadro-ekle.php"><button class="btn btn-round btn-danger"><i class="fa fa-plus"></i>&nbsp;&nbsp;Yeni Ekle</button></a></th>

							</tr>

						</thead>

						<tbody>




							<?php while($kadrocek=$kadrosor->fetch(PDO::FETCH_ASSOC)){?>
								<tr>
									<td><img  style="width: 100px;height: 100px;" src="<?php echo $kadrocek['kadro_resim']?>"></td>
									<td><?php echo $kadrocek['kadro_ad'] ?></td>
									<td><?php echo $kadrocek['kadro_adres'] ?></td>
								<td class="text-center"><?php 
									if ($kadrocek['kadro_yetki']==1 ) {
										echo "Yönetici"; 
									}elseif($kadrocek['kadro_yetki']==2) {
										echo "Yardımcı";
									}elseif($kadrocek['kadro_yetki']==3){
										echo "Normal";
									}
									?></td>
								   <td>
                                      
                                      <a href="kadro-duzenle.php?kadro_id=<?php echo $kadrocek['kadro_id'] ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Düzenle</button></a>
                                     <a href="netting/islem.php?kadro_id=<?php echo $kadrocek['kadro_id']?>&kadrosil=ok&kadroresimsil=<?php echo $kadrocek['kadro_resim'] ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>&nbsp;&nbsp;Sil</button></a>
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