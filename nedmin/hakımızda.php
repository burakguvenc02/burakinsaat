
<?php include 'header.php' ?>
<?php 
$hakkımızdasor=$db->prepare("SELECT * FROM hakkımızda where hakkımızda_id=:id");
$hakkımızdasor->execute(array('id' => 1));
$hakkımızdacek=$hakkımızdasor->fetch(PDO::FETCH_ASSOC);
?>
<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i>Hakkımızda Düzenleme Sayfası</h3>
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

			<h7 style="color: blue"class="page-subhead-line"><b>Hakkımızda Sayfasını Buradan Duzeltin</b></h7>


		<?php } ?>
		

<form>

		<div class="form-panel" enctype="multipart/form-data">





			<div align="right">
				<a href="hakkımızda.php"><button class="btn btn-primary">hakkımızda Sayfasına Dön</button></a>
			</div>			
			<form class="form-horizontal style-form" method="POST" action="netting/islem.php" enctype="multipart/form-data">
				<input type="hidden" name="hakkımızda_id" value="<?php echo $hakkımızdacek['hakkımızda_id'] ?>">
				<input type="hidden" name="hakkımızda_resim" value="<?php echo $hakkımızdacek['hakkımızda_resim'] ?>">
				<div class="form-group ">
					  <input type="hidden" name="eski_yol" value="<?php echo $hakkımızdacek['hakkımızda_resim']; ?>">
           <input type="hidden" name="hakkımızda_id" value="<?php echo $hakkımızdacek['hakkımızda_id']; ?>">

<div class="form-group">

					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Yüklü Olan Resim  <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<img style="width: 490px;height: 200px;" src="<?php echo $hakkımızdacek['hakkımızda_resim'] ?>">
					</div>

					<input type="hidden" name="hakkımızda_resim" value="<?php echo $hakkımızdacek['hakkımızda_resim']; ?>">

				</div>

         
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Hakkımızda Resim</label>
					<div class="col-sm-5">
						<input name="hakkımızda_resim" type="file" class="form-control round-form" value="<?php echo $hakkımızdacek['hakkımızda_resim'] ?>">
					</div>
				</div>


</form>





				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Hakkımızda Baslık</label>
					<div class="col-sm-5">
						<input name="hakkımızda_baslik" type="text" class="form-control round-form" value="<?php echo $hakkımızdacek['hakkımızda_baslik'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Hakkımızda Detay</b></label>
					<div class="col-sm-9">
						<textarea  class="ckeditor col-md-12" id="editor1" name="hakkımızda_icerik" ><?php echo $hakkımızdacek['hakkımızda_icerik'] ?></textarea>
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
					<button  name="hakkımızdakaydet" class="btn btn-round btn-danger ">Değişiklikleri Kaydet</button>

				</div>



			</div>
			

		</form>




	</section><! --/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>