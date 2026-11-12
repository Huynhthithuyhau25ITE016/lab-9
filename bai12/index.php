
<?php

// Goi file functions.php
include("functions.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // UPDATE RATING
    if (isset($_POST['rate_submit'])) {

        if (isset($_POST['rate'])) {

            $rate = $_POST['rate'];

            setRatingInfo($id, $rate);
        }
    }

    // Lay thong tin san pham
    $html = getProduct($id);

    // Hien thi trang chi tiet
    include("template/view-product.php");

} else {

    // Lay danh sach san pham
    $html = listProduct();

    // Hien thi trang danh sach
    include("template/list-products.php");
}

?>
