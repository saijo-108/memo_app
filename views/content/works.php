<?php 
// ログインしているかチェックするため
session_start();
require('../share/share.php');

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
  // セッションに格納されているログインデータを$nameに渡す
  $name = $_SESSION['name'];
  $id = $_SESSION['id'];

  $db = dbconnect();

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
    header('Location: works.php');
    exit();
  }
}
?>

<body>
<?php include( dirname(__FILE__) . '/../share/header.php'); ?>
  <div id="container">
    <div id="main">
      <section class="box">
        <h2><span>Contents</span>メモ内容</h2>
          <?php $stmt = $db->prepare('select p.id, p.member_id, p.title, p.message, p.created, m.name from posts p, members m where m.id=p.member_id and p.member_id=? order by id desc');
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
          <dl id="newinfo2">
            <dt>
              タイトル：<a><?php echo h_s($title); ?></a>
            </dt>
            <dd class="memos">
              内容：<br>
              <a><?php echo h_s($message); ?></a>[<a href="/memo_app/delete.php?id=<?php echo h_s($id); ?>" style="color: #F33;">削除</a>]
            </dd>
              <?php echo h_s(date('Y年m月d日 H:h', strtotime($created))); ?>
          </dl>
          <?php endwhile; ?>
      </section>

      <section class="box">
        <h2><span>Memo</span>メモ</h2>

        <h3>新しいメモを残す</h3>
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
      <?php include( dirname(__FILE__) . '/../share/footer.php'); ?>
    </div>
</body>
