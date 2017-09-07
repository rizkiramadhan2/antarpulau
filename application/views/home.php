<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - Index 6</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="<?php echo base_url().'template/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/font-awesome.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/icomoon.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/styles.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/mystyles.css' ?>">
    <script src="<?php echo base_url().'template/js/modernizr.js' ?>"></script>
    <script src="<?php echo base_url().'template/js/jquery.js' ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/schemes/bright-turquoise.css" title="bright-turquoise" media="all"">'?>


</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.html">
                                <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">

                        </div>

                        <!-- INI NAVBAR YA -->
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        <a href="#">Home</a>
                                    </li>
                                    <li><a href="#">Layanan</a>
                                    </li>
                                    <li>
                                        <a href="#">Perusahaan</a>
                                    </li>
                                    <li>
                                        <a href="#">Costumer Service</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- INI PAPAN IKLAN / CAROSEL -->
        <div class="top-area show-onload">
            <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <h1 class="owl-cap-title fittext">Paris</h1>
                            <div class="owl-cap-price"><small>from</small>
                                <h5>$2700</h5>
                            </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <h1 class="owl-cap-title fittext">Las Vegas</h1>
                            <div class="owl-cap-price"><small>from</small>
                                <h5>$2200</h5>
                            </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(img/2048x2048.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <h1 class="owl-cap-title fittext">Budapest</h1>
                            <div class="owl-cap-price"><small>from</small>
                                <h5>$1900</h5>
                            </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP AREA  -->




        <div class="container">

          <div class="col-md-8 col-md-offset-2">
            <div class="search-tabs search-tabs-bg search-tabs-to-top">
                <div class="tabbable">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-truck"></i> <span >Darat</span></a>
                        </li>
                        <li><a href="#tab-2" data-toggle="tab"><i class="fa  fa-anchor"></i> <span >Laut</span></a>
                        </li>
                        <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-plane"></i> <span >Udara</span></a>
                        </li>
                        <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-search"></i> <span >Lacak</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                                            <div class="tab-pane fade in active" id="tab-1">
                                                <h2>Tarif Kirim Barang</h2>
                                                <form>
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>Kota Asal</label>
                                                        <input class="typeahead form-control" placeholder="Kota Asal" type="text" />
                                                    </div>
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>Tujuan</label>
                                                        <input class="typeahead form-control" placeholder="Kota Tujuan" type="text" />
                                                    </div>

                                                    <div class="form-group form-group-lg form-group-icon-left">

                                                        <label>Berat</label>

                                                        <input class=" form-control" placeholder="                                       /Kg" type="text" style="width:30% ; padding-left:10px" />

                                                  </div>

                                                    <button class="btn btn-primary btn-lg" type="submit">Check</button>
                                                </form>
                                            </div>
                        <div class="tab-pane fade" id="tab-2">
                          <h2>Tarif Kirim Barang</h2>
                          <form>
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                  <label>Kota Asal</label>
                                  <input class="typeahead form-control" placeholder="Kota Asal" type="text" />
                              </div>
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                  <label>Tujuan</label>
                                  <input class="typeahead form-control" placeholder="Kota Tujuan" type="text" />
                              </div>

                              <div class="form-group form-group-lg form-group-icon-left">

                                  <label>Berat</label>

                                  <input class=" form-control" placeholder="                                       /Kg" type="text" style="width:30% ; padding-left:10px" />

                            </div>

                              <button class="btn btn-primary btn-lg" type="submit">Check</button>
                          </form>
                      </div>
                        <div class="tab-pane fade" id="tab-3">
                          <h2>Tarif Kirim Barang</h2>
                          <form>
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                  <label>Kota Asal</label>
                                  <input class="typeahead form-control" placeholder="Kota Asal" type="text" />
                              </div>
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                  <label>Tujuan</label>
                                  <input class="typeahead form-control" placeholder="Kota Tujuan" type="text" />
                              </div>

                              <div class="form-group form-group-lg form-group-icon-left">

                                  <label>Berat</label>

                                  <input class=" form-control" placeholder="                                       /Kg" type="text" style="width:30% ; padding-left:10px" />

                            </div>

                              <button class="btn btn-primary btn-lg" type="submit">Check</button>
                          </form>
                      </div>
                        <div class="tab-pane fade" id="tab-5">
                            <h2>Lacak Kiriman</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-search input-icon input-icon-tada"></i>
                                            <label>Masukkan Nomer Resi :</label>
                                            <input class="form-control" placeholder="Nomer Resi" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        </div>
                                    </div>
                                      <button class="btn btn-primary btn-lg" type="submit">Lacak</button>
                                </div>

                                </div>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>


            <!-- INI FOOTER YA -->
            <div class="gap"></div>
            <div class="gap gap-small"></div>
            <h2 class="mb20">Explore Our Top Destinations</h2>
            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/400x300.png" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Africa</h4>
                            <p class="thumb-desc">Fusce nascetur proin ligula nisi at scelerisque odio cum accumsan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="people on the beach" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Australia</h4>
                            <p class="thumb-desc">Dignissim himenaeos varius vulputate nullam a leo congue feugiat himenaeos</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">USA</h4>
                            <p class="thumb-desc">Orci vehicula ac sit vulputate nisl torquent donec litora per</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>



        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">

                    </div>

                    <div class="col-md-3">

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+1-202-555-0173</h4>
                        <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>

        <script src="<?php echo base_url().'template/js/bootstrap.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/slimmenu.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/bootstrap-datepicker.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/bootstrap-timepicker.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/nicescroll.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/dropit.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/ionrangeslider.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/icheck.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/fotorama.js' ?>"></script>
        <script src="<?php echo base_url().'template/https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false' ?>"></script>
        <script src="<?php echo base_url().'template/js/typeahead.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/card-payment.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/magnific.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/owl-carousel.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/fitvids.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/tweet.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/countdown.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/gridrotator.js' ?>"></script>
        <script src="<?php echo base_url().'template/js/custom.js' ?>"></script>
    </div>
</body>

</html>
