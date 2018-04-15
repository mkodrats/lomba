<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
  </head>
  <body style="background-color: #0abde3">
   <div class="login-page">
  <div class="form">
    <div class="login-form">
        <form action="../Fun/login.php" method="post">
          <input name="id" id="NIS" type="text" placeholder="NIS/NUPTK"/>
          <input name="password" id="password" type="password" placeholder="password"/>
            <input class="btn btn-primary" type="submit" name="login" value="Masuk">
        </form>
      <p class="message">Belum Terdaftar? <a id="quickstart-sign-up" href="daftar">Buat Akun Baru</a></p>
    </div>
  </div>
</div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src="assets/bootstrap/js/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
           crossorigin="anonymous"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>