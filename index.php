<?php
  // include 'db_info.php';

  // //세션에 userid가 없으면 로그인페이지로 바로 이동
  // session_start();
  // if(!isset($_SESSION['userid'])) {
  //   echo "로그인 후 이용해주세요!";
  //   header('location: loginPage.php');
  // }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="styles.css">
  <title>가치해요</title>
</head>

<!--class : css와 같은 서식 / id : js이용시 js~ 사용-->

<body>
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
            <a href="recruitPage.php">그룹 모집</a>
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
            <li class="card">
              <div class="cardDeco" id="paintCardColor1"></div>
              <p>제목입니다. 이 글자는 넘어가야합니다.</p><a>해시태그입니다 이것도 넘어가야할까요? 고민입니다.</a>
            </li>
            <li class="card">
              <div class="cardDeco" id="paintCardColor2"></div>
              <p>제목입니다2.</p><a>해시태그</a>
            </li>
            <li class="card">
              <div class="cardDeco" id="paintCardColor3"></div>
              <p>제목입니다3</p><a>해시태그</a>
            </li>
            <li class="card">
              <div class="cardDeco" id="paintCardColor4"></div>
              <p>제목입니다4</p><a>해시태그</a>
            </li>
            <li class="card">
              <div class="cardDeco" id="paintCardColor5"></div>
              <p>제목입니다5</p><a>해시태그</a>
            </li>
            <li class="card">
              <div class="cardDeco" id="paintCardColor6"></div>
              <p>제목입니다6 넘어가세요ddddddddddddddddd</p><a>해시태그ddddddddddddddddddddddd</a>
            </li>
            <li class="card">
              <div class="cardDeco" id="paintCardColor7"></div>
              <p>제목입니다7</p><a>해시태그</a>
            </li>
            <li class="card">
              <div class="cardDeco" id="paintCardColor8"></div>
              <p>제목입니다8</p><a>해시태그</a>
            </li>
          </ul>
        </div>

      </div>

    </div>
  </div>

  <script src="click.js"></script>
  <script src="randomCardColor.js"></script>
</body>

</html>