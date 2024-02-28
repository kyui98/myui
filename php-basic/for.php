<!DOCTYPE heml>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>

    <body>
        <p>

            <?php
            //1~10までの整数を順番に出力
            for ($i = 1; $i <= 10; $i++) {
              echo $i . '<br>';
            }
            ?>
        </p>

        <p>

          <?php
            for ($i = 1; $i <= 10; $i++) {
                //変数に1~20までのランダムな整数を代入
               $num = mt_rand(1,20);

                echo "{$i}回目の結果は{$num}です。<br>";
              
               //変数の値が20であれば、break文で繰り返し処理を強制終了
              if  ($num === 20) {
                  echo '20が出たので繰り返し処理を強制終了します。';
                  break;
              }
            }
            ?>
        </p>
        <p>
           <?php
           for ($i = 1; $i <= 10; $i++) {
            //カウンタ変数$iの値が奇数であれば値を入力せずにcontinue文で次のループに進む.例)2.4.6...
            if ($i % 2 === 1) {
                 continue;               
            }

            echo $i . '<br>';
           }
            ?>
        </p>
      
    </body>

    </html>





