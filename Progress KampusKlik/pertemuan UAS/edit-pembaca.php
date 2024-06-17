<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM pembaca WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<?php include 'navbar.php'; ?>
  <head>
    <title>Edit Buku</title>
  </head>
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

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PEMBACA
            </div>
            <div class="card-body">
              <form action="update-pembaca.php" method="POST">
                <div class="form-group">
                  <label>Nama</label>
				  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <div class="form-group">
                  <label>NPM</label>
                  <input type="number" name="npm" value="<?php echo $row['npm'] ?>" placeholder="Masukkan NPM Mahasiswa" class="form-control">
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input type="text" name="nohp" value="<?php echo $row['nohp'] ?>" placeholder="Masukkan No HP" class="form-control">
                </div>
                <div class="form-group">
                  <label>Program Studi</label>
                  <input type="text" name="program_studi" value="<?php echo $row['program_studi'] ?>" placeholder="Masukkan Program Studi" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">UPDATE</button>
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