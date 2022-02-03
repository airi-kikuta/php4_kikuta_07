<?php

session_start();


require_once('s04_funcs.php');
loginCheck();


$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM book_table');
$status = $stmt->execute();



$view = '';
if ($status == false) {
    sql_error($stmt);
} else {
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
        $view .= '<a href="s07_detail.php?id=' . $r["id"] . '">';
        $view .= h($result['id']) . '　'. h($result['title']) . '　'. h($result['author']) . '　'. h($result['publisher']) . '　'. h($result['date']);
        $view .= '</a>';
        $view .= "　";
        $view .= '<a class="btn btn-danger" href="s08_delete.php?id=' . $r['id'] . '">';
        $view .= '[<i class="glyphicon glyphicon-remove"></i>削除]';
        $view .= '</a>';
        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>フリーアンケート表示</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="s01_index.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>

    <div>
        <div class="container jumbotron"><?= $view ?></div>
    </div>


</body>

</html>
