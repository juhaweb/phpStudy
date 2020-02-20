<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3-1. PHP 폼전송</title>
</head>
<body>
    <h1>3-1. PHP 폼전송</h1>
    <hr>

    <form action="3_2.php">
        아 이 디 : <input type="text" name="uid" /><br>
        비밀번호 : <input type="text" name="pass" /><br>
        이　　름 : <input type="text" name="name" /><br>
        휴 대 폰 : <input type="text" name="hp" /><br>
        <input type="submit" value="전송하기"/>
    </form>
    
    <hr>
    <h4>직원등록<h4>
    <form action="3_Insert.php" method="POST">
        <table border="1">
            <tr>
                <td>아이디</td>
                <td><input type="text" name="uid" /></td>
            </tr>
            <tr>
                <td>이　　름</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>휴 대 폰</td>
                <td><input type="text" name="hp" /></td>
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
                    <input type="submit" value="등록하기"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>