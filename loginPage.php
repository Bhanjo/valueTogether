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
    <link rel="stylesheet" href="styles.css?after">
    <title>GACHI_LOGIN</title>
</head>

<body>
    <div class="loginFrame">
        <?php
        include 'header.php';
        ?>
        
        <div class="loginBox">

            <div class="loginSection">
                <ul class="loginList">
                    <form action="login_check.php" method="post">
                        <li><img src="img/logo128White.png" class="LoginBandLogo"></li>
                        <li><input class="inputLogin" name="id" type="text" placeholder="아이디" /></li>
                        <li><input class="inputLogin" name="pwd" type="password" placeholder="비밀번호" /></li>
                        <li><button class="enterLogin" type="submit">로그인</button></li>
                        <li><button class="signUp" href="signUp.html">회원가입</button></li>
                    </form>
                </ul>
            </div>

        </div>
    </div>
    <script src="click.js"></script>
</body>

</html>