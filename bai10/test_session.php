
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Session</title>
</head>
<body>

<?php
echo "Chao ban " . $_SESSION['name'] . " co tuoi la: " . $_SESSION['age'];
?>

<br/>
<a href="huy_session.php">Huy session</a>

</body>
</html>
