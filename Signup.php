<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Service Advertising Website</title>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
                              <form name="my-form" onsubmit="return validform()" action="success.php" method="">
                                  <div class="form-group row">
                                      <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                      <div class="col-md-6">
                                          <input type="text" id="full_name" class="form-control" name="full-name">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                      <div class="col-md-6">
                                          <input type="text" id="email_address" class="form-control" name="email-address">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                      <div class="col-md-6">
                                          <input type="text" id="user_name" class="form-control" name="username">
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                      <label for="user_name" class="col-md-4 col-form-label text-md-right">Password</label>
                                      <div class="col-md-6">
                                          <input type="password" id="user_name" class="form-control" name="password">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                      <div class="col-md-6">
                                          <input type="text" id="phone_number" class="form-control">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
                                      <div class="col-md-6">
                                          <input type="text" id="present_address" class="form-control">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                      <div class="col-md-6">
                                          <input type="text" id="permanent_address" class="form-control" name="permanent-address">

                                      </div>
                                  </div>




                                  <div class="form-group">
    <label class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" value="option1">
    <span class="form-check-label"> Developer &emsp;</span>
  </label>
  <label class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" value="option2">
    <span class="form-check-label"> Client</span>
  </label>
  </div>

                                      <div class="col-md-6 offset-md-4">
                                          <button type="submit" class="btn btn-primary">
                                          Register
                                          </button>
                                      </div>
                                  </div>



                              </form>
                              <br>
                                <br>
                                  <br>

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
