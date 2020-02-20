<meta charset="UTF-8"/>

<?php

    // 파라미터 수신
    $uid    = $_REQUEST['uid'];
    $pass   = $_REQUEST['pass'];
    $name   = $_GET['name'];
    $hp     = $_GET['hp'];

?>

<ul>
    <li> 아이디 : <?=$uid?> </li>
    <li> 비밀번호 : <?=$pass?> </li>
    <li> 이름 : <?=$name?> </li>
    <li> 연락처 : <?=$hp?> </li>
</ul>