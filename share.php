<?php 
// htmlspecialcharsを短くする
function h_s($value) {
  return htmlspecialchars($value, ENT_QUOTES);
}

// DBに接続する
function dbconnect() {
  $db = new mysqli('localhost', 'root', 'root', 'min_bbs2');
  if (!$db) {
		die($db->error);
	}

  return $db;
}
?>