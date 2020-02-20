<!-- 수정중 -->

<?php 
    require_once('./_dbConfig.php');

    // DB 접속
    $conn = mysqli_connect(HOST, USER, PASS, DB);

    // 쿼리문 실행
    $rs = mysqli_query($conn, "SELECT * FROM `MEMBER` WHERE `uid`=$uid");

    // DB 종료
    mysqli_close($conn);

?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>직원수정</title>
</head>
<body>
    <h1>직원수정</h1>
    <hr>
    <form action="3_Update.php" method="POST">
        <table border="1">
            <tr>
                <td>아이디</td>
                <td><?=$uid?></td>
            </tr>
            <tr>
                <td>이　　름</td>
                <td><?=$name?></td>
            </tr>
            <tr>
                <td>휴 대 폰</td>
                <td><input type="text" name="hp" /><?=$hp?></td>
            </tr>
            <tr>
                <td>직급</td>
                <td>
                    <select name="pos">
                        <option value="사원">사원</option>
                        <option value="주임">주임</option>
                        <option value="대리">대리</option>
                        <option value="과장">과장</option>
                        <option value="부장">부장</option>
                        <option value="이사">이사</option>
                        <option value="대표이사">대표이사</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>부서</td>
                <td>
                    <select name="dep">
                        <option value="101">영업1부</option>
                        <option value="102">영업2부</option>
                        <option value="103">특수영업부</option>
                        <option value="104">영업지원부</option>
                        <option value="105">인사부</option>
                        <option value="106">관리부</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" value="수정등록"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>