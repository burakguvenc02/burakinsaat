
<?php include 'header.php' ?>
<?php 
$hakkımızdasor=$db->prepare("SELECT * FROM hakkımızda where hakkımızda_id=:id");
$hakkımızdasor->execute(array('id' => 1));
$hakkımızdacek=$hakkımızdasor->fetch(PDO::FETCH_ASSOC);
?>

<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i>Hakkımızda</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<p>Hakkımızda Sayfasını Buradan Yönetibilirsiniz</p>
			</div>
		</div>
		<?php 

		if (@$_GET['durum']=="ok") { ?>

			<h7 style="color:green" class="page-subhead-line"><b>Güncelleme Başarıyla Kaydedildi</b></h7>


		<?php } elseif (@$_GET['durum']=="no") { ?>

			<h7 style="color:red"class="page-subhead-line"><b>Güncelleme Gerçekleştirilemedi</b> </h7>


		<?php } else { ?>

			<h7 style="color: blue"class="page-subhead-line"><b>Hakkımızda Sayfasını Düzeltiyorsunuz</b></h7>


		<?php } ?>
		<div class="form-panel">
			





		


		<div class="form-panel">



			<form   class="form-horizontal style-form" method="POST" action="netting/islem.php">

				





				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Baslık</b></label>
					<div class="col-sm-5">
						<input name="hakkımızda_baslik" type="text" class="form-control round-form" value="<?php echo $hakkımızdacek['hakkımızda_baslik'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Hakkımızda Sayfa Detayı</b></label>
					<div class="col-sm-10">
						<textarea  class="ckeditor col-md-12" id="editor1" name="hakkımızda_icerik" ><?php echo $hakkımızdacek['hakkımızda_icerik'] ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Hakkımızda Video</b></label>
					<div class="col-sm-5">
						<input name="hakkımızda_video" type="text" class="form-control round-form" value="<?php echo $hakkımızdacek['hakkımızda_video'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Vizyonumuz</b></label>
					<div class="col-sm-9">
						<textarea name="hakkımızda_vizyon" type="text" class="form-control round-form"><?php echo $hakkımızdacek['hakkımızda_vizyon'] ?></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Misyonumuz</b></label>
					<div class="col-sm-9">
						<textarea name="hakkımızda_misyon" type="text" class="form-control round-form"><?php echo $hakkımızdacek['hakkımızda_misyon'] ?></textarea>
					</div>
				</div>





				<div align="center">
					<button  name="hakkımızdakaydet" class="btn btn-round btn-success ">Ayarları Kaydet</button>

				</div>

			</form>




		</section><! --/wrapper -->




	</section><!-- /MAIN CONTENT -->
	<?php include 'footer.php' ?>