<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>課題6</title>
</head>

<body>
    <!-- <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>サンプルフォームに必要な情報を入れる(POST)</li>
            <li>(演習)password欄を作って受け取る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <P>※post_confirm.phpにpostで送ってください。</P> -->

    <form action="write.php" method="post">
        <h1>アンケート</h1>
        <table class=form>
            <tr>
                <th>
                    <dt class=form-title>名前</dt>
                </th>
                <td>
                    <input type="text" name="name"   placeholder = "名前を入力します"></input>
                 </td>
            </tr>

        <!-- お名前: <input type="text" name="name"> -->
            <tr>
                    <th>
                        <dt class=form-title>EMAIL</dt>
                    </th>
                    <td>
                        <input type="text" name="mail"   placeholder = "アドレスを入力します"></input>
                    </td>
            </tr>
        <!-- EMAIL: <input type="text" name="mail"> -->
            <tr>
                    <th>
                        <dt class=form-title>年齢</dt>
                    </th>
                    <td>
                        <input type="text" name="age"   placeholder = "年齢を入力します"></input>
                    </td>
            </tr>
        <!-- パスワード欄を追加してみる。 -->
        
        </table>
        <input type="submit" value="送信">
    </form>

<footer>
 
</footer>
</body>

</html>
