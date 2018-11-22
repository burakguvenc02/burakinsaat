
<?php include 'header.php' ?>
<?php
$kadrosor=$db->prepare("SELECT * FROM kadro where kadro_id=:kadro_id");
$kadrosor->execute(array('kadro_id' => 0));
$kadrocek=$kadrosor->fetch(PDO::FETCH_ASSOC);
?>  
<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i> Genel Ayarlar</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<p>kadrolerinizi Buradan Ekleyebilirsiniz</p>
			</div>
		</div>
		<?php 

		if (@$_GET['durum']=="ok") { ?>

			<h7 style="color:green" class="page-subhead-line"><b>kadro Başarıyla Kaydedildi</b></h7>


		<?php } elseif (@$_GET['durum']=="no") { ?>

			<h7 style="color:red"class="page-subhead-line"><b>kadro Ekleme Gerçekleştirilemedi</b> </h7>


		<?php } else { ?>

			<h7 style="color: blue"class="page-subhead-line"><b>kadrolenizi Ekleyin</b></h7>


		<?php } ?>
		<div class="form-panel">







			<form class="form-horizontal style-form" method="POST" action="netting/islem.php" enctype="multipart/form-data">


				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Kişi Resmi</b></label>
					<div class="col-sm-5">
						<input name="kadro_resim" type="file" class="form-control round-form" value="<?php echo $kadrocek['kadro_resim'] ?>">
					</div>
				</div>

				

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Adı Soyadı</b></label>
					<div class="col-sm-5">
						<input name="kadro_ad" type="text" class="form-control round-form" value="<?php echo $kadrocek['kadro_ad'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Adres Bilgileri</b></label>
					<div class="col-sm-5">
						<input name="kadro_adres" type="text" class="form-control round-form" value="<?php echo $kadrocek['kadro_adres'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Kişi Hakkında</b></label>
					<div class="col-sm-9">
						<textarea name="kadro_detay" type="text" class="form-control round-form"><?php echo $kadrocek['kadro_detay'] ?></textarea>
					</div>
				</div>

				<div  class="form-group ">
					<label class="control-label col-md-2 col-sm-2 " for="first-name"><b>Yetki</b><span class="required">*</span>
					</label>
					<div class="col-md-2 col-sm-5">
						<select class="form-control round-form" name="kadro_yetki">
							<option value="1">Yonetici</option>
							<option value="2">Yardımcı</option>
							<option value="3">Normal</option>
						</select>
					</div>
				</div>

				
				
				<div align="center">
					<button  name="kadrokaydet" class="btn btn-round btn-danger ">Kişiyi Ekle</button>

				</div>



			</div>
			

		</form>




	</section><!--/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>