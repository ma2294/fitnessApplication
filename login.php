<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Running Pal</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="main.js"></script>
    <script src="login.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="img/logo.png"></a>
        <button class ="navbar-toggler" type="button"
         data-toggle="collapse" data-target="#navbarResponsive">
          <span class ="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class = "navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" a href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#register">Register</a>
            </li>
            <li class="login-user">
              <a class="btn btn-outline-primary btn-lg" a href="#">login.html</a>
            </li>

          </div>
        </div>
        </nav>



        <div class="container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <form class="form-signin" action="signup.php" method="POST">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Sign Up</button>
        </form><!-- /form -->
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->

<!-- Footer -->
<?php
  $sql = "SELECT * FROM users; ";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['user_pwd'] . "<br />";
    }
  }
  ?>

      <hr />

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
            Marc Adlington</a>
            </div>
            <!-- Copyright -->

      <!-- Footer -->
      </html>
