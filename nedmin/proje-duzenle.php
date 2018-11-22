
<?php include 'header.php' ?>
<?php
$proje_id=$_GET['proje_id'];

$projesor=$db->prepare("SELECT * FROM projeler where proje_id='$proje_id'");
$projesor->execute();
$projecek=$projesor->fetch(PDO::FETCH_ASSOC);
?>  
<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i>proje Düzenleme Sayfası</h3>
		<div class="row mt">
			<div class="col-lg-12">

			</div>
		</div>
		<?php 

		if (@$_GET['durum']=="ok") { ?>

			<h7 style="color:green" class="page-subhead-line"><b>Güncelleme Başarıyla Kaydedildi</b></h7>


		<?php } elseif (@$_GET['durum']=="no") { ?>

			<h7 style="color:red"class="page-subhead-line"><b>Güncelleme Gerçekleştirilemedi</b> </h7>


		<?php } else { ?>

			<h7 style="color: blue"class="page-subhead-line"><b>projelerinizi Sayfadan Düzenleyebilirsiniz</b></h7>


		<?php } ?>
		<div class="form-panel">





			<div align="right">
				<a href="projeler.php"><button class="btn btn-primary">Proje Sayfasına Dön</button></a>
			</div>			
			<form class="form-horizontal style-form" method="POST" action="netting/islem.php" enctype="multipart/form-data">
				<input type="hidden" name="proje_id" value="<?php echo $projecek['proje_id'] ?>">
				<input type="hidden" name="proje_resim" value="<?php echo $projecek['proje_resim'] ?>">
				<div class="form-group ">
					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Yüklü Olan Resim  <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<img style="width: 490px;height: 200px;" src="<?php echo $projecek['proje_resim'] ?>">
					</div>

					<input type="hidden" name="proje_resim" value="<?php echo $projecek['proje_resim']; ?>">

				</div>


				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Proje Resim</label>
					<div class="col-sm-5">
						<input name="proje_resim" type="file" class="form-control round-form" value="<?php echo $projecek['proje_resim'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Proje Ad</label>
					<div class="col-sm-5">
						<input name="proje_ad" type="text" class="form-control round-form" value="<?php echo $projecek['proje_ad'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Proje Detay</b></label>
					<div class="col-sm-9">
						<textarea  class="ckeditor col-md-12" id="editor1" name="proje_detay" ><?php echo $projecek['proje_detay'] ?></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Proje Sıra</label>
					<div class="col-sm-5">
						<input name="proje_sira" type="text" class="form-control round-form" value="<?php echo $projecek['proje_sira'] ?>">
					</div>
				</div>

				
				<div  class="form-group ">
					<label class="control-label col-md-2 col-sm-2 " for="first-name">Proje Durum <span class="required">*</span>
					</label>
					<div class="col-md-2 col-sm-5">
						<select class="form-control round-form" name="proje_durum">

							<?php  
							if ($projecek['proje_durum']==0) {?>
								<option value="0">Hazırda Olan Proje</option>
								<option value="1">Yapımda Olan Proje</option>
								<option value="2">Bitmiş Olan Proje</option>
							<?php }elseif ($projecek['proje_durum']==1) {?>
								<option value="1">Yapımda Olan Proje</option>
								<option value="0">Hazırda Olan Proje</option>
								<option value="2">Bitmiş Olan Proje</option>

							<?php }  elseif($projecek['proje_durum']==2) {?>                                         
								<option value="2">Bitmiş Olan Proje</option>
								<option value="0">Hazırda Olan Proje</option>
								<option value="1">Yapımda Olan Proje</option>
							<?php   } ?>

						</select>
					</div>
				</div>
				<div align="center">
					<button  name="projeduzenle" class="btn btn-round btn-danger ">Değişiklikleri Kaydet</button>

				</div>



			</div>
			

		</form>




	</section><! --/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>