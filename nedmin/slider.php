<?php include 'header.php' ?>
<?php 
$slidersor=$db->prepare("SELECT * FROM slider");
$slidersor->execute();
?>

<?php include 'sidebar.php' ?>
<section id="main-content">
	<section class="wrapper site-min-height">
		



		<div class="row mt">

			<div class="col-md-12">

				<div class="content-panel">

					<h4>Sliderlerinizi Buradan Yönetin</h4>
					<hr>


					<table class="table table-striped table-advance table-hover">
						<h4><i class="fa fa-angle-right"><?php 

                if (@$_GET['durum']=="ok") { ?>

                  <h5 style="color:green" class="page-subhead-line"><b>İşleminiz Başarıyla Kaydedildi</b></h5>


                <?php } elseif (@$_GET['durum']=="no") { ?>

                  <h5 style="color:red"class="page-subhead-line"><b>İşleminiz Gerçekleştirilemedi</b> </h5>


                <?php } else { ?>


                <h5 style="color:blue"class="page-subhead-line"><b>Sliderlerinizi Bu Sayfadan Ekleyebilir Düzenleyebilir Veya Silebilirsiniz</b> </h5>


                <?php } ?></i></h4>
						<hr>

						<thead>

							<tr>
								
								<th width="50">Resim</th>
								<th>Slider Ad</th>
								<th>Slider Link</th>
								<th>Slider Sıra</th>
								<th>Slider Durum</th>

<th> <a href="slider-ekle.php"><button class="btn btn-round btn-danger"><i class="fa fa-plus"></i>&nbsp;&nbsp;Yeni Ekle</button></a></th>

							</tr>

						</thead>

						<tbody>




							<?php while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)){?>
								<tr>
									<td><img  style="width: 150px;height: 50px;" src="<?php echo $slidercek['slider_resimyol']?>"></td>
									<td><?php echo $slidercek['slider_ad'] ?></td>
									<td><?php echo $slidercek['slider_link'] ?></td>
									<td><?php echo $slidercek['slider_sira'] ?></td>
									<td><?php 
                             if ($slidercek['slider_durum']==1 ) {
                             echo "AKTİF"; 
                             }else {
                             echo "PASİF";
}
                             ?></td>
								   <td>
                                      
                                      <a href="slider-duzenle.php?id=<?php echo $slidercek['id'] ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Düzenle</button></a>
                                     <a href="netting/islem.php?id=<?php echo $slidercek['id']?>&slidersil=ok&sliderresimsil=<?php echo $slidercek['slider_resimyol'] ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>&nbsp;&nbsp;Sil</button></a>
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