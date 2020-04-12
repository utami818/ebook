<?php
session_start();
if($_SESSION['login_status'] == false){
    header("location: index.php");
}
$nama = $_SESSION['nama'];


?>
<?php require_once('../asset/head.php');?>
    <title>E-book Airlangga <?php echo $nama;?></title>
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id=mainNav>
        <div class="container">
            <a class="navbar-brand" href="#">E-book Modul</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#terbaru">Terbaru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sound</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalkelas">Pilih Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" href="../logout.php">Logout</a>
                </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="masthead">
        <div class="container">
          <div class="intro-text">   
            <div class="intro-lead-in"> <?php echo "Selamat Datang $nama di E-book Modul"; ?> </div>
                <div class="row" id="card">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">SBMPTN</h5>
                        <h6 class="card-subtitle mb-2">SAINTEK</h6>
                        <p class="card-text"><img src="../images/coversbmipa.jpeg" alt=""></p>
                        <a href="../book/sbmptn_saintek.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">SBMPTN</h5>
                        <h6 class="card-subtitle mb-2">SOSHUM</h6>
                        <p class="card-text"><img src="../images/coversbmips.jpeg" alt=""></p>
                        <a href="../book/sbmptn_soshum.html" class="card-link">Baca</a>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalkelas">Pilih Kelas</button><br/>
          </div>
        </div>
    </header>
    <section class="page-section" id="terbaru">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">E-Book Terbaru</h2>
                  <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="row" id="card">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPA</h5>
                        <h6 class="card-subtitle mb-2">IPA XII</h6>
                        <p class="card-text"><img src="../images/coversbmipa.jpeg" alt=""></p>
                        <a href="#" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPS</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/coversbmips.jpeg" alt=""></p>
                        <a href="#" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/cover.jpg" alt=""></p>
                        <a href="#" class="card-link">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">  
        <div class="modal fade" id="exampleModalkelas">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pilih Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <br/>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                        <a href="kelas4.php" class="btn btn-outline-success">kelas 4</a>
                        <a href="kelas5.php" class="btn btn-outline-success">kelas 5</a>
                        <a href="kelas6.php" class="btn btn-outline-success">kelas 6</a>
                        <a href="kelas7.php" class="btn btn-outline-success">kelas 7</a>
                        <a href="kelas8.php" class="btn btn-outline-success">kelas 8</a>
                        <a href="kelas9.php" class="btn btn-outline-success">kelas 9</a>
                        <a href="kelas10.php" class="btn btn-outline-success">kelas 10</a>
                        <a href="kelas11.php" class="btn btn-outline-success">kelas 11</a>
                        <a href="kelas12.php" class="btn btn-outline-success">kelas 12</a>
                        <br>
                        <!-- <a href="UNBK.php" class="btn btn-outline-success">UNBK</a> -->
                        <a href="sbmptn.php" class="btn btn-outline-success">SBMPTN</a>
                        </div>
                            <br>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>   
    </div>
<?php require_once('../asset/footer.php');
require_once('../asset/script.php');
?> 