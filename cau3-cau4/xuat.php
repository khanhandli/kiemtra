<!DOCTYPE html>
<html lang="VN">
    <head>
        <title>File JSON</title>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<?php
$xml_string=file_get_contents('sinhvien.xml');
$xml = simplexml_load_string($xml_string);
$json = json_encode($xml,JSON_UNESCAPED_UNICODE);
echo ($json);
?>
</html>