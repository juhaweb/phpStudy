<meta charset="UTF-8"/>

<?php

    require('./_dbConfig.php');
    
    // 파라미터 수신
    $uid = $_REQUEST['uid'];
    $name = $_REQUEST['name'];
    $hp = $_REQUEST['hp'];
    $pos = $_POST['pos'];
    $dep = $_POST['dep'];

    // 데이터베이스 접속
    $conn = mysqli_connect(HOST, USER, PASS, DB);

    // 쿼리문 실행
    $sql = "INSERT INTO `MEMBER` SET ";
    $sql .= "`uid`='$uid', ";
    $sql .= "`name`='$name' ,";
    $sql .= "`hp`='$hp', ";
    $sql .= "`pos`='$pos', ";
    $sql .= "`dep`='$dep', ";
    $sql .= "`rdate`=NOW();";

    mysqli_query($conn, $sql);

    // 데이터베이스 종료
    mysqli_close($conn);

    // 리다이렉트
    header("Location:./3_Select.php");

?>