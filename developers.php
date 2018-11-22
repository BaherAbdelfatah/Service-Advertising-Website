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

      <div class="well" id="developer">  <p><a href="developers.php" ><h4>Developers</h4></a></p> </div>
    <div class="well">    <p><a href="clients.php"><h4>Clients</h4></a></p> </div>

      </div>
      <div class="col-sm-8 text-left">
        <h1>Welcome</h1>
        <div class="row">
     <div class="col-sm-3">
       <div class="well">
        <p>John</p>
        <img src="dev1.png" class="img-circle" height="55" width="55" alt="Avatar">
       </div>
     </div>
     <div class="col-sm-9">
       <div class="well">
         <p>John is a full-stack engineer who's as comfortable working on large-scale distributed systems as he is on client-facing single-page web apps. Jon also excels at working with big data, and has frequently worked on a petabyte scale.</p>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-sm-3">
       <div class="well">
        <p>Alex</p>
        <img src="dev2.jpg" class="img-circle" height="55" width="55" alt="Avatar">
       </div>
     </div>
     <div class="col-sm-9">
       <div class="well">
         <p>Alex is a senior full-stack developer on the Microsoft platform working with it for 15+ years. He has an IT security and secure software development background on the one hand and entrepreneurship and innovation on the other, enabling him to build clean and secure systems (especially MVPs - minimum viable products) .</p>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-sm-3">
       <div class="well">
        <p>Jane</p>
        <img src="dev3.jpg" class="img-circle" height="55" width="55" alt="Avatar">
       </div>
     </div>
     <div class="col-sm-9">
       <div class="well">
         <p>Jane is a senior front-end web developer with over 15 years of experience at companies like Starbucks, Rosetta Stone, and Livemocha. She specializes in building front-ends for JavaScript web applications and has a deep expertise in the nuances of cross-platform development.</p>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-sm-3">
       <div class="well">
        <p>Anja</p>
        <img src="dev4.jpg" class="img-circle" height="55" width="55" alt="Avatar">
       </div>
     </div>
     <div class="col-sm-9">
       <div class="well">
         <p>Anja is an experienced developer who has worked both for large corporations and startups. After building financial trading applications for eight years as an engineer at Merrill Lynch, Anne founded and built LoudUp, a music-based social network that she designed, developed, and launched from the ground up. She specializes in .NET technologies and JavaScript.</p>
       </div>
     </div>
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
