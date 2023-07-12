<?php

  require_once('connectDB.php');

  session_start();



  $strSQL10 = "SELECT * FROM category ORDER BY category_num ASC";
  $objQuery10 = mysqli_query($Connection,$strSQL10);

  $strSQL2 = "SELECT * FROM member WHERE member_username = '".$_SESSION['member_username']."' ";
  $objQuery2 = mysqli_query($Connection,$strSQL2);
  $objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register and login</title>
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
    <div class="font-size-24">ระบบสมัครสมาชิกและเข้าสู่ระบบ</div>
    <div class="user-detail border-box center-box">
        <div>ข้อมูลของสมาชิก</div>
        <div class="member ">
            <img src="images/member/<?php echo $objResult2["member_img"];?>" class="shop_img_1" width="300px"
                height="300px">
            <div class="profile-group">
                <div>ชื่อผู้ใช้ :<?php echo $objResult2["member_username"]; ?> </div>
                <div>ชื่อ - นามสกุล :<?php echo $objResult2["member_name"]; ?></div>
                <div>อีเมล์ : <?php echo $objResult2["member_email"]; ?></div>
                <div>เบอร์โทรศัพท์ : <?php echo $objResult2["member_tel"]; ?></div>
                <div>ระดับผู้ใช้งาน : <?php echo $objResult2["member_level"]; ?></div>
                <div>วันเวลาที่สมัครเป็นสมาชิก : <?php echo $objResult2["member_date"];?></div>
            </div>

        </div>
        <div class="edit-logout">
            <div class="btn-edit border-box">
            <a href="profile_edit.php"><button>แก้ไขข้อมูล<button></a>
            </div>
            <div class="btn-logout border-box">
            <a href="logout.php"><button >ออกจากระบบ<button></a>
            </div>
        </div>
    </div>
   
</body>

</html>