<?php 
	// 手順1 データベースの接続処理
	$dsn = 'mysql:dbname=phpkiso;host=localhost';
	$user = 'root';
	$password='';
	$dbh = new PDO($dsn, $user, $password); //PDO-phpdatabeseobject
	$dbh->query('SET NAMES utf8');
	// 手順2 SQL分を実行する
	// アクサングラーブ(``)で囲う必要があるdbの項目は!
	$sql = 'SELECT * FROM `survey` WHERE 1';
	// SELECT カラム名 FROM テーブル名 WHERE 条件
	// カラム名の部分*を使用すると、全カラムを意味する。
	echo $sql;
	echo '<br>';
	$stmt = $dbh->prepare($sql);
	//実行結果は$stmtに格納される
	$stmt->execute();
	// 手順3 切断
	$dbh = null;
	// 取得したデータ一覧を表示
	// foreachならこんな感じ
	foreach ($stmt as $key => $value) {
		echo $value['code'] . '<br>';
		echo $value['nickname'] . '<br>';
		echo $value['email'] . '<br>';
		echo $value['content'] . '<br>';
		echo '<hr>';
	}
	// while を無限ループ EOFでループ終了(break)
	// while (TRUE) {
	// 	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	// 	if ($rec == false) {
	// 		break;
	// 	}
	// 	echo $rec['code'] . '<br>';
	// 	echo $rec['nickname'] . '<br>';
	// 	echo $rec['email'] . '<br>';
	// 	echo $rec['content'] . '<br>';
	// 	echo '<hr>';
	// }
?>
Contact GitHub API Training Shop Blog About
