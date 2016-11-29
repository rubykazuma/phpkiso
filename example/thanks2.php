
<?php
	// CRUD処理
	// C Crate  - 作成 - INSERT
	// R Read   - 取得 - SELECT
	// U Update - 更新 - UPDATE
	// D Delete - 削除 - DELETE
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);
	// 手順1 データベースの接続処理
	$dsn = 'mysql:dbname=phpkiso;host=localhost';
	$user = 'root';
	$password='';
	$dbh = new PDO($dsn, $user, $password); //PDO-phpdatabeseobject
	$dbh->query('SET NAMES utf8');
	// 手順2 SQL分を実行する
	// アクサングラーブ(``)で囲う必要があるdbの項目は!
	$sql = 'INSERT INTO `survey`(`nickname`, `email`, `content`)
	VALUES ("' . $nickname . '","' . $email . '","' . $content . '" )';
	echo $sql;
	echo '<br>';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	// 手順3 切断
	$dbh = null;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>送信完了</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>お問い合わせありがとうございました！</h1>

  <div>
    <h3>お問い合わせ詳細内容</h3>
    <p>ニックネーム：<?php echo $nickname; ?></p>
    <p>メールアドレス：<?php echo $email; ?></p>
    <p>お問い合わせ内容：<?php echo nl2br($content); ?></p>
  </div>

</body>
</html>