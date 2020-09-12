<?php
    include 'db_info.php';

    $sql = "DELETE FROM todoList WHERE todoNum = '$_GET[no]'";
   $execute = $mysqli->query($sql);
   if($execute) {
    //    $message = "성공적으로 삭제했습니다.";
    //    echo "<script type='text/javascript'>alert('$message')</script>";
       echo "<script type='text/javascript'>window.location.href='calendar.php'</script>";
   } else {
       echo "error!";
       echo $mysqli->error;
   }
