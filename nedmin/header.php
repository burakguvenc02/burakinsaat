<?php include 'netting/baglan.php' ?>
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
/*ADMİN KONTROL BAŞLANGIÇ*/
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>BuYAZILIM YÖNETİM PANELİ</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php?>" class="logo"><b>BuYAZILIM</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                   
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
              
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a style="background-color: red" class="logout" href="logout.php">Güvenli Çıkış</a></li>
            	</ul>
            </div>
        </header>