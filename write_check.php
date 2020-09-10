<?php
    include 'db_info.php';
    session_start();

    if(!isset($_SERVER['HTTP_REFERER'])) {
        die('Direct Access Not Allowed');
    }

    // $writer = $_SESSION['userid'];
    $writer = $_SESSION['userName'];
    $password = $_POST['password'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    if($writer == NULL || $password == NULL || $title == NULL || $content == NULL) {
        echo "미입력한 부분이 있습니다.<br>";
        echo "<a href=write.php>페이지되돌아가기</a>";
        exit();
    }

    $query = "INSERT INTO board (`index`, writer, Title, content, password, View_Count) VALUES(`index`, '$writer', '$title', '$content', '$password', 0)";
    $execute = $mysqli->query($query);
    if($execute) {
        $message = "성공적으로 포스팅했습니다";
        echo "<script type='text/javascript'>alert('$message')</script>";
        echo "<script type='text/javascript'>window.location.href='recruitPage.php'</script>";
        // header("loaction:recruitPage.php");
    } else {
        echo "error!";
        echo $mysqli->error;
    }
?>