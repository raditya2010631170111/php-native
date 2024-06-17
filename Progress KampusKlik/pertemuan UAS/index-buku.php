<?php require_once("auth.php"); ?>
<?php include 'navbar.php'; ?>
  <head>
    <title>Data Buku</title>
  </head>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Daftar Buku Perpustakaan
            </div>
            <div class="card-body">
              <a href="create-buku.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH BUKU</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">UNIT</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM buku"); //buku is name of table
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['isbn'] ?></td>
                      <td><?php echo $row['unit'] ?></td>
                      <td class="text-center">
                        <a href="edit-buku.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary"><img width="21px" src="assets/img/pen-square-solid.svg" /></a>
                        <a href="destroy-buku.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger"><img width="21px" src="assets/img/trash-solid.svg" /></a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="assets/img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="create-logout.php">Logout</a></p>
                </div>
            </div>

            
        </div>
    </div>

<?php include 'footer.php'; ?>
  </body>
</html>