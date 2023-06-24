<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Green</h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>

        <div class="row">

            <div class="col-md-4">
                <h3 class="text-light">Contato</h3>
                <a href="#">
                    <h6 class="text-light mt-3">Whatsapp</h6>
                </a>
                <a href="#">
                    <h6 class="text-light mt-3">Contate-nos pelo Chat</h6>
                </a>
                <a href="#">
                    <h6 class="text-light mt-3">Contate-nos pelo E-mail</h6>
                </a>
                <a href="#">
                    <h6 class="text-light mt-3">Siga-me no instagram</h6>
                </a>
            </div>

            <div class="col-md-4">
                <h3 class="text-light">Institucional</h3>
                <a href="#">
                    <h6 class="text-light mt-3">Termos de Uso</h6>
                </a>
                <a href="#">
                    <h6 class="text-light mt-3">Políticas de Cookies</h6>
                </a>
                <a href="#">
                    <h6 class="text-light mt-3">Políticas de Privacidade</h6>
                </a>
                <a href="#">
                    <h6 class="text-light mt-3">Central de Atendimentos</h6>
                </a>
            </div>

            <div class="col-md-4">
                <h3 class="text-light">Facebook</h3>
                <div class="fb-page" data-href="https://www.facebook.com/gustavodornelasphotoevideo" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/gustavodornelasphotoevideo" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gustavodornelasphotoevideo">Gustavo Dornelas - Photo &amp; Vídeo</a></blockquote>
                </div>

            </div>

        </div>

        <div class="social-links mt-5">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Green</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
            <p class="text-light">Desenvovido por <a href="https://bootstrapmade.com/">Gustavo Dornelas</a> </p>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!--Mapa Google Maps-->
<script type='text/javascript' src='https://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'>
</script>


<!--ConfiguraÃ§Ãĩes do Google Maps-->
<script type='text/javascript'>
    function init_map() {
        var myOptions = {
            zoom: 17,
            // Coordenadas -18.952601519745148, -46.99576720203604
            center: new google.maps.LatLng(-18.952601519745148, -46.99576720203604),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({
            map: map,
            // Coordenadas -18.952601519745148, -46.99576720203604
            position: new google.maps.LatLng(-18.952601519745148, -46.99576720203604),
            icon: './assets/imagens/logo_maps.png'

        });

        infowindow = new google.maps.InfoWindow({
            content: '<strong>Gustavo Dornelas - Photo & Video</strong><br>Rua Afonso Pena, 1112<br>Marciano Brandão<br>Patrocí­    nio/MG'

        });

        infowindow.open({
            shouldFocus: false,
            anchor: marker

        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);

        });

    }
    google.maps.event.addDomListener(window, 'load', init_map);
</script>


</body>

</html>