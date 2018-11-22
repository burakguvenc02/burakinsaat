
<?php include 'header.php' ?>
<?php
$kadro_id=$_GET['kadro_id'];

$kadrosor=$db->prepare("SELECT * FROM kadro where kadro_id='$kadro_id'");
$kadrosor->execute();
$kadrocek=$kadrosor->fetch(PDO::FETCH_ASSOC);
?>  
<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i>kadroler Düzenleme Sayfası</h3>
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

                  <h7 style="color: blue"class="page-subhead-line"><b>Genel Ayarları Bu Sayfadan Düzenleyebilirsiniz</b></h7>


                <?php } ?>
		<div class="form-panel">





<div align="right">
<a href="kadro.php"><button class="btn btn-primary">Kadro Sayfasına Dön</button></a>
</div>			
			<form class="form-horizontal style-form" method="POST" action="netting/islem.php" enctype="multipart/form-data">
<input type="hidden" name="kadro_id" value="<?php echo $kadrocek['kadro_id'] ?>">
<input type="hidden" name="kadro_resim" value="<?php echo $kadrocek['kadro_resim'] ?>">
 <div class="form-group ">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Yüklü Olan Resim  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <img style="width: 200px;height: 200px;" src="<?php echo $kadrocek['kadro_resim'] ?>">
                        </div>
                     
       <input type="hidden" name="kadro_resim" value="<?php echo $kadrocek['kadro_resim']; ?>">

                      </div>

<div class="form-group">
				<label class="control-label  col-sm-2 col-xs-12">Kişi Resim</label>
				<div class="">
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<span class="btn btn-file btn-default">
							<span class="fileupload-new">Resim Seç</span>
							<span class="fileupload-exists">Değiştir</span>
							<input type="file" name="kadro_resim"> <!-- BURDAKİ slidegorsel Adıyla İslem PHP ye gonderiyoruz-->
						</span>
						<span class="fileupload-preview"></span>
						<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
					</div>
				</div>
			</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Kişi Ad</label>
					<div class="col-sm-5">
						<input name="kadro_ad" type="text" class="form-control round-form" value="<?php echo $kadrocek['kadro_ad'] ?>">
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Kişi Detay</label>
				<div class="col-sm-5">
					<textarea name="kadro_detay"  type="text" class="form-control round-form" value="<?php echo $kadrocek['kadro_detay'] ?>"><?php echo $kadrocek['kadro_detay'] ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Kişi Adres</label>
				<div class="col-sm-5">
					<input name="kadro_adres" type="text" class="form-control round-form" value="<?php echo $kadrocek['kadro_adres'] ?>">
				</div>
			</div>

			 <div  class="form-group ">
                        <label class="control-label col-md-2 col-sm-2 " for="first-name">Kişi Yetki <span class="required">*</span>
                        </label>
                       <div class="col-md-2 col-sm-5">
                          <select class="form-control round-form" name="kadro_yetki">
                       <?php  
							if ($kadrocek['kadro_yetki']==1) {?>
								<option value="1">Yonetici</option>
								<option value="2">Yardımıc</option>
								<option value="3">Normal</option>
							<?php }elseif ($kadrocek['kadro_yetki']==2) {?>
								<option value="2">Yardımcı</option>
								<option value="3">Normal</option>
								<option value="1">Yonetici</option>

							<?php }  elseif($kadrocek['kadro_yetki']==3) {?>                                         
								<option value="3">Normal</option>
								<option value="1">Yonetici</option>
								<option value="2">Yardımcı</option>
							<?php   } ?>

                           
                          </select>
                       </div>
                      </div>
<div align="center">
				<button  name="kadroduzenle" class="btn btn-round btn-danger ">Değişiklikleri Kaydet</button>

			</div>

			

                      </div>
			

		</form>




	</section><! --/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>