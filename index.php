<!doctype html>
<html lang="en">

<head>
    <title>Portal Belajar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#74b9ff">
        <a class="navbar-brand" href="#">Portal Belajar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="view/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daftar">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="img-responsive" src="assets/img/1.png" alt="">
            </div>
            <div class="carousel-item">
                <img class="img-responsive" src="http://via.placeholder.com/1366x500" alt="">
            </div>
            <div class="carousel-item">
                <img class="img-responsive" src="http://via.placeholder.com/1366x500" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container" style="margin-top:2%">
        <center style="margin-bottom:2%">
            <h2>Fitur</h2>
        </center>
        <div class="row">
            <div class="col-lg-6">
                <div class="card text-centert">
                    <img src="assets/img/f1.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        </di>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card text-centert">
                    <img src="assets/img/f2.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        </di>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "View/footer.php" ?>

    <script>
    </script>