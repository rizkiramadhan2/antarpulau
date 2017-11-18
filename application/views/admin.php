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
        <?= $header ?>
      <!--INI PENUTUP BAGIAN NAVBAR-->

      <!-- INI PAPAN IKLAN / CAROSEL -->
        <div class="gap"></div>
      <!-- END TOP AREA  -->

      <!--INI BAGIAN TENGAH-->
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <aside class="user-profile-sidebar">
                      <div class="user-profile-avatar text-center">
                          <img src="img/300x300.png" alt="Image Alternative text" title="AMaze" />
                          <h5>John Doe</h5>
                          <p>Member Since May 2012</p>
                      </div>
                      <ul class="list user-profile-nav">
                          <li><a href="user-profile.html"><i class="fa fa-user"></i>Overview</a>
                          </li>
                          <li><a href="user-profile-settings.html"><i class="fa fa-cog"></i>Settings</a>
                          </li>
                          <li><a href="user-profile-photos.html"><i class="fa fa-camera"></i>My Travel Photos</a>
                          </li>
                          <li><a href="user-profile-booking-history.html"><i class="fa fa-clock-o"></i>Booking History</a>
                          </li>
                          <li><a href="user-profile-cards.html"><i class="fa fa-credit-card"></i>Credit/Debit Cards</a>
                          </li>
                          <li><a href="user-profile-wishlist.html"><i class="fa fa-heart-o"></i>Wishlist</a>
                          </li>
                      </ul>
                  </aside>
              </div>
              <div class="col-md-9">
                <!-- Menampilkan Table (PENTING)-->
                  <?=
                     $tables
                    ?>
                  <div id="map-canvas" style="width:100%; height:400px;"></div>
              </div>
          </div>
      </div>
      <!--INI PENUTUP BAGIAN TENGAH-->

      <!--INI BAGIAN FOOTER-->
      <?= $footer ?>
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
        $('#form-tarif').on('submit', function(e){
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
