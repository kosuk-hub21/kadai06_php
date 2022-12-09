<?php
// 受け取り
$name = $_POST['name'];
$mail = $_POST['mail'];
$age = $_POST['age'];
// ファイルに書き込み
// ファイルを開く
$text=$name . $mail . $age;
$openFile = fopen( './data/data.txt' , 'a' );
// 書き込み
// fwrite($openFile,$name . '/' .$mail .'/' .$age . "\n")
fwrite($openFile,$text. "\n")
// ファイルを閉じる
fclose($openFile);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>アンケート書き込みしました。</h1>   
    <h2>データを登録済みです</h2>
    <table class="button">
    <tr>
        <td><a href="read.php">確認する</a></td>
        <td><a href="input.php">戻る</a></td>
    </tr>
    </table>
</body>

</html>
