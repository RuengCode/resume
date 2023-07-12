<?php

    require_once('connectDB.php');

    session_start();

    // $strSQL = "SELECT * FROM shop_information";
    // $objQuery = mysqli_query($Connection,$strSQL);
    // $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

    // $strSQL10 = "SELECT * FROM category ORDER BY category_num ASC";
    // $objQuery10 = mysqli_query($Connection,$strSQL10);

    $strSQL2 = "SELECT * FROM member WHERE member_username = '".$_SESSION['member_username']."' ";
    $objQuery2 = mysqli_query($Connection,$strSQL2);
    $objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);

    if (isset($_POST["submit"])) {

      if ($_FILES["member_img"]["name"] != NULL) {

        $target_dir = "images/member/";
        $target_file = $target_dir . basename($_FILES["member_img"]["name"]);

        move_uploaded_file($_FILES["member_img"]["tmp_name"], $target_file);

        $strSQL3 = "UPDATE member SET member_password = '".$_POST["member_password"]."' , member_name = '".$_POST["member_name"]."' , member_email = '".$_POST["member_email"]."' , member_tel = '".$_POST["member_tel"]."' , member_img = '".$_FILES["member_img"]["name"]."' WHERE member_username = '".$_SESSION['member_username']."' ";
        $objQuery3 = mysqli_query($Connection,$strSQL3);

        header("location:profile.php");

      }else{

        $strSQL3 = "UPDATE member SET member_password = '".$_POST["member_password"]."' , member_name = '".$_POST["member_name"]."' , member_email = '".$_POST["member_email"]."' , member_tel = '".$_POST["member_tel"]."' WHERE member_username = '".$_SESSION['member_username']."' ";
        $objQuery3 = mysqli_query($Connection,$strSQL3);

        header("location:profile.php");

      }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/all-css.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/register-login.css">
</head>
<body>
<div class="register-form border-box center-box">
        <div class="text-login text-user">ข้อมูลผู้ใช้ของ: <?php echo $objResult2["member_username"]; ?></div>
        <form name="profile_edit" method="post" enctype="multipart/form-data">
            <div class="input-register">
                <div class="inputBox">
                    <input required="" type="password" name="member_password" value="<?php echo $objResult2["member_password"]; ?>">
                    <span>รหัสผ่าน</span>
                </div>
                <div class="inputBox">
                    <input required="" type="text" name="member_name" value="<?php echo $objResult2["member_name"]; ?>">
                    <span>ชื่อ-นามสกุล</span>
                </div>
                <div class="inputBox">
                    <input required="" type="email" name="member_email" value="<?php echo $objResult2["member_email"]; ?>">
                    <span>อีเมล</span>
                </div>
                <div class="inputBox">
                    <input required="" type="text" name="member_tel" value="<?php echo $objResult2["member_tel"]; ?>">
                    <span>เบอร์โทรศัพท์</span>
                </div>
                <input type="file" name="member_img" class="shop_input_3 border-box center-box"/>
            </div>
            <div class="all-btn-login-register">

                <div class="btn-login border-box">
                    <button name="submit">บันทึกข้อมูล<button>

                </div>
            </div>
        </form>

    </div>
</body>
</html>