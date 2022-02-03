<?php

session_start();
require_once('s04_funcs.php');
loginCheck();

//1. POSTデータ取得
$id = $_GET['id'];

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM book_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('s03_select.php');
}
