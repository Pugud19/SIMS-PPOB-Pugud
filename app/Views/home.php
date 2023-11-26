<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

    <section>

    <div class="layanan-section">
    <div class="row">
        <div class="col-4 d-flex justify-content-around">
            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/pbb.png') ?>" class="profile-avatar" alt="login-side">
            <h5>PBB</h5>
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/listrik.png') ?>" class="profile-avatar" alt="login-side">
            <h5>Listrik</h5>
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/pulsa.png') ?>" class="profile-avatar" alt="login-side">
            <h5>Pulsa</h5>
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/pdam.png') ?>" class="profile-avatar" alt="login-side">
            <h5>PDAM</h5>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-around">
            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/pgn.png') ?>" class="profile-avatar" alt="login-side">
            <h5>PGN</h5>
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/televisi.png') ?>" class="profile-avatar" alt="login-side">
            <h5>Tv Langganan</h5>
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/musik.png') ?>" class="profile-avatar" alt="login-side">
            <h5>Musik</h5>
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/game.png') ?>" class="profile-avatar" alt="login-side">
            <h5>Voucher Game</h5>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-around">
            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/voucher-makanan.png') ?>" class="profile-avatar" alt="login-side">
            <h5>Voucher Makanan</h5>
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/kurban.png') ?>" class="profile-avatar" alt="login-side">
            <h5>Kurban</h5>
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/zakat.png') ?>" class="profile-avatar" alt="login-side">
            <h5>Zakat</h5>
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/paket-data.png') ?>" class="profile-avatar" alt="login-side">
            <h5>Paket Data</h5>
            </div>
        </div>
        
    </div>
    </div>

    </section>

    <div>

    <section>
        <h4>Temukan promo menarik</h4>
        
        <div class="row">
        <div class="col-6 d-flex justify-content-around">
            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/banner-1.png') ?>" class="profile-avatar" alt="login-side">
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/banner-2.png') ?>" class="profile-avatar" alt="login-side">
            </div>

        </div>
        <div class="col-6 d-flex justify-content-around">
            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/banner-3.png') ?>" class="profile-avatar" alt="login-side">
            </div>

            <div class="layanan-card text-center">
            <img src="<?= base_url('asset/banner-4.png') ?>" class="profile-avatar" alt="login-side">
            </div>

        </div>
        </div>
    </section>

    </div>


<?= $this->endSection() ?>