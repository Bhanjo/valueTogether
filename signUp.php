<!DOCTYPE html>
<!--로그인페이지-->
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles.css">
    <title>GACHI_SIGNUP</title>
</head>

<body>

    <div class="loginFrame">
        <?php
        include 'header.php';
        ?>
        <div class="loginBox">
            <!-- php 넘겨줌 -->
            <div class="signSection">
                <form action="sign_up.php" method="POST">
                    <ul class="loginList">
                        <li><img src="img/logo128White.png" class="LoginBandLogo"></li>
                        <li><input class="inputLogin" type="text" placeholder="별명" name="u_name" /></li>
                        <li><input class="inputLogin" type="text" placeholder="아이디" name="id" /></li>
                        <li><input class="inputLogin" type="password" id="pwdCheck" onchange="checkPw()" placeholder="비밀번호" name="pwd" /></li>
                        <li><input class="inputLogin" type="password" id="pwdCheckRe" onchange="checkPw()" placeholder="비밀번호 재확인" />
                            <span id="passPw"></span></li>
                        <li><button class="enterLogin" id="activeButton" type="submit" name="submit">회원가입</button></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <script src="click.js"></script>
    <script src="checkPassword.js"></script>

</body>

</html>