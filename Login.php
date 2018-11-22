<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Service Advertising Website</title>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="disabled"><a href="#" style=" font-weight: bold;">Service Advertising Website</a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="ContactUs.php">Contact US</a></li>
          <li><form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="Signup.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">

      <div class="well">  <p><a href="developers.php" ><h4>Developers</h4></a></p> </div>
    <div class="well">    <p><a href="clients.php"><h4>Clients</h4></a></p> </div>

      </div>
      <div class="col-sm-8 text-left">
        <h1>Welcome</h1>





<div class="container">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="width:auto">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" style="width:auto">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Login</button>
  </form>
</div>

 </div>

      <div class="col-sm-2 sidenav">
        <div class="well">
          <p>Help</p>
        </div>
        <div class="well">
          <p>Support</p>
        </div>

      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <p><div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/">Service Advertising Website SE2018G01</a>
    </div></p>
  </footer>

</body>
</html>
