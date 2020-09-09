<?php
include 'db_info.php';
session_start();

//세션에 userid가 없으면 로그인페이지로 바로 이동
if (!isset($_SESSION['userid'])) {
    $message = "로그인을 해주세요.";
    echo "<script type='text/javascript'>alert('$message')</script>";
    header('location: loginPage.php');
}

//올바르지 않는 경로로 접근시
// if (!isset($_SERVER['HTTP_REPERER'])) {
//     die('Direct Access Not Allowed');
// }
// if (!isset($_SESSION['userid'])) {
//     $message = "올바른 경로를통해 접근하세요";
//     echo "<script type='text/javascript'>alert('$message')</script>";
//     echo "<script type='text/javascript'>window.location.href='loginPage.php'</script>";
// }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css?after">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <form action="write_check.php" method="POST">
        <div class="one">
            <table class="two">
                <div class="postTop">
                    <?php
                    echo "<a class='writeName'>From : {$_SESSION['userName']}
                    <input type='password' name='password' class='writePwd' value='0000'>
                    <input type='submit' class='sendPost' value='POST'>
                    </a>"
                    ?>
                </div>
                <div class="postBody">
                    <input type="text" name="title" class="writeTitle" placeholder="제목">
                    <textarea class="writearea" name="content" rows="10" placeholder="내용"></textarea>
                </div>
            </table>
        </div>
        
    </form>
</body>

</html>