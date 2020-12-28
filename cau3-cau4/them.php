<?php
if(isset($_REQUEST['add']))
{    $xml=new DOMDocument("1.0","UTF_8");
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('sinhvien.xml');
    $root= $xml->firstChild;
    $dataTag=$xml->createElement("sinhvien");
    $dataTag->appendChild($xml->createElement("masv",$_REQUEST['masv']));
    $dataTag->appendChild($xml->createElement("tensv",$_REQUEST['tensv']));
    $dataTag->appendChild($xml->createElement("ngaysinh",$_REQUEST['ngaysinh']));
    $dataTag->appendChild($xml->createElement("quequan",$_REQUEST['quequan']));
    $dataTag->appendChild($xml->createElement("diemmontinhoc",$_REQUEST['diemmontinhoc']));
    $root->appendChild($dataTag);
    $xml->save('sinhvien.xml');
} ?>

<html>
    <body><center>
    <textarea rows='24' cols='70'>
    <?php
    if (empty($_REQUEST['add']))
    {
        $xml=new DOMDocument("1.0","UTF_8");
        $xml->load("sinhvien.xml");
    }
    print($xml->saveXML());
    ?>
    </textarea>
    </center>
    <br>
    <center>
    <table border="2">
    <form action="them.php" method="post">
        <tr><td colspan='2' align="center">Thêm sinh viên</td></tr>    
    <tr><td>Mã sinh viên:</td><td><input type="text" name="masv" placeholder="Nhập mã sinh viên"/></td></tr>
    <tr><td>Tên sinh viên:</td><td><input type="text" name="tensv" placeholder="Nhập tên sinh viên"/></td></tr>
    <tr><td>Ngày sinh:</td><td><input type="text" name="ngaysinh" placeholder="Nhập ngày sinh"/></td></tr>
    <tr><td>Quê Quán:</td><td><input type="text" name="quequan" placeholder="Nhập quê quán"/></td></tr>
    <tr><td>Điểm môn tin học:</td><td><input type="text" name="diemmontinhoc" placeholder="Nhập điểm"/></td></tr>
    <tr><td colspan="3" align="center"><input type="submit" name="add" value="Thêm"/>
    <input type="submit" name="add" value="Nhập lại"/>
    <button class = "button" type = "submit"><a href="index.php">Bảng danh sách sinh viên</a></button></td></tr>    
    </form>     <table>     </center>