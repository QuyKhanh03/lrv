@extends('client.layout.app')
@section('content')

    <!-- ========================= Category Style ========================== -->
    <section class="middle">
        <div class="container">
            <div class="row no-gutters exlio_gutters">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="single_cats">
                        <a href="#" class="cards card-overflow card-scale lg_height">
                            <div class="bg-image" style="background:url({{ asset('templates/client/assets/img/b-8.png') }})no-repeat;"></div>
                            <div class="ct_body">
                                <div class="ct_body_caption left">
                                    <h2 class="m-0 ft-bold lh-1 fs-md text-upper">Women Clothes</h2>
                                    <span>3272 Items</span>
                                </div>
                                <div class="ct_footer left">
                                    <span class="stretched-link fs-md">Browse Items <i
                                            class="ti-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="single_cats">
                        <a href="#" class="cards card-overflow card-scale md_height">
                            <div class="bg-image" style="background:url({{ asset('templates/client/assets/img/b-5.png') }})no-repeat;"></div>
                            <div class="ct_body">
                                <div class="ct_body_caption left">
                                    <h2 class="m-0 ft-bold lh-1 fs-md text-upper">Men's Wear</h2>
                                    <span>7632 Items</span>
                                </div>
                                <div class="ct_footer left">
                                    <span class="stretched-link fs-md">Browse Items <i
                                            class="ti-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <!-- row -->
                    <div class="row no-gutters">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="single_cats">
                                <a href="#" class="cards card-overflow card-scale md_height">
                                    <div class="bg-image" style="background:url({{ asset('templates/client/assets/img/b-3.png') }})no-repeat;"></div>
                                    <div class="ct_body">
                                        <div class="ct_body_caption left">
                                            <h2 class="m-0 ft-bold lh-1 fs-md text-upper">Kid's Wear</h2>
                                            <span>4072 Items</span>
                                        </div>
                                        <div class="ct_footer left">
                                            <span class="stretched-link fs-md">Browse Items <i
                                                    class="ti-arrow-circle-right"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single_cats">
                                <a href="#" class="cards card-overflow card-scale lg_height">
                                    <div class="bg-image" style="background:url({{ asset('templates/client/assets/img/b-7.png') }})no-repeat;"></div>
                                    <div class="ct_body">
                                        <div class="ct_body_caption left">
                                            <h2 class="m-0 ft-bold lh-1 fs-md text-upper">Men's Jackets</h2>
                                            <span>9652 Items</span>
                                        </div>
                                        <div class="ct_footer left">
                                            <span class="stretched-link fs-md">Browse Items <i
                                                    class="ti-arrow-circle-right"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /row -->

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Category Style =============================== -->

    <!-- ======================= Products Lists ======================== -->
    <section class="space min pt-0">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4"
                        id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="all-tab" href="#all" data-toggle="tab" role="tab"
                                aria-controls="all" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="#mens" id="mens-tab" data-toggle="tab" role="tab"
                                aria-controls="mens" aria-selected="false">Men's</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#women" id="women-tab" data-toggle="tab" role="tab"
                                aria-controls="women" aria-selected="false">Women</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#kids" id="kids-tab" data-toggle="tab" role="tab"
                                aria-controls="kids" aria-selected="false">Kids</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- All Content -->
                        <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="tab_product">
                                <div class="row rows-products">

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/2.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(5 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Women Striped Shirt Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 -
                                                                $129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -40%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/3.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/1.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <span class="small">(32 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Floral Print Jumpsuit</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 -
                                                                $129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -55%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/6.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Solid A-Line Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 -
                                                                $149</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -30%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/7.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Printed Straight Kurta</a></h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$199</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/3.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(42 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Women Printed A-Line Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 -
                                                                $600</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/9.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Fit and Flare Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 -
                                                                $110</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -60%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/6.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(15 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Self Design Jumpsuit</a>
                                                        </h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$119</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="mens" role="tabpanel"
                            aria-labelledby="mens-tab">
                            <div class="tab_product">
                                <div class="row rows-products">

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/1.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(5 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Women Striped Shirt Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 -
                                                                $129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -40%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/2.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/9.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <span class="small">(32 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Floral Print Jumpsuit</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 -
                                                                $129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -55%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/10.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Solid A-Line Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 -
                                                                $149</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -30%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/11.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Printed Straight Kurta</a></h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$199</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/12.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(42 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Women Printed A-Line Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 -
                                                                $600</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/13.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Fit and Flare Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 -
                                                                $110</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -60%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/14.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(15 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Self Design Jumpsuit</a>
                                                        </h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$119</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Women Content -->
                        <div class="tab-pane fade" id="women" role="tabpanel" aria-labelledby="women-tab">
                            <div class="tab_product">
                                <div class="row rows-products">

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/1.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(5 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Women Striped Shirt Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 -
                                                                $129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -40%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/2.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/3.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <span class="small">(32 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Floral Print Jumpsuit</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 -
                                                                $129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -55%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/4.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Solid A-Line Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 -
                                                                $149</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -30%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/5.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Printed Straight Kurta</a></h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$199</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/6.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(42 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Women Printed A-Line Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 -
                                                                $600</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/8.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline" data-toggle="modal"
                                                                data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Fit and Flare Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 -
                                                                $110</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -60%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/7.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline"
                                                                data-toggle="modal" data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(15 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Self Design Jumpsuit</a>
                                                        </h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$119</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kids" role="tabpanel" aria-labelledby="kids-tab">
                            <div class="tab_product">
                                <div class="row rows-products">

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/1.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline"
                                                                data-toggle="modal" data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(5 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Women Striped Shirt Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99
                                                                - $129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -40%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/4.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline"
                                                                data-toggle="modal" data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/5.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline"
                                                                data-toggle="modal" data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <span class="small">(32 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Floral Print Jumpsuit</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99
                                                                - $129</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -55%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/3.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline"
                                                                data-toggle="modal" data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Solid A-Line Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50
                                                                - $149</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -30%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/2.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline"
                                                                data-toggle="modal" data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Printed Straight Kurta</a></h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$199</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/8.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline"
                                                                data-toggle="modal" data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(42 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Women Printed A-Line Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110
                                                                - $600</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                                Sale</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/7.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline"
                                                                data-toggle="modal" data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(0 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Fit and Flare Dress</a>
                                                        </h5>
                                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99
                                                                - $110</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single -->
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                        <div class="product_grid card b-0">
                                            <div
                                                class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                New</div>
                                            <div
                                                class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                                -60%</div>
                                            <div class="card-body p-0">
                                                <div class="shop_thumb position-relative">
                                                    <a class="card-img-top d-block overflow-hidden"
                                                        href="shop-single-v1.html"><img class="card-img-top"
                                                            src="{{ asset('templates/client/assets/img/product/9.jpg') }}" alt="..."></a>
                                                    <div
                                                        class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                        <div class="edlio"><a href="javascript:void(0);"
                                                                class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                To Cart</a></div>
                                                        <div class="edlio d-flex align-items-center">
                                                            <button class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                    class="far fa-heart"></i></button>
                                                            <a href="#" class="text-underline"
                                                                data-toggle="modal" data-target="#quickview"><i
                                                                    class="fas fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                <div class="text-left">
                                                    <div class="text-left">
                                                        <div
                                                            class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="small">(15 Reviews)</span>
                                                        </div>
                                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                href="shop-single-v1.html">Girls Self Design Jumpsuit</a>
                                                        </h5>
                                                        <div class="elis_rty"><span
                                                                class="ft-bold text-dark fs-sm">$119</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- ======================= Products List ======================== -->

    <!-- ======================= Customer Review ======================== -->
    <section class="gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Testimonials</h2>
                        <h3 class="ft-bold pt-3">Client Reviews</h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                    <div class="reviews-slide px-3">

                        <!-- single review -->
                        <div class="single_review">
                            <div class="sng_rev_thumb">
                                <figure><img src="{{ asset('templates/client/assets/img/team-1.jpg') }}" class="img-fluid circle" alt="" />
                                </figure>
                            </div>
                            <div class="sng_rev_caption text-center">
                                <div class="rev_desc mb-4">
                                    <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                                <div class="rev_author">
                                    <h4 class="mb-0">Mark Jevenue</h4>
                                    <span class="fs-sm">CEO of Addle</span>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review">
                            <div class="sng_rev_thumb">
                                <figure><img src="{{ asset('templates/client/assets/img/team-2.jpg') }}" class="img-fluid circle" alt="" />
                                </figure>
                            </div>
                            <div class="sng_rev_caption text-center">
                                <div class="rev_desc mb-4">
                                    <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                                <div class="rev_author">
                                    <h4 class="mb-0">Henna Bajaj</h4>
                                    <span class="fs-sm">Aqua Founder</span>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review">
                            <div class="sng_rev_thumb">
                                <figure><img src="{{ asset('templates/client/assets/img/team-3.jpg') }}" class="img-fluid circle" alt="" />
                                </figure>
                            </div>
                            <div class="sng_rev_caption text-center">
                                <div class="rev_desc mb-4">
                                    <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                                <div class="rev_author">
                                    <h4 class="mb-0">John Cenna</h4>
                                    <span class="fs-sm">CEO of Plike</span>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review">
                            <div class="sng_rev_thumb">
                                <figure><img src="{{ asset('templates/client/assets/img/team-4.jpg') }}" class="img-fluid circle" alt="" />
                                </figure>
                            </div>
                            <div class="sng_rev_caption text-center">
                                <div class="rev_desc mb-4">
                                    <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                                <div class="rev_author">
                                    <h4 class="mb-0">Madhu Sharma</h4>
                                    <span class="fs-sm">Team Manager</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Customer Review ======================== -->

    <!-- ======================= Blog Start ============================ -->
    <section class="space min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Latest News</h2>
                        <h3 class="ft-bold pt-3">New Updates</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="_blog_wrap">
                        <div class="_blog_thumb mb-2">
                            <a href="blog-detail.html" class="d-block"><img src="{{ asset('templates/client/assets/img/bl-1.png') }}"
                                    class="img-fluid rounded" alt="" /></a>
                        </div>
                        <div class="_blog_caption">
                            <span class="text-muted">26 Jan 2021</span>
                            <h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer
                                    vacation.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                            <a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="_blog_wrap">
                        <div class="_blog_thumb mb-2">
                            <a href="blog-detail.html" class="d-block"><img src="{{ asset('templates/client/assets/img/bl-2.png') }}"
                                    class="img-fluid rounded" alt="" /></a>
                        </div>
                        <div class="_blog_caption">
                            <span class="text-muted">17 July 2021</span>
                            <h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer
                                    vacation.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                            <a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="_blog_wrap">
                        <div class="_blog_thumb mb-2">
                            <a href="blog-detail.html" class="d-block"><img src="{{ asset('templates/client/assets/img/bl-3.png') }}"
                                    class="img-fluid rounded" alt="" /></a>
                        </div>
                        <div class="_blog_caption">
                            <span class="text-muted">10 Aug 2021</span>
                            <h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer
                                    vacation.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                            <a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Blog Start ============================ -->

    <!-- ======================= Instagram Start ============================ -->
    <section class="p-0">
        <div class="container-fluid p-0">

            <div class="row no-gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Instagram Gallery</h2>
                        <span class="fs-lg ft-bold theme-cl pt-3">@mahak_71</span>
                        <h3 class="ft-bold lh-1">From Instagram</h3>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">

                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/i-1.png') }}"
                                    class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/i-2.png') }}"
                                    class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/i-3.png') }}"
                                    class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/i-7.png') }}"
                                    class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/i-8.png') }}"
                                    class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/i-4.png') }}"
                                    class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/i-5.png') }}"
                                    class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/i-6.png') }}"
                                    class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Instagram Start ============================ -->



    <!-- Product View Modal -->
    <div class="modal fade lg-modal" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickviewmodal"
        aria-hidden="true">
        <div class="modal-dialog modal-xl login-pop-form" role="document">
            <div class="modal-content" id="quickviewmodal">
                <div class="modal-headers">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ti-close"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="quick_view_wrap">

                        <div class="quick_view_thmb">
                            <div class="quick_view_slide">
                                <div class="single_view_slide"><img src="{{ asset('templates/client/assets/img/product/1.jpg') }}" class="img-fluid"
                                        alt="" /></div>
                                <div class="single_view_slide"><img src="{{ asset('templates/client/assets/img/product/2.jpg') }}" class="img-fluid"
                                        alt="" /></div>
                                <div class="single_view_slide"><img src="{{ asset('templates/client/assets/img/product/3.jpg') }}" class="img-fluid"
                                        alt="" /></div>
                                <div class="single_view_slide"><img src="{{ asset('templates/client/assets/img/product/4.jpg') }}" class="img-fluid"
                                        alt="" /></div>
                            </div>
                        </div>

                        <div class="quick_view_capt">
                            <div class="prd_details">

                                <div class="prt_01 mb-1"><span
                                        class="text-light bg-info rounded px-2 py-1">Dresses</span></div>
                                <div class="prt_02 mb-2">
                                    <h2 class="ft-bold mb-1">Women Striped Shirt Dress</h2>
                                    <div class="text-left">
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="small">(412 Reviews)</span>
                                        </div>
                                        <div class="elis_rty"><span
                                                class="ft-medium text-muted line-through fs-md mr-2">$199</span><span
                                                class="ft-bold theme-cl fs-lg mr-2">$110</span><span
                                                class="ft-regular text-danger bg-light-danger py-1 px-2 fs-sm">Out of
                                                Stock</span></div>
                                    </div>
                                </div>

                                <div class="prt_03 mb-3">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores.</p>
                                </div>

                                <div class="prt_04 mb-2">
                                    <p class="d-flex align-items-center mb-0 text-dark ft-medium">Color:</p>
                                    <div class="text-left">
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8"
                                                id="white8">
                                            <label class="form-option-label rounded-circle" for="white8"><span
                                                    class="form-option-color rounded-circle blc7"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8"
                                                id="blue8">
                                            <label class="form-option-label rounded-circle" for="blue8"><span
                                                    class="form-option-color rounded-circle blc2"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8"
                                                id="yellow8">
                                            <label class="form-option-label rounded-circle" for="yellow8"><span
                                                    class="form-option-color rounded-circle blc5"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8"
                                                id="pink8">
                                            <label class="form-option-label rounded-circle" for="pink8"><span
                                                    class="form-option-color rounded-circle blc3"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8"
                                                id="red">
                                            <label class="form-option-label rounded-circle" for="red"><span
                                                    class="form-option-color rounded-circle blc4"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8"
                                                id="green">
                                            <label class="form-option-label rounded-circle" for="green"><span
                                                    class="form-option-color rounded-circle blc6"></span></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="prt_04 mb-4">
                                    <p class="d-flex align-items-center mb-0 text-dark ft-medium">Size:</p>
                                    <div class="text-left pb-0 pt-2">
                                        <div class="form-check size-option form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="28" checked="">
                                            <label class="form-option-label" for="28">28</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="30">
                                            <label class="form-option-label" for="30">30</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="32">
                                            <label class="form-option-label" for="32">32</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="34">
                                            <label class="form-option-label" for="34">34</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="36">
                                            <label class="form-option-label" for="36">36</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="38">
                                            <label class="form-option-label" for="38">38</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size"
                                                id="40">
                                            <label class="form-option-label" for="40">40</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="prt_05 mb-4">
                                    <div class="form-row mb-7">
                                        <div class="col-12 col-lg-auto">
                                            <!-- Quantity -->
                                            <select class="mb-2 custom-select">
                                                <option value="1" selected="">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg">
                                            <!-- Submit -->
                                            <button type="submit" class="btn btn-block custom-height bg-dark mb-2">
                                                <i class="lni lni-shopping-basket mr-2"></i>Add to Cart
                                            </button>
                                        </div>
                                        <div class="col-12 col-lg-auto">
                                            <!-- Wishlist -->
                                            <button class="btn custom-height btn-default btn-block mb-2 text-dark"
                                                data-toggle="button">
                                                <i class="lni lni-heart mr-2"></i>Wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="prt_06">
                                    <p class="mb-0 d-flex align-items-center">
                                        <span class="mr-4">Share:</span>
                                        <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2"
                                            href="#!">
                                            <i class="fab fa-twitter position-absolute"></i>
                                        </a>
                                        <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2"
                                            href="#!">
                                            <i class="fab fa-facebook-f position-absolute"></i>
                                        </a>
                                        <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted"
                                            href="#!">
                                            <i class="fab fa-pinterest-p position-absolute"></i>
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal"
        aria-hidden="true">
        <div class="modal-dialog modal-xl login-pop-form" role="document">
            <div class="modal-content" id="loginmodal">
                <div class="modal-headers">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ti-close"></span>
                    </button>
                </div>

                <div class="modal-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="m-0 ft-regular">Login</h2>
                    </div>

                    <form>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="Username*">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password*">
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                </div>
                                <div class="eltio_k2">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit"
                                class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Login</button>
                        </div>

                        <div class="form-group text-center mb-0">
                            <p class="extra">Not a member?<a href="#et-register-wrap" class="text-dark"> Register</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Search -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Search">
        <div class="rightMenu-scroll">
            <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                <h4 class="cart_heading fs-md ft-medium mb-0">Search Products</h4>
                <button onclick="closeSearch()" class="close_slide"><i class="ti-close"></i></button>
            </div>

            <div class="cart_action px-3 py-4">
                <form class="form m-0 p-0">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Product Keyword.." />
                    </div>

                    <div class="form-group">
                        <select class="custom-select">
                            <option value="1" selected="">Choose Category</option>
                            <option value="2">Men's Store</option>
                            <option value="3">Women's Store</option>
                            <option value="4">Kid's Fashion</option>
                            <option value="5">Inner Wear</option>
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <button type="button" class="btn d-block full-width btn-dark">Search Product</button>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center justify-content-center br-top br-bottom py-2 px-3">
                <h4 class="cart_heading fs-md mb-0">Hot Categories</h4>
            </div>

            <div class="cart_action px-3 py-3">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01">
                                <div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray">
                                    <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/tshirt.png') }}"
                                            class="img-fluid" width="40" alt="" /></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">T-Shirts</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01">
                                <div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray">
                                    <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/pant.png') }}"
                                            class="img-fluid" width="40" alt="" /></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Pants</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01">
                                <div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray">
                                    <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/fashion.png') }}"
                                            class="img-fluid" width="40" alt="" /></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Women's</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01">
                                <div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray">
                                    <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/sneakers.png') }}"
                                            class="img-fluid" width="40" alt="" /></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Shoes</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01">
                                <div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray">
                                    <a href="javascript:void(0);" class="d-block"><img src="{{ asset('templates/client/assets/img/television.png') }}"
                                            class="img-fluid" width="40" alt="" /></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01">
                                <div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray">
                                    <a href="javascript:void(0);" class="d-block"><img
                                            src="{{ asset('templates/client/assets/img/accessories.png') }}" class="img-fluid" width="40"
                                            alt="" /></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Wishlist -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Wishlist">
        <div class="rightMenu-scroll">
            <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                <h4 class="cart_heading fs-md ft-medium mb-0">Saved Products</h4>
                <button onclick="closeWishlist()" class="close_slide"><i class="ti-close"></i></button>
            </div>
            <div class="right-ch-sideBar">

                <div class="cart_select_items py-2">
                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="{{ asset('templates/client/assets/img/product/4.jpg') }}" width="60"
                                        class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span
                                        class="text-dark small">Red</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="{{ asset('templates/client/assets/img/product/7.jpg') }}" width="60"
                                        class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span
                                        class="text-dark small">Red</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="{{ asset('templates/client/assets/img/product/8.jpg') }}" width="60"
                                        class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span
                                        class="text-dark small">Blue</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                </div>

                <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                    <h6 class="mb-0">Subtotal</h6>
                    <h3 class="mb-0 ft-medium">$417</h3>
                </div>

                <div class="cart_action px-3 py-3">
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark">Move To Cart</button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Cart -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
        <div class="rightMenu-scroll">
            <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                <h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
                <button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
            </div>
            <div class="right-ch-sideBar">

                <div class="cart_select_items py-2">
                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="{{ asset('templates/client/assets/img/product/4.jpg') }}" width="60"
                                        class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span
                                        class="text-dark small">Red</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="{{ asset('templates/client/assets/img/product/7.jpg') }}" width="60"
                                        class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span
                                        class="text-dark small">Red</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="{{ asset('templates/client/assets/img/product/8.jpg') }}" width="60"
                                        class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span
                                        class="text-dark small">Blue</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                </div>

                <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                    <h6 class="mb-0">Subtotal</h6>
                    <h3 class="mb-0 ft-medium">$1023</h3>
                </div>

                <div class="cart_action px-3 py-3">
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark">Checkout Now</button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
