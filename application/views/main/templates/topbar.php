</head>
<style>
    .button_kategori_sidebar:hover {
        background: none;
        color: #0e8ce4;
        border: none;
        margin: 0;
        padding: 0;
        cursor: pointer;
    }

    .button_kategori_sidebar {
        background: none;
        border: none;
        margin: 0;
        padding: 0;
        cursor: pointer;
    }
</style>

<body>

    <div class="super_container">

        <!-- Header -->



        <div class="fragment">
            <!-- Top Bar -->


            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Logo -->
                        <div class="col-lg-3 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/'); ?>header.png" class="logo-banner" width="292px" alt=""></a></div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                    <li>
                                        <a href="<?= base_url() ?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('blog') ?>">Articles</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('contact') ?>">Contact</a>
                                    </li>
                                </ul>
                            </div>
                                    <div class="header_search_form_container">
                                        <form action="<?= base_url('main/search') ?>" method="POST" class="header_search_form">
                                            <input type="text" autocomplete="off" class="header_search_input" name="keyword" placeholder="Search for products...">

                                            <div class="">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc"></span>
                                                    <ul name="kategori" class="custom_list clc">
                                                    </ul>
                                                </div>
                                            </div>
                                            <input type="submit" style="color:white;" class="header_search_button trans_300 coklat" value='Search' name="search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Wishlist -->
                        <div class="col-lg-1 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">


                                <!-- Cart -->
                                <div class="cart" id="keranjangku">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#staticBackdrop"><img src="<?= base_url('assets/templates/'); ?>images/cart.png" alt="">
                                                <div class="cart_count coklat"><span><?= count($this->cart->contents()) ?></span></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header class="header">
            <!-- Main Navigation -->
            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="main_nav_content d-flex flex-row">

                                <!-- Categories Menu -->

                                <div class="cat_menu_container">
                                    <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                        <div class="cat_burger"><span></span><span></span><span></span></div>
                                        <div class="cat_menu_text">Category</div>
                                    </div>

                                    <ul class="cat_menu">
                                        <?php foreach ($kategori as $kat) : ?>
                                            <li>
                                                <form action="<?= base_url('main/search') ?>" method="post">
                                                    <input type="hidden" name="form_sidebar" value="<?= $kat['id_kategori'] ?>">
                                                    <a><input class="button_kategori_sidebar" name="button_kategori" value="<?= $kat['nama_kategori']; ?>" type="submit"></a>
                                                </form>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <!-- <div class="col-lg-5 col-12 text-lg-left text-right search-bar">
                                    <div class="header_search" style="height: 60px;left: 1px;">
                                        <div class="header_search_content">
                                            <div class="header_search_form_container">
                                                <form action="<?= base_url('main/search') ?>" method="POST" class="header_search_form">
                                                    <input type="text" autocomplete="off" class="header_search_input" name="keyword" placeholder="Search for products...">

                                                    <div class="">
                                                        <div class="custom_dropdown_list">
                                                            <span class="custom_dropdown_placeholder clc"></span>
                                                            <ul name="kategori" class="custom_list clc">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <input type="submit" style="color:white;" class="header_search_button trans_300 coklat" value='Cari' name="search">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- Main Nav Menu -->

                                <!-- <div class="main_nav_menu ml-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="<?= base_url(); ?>">Beranda<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="<?= base_url('blog'); ?>">Blog<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="contact.html">Kontak<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div> -->

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">search</div>
                                            <i class="fa fa-search text-light"></i>
                                            <!-- <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Menu -->

            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="page_menu_content">

                                <div class="page_menu_search">
                                    <form action="<?= base_url('main/search') ?>" method="post">
                                        <input type="search" required="required" name="search2" class="page_menu_search_input" placeholder="Search for products..." autofocus>
                                        <input type="submit" class="btn btn-primary col-12 kuning" style="margin-top: 10px" value="Search">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <li class="page_menu_item has-children">
                                        <a href="#">Category<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <?php foreach ($kategori as $kat) : ?>
                                                <li>
                                                    <form action="<?= base_url('main/search') ?>" method="post">
                                                        <input type="hidden" name="form_sidebar" value="<?= $kat['id_kategori'] ?>">
                                                        <a><input style="color: white;" class="button_kategori_sidebar" name="button_kategori" value="<?= $kat['nama_kategori']; ?>" type="submit"></a>
                                                    </form>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="<?= base_url(); ?>">Home<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item"><a href="<?= base_url('blog'); ?>">Articles<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="<?= base_url('contact'); ?>">contact<i class="fa fa-angle-down"></i></a></li>
                                </ul>

                                <div class="menu_contact">
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div><a href="tel:+6285245667810">0852 4566 7810</a>
                                    </div>
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:mediaarraihan@gmail.com">mediaarraihan@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel">Keranjang</h3>
                        <a href="javascript:void(0)" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div style="overflow-y: auto;">
                            <table id="table-cart" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Cover Buku</th>
                                        <th scope="col">Judul Buku</th>
                                        <th scope="col">Harga Satuan</th>
                                        <th scope="col">Kuantitas</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody id="detail_cart">

                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <?php if ($this->cart->contents()) : ?>
                            <button class="btn btn-primary col-12 coklat" id="tmbllanjut">Lanjutkan</button>
                        <?php endif; ?>
                        <div class="col-12" id="pemesanan">

                        </div>
                    </div>
                </div>
            </div>
        </div>