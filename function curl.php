<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>function curl</title>
</head>
<body>
<?php
    // create a new cURL resource
    $ch = curl_init();

    // set URL and other appropriate options
    curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
    curl_setopt($ch, CURLOPT_HEADER, 0);

    // grab URL and pass it to the browser
    curl_exec($ch);

    // close cURL resource, and free up system resources
    curl_close($ch);
    //ผลลัพธ์ของตัวอย่างนี้เป็นการขอข้อมูลจาก web http://www.example.com/ แล้วทำการ print ข้อมูล เพื่อให้สามารถเขียนคำสั่งเพื่อติดต่อสื่อสารกับ Server
?>
</body>
</html>