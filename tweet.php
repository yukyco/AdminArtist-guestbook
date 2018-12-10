<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

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
          <a class="navbar-brand" href="#">Tweet Board</a>
        </div>
        
      </div>
    </nav>

        <div class="col-md-3">
          Feel free to entry your tweet here.<br> 
          <form action ="tweet.php" method="GET">
            <textarea name="contents" cols="40" rows="4" placeholder="@"></textarea>
            <br>
            <input type="submit" value="Tweet" class="btn btn-primary" >
          </form>
        </div>

        <div class="col-md-9">

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
               <h6>LATEST TWEET</h6> 
              </thead>
              <tbody>
                <tr>
                  <th>
	              </th>
                  <td>
                    <?php
                      $contents = $_GET["contents"];
                      echo $contents;

                      //実際は echo $_GET["contents"]; でもOK
                    ?>
                  </td>
                  <td>2014-11-22 11:00:12</td>
                </tr>
                <tr>
                  <th>Name</th>
                  <th>Tweet Contents</th>
                  <th>Tweet Contents</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Your Name</td>
                  <td>This is a sample tweet !</td>
                  <td>2015-2-22 11:00:12</td>
                </tr>
                <tr>
                   <td>Your Name</td>
                  <td>This is a sample tweet !</td>
                  <td>2015-2-22 09:22:33</td>
                </tr>
                <tr>
                  <td>Your Name</td>
                  <td>This is a sample tweet !</td>
                  <td>2015-2-22 09:22:30</td>
                </tr>
              </tbody>
            </table>
          </div>
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
