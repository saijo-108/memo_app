<?php 
session_start();
require('views/share/share.php');

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
  // セッションに格納されているログインデータを$nameに渡す
  $name = $_SESSION['name'];
  $id = $_SESSION['id'];

  $db = dbconnect();
}

// URLパラメータをチェックする
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// URLパラメータが指定されていなかったらindex.phpに戻る
if (!$id) {
    header('Location: index.php');
    exit();
}
?>

<body>
<?php include( dirname(__FILE__) . '/views/share/header.php'); ?>
    <div id="container">
        <div id="wrap">
            <div id="head">
                <h1>My Memo</h1>
            </div>
            <div id="content">
                <p>&laquo;<a href="index.php">一覧にもどる</a></p>
                    <?php $stmt = $db->prepare('select p.id, p.member_id, p.title, p.message, p.created, m.name from posts p, members m where p.id=? and m.id=p.member_id order by id');
                    if (!$stmt) {
                        die($db->error);
                    }
                    $stmt->bind_param('i', $id);
                    $success = $stmt->execute();
                    if (!$success) {
                        die($db->error);
                    }
                    $stmt->bind_result($id, $member_id, $title, $message, $created, $name);
                    if ($stmt->fetch()): ?>
                        <dl id="newinfo">
                        <dt><a href="view.php?id="><?php echo h_s(date('Y年m月d日 H:h', strtotime($created))); ?></a>：</dt>
                        <dd>
                            <?php echo h_s($title); ?>  [<a href="delete.php?id=" style="color: #F33;">削除</a>]
                        </dd>
                        </dl>
                    <?php else: ?>
                        <p>その投稿は削除されたか、URLが間違えています</p>
                    <?php endif; ?>
            </div>
        </div>
    </div>
    <?php include( dirname(__FILE__) . '/views/share/footer.php'); ?>
</div>
</body>

</html>