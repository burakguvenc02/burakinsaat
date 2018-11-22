
<?php include 'header.php' ?>
<?php 
$menu_id=@$_GET['menu_id'];

$menusor=$db->prepare("SELECT * FROM menuler where menu_id='$menu_id'");
$menusor->execute();
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);
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







<form class="form-horizontal style-form" method="POST" action="netting/islem.php" >
  <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id']; ?>">
   <div class="form-group">
                <label  class="control-label col-md-2 col-sm-2 col-xs-12">Üst Menü Seç</label>
                <div class="col-md-2 col-sm-2 col-xs-12">
                  <select class="select2_single form-control" name="menu_ust" required=""  tabindex="-1">
                    <option value="0">Üst Menu Seç</option>

                    <?php          
                    $altmenusor = $db->prepare("select * from menuler where menu_ust=:menu_id order by menu_sira");
                    $altmenusor->execute(array('menu_id' => $menu_id)); 
                    while($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC)) { ?>


                        <option value="<?php echo $menucek['menu_id'] ?>"></"><?php echo $menucek['menu_ad'] ?></option>

                      <?php } ?>

  <?php          

                  $altmenusor = $db->prepare("select * from menuler where menu_ust=:menu_ust $aranan order by menu_sira ASC  ");
                  $altmenusor->execute(array('menu_ust' => 0)); ?>

<?php while ($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC)){?>

                      <option value="<?php echo $altmenucek['menu_id'] ?>"></"><?php echo $altmenucek['menu_ad'] ?></option>

<?php } ?>
                    </select>
                  </div>
                </div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Menü Ad</b></label>
					<div class="col-sm-3">
						<input name="menu_ad" type="text" class="form-control round-form" value="<?php echo $menucek['menu_ad'] ?>">
					</div>
				</div>

				



				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Menü Url</b></label>
					<div class="col-sm-3">
						<input name="menu_url" type="text" class="form-control round-form" value="<?php echo $menucek['menu_url'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Menü Detay</b></label>
					<div class="col-sm-9">
						<textarea  class="ckeditor col-md-12" id="editor1" name="menu_detay" ><?php echo $menucek['menu_detay'] ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label"><b>Menü Sıra</b></label>
					<div class="col-sm-1">
						<input name="menu_sira" type="text" class="form-control round-form" value="<?php echo $menucek['menu_sira'] ?>">
					</div>
				</div>

				



				<div  class="form-group ">
					<label class="control-label col-md-2 col-sm-2 " for="first-name"><b>Menü Durum</b><span class="required">*</span>
					</label>
					<div class="col-md-2 col-sm-5">
						<select class="form-control round-form" name="menu_durum">
							<?php  
							if ($menucek['menu_durum']==0) {?>
								<option value="0">Pasif</option>
								<option value="1">Aktif</option>
							<?php }elseif ($menucek['menu_durum']==1) {?>
								<option value="1">Aktif</option>
								<option value="0">Pasif</option>                                          
							<?php   } ?>
						</select>
					</div>
				</div>


				

				<div align="center">
					<button  name="menuduzenle" class="btn btn-round btn-danger ">Kaydet</button>

				</div>



			</div>
			

		</form>




	</section><!--/wrapper -->




</section><!-- /MAIN CONTENT -->

<script>
	$(document).ready(function() {
		$(".select2_single").select2({
			placeholder: "Üst Menüyü Seçiniz",
			allowClear: true
		});
		$(".select2_group").select2({});
		$(".select2_multiple").select2({
			maximumSelectionLength: 4,
			placeholder: "With Max Selection limit 4",
			allowClear: true
		});
	});
</script>
<!-- /Select2 -->


<script src="../vendors/select2/dist/js/select2.full.min.js"></script>

<?php include 'footer.php' ?>