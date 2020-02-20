<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-6. php 배열</title>
</head>
<body>
<h1>2-6. php 배열</h1>
<hr>

<h3>1) 배열생성</h3>
<?php

    // array 배열생성 함수 
    $score = array(60,68,72,82,45);
    $sum = 0;

    for($i=0; $i < count($score); $i++){
        $sum +=$score[$i];
    }

    echo "<p>배열 score의 합 : $sum </p>";

    // 순서대로 배열 생성
    $eng[] = 80;
    $eng[] = 40;
    $eng[] = 55;
    $eng[] = 86;
    $eng[] = 25;
    $eng[] = 99;

    $engSum = 0;

    foreach($eng as $e){
        $engSum+= $e;
    }

    echo "<p>배열 eng의 합 : $engSum</p>";

?>

<hr>
<h3>2) 연관배열</h3>
<?php
    
    // 연관배열 (key-value 자료구조)
    $num = array(
            'a'=> 86, 
            'b'=>24, 
            'c'=>92, 
            'd'=>76, 
            'e'=>63
                );

    echo "\$num['a'] : {$num['a']}<br>";
    echo "\$num['b'] : ".$num['b']."<br>";
    echo "\$num['c'] : ".$num['c']."<br>";
    echo "\$num['d'] : ".$num['d']."<br>";
    echo "\$num['e'] : ".$num['e']."<br><br>";


    // 직접생성
    $country['kor'] = '서울';
    $country['usa'] = '워싱턴';
    $country['fr'] = '프랑크푸르트';
    $country['hk'] = '홍콩';
    $country['chi'] = '베이징';

    foreach ($country as $key => $value) {
        echo"$key => $value <br/>";
    }

    echo "<br/>";
    
    foreach ($country as $k => $v) {
        echo"$k => $v <br/>";
    }


?>
    
</body>
</html>