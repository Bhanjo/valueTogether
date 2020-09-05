<!-- signUp.html에서 정보를 받아옴 -->
<?php
    include "db_info.php";
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];
    $name = $_POST['u_name'];

    // 입력값 중 하나라도 미기입시 되돌아감
    if($id == NULL || $pwd == NULL || $name == NULL) {
        echo "미입력한 부분이 있습니다.";
        echo "<a href=signUp.php>페이지 돌아가기></a>";
        exit();
    } else {
        echo "환영합니다"."<br>";
    }

    //입력한 id 중복 체크
    $check = "SELECT*FROM user WHERE u_id='$id'";
    $result = $mysqli->query($check);
    if($result->num_rows ==1) { //만약 $id가 mysql에 1개 존재시 중복임을 나타냄
        echo "이미 등록된 id입니다.";
        echo "<a href=signUp.php>페이지돌아가기></a>";
        echo exit();
    } else {
        echo "Okay";
    }

    //DB user의 u_id, password, u_name 필드에 각 데이터를 넣어준다
    $query = "INSERT INTO user (u_id, password, u_name) VALUES('$id', '$pwd', '$name')";
    $execute = $mysqli->query($query); //실행
    if($execute) {
        echo "회원가입이 되었습니다 환영합니다!";
        header("location:loginPage.php");
    } else {
        echo "error!"."<br>";
        echo $mysqli->error;
    }
?>