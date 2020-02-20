<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-8. PHP include</title>
</head>
<body>
    <h1>2-8. PHP include</h3>
    <hr>

    <?php
        include("./inc/header.php");
        include "./inc/header.php";
        require("./inc/header.php");
    ?>
    <h4>메인</h4>
    <?php
        include_once "./inc/footer.php";
        include_once "./inc/footer.php";
    ?>
</body>
</html>