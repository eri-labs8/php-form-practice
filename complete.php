<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録-完了</title>
</head>

<body>
    <h1>ユーザー登録（3/3）完了</h1>
    <p><?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') . 'さん、ユーザー登録が完了しました！'; ?></p>
    <p>確認メールを <?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?> に送信しました。</p>
    <p><a href="input.php">最初に戻る</a></p>
</body>

</html>