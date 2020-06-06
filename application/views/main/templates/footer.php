<!-- Newsletter -->

<!-- <div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                    <div class="newsletter_title_container">
                        <div class="newsletter_icon"><img src="images/send.png" alt=""></div>
                        <div class="newsletter_title">Berlangganan Produk Terbaru</div>
                        <div class="newsletter_text">
                            <p>dapatkan kabar produk terbaru dari kami</p>
                        </div>
                    </div>
                    <div class="newsletter_content clearfix">
                        <form action="#" class="newsletter_form">
                            <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                            <button class="newsletter_button coklat">Langganan</button>
                        </form>
                        <div class="newsletter_unsubscribe_link"><a href="#">berhenti</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Footer -->
<hr>
<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 footer_col">
                <div class="footer_column footer_contact">
                    <div class="logo_container">
                        <div class="logo_footer justify-content-start"><a href="<?= base_url(); ?>"><img src="<?= base_url('assets/templates/images/'); ?>logo.png" width="120px" alt=""></a></div>
                        <div class="logo"><a href="#">Media Ar-Raihan</a></div>
                    </div>
                    <div class="footer_phone">Address : Kraksaan - Kabupaten Probolinggo</div><br>
                    <div class="footer_title">Butuh Bantuan? Hubungi kami</div>
                    <div class="footer_phone">Phone : <a href="tel:+6285245667810">0852 4566 7810</a></div>
                    <div class="footer_phone">Email : <a href="mailto:mediaarraihan@gmail.com">mediaarraihan@gmail.com</a></div>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="font">Our Social Media</div>
                <div class="footer_sociall">
                    <ul>
                        <li><a href="#"><img src="<?= base_url('assets/images/') ?>icon/ig1.png" alt="" width=24></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/') ?>icon/wa.png" alt="" width=24></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/') ?>icon/line1.png" alt="" width=24></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/') ?>icon/shopee1.png" alt="" width=24></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/') ?>icon/bl1.jpg" alt="" width=24></a></li>
                    </ul>
                </div>
                <div class="font">Payment & Shipping</div>
                <div class="footer_social">
                    <ul class="gridpay">
                        <li style="background-image:url(<?= base_url('assets/images/icon/bni.png')?>);"></li>
                        <li style="background-image:url(<?= base_url('assets/images/icon/jne1.jpg')?>);"></li>
                        <li style="background-image:url(<?= base_url('assets/images/icon/jnt1.jpg')?>);"></li>
                        <li style="background-image:url(<?= base_url('assets/images/icon/tiki1.jpg')?>);"></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="footer_column">
                    <div class="newsletter_title">"Join Our New Product"</div>
                    <div class="newsletter_text">
                        <p>Get E-mail updates about our new product & special offers</p>
                    </div>
                    <br>
                    <div class="footer_list">
                        <form action="#" class="newsletter_form">
                            <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                            <button class="newsletter_button coklat">Subscribe</button>
                        </form>
                        <div class="newsletter_unsubscribe_link"><a href="#" data-toggle="modal" data-target="#uns">Unsubscribe</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="uns" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Unsubscribe</h3>
                    <a href="javascript:void(0)" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputem">Input your email to Unsubscribe</label>
                            <input id="inputem" type="email" class="form-control" required="required" placeholder="Enter your email address">
                        </div>
                        <hr>
                        <input type="submit" value="Unsubscribe" class="btn btn-primary coklat">
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-center">
                    <div class="copyright_content ">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved - Media Ar-Raihan
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>