<?php 
include 'baglan.php';
//Site Ayarları
if (isset($_POST['ayarkaydet'])) {
	$id = 0;
	$ayarkaydet=mysql_query("update ayarlar set ayar_title='".$_POST['ayar_title']."',ayar_description='".$_POST['ayar_description']."',ayar_keywords='".$_POST['ayar_keywords']."',ayar_telefon='".$_POST['ayar_telefon']."',ayar_facebook='".$_POST['ayar_facebook']."',ayar_twitter='".$_POST['ayar_twitter']."',ayar_footer='".$_POST['ayar_footer']."',ayar_adres='".$_POST['ayar_adres']."',ayar_mail='".$_POST['ayar_mail']."',ayar_fax='".$_POST['ayar_fax']."' where ayar_id='$id'");

	if (mysql_affected_rows()) {
		header("Location:../ayarlar.php?durum=ok");
	}else {
		header("Location:../ayarlar.php?durum=no");
	}


}
// Kullanıcı Girişi İşlemleri
if (isset($_POST['loggin'])) {
	$admin_kadi =$_POST['admin_kadi'];
	$admin_sifre=md5($_POST['admin_sifre']);
	
	if ($admin_kadi && $admin_sifre) {
		$sorgula = mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");
		$verisay=mysql_num_rows($sorgula);


		if ($verisay>0) {
			$_SESSION['admin_kadi']=$admin_kadi;
			header('Location:../index.php');
		}else {
			header('Location:../login.php?login=no');
		}
	}
}
// Menu Kaydetme
if (isset($_POST['menukaydet'])) {
	$menuekle =mysql_query("insert into menuler (menu_ad,menu_link) VALUES ('".$_POST['menu_ad']."','".$_POST['menu_link']."')");

	if (mysql_affected_rows()) {
		header("Location:../menu-ekle.php?durum=ok");
	}else {
		header("Location:../menu-ekle.php?durum=no");
	}
}

// Sayfa Kaydetme

if (isset($_POST['sayfakaydet'])) {

	$zaman=date('Y-m-d H:i');

	$sayfaekle=mysql_query("insert into sayfalar (sayfa_ad,sayfa_icerik,sayfa_sira,sayfa_anasayfa,sayfa_tarih) VALUES ('".$_POST['sayfa_ad']."','".$_POST['sayfa_icerik']."','".$_POST['sayfa_sira']."','".$_POST['sayfa_anasayfa']."','".$zaman."')");

	if (mysql_affected_rows()) {
		header("Location:../sayfalar.php?durum=ok");
	}else {
		header("Location:../sayfalar.php?durum=no");
	}
}
// Sayfa Silme
if ($_GET['sayfasil']=="ok") {
	
	$menusil=mysql_query("delete from sayfalar where sayfa_id='".$_GET['sayfa_id']."'");
	if (mysql_affected_rows()) {
		header('Location:../sayfalar.php?durum=ok');
	}else{
		header('Location:../sayfalar.php?durum=no');
	}
}
// Sayfa Düzenle
if (isset($_POST['sayfaduzenle'])) {
	$sayfa_id=$_POST['sayfa_id'];
	$sayfaduzenle=mysql_query("update sayfalar set sayfa_ad='".$_POST['sayfa_ad']."',sayfa_icerik='".$_POST['sayfa_icerik']."',sayfa_sira='".$_POST['sayfa_sira']."',sayfa_anasayfa='".$_POST['sayfa_anasayfa']."' where sayfa_id='$sayfa_id'");

	if (mysql_affected_rows()) {
		header("Location:../sayfa-duzenle.php?durum=ok&sayfa_id=$sayfa_id");
	}else {
		header("Location:../sayfa-duzenle.php?durum=no&sayfa_id=$sayfa_id");
	}
}
// haber Düzenle
	if (isset($_POST['haberduzenle'])) {
		$haber_id=$_POST['haber_id'];
		$haberduzenle=mysql_query("update haber set haber_ad='".$_POST['haber_ad']."',haber_detay='".$_POST['haber_detay']."' where haber_id='$haber_id'");

		if (mysql_affected_rows()) {
			header("Location:../haber-duzenle.php?durum=ok&sayfa_id=$sayfa_id");
		}else {
			header("Location:../haber-duzenle.php?durum=no&sayfa_id=$sayfa_id");
		}

	}

