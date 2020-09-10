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

    // $row = $result->fetch_assoc();
    // $postNum = $row['index'];
    ?>