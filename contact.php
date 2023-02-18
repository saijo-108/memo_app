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

  <body class="s-n">
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
          <h2><span>Contact</span>お問い合わせ</h2>
          <p>
            当ページと同じ３項目のお問い合わせフォーム（自動フォーム試用版）を簡単に使えるようにセットしています。<br />
            <span style="color: red"
              >※当ページ（contact.php）はフォームの見本ページです。実際の自動フォームには使いませんのでご注意下さい。</span
            >
          </p>
          <p>
            <strong class="color1"
              >■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong
            ><br />
            あなたのメールアドレス設定と、簡単な編集だけで使えます。<a
              href="http://template-party.com/file/formgen_manual_set2.html"
              target="_blank"
              >こちらのマニュアルをご覧下さい。</a
            >
          </p>
          <p>
            <strong class="color1">■自動フォームを使わない場合</strong><br />
            テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。
          </p>

          <h3>お問い合わせフォーム</h3>

          <table class="ta1">
            <tr>
              <th>お名前※</th>
              <td><input type="text" name="お名前" size="30" class="ws" /></td>
            </tr>
            <tr>
              <th>メールアドレス※</th>
              <td>
                <input type="text" name="メールアドレス" size="30" class="ws" />
              </td>
            </tr>
            <tr>
              <th>お問い合わせ詳細※</th>
              <td>
                <textarea
                  name="お問い合わせ詳細"
                  cols="30"
                  rows="10"
                  class="wl"
                ></textarea>
              </td>
            </tr>
          </table>

          <p class="c">
            <input type="submit" value="内容を確認する" />
          </p>
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
