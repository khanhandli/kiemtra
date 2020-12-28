<!DOCTYPE html>
<html lang="vn">
<body>
    <head>
        <title>Thông tin sách</title>
        <center><h1><u>Bảng danh sách sinh viên</u></h1></center>
        <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8">
    <style>
    table{
        width:100%;
        background: rgb(111,222,123);
    }
    </style>
    </head>
    <body style="background:url('giaodien.jpg')">
<table border="2">
<?php
$doc = new DOMDocument();
$doc->load( 'sinhvien.xml' );
$dssinhvien = $doc->getElementsByTagName( "sinhvien" );
echo "<tr background:><th>Ma sinh vien </th> <th>Ten sinh vien </th><th>Ngay sinh </th><th>Que Quan</th><th>Diem Mon Tin Hoc</th></tr>";
foreach( $dssinhvien as $sinhvien )
{
$masv = $sinhvien->getElementsByTagName( "masv" )->item(0)->nodeValue;
$tensv = $sinhvien->getElementsByTagName( "tensv" )->item(0)->nodeValue;
$ngaysinh = $sinhvien->getElementsByTagName( "ngaysinh" )->item(0)->nodeValue;
$quequan = $sinhvien->getElementsByTagName( "quequan" )->item(0)->nodeValue;
$diemmontinhoc = $sinhvien->getElementsByTagName( "diemmontinhoc" )->item(0)->nodeValue;


echo "<tr><td>$masv</td><td>$tensv</td><td>$ngaysinh</td><td>$quequan</td><td>$diemmontinhoc</td></tr>";
}

?>
</table>
<div class = "class-btn" align = "center">
            <button class = "button" type = "submit"><a href="them.php">Thêm sinh vien</a></button>
            <button class = "button" type = "submit"><a href="xuat.php">Xuất file JSON</a></button>
        </div>
</html>