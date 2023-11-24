<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="">
	<div class="row">
		<div class="col-sm-6">

			<div class="login-card">
				<div class="login-header text-center d-flex justify-content-center"><img src="<?= base_url('asset/Logo.png') ?>" class="logo-login" alt="login-side">
				<h4>SIMS PPOB</h4>
				</div>

				<div class="desc-login text-center"><h2>Masuk atau buat akun untuk memulai</h2></div>
				<div class="container login-form">

					<?= view('Myth\Auth\Views\_message_block') ?>

					<form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>

						<?php if ($config->validFields === ['email']): ?>
						<div class="form-group">
							<input type="email"
								class="form-control login-input <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								name="login" placeholder="Masukkan email anda">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
						<?php else: ?>
						<div class="form-group">
							<input type="text"
								class="form-control login-input <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								name="login" placeholder="masukkan email anda">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
						<?php endif; ?>

						<div class="form-group">
							<input type="password" name="password"
								class="form-control login-input  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
								placeholder="masukkan password anda">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

						<?php if ($config->allowRemembering): ?>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input"
									<?php if (old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
						<?php endif; ?>

						<br>

						<button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
					</form>

					<br>

					<?php if ($config->allowRegistration) : ?>
					<div class="text-center">
					<p>belum punya aku? registrasi <a href="<?= url_to('register') ?>">di sini</a></p>
					</div>
					<?php endif; ?>
					<?php if ($config->activeResetter): ?>
					<p><a href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
					<?php endif; ?>
				</div>
			</div>

		</div>
		<!-- login side img -->
		<div class="col-sm-6">

			<img src="<?= base_url('asset/login-side.png') ?>" class="img-login" alt="login-side">

		</div>
	</div>
</div>

<?= $this->endSection() ?>