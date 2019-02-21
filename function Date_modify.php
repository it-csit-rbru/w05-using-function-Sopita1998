<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>date_modify</title>
</head>
<body>
<?php
    $date = date_create('2019-02-21');
    date_modify($date, '+1 day');
    echo date_format($date, 'Y-m-d');
/*เป็นการทำงานของฟังก์ชัน modify ของคลาส DateTime เพื่อปรับวันเวลา
จากตัวอย่าง กำหนดวันเป็น 21 กุมภาพันธ์ 2019 แล้วใช้ ฟังก์ชัน modify ของคลาส DateTime เปลี่ยนวันเพิ่มขึ้น 1 วัน เป็น 22 กุมภาพันธ์ 2019*/

?><br>

<?php
    $date = new DateTime('2019-02-21');

    $date->modify('+1 month');
    echo $date->format('Y-m-d') . "\n";

    $date->modify('+1 month');
    echo $date->format('Y-m-d') . "\n";
/*เป็นการทำงานของฟังก์ชัน modify ของคลาส DateTime เพื่อปรับวันเวลา
จากตัวอย่าง กำหนดวันเป็น 21 กุมภาพันธ์ 2019 แล้วใช้ ฟังก์ชัน modify ของคลาส DateTime เปลี่ยนเดือนเพิ่มขึ้น 1 เดือน เป็น 21 มีนาคม 2019*/    
?>
</body>
</html>