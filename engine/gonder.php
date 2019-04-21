<?php
$adsoyad = $_POST["adsoyad"];
$gsm = $_POST["gsm"];
$mail = $_POST["mail"];
$mesaj = $_POST["mesaj"];
$alici = "iletisim@e-ogrencitakip.com"; //Buraya iletişim formunun gönderileceği mail adresini yazıyoruz.
$konu = "Iletisim Formu";
$ipadres = $_SERVER['REMOTE_ADDR'];

$mesajlar.="<b>-Iletişim Formu-<br/><br/><br/>";
$mesajlar.="<b>Ad Soyad:</b> <br/>".$adsoyad."<br/><br/>";
$mesajlar.="<b>GSM:</b> <br/>".$gsm."<br/><br/>";
$mesajlar.="<b>E-Posta:</b> <br/>".$mail."<br/><br/>";
$mesajlar.="<b>Mesaj:</b> <br/>".$mesaj."<br/><br/>";
$mesajlar.="<b>Ip Adres:</b> <br/>".$ipadres."<br/><br/>";

$mesajgonder=mail($alici, $konu, $mesajlar, "Content-type: text/html; charset=utf-8\r\n");
if ($mesajgonder)
{
header("Location:../iletisim.html");
}
?>
