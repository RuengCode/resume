<?php

  require_once('connectDB.php');

  session_start();

  if($_SESSION != NULL){
  }
  else{
  }

  $strSQL = "SELECT * FROM member";
  $objQuery = mysqli_query($Connection,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

  $strSQL10 = "SELECT * FROM category ORDER BY category_num ASC";
  $objQuery10 = mysqli_query($Connection,$strSQL10);

  $check_submit_register = "";
  $username = "";
  $name = "";
  $email = "";
  $tel = "";

  if(isset($_POST["submit"])){

    $strSQL1 = "SELECT * FROM member WHERE member_username = '".trim($_POST['member_username'])."'";
    $objQuery1 = mysqli_query($Connection,$strSQL1);
    $objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);

    $username = $_POST["member_username"];
    $name = $_POST["member_name"];
    $email = $_POST["member_email"];
    $tel = $_POST["member_tel"];
    

    if($objResult1){
      $check_submit_register = "<span class='shop_span_12'><i class='fa fa-exclamation-circle'></i> ชื่อผู้ใช้ : นี้มีผู้ใช้แล้ว กรุณากรอก ชื่อผู้ใช้ใหม่</span>";
    }else{
      $strSQL1 = "INSERT INTO member (member_username,member_password,member_name,member_email,member_tel,member_img,member_date) VALUES ('".$_POST["member_username"]."','".$_POST["member_password"]."','".$_POST["member_name"]."','".$_POST["member_email"]."','".$_POST["member_tel"]."','".$_POST["member_img"]."','".$_POST["member_date"]."')";
      $objQuery1 = mysqli_query($Connection,$strSQL1);

      $username = "";
      $name = "";
      $email = "";
      $tel = "";

      $check_submit_register = "<span class='shop_span_12_1'><i class='fa fa-check'></i> สมัครสมาชิกสำเร็จ <a href='login.php' class='shop_a_3'>Login Now !<a></span>";
    }

  }
  $check_submit_login = "";
  $check_login = "login";

  if (isset($_POST["submit-login"])) {

    $strSQL2 = "SELECT * FROM member WHERE member_username = '".mysqli_real_escape_string($Connection, $_POST['member_username'])."'and member_password = '".mysqli_real_escape_string($Connection, $_POST['member_password'])."'";
    $objQuery2 = mysqli_query($Connection, $strSQL2);
    $objResult2 = mysqli_fetch_array($objQuery2, MYSQLI_ASSOC);
    

    if (!$objResult2) {
      $check_submit_login = "<span class='shop_span_12'><i class='fa fa-exclamation-circle'></i> ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบใหม่อีกครั้ง !</span>";
    }else{
      $_SESSION["member_username"] = $objResult2["member_username"];
      $_SESSION["member_level"] = $objResult2["member_level"];

      session_write_close();

      if ($objResult2["member_level"] == "admin") {
        header("location:admin/index.php");
      }else{
        header("location:profile.php");
      }
    }
  }

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
    <!-- <div class="user-detail border-box center-box">
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
                <button>แก้ไขข้อมูล<button>
            </div>
            <div class="btn-logout border-box">
            <a href="logout.php"><button >ออกจากระบบ<button></a>
            </div>
        </div>
    </div> -->
    <div class="login-register border-box center-box">
        <div class="text-login">เข้าสู่ระบบ</div>
        <form name="login" method="post">
            <div class="input-group-all">
                <div class="inputBox">
                    <input required="" type="text" name="member_username">
                    <span>ชื่อผู้ใช้</span>
                </div>
                <div class="inputBox">
                    <input required="" type="password" name="member_password">
                    <span>รหัสผ่าน</span>
                </div>
            </div>
            <div class="all-btn-login-register">
                <div class="btn-login border-box">
                    <button name="submit-login">เข้าสู่ระบบ<button>
                </div>
            </div>
        </form>
        <div class="all-btn-login-register">
            <div class="btn-to-register border-box">
                <button onclick="pcsh1()">สมัครสมาชิก<button>
            </div>
        </div>
    </div>

    <?php echo $check_submit_login;?>
    </div>
    <div class="register-form border-box center-box" id="pc1">
        <div class="text-login">สมัครสมาชิก</div>
        <form name="register" method="post">
            <div class="input-register">
                <div class="inputBox">
                    <input required="" type="text" name="member_username" value="<?php echo $username; ?>">
                    <span>ชื่อผู้ใช้</span>
                </div>
                <div class="inputBox">
                    <input required="" type="password" name="member_password">
                    <span>รหัสผ่าน</span>
                </div>
                <div class="inputBox">
                    <input required="" type="text" name="member_name" value="<?php echo $name; ?>">
                    <span>ชื่อ-นามสกุล</span>
                </div>
                <div class="inputBox">
                    <input required="" type="email" name="member_email" value="<?php echo $email; ?>">
                    <span>อีเมล</span>
                </div>
                <div class="inputBox">
                    <input required="" type="text" name="member_tel" value="<?php echo $tel; ?>">
                    <span>เบอร์โทรศัพท์</span>
                </div>
                <!-- <input type="submit" name="submit" class="shop_input_2" value="สมัครสมาชิก / Signup" /> -->
                <input type="hidden" name="member_img" value="<?php echo "default.png";?>">
                <input type="hidden" name="member_date" value="<?php echo date('Y-m-d H:i:s');?>">
            </div>
            <div class="all-btn-login-register">

                <div class="btn-login border-box">
                    <button name="submit">สมัครสมาชิก<button>

                </div>
            </div>
        </form>


        <?php echo $check_submit_register;?>
    </div>
    <?php mysqli_close($Connection); ?>
</body>
<script src="test.js"></script>

</html>