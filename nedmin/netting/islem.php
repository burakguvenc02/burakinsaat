<?php include 'baglan.php' ?>
<?php  date_default_timezone_set('Europe/Istanbul');?>
<?php 

if (isset($_POST['genelayarkaydet'])) {

$ayarkaydet=$db->prepare("UPDATE ayarlar SET 

ayar_url=:siteurl,
ayar_title=:title,
ayar_description=:description,
ayar_author=:author,
ayar_mesai=:mesai,
ayar_keywords=:keywords,
ayar_footer=:footer
WHERE ayar_id=0");
$update=$ayarkaydet->execute(array(

'siteurl' =>$_POST['ayar_url'],
'title' =>$_POST['ayar_title'],
'description' =>$_POST['ayar_description'],
'mesai' =>$_POST['ayar_mesai'],
'author' =>$_POST['ayar_author'],
'keywords' =>$_POST['ayar_keywords'],
'footer' =>$_POST['ayar_footer'],
));
 if ($update) {
  header("Location:../genel-ayar.php?durum=ok");
} else {
  header("Location:../genel-ayar.php?durum=no");
}
} 

if (isset($_POST['logoduzenle'])) {


if($_FILES['üst_logo']["size"] > 0){
$uploads_dir = '../resimg';
  @$tmp_name = $_FILES['üst_logo']['tmp_name'];
  @$name = $_FILES['üst_logo']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");


$logoduzenle=$db->prepare("UPDATE ayarlar SET 
üst_logo=:logo
WHERE ayar_id=0");
$update=$logoduzenle->execute(array(
'logo' =>$resimyol,

));



} if ($update) {
 $logo_sil=$_POST['eski_yol'];
    unlink("../resimg/$logo_sil");

  header("Location:../genel-ayar.php?ayar_id=$ayar_id&durum=ok");
} else {
  header("Location:../genel-ayar.php?durum=no");
     }

}


if(isset ($_POST['loggin'])){

  $kullanici_ad=$_POST['kullanici_ad'];
  $kullanici_pass=md5($_POST['kullanici_password']);
  if ($kullanici_ad && $kullanici_pass) { 

    $kullanicisor=$db->prepare("SELECT * From kullanici where kullanici_ad=:ad and kullanici_password=:pass");
    $kullanicisor->execute(array(
    
    'ad' => $kullanici_ad,
    'pass' => $kullanici_pass

    ));

   $say = $kullanicisor->rowCount();
    

    if ($say>0) {
      $_SESSION['kullanici_ad'] = $kullanici_ad;
        $_SESSION['kullanici_password'] = $kullanici_pass;
      header('Location:../index.php');

    }else{
      header('Location:../login.php?durum=no');
    }
  }
}


if (isset($_POST['altlogoduzenle'])) {


if($_FILES['alt_logo']["size"] > 0){
$uploads_dir = '../resimg';
  @$tmp_name = $_FILES['alt_logo']['tmp_name'];
  @$name = $_FILES['alt_logo']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");


$altlogoduzenle=$db->prepare("UPDATE ayarlar SET 
alt_logo=:altlogo
WHERE ayar_id=0");
$update=$altlogoduzenle->execute(array(
'altlogo' =>$resimyol,

));



} if ($update) {
 $altlogo_sil=$_POST['eski_yoll'];
    unlink("../resimg/$altlogo_sil");

  header("Location:../genel-ayar.php?ayar_id=$ayar_id&durum=ok");
} else {
  header("Location:../genel-ayar.php?durum=no");
     }

}


if (isset($_POST['sosyalayarkaydet'])){
$ayarkaydet=$db->prepare(" UPDATE ayarlar SET
ayar_facebook=:facebook,
ayar_twitter=:twitter,
ayar_gmail=:gmail
where ayar_id=0");

$update=$ayarkaydet->execute(array(
'facebook' => $_POST['ayar_facebook'],
'twitter'  => $_POST['ayar_twitter'],
'gmail'    => $_POST['ayar_gmail']
));

if ($update) {
  header("Location:../sosyal-ayar.php?durum=ok");
} else {
  header("Location:../sosyal-ayar.php?durum=no");
}
}


if (isset($_POST['iletisimayarkaydet'])) {

$ayarkaydet=$db->prepare("UPDATE ayarlar SET 

ayar_telefon=:tel,
ayar_adres=:adres,
ayar_gsm=:gsm,
ayar_mail=:mail,
ayar_il=:il,
ayar_ilce=:ilce
WHERE ayar_id=0");
$update=$ayarkaydet->execute(array(

'tel' =>$_POST['ayar_telefon'],
'adres' =>$_POST['ayar_adres'],
'gsm' =>$_POST['ayar_gsm'],
'mail' =>$_POST['ayar_mail'],
'il' =>$_POST['ayar_il'],
'ilce' =>$_POST['ayar_ilce'],
));
 if ($update) {
  header("Location:../iletisim-ayar.php?durum=ok");
} else {
  header("Location:../iletisim-ayar.php?durum=no");
}
}



if (isset($_POST['apiayarkaydet'])) {

$ayarkaydet=$db->prepare("UPDATE ayarlar SET 

ayar_recapctha=:recap,
ayar_analytic=:analytic,
ayar_google=:google,
ayar_goooglemap=:googlemap
WHERE ayar_id=0");
$update=$ayarkaydet->execute(array(

'recap' =>$_POST['ayar_recapctha'],
'analytic' =>$_POST['ayar_analytic'],
'google' =>$_POST['ayar_google'],
'googlemap' =>$_POST['ayar_goooglemap'],

));
 if ($update) {
  header("Location:../api-ayar.php?durum=ok");
} else {
  header("Location:../api-ayar.php?durum=no");
}
}

if (isset($_POST['mailayarkaydet'])) {

$ayarkaydet=$db->prepare("UPDATE ayarlar SET 

ayar_smtphost=:host,
ayar_smtpuser=:user,
ayar_smtppassword=:sifre,
ayar_smtpport=:port
WHERE ayar_id=0");
$update=$ayarkaydet->execute(array(

'host' =>$_POST['ayar_smtphost'],
'user' =>$_POST['ayar_smtpuser'],
'sifre' =>$_POST['ayar_smtppassword'],
'port' =>$_POST['ayar_smtpport'],

));
 if ($update) {
  header("Location:../mail-ayar.php?durum=ok");
} else {
  header("Location:../mail-ayar.php?durum=no");
}
}

if (isset($_POST['hakkımızdakaydet'])) {

$hakkımızdakaydet=$db->prepare("UPDATE hakkımızda SET 
hakkımızda_video=:video,
hakkımızda_baslik=:baslik,
hakkımızda_icerik=:icerik,
hakkımızda_vizyon=:vizyon,
hakkımızda_misyon=:misyon

WHERE hakkımızda_id=1");
$update=$hakkımızdakaydet->execute(array(
'video' =>$_POST['hakkımızda_video'],
'baslik' =>$_POST['hakkımızda_baslik'],
'icerik' =>$_POST['hakkımızda_icerik'],
'vizyon' =>$_POST['hakkımızda_vizyon'],
'misyon' =>$_POST['hakkımızda_misyon']
));
 if ($update) {
  header("Location:../hakkımızda.php?durum=ok");
} else {
  header("Location:../hakkımızda.php?durum=no");
}
} 












if (isset($_POST['sliderkaydet'])) {

 $uploads_dir = '../sliderresim';
  @$tmp_name = $_FILES['slider_resimyol']['tmp_name'];
  @$name = $_FILES['slider_resimyol']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");



$sliderayarkaydet=$db->prepare("INSERT into slider SET  
slider_ad=:ad,
slider_link=:link,
slider_sira=:sira,
slider_durum=:durum,
slider_resimyol=:resimyol
");
$insert=$sliderayarkaydet->execute(array(
'ad' =>$_POST['slider_ad'],
'link' =>$_POST['slider_link'],
'sira' =>$_POST['slider_sira'],
'durum' =>$_POST['slider_durum'],
'resimyol' =>$resimyol,
));
 if ($insert) {
  header("Location:../slider.php?durum=ok");
} else {
  header("Location:../slider-ekle.php?durum=no");
}
} 

if (@$_GET['slidersil']=="ok") {


 
  $sil=$db->prepare("DELETE from slider where id=:id");
  $kontrol=$sil->execute(array(
    'id' => $_GET['id']
  ));
  if ($kontrol) {
    $slider_sil=$_GET['sliderresimsil'];
    unlink("../$slider_sil");
    header("Location:../slider.php?durum=ok");
} else {
  header("Location:../slider.php?durum=no");
}
} 




if (isset($_POST['sliderduzenle'])) {

if($_FILES['slider_resimyol']["size"] > 0){

$uploads_dir = '../sliderresim';
  @$tmp_name = $_FILES['slider_resimyol']['tmp_name'];
  @$name = $_FILES['slider_resimyol']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");


$sliderduzenle=$db->prepare("UPDATE slider SET 
slider_ad=:ad,
slider_link=:link,
slider_sira=:sira,
slider_durum=:durum,
slider_resimyol=:resimyol
WHERE id={$_POST['id']}");
$update=$sliderduzenle->execute(array(
'ad' =>$_POST['slider_ad'],
'link' =>$_POST['slider_link'],
'sira' =>$_POST['slider_sira'],
'durum' =>$_POST['slider_durum'],
'resimyol' =>$resimyol,

));
$slider_id=$_POST['id'];
 if ($update) {
 $slider_sil=$_POST['slider_resimyol'];
    unlink("../$slider_sil");

  header("Location:../slider-duzenle.php?id=$slider_id&durum=ok");
} else {
  header("Location:../slider-duzenle.php?durum=no");
     }


}else{
$sliderduzenle=$db->prepare("UPDATE slider SET 
slider_ad=:ad,
slider_link=:link,
slider_sira=:sira,
slider_durum=:durum
WHERE id={$_POST['id']}");
$update=$sliderduzenle->execute(array(
'ad' =>$_POST['slider_ad'],
'link' =>$_POST['slider_link'],
'sira' =>$_POST['slider_sira'],
'durum' =>$_POST['slider_durum']

));

$slider_id=$_POST['id'];
 if ($update) {
  
  header("Location:../slider-duzenle.php?id=$slider_id&durum=ok");
} else {
  header("Location:../slider-duzenle.php?durum=no");
     }
   
   } 


}


if (isset($_POST['kadroduzenle'])) {

if($_FILES['kadro_resim']["size"] > 0){

$uploads_dir = '../kadroresim';
  @$tmp_name = $_FILES['kadro_resim']['tmp_name'];
  @$name = $_FILES['kadro_resim']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");


$kadroduzenle=$db->prepare("UPDATE kadro SET 
kadro_ad=:ad,
kadro_detay=:detay,
kadro_adres=:adres,
kadro_yetki=:yetki,
kadro_resim=:resimyol
WHERE kadro_id={$_POST['kadro_id']}");
$update=$kadroduzenle->execute(array(
'ad' =>$_POST['kadro_ad'],
'detay' =>$_POST['kadro_detay'],
'adres' =>$_POST['kadro_adres'],
'yetki' =>$_POST['kadro_yetki'],
'resimyol' =>$resimyol,

));
$kadro_id=$_POST['kadro_id'];
 if ($update) {
 $kadro_sil=$_POST['kadro_resim'];
    unlink("../$kadro_sil");

  header("Location:../kadro-duzenle.php?kadro_id=$kadro_id&durum=ok");
} else {
  header("Location:../kadro-duzenle.php?durum=no");
     }


}else{
$kadroduzenle=$db->prepare("UPDATE kadro SET 
kadro_ad=:ad,
kadro_detay=:detay,
kadro_adres=:adres,
kadro_yetki=:yetki
WHERE kadro_id={$_POST['kadro_id']}");
$update=$kadroduzenle->execute(array(
'ad' =>$_POST['kadro_ad'],
'detay' =>$_POST['kadro_detay'],
'adres' =>$_POST['kadro_adres'],
'yetki' =>$_POST['kadro_yetki']

));

$kadro_id=$_POST['kadro_id'];
 if ($update) {
  
  header("Location:../kadro-duzenle.php?kadro_id=$kadro_id&durum=ok");
} else {
  header("Location:../kadro-duzenle.php?durum=no");
     }
   
   } 


}




if (isset($_POST['haberkaydet'])) {

 $uploads_dir = '../haberresim';
  @$tmp_name = $_FILES['haber_resim']['tmp_name'];
  @$name = $_FILES['haber_resim']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");


$zaman=date('Y-m-d H:i');
$haberkaydet=$db->prepare("INSERT into haberler SET  
haber_zaman=:zaman,
haber_keyword=:anahtar,
haber_ad=:ad,
haber_sira=:sira,
haber_durum=:durum,
haber_detay=:detay,
haber_resim=:resimyol
");
$insert=$haberkaydet->execute(array(
'ad' =>$_POST['haber_ad'],
'anahtar' =>$_POST['haber_keyword'],
'sira' =>$_POST['haber_sira'],
'durum' =>$_POST['haber_durum'],
'detay' =>$_POST['haber_detay'],
'resimyol' =>$resimyol,
'zaman' => $zaman,
));
 if ($insert) {
  header("Location:../haberler.php?durum=ok");
} else {
  header("Location:../haber-ekle.php?durum=no");
}
} 

if (@$_GET['habersil']=="ok") {


 
  $sil=$db->prepare("DELETE from haberler where id=:id");
  $kontrol=$sil->execute(array(
    'id' => $_GET['id']
  ));
  if ($kontrol) {
    $haber_sil=$_GET['haberresimsil'];
    unlink("../$haber_sil");
    header("Location:../haberler.php?durum=ok");
} else {
  header("Location:../haberler.php?durum=no");
}
} 




if (isset($_POST['haberduzenle'])) {

if($_FILES['haber_resim']["size"] > 0){

$uploads_dir = '../haberresim';
  @$tmp_name = $_FILES['haber_resim']['tmp_name'];
  @$name = $_FILES['haber_resim']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");


$haberduzenle=$db->prepare("UPDATE haberler SET 
haber_ad=:ad,
haber_detay=:detay,
haber_keyword=:anahtar,
haber_sira=:sira,
haber_durum=:durum,
haber_resim=:resimyol
WHERE id={$_POST['id']}");
$update=$haberduzenle->execute(array(
'ad' =>$_POST['haber_ad'],
'detay' =>$_POST['haber_detay'],
'anahtar' =>$_POST['haber_keyword'],
'sira' =>$_POST['haber_sira'],
'durum' =>$_POST['haber_durum'],
'resimyol' =>$resimyol,

));
$haber_id=$_POST['id'];
 if ($update) {
 $haber_sil=$_POST['haber_resim'];
    unlink("../$haber_sil");

  header("Location:../haber-duzenle.php?id=$haber_id&durum=ok");
} else {
  header("Location:../haber-duzenle.php?durum=no");
     }


}else{
$haberduzenle=$db->prepare("UPDATE haberler SET 
haber_ad=:ad,
haber_detay=:detay,
haber_keyword=:anahtar,
haber_sira=:sira,
haber_durum=:durum
WHERE id={$_POST['id']}");
$update=$haberduzenle->execute(array(
'ad' =>$_POST['haber_ad'],
'detay' =>$_POST['haber_detay'],
'anahtar' =>$_POST['haber_keyword'],
'sira' =>$_POST['haber_sira'],
'durum' =>$_POST['haber_durum']

));

$haber_id=$_POST['id'];
 if ($update) {
  
  header("Location:../haber-duzenle.php?id=$haber_id&durum=ok");
} else {
  header("Location:../haber-duzenle.php?durum=no");
     }
   
   } 


}





if (@$_GET['kadrosil']=="ok") {


 
  $sil=$db->prepare("DELETE from kadro where kadro_id=:kadro_id");
  $kontrol=$sil->execute(array(
    'kadro_id' => $_GET['kadro_id']
  ));
  if ($kontrol) {
    $kadro_sil=$_GET['kadroresimsil'];
    unlink("../$kadro_sil");
    header("Location:../kadro.php?durum=ok");
} else {
  header("Location:../kadro.php?durum=no");
}
} 


if (isset($_POST['kadrokaydet'])) {

 $uploads_dir = '../kadroresim';
  @$tmp_name = $_FILES['kadro_resim']['tmp_name'];
  @$name = $_FILES['kadro_resim']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");



$haberkaydet=$db->prepare("INSERT into kadro SET  
kadro_ad=:ad,
kadro_detay=:detay,
kadro_adres=:adres,
kadro_yetki=:yetki,
kadro_resim=:resimyol
");
$insert=$haberkaydet->execute(array(
'ad' =>$_POST['kadro_ad'],
'detay' =>$_POST['kadro_detay'],
'adres' =>$_POST['kadro_adres'],
'yetki' =>$_POST['kadro_yetki'],
'resimyol' =>$resimyol,

));
 if ($insert) {
  header("Location:../kadro.php?durum=ok");
} else {
  header("Location:../kadro-ekle.php?durum=no");
}
} 


if (@$_GET['menusil']=="ok") {
  $sil=$db->prepare("DELETE from menuler where menu_id=:menu_id");
  $kontrol=$sil->execute(array(
    'menu_id' => $_GET['menu_id']
  ));
  if ($kontrol) {
   header("Location:../menu.php?id=$menu_id&durum=ok");
} else {
  header("Location:../menu.php?durum=no");
     }
}




if (@$_GET['altmenusil']=="ok") {
  $sil=$db->prepare("DELETE from menuler where menu_id=:menu_id");
  $kontrol=$sil->execute(array(
    'menu_id' => $_GET['menu_id']
  ));
  if ($kontrol) {
   header("Location:../menu.php?id=$menu_id&durum=ok");
} else {
  header("Location:../menu.php?durum=no");
     }
}



if (isset($_POST['menukaydet'])) {

 

$menukaydet=$db->prepare("INSERT into menuler SET  
menu_ust=:ust,
menu_ad=:ad,
menu_url=:url,
menu_detay=:detay,
menu_sira=:sira,
menu_durum=:durum
");
$insert=$menukaydet->execute(array(
'ust' =>$_POST['menu_ust'],
'ad' =>$_POST['menu_ad'],
'url' =>$_POST['menu_url'],
'detay' =>$_POST['menu_detay'],
'sira' =>$_POST['menu_sira'],
'durum' =>$_POST['menu_durum'],
));
 if ($insert) {
  header("Location:../menu.php?durum=ok");
} else {
  header("Location:../menu-ekle.php?durum=no");
}
} 

if (isset($_POST['projekaydet'])) {

 $uploads_dir = '../projeresim';
  @$tmp_name = $_FILES['proje_resim']['tmp_name'];
  @$name = $_FILES['proje_resim']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");


$zaman=date('Y-m-d H:i');
$haberkaydet=$db->prepare("INSERT into projeler SET  
proje_zaman=:zaman,
proje_ad=:ad,
proje_sira=:sira,
proje_durum=:durum,
proje_detay=:detay,
proje_resim=:resimyol
");
$insert=$haberkaydet->execute(array(
'zaman' =>$_POST['proje_zaman'],
'ad' =>$_POST['proje_ad'],
'sira' =>$_POST['proje_sira'],
'durum' =>$_POST['proje_durum'],
'detay' =>$_POST['proje_detay'],
'resimyol' =>$resimyol,
'zaman' => $zaman,
));
 if ($insert) {
  header("Location:../projeler.php?durum=ok");
} else {
  header("Location:../proje-ekle.php?durum=no");
}
} 


if (isset($_POST['projeduzenle'])) {

if($_FILES['proje_resim']["size"] > 0){

$uploads_dir = '../projeresim';
  @$tmp_name = $_FILES['proje_resim']['tmp_name'];
  @$name = $_FILES['proje_resim']['name'];
  $rondom = rand(1000, 9000);
  $resimyol = substr($uploads_dir, 3).'/'.$rondom.'-'.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$rondom-$name");


$haberduzenle=$db->prepare("UPDATE projeler SET 
proje_ad=:ad,
proje_detay=:detay,
proje_sira=:sira,
proje_durum=:durum,
proje_resim=:resimyol
WHERE proje_id={$_POST['proje_id']}");
$update=$haberduzenle->execute(array(
'ad' =>$_POST['proje_ad'],
'detay' =>$_POST['proje_detay'],
'sira' =>$_POST['proje_sira'],
'durum' =>$_POST['proje_durum'],
'resimyol' =>$resimyol,

));
$proje_id=$_POST['proje_id'];
 if ($update) {
 $proje_sil=$_POST['proje_resim'];
    unlink("../$proje_sil");

  header("Location:../proje-duzenle.php?proje_id=$proje_id&durum=ok");
} else {
  header("Location:../proje-duzenle.php?durum=no");
     }


}else{
$haberduzenle=$db->prepare("UPDATE projeler SET 
proje_ad=:ad,
proje_detay=:detay,
proje_sira=:sira,
proje_durum=:durum
WHERE proje_id={$_POST['proje_id']}");
$update=$haberduzenle->execute(array(
'ad' =>$_POST['proje_ad'],
'detay' =>$_POST['proje_detay'],
'sira' =>$_POST['proje_sira'],
'durum' =>$_POST['proje_durum'],

));

$proje_id=$_POST['proje_id'];
 if ($update) {
  
  header("Location:../proje-duzenle.php?proje_id=$proje_id&durum=ok");
} else {
  header("Location:../proje-duzenle.php?durum=no");
     }
   
   } 


}



if (@$_GET['projesil']=="ok") {


 
  $sil=$db->prepare("DELETE from projeler where proje_id=:proje_id");
  $kontrol=$sil->execute(array(
    'proje_id' => $_GET['proje_id']
  ));
  if ($kontrol) {
    $proje_sil=$_GET['projeresimsil'];
    unlink("../$proje_sil");
    header("Location:../projeler.php?durum=ok");
} else {
  header("Location:../projeler.php?durum=no");
}
} 


if (isset($_POST['menuduzenle'])) {
 

  $duzenle=$db->prepare("UPDATE menuler SET
   menu_ust=:ust, 
   menu_ad=:ad,
   menu_url=:url,
   menu_detay=:detay,
   menu_sira=:sira,
   menu_durum=:durum
   WHERE menu_id={$_POST['menu_id']}");

  $update=$duzenle->execute(array(
   'ust' => $_POST['menu_ust'],
   'ad' => $_POST['menu_ad'],
   'url' => $_POST['menu_url'],
   'detay' => $_POST['menu_detay'],
   'sira' => $_POST['menu_sira'],
   'durum' => $_POST['menu_durum']
  ));

  $menu_id=$_POST['menu_id'];

  if ($update) {

   
   Header ("location:../menu-duzenle.php?menu_id=$menu_id&durum=ok");
  } else {

   Header ("location:../menu-duzenle.php?durum=no");

  }

}﻿









 ?>