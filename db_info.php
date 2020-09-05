<?php
    $mysql_hostname = "localhost";
    $mysql_username = "root";
    $mysql_password = "gkswh123@";
    $mysql_database = "hanjo";
    $mysql_port = '3306'; //접속시 사용하는 포트번호 혹시모르니 나중에 안되면 확인
    $mysql_charset = 'UTF-8';

    $mysqli = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);
    //$mysqli = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_charset);
?>