
<?php
session_start();

unset($_SESSION['name']); // Huy session name
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Huy Session</title>
</head>
<body>

<?php
echo "Chao ban " . $_SESSION['name'] . " co tuoi la: " . $_SESSION['age'];
?>

</body>
</html>
