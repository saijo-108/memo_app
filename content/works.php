<?php 
// ログインしているかチェックするため
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
  // セッションに格納されているログインデータを$nameに渡す
  $name = $_SESSION['name'];
  $id = $_SESSION['id'];
}
?>

<body>
<?php include( dirname(__FILE__) . '/../share/header.php'); ?>
  <div id="container">
    <div id="main">
      <section class="box">
        <h2><span>Works</span>作品集</h2>

        <div class="list">
          <a
            href="../images_photo/sample1.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample1_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample2.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample2_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample3.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample3_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample4.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample4_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample5.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample5_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample6.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample6_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample7.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample7_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample8.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample8_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample9.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample9_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample10.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample10_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>
      </section>

      <section>
        <h2><span>Works</span>作品集</h2>

        <div class="list">
          <a
            href="images_photo/sample1.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample1_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample2.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample2_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample3.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample3_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample4.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample4_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample5.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample5_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample6.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample6_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample7.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample7_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample8.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample8_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample9.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample9_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>

        <div class="list">
          <a
            href="images_photo/sample10.jpg"
            data-lightbox="group1"
            data-title="htmlのdata-title部分で説明を入れる事ができます"
          >
            <figure>
              <img src="images_photo/sample10_mini.jpg" alt="" />
            </figure>
            <h3>Title</h3>
          </a>
        </div>
      </section>

      <section>
        <h2><span>lightboxの使い方</span></h2>
        <p>
          当テンプレートでは、<a
            href="https://cdnjs.com/libraries/lightbox2"
            target="_blank"
            >lightbox2</a
          >というjavascriptライブラリを使用しています。<br />
          ※ポップアップウィンドウ以降の動作はlightboxの仕様です。弊社ではサポートしておりませんので予めご了承下さい。
        </p>
        <p class="clear">
          サムネイル用の写真サイズはある程度大きければ適当で構いませんが、必ず「正方形」で準備して下さい。1pxでも縦横がずれると段落ちする場合があります。<br />
          ポップアップ用の大きな画像は自由サイズでOKです。
        </p>
        <p>
          <strong class="color1">■画像を増やしたい場合</strong><br />
          基本的にはご利用のテンプレートのhtml側のパーツをコピペして増やしてみて下さい。<br />
          以下の例のように大画像はaタグ内で読み込み、小画像はimgタグで普通に読み込まれています。
        </p>
        <p>
          &lt;a href=&quot;images_photo/sample10.jpg&quot;
          data-lightbox=&quot;group1&quot;
          data-title=&quot;タイトル&quot;&gt;<br />
          &lt;figure&gt;&lt;img src=&quot;images_photo/sample10_mini.jpg&quot;
          alt=&quot;&quot;&gt;&lt;/figure&gt;<br />
          &lt;/a&gt;
        </p>
        <p>
          <strong class="color1">■注意</strong><br />
          拡張子が大文字だったり小文字だったり（「jpg」「JPG」）、異なっていたり（「jpg」「jpeg」）するとうまく動作しない場合があるので、実際の画像ファイル名とhtml側の表記を揃えておいて下さい。<br />
          異なるままにしておいた場合、あなたの環境で正常に見えていても、他の人の環境で画像が表示されないなど問題が出る可能性があります。
        </p>
        <p>
          <strong class="color1">■タグの説明</strong><br />
          <span class="color1">data-lightbox="group1"</span
          >は、ポップアップで表示した場合に次の画像へリンクでつないていくかの設定です。「group1」部分は好きに変更して頂いて構いませんが、ここを同じ名前で揃えておけば、画像の右半分にカーソルをのせた時に次の画像へのリンク用のアイコンが出ます。<br />
          <span class="color1">data-title="タイトル"</span
          >は、lightboxで暗転表示された際に写真下に表示されるテキストです。<br />
          よく分からない場合は実際に設定して動作を確認してみて下さい。
        </p>
        <p>
          <strong class="color1">■別のページでlightboxを使う場合</strong
          ><br />
          htmlの下の方に、<br />
          <span class="look"
            >&lt;!--lightbox用jsファイルの読み込み--&gt;<br />
            &lt;script
            src=&quot;https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js&quot;&gt;&lt;/script&gt;</span
          ><br />
          のタグを追加して下さい。
        </p>
        <p>
          <strong class="color1"
            >■lightbox未搭載のテンプレートでlightboxを使いたい場合</strong
          ><br />
          htmlの下の方に、<br />
          <span class="look"
            >&lt;!--lightbox用jsファイルの読み込み--&gt;<br />
            &lt;script
            src=&quot;https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js&quot;&gt;&lt;/script&gt;</span
          ><br />
          のタグを追加。<br />
          続いてcssフォルダのstyle.css冒頭に、<br />
          <span class="look"
            >@import
            url(https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css);</span
          ><br />
          のタグを追加。これで準備は完了です。<br />
          あとは上に書いたようなlightbox専用のタグを使って作り込んでみて下さい。
        </p>
      </section>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
    </div>
</body>
