<?php
include 'db_info.php';
session_start();

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
    <link rel="stylesheet" href="stles.css">
</head>

<body>
    <form action="write_check.php" method="POST">
        <table id="one">
            <tr>
                <td height="20">Write</td>
            </tr>
            <table id="two">
                <tr>
                    <td>NAME:</td>
                    <td><input type="text" name="writer" value="작성자이름"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" value="비밀번호"></td>
                </tr>
                <tr>
                    <td>Title: </td>
                    <td><input type="text" name="title" value="제목"></td>
                </tr>
                <tr>
                    <td>Article:</td>
                    <td><textarea name="content" rows="30" cols="80"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="POST"></td>
                </tr>
            </table>
        </table>
    </form>
</body>

</html>