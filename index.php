<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Writing-Temp</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="heading">WEBライティング用テンプレート</h2>
        <div>
            <!-- ここをforeachで繰り返し処理 -->
            <label for="question">
            <?php 
                // 設問項目をここに入れる
                $questions = ['設問1','設問2','設問3','設問4','設問5','設問6','設問7','設問8','設問9','設問10'];
                foreach ($questions as $question) {
                    echo $question . nl2br("\n");
                } 
            ?>
            </label>
            <!-- ユーザーの回答欄をここに入れる -->
            <input type="text">
            <!-- 繰り返しここまで -->
        </div>
        <div>
            <!-- この辺にsubmitボタンを設置＆ボタンを押したら、下のテキストエリアに回答の内容を結合して入れる -->
            <input type="button" value="文章を生成">
        </div>
        <div>
            <!-- この辺にテキストエリアを表示 -->
            <textarea name="" id="result" cols="30" rows="10"></textarea>
        </div>
    </div>
    <script src="assets/js/index.js"></script>
</body>
</html>