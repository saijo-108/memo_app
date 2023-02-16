<?php 
session_start();
$form = [
    // 配列の初期化
    'name' => '',
    'email' => '',
    'password' => ''
];
$error = [];

// htmlspecialcharsを短くする
function h_s($value) {
    return htmlspecialchars($value, ENT_QUOTES);
}

// フォームが送信された時のみ、フォームの中身を確認する
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 名前のエラーチェック
    $form['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    if ($form['name'] === '') {
        // エラーが起こったことを記録
        $error['name'] = 'blank';
    }
    
    // メールアドレスのエラーチェック
    $form['email'] = filter_input(INPUT_POST, 'email');
    if ($form['email'] === '') {
        $error['email'] = 'blank';
    }

    // パスワードのエラーチェック
    $form['password'] = filter_input(INPUT_POST, 'password');
    if ($form['password'] === '') {
        $error['password'] = 'blank';
    } else if (strlen($form['password']) < 4) {
        $error['password'] = 'short';
    }

    // 画像のチェック
    $image = $_FILES['image'];

    // ファイルが空でないか、エラーが起きてないか
    if ($image['name'] !== '' && $image['error'] === 0) {
        $type = mime_content_type($image['tmp_name']);

        // ファイルがpngかjpegでない場合にエラーにする
        if ($type !== 'image/png' && $type !== 'image/jpeg') {
            $error['image'] ='type';
        }
    }

    // エラーが起きていなければ,セッションに＄formを記録してcheck.phpに移動する
    if (empty($error)) {
        $_SESSION['form'] = $form;
        header('Location: check.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会員登録</title>

    <link rel="stylesheet" href="../css/style.css"/>
</head>

<body>
    <div id="wrap">
        <div id="head">
            <h1>会員登録</h1>
        </div>

        <div id="content">
            <p>必要事項をご記入ください。</p>
            <form action="" method="post" enctype="multipart/form-data">
                <dl>
                    <dt>名前<span class="required">必須</span></dt>
                    <dd>
                        <input type="text" name="name" size="35" maxlength="255" value="<?php echo h_s($form['name']); ?>"/>
                        <?php if (isset($error['name']) && $error['name'] === 'blank'): ?>
                            <p class="error">* 名前を入力してください</p>
                        <?php endif; ?>
                    </dd>
                    <dt>メールアドレス<span class="required">必須</span></dt>
                    <dd>
                        <input type="text" name="email" size="35" maxlength="255" value="<?php echo h_s($form['email']); ?>"/>
                        <?php if (isset($error['email']) && $error['email'] === 'blank'): ?>
                            <p class="error">* メールアドレスを入力してください</p>
                        <?php endif; ?>
                        <p class="error">* 指定されたメールアドレスはすでに登録されています</p>
                    <dt>パスワード<span class="required">必須</span></dt>
                    <dd>
                        <input type="password" name="password" size="30" maxlength="20" value=""/>
                        <?php if (isset($error['password']) && $error['password'] === 'blank'): ?>
                            <p class="error">* パスワードを入力してください</p>
                        <?php endif; ?>
                        <?php if (isset($error['password']) && $error['password'] === 'short'): ?>
                            <p class="error">* パスワードは4文字以上で入力してください</p>
                        <?php endif; ?>
                    </dd>
                    <dt>写真など</dt>
                    <dd>
                        <input type="file" name="image" size="35" value=""/>
                        <?php if (isset($error['image']) && $error['image'] === 'type'): ?>
                            <p class="error">* 写真などは「.png」または「.jpg」の画像を指定してください</p>
                            <p class="error">* 恐れ入りますが、画像を改めて指定してください</p>
                        <?php endif; ?>
                    </dd>
                </dl>
                <div><input type="submit" value="入力内容を確認する"/></div>
            </form>
        </div>
    </div>
</body>

</html>