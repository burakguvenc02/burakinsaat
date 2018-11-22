
<?php include 'header.php' ?>

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
		
<hr>



		  <div class="x_content">

  






			<form enctype="multipart/form-data"  class="form-horizontal style-form" method="POST" action="netting/islem.php">


              <div class="form-group ">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Üst Logonuz  <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                 <?php if(strlen($ayarcek['üst_logo'])>0){ ?>

                  <img style="width: 300px;height: 100px;" src="<?php echo $ayarcek['üst_logo'] ?>">

                <?php }else{ ?>

                  <img style="width: 200px;" src="resimg/logo-yok.png ?>">

<?php } ?>

               </div>

              

             </div>

             <div class="form-group ">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ust Logoyu Sec  <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="üst_logo" type="file"  id="first-name"  class="form-control round-form col-md-7 col-xs-12" value="<?php echo $ayarcek['üst_logo'] ?>">
              </div>
            </div>

 <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['üst_logo']; ?>">
            <div align="left" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2 ">

              <button name="logoduzenle" type="submit" class="btn btn-round btn-primary">Üst Logoyu Duzenle</button>
            </div>





          </form>



<br><hr>

			<form enctype="multipart/form-data"  class="form-horizontal style-form" method="POST" action="netting/islem.php">


              <div class="form-group ">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Alt Logo  <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                 <?php if(strlen($ayarcek['alt_logo'])>0){ ?>

                  <img style="width: 300px;height: 100px;" src="<?php echo $ayarcek['alt_logo'] ?>">

                <?php }else{ ?>

                  <img style="width: 200px;" src="resimg/logo-yok.png ?>">

<?php } ?>

               </div>

              

             </div>

             <div class="form-group ">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Alt Logoyu Sec  <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="alt_logo" type="file"  id="first-name"  class="form-control round-form col-md-7 col-xs-12" value="<?php echo $ayarcek['alt_logo'] ?>">
              </div>
            </div>

 <input type="hidden" name="eski_yoll" value="<?php echo $ayarcek['alt_logo']; ?>">
            <div align="left" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2 ">

              <button name="altlogoduzenle" type="submit" class="btn btn-round btn-primary">Alt Logoyu Duzenle</button>
            </div>





          </form>



           
<br>

<br>
<hr>

<form enctype="multipart/form-data"  class="form-horizontal style-form" method="POST" action="netting/islem.php">


				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Site Başlığı</label>
					<div class="col-sm-5">
						<input name="ayar_title" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_title'] ?>">
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Site Adresi</label>
				<div class="col-sm-5">
					<input name="ayar_url"  type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_url'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Site Açıklaması</label>
				<div class="col-sm-5">
					<input name="ayar_description" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_description'] ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Yazar Adı</label>
				<div class="col-sm-5">
					<input name="ayar_author" type="text" class="form-control round-form"value="<?php echo $ayarcek['ayar_author'] ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Anahtar Kelimeler</label>
				<div class="col-sm-5">
					<input name="ayar_keywords" type="text" class="form-control round-form"value="<?php echo $ayarcek['ayar_keywords'] ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Mesai</label>
				<div class="col-sm-5">
					<input  name="ayar_mesai" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_mesai'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Footer Yazısı</label>
				<div class="col-sm-9">
					<input  name="ayar_footer" type="text" class="form-control round-form" value="<?php echo $ayarcek['ayar_footer'] ?>">
				</div>
			</div>
			<div align="center">
				<button  name="genelayarkaydet" class="btn btn-round btn-success ">Ayarları Kaydet</button>

			</div>

		</form>

</div>


	</section><! --/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>