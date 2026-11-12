
<?php
header("Content-type: text/xml; charset=UTF-8");

// Ket noi CSDL
$conn = mysqli_connect("localhost", "root", "", "rss")
    or die("Khong the ket noi CSDL");

mysqli_set_charset($conn, "utf8");

// Lay du lieu tin tuc
$query = "SELECT * FROM news";
$result = mysqli_query($conn, $query);

$item = "";

while ($row = mysqli_fetch_array($result)) {

    $item .= '<item>';

    $item .= '<title>' .
        htmlspecialchars($row['title'], ENT_XML1, 'UTF-8') .
        '</title>';

    $item .= '<link>' .
        htmlspecialchars($row['link'], ENT_XML1, 'UTF-8') .
        '</link>';

    $item .= '<description>' .
        htmlspecialchars($row['description'], ENT_XML1, 'UTF-8') .
        '</description>';

    $item .= '</item>';
}

// Xuat RSS


echo '<rss version="2.0">';

echo '<channel>';

echo '<title>Học Web | Học làm web pro</title>';

echo '<link>http://hocweb.com.vn</link>';

echo '<description>Website hocweb.com.vn được hình thành từ ý tưởng giúp các em sinh viên có một nơi học tập thực tế gắn với nhu cầu doanh nghiệp.</description>';

echo $item;

echo '</channel>';

echo '</rss>';

?>
