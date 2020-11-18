<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>GoodStyle | Log In
    </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/goodstylelogo.jpg" style="margin-top: -30px;width:150px;height:100px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Products
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.html">Contact Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.blade.php">Log In</a>
              <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Log In</h1>
            </div>
          </div>
        
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post" action="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="username" type="text" class="form-control" id="name" placeholder="Username" required="">
                      </fieldset>
                    </div>
      
                    <div class="col-md-12">
                      <fieldset>
                        <input name="password" type="password" class="form-control" id="subject" placeholder="Password" required="">
                      </fieldset>
                    </div>  
                    <div class="col-md-12">
                      <fieldset>
                        <input type="submit" id="form-submit" class="button" name="login"></button>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
            <?php
                session_start();

                $conn = new mysqli('localhost','root','');
                $select = $conn->select_db('goodstyledb');

                if(isset($_POST['login'])){
                  $username = $_POST['username'];
                  $password = $_POST['password'];
  
                  $result = $conn->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
  
                  if($row = $result->fetch_assoc()){   /*if user details are found*/
                      $_SESSION['username'] = $row['username'];
                      $_SESSION['firstname'] = $row['firstname'];
                      header("Location: home.php");
                  }
                  else{
                      echo "You don't have any registered account.";
                  }
              }
            ?>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->

  


  </body>

</html>
