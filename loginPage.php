<?php
include 'db_info.php'; //dbinfo 불러옴
session_start();

//이미 로그인된 경우 경고문
if (isset($_SESSION['userid'])) {
    $message = "이미 로그인되었습니다.";
    echo "<script type='text/javascript'>alert('$message')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<!--로그인페이지-->
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles.css">
    <title>GACHI_LOGIN</title>
</head>

<body>
    <div class="loginFrame">
        <div class="menu">
            <input type="checkbox" id="toggle">
            <label for="toggle" class="btn">&equiv;</label>
            <label for="toggle" class="closer"></label>
            <img src="img/logo128.png" class="brandLogo" onclick="myHome()">
            <div class="offcanvas">
                <h1></h1>
                <ul>
                    <li>
                        <a href="index.html" id="jsGoHome">HOME</a>
                    </li>
                    <li>
                        <a href="loginPage.html">로그인</a>
                    </li>
                    <li>
                        <a href="recruitPage.html">그룹 모잡</a>
                    </li>
                    <li>
                        <a href="group.html">나의 그룹</a>
                    </li>
                    <li>
                        <a href="schedule.html">일정표</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="loginBox">

            <div class="loginSection">
                <ul class="loginList">
                    <form action="login_check.php" method="post">
                        <li><img src="img/logo128White.png" class="LoginBandLogo"></li>
                        <li><input class="inputLogin" name="id" type="text" placeholder="아이디" /></li>
                        <li><input class="inputLogin" name="pwd" type="password" placeholder="비밀번호" /></li>
                        <li><button class="enterLogin" type="submit">로그인</button></li>
                        <li><button class="signUp" href="/signUp.html" target="_self">회원가입</button></li>
                    </form>
                </ul>
            </div>

        </div>
    </div>
    <script src="click.js"></script>
</body>

</html>