// Menu Düzenle
	if (isset($_POST['menuduzenle'])) {
		$menu_id=$_POST['menu_id'];
		$menuduzenle=mysql_query("update menuler set menu_ad='".$_POST['menu_ad']."',menu_link='".$_POST['menu_link']."' where menu_id='$menu_id'");

		if (mysql_affected_rows()) {
			header("Location:../menu-duzenle.php?durum=ok&menu_id=$menu_id");
		}else {
			header("Location:../menu-duzenle.php?durum=no&menu_id=$menu_id");
		}


	}
// Menu Silme 
	if ($_GET['menusil']=="ok") {

		$menusil=mysql_query("delete from menuler where menu_id='".$_GET['menu_id']."'");
		if (mysql_affected_rows()) {
			header('Location:../menuler.php?durum=ok');
		}else{
			header('Location:../menuler.php?durum=no');
		}
	}

//Haber silme
	if ($_GET['habersil']=="ok") {

		$menusil=mysql_query("delete from haber where haber_id='".$_GET['haber_id']."'");
		if (mysql_affected_rows()) {
			header('Location:../haberler.php?durum=ok');
		}else{
			header('Location:../haberler.php?durum=no');
		}
	}

 // Slider Ekleme
	if (isset($_POST['sliderekle'])) {
		$uploads_dir = '../uploads';
		@$tmp_name =$_FILES['slidegorsel']["tmp_name"];
		@$name = $_FILES['slidegorsel']["name"];
		$benzersizayi1=rand(20000, 32000);
		$benzersizayi2=rand(20000, 32000);
		$benzersizayi3=rand(20000, 32000);
		$benzersizayi4=rand(20000, 32000);
		$benzersizad =$benzersizayi1.$benzersizayi2.$benzersizayi3.$benzersizayi4;
		$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
		$sliderekle =mysql_query("insert into slider (slider_resimyolu,slider_url,slider_sira,slider_ad) values ('".$refimgyol."','".$_POST['slider_url']."','".$_POST['slider_sira']."','".$_POST['slider_ad']."') ");
		if (mysql_affected_rows()) {
			header("Location:../slider-ekle.php?durum=ok");
		}else{
			header("Location:../slider-ekle.php?durum=no");
		}
	}
// Haber Ekleme
	if (isset($_POST['haberekle'])) {
		$uploads_dir = '../uploads/haberler';
		@$tmp_name =$_FILES['haber_resimyolu']["tmp_name"];
		@$name = $_FILES['haber_resimyolu']["name"];
		$benzersizayi1=rand(20000, 32000);
		$benzersizayi2=rand(20000, 32000);
		$benzersizayi3=rand(20000, 32000);
		$benzersizayi4=rand(20000, 32000);
		$benzersizad =$benzersizayi1.$benzersizayi2.$benzersizayi3.$benzersizayi4;
		$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
		$haber_zaman=date('Y-m-d H:i');
		$haberekle =mysql_query("insert into haber (haber_resimyolu,haber_ad, haber_detay,  haber_zaman) values ('".$refimgyol."','".$_POST['haber_ad']."','".$_POST['haber_detay']."','".$haber_zaman."') ");
		if (mysql_affected_rows()) {
			header("Location:../haberler.php?durum=ok");
		}else{
			header("Location:../haberler.php?durum=no");
		}
	}

// Slider Silme
	if ($_GET['slidersil']=="ok") {
		$slidersil=mysql_query("delete from slider where slider_id='".$_GET['slider_id']."'");
		if (mysql_affected_rows()) {
			header("Location:../slider.php?durum=ok");
		}else{
			header("Location:../slider.php?durum=no");
		}
	}

	if(isset($_POST['sliderguncelle'])) {


		$sliderguncelle=mysql_query("update slider set slider_sira='".$_POST['slider_sira']."'  where slider_sira='$slider_sira'");

		if(mysql_affected_rows())

		{
			$resim_sil=$_GET['sliderresimsil'];
			unlink("../$resim_sil");
			header("Location:../slider.php?duzen=ok");

		}
		else {

			header("Location:../slider.php?duzen=no");

		}
	}﻿





	?>