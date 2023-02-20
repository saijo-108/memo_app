
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
                            <input type="text" name="email" size="35" maxlength="255" value=""/>
                            <p class="error">* メールアドレスとパスワードをご記入ください</p>
                            <p class="error">* ログインに失敗しました。正しくご記入ください。</p>
                        </dd>
                        <dt>パスワード</dt>
                        <dd>
                            <input type="password" name="password" size="35" maxlength="255" value=""/>
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
