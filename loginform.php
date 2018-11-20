<!DOCTYPE html>
<html lang="en">
<head>
  <title>@BaanPakr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">@BaaNPark</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="loginform.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
          
          
        </div>
        
      </div>
    </form>
    
  </div>
</nav>
<center>

<div class="container">
  <h2>Login to Account</h2>
  <form class="form-inline" action="/action_page.php">
    <div class="form-group">
 
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"><br><br>

      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"><br><br>
      <button type="submit" class="btn btn-default">Login</button>
      <button type="submit" href="index.php" class="btn btn-default">Cancle</button>
    </div>
    
  </form>
</div>

</body>
</html>
