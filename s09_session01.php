
<!-- 鍵を発行 -->

<?php

session_start();

$sid = session_id();

echo $sid;

$_SESSION['name'] = 'John';
$_SESSION['age'] = 12;


