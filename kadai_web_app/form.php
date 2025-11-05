<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>社員情報入力フォーム</h1>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <th>社員名</th>
                <td><input type="text" name="employee_name"></td>
            </tr>
            <tr>
                <th>年齢</th>
                <td><input type="number" name="employee_age"></td>
            </tr>
            <tr>
                <th>所属部署</th>
                <td>
                    <select name="department">
                        <option value="開発部">開発部</option>
                        <option value="営業部">営業部 </option>
                        <option value="人事部">人事部</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">送信</button>
    </form>
</body>

</html>