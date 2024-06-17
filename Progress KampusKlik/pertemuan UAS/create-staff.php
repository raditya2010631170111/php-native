<?php include 'navbar.php'; ?>
  <head>
    <title>Create Staff</title>
  </head>
  
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              CREATE STAFF
            </div>
            <div class="card-body">
              <form action="store-staff.php" method="POST">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Staff" class="form-control">
                </div>
                <div class="form-group">
                  <label>Telefon</label>
                  <input type="text" name="telefon" placeholder="Masukkan Telefon Staff" class="form-control">
                </div>
                <div class="form-group">
                  <label>EMAIL</label>
                  <input type="email" name="email" placeholder="Masukkan Email Staff" class="form-control">
                </div>
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