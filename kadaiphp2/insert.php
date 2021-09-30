<?php
//POSTデータ取得
$title = $_POST['title'];
$comment = $_POST['comment'];

//DB接続します
try {
  $pdo = new PDO('mysql:dbname=books_gs;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e){
    exit('DBConnectError:' . $e->getMessage());
}

//データ登録SQL作成
//SQL文を用意
$stmt = $pdo->prepare("INSERT INTO books_an_table(id, title, comment, date)
                                        VALUES(NULL, :title, :comment, sysdate())");

// バインド変数を用意
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
// $stmt->bindValue(':urls', $urls, PDO::PARAM_STR);

//実行
$status = $stmt->execute();

//データ登録処理後
 //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
if ($status == false) {
 $error = $stmt->errorInfo();
 exit("ErrorMessage:" . $error[2]);
} else {
    //index.phpへリダイレクト
  header('Location: index.php');

}

?>