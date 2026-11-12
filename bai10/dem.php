
<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dem Session</title>
</head>

<body>

<?php
echo $_SESSION['count'];
?>

<br/>

<a href="tang.php">Next</a>

</body>
</html>
