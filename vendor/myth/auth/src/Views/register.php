<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div>
    <div class="row">
        <div class="col-sm-6">

            <div class="register-card">
            <div class="login-header text-center d-flex justify-content-center"><img src="<?= base_url('asset/Logo.png') ?>" class="logo-login" alt="login-side">
				<h4>SIMS PPOB</h4>
				</div>

                <div class="desc-login text-center"><h2>Lengkapi data  untuk membuat akun</h2></div>
                <div class="container login-form">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <input type="email" class="form-control login-input <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="masukkan email anda" value="<?= old('email') ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control login-input <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="masukkan username" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control login-input <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="buat password" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <input type="password" name="pass_confirm" class="form-control login-input <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="konfirmasi password" autocomplete="off">
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Registrasi')?></button>
                    </form>

                    <br>
                    <div class="text-center">
					<p>sudah punya akun? login <a href="<?= url_to('login') ?>">di sini</a></p>
					</div>
                </div>
            </div>

        </div>


        <div class="col-sm-6">
			<img src="<?= base_url('asset/login-side.png') ?>" class="img-login" alt="login-side">

        </div>
    </div>
</div>

<?= $this->endSection() ?>
