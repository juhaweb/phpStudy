<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>2-4. php 반복문</title>
</head>
<body>
    <h1>2-4. php 반복문</h1>
    
    <hr>
    <h3>1) for</h3>
    <?php
    $sum = 0;
    for($k=1; $k<=10; $k++){
        $sum += $k;
    }
    echo "<p>1부터 10까지의 합 : $sum</p>";
    ?>

    <hr>
    <h3>2) 구구단1</h3>
    
    <table border="1">
    <tr> 
        <td>2단</td>
        <td>3단</td>
        <td>4단</td>
        <td>5단</td>
        <td>6단</td>
        <td>7단</td>
        <td>8단</td>
        <td>9단</td>
    </tr>
    <?php
    for($a=1; $a<=9; $a++){
            echo"<tr>";
        for($b=2; $b<=9; $b++){
            echo'<td>'.$b.' x '.$a.' = '.$a*$b.'</td>';
        }
        echo"</tr>";
    }
    ?>
    </table>

    <hr>
    <h3>2-2) 구구단2 </h3>
    <table border="1">
    <? for($c=1; $c<=9; $c++){?>
        <tr>   
        <? for($d=2; $d<=9; $d++){?>
            <td><?=$d?> x <?=$c?> = <?=$d*$c?></td>
        <?}?> 
        </tr>
    <?}?>
    </table>

    <hr>
    <h3>3) while</h3>
    <?php
        $num = 1;
        while(true){
            if($num % 7 == 0 && $num % 9 == 0){
                break;
            }
            $num++;
        }
    ?>
    <p>7과 9의 최소 공배수 : <?= $num ?></p>

    <hr>
    <h3>4) break, continue</h3>
    <?php
        for($i=1; $i<=10; $i++){
            if($i % 2 != 0){
                continue;                
            }
            $tot += $i;
        }
        echo("<p>1부터 10까지의 짝수 합 : $tot </p>");
    ?>

</body>
</html>