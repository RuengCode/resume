<?php
    require_once('connectDB.php');
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>work</title>
    <link rel="stylesheet" href="./css/all-css.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <div class="d-flex">
        <div class="form-check form-switch ms-auto mt-3 me-3">
            <label class="form-check-label ms-3" for="lightSwitch">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-brightness-high" viewBox="0 0 16 16">
                    <path
                        d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                </svg>
            </label>
            <input class="form-check-input" type="checkbox" id="lightSwitch" />
        </div>
    </div>

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
        <div class="work-all">
            <div class="work1 border-box">
                <div>ระบบสมัครสมาชิกและเข้าสู่ระบบ</div>
                <div>รายละเอียด</div>
                <div>- สามารถสมัครสมาชิกได้โดยใช้อีเมลและชื่อ</div>
                <div>- เข้าสู่ระบบโดยใช้ชื่อผู้ใช้งานและรหัสผ่านที่สมัครได้</div>
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <a href="register-login.php"><span class="button-text">ทดสอบ</span></a>
                </button>
            </div>

        </div>
        <div class="work-all">
            <div class="work1 border-box">
                <div>ระบบการจัดการสมาชิก</div>
                <div>รายละเอียด</div>
                <div>- สามารถสมัครสมาชิกได้โดยใช้อีเมลและชื่อ</div>
                <div>- เข้าสู่ระบบโดยใช้ชื่อผู้ใช้งานและรหัสผ่านที่สมัครได้</div>
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <a href="admin_member.php"><span class="button-text">ทดสอบ</span></a>
                </button>
            </div>

        </div>


    </body>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script src="switch.js"></script>

</html>