<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way($array, $order)
        {
            // $order が TRUE であれば、昇順
            if ($order) {
                echo '昇順にソートします。' . '<br>';
                sort($array);
            } else {
                echo '降順にソートします。' . '<br>';
                rsort($array);
            }

            foreach ($array as $value) {
                echo $value . '<br>';
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>