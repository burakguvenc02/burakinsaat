
<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i> İletişim Ayarları</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<p>İletişim Ayarlarınızı Buradan Değiştirebilirisiniz</p>
			</div>
		</div>
		<?php 

                if (@$_GET['durum']=="ok") { ?>

                  <h7 style="color:green" class="page-subhead-line"><b>Güncelleme Başarıyla Kaydedildi</b></h7>


                <?php } elseif (@$_GET['durum']=="no") { ?>

                  <h7 style="color:red"class="page-subhead-line"><b>Güncelleme Gerçekleştirilemedi</b> </h7>


                <?php } else { ?>

                  <h7 style="color: blue"class="page-subhead-line"><b>İletişim Ayarlarını Bu Sayfadan Düzenleyebilirsiniz</b></h7>


                <?php } ?>
		<div class="form-panel">







			<form class="form-horizontal style-form" method="POST" action="netting/islem.php">






				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">İş Yeri Numarası</label>
					<div class="col-sm-5">
						<input name="ayar_telefon" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_telefon'] ?>">
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Adresiniz</label>
				<div class="col-sm-5">
					<input name="ayar_adres"  type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_adres'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">GSM Numaranız</label>
				<div class="col-sm-5">
					<input name="ayar_gsm" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_gsm'] ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Mail Adresiniz</label>
				<div class="col-sm-5">
					<input name="ayar_mail" type="text" class="form-control round-form"value="<?php echo $ayarcek['ayar_mail'] ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">İl</label>
				<div class="col-sm-5">
					<input name="ayar_il" type="text" class="form-control round-form"value="<?php echo $ayarcek['ayar_il'] ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">İlce</label>
				<div class="col-sm-5">
					<input  name="ayar_ilce" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_ilce'] ?>">
				</div>
			</div>
			<div align="center">
				<button  name="iletisimayarkaydet" class="btn btn-round btn-success ">Ayarları Kaydet</button>

			</div>

		</form>




	</section><! --/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>