<!-- <?php include 'partials/login.php'?> -->
<!-- <?php include 'partials/signup.php' ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <style>
    body{
      background: url("images/_9.jpg") no-repeat;
      background-size: cover;
    }
    .subpart{
      width: 50vw;
      margin-top: vh;
      margin-right: 40vw;
    }
    
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

  <div class="container my-5">
    <div class="subpart p-5 text-center text-muted bg-secondary-subtle border border-dashed rounded-5">
      <!-- <button type="button" class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"></button> -->
      <!-- <svg class="bi mt-5 mb-3" width="48" height="48"><use xlink:href="#check2-circle"></use></svg> -->
      <h1 class="my-5 text-body-emphasis">Welcome To Our Blog System!</h1>
      <p class="col-lg-6 mx-auto mb-4">
      Discover a world of insights, creativity, and knowledge at your fingertips. Whether you're a seasoned enthusiast or a curious beginner, our blog system offers something for everyone.Start exploring today and let inspiration find you.
      </p>
      <h5 class="col-lg-6 mx-auto mb-4">
        Click, Login to start Exploring!
      </h5>
      <a class="btn btn-primary" href="/BlogSystem/signup.php" role="button">SignUp</a>
      <a class="btn btn-primary" href="/BlogSystem/login.php" role="button">Login</a>
      <p class="col-lg-6 mx-auto mb-4">
        Don't have an account? <a href="/BlogSystem/signup.php">SignUp to Continue</a>
      </p>
    </div>
  </div>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</html>