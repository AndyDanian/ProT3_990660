        </main>
		<!-- End container -->

		<!-- Footer -->
		<div class="card-footer text-center my-footer-style">
			<a href="https://www.instagram.com/" class="btn">
				<img src="assets/imagenes/IG.png" alt="Bootstrap" width="20" height="20" class="d-inline-block align-text-top">
			</a>
			<a href="https://www.facebook.com/" class="btn">	
				<img src="assets/imagenes/FB.png" alt="Bootstrap" width="20" height="20" class="d-inline-block align-text-top">
			</a>
			<a href="https://ar.pinterest.com/" class="btn">
				<img src="assets/imagenes/PR.png" alt="Bootstrap" width="30" height="30" class="d-inline-block align-text-top">
			</a>
			<div>
				San Juan con Pelligrini 321  |
				relojes@email.com  |
				379 0 00 00 11
			</div>
			<div>Derechos de Autor &copy; | 2025 eJoLR </div>
		</div>
		<!-- End Footer -->

		<!-- JS necesario para el carousel-autoplay-->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		        <!-- JavaScript para actualizar el texto del botón -->
				<script>
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            const dropdownButton = document.getElementById('dropdownButton');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const selected = this.getAttribute('data-value');
                    dropdownButton.textContent = selected;
                });
            });
        </script>
	</div>
	<!-- End wrapper -->
</body>
</html>