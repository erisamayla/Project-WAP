<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ties Pharmacy App</a>

            <!-- Search Bar -->
            <div class="d-flex justify-content-between align-items-center">
                <div class="search-box me-3" style="position: relative; max-width: 400px; width: 100%;">
                    <i class="fas fa-search search-icon" 
                        style="position: absolute; top: 50%; left: 0.75rem; transform: translateY(-50%); color: 828282;"></i>
                    <input type="text" class="form-control" placeholder="Cari Obat..." aria-label="Cari Obat" 
                        style="padding-left: 2.5rem;">
                </div>
            </div>

            <!-- Button Login and SignUp -->
            <div class="d-flex gap-3 ms-auto">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- Jika pengguna sudah login -->
                    <button class="btn btn-outline-light custom-margin" type="button">Profile</button>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                <?php else: ?>
                    <!-- Jika pengguna belum login -->
                    <button href="login.php" class="btn btn-outline-light custom-margin" type="button">Masuk
                    <a href="login.php">
                    </button>
                    <button href="register.php" class="btn btn-light custom-margin" type="button">Daftar
                    <a href="register.php">
                    </button>
                <?php endif; ?>
            </div>

            <!-- Button Login and SignUp -->
            <div class="d-flex gap-3 ms-auto">
                <a href="login.php" class="btn btn-outline-primary custom-margin">Login</a>
                <a href="register.php" class="btn btn-primary">SignUp</a>
            </div>
        </div>
    </nav>

    <style>
        /* Navbar custom styling */
        .navbar-custom {
            background-color: #F06292; /* Warna pink muda */
            color: white;
        }

        /* Navbar Brand */
        .navbar-custom .navbar-brand {
            color: white;
            font-weight: bold;
        }

        /* Navbar Button - Outline */
        .navbar-custom .btn-outline-light {
            border-color: #ffffff; /* Warna border putih */
            color: #ffffff; /* Warna teks putih */
        }

        /* Hover effect for outlined button */
        .navbar-custom .btn-outline-light:hover {
            background-color: #ffffff; /* Warna latar belakang putih saat hover */
            color: #F06292; /* Teks menjadi pink muda saat hover */
        }

        /* Button utama Daftar */
        .navbar-custom .btn-light {
            background-color: #ffffff; /* Warna tombol putih */
            color: #F06292; /* Teks pink muda */
            border-color: #ffffff;
        }

        /* Hover effect for primary button */
        .navbar-custom .btn-light:hover {
            background-color: #F06292; /* Warna latar belakang pink muda saat hover */
            color: #ffffff; /* Teks menjadi putih saat hover */
        }

        /* Styling untuk container tombol */
        .d-flex {
            display: flex;
            gap: 1rem;
            align-items: center;
            justify-content: flex-end;
        }

        /* Optional: Jika ingin border-radius pada tombol */
        .navbar-custom .btn {
            border-radius: 30px;
        }
    </style>
</header>