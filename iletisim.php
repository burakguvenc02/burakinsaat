<?php include 'header.php' ?>
<div class="responsive-menu">
	<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
	<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->



<div class="page-title" style="background-image: url('images/banner.jpg');">
	<div class="inner">
		<h1>Contact Us</h1>
	</div> <!-- end .inner -->
</div> <!-- end .section -->


<div class="container">
	<div class="inner">
		<div class="split-section-section light con_form">

			<div class="title-def-black">
				<h3>Bize Ulaşın...</h3>
			</div>

			<div class="inner">
				<form action="scripts/contact.php" method="post" id="contact-form">
					<fieldset>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Adınız</label>
									<input name="kname" type="text" id="contact-name" name="contact-name" required>
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<div class="form-group">
									<label>Mail Adresiniz</label>
									<input  id="contact-email" name="contact-email" required>
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<div class="form-group">
									<label>Telefon</label>
									<input type="text" id="contact-phone" name="contact-phone">
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-6 -->
							<div class="col-sm-6">
								<div class="form-group">
									<label>Konu</label>
									<input type="text" id="contact-subject" name="contact-subject">
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-6 -->
							<div class="col-sm-12">
								<div class="form-group">
									<label>Mesajınız</label>
									<textarea name="contact-message" id="contact-message" required rows="3"></textarea>
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-12 -->
						</div> <!-- end .row -->
					</fieldset>
					<button type="submit" class="button">Gönder</button>
					<div id="contact-loading" class="alert alert-info form-alert">
						<span class="message">Loading...</span>
					</div>
					<div id="contact-success" class="alert alert-success form-alert">
						<span class="message">Success!</span>
					</div>
					<div id="contact-error" class="alert alert-danger form-alert">
						<span class="message">Error!</span>
					</div>
				</form>
			</div> <!-- end .inner -->
		</div> <!-- end .split-section-section -->
	</div> <!-- end .inner -->
</div> <!-- end .split-section -->

<div class="section white">
	<div class="inner">
		<div class="container">
			<div class="row aligned-cols contacts">
				<div class="col-sm-3 aligned-middle">
					<h3>İletişim Bilgileri</h3>
				
<p><b>Bulunduğumuz İl : </b><?php echo $ayarcek['ayar_il'] ?><br>
 <b>Bulunduğumuz İlce :</b> <?php echo $ayarcek['ayar_ilce']; ?> </p>
				</div> <!-- end .col-sm-3 -->
				<div class="col-sm-3 aligned-middle">
					<i class="icon-pointer"></i>
					<h6>Biz Nerdeyiz</h6>
					<p><?php echo $ayarcek['ayar_adres'] ?>.</p>
				</div> <!-- end .col-sm-3 -->
				<div class="col-sm-4 aligned-middle">
					<i class="icon-clock"></i>
					<h6>Çalışma Saatlerimiz</h6>
					<p><?php echo $ayarcek['ayar_mesai'] ?></p>
				</div> <!-- end .col-sm-3 -->
				<div class="col-sm-3 aligned-middle">
					<i class="icon-call-end"></i>
					<h6>Telefon Bilgileri</h6>
					<p><?php echo $ayarcek['ayar_telefon'] ?><br><?php echo $ayarcek['ayar_gsm'] ?></p>
				</div> <!-- end .col-sm-3 -->
			</div> <!-- end .row -->
		</div> <!-- end .container -->
	</div> <!-- end .inner -->
</div> <!-- end .section -->



<div class="full-width-map" id="full-width-map"></div>

<?php include 'footer.php' ?>