<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

    <section>
        <div class="profile-section">
        <h5>Silakan masukan
            <br>
            <span>Nominal Top Up</span>
        </h5>
        </div>
        
        <form action="<?= base_url('top-up') ?>" method="post" >
        <?= csrf_field(); ?>
        <div class="row">
            <div class="col-8">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" class="form-control" name="nominal"  placeholder="Masukkan nominal Top Up">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Top Up</button>
            </div>
            <div class="col-4">
                <div class="row mb-3">
                <button type="button" class="btn btn-outline-secondary mx-2 px-3">Rp.10.000</button>
                <button type="button" class="btn btn-outline-secondary mx-2 px-3">Rp.20.000</button>
                <button type="button" class="btn btn-outline-secondary mx-2 px-3">Rp.50.000</button>
                </div>
                <div class="row">
                <button type="button" class="btn btn-outline-secondary mx-1 px-3">Rp.100.000</button>
                <button type="button" class="btn btn-outline-secondary mx-1 px-3">Rp.250.000</button>
                <button type="button" class="btn btn-outline-secondary mx-1 px-3">Rp.500.000</button>
                </div>
            </div>
        </div>
        </form>
    </section>


<?= $this->endSection() ?>