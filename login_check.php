<?php
    include 'db_info.php';

    /* http의 단점인 서버, 클라이언트 한번 연결 후 응답하면 끊어버리는
    문제 해결을 위한 조치 일정 시간동안 연결을 유지시킨다.*/
    session_start();

    //loginPage에서의 값을 가져옴
    $id = $_POST['id'];
    $password = $_POST['pwd'];

    //user테이블에서 u_id=$id 인 속성을 가져옴
    $check= "SELECT*FROM user WHERE u_id = '$id'";
    $result = $mysqli->query($check);

     //$result->num_rows : 반환된 쿼리의 열갯수 저장
     //즉, $result 반횐값이 빈값이 아니고, $result에 일치하는 열갯수가 1개뿐일때
    if(!empty($result) && $result->num_rows==1) {
        $row = $result->fetch_array(3);
        //fetch_array(3)에서 1은 MYSQLI_NUM 숫자 반환
        // 2는 MYSQLI_ASSOC 문자 반환 3은 MYSQLI_BOTH 둘 다 반환
        if($row['password'] == $password) { //비밀번호 같을시
            $_SESSION['userid'] = $id; //세션 유저에  $id저장
            $_SESSION['userName'] = $row['u_name'];
            if(isset($_SESSION['userid']) || isset($_SESSION['userName']) ) { //세션에 성공적으로 세팅시
                echo "성공적으로 로그인되었습니다.";
                header("location: index.php");
            } else {
                $message = "로그인에 실패했습니다..";
                echo "<script type='text/javascript'>alert('$message')</script>";
                header("location: loginPage.php");
            }
        }
        else { //패스워드 오류
            $message = "패스워드를 잘못입력했습니다.";
            echo "<script type='text/javascript'>alert('$message')</script>";
            header("location: loginPage.php");
        }
    }
    else {
        $message = "패스워드 혹은 아이디를 잘못입력했습니다.";
        echo "<script type='text/javascript'>alert('$message')</script>";
        header("location: loginPage.php");
    }
