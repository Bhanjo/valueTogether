<?php
include 'db_info.php';
session_start();
// //세션에 userid가 없으면 로그인페이지로 바로 이동
// if(!isset($_SESSION['userid'])) {
//   echo "로그인 후 이용해주세요!";
//   header('location: loginPage.php');
// }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="styles.css?after">
  <title>가치해요</title>
</head>

<!--class : css와 같은 서식 / id : js이용시 js~ 사용-->

<body>
  <div class="frame">
    <!--네비게이션-->
    <?php
      include 'header.php';
    ?>

    <!--소개-->
    <section class="introduce">
      <div class="inner">
        <h1>가치해요</h1>
        <p>당신의 가치를 함께</p>
      </div>
    </section>

    <!--게시판-->
    <div class="bullentboard">

      <div class="searchBox">
        <input type="text" placeholder="내용을 입력하세요" class="searchInput" />
      </div>

      <div class="postBox">
        <h1>모집중인 그룹</h1>
        <a id="seeMore" onclick="goRecuitPage()">더보기</a>
        <div class="postCard">
          <ul>
            <?php
            $num = $mysqli->query('SELECT count(*) from board');
            $query = "SELECT * from board ORDER BY `index` desc LIMIT 8 OFFSET 0";
            $result = $mysqli->query($query);
            while ($row = $result->fetch_assoc()) {
            ?>
              <li class="card">
                <div class="cardDeco" id="paintCardColor"></div>
                <p><?php echo $row['Title'] ?></p>
                <a><?php echo $row['writer'] ?></a>
                <a><?php echo $row['content'] ?></a>
                <a><?php echo date('y/m/d(H:m)', strtotime($row['POST_DATE'])) ?></a>
              </li>
            <?php
            };
            ?>
          </ul>
        </div>

      </div>

    </div>
  </div>

  <script src="click.js"></script>
  <script src="randomCardColor.js"></script>
</body>

</html>