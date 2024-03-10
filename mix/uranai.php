<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>今日の運勢</title>
    </head>

        <body>
            <p>

                <?php
                    //変数$numに０〜４までのランダムな整数を代入する
                    $num =  mt_rand(0, 4);
                    //変数$numの値を入力する（確認用）
                    echo $num;
                    //改行する
                    echo '<br>';

                    //変数$numの値が４であれば、大当たりですという文字を出力
                    if ($num === 4) {
                    echo '大当たりです';
                    } elseif ($num === 3) {
                    echo '当たりです';
                    } else {
                    echo 'はずれです';
                    }
                ?>
            </p>
        </body>
</html>