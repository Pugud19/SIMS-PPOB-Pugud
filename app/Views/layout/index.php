<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIMS PPOB</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="<?= base_url('css/home.css') ?>">

</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <div class="login-header text-center d-flex justify-content-center"><img src="<?= base_url('asset/Logo.png') ?>" class="logo-login" alt="login-side">
				<h4>SIMS PPOB</h4>
				</div>
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="<?= base_url('top-up') ?>">Top Up</a></li>
            <li class="menu-item hidden"><a href="#" target="_blank">Transaction</a>
            </li>
            <li class="menu-item hidden"><a href="#" target="_blank">Akun</a></li>
        </ul>
    </div>

    <div class="heroe">
        <div class="row">
            <div class="col-6">
            <div class="profile-section"><img src="<?= base_url('asset/profile-photo.png') ?>" class="profile-avatar" alt="login-side">
				<h5>Selamat Datang, 
                    <br>
                    <span>Kristanto Wibowo</span>
                </h5>
			</div>
            </div>
            <div class="col-6">
                <div class="saldo-section">
                    <div class="desc-saldo">
                        <span>saldo anda</span>
                        <h1>Rp.200.000</h1>
                        <span>lihat detail</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>

<!-- CONTENT -->

        <?= $this->renderSection('content') ?>


<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
