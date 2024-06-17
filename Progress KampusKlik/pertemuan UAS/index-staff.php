<?php require_once("auth.php"); ?>
<?php include 'navbar.php'; ?>
  <head>
    <title>Data Staff</title>
  </head>
  
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Daftar Staff Perpustakaan
            </div>
            <div class="card-body">
              <a href="create-staff.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH STAFF</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Email</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM staff"); //buku is name of table
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['telefon'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td class="text-center">
                        <a href="edit-staff.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary"><img width="21px" src="assets/img/pen-square-solid.svg" /></a>
                        <a href="destroy-staff.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger"><img width="21px" src="assets/img/trash-solid.svg" /></a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

<?php include 'footer.php'; ?>
  </body>
</html>