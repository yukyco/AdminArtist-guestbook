<?php
$defs = array(
 'name' => '山田太郎', 'email' => 'yamada@wings.msn.to',
 'zip' => '100-0000', 'sex' => '男性', 'age' => '40',
 'os' => array('win', 'linux'), 'memo' => '特になし'
);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Admin Artist | アンケート♩</title>

    <!-- Bootstrap core CSS -->
    <link href="css/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/fortune.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="css/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">アンケート♩</a>
        </div>
      </div>
    </nav>

     <div class="mid">

<h3>アンケート</h3>
<form method="POST" action="request2.php">
  <div class="container">
    <label for="name">名前：</label><br />
    <input type="text" id="name" name="name"
      value="<?php print($defs['name']); ?>" />
  </div>
  <div class="container">
    <label for="email">メールアドレス：</label><br />
    <input type="email" id="email" name="email"
      value="<?php print($defs['email']); ?>" />
  </div>
  <div class="container">
    <label for="zip">郵便番号：</label><br />
      <input type="text" id="zip" name="zip"
      value="<?php print($defs['zip']); ?>" />
  </div>
  <div class="container">
    性別：<br />
    <?php
    $sexes = array('男性', '女性', 'その他');
    foreach ($sexes as $sex) {
      print('<label>');
      print('<input type="radio" name="sex" value="'.$sex.'"');
      if ($sex === $defs['sex']) { print(' checked'); }
      print(' />');
      print($sex.'</label>');
    }
    ?>
   </div>
  <div class="container">
    <label for="age">年齢：</label><br />
    <select id="age" name="age">
   <?php 
      for ($i = 10; $i <= 50; $i += 10) {
        print('<option value="'. $i.'"');
        if ($i === (int)$defs['age']) { print(' selected'); }
        print('>' . $i .'代</option>');
      }
    ?>
     </select>
  </div>
  <div class="container">
    ご使用のOS：<br />
    <?php
    $oss = array('win' => 'Windows', 'mac' => 'Mac',
      'linux' => 'Linux');
    foreach ($oss as $k_os => $v_os) {
      print('<label>');
      print('<input type="checkbox" name="os[]" value="'.$k_os.'"');
      foreach ($defs['os'] as $os) {
        if ($k_os === $os) { print(' checked'); }
      }
      print(' />');
      print($v_os.'</label>');
    }
    ?>
   </div>
    <div class="container">
      <label for="memo">サイトへのご意見：</label><br />
    <textarea rows="5" cols="30" id="memo"
      name="memo"><?php print($defs['memo']); ?></textarea>
    </div>
  <input type="hidden" name="quest_num" value="XXX15204" />
  <input type="submit" value="送信" />
  </form>

     </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="css/dist/js/bootstrap.min.js"></script>
    <script src="css/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="css/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>