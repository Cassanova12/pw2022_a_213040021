<?php 
session_start();

if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';
if( isset($_POST["login"]) ) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username 
    if( mysqli_num_rows($result) == 1 ) {

        // cek password 
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session 
            $_SESSION["login"] = true;


            header("Location: index.php");
            exit;
        }
    }

    $error = true;
    

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="src/style.css" />
    <title>Halaman Login</title>
  </head>
  <body class="bg-secondary bg-gradient">
    <!--  -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container forget-password">
      <div class="row">
        <div class="col-md-12 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-center">
                <img class="rounded-circle" src="img/login.png" alt="car-key" border="0" />
                <h2 class="text-center">LOGIN</h2>
                <p></p>
                <form autocomplete="off" class="form" action="" method="post">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group">
                        <input id="username" name="username" placeholder="Username" class="form-control" type="text" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input id="password" name="password" placeholder="Password" class="form-control" type="password" />
                    </div>
                  </div>
                  <div class="form-group">
                    <input name="login" class="btn btn-lg btn-primary btn-block btnForget" value="Masuk" type="submit" />
                  </div>
                  <?php if ( isset($error) ) : ?>
                  <p style="color: red; font-style: italic">USERNAME / PASSWORD SALAH!!!</p>
                  <?php endif; ?>
                  <a class="btn btn-sm btn-primary" href="registrasi.php">Belum punya akun?</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <!-- <div class="container mt-5">
    <h1 class="text-center fst-italic">Halaman Login</h1>
      <div class="row justify-content-center">
        <div class="col-sm-8 border hg">
          <form action="" method="post" class="">
            kokokookoko
            <div class="m-3">
              awal username
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="username">username :</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="username" id="username" />
                </div>
              </div>
              akhir username
              awal pw
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="password">password :</label>
                <div class="col-sm-10">
                  <input class="form-control" type="password" name="password" id="password" />
                </div>
              </div>
              akhir pw
              <button class="btn btn-outline-danger" type="submit" name="login">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
