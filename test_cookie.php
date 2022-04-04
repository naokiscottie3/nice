<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="uft-8">
<link rel="stylesheet" href="style.css">
<title>テスト用です。</title>
</head>
<body>
    <h1>session test</h1>
    <?php
        print $_COOKIE["naoki"];
        setcookie("naoki","1914");
    ?>
    <a href="index.php">戻る</a>
    <script src="accordion.js"></script>
</body>
</html>
