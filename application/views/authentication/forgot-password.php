  <div class="container">

  	<!-- Outer Row -->
  	<div class="row justify-content-center">

  		<div class="col-xl-10 col-lg-12 col-md-9">

  			<div class="card o-hidden border-0 shadow-lg my-5">
  				<div class="card-body p-0">
  					<!-- Nested Row within Card Body -->
  					<div class="row">
  						<div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
  						<div class="col-lg-6">
  							<div class="p-5">
  								<div class="text-center">
  									<h1 class="h4 text-gray-900 mb-2">Lupa Password Anda?</h1>
  									<p class="mb-4">Kami Mengerti, Hal Ini Bisa Terjadi. Kirim Email Anda Pada Form Dibawah Ini Untuk Mengatur Ulang Password.</p>
  								</div>
  								<?= $this->session->flashdata('message'); ?>
  								<form class="user" method="post" action="<?= base_url('authentication/forgotpassword'); ?>">
  									<div class="form-group">
  										<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Alamat Email " value="<?= set_value('email'); ?>">
  										<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
  									</div>

  									<button type="submit" class="btn btn-primary btn-user btn-block">
  										Atur Ulang Password
  									</button>


  								</form>
  								<hr>
  								<div class="text-center">
  									<a class="small" href="<?= base_url('authentication') ?>">Kembali Ke Halaman Login</a>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>

  		</div>

  	</div>

  </div>
