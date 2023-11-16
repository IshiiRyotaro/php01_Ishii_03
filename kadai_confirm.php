<?php
$you = $_POST["you"];
$name = $_POST["name"];
$like = $_POST["like"];
$why = $_POST["why"];
$c = ",";

$str = date($you . $c . $name . $c . $like . $c . $why);
$file = fopen("data/dino.txt", "a");
fwrite($file, $str . "\n");
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ご協力ありがとうございました！</title>
</head>

<body>
    <h1>ご協力ありがとうございました</h1>
    <h2>みんなの結果を確認しましょう！</h2>
    <p><?= $str ?></p>

    <ul>
        <li><a href="kadai_read.php">結果</a></li>
    </ul>
</body>

</html>