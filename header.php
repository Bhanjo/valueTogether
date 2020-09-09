<?php
include 'db_info.php';
// session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css?after"></head>
<div class="menu">
    <input type="checkbox" id="toggle">
    <label for="toggle" class="btn">&equiv;</label>
    <label for="toggle" class="closer"></label>

    <div class="menuContainer">
    <img src="img/logo128.png" class="brandLogo" onclick="myHome()">
    <form action="logout.php" class="logoutContainer"><button type="submit" name="submit" id="logoutBox"><img src="img/logout.jpg" class="logoutBtn"></button></form>
    </div>

    <div class="offcanvas">
        <h1></h1>
        <ul>
            <li>
                <a href="index.php">HOME</a>
            </li>
            <li>
                <a href="loginPage.php">로그인</a>
            </li>
            <li>
                <a href="recruitPage.php">그룹 모집</a>
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

</html>