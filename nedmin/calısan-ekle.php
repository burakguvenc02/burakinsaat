
<?php include 'header.php' ?>
<?php 
$kadrosor=$db->prepare("SELECT * FROM kadro ");
$kadrosor->execute();
$kadrocek=$kadrosor->fetch(PDO::FETCH_ASSOC);
?>

<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i>İşçi Ekleme Sayfası</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<p>Bu Sayfada İşçi Ekleyebilirsiniz</p>
			</div>
		</div>
		<?php 

		if (@$_GET['durum']=="ok") { ?>

			<h7 style="color:green" class="page-subhead-line"><b>Güncelleme Başarıyla Kaydedildi</b></h7>


		<?php } elseif (@$_GET['durum']=="no") { ?>

			<h7 style="color:red"class="page-subhead-line"><b>Güncelleme Gerçekleştirilemedi</b> </h7>


		<?php } else { ?>

			<h7 style="color: blue"class="page-subhead-line"><b>İşçi Ekliyorsunuz</b></h7>


		<?php } ?>


		<div class="form-panel">



			<form   enctype="multipart/form-data"  class="form-horizontal style-form" method="POST" action="netting/islem.php">

				


				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Çalışan Resmi Seç</b></label>
					<div class="col-sm-5">
						<input name="kadro_resim" type="file" class="form-control round-form" value="<?php echo $kadrocek['kadro_resim'] ?>">
					</div>
				</div>



				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Baslık</b></label>
					<div class="col-sm-5">
						<input name="kadro_baslik" type="text" class="form-control round-form" value="<?php echo $kadrocek['kadro_baslik'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>kadro Sayfa Detayı</b></label>
					<div class="col-sm-10">
						<textarea  class="ckeditor col-md-12" id="editor1" name="kadro_icerik" ><?php echo $kadrocek['kadro_icerik'] ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Vizyonumuz</b></label>
					<div class="col-sm-9">
						<textarea name="kadro_vizyon" type="text" class="form-control round-form"><?php echo $kadrocek['kadro_vizyon'] ?></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Misyonumuz</b></label>
					<div class="col-sm-9">
						<textarea name="kadro_misyon" type="text" class="form-control round-form"><?php echo $kadrocek['kadro_misyon'] ?></textarea>
					</div>
				</div>
				<div  class="form-group ">
					<label class="control-label col-md-2 col-sm-2 " for="first-name">Çalışan Yetki <span class="required">*</span>
					</label>
					<div class="col-md-2 col-sm-5">
						<select class="form-control round-form" name="haber_durum">
							<option value="1">Yonetici</option>
							<option value="2">Yardımcı</option>
                           <option value="3">Normal</option>
						</select>
					</div>
				</div>




				<div align="center">
					<button  name="kadrokaydet" class="btn btn-round btn-success ">Ayarları Kaydet</button>

				</div>

			</form>




		</section><! --/wrapper -->




	</section><!-- /MAIN CONTENT -->
	<?php include 'footer.php' ?>