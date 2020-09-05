<?php
    include 'db_info.php';
    session_start();

    if(!isset($_SERVER['HTTP_REFERER'])) {
        die('Direct Access Not Allowed');
    }

    $writer = $_POST['writer'];
    $password = $_POST['password'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    if($writer == NULL || $password == NULL || $title == NULL || $content == NULL) {
        echo "미입력한 부분이 있습니다.";
        echo "<a href=write.php>페이지되돌아가기</a>";
        exit();
    }

    $query = "INSERT INTO board (writer, Title, content, password, View_Count) VALUES('$writer', '$title', '$content', '$password', 0)";
    $execute = $mysqli->query($query);
    if($execute) {
        echo "성공적으로 포스팅했습니다";
        header("loaction:recruitPage.php");
    } else {
        echo "error!";
        echo $mysqli->error;
    }
?>