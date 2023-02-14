<?php 
$form['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
if ($form['name'] === '') {
    $error['name'] = 'blank';
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
                        <input type="text" name="name" size="35" maxlength="255" value=""/>
                        <p class="error">* ニックネームを入力してください</p>
                    </dd>
                    <dt>メールアドレス<span class="required">必須</span></dt>
                    <dd>
                        <input type="text" name="email" size="35" maxlength="255" value=""/>
                        <p class="error">* メールアドレスを入力してください</p>
                        <p class="error">* 指定されたメールアドレスはすでに登録されています</p>
                    <dt>パスワード<span class="required">必須</span></dt>
                    <dd>
                        <input type="password" name="password" size="30" maxlength="20" value=""/>
                        <p class="error">* パスワードを入力してください</p>
                        <p class="error">* パスワードは4文字以上で入力してください</p>
                    </dd>
                    <dt>写真など</dt>
                    <dd>
                        <input type="file" name="image" size="35" value=""/>
                        <p class="error">* 写真などは「.png」または「.jpg」の画像を指定してください</p>
                        <p class="error">* 恐れ入りますが、画像を改めて指定してください</p>
                    </dd>
                </dl>
                <div><input type="submit" value="入力内容を確認する"/></div>
            </form>
        </div>
    </div>
</body>

</html>