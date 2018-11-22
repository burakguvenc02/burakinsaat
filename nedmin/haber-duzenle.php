
<?php include 'header.php' ?>
<?php
$haber_id=$_GET['id'];

$habersor=$db->prepare("SELECT * FROM haberler where id='$haber_id'");
$habersor->execute();
$habercek=$habersor->fetch(PDO::FETCH_ASSOC);
?>  
<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i>Haber Düzenleme Sayfası</h3>
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

			<h7 style="color: blue"class="page-subhead-line"><b>Haberlerinizi Sayfadan Düzenleyebilirsiniz</b></h7>


		<?php } ?>
		<div class="form-panel">





			<div align="right">
				<a href="haberler.php"><button class="btn btn-primary">Haber Sayfasına Dön</button></a>
			</div>			
			<form class="form-horizontal style-form" method="POST" action="netting/islem.php" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $habercek['id'] ?>">
				<input type="hidden" name="haber_resim" value="<?php echo $habercek['haber_resim'] ?>">
				<div class="form-group ">
					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Yüklü Olan Resim  <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<img style="width: 490px;height: 200px;" src="<?php echo $habercek['haber_resim'] ?>">
					</div>

					<input type="hidden" name="haber_resim" value="<?php echo $habercek['haber_resim']; ?>">

				</div>


				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Haber Resim</label>
					<div class="col-sm-5">
						<input name="haber_resim" type="file" class="form-control round-form" value="<?php echo $habercek['haber_resim'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Haber Ad</label>
					<div class="col-sm-5">
						<input name="haber_ad" type="text" class="form-control round-form" value="<?php echo $habercek['haber_ad'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Haber Detay</b></label>
					<div class="col-sm-9">
						<textarea  class="ckeditor col-md-12" id="editor1" name="haber_detay" ><?php echo $habercek['haber_detay'] ?></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Haber Sıra</label>
					<div class="col-sm-5">
						<input name="haber_sira" type="text" class="form-control round-form" value="<?php echo $habercek['haber_sira'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Anahtar Kelimeler</b></label>
					<div class="col-sm-5">
						<input name="haber_keyword" type="text" class="form-control round-form" value="<?php echo $habercek['haber_keyword'] ?>">
					</div>
				</div>
				<div  class="form-group ">
					<label class="control-label col-md-2 col-sm-2 " for="first-name">Haber Durum <span class="required">*</span>
					</label>
					<div class="col-md-2 col-sm-5">
						<select class="form-control round-form" name="haber_durum">

							<?php  
							if ($habercek['haber_durum']==0) {?>
								<option value="0">Pasif</option>
								<option value="1">Aktif</option>
							<?php }elseif ($habercek['haber_durum']==1) {?>
								<option value="1">Aktif</option>
								<option value="0">Pasif</option>                                          
							<?php   } ?>

						</select>
					</div>
				</div>
				<div align="center">
					<button  name="haberduzenle" class="btn btn-round btn-danger ">Değişiklikleri Kaydet</button>

				</div>



			</div>
			

		</form>




	</section><! --/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>