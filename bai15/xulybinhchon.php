
<?php
ob_start();

require_once("./config.php");

// Lay id phuong an nguoi dung chon
$idPA = $_GET["idPA"];

// Tang tong so lan binh chon
$qr1 = "update binhchon
        set SoLanChon = SoLanChon + 1
        where idBC = 1";

// Tang so lan chon cua phuong an
$qr = "update phuongan
       set SoLanChon = SoLanChon + 1
       where idBC = 1 and idPA = $idPA";

// Thuc hien cap nhat
if (mysqli_query($config, $qr1) && mysqli_query($config, $qr)) {
    header('location:ketquabinhchon.php');
} else {
    echo "That bai!";
}
?>
