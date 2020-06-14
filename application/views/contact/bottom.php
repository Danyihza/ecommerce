<script src="<?= base_url('assets/templates/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>styles/bootstrap4/popper.js"></script>
<script src="<?= base_url('assets/templates/'); ?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= base_url('assets/templates/'); ?>plugins/easing/easing.js"></script>
<script src="<?= base_url('assets/templates/'); ?>js/contact_custom.js"></script>
<?php if ($this->session->flashdata('contact')) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'success',
                title: 'Terkirim',
                text: '<?= $this->session->flashdata('contact'); ?>',
                confirmButtonColor: '#4b301e'
            })
        })
    </script>
<?php endif ?>
</body>

</html>