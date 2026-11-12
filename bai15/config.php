
<?php
$config = mysqli_connect('localhost', 'root', '', 'review');

// Kiem tra ket noi
if (mysqli_connect_errno() !== 0) {
    die("Error: Could not connect to the database. An error "
        . mysqli_connect_error() . " occurred.");
}

// Cau hinh tieng Viet
mysqli_set_charset($config, 'utf8');
?>
