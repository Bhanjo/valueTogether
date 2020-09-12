<?php
    include 'db_info.php';
    session_start();

    if (!isset($_SESSION['userid'])) {
        $message = "로그인을 해주세요.";
        echo "<script type='text/javascript'>alert('$message')</script>";
        echo "<script type='text/javascript'>window.location.href='loginPage.php'</script>";
    }
    
    $user = $_SESSION['userid'];
    $query = "SELECT * FROM todoList WHERE user_id='$user'";
    $result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="calendarStyke.css?after">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>GACHI</title>
</head>
<bdoy>
    <?php
    include 'header.php';
    ?>
    <div class="main">
        <div class="content-wrap">

            <div class="content-left">
                <form method="post" action="formCalendar.php">
                    <div class="main-wrap">
                        <div id="main-day" class="main-day"></div>

                        <div><a id="show-main-year" class="main-year">00</a></div>
                        <div class="yearSend">
                            <textarea id="main-year" class="main-year" name="myYear"></textarea>
                        </div>

                        <a id="show-main-month" class="main-date">00</a>
                        <div class="monthSend">
                            <textarea id="main-month" class="main-date" name="myMonth"></textarea>
                        </div>
                        <a class="main-date">월</a>

                        <a id="show-main-date" class="main-date">00</a>
                        <div class="dateSend">
                            <textarea id="main-date" class="main-date" name="myDate"></textarea>
                        </div>
                        <a class="main-date">일</a>

                    </div>
                    <div class="todo-wrap">
                        <div class="todo-title">Todo List</div>
                        <div class="input-wrap">
                            <input type="text" name="todo" placeholder="please write here!!" id="input-box" class="input-box" onclick="inputBox.value = ''">

                            <button type="submit" id="input-data" class="input-data" href="formCalendar.php">INPUT</button>

                            <div class="input-list-box">
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                ?>

                                    <div class="input-list">
                                    <a><?php echo "Date.&nbsp&nbsp{$row['year']}-{$row['month']}-{$row['date']}" ?><br></a>
                                    <a><?php echo "Todo&nbsp:&nbsp&nbsp{$row['todo']}"?></a>
                                    <a class="listDel" href="deleteList.php?no=<?=$row['todoNum']?>" role="button">X</a>
                                    </div>

                                <?php
                                }
                                ?>
                            </div>

                            <!-- <div id="input-list" class="input-list"></div> -->
                        </div>
                    </div>
                </form>
            </div>

            <div class="content-right">
                <table id="calendar" align="center">
                    <thead>
                        <tr class="btn-wrap clearfix">
                            <td>
                                <label id="prev">
                                    &#60;
                                </label>
                            </td>
                            <td align="center" id="current-year-month" colspan="5"></td>
                            <td>
                                <label id="next">
                                    &#62;
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="sun" align="center">Sun</td>
                            <td align="center">Mon</td>
                            <td align="center">Tue</td>
                            <td align="center">Wed</td>
                            <td align="center">Thu</td>
                            <td align="center">Fri</td>
                            <td class="sat" align="center">Sat</td>
                        </tr>
                    </thead>
                    <tbody id="calendar-body" class="calendar-body"></tbody>
                </table>
            </div>

        </div>
    </div>
    
    <script src="calendarScript_1.js"></script>
    <script src="calendarScript_2.js"></script>
    <script src="calendarScript_3.js"></script>
    <script src="calendarScript_4.js"></script>
</bdoy>

</html>