
<?php include 'header.php' ?>
<?php
$slider_id=$_GET['id'];

$slidersor=$db->prepare("SELECT * FROM slider where id='$slider_id'");
$slidersor->execute();
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
?>  
<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i>Sliderler Düzenleme Sayfası</h3>
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
<a href="slider.php"><button class="btn btn-primary">Slider Sayfasına Dön</button></a>
</div>			
			<form class="form-horizontal style-form" method="POST" action="netting/islem.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $slidercek['id'] ?>">
<input type="hidden" name="slider_resimyol" value="<?php echo $slidercek['slider_resimyol'] ?>">
 <div class="form-group ">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Yüklü Olan Resim  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <img style="width: 490px;height: 200px;" src="<?php echo $slidercek['slider_resimyol'] ?>">
                        </div>
                     
       <input type="hidden" name="slider_resimyol" value="<?php echo $slidercek['slider_resimyol']; ?>">

                      </div>

<div class="form-group">
				<label class="control-label  col-sm-2 col-xs-12">Slider Resim</label>
				<div class="">
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<span class="btn btn-file btn-default">
							<span class="fileupload-new">Resim Seç</span>
							<span class="fileupload-exists">Değiştir</span>
							<input type="file" name="slider_resimyol"> <!-- BURDAKİ slidegorsel Adıyla İslem PHP ye gonderiyoruz-->
						</span>
						<span class="fileupload-preview"></span>
						<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
					</div>
				</div>
			</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">Slider Ad</label>
					<div class="col-sm-5">
						<input name="slider_ad" type="text" class="form-control round-form" value="<?php echo $slidercek['slider_ad'] ?>">
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Slider link</label>
				<div class="col-sm-5">
					<input name="slider_link"  type="text" class="form-control round-form" value="<?php echo $slidercek['slider_link'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Slider Sıra</label>
				<div class="col-sm-5">
					<input name="slider_sira" type="text" class="form-control round-form" value="<?php echo $slidercek['slider_sira'] ?>">
				</div>
			</div>

			 <div  class="form-group ">
                        <label class="control-label col-md-2 col-sm-2 " for="first-name">Slider Durum <span class="required">*</span>
                        </label>
                       <div class="col-md-2 col-sm-5">
                          <select class="form-control round-form" name="slider_durum">
                          
                             <?php  
                                             if ($slidercek['slider_durum']==0) {?>
                                           <option value="0">Pasif</option>
                                                <option value="1">Aktif</option>
                                              <?php }elseif ($slidercek['slider_durum']==1) {?>
                                                  <option value="1">Aktif</option>
                                                  <option value="0">Pasif</option>                                          
                                            <?php   } ?>
                           
                          </select>
                       </div>
                      </div>
<div align="center">
				<button  name="sliderduzenle" class="btn btn-round btn-danger ">Değişiklikleri Kaydet</button>

			</div>

			

                      </div>
			

		</form>




	</section><! --/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>