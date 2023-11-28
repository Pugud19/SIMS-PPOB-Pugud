<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>


    <section>
            <h4>Semua Transaksi</h4>
            
            <div class="row">
                <?php foreach ($topup as $t) : ?>
                    <div class="col-sm-12 transaction-card d-flex justify-content-between">
                        <div class="content-nominal">
                        <div class="transaction-nominal">Rp.<?= number_format($t['nominal'],2,",","."); ?></div>
                        <span class="transaction-time"><?= $t['created_at']; ?></span>
                        </div>
                        <div class="transaction-desc"><?= $t['keterangan']; ?></div>
                    </div>
                <?php endforeach ?>
            </div>



    </section>

<?= $this->endSection() ?>