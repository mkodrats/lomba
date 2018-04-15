<?php 
    // session_start();
    echo $_SESSION['id'];
    include 'header.php' ;
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="margin-top:2%">Pertannyaan Dari User</p>
                <div class="card" >
                    <div class="card-body">
                    <h4 class="card-title">Judul</h4>
                    <p class="card-text">Deskripsi</p>
                    </div>
                    <img class="card-img-bottom" src="http://via.placeholder.com/1366x300" alt="Card image" style="width:100%">
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:2%">
            <div class="col-md-12">
                <div class="card border-link">
                  <div class="card-body">
                    <h4 class="card-title">Bantu Jawab</h4>
                   
                    <div class="form-group">
                      <textarea name="" id="" cols="100%" rows="5"></textarea>
                      <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                      <small id="fileHelpId" class="form-text text-muted">Upload jawaban kamu</small>
                      <p></p>
                      <a href=""  class="btn btn-primary">Bantu Jawab</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php' ?>