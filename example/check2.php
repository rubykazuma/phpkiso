<?php
  // echo $_POST['nickname'];
  // echo '<br>';
  // echo $_POST['email'];
  // echo '<br>';
  // echo $_POST['content'];
  // echo '<br>';
  // echo '<br>';
// 入力チェック
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);
  if ($nickname == '') {
    $nickname_result = 'ニックネームが入力されていません。';
  } else {
    $nickname_result = 'ようこそ、' . $nickname . '様';
  }
  if ($email == '') {
    $email_result = 'emailが入力されていません。';
  } else {
    $email_result = 'emailは' . $email . 'です';
  }
  if ($content == '') {
    $content_result = 'お問い合わせ内容が入力されていません。';
  } else {
    $content_result = 'お問い合わせ内容は' . $content . 'です';
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>入力内容確認</h1>
  <p><?php echo $nickname_result; ?></p>
  <p><?php echo $email_result; ?></p>
  <p><?php echo nl2br($content_result); ?></p> <!-- 改行コード　有効化 -->

<form method="POST" action="thanks2.php">

  <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
  <input type="hidden" name="email" value="<?php echo $email; ?>">
  <input type="hidden" name="content" value="<?php echo $content; ?>">

  <input type="button" value="戻る" onclick="history.back(-1)">
  <?php if($nickname != '' && $email != '' && $content != ''): ?>
    <input type="submit" value="決定">
  <?php endif; ?>
</form>

</body>
</
html>