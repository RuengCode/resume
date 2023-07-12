<?php

    require_once('connectDB.php');

    session_start();

    $strSQL2 = "SELECT * FROM member";
    $objQuery2 = mysqli_query($Connection,$strSQL2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/all-css.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/register-login.css">
</head>
<body>
<h1 class="header">
            <span>R</span>
            <span>e</span>
            <span>s</span>
            <span>u</span>
            <span>m</span>
            <span>e</span>
        </h1>
        <div class="div-nav">
            <nav class="navMenu">
                <a href="index.php">หน้าเเรก</a>
                <a href="test.php">สกิล</a>
                <a href="work.php">ผลงาน</a>
                <a href="contact.php">ติดต่อ</a>
            </nav>
        </div>
<div class="profile-group">
    <div class="shop_span_7_2">ข้อมูลสมาชิกทั้งหมด</div>
    <table class="shop_table_1">
      <tr>
        <td>ลำดับ</td>
        <td>ชื่อผู้ใช้</td>
        <td>รหัสผ่าน</td>
        <td>ชื่อ - นามสกุล</td>
        <td>อีเมล์</td>
        <td>เบอร์โทรศัพท์</td>
        <td>รูปภาพ</td>
        <td>วันเวลาที่สมัครเป็นสมาชิก</td>
        <td>ระดับ</td>
        <td>ตัวเลือก</td>
      </tr>
      <?php
      while ($objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC)) {
      ?>
      <tr>
        <td><?php echo $objResult2["member_id"];?></td>
        <td><?php echo $objResult2["member_username"];?></td>
        <td><?php echo $objResult2["member_password"];?></td>
        <td><?php echo $objResult2["member_name"];?></td>
        <td><?php echo $objResult2["member_email"];?></td>
        <td><?php echo $objResult2["member_tel"];?></td>
        <td><a class="shop_a_4" href="../images/member/<?php echo $objResult2["member_img"]; ?>" target="_blank"><i class="fa fa-camera-retro"></i></a></td>
        <td><?php echo $objResult2["member_date"];?></td>
        <td><?php echo $objResult2["member_level"];?></td>
        <td><a class="shop_a_3" href="member_edit.php?member_id=<?php echo $objResult2["member_id"];?>"><i class="fa fa-pencil-square"></i></a> , <a class="shop_a_3" href="JavaScript:if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')==true){window.location='member_delete.php?member_id=<?php echo $objResult2["member_id"];?>';}"><i class="fa fa-trash shop_a_5"></i></a></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </div>
  <?php mysqli_close($Connection); ?>
</body>
</html>