
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
      <div class="row center">
        <h5 class="header col s12 light">チームの動きについての前向きな提言、疑問など自由に投稿してください</h5>
      </div>
      
      <div class="row center">
        <a href="select.php" id="download-button" class="btn-large waves-effect waves-light orange">これまでの投稿を見る</a>
      </div>
      <form method="POST" action="insert.php">
    <div class="form">
            <fieldset>
                <label>タイトル:<input type="text" name="title"></label><br>
                <label>コメント:<textarea type="text" name="comment" rows="55" cols="50"></textarea><br>
                <input type="submit" value="送信"　id="download-button" class="btn-large waves-effect waves-light orange"　font color="white">
            </fieldset>
    </div>
    </form>
      <br><br>

    </div>
  </div>




  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>






