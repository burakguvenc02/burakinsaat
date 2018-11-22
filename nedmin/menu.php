<?php error_reporting(0); ?>
<?php include 'header.php' ?>

<?php 

if (isset($_POST['arama'])) {
    $aranan = "where menu_id  like '%".$_POST['aranan']."%'";

  } else {
    $aranan = "";
  }

$menusor = $db->prepare("select * from menuler where menu_ust=:menu_ust $aranan order by menu_sira ASC  ");
$menusor->execute(array('menu_ust' => 0)); 
$say=$menusor->rowCount();﻿





?>

<?php include 'sidebar.php' ?>
<section id="main-content">
	<section class="wrapper site-min-height">
		



		<div class="row mt">

			<div class="col-md-12">

				<div class="content-panel">

					<h4>Menulerinizi Buradan Yönetebilirsiniz</h4>
					<hr>


					<table class="table table-striped table-advance table-hover">
						<h4><i class="fa fa-angle-right"><?php 

                if (@$_GET['durum']=="ok") { ?>

                  <h5 style="color:green" class="page-subhead-line"><b>İşleminiz Başarıyla Kaydedildi</b></h5>


                <?php } elseif (@$_GET['durum']=="no") { ?>

                  <h5 style="color:red"class="page-subhead-line"><b>İşleminiz Gerçekleştirilemedi</b> </h5>


                <?php } else { ?>


                <h5 style="color:blue"class="page-subhead-line"><b>Menülerinizi Bu Sayfadan Ekleyebilir Düzenleyebilir Veya Silebilirsiniz</b> </h5>


                <?php } ?></i></h4>
						<hr>

					<thead>

							<tr>
								
								<th >Menu Adı</th>
								<th>Ust Menu</th>
								<th>Menu Sıra</th>
								<th>Menu Durum</th>
								

<th> <a href="menu-ekle.php"><button class="btn btn-round btn-danger"><i class="fa fa-plus"></i>&nbsp;&nbsp;Yeni Ekle</button></a></th>

							</tr>

						</thead>


					


							<?php while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){  $menu_id=$menucek['menu_id'];?>
								<tr>
									<td><?php echo $menucek['menu_ad'] ?></td>
									<td><?php echo $menucek['menu_ust'] ?></td>
									<td><?php echo $menucek['menu_sira'] ?></td>
									
									<td><?php 
                             if ($menucek['menu_durum']==1 ) {
                             echo "AKTİF"; 
                             }else {
                             echo "PASİF";
}
                             ?></td>
								    <td>
                                      
                                      <a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id'] ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Düzenle</button></a>
                                     <a href="netting/islem.php?menu_id=<?php echo $menucek['menu_id']?>&menusil=ok&menuresimsil=<?php echo $menucek['menu_resim'] ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>&nbsp;&nbsp;Sil</button></a>
                                  </td>
								</tr>

						<?php
$altmenusor = $db->prepare("select * from menuler where menu_ust=:menu_id order by menu_sira");
$altmenusor->execute(array('menu_id' => $menu_id)); 
while($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
									<td>---&nbsp;<?php echo $altmenucek['menu_ad'] ?></td>
									<td><?php echo $altmenucek['menu_ust'] ?></td>
									<td><?php echo $altmenucek['menu_sira'] ?></td>
									
									<td><?php 
                             if ($menucek['menu_durum']==1 ) {
                             echo "AKTİF"; 
                             }else {
                             echo "PASİF";
}
                             ?></td>
								    <td>
                                      
                                      <a href="menu-duzenle.php?menu_id=<?php echo $altmenucek['menu_id'] ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Düzenle</button></a>
                                     <a href="netting/islem.php?menu_id=<?php echo $altmenucek['menu_id']?>&altmenusil=ok"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>&nbsp;&nbsp;Sil</button></a>
                                  </td>
								</tr>
							<?php }} ?>

						</tbody>
					</table>
				</div><!-- /content-panel -->



			</div><!-- /col-md-12 -->
		</div><!-- /row -->



	</section><!--/wrapper -->

</section><!-- /MAIN CONTENT -->
<?php include 'footer.php' ?>