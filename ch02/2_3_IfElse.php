<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>2-3. php 조건문</title>
</head>
<body>
    <h1>2-3. php 조건문</h1>
    <hr>
    
    <h3>1) if</h3>
    <?php
        $num1 = 1;
        if($num1 < 2) {
            echo"<b>\$num1이 2보다 작다.</b>";
        }

        if($num1 > 0){
    ?>
        <p> $num1은 0보다 크다.</p>
    <? } ?> 
    
    <hr>
    <h3>2) if-else</h3>
    <?php
        $num2 = 2;
        if($num2 > $num1){
            echo('<p>$num2가 $num1 보다 크다</p>');
        }else{
            echo('<p>$num2가 $num1 보다 작다</p>');
        }
    ?>
    
    <hr>
    <h3>3) if~else if~else</h3>
    <?php 
        $score = 86;

        if($score >= 90 && $score <=100){ ?>
        <p>A 입니다.</P>
    <? }elseif($score >= 80 && $score < 90){ ?>
        <p>B 입니다.</P>
    <? }elseif($score >= 70 && $score < 80){ ?>
        <p>C 입니다.</P>
    <? }elseif($score >= 60 && $score < 70){ ?>
        <p>D 입니다.</P>
    <? }elseif($score >= 50 && $score < 60){ ?>
        <p>E 입니다.</P>
    <? }else{ ?>
        <p>F 입니다.</P>
    <? } ?>
    
    
    <hr>
    <h3>4) switch</h3>
    <?php
    
        $animal1 ='사자';
        
        switch($animal1){
            case'호랑이':
                echo"<p>호랑이 입니다.</p>";
                break;
            case'사자':
                echo"<p>사자 입니다.</p>";
                break;
            case'토끼':
                echo"<p>토끼 입니다.</p>";
                break;
            default:
                echo"<p>없습니다</p>";
                break;
        }

    ?>
    
</body>
</html>