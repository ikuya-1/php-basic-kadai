<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>入力内容をご確認ください。</h1>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="2">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $_POST['employee_name'] ?> </td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $_POST['employee_age'] ?> </td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $_POST['department'] ?> </td>
        </tr>
    </table>
    <button onclick="location.href='complete.php'">確定</button>
    <button onclick="history.back()">キャンセル</button>
</body>

</html>