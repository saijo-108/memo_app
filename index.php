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
            <a href="works.php"><span>メモ帳</span>Memos</a>
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
        <section id="new" class="box">
          <h2 id="newinfo_hdr" class="close">
            <span>Today's Schedule</span>本日の予定
          </h2>
          <dl id="newinfo">
            <dt>2021/11/16</dt>
            <dd>
              lightbox用のjsファイルとcssファイルをCDNからの読み込みに変更。<span
                class="newicon"
                >NEW</span
              >
            </dd>
            <dt>2017/07/03</dt>
            <dd>tp_simple14公開。</dd>
          </dl>
                <div class="msg">
                    <img src="member_picture/" width="48" height="48" alt=""/>
                    <p>○○<span class="name">（○○）</span></p>
                    <p class="day"><a href="view.php?id=">2021/01/01 00:00:00</a>
                        [<a href="delete.php?id=" style="color: #F33;">削除</a>]
                    </p>
                </div>
        </section>

        <section class="box">
          <h2><span>Memo</span>メモ</h2>

          <h3>利用規約のご案内</h3>
            <div id="content">
                <div style="text-align: right"><a href="logout.php">ログアウト</a></div>
                <form action="" method="post">
                    <dl>
                        <dt>○○さん、メッセージをどうぞ</dt>
                        <dd>
                            <textarea name="message" cols="50" rows="5"></textarea>
                        </dd>
                    </dl>
                    <div>
                        <p>
                            <input type="submit" value="投稿する"/>
                        </p>
                    </div>
                </form>
            </div>
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
