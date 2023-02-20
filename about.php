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
              <a href="join/index.php"><span>新規登録</span>Sign Up</a>
          </li>
          <li>
            <a href="login.php"><span>ログイン</span>Login</a>
          </li>
          <li>
            <a href="about.php"><span>当サイトについて</span>About</a>
          </li>
          <li>
            <a href="works.php"><span>メモ帳</span>Memos</a>
          </li>
        </ul>
      </nav>
    </div>

    <div id="container">
      <div id="main">
        <section id="about" class="mb50">
          <h2><span>About</span>当テンプレートについて</h2>

          <h3>当テンプレートはhtml5+CSS3(レスポンシブWEBデザイン)です</h3>
          <p>
            当テンプレートは、パソコン、スマホ、タブレットでhtml共通のレスポンシブWEBデザインになっております。<br />
            古いブラウザ（※特にIE8以下）で閲覧した場合にCSSの一部が適用されない（各を丸くする加工やグラデーションなどの加工等）のでご注意下さい。
          </p>

          <h3>各デバイスごとのレイアウトチェックは</h3>
          <p>
            最終的なチェックは実際のタブレットやスマホで行うのがおすすめですが、臨時チェックは最新のブラウザ(IEならIE10以降)で行う事もできます。ブラウザの幅を狭くしていくと、各端末サイズに合わせたレイアウトになります。
          </p>

          <h3>各デバイス用のスタイル変更は</h3>
          <p>
            cssフォルダのstyle.cssファイルで行って下さい。詳しい説明も入っています。<br />
            前半はパソコン環境を含めた全端末の共通設定になります。中盤以降、各端末向けのスタイルが追加設定されています。<br />
            media=&quot;
            (～)&quot;の「～」部分でcssを切り替えるディスプレイのサイズを設定しています。ここは必要に応じて変更も可能です。
          </p>

          <h3>小さい端末（※幅800px以下）の環境でのみ</h3>
          <p>
            メインメニューが折りたたみ式（３本バーアイコン化）になります。バーのスタイル設定もstyle.cssで行う事ができます。
          </p>

          <h3>画像ベースは</h3>
          <p>
            「base」フォルダに入っていますのでご自由にご活用下さい。<br />
            写真の元素材を当社運営の<a href="http://photo-chips.com/"
              >PHOTO-CHIPS</a
            >や<a href="http://decoruto.com/">DECORUTO</a
            >で配布している場合もございます。
          </p>
        </section>

        <section>
          <h2><span>Manual</span>当テンプレートの使い方</h2>

          <h3 class="color1">
            注意：当テンプレートにはメインメニューが「２箇所」ずつ入っています
          </h3>
          <p>
            パソコンなどの大きな端末「menubar（幅801px以上）」向けと、タブレットやスマホなどの小さな端末「menubar-s（幅800px以下）」向けがそれぞれ入っています。大きな端末向けは編集ソフトで見れると思いますが、小さな端末向けは見えないと思いますのでhtml側で編集して下さい。
          </p>

          <h3 class="color1">
            注意：当テンプレートにはロゴ画像が「２つ」入っています
          </h3>
          <p>
            パソコンなどの大きな端末「logo.png（幅801px以上）」向けと、タブレットやスマホなどの小さな端末「logo_s.png（幅800px以下）」向けがそれぞれ入っています。それぞれロゴを準備して下さい。
          </p>

          <h3 class="color1">
            注意：当テンプレートには背景装飾画像を「２種類」使っています
          </h3>
          <p>
            imagesフォルダにある「bg.jpg」は一般向けの画像です。「bg_s.jpg」の方は古いブラウザ向け（主にIE8以下）向けです。古いブラウザではcssの背景サイズ指定がきかず、原寸大で表示されてしまうので、古いブラウザ専用に原寸大で表示する為の画像を用意しています。原寸大画像を共通で使ってもいいのですが、そうすると今度は高解像度ブラウザでピンボケが発生するデメリットがあるので敢えて２つに分けました。<br />
            設定はcssフォルダのstyle.cssで行っています。
          </p>

          <h3>titleタグ、copyright、metaタグ、他の設定</h3>
          <p>
            <strong class="color1"
              >■titleタグの設定はとても重要です。念入りにワードを選んで適切に入力しましょう。</strong
            ><br />
            まず、htmlソースが見れる状態にして、<br />
            <span class="look"
              >&lt;title&gt;個人サイト向け 無料ホームページテンプレート
              tp_simple14&lt;/title&gt;</span
            ><br />
            を編集しましょう。<br />
            あなたのホームページ名が「Sample Site」だとすれば、<br />
            <span class="look">&lt;title&gt;Sample Site&lt;/title&gt;</span
            ><br />
            とすればＯＫです。SEO対策もするなら冒頭に重要なワードを入れておきましょう。
          </p>
          <p>
            <strong class="color1">■copyrightを変更しましょう。</strong><br />
            続いてhtmlの下の方にある、<br />
            <span class="look"
              >Copyright&copy; Sample Site All Rights Reserved.</span
            ><br />
            もあなたのサイト名に変更します。
          </p>
          <p>
            <strong class="color1">■metaタグを変更しましょう。</strong><br />
            htmlソースが見える状態にしてmetaタグを変更しましょう。
          </p>
          <p>
            ソースの上の方に、<br />
            <span class="look"
              >content=&quot;ここにサイト説明を入れます&quot;</span
            ><br />
            という部分がありますので、テキストをサイトの説明文に入れ替えます。検索結果の文面に使われる場合もありますので、見た人が来訪したくなるような説明文を簡潔に書きましょう。
          </p>
          <p>
            続いて、その下の行の<br />
            <span class="look"
              >content=&quot;キーワード１,キーワード２,～～～&quot;</span
            ><br />
            も設定します。ここはサイトに関係のあるキーワードを入れる箇所です。10個前後ぐらいあれば充分です。キーワード間はカンマ「,」で区切ります。
          </p>
          <p>
            <strong class="color1">■h1ロゴのaltタグも変更しましょう。</strong
            ><br />
            html側に<br />
            <span class="look">alt=&quot;Sample Site&quot;</span><br />
            となっている箇所が２箇所があるので、この部分もあなたのサイト名に変更しましょう。
          </p>

          <h3>Worksページの機能について</h3>
          <p>
            サムネイル画像をクリックした際に画面が暗転して大きなポップアップ画像が出てくる仕組みには、<a
              href="https://cdnjs.com/libraries/lightbox2"
              target="_blank"
              >lightbox2</a
            >というjavascriptライブラリを使用しています。<br />
            このテンプレートでは「lightbox-plus-jquery.min.js」と「lightbox.css」をCDNから読んでいますが、もしlightboxの動作がおかしくなった場合はここのバージョンを変更して読み込んでみて下さい。
          </p>
          <p>
            「lightbox-plus-jquery.min.js」は各htmlの下の方に、「lightbox.css」はcssフォルダのstyle.css冒頭で読み込み指定をしています。バージョンを変更する際はここを編集して下さい。
          </p>
          <p>
            画像の追加方法など、実際の使い方については、<a href="works.php"
              >WORKSページ</a
            >に記載しています。
          </p>

          <h3>
            左ブロックはPC環境では（801px以上の端末）スクロールしても固定表示されます
          </h3>
          <p>
            ブラウザの高さが左コンテンツより小さくなった場合、スクロールバーが出ます。見た目があまりよくないので、メニュー数はあまり増やさない方がいいでしょう。<br />
            固定させずに通常表示にしたいなら、cssファイルの、
          </p>
          <p><strong>#sub {</strong></p>
          <p>にある、</p>
          <p>
            <strong>position: fixed; /*スクロールしても固定させる設定*/</strong>
          </p>
          <p>を、</p>
          <p><strong>position: absolute;</strong></p>
          <p>に変更して下さい。</p>

          <h3>左メニュー及びh2見出しで使っているフォントについて</h3>
          <p>
            cssフォルダのstyle.cssの冒頭でGoogle
            Fontsを読み込んでそれを指定しています。英語専用フォントです。<br />
            <a href="http://template-party.com/tips/tips13.html" target="_blank"
              >Google Fontsの詳細はこちら。</a
            >
          </p>

          <h3>
            スマホなどの小さな端末からボタンクリックでPC画面を表示させたい方へ
          </h3>
          <p>
            レスポンシブデザインだと、スマホやタブレットなどの小さな端末から見た場合はそれ専用のレイアウトに変わりますが、あえてPC画面も見せたいユーザーの為に<a
              href="http://template-party.com/tips/tips20160916viewport.html"
              >tipsを公開</a
            >しました。
          </p>

          <h3>
            プレビューでチェックすると警告メッセージが出る場合(一部ブラウザ対象)
          </h3>
          <p>
            主にjavascript（jsファイル）ファイルによって出る警告ですが、WEB上では出ません。また、この警告が出ている間は効果を見る事ができないので、警告メッセージ内でクリックして解除してあげて下さい。これにより効果がちゃんと見れるようになります。
          </p>

          <div class="box">
            <h3>このボックスは</h3>
            <p>
              <strong>class=&quot;box&quot;</strong><br />
              とすると出ます。例：&lt;section class=&quot;box&quot;&gt;や&lt;div
              class=&quot;box&quot;&gt;など
            </p>
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
                <a href="join/index.php"><span>新規登録</span>Sign Up</a>
            </li>
            <li>
              <a href="login.php"><span>ログイン</span>Login</a>
            </li>
            <li>
              <a href="about.php"><span>当サイトについて</span>About</a>
            </li>
            <li>
              <a href="works.php"><span>メモ帳</span>Memos</a>
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
