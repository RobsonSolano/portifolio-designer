<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-<?php echo empty($this->session->userdata('theme_global')) ? 'dark' : $this->session->userdata('theme_global') ?> py-3">
	<div class="container px-3 px-md-2">
		<a class="navbar-brand" href="<?php echo base_url() ?>">
			<h4 class="logotipo">MF Designer</h4>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
				<li class="nav-item "><a class="nav-link <?php echo $modulo == 'inicio' ? 'active' : '' ?>" href="<?php echo base_url() ?>">Início</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url('#sobre') ?>">Sobre</a></li>
				<li class="nav-item"><a class="nav-link <?php echo $modulo == 'projetos' ? 'active' : '' ?>" href="<?php echo base_url('#projetos') ?>">Projetos</a></li>
				<li class="nav-item"><a class="nav-link <?php echo $modulo == 'contato' ? 'active' : '' ?>" href="<?php echo base_url('contato') ?>">Contato</a></li>
				<li class="nav-item d-flex align-items-center pt-2 ms-0">
					<div class="form-check form-switch ">
						<label class="form-check-label" for="flexSwitchCheckChecked">
							<span class="tema-dark-icon <?php echo empty($this->session->userdata('theme_global')) || $this->session->userdata('theme_global') == 'dark' ? 'd-block' : 'd-none' ?>">
								<i class="bi bi-moon"></i>
							</span>
							<span class="tema-light-icon <?php echo !empty($this->session->userdata('theme_global')) && $this->session->userdata('theme_global') == 'light' ? 'd-block' : 'd-none' ?>">
								<i class="bi bi-sun"></i>
							</span>
							<input style="height:0px;width:0px;border: none; box-shadow:none;" class="form-check-input alterar-tema" data-tema="<?php echo empty($this->session->userdata('theme_global')) ? 'dark' : $this->session->userdata('theme_global') ?> " type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php echo !empty($this->session->userdata('theme_global')) && $this->session->userdata('theme_global') == 'dark' ? 'checked' : '' ?> value="<?php echo !empty($this->session->userdata('theme_global')) && $this->session->userdata('theme_global') == 'dark' ? '1' : '0' ?>" style="accent-color: rgb(87, 30, 243);">

						</label>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>