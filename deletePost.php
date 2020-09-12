<?php
   include 'db_info.php';
   include 'nowWritePage.php';

   $check = "SELECT writer FROM board WHERE `index` = $_GET[no]";
   $ret= $mysqli->query($check);
   $row = $ret->fetch_assoc();

   if($_SESSION['userName'] != $row['writer']) {
       $message = "작성자만 삭제 가능합니다";
       echo "<script type='text/javascript'>alert('$message')</script>";
       exit();
   }

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