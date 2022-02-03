<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Book Mark</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="s03_select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="s12_login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="s13_logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>

    <form method="POST" action="s02_insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>Book Mark</legend>
                <label>タイトル：<input type="text" name="title"></label><br>
                <label>著者：<input type="text" name="author"></label><br>
                <label>出版社：<input type="text" name="publisher"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>

</body>

</html>
