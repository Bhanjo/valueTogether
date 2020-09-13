<!--검색결과 게시판-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles.css?after">
    <title>가치해요_검색결과</title>
</head>

<body>
    <?php
    include 'db_info.php';
    include 'nowWritePage.php';
    // session_start();

    // $catagory = $_GET['catago'];
    $searchText = $_GET['search'];
    ?>

    <div class="frame">
        <!--네비게이션-->
        <?php
        include 'header.php';
        ?>

        <div class="mainBox">
            <div class="searchBox">
            <h1 class="searchTitle"><?php echo "'{$searchText}'"?>의 검색결과</h1>
            <form action="searchPost.php" method="get">
                <input type="text" name="search" placeholder="검색키워드를 입력하세요" class="searchInput" />
            </form>
                <div class="writePost"><a href="write.php">글쓰기</a></div>
            </div>

            <?php
            //concat으로 묶고 regexp로 묶어놓은걸 검색
            $sql = "SELECT*FROM board WHERE CONCAT(writer, Title, content) REGEXP '$searchText'";
            // $sql = "SELECT*FROM board WHERE Title LIKE '%$searchText%'";
            $sqlExecute = $mysqli->query($sql);
            ?>

            <div class="postList">
                <ul>
                    <!-- DB전체 게시물을 가져와 출력 -->
                    <?php
                    while ($row = $sqlExecute->fetch_assoc()) {
                    ?>
                        <li class="postInner">
                            <ul class="postHead">
                                <li class="postHeadInner">
                                    <p class="postNum">#<?php echo $row['index'] ?></p>
                                </li>
                                <li class="postHeadInner">
                                    <h3><?php echo $row['Title'] ?></h3>
                                </li>
                                <li class="postDelete">
                                    <a class="deleteBtn" href="deletePost.php?no=<?= $row['index'] ?>" role="button"><img src="img/trash24.png"></a>
                                </li>
                            </ul>

                            <ul class="postInfo">
                                <li class="postInfoInner">
                                    <h3 class="postWriter"><?php echo $row['writer'] ?></h3>
                                </li>
                                <li class="postInfoInner">
                                    <P><?php
                                        $postTime = strtotime($row['POST_DATE']);
                                        echo date('y.m.d(H:i)', $postTime) ?></P>
                                </li>
                            </ul>
                            <p class="postContent"><?php echo $row['content'] ?></p>

                            <p><?php //echo $row['View_count']
                                ?></p>
                        </li>
                    <?php
                    };
                    ?>
                </ul>

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
                            echo "<li><a href='recruitPage.php?current_page=1'> [ << ] </a></li>";
                            echo "<li><a href='recruitPage.php?current_page=$previous_block'> [ < ] </a></li>";
                        }
                        //페이지 블록 표시
                        for ($i = $start_page; $i <= $last_page; $i++) {
                            if ($i > $total_page) break;
                            if ($i == $current_page) echo "<li> [Now] </li>";
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

        </div>

    </div>

    <script src="click.js"></script>
</body>

</html>