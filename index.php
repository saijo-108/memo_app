<?php 
session_start();
require('views/share/share.php');

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
  // セッションに格納されているログインデータを$nameに渡す
  $name = $_SESSION['name'];
  $id = $_SESSION['id'];

  $db = dbconnect();

  // メッセージの投稿
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = filter_input(INPUT_POST, 'title');
    $message = filter_input(INPUT_POST, 'message');
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
    <link rel="stylesheet" href="css/style.css" />
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
              <a href="views/content/about.php"><span>当サイトについて</span>About</a>
            </li>
          <?php if (isset($name)): ?>
            <li>
              <a href="views/content/works.php"><span>メモ帳</span>Memos</a>
            </li>
            <li>
              <a href="logout.php" class="text_red"><span>ログアウト</span>Logout</a>
            </li>
          <?php else: ?>
            <li>
              <a href="views/join/index.php"><span>新規登録</span>Sign Up</a>
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
            <h2 id="newinfo_hdr" >
              <span>Latest Memos</span><?php echo h_s($name); ?>さんの最新のメモ
            </h2>
            <?php $stmt = $db->prepare('select p.id, p.member_id, p.title, p.message, p.created, m.name from posts p, members m where m.id=p.member_id and p.member_id=? order by id desc limit 3');
              if (!$stmt) {
                die($db->error);
              }
              $stmt->bind_param('i', $id);
              $success = $stmt->execute();
              if (!$success) {
                die($db->error);
              }
              $stmt->bind_result($id, $member_id, $title, $message, $created, $name);
              while ($stmt->fetch()):
            ?>
            <dl id="newinfo">
              <dt><a href="view.php?id=<?php echo h_s($id); ?>"><?php echo h_s(date('Y年m月d日 H:h', strtotime($created))); ?></a>：</dt>
              <dd>
                <?php echo h_s($title); ?>  [<a href="delete.php?id=<?php echo h_s($id); ?>" style="color: #F33;">削除</a>]
              </dd>
            </dl>
            <?php endwhile; ?>
          </section>
        <?php endif; ?>

        <section class="box">
          <h2><span>Memo</span>メモ</h2>

          <h3>メモ帳の使い方</h3>
            <div id="content">
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
              <li>
                <a href="views/content/about.php"><span>当サイトについて</span>About</a>
              </li>
            <?php if (isset($name)): ?>
              <li>
                <a href="views/content/works.php"><span>メモ帳</span>Memos</a>
              </li>
              <li>
                <a href="logout.php" class="text_red"><span>ログアウト</span>Logout</a>
              </li>
            <?php else: ?>
              <li>
                <a href="views/join/index.php"><span>新規登録</span>Sign Up</a>
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
