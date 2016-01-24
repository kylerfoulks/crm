<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>


<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PJM</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="log.php">Log In </a></li>
        <li><a href="#">Register</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->




  </div><!-- /.container-fluid -->


</nav>
  
  <div class="container-fluid">
    <div class="panel panel-default col-lg-3 col-lg-offset-4" style="padding: 0;">
      <div class="panel-heading">Log In</div>
      <div class="panel-body">
          <form>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Username</span>
              <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Password</span>
              <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
            </div>

            <input type="submit" value="Log In" class="btn btn-primary" style="float: right;margin-top: 10px;">
          </form>



      </div>
    </div>
  </div>



	
</div>


<?php require_once('footer.php'); ?>
</body>
</html>