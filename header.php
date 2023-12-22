
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Online Form</title>

    <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-GLhlTQ8iKIoZ4fuGA5YFQqFjZ7v4xrRI8U6uB6YOSpqU4K1giirJizoP0xN1a1d5ugGz9G3PeG2+lEmfN7Rme5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/design.css">
    <link rel="stylesheet" href="assets/css/form.css">
  </head>

  <body>

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
        <div class="col-md-8 col-xs-12">
          <ul class="left-info">
            <li><a href="mailto:ipsis@uitm.edu.my"><i class="fa fa-envelope"></i> ipsis@uitm.edu.my</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="right-icons">
            <li><a href="https://www.facebook.com/IGSUiTM" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/ipsis.uitm/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/c/IPSisUiTMChannel/featured" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>

    <header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/uitm.png" class="img-fluid" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <%= (request.getRequestURI().endsWith("index.php")) ? "active" : "" %>
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only <%= (request.getRequestURI().endsWith("index.php")) ? "active" : "" %></span>
                        </a>
                    </li>
                    <li class="nav-item <%= (request.getRequestURI().endsWith("form.php")) ? "active" : "" %>
                        <a class="nav-link" href="form.php">Form</a>
                        <span class="sr-only <%= (request.getRequestURI().endsWith("form.php")) ? "active" : "" %></span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    
  