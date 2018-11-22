<?php error_reporting(0); ?>
<?php include 'nedmin/netting/baglan.php'  ?>
<?php include 'nedmin/netting/function.php'  ?>
 <?php 
$kullanicisor = $db->prepare('SELECT * FROM kullanici where kullanici_ad=:kullanici_ad');
$kullanicisor->execute(array('kullanici_ad' => $_SESSION['kullanici_ad']));
$say = $kullanicisor->rowCount();
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);
if (0 == $say) {
  header('Location:login.php?durum=izinsiz');
  exit;
} 
/*ADMİN KONTROL BİTİŞ*/
?>





<?php 
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:id");
$ayarsor->execute(array('id' => 0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<?php 
$hakkımızdasor=$db->prepare("SELECT * FROM hakkımızda where hakkımızda_id=:id");
$hakkımızdasor->execute(array('id' => 1));
$hakkımızdacek=$hakkımızdasor->fetch(PDO::FETCH_ASSOC);
?>

<?php 
$slidersor=$db->prepare("SELECT * FROM slider");
$slidersor->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $ayarcek['ayar_title'] ?></title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:700%7CExo+2:400,500,600,700%7CLato:300,400,700%7COxygen%7CRoboto:300,400,500,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel='stylesheet'  href='rs-plugin/css/settings.css' type='text/css' media='all' />
	<!-- Simple-Line-Icons-Webfont -->
	<link href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" rel="stylesheet">

	<!-- esgrid -->
	<link rel='stylesheet' href='js/essential-grid/public/assets/css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/essential-grid.css' type='text/css' media='all' />
	<link rel='stylesheet' href='js/essential-grid/public/assets/css/lightbox.css' type='text/css' media='all' />

	<!-- constructor Icons -->
	<link href="fonts/constructor-icons/style.css" rel="stylesheet">
	<!-- FlexSlider -->
	<link href="scripts/FlexSlider/flexslider.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.default.css" rel="stylesheet">
	<!-- Style.css -->
	<link href="css/icons.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="icon" href="images/favicon.png" type="image/x-icon">

	</head>
	<body>

		<header class="header header-transparent">

			<div class="container clearfix">
				<div class="logo"><a href="index.php"><img src="nedmin/<?php echo $ayarcek['üst_logo'] ?>" alt="<?php echo $ayarcek['ayar_author'] ?>" class="img-responsive"></a></div> <!-- end .logo -->




				<div class="navigation clearfix">
					
<?php  

									
									$menusor = $db->prepare("select * from menuler where menu_ust=:menu_ust $aranan order by menu_sira DESC  ");
									$menusor->execute(array('menu_ust' => 0)); 


									while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){
										$menu_id=$menucek['menu_id'];
										
										$altmenusor = $db->prepare("select * from menuler where menu_ust=:menu_id order by menu_sira");
										$altmenusor->execute(array('menu_id' => $menu_id)); 
										$say=$altmenusor->rowCount();﻿


										?>
					<nav class="main-nav">
						

						<!--Menu Başlangıc-->
						<ul class="list-unstyled">

								<li <?php if ($say>0)
										?>>
											<a href="<?php  

											if (strlen($menucek['menu_url'])>0){
												echo $menucek['menu_url'];

											}elseif (strlen($menucek['menu_url'])==0){?>

												<?=seo($menucek['menu_ad']).'-'.$menucek["menu_id"] ?>

											<?php } ?>
											"><?php echo $menucek['menu_ad'] ?></a>

											<ul class="list-unstyled">
												<?php
												
												while($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC)) { ?>


													<a href="<?php 

													if (strlen($altmenucek['menu_url'])>0){
														echo $altmenucek['menu_url'];

													}elseif (strlen($altmenucek['menu_url'])==0){?>

														sayfa-<?=seo($altmenucek['menu_ad']).'-'.$altmenucek["menu_id"] ?>

													<?php } ?>
													"><?php echo $altmenucek['menu_ad'] ?></a>


												</li>

											<?php  }?>
						
							
						
							
						</ul>
					</nav> 
					<!--Menu Bitiş-->
	
<?php } ?>

					<a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
				</div> <!-- end .navigation -->


			</div> <!-- end .container -->
		</header> <!-- end .header -->