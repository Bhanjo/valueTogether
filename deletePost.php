<?php
    include 'db_info.php';
    include 'nowWritePage.php';

    $sql = "DELETE FROM board WHERE `index` = '$_GET[no]'";
    $execute = $mysqli->query($sql);

    if($execute) {
        $message = "성공적으로 삭제했습니다.";
        echo "<script type='text/javascript'>alert('$message')</script>";
        echo "<script type='text/javascript'>window.location.href='recruitPage.php'</script>";
    } else {
        echo "error!";
        echo $mysqli->error;
    }
?>