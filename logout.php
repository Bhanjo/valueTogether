<!-- 로그아웃php -->
<?php
    include 'db_info.php';
    
    // 세션값을 불러오고 만약 그 세션에 userid가 존재시 userid세션을 해제한 후 세션을 파괴
    session_start();

    if(isset($_SESSION['userid'])) {
        unset($_SESSION['userid']);
        session_destroy();
        header("location: index.php");
        exit();
    } else {
        echo "error!";
    }
?>