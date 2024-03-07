<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP+DB</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <p>
      
       <?php
       //配列の中身を出力
       print_r($results);
       ?>
    </p>
    <table>
          <tr>
             <th>ID</th>
             <th>氏名</th>
          </tr>
          <?php
          //配列の中身を順番に取り出し表彰式で出力する
          foreach ($results as $result) {
               echo "<tr><td>{$result['id']}</td><td>{$result['name']}</td></tr>";

          }
          ?>
    </table>
  </body>
</html>

          
