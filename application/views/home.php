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
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" '?>">
      <style type="text/css">
        .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(img/Rolling-blue.svg) center no-repeat #fff;
        background-color: white;
        }
      </style>
      <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
      </script>
  </head>

  <body>
    <div class="global-wrap">

      <!--INI NAVBAR-->
      <header id="main-header">

          <div class="header-top">
              <div class="container">

                  <div class="row">
                      <div class="col-md-3">
                          <a class="logo" href="index.html">
                              <img src="img/antarpulau.svg" height="44px" alt="Image Alternative text" title="Image Title" />
                          </a>
                      </div>


                      <!-- INI NAVBAR YA -->
                      <div class="col-md-9">

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
      </header>
      <!--INI PENUTUP BAGIAN NAVBAR-->

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

      <!--INI BAGIAN TENGAH-->
      <div class="container">
        <!--INI KOTAK TARIF BARANG-->
        <div class="search-tabs search-tabs-bg search-tabs-to-top">
          <div class="tabbable col-sm-12 col-md-12 col-lg-12  " style="margin-top: -100px;">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-truck"></i> <span >Tarif</span></a>
                </li>
                <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-search"></i> <span >Lacak</span></a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                  <h2>Tarif Kirim Barang</h2>
                    <form action="<?php echo base_url('get-harga'); ?>">
                      <div class="col-md-6 col-lg-6">
                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                        <label>Tujuan</label>
                        <input name="tujuan" class="typeahead form-control" placeholder="Kota Tujuan" type="text"  required />
                        </div>
                      </div>
                      <div class="col-md-3 col-lg-3">
                        <div class="form-group form-group-lg ">
                          <label>Berat</label>
                          <div class="input-group">
                            <input name="berat" placeholder="Min 10 Kg" class=" form-control " type="number" required />
                            <span class="input-group-addon">Kg</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-lg-3">
                        <div class="gap-beneran">
                        </div>
                        <input name="jalur" type="hidden" value="darat">
                        <button class="btn btn-primary btn-lg" type="submit">Check</button>
                      </div>
                    </form>
                    <div class="row">

                    </div>
                </div>

                <div class="tab-pane fade" id="tab-5">
                  <h2>Lacak Kiriman</h2>
                    <form>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-search input-icon input-icon-tada"></i>
                            <label>Masukkan Nomer Resi :</label>
                            <input name="resi" class="form-control" placeholder="Nomer Resi" type="text" />
                          </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                      </div>
                      <button class="btn btn-primary btn-lg" type="submit">Lacak</button>
                    </form>
                </div>
            </div>
          </div>
        </div>
        <!--END KOTAK TARIF BARANG-->
        <div class="gap"></div>

        <!-- INI KONTEN -->
        <div class="text-center row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="mb20">Kenapa Antar Pulau?</h2>
              <div class="row row-wrap">
                <div class="col-md-4">
                  <div class="thumb">
                    <header class="thumb-header"><i class="fa fa-check-square-o box-icon-md round box-icon-black box-icon-center animate-icon-top-to-bottom"></i>
                    </header>
                    <div class="thumb-caption">
                      <h4 class="thumb-title">Mudah</h4>
                        <p class="thumb-desc">Fusce nascetur proin ligula nisi at scelerisque odio cum accumsan</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumb">
                    <header class="thumb-header"><i class="fa fa-usd box-icon-md round box-icon-black box-icon-center animate-icon-top-to-bottom"></i>
                    </header>
                    <div class="thumb-caption">
                      <h4 class="thumb-title">Murah</h4>
                        <p class="thumb-desc">Dignissim himenaeos varius vulputate nullam a leo congue feugiat himenaeos</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumb">
                    <header class="thumb-header"><i class="fa fa-lock box-icon-md round box-icon-black box-icon-center animate-icon-top-to-bottom"></i>
                    </header>
                    <div class="thumb-caption">
                      <h4 class="thumb-title">Aman</h4>
                      <p class="thumb-desc">Orci vehicula ac sit vulputate nisl torquent donec litora per</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="gap"></div>
        <!-- INI PENUTUP FOOTER YA -->
      </div>

      <!--INI PENUTUP BAGIAN TENGAH-->

      <!--INI BAGIAN FOOTER-->
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
      <!--INI PENUTUP BAGIAN FOOTER-->

    </div>

    <!-- script -->
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

    <script type="text/javascript">
      $(document).ready(function(){
        $('form').on('submit', function(e){
          e.preventDefault();
          $.ajax({
            url: $(this).attr('action'),
            type: 'get',
            data: $(this).serialize(),
            // dataType: 'html',
          }).done(function(result){
            $('#result').html(result);

          });
        });
      });
    </script>
  </body>
</html>
