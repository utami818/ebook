<?php require_once('../asset/head.php');?>
    <title>E-book Airlangga SBMPTN</title>
</head>
<body id="page-top">
<?php require_once('../asset/navbar.php');?>    
    <!-- Header -->
    <header class="masthead" id="umum">
        <div class="container">
          <div class="intro-text">   
            <div class="intro-lead-in"> E-book SBMPTN </div>
            <div class="intro-heading">SAINTEK</div>
                <div class="row" id="card">
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">SBMPTN 2020</h5>
                        <h6 class="card-subtitle mb-2">SAINTEK</h6>
                        <p class="card-text"><img src="../images/coversbmipa.jpeg" alt=""></p>
                        <a href="../book/sbmptn_saintek.html" class="card-link">Baca</a>
                        </div>
                    </div>
                
                </div>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalkelas">Pilih Kelas</button><br/> -->
                <a class="btn btn-primary"href="index.php">Kembali</a>
          </div>
        </div>
    </header>
    <section class="page-section" id="terapan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">SOSHUM</h2>
                  <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="row" id="card">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">SOSHUM 2020</h5>
                        <h6 class="card-subtitle mb-2">SOSHUM</h6>
                        <p class="card-text"><img src="../images/coversbmips.jpeg" alt=""></p>
                        <a href="../book/sbmptn_soshum.html" class="card-link">Baca</a>
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
                        <!-- <br><a href="UNBK.php" class="btn btn-outline-success">UNBK</a> -->
                        <br><a href="sbmptn.php" class="btn btn-outline-success">SBMPTN</a>
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
