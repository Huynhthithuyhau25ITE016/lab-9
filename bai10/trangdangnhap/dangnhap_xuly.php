
<?php

session_start();

if (isset($_POST['login'])) {

    include('../connect.php');

    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sl = "SELECT * FROM users_bai10
           WHERE Username='$name'
           AND Password='$pass'";

    $result = mysqli_query($connect, $sl);

    $row = mysqli_fetch_assoc($result);

    $kt = mysqli_num_rows($result);

    if ($kt > 0) {

        $_SESSION['username'] = $name;
        $_SESSION['password'] = $pass;

        if (isset($_POST['remember'])
            and ($_POST['remember'] == "on")) {

            setcookie("username", $name, time() + 60);
            setcookie("password", $pass, time() + 60);
        }

        echo "<script>
            alert('Login Successfull.');
            location.href='trangquantriadmin.php';
        </script>";

    } else {

        echo "<script>
            alert('Login Failed.');
            location.href='dangnhap.php';
        </script>";
    }
}

if (isset($_POST['cancel'])) {

    echo "<script>
        location.href='dangnhap.php';
    </script>";
}

?>
