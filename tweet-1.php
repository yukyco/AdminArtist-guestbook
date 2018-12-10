<?php require_once 'Encode.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="../pages/styles.css">
    <title>Tweet Box | Artist Admin Message Board</title>

    <!-- Bootstrap core CSS -->
    <link href="css/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="css/assets/js/ie-emulation-modes-warning.js"></script>
    <link rel="shortcut icon" href="img/favicon.png" type="image/vnd.microsoft.icon" />
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
          <a class="navbar-brand" href="#">Tweet Board</a>
        </div>
        
      </div>
    </nav>

        <div class="col-md-1">
          Feel free to tweet here !!<br> 
         </div>
         <?php
$data = @file('guest.dat')
  or die('The file could not open.');
foreach (array_reverse($data) as $row) {
  $datum = explode("\t", $row);
print('<dl>');
?>
  <td><?php print(e($datum[1])); ?>
    <?php print(e('（'.$datum[0].'）')); ?></td>
  <td>Tweet <?php print(e($datum[2])); ?></td>
<?php
}
print('</dl>');
?>
        </div>

        <!--<div class="col-md-9">

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
               <h6>LATEST TWEET</h6> 
              </thead>
              <tbody>
                <tr>
                  <?php
$data = @file('guest.dat')
  or die('The file could not open.');
foreach (array_reverse($data) as $row) {
  $datum = explode("\t", $row);
print('<dl>');
?>
  <dt><?php print(e($datum[1])); ?>
    <?php print(e('（'.$datum[0].'）')); ?></dt>
  <dd>Tweet<?php print(e($datum[2])); ?><hr /></dd>
<?php
}
print('</dl>');
?>
                  
                </tr> 
                <tr>

                  <td>This is a sample tweet !</td>

                </tr>
                <tr>

                  <td>This is a sample tweet !</td>

                </tr>
                <tr>

                  <td>This is a sample tweet !</td>

                </tr>
              </tbody>
            </table>
          </div>
        </div> -->


<!--<body class="main">
<h3>Tweet Here !</h3>
<form method="POST" action="guest_write.php"> 
  <div id="container"> 
    <label for="message">Message：</label><br />
    <textarea name="Free Space" id="message" name="message" cols="60" rows="6">Today's Topics</textarea>
  </div>
    </tbody>
  <div id="container">
    <label for="name">Author：</label>
    <input type="text" id="name" name="name"
      size="20" maxlength="30" />
  </div>
  <br />
  <input type="submit" value="SEND" />
</form>
<br /><br />
<a href="guest_read.php">Go To View Page</a> -->



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