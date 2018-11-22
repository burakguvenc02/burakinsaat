
<?php
error_reporting(0); 
ob_start();
session_start();
 function seo($s) {
 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');

 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
 $baslik = str_replace(array("&quot;","&#39;"), NULL, $baslik);
 $s = str_replace($tr,$eng,$s,$baslik);
 $s = strtolower($s);
 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
 $s = preg_replace('/\s+/', '-', $s);
 $s = preg_replace('|-+|', '-', $s);
 $s = preg_replace('/#/', '', $s);
 $s = str_replace('.', '', $s);
 $s = trim($s, '-');
 return $s;
}




function tcevir($tarih){
	$tr 	= explode("-",$tarih);
	$tarih1 = $tr[2]."-".$tr[1]."-".$tr[0];
	return $tarih1;
}

?>