<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM buku WHERE id = $id LIMIT 1";

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
              EDIT BUKU
            </div>
            <div class="card-body">
              <form action="update-buku.php" method="POST">
                <div class="form-group">
                  <label>Nama</label>
				  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Buku" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <div class="form-group">
                  <label>ISBN</label>
                  <input type="text" name="isbn" value="<?php echo $row['isbn'] ?>" placeholder="Masukkan ISBN Buku" class="form-control">
                </div>
                <div class="form-group">
                  <label>UNIT</label>
                  <input type="number" name="unit" value="<?php echo $row['unit'] ?>" placeholder="Masukkan Unit Buku" class="form-control">
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