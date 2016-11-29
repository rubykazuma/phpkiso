<?php
		$dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password = '';
    $dsh = new PDO($dsn, $user, $password);
    $dsh->query('SET NAMES utf8');

    //お問い合わせ内容全件取得
    $sql = 'SELECT * FROM `survey` WHERE 1 ';
      // SELECT カラム名 FROM テーブル WHERE 条件
      // カラム名の部分に*を使用すると、全カラムを意味する
   
    echo $sql;
    echo '<br>';

    $stmt = $dsh->prepare($sql);
    $stmt->execute();

    $dbh = null;

    //取得した一覧データを表示
    // while (1) {
    //   $rec = $stmt->fetch(PDO::FECTH_ASSOC);
    //   if ($rec == false) {
    //     break; //繰り返し処理を強制終了
    //   }
     
    //  echo $rec['code'] . '<br>';
    //  echo $rec['nickname'] . '<br>';
    //  echo $rec['email'] . '<br>';
    //  echo '<hr>';
    foreach ($stmt as $key => $value) {
    echo $value['code'] . '<br>';
    echo $value['nickname'] . '<br>';
    echo $value['email'] . '<br>';
    echo $value['content'] . '<br>';
    echo '<hr>';
  }


    }
?>

