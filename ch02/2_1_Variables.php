<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-1. PHP 변수</title>
</head>
<body>
    <h1>2-1. PHP 변수</h1>
    <hr>
    <h3>1)변수</h3>
    <?php
        // 변수
        $a = 1;
        $b = 2;

        $num1 = $num2 = $num3 = 10;

        // 자료형
        $var1 = 1;
        $var2 = 1.23;
        $var3 = 'Hello';
        $var4 = "안녕하세요.";
        $var5 = true;
        $var6 = false;
        $var7 = null;
        
        echo('<p>');
        echo('var1 : '.$var1.'<br />');
        echo('var2 : '.$var2.'<br />');
        echo('var3 : '.$var3.'<br />');
        echo('var4 : '.$var4.'<br />');
        echo("var5 : $var5 <br />");
        echo("var6 : $var6 <br />");
        echo("var7 : $var7 <br />");        
        echo('</p>');

        // 상수
        define("PI", 3.14);        
        define('NAME', '홍길동');

        echo '<p> 상수 PI : '.PI.'</p>';
        echo "<p> 상수 NAME : ".NAME."</p>";
    ?>

    <h3>2) PHP슈퍼 전역변수</h3>
    <table border='1'>
        <tr>
            <th>변수</th>
            <th>값</th>
            <th>설명</th>
        </tr>
        <tr>
            <td>$_SERVER['DOCUMENT_ROOT']</td>
            <td><?= $_SERVER['DOCUMENT_ROOT'] ?></td>
            <td>최상위 루트경로</td>
        </tr>
        <tr>
            <td>$_SERVER['PHP_SELF']</td>
            <td><?= $_SERVER['PHP_SELF'] ?></td>
            <td>현재 실행중인 php 파일명</td>
        </tr>
        <tr>
            <td>$_SERVER['HTTP_USER_AGENT']</td>
            <td><?= $_SERVER['HTTP_USER_AGENT'] ?></td>
            <td>클라이언트(브라우저) 정보</td>
        </tr>
        <tr>
            <td>$_SERVER['REMOTE_ADDR']</td>
            <td><?= $_SERVER['REMOTE_ADDR'] ?></td>
            <td>클라이언트 IP주소</td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_NAME']</td>
            <td><?= $_SERVER['SERVER_NAME'] ?></td>
            <td>서버이름(도메인)</td>
        </tr>
        <tr>
            <td>$_SERVER['HTTP_HOST']</td>
            <td><?= $_SERVER['HTTP_HOST'] ?></td>
            <td>도메인 주소</td>
        </tr>


    </table>


    
</body>
</html>