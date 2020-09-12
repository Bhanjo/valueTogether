<?php
    include 'db_info.php';
    session_start();

    $writer = $_SESSION['userid'];
    $todo = $_POST['todo'];
    $year = $_POST['myYear'];
    $month = $_POST['myMonth'];
    $date = $_POST['myDate'];

    if($year == NULL || $month == NULL || $date == NULL || $todo == NULL) {
        $message = "$writer, $year, $month $date, $todo";
        echo "<script type='text/javascript'>alert('$message')</script>";
        echo "<script type='text/javascript'>window.location.href='calendar.php'</script>";
        exit();
    } 

    $insertSql = "INSERT INTO todoList(user_id, todo, year, month, date) VALUES ('$writer', '$todo', '$year', '$month', '$date')";
    $resultInsert = $mysqli->query($insertSql);
    if($resultInsert) {
        echo "<script type='text/javascript'>window.location.href='calendar.php'</script>";
    }
?>