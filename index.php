<!DOCTYPE html>
<html lang="ja">

    <head>
    <meta charset="utf-8">
    <title>4eachblog 掲示板</title>

    </head>
    
    <body>
    <img src="4eachblog_logo2.jpg">
    
    <header>
    <ul>
    <li>トップ</li>
    <li>プロフィール</li>
    <li>4eachについて</li>
    <li>登録フォーム</li>
    <li>問い合わせ</li>
    <li>その他</li>
    </ul>
    </header>
    
    <main>
        <div class="left">
        
        <h1>プログラミングに役立つ掲示板</h1>
            
    <div class="box1">
            
        <h2>入力フォーム</h2>
        <form method="post" action="insert.php">
        
            <div>
            <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
            </div>
            
            <div>
            <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
            </div>
            
            <div>
            <label>コメント</label>
                <br>
                <textarea type="text" class="text" rows="10" cols="60" name="comments"></textarea>
            </div>
            

        </form>
        
         <input type="submit" value="投稿する">
            
            </div>
            
            <div class="box2">
            <h2>タイトル</h2>
                <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</p>
                powerd by 通りすがり
            </div>
            
            <div class="box3">
            <h2>タイトル</h2>
                <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</p>
                powerd by 通りすがり
            </div>
    
        </div>
        
        <div class="right">
        
        <div class="box4">
            <p>人気の記事</p>
            <ul>
            <li>PHPオススメの本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタTop5</li>
            <li>HTMLの基礎</li>
            </ul>
            </div>
            
        <div class="box5">
            <p>オススメリンク</p>
            <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Edipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
            </ul>
            </div>
            
            <div class="box6">
            <p>カテゴリ</p>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
                </ul>
            </div>
        
        </div>
    </main>
        
        <footer>
        copyright internous | 4eacha blog is the one which pravides A to Z about programming.
        </footer>
    </body>
</html>