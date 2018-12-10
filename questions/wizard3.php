<?php
require_once '../../Encode.php';

session_start();
if (isset($_POST['age'])) { $_SESSION['age'] = $_POST['age']; }
if (isset($_POST['os']) || isset($_SESSION['os'])) {
  $_SESSION['os'] = $_POST['os']; }
if (isset($_POST['memo'])) { $_SESSION['memo'] = $_POST['memo']; }
if (isset($_POST['quest_num'])) { $_SESSION['quest_num'] = $_POST['quest_num']; }

$errors = array();
foreach($_SESSION as $key => $value) {
  if (is_array($value)) { $value = implode('', $value); }
  if (!mb_check_encoding($value)) {
    $errors[] = '文字コードに誤りがあります。';
    break;
  }
}
if (trim($_SESSION['name']) === '') {
  $errors[] = '名前はかならず入力してください。';
}
if (mb_strlen($_SESSION['name']) > 50) {
  $errors[] = '名前は50文字以内で入力してください。';
}
if (!preg_match('/^\w+([-+.\']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/iD', $_SESSION['email'])) {
  $errors[] = '不正なメールアドレスです。';
}
if (!preg_match('/^[0-9]{3}-[0-9]{4}$/', $_SESSION['zip'])) {
  $errors[] = '不正な郵便番号です。';
}
if (!ctype_digit($_SESSION['age'])) {
  $errors[] = '年齢は整数値で入力してください。';
}
if ($_SESSION['age'] < 10 || $_SESSION['age'] > 50) {
  $errors[] = '年齢は10～50の間で入力してください。';
}
$opts = array('win', 'mac', 'linux');
if (isset($_SESSION['os'])) {
  foreach ($_SESSION['os'] as $os) {
    if (!in_array($os, $opts)) {
      $errors[] = 'OSは決められた選択肢の中から選択してください。';
      break;
    }
  }
}
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
  die('不正なアクセスが行われました。');
}
if (count($errors) > 0) {
  die(implode('<br />', $errors).
    '<br />[<a href="wizard1.php">戻る</a>]');
}

$ini = parse_ini_file('mail.ini', FALSE);

$headers = <<<HEAD
From: {$_SESSION['email']}
Return-Path: {$_SESSION['email']}
Content-Type: text/plain;charset=ISO-2022-JP
HEAD;
$body = "■■".$ini['subject']."■■\n";
foreach ($_SESSION as $key => $value) {
  if (is_array($value)) { $value = implode(',', $value); }
  $body .= "［{$key}］ {$value}\n";
}

mb_send_mail($ini['mailto'], $ini['subject'], $body, $headers);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Siimple - AdminArtist</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="../assets/css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">AdminArtist</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../fortune.php">Fortune Cookie</a></li>
			<li><a href="../yourage.html">How old are you</a></li>
			<li><a href="../game.html">What Character</a></li>
			<li><a href="../joblist.html">Find Occupation</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


   <div id="header">
     <div class="container">
	<div class="row">
	   <div class="col-lg-6">
              
              <div class="container">
               <!--<form method="post" action="mail.php">
                <input type="submit" class="square_btn" value="Submit" align="center">-->
              </div>
            </form>
          <h4>ご回答ありがとうございました。サービス向上の為に努めて参ります。今後ともよろしくお願い申し上げます。</h4>
         </div>
       </div>
    </div>
	
 <!--<div id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">

<h5>お疲れさまでした！<br />
	ご回答ありがとうございました。</h5>
<p>以下の内容で送信致しました。</p>
<dl>
<dt>名前：</dt>
<dd><?php print(e($_SESSION['name'])); ?></dd>
<dt>メールアドレス：</dt>
<dd><?php print(e($_SESSION['zip'])); ?></dd>
<dt>性別：</dt>
<dd><?php print(e($_SESSION['sex'])); ?></dd>
<dt>年齢：</dt>
<dd><?php print(e($_SESSION['age'])); ?></dd>
<dt>ご使用のOS：</dt>
<dd><?php if (isset($_SESSION['os'])) {
  print(e(implode(',', $_SESSION['os']))); } ?></dd>
<dt>サイトへのご意見：</dt>
<dd><?php print(nl2br(e($_SESSION['memo']))); ?></dd>
<dt>アンケート番号：</dt>
<dd><?php print(e($_SESSION['quest_num'])); ?></dd>
</dl>
<?php session_unset(); ?>
	</div>
     </div>
   </div>-->


 </div> 
   <p></p>
 	<div id="footer">
	  <div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
					<p class="copyright">Copyright &copy; 2015 -2018 AdminArtist</p>
			</div>
		</div>		
	  </div>	
    </div>	
  </body>
</html>