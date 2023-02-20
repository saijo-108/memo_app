<?php 
session_start();
require('share.php');
$error = [];
$email = '';
$password = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 入力フォームからemail,passwordを受け取る
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // emailもしくはpasswordが空欄の場合に$errorに渡す
    if ($email === '' || $password === ''){
        $error['login'] = 'blank';
    } else {
        // ログインチェック
        $db = dbconnect();

        // DBからidとpasswordとnameを取得
        $stmt = $db->prepare('select id, name, password from members where email=? limit 1');
        if (!$stmt) {
            die($db->error);
        }
        // passwordはDB上でハッシュ化されているので使えない
        $stmt->bind_param('s', $email);
        $success = $stmt->execute();
        if (!$success) {
            die($db->error);
        }
        // DBから受け取った情報を代入($passwordは入力フォームで使ったので$hashとする)
        $stmt->bind_result($id, $name, $hash);
        $stmt->fetch();

        // 取得した$hashと入力した$passwordが合っているかのチェック
        if (password_verify($password, $hash)){
            // session_idを生成し直す
            session_regenerate_id();
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            header('Location: index.php');
            exit();
        } else {
            $error['login'] = 'failed';
        }

    }
}
?>
<body>
    <div id="container">
    <?php include( dirname(__FILE__) . '/share/header.php'); ?>
        <div id="wrap">
            <div id="head">
                <h1>ログインする</h1>
            </div>
            <div id="content">
                <div id="lead">
                    <p>メールアドレスとパスワードを記入してログインしてください。</p>
                    <p>入会手続きがまだの方はこちらからどうぞ。</p>
                    <p>&raquo;<a href="join/">入会手続きをする</a></p>
                </div>
                <form action="" method="post">
                    <dl>
                        <dt>メールアドレス</dt>
                        <dd>
                            <input type="text" name="email" size="35" maxlength="255" value="<?php echo h_s($email); ?>"/>
                            <?php if (isset($error['login']) && $error['login'] === 'blank'): ?>
                                <p class="error">* メールアドレスとパスワードを記入してください</p>
                            <?php endif; ?>
                            <?php if (isset($error['login']) && $error['login'] === 'failed'): ?>
                                <p class="error">* ログインに失敗しました。正しくご記入ください。</p>
                            <?php endif; ?>
                        </dd>
                        <dt>パスワード</dt>
                        <dd>
                            <input type="password" name="password" size="35" maxlength="255" value="<?php echo h_s($password); ?>"/>
                        </dd>
                    </dl>
                    <div>
                        <input type="submit" value="ログインする"/>
                    </div>
                </form>
            </div>
        </div>
    <?php include( dirname(__FILE__) . '/share/footer.php'); ?>
    </div>
</body>
