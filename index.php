<?php
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';

  $pageFlag = 0;
  if (!(empty($_POST['btn_confirm']))){
    $pageFlag = 1;
  }
  if(!(empty($_POST['btn_submit']))){
    $pageFlag = 2;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <?php if ($pageFlag === 0): ?>
            <h1>入力画面</h1>
            <form action="index.php" method="post">
              <div class="form-group">
                <label for="name">氏名</label>
                <input type="text" name="name" id="" class="form-control" value="<?php echo $_POST['name']; ?>">
              </div>
              <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" name="email" id="" class="form-control" value="<?php echo $_POST['email']; ?>">
              </div>
              <div class="form-check form-check-inline"">性別：
                <input type="radio"" name="gender" id="gender1" class=" form-check-input" value="0">
                <label class=" form-check-label" for="gender1"> 男性 </label>
                <input type="radio"" name="gender" id="gender2" class=" form-check-input" value="1">
                <label class=" form-check-label" for="gender2">女性</label>
              </div>
              <div class="form-group">
                <input type="submit" name="btn_confirm" value="確認する" class="btn btn-primary">
              </div>
            </form>
          <?php endif; ?>
          <?php if ($pageFlag === 1): ?>
            <h1>確認画面</h1>
            <form action="index.php" method="post">
              氏名
              <?php echo $_POST['name']; ?>
              <br>
              メールアドレス
              <?php echo $_POST['email']; ?>
              <br>
              性別
              <?php
                if($_POST['gender'] === '0') { echo '男性'; }
                if($_POST['gender'] === '1') { echo '女性'; }
              ?>
              <br>
              <input type="submit" value='戻る' class="btn btn-danger">
              <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
              <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
              <input type="submit" name="btn_submit" value="送信する" class="btn btn-primary">
            </form>
          <?php endif; ?>
          <?php if ($pageFlag === 2): ?>
            <h1>送信が完了しました。</h1>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>