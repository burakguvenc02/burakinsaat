
<?php include 'header.php' ?>
<?php
$slidersor=$db->prepare("SELECT * FROM slider where slider_id=:id");
$slidersor->execute(array('id' => 1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
?>  
<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i> Genel Ayarlar</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<p>Genel Ayarlarınızı Buradan Değiştirebilirisiniz</p>
			</div>
		</div>
		<?php 

		if (@$_GET['durum']=="ok") { ?>

			<h7 style="color:green" class="page-subhead-line"><b>Güncelleme Başarıyla Kaydedildi</b></h7>


		<?php } elseif (@$_GET['durum']=="no") { ?>

			<h7 style="color:red"class="page-subhead-line"><b>Güncelleme Gerçekleştirilemedi</b> </h7>


		<?php } else { ?>

			<h7 style="color: blue"class="page-subhead-line"><b>Genel Ayarları Bu Sayfadan Düzenleyebilirsiniz</b></h7>


		<?php } ?>
		<div class="form-panel">







			<form class="form-horizontal style-form" method="POST" action="netting/islem.php" enctype="multipart/form-data">



				

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Slider Resim</label>
					<div class="col-sm-5">
						<input name="slider_resimyol" type="file" class="form-control round-form" value="<?php echo $slidercek['slider_resimyol'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Slider Ad</label>
					<div class="col-sm-5">
						<input name="slider_ad" type="text" class="form-control round-form" value="<?php echo $slidercek['slider_ad'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Slider link</label>
					<div class="col-sm-5">
						<input name="slider_link"  type="text" class="form-control round-form" value="<?php echo $slidercek['slider_link'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Slider Sıra</label>
					<div class="col-sm-5">
						<input name="slider_sira" type="text" class="form-control round-form" value="<?php echo $slidercek['slider_sira'] ?>">
					</div>
				</div>

				<div  class="form-group ">
					<label class="control-label col-md-2 col-sm-2 " for="first-name">Slider Durum <span class="required">*</span>
					</label>
					<div class="col-md-2 col-sm-5">
						<select class="form-control round-form" name="slider_durum">
							<option value="1">Aktif</option>
							<option value="0">Pasif</option>

						</select>
					</div>
				</div>
				<div align="center">
					<button  name="sliderkaydet" class="btn btn-round btn-danger ">Slider Ekle</button>

				</div>



			</div>
			

		</form>




	</section><! --/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>