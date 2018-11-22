
<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i>Sosyal Ayarlar</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<p>Sosyal Ayarlarınızı Buradan Değiştirebilirisiniz</p>
			</div>
		</div>
		<?php 

                if (@$_GET['durum']=="ok") { ?>

                  <h7 style="color:green" class="page-subhead-line"><b>Güncelleme Başarıyla Kaydedildi</b></h7>


                <?php } elseif (@$_GET['durum']=="no") { ?>

                  <h7 style="color:red"class="page-subhead-line"><b>Güncelleme Gerçekleştirilemedi</b> </h7>


                <?php } else { ?>

                  <h7 style="color: blue"class="page-subhead-line"><b>Sosyal Ayarları Bu Sayfadan Düzenleyebilirsiniz</b></h7>


                <?php } ?>
		<div class="form-panel">







			<form class="form-horizontal style-form" method="POST" action="netting/islem.php">






				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Facebook</label>
					<div class="col-sm-5">
						<input name="ayar_facebook" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_facebook'] ?>">
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Twitter</label>
				<div class="col-sm-5">
					<input name="ayar_twitter"  type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_twitter'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Gmail</label>
				<div class="col-sm-5">
					<input name="ayar_gmail" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_gmail'] ?>">
				</div>
			</div>

			

			

			<div align="center">
				<button  name="sosyalayarkaydet" class="btn btn-round btn-success ">Ayarları Kaydet</button>

			</div>

		</form>




	</section><! --/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>