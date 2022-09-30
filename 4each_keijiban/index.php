<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

    <header>
        <img src="./4eachblog_logo.jpg" alt="logo">
        <nav>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="main">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="POST" action="insert.php">
                <h2>入力フォーム</h2>
                <div class="form">
                    <label>ハンドルネーム</label>
                     <br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>
                <div class="form">
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>
                <div class="form">
                    <label>コメント</label>
                    <br>
                    <textarea name="comments" cols="50" rows="10"></textarea>
                </div>
                <div class="form">
                    <input type="submit" class="submit" value="送信する">
                </div>
            </form>
            <?php

            while($row = $stmt->fetch()) {

            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='comments'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
            }

            ?>
            <?php

            while($row = $stmt->fetch()) {

            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='comments'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
            }

            ?>
        </div>
        <aside>
            <nav>
                <h4>人気の記事</h4>
                <ul>
                    <li>PHPのオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタ　Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
            </nav>
            <nav>
                <h4>オススメリンク</h4>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
            </nav>
            <nav>
                <h4>カテゴリ</h4>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </nav>
        </aside>
    </main>
    <footer>
        <p>copyright©️internous｜4each blog the which provides A to Z about programming.</p>
    </footer>
</body>
</html>