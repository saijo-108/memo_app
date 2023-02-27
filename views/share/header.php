<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ひとことメモ帳</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="簡易的なメモ帳のアプリです。" />
    <meta
      name="keywords"
      content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５"
    />
    <link rel="stylesheet" type="text/css" href="/memo_app/css/style.css"/>
    <script src="/memo_app/js/openclose.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
    <!--小さな端末用（800px以下端末）のロゴとメニュー-->
    <div id="sh">
      <h1 class="logo">
        <a href="/memo_app/index.php"><img src="/memo_app/images/logo.png" alt="Sample Site" /></a>
      </h1>
      <nav id="menubar-s">
        <ul>
          <li>
            <a href="/memo_app/index.php"><span>ホーム</span>Home</a>
          </li>
          <li>
            <a href="/memo_app/views/content/about.php"><span>当サイトについて</span>About</a>
          </li>
          <!-- ログインしている時表示するもの -->
          <?php if (isset($name)): ?>
            <li>
              <a href="/memo_app/views/content/works.php"><span>メモ帳</span>Memos</a>
            </li>
            <li>
              <a href="/memo_app/logout.php" class="text_red"><span>ログアウト</span>Logout</a>
            </li>
          <?php else: ?>
            <li>
                <a href="/memo_app/views/join/index.php"><span>新規登録</span>Sign Up</a>
            </li>
            <li>
              <a href="/memo_app/login.php"><span>ログイン</span>Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>

    <div id="sub">
      <!--PC用（801px以上端末）ロゴ-->
      <h1 class="logo">
        <a href="/memo_app/index.php"
          ><img src="/memo_app/images/logo.png" alt="Sample Site"
        /></a>
      </h1>


      <!--PC用（801px以上端末）メニュー-->
      <nav id="menubar">
        <ul>
          <li>
            <a href="/memo_app/index.php"><span>ホーム</span>Home</a>
          </li>
          <li>
            <a href="/memo_app/views/content/about.php"><span>当サイトについて</span>About</a>
          </li>
          <?php if (isset($name)): ?>
            <li>
              <a href="/memo_app/views/content/works.php"><span>メモ帳</span>Memos</a>
            </li>
            <li>
              <a href="/memo_app/logout.php" class="text_red"><span>ログアウト</span>Logout</a>
            </li>
          <?php else: ?>
            <li>
                <a href="/memo_app/views/join/index.php"><span>新規登録</span>Sign Up</a>
            </li>
            <li>
              <a href="/memo_app/login.php"><span>ログイン</span>Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
      <!--/sub-->
    <!--/container-->

    <!--更新情報の開閉処理条件設定　800px以下-->
    <script>
      if (OCwindowWidth() <= 800) {
        open_close("newinfo_hdr", "newinfo");
      }
    </script>

    <!--メニューの３本バー-->
    <div id="menubar_hdr" class="close">
      <span></span><span></span><span></span>
    </div>

    <!--メニューの開閉処理条件設定　800px以下-->
    <script>
      if (OCwindowWidth() <= 800) {
        open_close("menubar_hdr", "menubar-s");
      }
    </script>
  </body>
</html>
