<?php 

ob_start();
session_start();
?>


<?php 

$username="root";
$password="cece1453";
$sunucu="localhost";
$database="tamirci";


$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");
if (!$baglan) {
	mysql_close($baglan);
	echo "hatalı";
	exit();
}
$db=mysql_select_db($database);
if (!$db) {
	echo "Veritabanı Hatası:".mysql_error(); echo"<br>";
	exit();
}

?>