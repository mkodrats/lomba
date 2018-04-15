<?php include 'header.php' ?>
<script src="../assets/plugins/ckeditor/ckeditor.js"></script>
    <div class="container" style="margin-top: 30px">
        <h2>Buat Pertanyaan</h2>
        <div class="row">
            <div class="col">
                <form class="form-group">
                    <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
                    <p></p>
                    <input class="btn btn-primary" type="submit" value="Buat Pertanyaan">
                </form>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
<?php include 'footer.php' ?>