<?php include 'navbar.php'; ?>
<?php
	// session_start();
	// if(!isset($_SESSION['email'])){
		// header("Location: login.php")
	// }
// ?>
  <head>
    <title>Perpustakaan</title>
  </head>
  
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat datang di Aplikasi Perpustakaan</h1>
                        <p>Bergabunglah bersama jutaan orang lainnya...</p>
                    </div>
                    <div class="col-md-4">
                        <a href="create-login.php" class="btn btn-secondary">Masuk</a>
                        <a href="create-register.php" class="btn btn-success">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img img-responsive" src="assets/img/connect.png" />
                </div>
            </div>
        </div>
    </section>
	
<?php include 'footer.php'; ?>
  </body>
</html>