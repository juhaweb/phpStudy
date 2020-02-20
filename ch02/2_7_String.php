<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-7. php 문자열</title>
</head>
<body>
<h1>2-7. php 문자열</h1>
<hr>

<h3>1) 문자열 배열</h3>
<?php
    $str1 = "Hello PHP";

    echo "\$str1[0] : $str1[0] <br>";
    echo "\$str1[2] : $str1[2] <br>";
    echo "\$str1[6] : $str1[6] <br>";
    echo "\$str1[7] : $str1[7] <br>";
?>

<hr>
<h3>2) 문자열 이스케이프</h3>
<?php
    $str2 = "Hello \"PHP\"";
    echo "\$str2 : $str2 <br>"
?>

<hr>
<h3>3) 문자열 결합</h3>
<?php
    
    // php 문자열 연결은 .
    $s1 = "Hello";
    $s2 = " PHP";
    
    $r1 = $s1.$s2;
    $r2 = "$s1$s2";
    $r3 = "{$s1}{$s2}";
    
    echo '$r1 : ' .$r1. '<br>';
    echo '$r2 : ' .$r2. '<br>';
    echo '$r3 : ' .$r3. '<br>';

    


?>

<hr>
<h3>4) 문자열 함수</h3>
<?php
    $str3 = 'Hello PHP';

    $rs1 = strlen($str3);
    $rs2 = substr($str3, 0, 2);
    $rs3 = substr($str3, 6, 9);
    $rs4 = strstr($str3, 'e');
    $rs5 = strpos($str3, 'l');
    $rs6 = str_replace('PHP', 'JAVA',$str3);
    $rs7 = trim($str3);

    echo '$rs1 : ' .$rs1. '<br>';
    echo '$rs2 : ' .$rs2. '<br>';
    echo '$rs3 : ' .$rs3. '<br>';
    echo '$rs4 : ' .$rs4. '<br>';
    echo '$rs5 : ' .$rs5. '<br>';
    echo '$rs6 : ' .$rs6. '<br>';
    echo '$rs7 : ' .$rs7. '<br>';

?>

<hr>
<h3>5) 문자열 특수함수</h3>
<?php
    $str4 = "Hello\n PHP";
    $str5 = "SELECT * FROM `USER` WHERE `uid`='abcd';";
    $str6 = "<em>HTML태그를 갖는 문자열</em>";

    // newLine to br
    $re1 = nl2br($str4);
    
    // '앞에 \ 이거 붙음 ==> \'abcd\'
    $re2 = addslashes($str5);
    
    // html태그를 문자열로 그대로 출력
    $re3 = htmlspecialchars($str6);

    echo "\$re1 : $re1 <br>";
    echo "\$re2 : $re2 <br>";
    echo "\$re3 : $re3 <br>";

?>

    
</body>
</html>