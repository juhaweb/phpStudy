<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>2-9. PHP COOKIE</title>
</head>
<body>
    <h1>2-9. PHP COOKIE</h1>
    <hr>

    <?php
        $uid = 'abcd';
        $pass = '1234';

        setcookie('uid',$uid);
        setcookie('pass',$pass);
    ?>
    <h3>쿠키 생성완료</h3>
    <a href="./2_10_CookieResult.php">쿠키 전송</a>
    
</body>
</html>