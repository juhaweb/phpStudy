<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-10. PHP 쿠키확인</title>
</head>
<body>
    <h1>2-10. PHP 쿠키확인</h1>
    <hr>
    <h3>쿠키확인</h3>
    <?php
    
        $uid = $_COOKIE['uid'];
        $pass = $_COOKIE['pass'];
    
    ?>
    <p>
        아이디 : <?=$uid?><br>
        비밀번호 : <?=$pass?><br>
    </p>
    
</body>
</html>