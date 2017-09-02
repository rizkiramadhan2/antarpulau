<!DOCTYPE HTML>
<html class="full">

<head>
    <title>Antar Pulau - Comming soon</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="<?php echo base_url().'template/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/font-awesome.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/icomoon.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/styles.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/mystyles.css' ?>">
    <script src="<?php echo base_url().'template/js/modernizr.js' ?>"></script>

    <style type="text/css">
        #page {
    display: none;
}
#loading {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 100;
    width: 100vw;
    height: 100vh;
    background-color: rgba(192, 192, 192, 0.5);
    background-image: url("http://i.stack.imgur.com/MnyxU.gif");
    background-repeat: no-repeat;
    background-position: center;
}
    </style>
</head>
<div class="loading" style="display: block;"></div>
<body class="full page" style="display: none">

    
    <div class="global-wrap">

        <div class="full-page text-center">
            <div class="bg-holder full">

            <div class="bg-img" style="background-image:url(template/img/backgrounds/taxi.jpg);"></div>
                <div class="bg-mask-darken"></div>
                
                <div class="bg-holder-content full text-white">
                    <a class="logo-holder">
                    <img class="bg-mask-lighten" src="<?php echo base_url().'img/antarpulau.svg' ?>" height="70px" alt=""> </img>
                    </a>
                    <div class="full-center">
                        <div class="container">
                        <div class="col-md-6 col-md-offset-3">
                            <h3>We're Coming Soon</h3>
                            <div class="countdown countdown-lg"  data-countdown="Oct 06, 2017" id="countdown"></div>
                             <div class="gap"></div>
                            <p class="col-md-12 col-sm-12 hidden-xs text-center ">For more information send us email to <a style="color: orange" href="#">admin@antarpulaucargo.com</a></p>
                            <p class="hidden-sm hidden-md hidden-lg col-xs-12 text-center ">For more information send us email to <br><a style="color: orange" href="#">admin@antarpulaucargo.com</a></p>
                        </div>
                        </div>
                        <div class="gap"></div>
                    </div>
                    
                </div>
            </div>
        </div>



        <script src="<?php echo base_url().'template/js/jquery.js' ?>"></script>
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
<script type="text/javascript">
    function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1000);
    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}

onReady(function () {
    show('page', true);
    show('loading', false);
});
</script>
</html>


