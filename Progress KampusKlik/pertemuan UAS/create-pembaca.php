<?php include 'navbar.php'; ?>
<head>
  <title>Create Pembaca</title>
</head>
<body>
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            CREATE PEMBACA
          </div>
          <div class="card-body">
            <form id="createBukuForm" action="store-pembaca.php" method="POST" onsubmit="return validateForm()">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Buku" class="form-control">
              </div>
              <div class="form-group">
                <label>NPM</label>
                <input type="number" name="npm" placeholder="Masukkan NPM Mahasiswa" class="form-control">
              </div>
              <div class="form-group">
                <label>No HP</label>
                <input type="text" name="nohp" placeholder="Masukkan No HP" class="form-control">
              </div>
              <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="program_studi" placeholder="Masukkan Program Studi" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">SIMPAN</button>
              <button type="reset" class="btn btn-warning">RESET</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function validateForm() {
      var npm = document.forms["createBukuForm"]["npm"].value;
      if (npm.length < 13) {
        alert("NPM kurang dari 13");
        return false;
      } else if (npm.length > 13) {
        alert("NPM lebih dari 13");
        return false;
      }
      return true;
    }
  </script>

<?php include 'footer.php'; ?>
</body>
</html>
