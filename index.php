<?php 
session_start();
require('share.php');

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
  // セッションに格納されているログインデータを$nameに渡す
  $name = $_SESSION['name'];
  $id = $_SESSION['id'];
  // メッセージの投稿
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = filter_input(INPUT_POST, 'title');
    $message = filter_input(INPUT_POST, 'message');
    $db = dbconnect();
    $stmt = $db->prepare('insert into posts (title, message, member_id) values(?,?,?)');
    if (!$stmt) {
      die($db->error);
    }

    $stmt->bind_param('ssi', $title, $message, $id);
    $success = $stmt->execute();
    if (!$success) {
      die($db->error);
    }
    
    // 送ったメモなどのデータをクリアする
    header('Location: index.php');
    exit();
  }
}
?>

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
          <?php if (isset($name)): ?>
            <li>
              <a href="about.php"><span>当サイトについて</span>About</a>
            </li>
            <li>
              <a href="works.php"><span>メモ帳</span>Memos</a>
            </li>
            <li>
              <a href="works.php" class="text_red"><span>ログアウト</span>Logout</a>
            </li>
          <?php else: ?>
            <li>
              <a href="join/index.php"><span>新規登録</span>Sign Up</a>
            </li>
            <li>
              <a href="login.php"><span>ログイン</span>Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>

    <div id="container">
      <div id="main">
        <!-- ログインしている場合に表示する -->
        <?php if (isset($name)): ?>
          <section id="new" class="box">
            <h2 id="newinfo_hdr" class="close">
              <span>Latest Memos</span><?php echo h_s($name); ?>さんの最新のメモ
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
        <?php endif; ?>

        <section class="box">
          <h2><span>Memo</span>メモ</h2>

          <h3>メモ帳の使い方</h3>
            <div id="content">
                <div style="text-align: right"><a href="logout.php">ログアウト</a></div>
                <form action="" method="post">
                    <dl>
                        <dd>
                          <dt>タイトル</dt>
                          <input type="text" name="title" size="35" maxlength="255" value=""/>
                        </dd>
                        <dt>メモの内容</dt>
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
            <?php if (isset($name)): ?>
              <li>
                <a href="about.php"><span>当サイトについて</span>About</a>
              </li>
              <li>
                <a href="works.php"><span>メモ帳</span>Memos</a>
              </li>
              <li>
                <a href="works.php" class="text_red"><span>ログアウト</span>Logout</a>
              </li>
            <?php else: ?>
              <li>
                <a href="join/index.php"><span>新規登録</span>Sign Up</a>
              </li>
              <li>
                <a href="login.php"><span>ログイン</span>Login</a>
              </li>
            <?php endif; ?>
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
