<!-- Footer-->
<footer class="bg-<?php echo empty($this->session->userdata('theme_global')) ? 'dark' : $this->session->userdata('theme_global') ?> py-4 mt-auto">
	<div class="container">
		<div class="row align-items-center justify-content-between flex-column flex-sm-row">
			<div class="col-auto">
				<div class="small m-0">&copy; <?php echo date('Y') ?> Designer Mayara Ferreira</div>
			</div>
			<div class="col-auto">
				<div class="d-flex justify-content-center fs-2 gap-4">
					<a class="text-gradient" target="_blank" href="https://web.whatsapp.com/send?phone=5511943621390&text=Ol%C3%A1%2C%20venho%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20fazer%20um%20or%C3%A7amento%20para%20meu%20projeto"><i class="bi bi-whatsapp"></i></a>
					<a class="text-gradient" target="_blank" href="https://www.instagram.com/mah.rferreira/"><i class="bi bi-instagram"></i></a>
					<a class="text-gradient" target="_blank" href="https://www.facebook.com/mayara.ribeiro.7564"><i class="bi bi-facebook"></i></a>
					<a class="text-gradient" target="_blank" href="https://br.linkedin.com/in/mayara-ribeiro-ferreira-1823a4139"><i class="bi bi-linkedin"></i></a>
				</div>
			</div>
		</div>
</footer>

<span id="whatsapp-flutuante">
	<a href="https://web.whatsapp.com/send?phone=5511943621390&text=Ol%C3%A1%2C%20venho%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20fazer%20um%20or%C3%A7amento%20para%20meu%20projeto" target="_blank">
		<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#198754" class="bi bi-whatsapp" viewBox="0 0 16 16">
			<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
		</svg>
		</i>
	</a></i>
</span>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<!-- Bootstrap core JS-->
<script src="<?php echo base_url('assets/js/lightslider.js') ?>"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>

<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/js/lightgallery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/js/lg-fullscreen.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/js/lg-hash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/js/lg-autoplay.min.js"></script>
<script>
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})

	document.addEventListener('DOMContentLoaded', function() {
		var galeriaProjetos = document.querySelector('.galeria-projetos');
		if (galeriaProjetos) {
			lightGallery(galeriaProjetos, {
				selector: '.lightgallery-item'
			});
		}
	});

	lightGallery(document.getElementById('static-thumbnails'), {
		animateThumb: false,
		zoomFromOrigin: false,
		allowMediaOverlap: true,
		toggleThumb: true,
	});
</script>


<!-- Seu script -->
<script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>

</body>

</html>
