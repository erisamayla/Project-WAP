<!doctype html>
<html lang="en">
<head>
    <?php include('header.php') ?>
</head>

<body>
    <?php include('navbar.php') ?>

    <div class="d-flex gap-3 ms-auto mt-3">
        <a href="login.php" class="btn btn-outline-primary custom-margin">Masuk</a>
        <a href="register.php" class="btn btn-primary">Daftar</a>
    </div>

    <main role="main " class="container">
        <?php include('welcome_message.php') ?>
        <?php 
            include('database/pharmacy.php');

            $data = new Pharmacy();
        ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h3>Produk Terlaris</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/tolakangin.jpg" class="card-img-top img-fluid" alt="Obat-TolakAngin">
                        <div class="card-body">
                            <p class="card-title"><small>Tolak Angin Cair+madu 15ml Sach 1 Box Isi 5 Sachet (per Dos)</small></p>
                            <p class="card-text"><strong>Rp 21.803,- / Dos</strong></p>
                            <div class="row">
                                <div class="col-12">
                                    <i class='bx bxs-check-square text-info'></i> <small class="text-secondary">Kota Depok</small>
                                </div>
                                <div class="col-12">
                                    <i class='bx bxs-star text-warning'></i> <small class="text-secondary"> 4.9 | Terjual 31 rb</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/promag.jpg" class="card-img-top img-fluid" alt="Obat-Promag">
                        <div class="card-body">
                            <p class="card-title"><small>Promag Tablet Per Strip Isi 12 Tablet (per Strip)</small></p>
                            <p class="card-text"><strong>Rp 8.892,- / Strip</strong></p>
                            <div class="row">
                                <div class="col-12">
                                    <i class='bx bxs-check-square text-info'></i> <small class="text-secondary">Kota Depok</small>
                                </div>
                                <div class="col-12">
                                    <i class='bx bxs-star text-warning'></i> <small class="text-secondary"> 4.9 | Terjual 31 rb</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/sanmol.jpeg" class="card-img-top img-fluid" alt="Obat-Sanmol">
                        <div class="card-body">
                            <p class="card-title"><small>Sanmol Tablet 500mg Per Strip Isi 4 Tablet (per Strip)</small></p>
                            <p class="card-text"><strong>Rp 2.383,- / Strip</strong></p>
                            <div class="row">
                                <div class="col-12">
                                    <i class='bx bxs-check-square text-info'></i> <small class="text-secondary">Kota Depok</small>
                                </div>
                                <div class="col-12">
                                    <i class='bx bxs-star text-warning'></i> <small class="text-secondary"> 4.9 | Terjual 31 rb</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/bodrex.jpg" class="card-img-top img-fluid" alt="Obat-Bodrex">
                        <div class="card-body">
                            <p class="card-title"><small>Bodrex Tablet (per Strip)</small></p>
                            <p class="card-text"><strong>Rp 5.099,- / Strip</strong></p>
                            <div class="row">
                                <div class="col-12">
                                    <i class='bx bxs-check-square text-info'></i> <small class="text-secondary">Kota Depok</small>
                                </div>
                                <div class="col-12">
                                    <i class='bx bxs-star text-warning'></i> <small class="text-secondary"> 4.9 | Terjual 31 rb</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('footer.php') ?>

    <?php include('scripts.php') ?>
</body>

</html>