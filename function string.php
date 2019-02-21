<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>string</title>
</head>
<body>
<?php    
    echo  chr(75) . "<br />";
    echo  chr(80) . "<br />";
    echo  ord("B") . "<br />"; 
    echo  ord("V") . "<br />";

    //chr() จะใช้ส่งตัวอักษรตามค่าแอสกี้ที่ระบุกลับมา เช่น chr(75) จะได้ตัวอักษร K กลับมา
    //ord() จะใช้ส่งลำดับแอสกี้ของตัวอักษรกลับมา เช่น ord(“B”) จะได้ค่า 66 กลับมา
?><br>
<?php
    $str = "Hello World!"; 
    echo ord($str);

    //อ่านค่าแอสกี้ของตัวอักษรตัวแรก ด้วยฟังก์ชัน ord() เช่น  Hello World ตัวแรกคือ H จะได้ค่า 72 
?>

</body>
</html>