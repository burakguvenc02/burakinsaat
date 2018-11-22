
<?php include 'header.php' ?>
<?php
$projesor=$db->prepare("SELECT * FROM projeler where proje_id=:proje_id");
$projesor->execute(array('proje_id' => 4));
$projecek=$projesor->fetch(PDO::FETCH_ASSOC);
?>  
<?php include 'sidebar.php' ?>

<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i> Genel Ayarlar</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<p>Projelerinizi Buradan Ekleyebilirsiniz</p>
			</div>
		</div>
		<?php 

		if (@$_GET['durum']=="ok") { ?>

			<h7 style="color:green" class="page-subhead-line"><b>Proje Başarıyla Kaydedildi</b></h7>


		<?php } elseif (@$_GET['durum']=="no") { ?>

			<h7 style="color:red"class="page-subhead-line"><b>Proje Ekleme Gerçekleştirilemedi</b> </h7>


		<?php } else { ?>

			<h7 style="color: blue"class="page-subhead-line"><b>Projelerinizi Ekleyin</b></h7>


		<?php } ?>
		<div class="form-panel">







			<form class="form-horizontal style-form" method="POST" action="netting/islem.php" enctype="multipart/form-data">


<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Proje Resmi</b></label>
					<div class="col-sm-5">
						<input name="proje_resim" type="file" class="form-control round-form" value="<?php echo $projecek['proje_resim'] ?>">
					</div>
				</div>

				

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Proje Ad</b></label>
					<div class="col-sm-5">
						<input name="proje_ad" type="text" class="form-control round-form" value="<?php echo $projecek['proje_ad'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Proje Detay</b></label>
					<div class="col-sm-9">
							<textarea  class="ckeditor col-md-12" id="editor1" name="proje_detay" ><?php echo $projecek['proje_detay'] ?></textarea>
					</div>
				</div>


			
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Proje Sıra</b></label>
					<div class="col-sm-5">
						<input name="proje_sira" type="text" class="form-control round-form" value="<?php echo $projecek['proje_sira'] ?>">
					</div>
				</div>
				

				<div  class="form-group ">
					<label class="control-label col-md-2 col-sm-2 " for="first-name"><b>Proje Durum</b><span class="required">*</span>
					</label>
					<div class="col-md-3 col-sm-5">
						<select class="form-control round-form" name="proje_durum">
							<option value="0">Hazırda Olan Proje</option>
							<option value="1">Yapımda Olan Proje</option>
							<option value="2">Bitmiş Olan Proje</option>

						</select>
					</div>
				</div>
				<div align="center">
					<button  name="projekaydet" class="btn btn-round btn-danger ">Projeyi Ekle</button>

				</div>



			</div>
			

		</form>




	</section><!--/wrapper -->




</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>