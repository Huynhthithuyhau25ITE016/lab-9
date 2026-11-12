
<?php

$connect = mysqli_connect("localhost", "root", "");

if (!$connect) {
    die("Không thể kết nối Database!");
}

mysqli_select_db($connect, "tintuc");

mysqli_query($connect, "SET names 'utf8'");

?>
