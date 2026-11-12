
<?php
session_start(); // Khoi dong session

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = "hocweb.com.vn";
    $_SESSION['age'] = 120;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Session</title>
</head>
<body>

<?php
echo "Tên bạn là: " . $_SESSION['name'] . "<br/>";
echo "Số tuổi của bạn: " . $_SESSION['age'] . "<br/>";
?>

<a href="test_session.php">Click here!</a>

</body>
</html>
