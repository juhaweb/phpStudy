<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>2-2. php 연산자</title>
</head>
    
<body>
    <h1>2-2. php 연산자</h1>
    <hr/>
    
    <h3>1) 산술연산자</h3>
    <?php
        $num1 = 1;
        $num2 = 2;
        $num3 = 3;
        $num4 = 4;

        $rs1 = $num1 + $num2;
        $rs2 = $num1 - $num2;
        $rs3 = $num3 * $num2;
        $rs4 = $num4 / $num2;
        $rs5 = $num4 % $num3;
        
        $num1++;
        $num2--;
    ?>
    <ul>
        <li>$rs1 : <?= $rs1 ?></li>
        <li>$rs2 : <?= $rs2 ?></li>
        <li>$rs3 : <?= $rs3 ?></li>
        <li>$rs4 : <?= $rs4 ?></li>
        <li>$rs5 : <?= $rs5 ?></li>
        <li>$num1 : <?= $num1 ?></li>
        <li>$num2 : <?= $num2 ?></li>
        </ul>

    <hr/>
    <h3>2) 복합대입연산자</h3>
    <?php 
    
        $var1 = 1;
        $var2 = 2;
        $var3 = 3;
        $var4 = 4;
        $var5 = '오렌지';
    
        $var1 += 1;
        $var2 -= 2;
        $var3 *= 3;
        $var4 /= 4;
        $var5 .= '쥬스';

        echo "<ul>
              <!-- 문자열 \이스케이프 처리 (php변수를 문자열로 그대로 출력) -->
              <li>\$var1 : $var1</li>
              <li>\$var2 : $var2</li>
              <li>\$var3 : $var3</li>
              <li>\$var4 : $var4</li>
              <li>\$var5 : $var5</li>
              </ul>";
    ?>

    <hr/>
    <h3>3) 비교연산자</h3>
    <?php

        $v1 = 1;
        $v2 = 2;

        $res1 = ($v1 > $v2);
        $res2 = ($v1 < $v2);
        $res3 = ($v1 >= $v2);
        $res4 = ($v1 <= $v2);
        $res5 = ($v1 == $v2);
        $res6 = ($v1 != $v2);

        echo "<ul>";
        echo "<li>\$res1 : $res1</li>";
        echo "<li>\$res2 : $res2</li>";
        echo "<li>\$res3 : $res3</li>";
        echo "<li>\$res4 : $res4</li>";
        echo "<li>\$res5 : $res5</li>";
        echo "<li>\$res6 : $res6</li>";
        echo "</ul>";

        // true: 1, false: 0인데 0으로 출력은 안됌. 

    ?>   

    <hr/>
    <h3>4) 논리연산자</h3>
    <?php

        $data1 = 1;
        $data2 = 2;
        $data3 = 3;
        $data4 = 4;

        $result1 = ($data1 > 0 && $data2 > 1);
        $result2 = ($data1 > 1 && $data2 > 2);
        $result3 = ($data2 > 1 || $data3 < 2);
        $result4 = ($data2 < 1 || $data2 < 2);
        $result5 = ($data1 > $data2);

    ?>  
    <ul>
        <li>$result1 : <?= $result1 ?></li>
        <li>$result2 : <?= $result2 ?></li>
        <li>$result3 : <?= $result3 ?></li>
        <li>$result4 : <?= $result4 ?></li>
        <li>$result5 : <?= $result5 ?></li>
    </ul>

    <!-- echo 출력도 좋지만 html코드로 출력하는게 더 깔끔하다. -->

</body>
</html>