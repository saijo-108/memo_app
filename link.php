<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>個人サイト向け 無料ホームページテンプレート tp_simple14</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="ここにサイト説明を入れます" />
    <meta
      name="keywords"
      content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５"
    />
    <link rel="stylesheet" href="css/style.scss" />
    <script src="js/openclose.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--小さな端末用（800px以下端末）のロゴとメニュー-->
    <div id="sh">
      <h1 class="logo">
        <a href="index.php"><img src="images/logo.png" alt="Sample Site" /></a>
      </h1>
      <nav id="menubar-s">
        <ul>
          <li>
            <a href="index.php"><span>ホーム</span>Home</a>
          </li>
          <li>
            <a href="about.php"><span>当サイトについて</span>About</a>
          </li>
          <li>
            <a href="works.php"><span>作品</span>Works</a>
          </li>
          <li>
            <a href="link.php"><span>リンク</span>Link</a>
          </li>
          <li>
            <a href="contact.php"><span>お問い合わせ</span>Contact</a>
          </li>
        </ul>
      </nav>
    </div>

    <div id="container">
      <div id="main">
        <section>
          <h2><span>Link</span>リンク</h2>

          <table class="ta2">
            <tr>
              <th colspan="2" class="tamidashi">
                見出しが必要であればここを使います
              </th>
            </tr>
            <tr>
              <th><a href="#">サイト名</a></th>
              <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
              <th><a href="#">サイト名</a></th>
              <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
              <th><a href="#">サイト名</a></th>
              <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
              <th><a href="#">サイト名</a></th>
              <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
              <th><a href="#">サイト名</a></th>
              <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
              <th><a href="#">サイト名</a></th>
              <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
              <th><a href="#">サイト名</a></th>
              <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
              <th><a href="#">サイト名</a></th>
              <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
          </table>
        </section>
      </div>
      <!--/main-->

      <div id="sub">
        <!--PC用（801px以上端末）ロゴ-->
        <h1 class="logo">
          <a href="index.php"
            ><img src="images/logo.png" alt="Sample Site"
          /></a>
        </h1>

        <!--PC用（801px以上端末）メニュー-->
        <nav id="menubar">
          <ul>
            <li>
              <a href="index.php"><span>ホーム</span>Home</a>
            </li>
            <li>
              <a href="about.php"><span>当サイトについて</span>About</a>
            </li>
            <li>
              <a href="works.php"><span>作品</span>Works</a>
            </li>
            <li>
              <a href="link.php"><span>リンク</span>Link</a>
            </li>
            <li>
              <a href="contact.php"><span>お問い合わせ</span>Contact</a>
            </li>
          </ul>
        </nav>
      </div>
      <!--/sub-->

      <p id="pagetop"><a href="#">↑</a></p>

      <footer>
        <small
          >Copyright&copy; <a href="index.php">Sample Web Site</a> All Rights
          Reserved.</small
        >
        <span class="pr"
          ><a href="http://template-party.com/" target="_blank"
            >《Web Design:Template-Party》</a
          ></span
        >
      </footer>
    </div>
    <!--/container-->

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
