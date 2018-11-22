<?php include 'header.php' ?>
<?php 
$projesor=$db->prepare("SELECT * FROM projeler  where proje_durum='1' order by proje_id desc ");
$projesor->execute();
$projecek=$projesor->fetch(PDO::FETCH_ASSOC);
?>
<div class="responsive-menu">
	<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
	<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->




<div class="filters-section">
            <div class="container">
                <div class="title-def">
                <h2 style="margin-top: 100px;">Devam Eden Projelerimiz</h2>
                </div>

                <div class="esg-filter-wrapper   tm-skin esg-fgc-3">
                  
                    <a href="hazırproje"><div class="esg-filterbutton " data-fid="13" data-filter="filter-art"><span>Hazır Projeler</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span></div></a>
                   
                   <a href="bitmisproje"> <div class="esg-filterbutton " data-fid="16" data-filter="filter-funiture"><span>Bitmiş Projeler</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span></div></a>
                 
                                 </div>

                
                
                
            </div>
        </div>

<div class="section white">
	<div class="inner">
		<div class="container">
			<div class="row">

<?php 
$sayfa        = @intval($_GET['devamproje']);if(!$sayfa) {$sayfa=1;} // burada hangi sayfada olduğumuzu buluyor
$say          = $db->query("select * from projeler");
$toplamveri   = $say->rowCount();// Verileri saydırdık
$limit        = 3; //sayfada kaç tane olmasını istediğimiz rakamı giriyoruz
$sayfa_sayisi = ceil($toplamveri/$limit);if ($sayfa > $sayfa_sayisi) {$sayfa=1;} 
$goster       = $sayfa * $limit - $limit; // 
$gorunensayfa = 1;
$projeler     = $db->query("select * from projeler where proje_durum='1' order by proje_zaman DESC limit $goster,$limit");
$projeal      = $projeler->fetchAll(PDO::FETCH_ASSOC);

?>




			<?php foreach ($projeal as $projecek) { ?>
					<div class="col-sm-4">
						<div class="blog-post">
							<img src="nedmin/<?php echo $projecek['proje_resim'] ?>" alt="alt text" class="img-responsive center-block">
							<div class="content">
								<div class="blog-icon"><i class="fa fa-film"></i></div>
								<div class="blog-post-header">
									<h6><?php echo $projecek['proje_ad'] ?> </a></h6>

									<ul class="list-inline">

									</ul>
								</div> <!-- end .blog-post-header -->
								<p><?php echo substr($projecek['proje_detay'],0,250) ?></p>
								<?php if(strlen($projecek['proje_detay'])>250){ ?>
									<div class="blog-load-more">

										<a href="proje-<?=seo($projecek["proje_ad"]).'-'.$projecek["proje_id"]?>" class="button">Devamını Oku</a>
									</div> <!-- end .blog-load-more -->
								<?php } ?>
							</div> <!-- end .content -->
						</div> <!-- end .blog-post -->
					</div> <!-- end .col-sm-4 -->
				<?php } ?>

			</div> <!-- end .row -->

	<div align="right">
<ul  class="pagination">
	<?php 
	if ($sayfa > 1 ) {?> <!--Sayfa Eğer 1 Den buyukse yani sayfa 2 ise aşagıdaki butonların olmasını saglar-->
	<li class="say_sabit"><a href="devam-eden-projeler.php?devamproje=1">ilk</a></li>
	<li class="say_sabit"><a href="devam-eden-projeler.php?devamproje=<?=$sayfa - 1 ?>">Önceki</a></li>
<?php  } ?>	
<?php 
$s = 0;


while($s < $sayfa_sayisi) {
	$s++; ?>
	<?php 
	if($s==$sayfa){ ?>



		<li class="active">
			<a href="devam-eden-projeler.php?devamproje=<?php echo $s; ?>"><?php echo $s; ?></a> 
		</li>


	<?php } else { ?>

		<li>
			<a href="devam-eden-projeler.php?devamproje=<?php echo $s;?>"><?php echo $s; ?></a>
		</li>

		<?php
	}
}


?>


<?php 
if ($sayfa != $sayfa_sayisi) { ?> <!-- Sayfa eğer sayfa sayısına eşit değilse asagıdaki kodların yazılmasını saglıyoruz-->  


<li class="say_sabit"><a href="devam-eden-projeler.php?devamproje=<?=$sayfa + 1?>">Sonraki</a></li>
<li class="say_sabit"><a href="devam-eden-projeler.php?devamproje=<?=$sayfa_sayisi?> ">Son</a></li>
<?php } ?>      
</ul>

</div>	


		</div> <!-- end .container -->
	</div> <!-- end .inner -->
</div> <!-- end .section -->

<?php include 'footer.php' ?>