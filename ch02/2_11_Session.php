<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>2-11. PHP session</title>
</head>
<body>
    <h1>2-11. PHP session</h1>
    <hr>
    <?php
    
        // 세션시작
        session_start();

        $_SESSION['name'] = '홍길동';
        $_SESSION['pass'] = '12345';
    
    ?>

    <h3> 세션 저장완료</h3>
    <a href="2_12_SessionResult.php">세션값 확인</a>
    
</body>
</html>