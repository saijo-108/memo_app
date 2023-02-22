<?php 
session_start();
require('share.php');

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
  // セッションに格納されているログインデータを$nameに渡す
  $name = $_SESSION['name'];
  $id = $_SESSION['id'];
  $post_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  if (!$post_id) {
    header('Location: index.php');
    exit();
  }

  $db = dbconnect();
  $stmt = $db->prepare('delete from posts where id=? and member_id=? limit 1');
  if (!$stmt) {
    die($db->error);
  }
  // $idをSQLの条件に追加することで他の人がURLからdeleteできないようにする
  $stmt->bind_param('ii', $post_id, $id);
  $success = $stmt->execute();
  if (!$success) {
    die($db->error);
  }
}

header('Location: index.php');
exit();
?>