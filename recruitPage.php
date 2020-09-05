<!--그룹모집 게시판-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles.css">
    <title>가치해요</title>
</head>

<body>
    <?php
    include 'db_info.php';
    session_start();

    // 현재 페이지를 받아옴
    if (isset($_GET['current_page'])) {
        $current_page = $_GET['current_page'];
    } else {
        $current_page = 1;
    }

    $limit = 10; //한페이지에 보여줄 게시물 수
    $one = 3; //블록에 나타날 페이지 수
    //offet : 몇번째 게시물부터 가져올것인지 결정 현재페이지 포함 10개를 불러온다
    $offset = ($current_page - 1) * $limit;

    $num = $mysqli->query('SELECT count(*) FROM board'); //포스팅수
    $total_page = ceil($num->fetch_array(MYSQLI_NUM)[0] / $limit); //전체 페이지 수

    //현제페이지의 범위가 벗어날경우
    // if ($current_page < 1 || $current_page > $total_page) {
    //     echo "<script>('페이지가 존재하지 않습니다.')</script>";
    //     echo "<script>history.back();</script>";
    // }

    $current_block = ceil($current_page / $one);
    $query = "SELECT * FROM board ORDER BY  `index` desc LIMIT $limit OFFSET $offset";
    $result = $mysqli->query($query);
    ?>
    <div class="frame">
        <!--네비게이션-->
        <div class="menu">
            <input type="checkbox" id="toggle">
            <label for="toggle" class="btn">&equiv;</label>
            <label for="toggle" class="closer"></label>
            <img src="img/logo128.png" class="brandLogo" onclick="myHome()">
            <div class="offcanvas">
                <h1></h1>
                <ul>
                    <li>
                        <a href="index.html">HOME</a>
                    </li>
                    <li>
                        <a href="loginPage.html">로그인</a>
                    </li>
                    <li>
                        <a href="recruitPage.html">그룹 모집</a>
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

        <div class="mainBox">
            <div class="searchBox">
                <input type="text" placeholder="내용을 입력하세요" class="searchInput" />
            </div>
            >
            <div class="postList">
                <ul>
                    <!-- DB전체 게시물을 가져와 출력 -->
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <li class="postInner">
                            <p><?php echo $row['index'] ?></p>
                            <h3><?php echo $row['Title'] ?></h3>
                            <p><?php echo $row['writer'] ?></p>
                            <p><?php echo $row['content'] ?></p>
                            <P><?php echo $row['POST_DATE'] ?></P>
                            <p><?php echo $row['View_count'] ?></p>
                        </li>
                    <?php
                    };
                    ?>
                </ul>
            </div>

        </div>

        <!-- 페이징 -->
        <div>
            <ul class="paging">
                <?php
                $total_block = ceil($total_page / $one); //전체블록 갯수
                
                //블록의 위치에따라 불러오는 포스팅 시작점 결정
                $start_page = ($current_block * $one) - ($one - 1);
                if ($current_block == $total_block) {
                    $last_page = $total_page;
                } else {
                    $last_page = $current_block * $one;
                }

                //블록 이동
                $next_block = $last_page + 1;
                if ($next_block > $total_page) $next_block = $total_page;
                $previous_block = $start_page - 1 < 1 ? 1 : $start_page - 1;


                //첫페이지로 이동
                if ($current_page != 1) {
                    echo "<li><a href='recruitPage.php?current_page=$previous_block'> [ < ] </a></li>";
                    echo "<li><a href='recruitPage.php?current_page=1'> [ << ] </a></li>";
                }
                //페이지 블록 표시
                for ($i = $start_page; $i <= $last_page; $i++) {
                    if ($i > $total_page) break;
                    if ($i == $current_page) echo "<li> [Current Page] </li>";
                    else {
                        echo "<li><a href='recruitPage.php?current_page=$i'> [ $i ] </a></li>";
                    }
                }

               //이전페이지 이동
                if ($current_page != $total_page) {
                    echo "<li><a href='recruitPage.php?current_page=$next_block'> [ > ] </a></li>";
                    echo "<li><a href='recruitPage.php?current_page=$total_page'> [ >> ] </a></li>";
                }
                ?>
            </ul>
        </div>

    </div>

    <script src="click.js"></script>
</body>

</html>