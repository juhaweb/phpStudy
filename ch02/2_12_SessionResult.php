<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>2-12. 세션값 확인</title>
</head>
<body>
    <h1>2-12. 세션값 확인</h1>
    <hr>
    <?php
    
        session_start();
       
        $name = $_SESSION['name'];
        $pass = $_SESSION['pass'];        

    ?>
    <p>
        이름 : <?=$name?><br>
        비번 : <?=$pass?><br>
    </p>
    
</body>
</html>