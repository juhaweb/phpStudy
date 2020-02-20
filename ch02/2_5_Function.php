<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>5-1. php 함수</title>
</head>
<body>
    <h1> 5-1. php 함수 </h1>
    <?php
    //외부파일 추가
        require('./lib/calc.php');
        // include('./lib/calc.php'); ui요소를 추가할때는 인클루드. 라이브러리 파일은 리콰이어.

    // 함수정의
    function f($x, $y){
        $z = 2*$x + $y;
        return $z;
    }

    //함수호출
    $rs1 = f(1,2);
    $rs2 = f(2,3);
    $rs3 = f(3,4);
    $rs4 = f(4,5);

    echo ("<p>\$rs1 : $rs1</p>");
    echo "<p>\$rs2 : $rs2</p>";
    echo ('<p>$rs3 : '.$rs3.'</p>');
    echo "<p>\$rs4 : {$rs4}</p>";
        
    ?>

    <hr>
    <h3>2) 라이브러리 함수 </h3>
    <ul>
        <li> plus(1+2) : <?=plus(1,2)?> </li>
        <li> minus(1-2) : <?=minus(1,2)?> </li>
        <li> multi(1*2) : <?=multi(1,2)?> </li>
        <li> div(1/2) : <?=div(1,2)?> </li>
    </ul>

    <hr>
    <h3>3) 지역변수, 전역변수 </h3>
    <?php

        // php는 변수 선언이 없기때문에 같은 이름으로 사용가능. 

        // 전역변수
        $num1 = 1;
        $num2 = 2;

        function add(){
            // 지역변수
            $result = $num1 + $num2;
            return $result;
        }
        $res = add();
        echo "<p>\$res = $res</p>";

    ?>

    <?php

        // 전역변수
        $num1 = 1;
        $num2 = 2;

        function add2(){

            global $num1, $num2; // 전역변수 num1, num2를 참조하겠다. 
            
            // 지역변수
            $result = $num1 + $num2;
            return $result;
        }
        $res = add2();
        echo "<p>\$res = $res</p>";

    ?>


    <hr>
    <h3>4) 내장함수</h3>
    <?php

        $r1 = ceil(1.3);
        $r2 = floor(1.3);
        $r3 = round(1.3);
        $r4 = round(1.5);
        $r5 = rand();
        $r6 = rand(1,10);
        $r71 = date('Y');
        $r72 = date('y');
        $r73 = date('m');
        $r74 = date('d');
        $r75 = date('H');
        $r76 = date('h');
        $r77 = date('i');
        $r78 = date('s');
        $r8 = date('Y-m-d H:i:s');

        echo 'r1(ceil) : '.$r1.'<br>';
        echo 'r2(floor) : '.$r2.'<br>';
        echo 'r3(round) : '.$r3.'<br>';
        echo 'r4(round) : '.$r4.'<br>';
        echo 'r5(rand) : '.$r5.'<br>';
        echo 'r6(rand) : '.$r6.'<br>';
        echo 'r71(date:Y) : '.$r71.'<br>';
        echo 'r72(date:y) : '.$r72.'<br>';
        echo 'r73(date:m) : '.$r73.'<br>';
        echo 'r74(date:d) : '.$r74.'<br>';
        echo 'r75(date:H) : '.$r75.'<br>';
        echo 'r76(date:h) : '.$r76.'<br>';
        echo 'r77(date:i) : '.$r77.'<br>';
        echo 'r78(date:s) : '.$r78.'<br>';
        echo 'r8(date) : '.$r8.'<br>';

    ?>


</body>
</html>