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

        <header class="header">

            <!-- Top Bar -->



            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="<?= base_url(); ?>" style="font-size: 12;">Ar-Raihan</a></div>
                                <div class="logo"><img src="" alt=""></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-5 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
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
                                            <input type="submit" style="color:white;" class="header_search_button trans_300" value='Cari' name="search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">


                                <!-- Cart -->
                                <div class="cart" id="keranjangku">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#staticBackdrop"><img src="<?= base_url('assets/templates/'); ?>images/cart.png" alt="">
                                                <div class="cart_count"><span><?= count($this->cart->contents()) ?></span></div>
                                            </a>
                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="javascript:void(0)" data-toggle="modal" data-target="#staticBackdrop">Keranjang</a></div>
                                            <div class="cart_price">Rp. <?= number_format($this->cart->total(), 0, '.', '.') ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                        <div class="cat_menu_text">Kategori</div>
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

                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu ml-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="#">Beranda<i class="fas fa-chevron-down"></i></a></li>
                                        <!-- <li class="hassubs">
                                            <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="<?= base_url('blog'); ?>">Blog<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="contact.html">Kontak<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
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
                                        <input type="search" required="required" name="search2" class="page_menu_search_input" placeholder="Search for products...">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <li class="page_menu_item has-children">
                                        <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                            <li class="page_menu_item has-children">
                                                <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                <ul class="page_menu_selection">
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                                </ul>

                                <div class="menu_contact">
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570
                                    </div>
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
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
                            <button class="btn btn-primary col-12" id="tmbllanjut">Lanjutkan</button>
                        <?php endif; ?>
                        <div class="col-12" id="pemesanan">

                        </div>
                    </div>
                </div>
            </div>
        </div>