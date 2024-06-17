<?php require_once("auth.php"); ?>
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pembaca</title>
    <script>
        function validateNPM() {
            var npm = document.getElementById("npmSearch").value;
            if (isNaN(npm) || npm == "") {
                alert("NPM harus angka");
                return false;
            }
            if (npm.length < 13) {
                alert("NPM kurang dari 13");
                return false;
            }
            if (npm.length > 13) {
                alert("NPM lebih dari 13");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Daftar Pembaca Perpustakaan
                    </div>
                    <div class="card-body">
                        <a href="create-pembaca.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PEMBACA</a>
                        <form method="GET" onsubmit="return validateNPM()">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari berdasarkan NPM" id="npmSearch" name="npmSearch">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Program Studi</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include('koneksi.php');
                                    $no = 1;
                                    $where = "";
                                    if (isset($_GET['npmSearch']) && $_GET['npmSearch'] != "") {
                                        $npmSearch = $_GET['npmSearch'];
                                        $where = "WHERE npm LIKE '%$npmSearch%'";
                                    }
                                    $query = mysqli_query($connection, "SELECT * FROM pembaca $where");
                                    while ($row = mysqli_fetch_array($query)) {
                                ?>

                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['npm'] ?></td>
                                    <td><?php echo $row['nohp'] ?></td>
                                    <td><?php echo $row['program_studi'] ?></td>
                                    <td class="text-center">
                                        <a href="edit-pembaca.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary"><img width="21px" src="assets/img/pen-square-solid.svg" /></a>
                                        <a href="destroy-pembaca.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger"><img width="21px" src="assets/img/trash-solid.svg" /></a>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
</body>
</html>
