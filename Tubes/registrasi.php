<?php 
require 'functions.php';
if ( isset ($_POST["register"]) ) {

    if ( registrasi ($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
              </script>";
    } else {
        echo mysqli_error($conn);
    }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">
    <title>Halaman Registrasi</title>
  </head>
  <body>
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
                <h2 class="text-center">Registrasi</h2>
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
                    <div class="input-group">
                      <input id="password" name="password2" placeholder="Tulis ulang password" class="form-control" type="password" />
                    </div>
                  </div>
                  <div class="form-group">
                    <input name="register" class="btn btn-lg btn-primary btn-block btnForget" value="Daftar" type="submit" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- <form action="" method="post">

    <ul>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">konfirmasi password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Daftar</button>
        </li>
    </ul>

</form> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
    