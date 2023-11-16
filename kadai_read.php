
<?php
$str ="data/dino.txt";
$file = fopen($str,"r");
?>

<html>
<head>
    <title>テキストファイルのデータ表示</title>
</head>
<body>
    <table border="2">
    <?php
    while(!feof($file)) {
        $txt = fgets($file);
        if ($txt !== false) {
            echo '<tr>';// カンマやタブで区切られたデータを分割する
            $cells = explode(",", $txt); // ここでの区切り文字はファイルに合わせて変更する
            foreach ($cells as $cell) {
                echo '<td>' . htmlspecialchars($cell) . '</td>';
            }
            echo '</tr>';
        }
    }
    fclose($file);
    ?>
    </table>
</body>
</html>