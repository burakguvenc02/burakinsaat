<?php include 'header.php' ?>

<?php 
$habersor=$db->prepare("SELECT * FROM haberler");
$habersor->execute();
?>
<div class="responsive-menu">
	<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
	<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->



<div class="page-title" style="background-color: blue;">
	<div class="inner">
		<h1>Şirketimizden Haberler</h1>
	</div> <!-- end .inner -->
</div> <!-- end .section -->


<div class="section white">
	<div class="inner">
		<div class="container">
			<div class="row">

				<?php 
$sayfa        = @intval($_GET['habersayfa']);if(!$sayfa) {$sayfa=1;} // burada hangi sayfada olduğumuzu buluyor
$say          = $db->query("select * from haberler");
$toplamveri   = $say->rowCount();// Verileri saydırdık
$limit        = 3; //sayfada kaç tane olmasını istediğimiz rakamı giriyoruz
$sayfa_sayisi = ceil($toplamveri/$limit);if ($sayfa > $sayfa_sayisi) {$sayfa=1;} 
$goster       = $sayfa * $limit - $limit; // 
$gorunensayfa = 4;
$haberler     = $db->query("select * from haberler order by haber_zaman DESC limit $goster,$limit");
$haberal      = $haberler->fetchAll(PDO::FETCH_ASSOC);



?> 


<?php foreach ($haberal as $habercek) { ?>
	<div class="col-sm-4">
		<div >
			<img src="nedmin/<?php echo $habercek['haber_resim'] ?>" alt="alt text" class="img-responsive center-block">
			<div class="content">
				<div class="blog-icon"><i class="icon-picture"></i></div>
				<div class="blog-post-header">
					<br>
					<h6><a href=""><b><?php echo $habercek['haber_ad'] ?></b></a></h6>
					<br>
					<ul class="list-inline">
						<li><i class="icon-calendar"></i><b>Eklenme Tarihi : </b> <?php echo $habercek['haber_zaman'] ?></li>

					</ul>
				</div> <!-- end .blog-post-header -->
				<p><?php echo substr($habercek['haber_detay'],0,350) ?> </p>
			</div> <!-- end .content -->
		<div class="blog-load-more">

										<a href="haber-<?=seo($habercek["haber_ad"]).'-'.$habercek["id"]?>" class="button">Devamını Oku</a>
									</div> <!-- end .blog-load-more -->
			<hr>
		</div> <!-- end .blog-post -->
	</div> <!-- end .col-sm-4 -->

<?php } ?>


</div> <!-- end .container -->
<ul class="pagination">
	<?php 
	if ($sayfa > 1 ) {?> <!--Sayfa Eğer 1 Den buyukse yani sayfa 2 ise aşagıdaki butonların olmasını saglar-->
	<li class="say_sabit"><a href="haberler.php?habersayfa=1">ilk</a></li>
	<li class="say_sabit"><a href="haberler.php?habersayfa=<?=$sayfa - 1 ?>">Önceki</a></li>
<?php  } ?>	
<?php 
$s = 0;


while($s < $sayfa_sayisi) {
	$s++; ?>
	<?php 
	if($s==$sayfa){ ?>



		<li class="active">
			<a href="haberler?habersayfa=<?php echo $s; ?>"><?php echo $s; ?></a> 
		</li>


	<?php } else { ?>

		<li>
			<a href="haberler?habersayfa=<?php echo $s;?>"><?php echo $s; ?></a>
		</li>

		<?php
	}
}


?>


<?php 
if ($sayfa != $sayfa_sayisi) { ?> <!-- Sayfa eğer sayfa sayısına eşit değilse asagıdaki kodların yazılmasını saglıyoruz-->  


<li class="say_sabit"><a href="haberler.php?habersayfa=<?=$sayfa + 1?>">Sonraki</a></li>
<li class="say_sabit"><a href="haberler.php?habersayfa=<?=$sayfa_sayisi?> ">Son</a></li>
<?php } ?>      
</ul>

<?php 




?>
</div> <!-- end .inner -->
</div> <!-- end .section -->

<?php include 'footer.php' ?>