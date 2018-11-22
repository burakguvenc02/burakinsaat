<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>BuYAZILIM | YÖNETİM PANELİ</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="netting/islem.php" method="POST">
		        <h2 class="form-login-heading">Admin Giriş</h2>
		        <div class="login-wrap">
		            <input type="text" name="kullanici_ad" class="form-control" placeholder="Kullanıcı Adınız" required="">
		            <br>
		            <input type="password" name="kullanici_password" class="form-control" placeholder="Şifreniz" required="">
		            <label class="checkbox">
		              <?php 
                  if (@$_GET['durum']=="no"){ ?>
                   <h5 style="color: red" >Kullanıcı Bulunamadı Bilgilerinizi Kontrol Ediniz...</h5>
                <?php }elseif ($_GET['durum']=="exit") {?>
                <h5 style="color:green">Başarıyla Çıkış Yaptınız</h5>  
               <?php } ?>
		            </label>
		            <button class="btn btn-theme btn-block" name="loggin" type="submit"><i class="fa fa-lock"></i> Giriş Yap</button>
		       
		      
		         
		
		        </div>
		
		          <!-- Modal -->
		       
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
