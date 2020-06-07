<script src="<?= base_url('assets/ckeditor/'); ?>ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>styles/bootstrap4/popper.js"></script>
<script src="<?= base_url('assets/templates/'); ?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/slick-1.8.0/slick.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/easing/easing.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>js/custom.js"></script>
<!-- <script src="<?= base_url('assets/templates/'); ?>js/shop_custom.js"></script> -->

<script>
    $('.carousel').carousel()
</script>

<script>
    $('.my-banner').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<?php if ($this->session->flashdata('subscribe')) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'success',
                title: 'Sukses...',
                text: 'Nantikan Produk Terbaru Kami'
            })
        })
    </script>
<?php endif ?>


</body>

</html>