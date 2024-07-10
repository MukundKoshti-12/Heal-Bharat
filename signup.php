<?php 
$showSuccess = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    // $exists = false;
    // To check whether the username exists 
    // $existSql = "SELECT FROM * `user` WHERE username = '$username'";
    $existSql = "SELECT * FROM `user` WHERE `username` LIKE '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRow = mysqli_num_rows($result);
    if($numExistRow > 0){
        $showError = "Username Already Exists! ";
        // header('location: ../index.php');
    }
    else{
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if ($result) {
                $showSuccess = true;
            }
        }
        else {
            $showError = "Password doesn't matched";
            // header('location: ../index.php');
        }
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SignUp</title>
    <style>
        body{
            background: url("images/_8.jpg") no-repeat;
            background-size: cover;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 30vw;
            height: 80vh;
        }
        img{
            height: 10vh;
            width: 5vw;
            padding: 11px;
        }
        .bg{
            background: #e9c1e3;
        }
    </style>
</head>

<body>
    <?php 
        if ($showSuccess) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login , Want to login? <a href="/BlogSystem/login.php">Click here</a> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
            // header('location: index.php');
        }
        if ($showError) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>' . $showError .'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    ?>
    <div class="container my-5 ">
    <div class="container mt-4 bg-body">
    <img src="images/_1.jpg" alt="loading..." class="mt-4 rounded-circle">
    <h2 class="text-center mt-2">SignUp to continue...</h2>
        <form action="/BlogSystem/signup.php" method="post" class="mt-4">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="11" class="form-control border-3 border-secondary" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" maxlength="23" class="form-control border-3 border-secondary" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" maxlength="23" class="form-control border-3 border-secondary" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">Confirm Password and Password must be same.</div>
            </div>
            <button type="submit" class="btn btn-primary col-md-12">SignUp</button>
            <p class="mt-2">Already have an account? <a href="/BlogSystem/login.php">Click here</a> to Login</p>
        </form>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
