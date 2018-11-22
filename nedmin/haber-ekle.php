
<?php include 'header.php' ?>
<?php
$habersor=$db->prepare("SELECT * FROM haberler where id=:id");
$habersor->execute(array('id' => 1));
$habercek=$habersor->fetch(PDO::FETCH_ASSOC);
?>  
<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i> Genel Ayarlar</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<p>Haberlerinizi Buradan Ekleyebilirsiniz</p>
			</div>
		</div>
		<?php 

		if (@$_GET['durum']=="ok") { ?>

			<h7 style="color:green" class="page-subhead-line"><b>Haber Başarıyla Kaydedildi</b></h7>


		<?php } elseif (@$_GET['durum']=="no") { ?>

			<h7 style="color:red"class="page-subhead-line"><b>Haber Ekleme Gerçekleştirilemedi</b> </h7>


		<?php } else { ?>

			<h7 style="color: blue"class="page-subhead-line"><b>Haberlenizi Ekleyin</b></h7>


		<?php } ?>
		<div class="form-panel">







			<form class="form-horizontal style-form" method="POST" action="netting/islem.php" enctype="multipart/form-data">


<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Haber Resim</b></label>
					<div class="col-sm-5">
						<input name="haber_resim" type="file" class="form-control round-form" value="<?php echo $habercek['haber_resim'] ?>">
					</div>
				</div>

				

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Haber Ad</b></label>
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
					<label class="col-sm-2 col-sm-2 control-label"><b>Haber Sıra</b></label>
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
					<label class="control-label col-md-2 col-sm-2 " for="first-name"><b>Haber Durum</b><span class="required">*</span>
					</label>
					<div class="col-md-2 col-sm-5">
						<select class="form-control round-form" name="haber_durum">
							<option value="1">Aktif</option>
							<option value="0">Pasif</option>

						</select>
					</div>
				</div>
				<div align="center">
					<button  name="haberkaydet" class="btn btn-round btn-danger ">Haber Ekle</button>

				</div>



			</div>
			

		</form>




	</section><!--/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>