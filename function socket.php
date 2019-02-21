<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>floor-ceil-round</title>
</head>
<body>
<?php
    echo floor(4.3 )."<br />";   // 4
    echo floor(9.999). "<br />"; // 9
    echo floor(-3.14)."<br />"; // -4
    echo floor(1.9)."<br />"; //1
    echo floor(-1.2)."<br />"; //-2
    //ฟังก์ชัน floor เป็นฟังก์ชันที่มีการปัดเศษลง
?><br>
<?php
    echo ceil(4.3 )."<br />";   // 5
    echo ceil(9.999). "<br />"; // 10
    echo ceil(-3.14)."<br />"; // -3
    echo ceil(1.9)."<br />"; //2
    echo ceil(-1.2)."<br />"; //-1
    //ฟังก์ชัน ceil เป็นฟังก์ชันที่มีการปัดเศษขึ้น ซึ่งตรงข้ามกับ floor
?><br>
<?php
    echo round(4.3 )."<br />";   // 4
    echo round(9.999). "<br />"; // 10
    echo round(-3.14)."<br />"; // -3
    echo round(1.9)."<br />"; //2
    echo round(-1.2)."<br />"; //-1
    //ฟังก์ชัน round เป็นฟังก์ชันที่มีการปัดเศษลงหากหลักสุดท้ายมีค่าน้อยกว่า 5 และปัดเศษขึ้นหากหลักสุดท้ายมีค่าตั้งแต่ 5 ขึ้นไป
?>

</body>
</html>