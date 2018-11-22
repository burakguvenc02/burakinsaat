
<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i>Api Ayarları</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<p>Api Ayarlarınızı Buradan Değiştirebilirisiniz</p>
			</div>
		</div>
		<?php 

		if (@$_GET['durum']=="ok") { ?>

			<h7 style="color:green" class="page-subhead-line"><b>Güncelleme Başarıyla Kaydedildi</b></h7>


		<?php } elseif (@$_GET['durum']=="no") { ?>

			<h7 style="color:red"class="page-subhead-line"><b>Güncelleme Gerçekleştirilemedi</b> </h7>


		<?php } else { ?>

			<h7 style="color: blue"class="page-subhead-line"><b>Api Ayarları Bu Sayfadan Düzenleyebilirsiniz</b></h7>


		<?php } ?>
		<div class="form-panel">







			<form class="form-horizontal style-form" method="POST" action="netting/islem.php">






				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Smtp Host</label>
					<div class="col-sm-5">
						<input name="ayar_smtphost" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_smtphost'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Mail Kullanıcı Adınız</label>
					<div class="col-sm-5">
						<input name="ayar_smtpuser"  type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_smtpuser'] ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Mail Şifreniz</label>
					<div class="col-sm-5">
						<input name="ayar_smtppassword" type="password" class="form-control round-form" value="<?php echo $ayarcek['ayar_smtppassword'] ?>">
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Smtp PORT</label>
					<div class="col-sm-5">
						<input name="ayar_smtpport" type="number" class="form-control round-form" value="<?php echo $ayarcek['ayar_smtpport'] ?>">
					</div>
				</div>





				<div align="center">
					<button  name="mailayarkaydet" class="btn btn-round btn-success ">Ayarları Kaydet</button>

				</div>

			</form>




		</section><! --/wrapper -->




	</section><!-- /MAIN CONTENT -->
	<?php include 'footer.php' ?>