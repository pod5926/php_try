<?php
  require 'db_php.php';

// ユーザー入力あり query
$sql = 'select * from contacts';
$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';

// ユーザー入力なし prepare, bind, execute
$sql = 'select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 1, PDO::PARAM_INT);
$stmt->execute();//実行

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';

?>