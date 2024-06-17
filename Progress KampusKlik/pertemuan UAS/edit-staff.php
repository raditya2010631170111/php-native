<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM staff WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<?php include 'navbar.php'; ?>
  <head>
    <title>Edit Buku</title>
  </head>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT STAFF
            </div>
            <div class="card-body">
              <form action="update-staff.php" method="POST">
                <div class="form-group">
                  <label>Nama</label>
				  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Staff" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <div class="form-group">
                  <label>TELEFON</label>
                  <input type="text" name="telefon" value="<?php echo $row['telefon'] ?>" placeholder="Masukkan Telefon Staff" class="form-control">
                </div>
                <div class="form-group">
                  <label>EMAIL</label>
                  <input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Masukkan Email Email" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">UPDATE</button>
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