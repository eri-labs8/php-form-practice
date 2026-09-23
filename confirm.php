<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録-確認</title>
    <style>
        table,
        th,
        td {
            border: 1px solid #999;
        }

        .back-button {
            display: inline-block;
            padding: 2px 6px;
            border: 1px solid #767676;
            border-radius: 2px;
            background-color: #efefef;
            color: #000;
            text-decoration: none;
            font-size: 13.3333px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <h1>ユーザー登録（2/3）確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>
    <table>
        <tr>
            <th>お名前</th>
            <td><?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><?php echo htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8') . '歳'; ?></td>
        </tr>
    </table>
    <br>
    <form action="complete.php" method="post">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8'); ?>">
        <!-- <a href="input.php" class="back-button">戻る</a><button type="submit">登録完了</button> -->
        <p>
            <button type="button" onclick="history.back();">戻る</button>
            <button type="submit">登録する</button>
        </p>
    </form>
</body>

</html>