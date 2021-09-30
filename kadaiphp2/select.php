<?php
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続します
try {
    //Password:MAMP='root',XAMPP=''
    $pdo = new PDO('mysql:dbname=books_gs;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DBConnectError' . $e->getMessage());
}

// データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM books_an_table");
$status = $stmt->execute();

//データ表示
$view = "";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:" . $error[2]);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= "<p>";
        $view .= h($result['date']) . '/' . h($result['title']) . '/' . h($result['comment']);
        $view .= "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>モヤモヤボックス</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">みんモヤ</a>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
        <div class="container">
        <br><br>
        <h1 class="header center orange-text">みんなのモヤモヤBOX</h1>
            <div>
                <div class="test"><?= $view ?></div>
            </div>
        </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>