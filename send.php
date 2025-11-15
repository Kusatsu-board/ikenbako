<?php
$to = "ikenbako932@gmail.com"; // 学校側メールアドレス
$type = isset($_POST['type']) ? $_POST['type'] : '未選択';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$subject = "【学校意見フォーム】新しい意見が届きました";
$body = "種類: $type\n\n内容:\n$message";
$headers = "From: no-reply@example.com\r\n";

// mail関数で送信
$success = mail($to, $subject, $body, $headers);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>送信完了</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <h1>学校意見送信フォーム</h1>
</header>

<main>
  <div class="complete-card">
    <?php if($success): ?>
      <h2>送信完了！ 🎉</h2>
      <p>ご意見ありがとうございました。<br>
      学校に匿名で送信されました。</p>
      <a href="index.html" class="button">トップに戻る</a>
      <a href="send.html" class="button">もう一度送る</a>
    <?php else: ?>
      <h2>送信失敗 😢</h2>
      <p>送信中にエラーが発生しました。もう一度お試しください。</p>
      <a href="send.html" class="button">戻る</a>
    <?php endif; ?>
  </div>
</main>
</body>
</html>
