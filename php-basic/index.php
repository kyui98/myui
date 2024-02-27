<!DOCTYPE heml>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>

    <body>
        <p>
              <?php
              //対価演算子を使った場合の戻り値を出力する
              var_dump('5' == 5);

              //改行する
              echo '<br>';
            
              //厳密等各演算子を使った場合の戻り値を出力する
              var_dump('5' === 5);
              ?>
        </p>
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
        <p>
                <?php
                $num = 20;

                //&&（かつ）を記述して、すべての条件が成り立つ場合にのみ処理を行う（変数の値が10〜30）
                if ($num > 10 && $num < 30) {
                  echo '変数$numは10より大きく、30より小さいです';
                } else {
                  echo '条件が成り立ちませんでした';
                }
                
                echo '<br>';

                $num = 40;

                //||（または）を記述して、1つでも条件が成り立てば処理を行う（変数$numの値が10または30）
                if ($num === 10 || $num === 30){
                  echo '変数$numは10または30です';
                } else {
                  echo '条件が成り立ちませんでした';

                }
                ?>
    <body>

</html>

