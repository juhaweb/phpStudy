<?php 

    // 절차지향적 프로그래밍 방법 (아래)
    // 객체지향적 프로그래밍 문법에서는 c언어 + 포인터 나옴. 

    require_once('./_dbConfig.php');

    // DB 접속
    $conn = mysqli_connect(HOST, USER, PASS, DB);

    // 쿼리문 실행
    $rs = mysqli_query($conn, "SELECT * FROM `MEMBER`");

    // DB 종료
    mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP select</title>
</head>
<body>
    <h1>직원목록</h1>
    <hr>
    <table border="1">
        <tr>
            <th>아이디</th>
            <th>이름</th>
            <th>연락처</th>
            <th>직급</th>
            <th>부서</th>
            <th>입사일</th>
            <th>관리</th>
        </tr>
        <!-- 연관배열로 만들어줌 -->
        <?while($row = mysqli_fetch_array($rs)){?>
        <tr>
            <td><?=$row['uid']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['hp']?></td>
            <td><?=$row[3]?></td>
            <td><?=$row[4]?></td>
            <td><?=substr($row[5],0,10)?></td>
            <td>
                <input type="submit" value="수정하기"/>
                <a href="#">삭제</a>
            </td>
        </tr>
        <?}?>
    </table>

</body>
</html>