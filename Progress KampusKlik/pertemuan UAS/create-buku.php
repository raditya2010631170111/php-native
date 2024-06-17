<?php include 'navbar.php'; ?>
  <head>
    <title>Create Buku</title>
  </head>
  
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              CREATE BUKU
            </div>
            <div class="card-body">
              <form action="store-buku.php" method="POST">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Buku" class="form-control">
                </div>
                <div class="form-group">
                  <label>ISBN</label>
                  <input type="text" name="isbn" placeholder="Masukkan ISBN Buku" class="form-control">
                </div>
                <div class="form-group">
                  <label>UNIT</label>
                  <input type="number" name="unit" placeholder="Masukkan Unit Buku" class="form-control">
                </div>
                <!--<div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="unit" placeholder="Masukkan Alamat Siswa” rows="4"></textarea>
                </div>-->
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include 'footer.php'; ?>
  </body>
</html>