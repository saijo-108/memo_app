<?php 
session_start();
require('../share/share.php');

if (isset($_SESSION['form'])) {
	$form = $_SESSION['form'];
} else {
	header('Location: index.php');
	exit();
}

// 登録するが押されたらDBに保存する
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// DBに接続
	$db = dbconnect();

	// DBにデータを挿入
	$stmt = $db->prepare('insert into members (name, email, password, picture) VALUES (?, ?, ?, ?)');
	if (!$stmt) {
		die($db->error);
	}

	// passwordはSQL上で直接見れないようにする
	$password = password_hash($form['password'], PASSWORD_DEFAULT);
	// bind_paramsでprepareの?に入れるものを指定(セキュリティ上直接SQL文には入れない)
	$stmt->bind_param('ssss', $form['name'], $form['email'], $password, $form['image']);

	// SQLを実行
	$success = $stmt->execute();
	if (!$success) {
		die($db->error);
	}

	// セッションの中身を削除
	unset($_SESSION['form']);
	header('Location: thanks.php');
}
?>
<body>
<div id="container">
<?php include( dirname(__FILE__) . '/../share/header.php'); ?>
	<div id="wrap">
		<div id="head">
			<h1>会員登録</h1>
		</div>

		<div id="content">
			<p>記入した内容を確認して、「登録する」ボタンをクリックしてください</p>
			<form action="" method="post">
				<dl>
					<dt>ニックネーム</dt>
					<dd><?php echo h_s($form['name']); ?></dd>
					<dt>メールアドレス</dt>
					<dd><?php echo h_s($form['email']); ?></dd>
					<dt>パスワード</dt>
					<dd>
						【表示されません】
					</dd>
					<dt>写真など</dt>
					<dd>
							<img src="../member_picture/<?php echo h_s($form['image']) ?>" width="100" alt="" />
					</dd>
				</dl>
				<div class="resis"><input type="submit" value="登録する" class="button" /> | <a href="index.php?action=rewrite">書き直す</a></div>
			</form>
		</div>
	</div>
	<?php include( dirname(__FILE__) . '/../share/footer.php'); ?>
</body>

</html>