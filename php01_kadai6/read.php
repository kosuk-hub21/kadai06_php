<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>アンケート結果</h1>
    <table>
        <tr>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>年齢</th>
        </tr>
     
    </table>

    <?php
    // ファイルを開く
    $openFile = fopen( './data/data.txt' , 'r' );
    // ファイル内容を1行ずつ読み込んで出力
    while ( $text = fgets( $openFile )) {
        //指定した文字列が一致したら置き換える
        $replace = str_replace('名前','メールアドレス','年齢',$text);
        echo $replace;
    };


    // ファイルを閉じる
    fclose( $openFile );
    ?>




</body>
</html>









