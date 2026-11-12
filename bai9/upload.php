
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Upload hình ảnh</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">

    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">

    <label>Upload
        <input type="file" name="ufile" id="ufile">
    </label>

    <p>
        <input type="submit" name="upload" value="Up load">
    </p>

</form>

<?php
// Folder de up file len
$target_path = "uploads/";

// Kiem tra da bam nut upload
if (isset($_POST['upload'])) {

    // Kiem tra co chon file hay khong
    if (isset($_FILES['ufile']) && $_FILES['ufile']['error'] == 0) {

        // Lay ten file
        $file_name = basename($_FILES['ufile']['name']);

        // Tao duong dan luu file
        $target_path = $target_path . $file_name;

        // Kiem tra kieu file upload
        if (!preg_match('/\.(jpg|gif)$/i', $file_name)) {
            echo "Khong phai file anh!";

        } else {

            // Xu ly trung ten
            if (file_exists($target_path)) {
                echo $file_name . " already exists. ";

            } else {

                // Di chuyen file tu thu muc tam vao uploads
                if (move_uploaded_file(
                    $_FILES['ufile']['tmp_name'],
                    $target_path
                )) {
                    echo "The file " . $file_name . " has been uploaded";

                } else {
                    echo "There was an error uploading the file, please try again!";
                }
            }
        }

    } else {
        echo "Vui long chon file de upload!";
    }
}
?>

</body>
</html>
