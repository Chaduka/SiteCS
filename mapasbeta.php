<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chaitosoft - Mapas</title>
    <link rel="shortcut icon" href="images/icons/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,600,500,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap & Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/block_grid_bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet" />
    <link href="css/jquery.circliful.css" rel="stylesheet" />
    <link href="css/slicknav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
<script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},s=d.getElementsByTagName('script')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='//rec.getsmartlook.com/bundle.js';s.parentNode.insertBefore(c,s);
    })(document);
    smartlook('init', '08db3543424f33b54b9b5ba1b8dbcd6c7b5d1d79');
</script>
</head>

<body>

    <!-- Google Analytics -->
    <?php include_once("analyticstracking.php") ?>
    <!-- End Google Analytics -->

    <?php
      include "topbar.php";
    ?>


    <!-- Breadcrumps -->
    <div class="breadcrumbs">
        <div class="row">
            <div class="col-sm-6">
                <h1>Mapas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li>Voce esta aqui: </li>
                    <li><a href="index">Home</a>
                    </li>
                    <li class="active">Mapas</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- End of Breadcrumps -->

    <!-- Imagem Foto -->
    <div id="servers-video" class="hidden-xs">
        <div class="servers-video-container">
            <div class="videocaption">
                <h2>MAPAS PERSONALIZADOS</h2>
                <h4>Incremente seu servidor e torne-o diferenciado com nossas cidades</h4>
                 <p><a class="btn btn-slide" href="#shared-hosting-tabs">Dê uma olhada</a>
                </p>
            </div>

             <video autoplay loop muted>
                <source src="video/mapas.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <!-- End Imagem Foto -->

    <!-- AQUI  -->
    <?php
      include "hunts.php";
    ?>

    <?php
      include "footer.php";
    ?>

<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.responsiveTabs.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/custom.js"></script>

    <script type="text/javascript">
    // ______________  TOOLTIPS
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    // ______________ TABS
    $('#shared-hosting-tabs').responsiveTabs({
        startCollapsed: 'accordion'
    });

    // ______________  PRICE SWITCH

    $(window).load(function() {

        $(".price-per-period .permonth").click(function() {
            $(".monthprice").show();
            $(".yearprice").hide();
            $(".twoyearprice").hide();
            $(".price-per-period .permonth").addClass("btn-shared-checked");
            $(".price-per-period .permonth").removeClass("btn-default");
            $(".price-per-period .peryear").removeClass("btn-shared-checked");
            $(".price-per-period .peryear").addClass("btn-default");
            $(".price-per-period .per2yrs").removeClass("btn-shared-checked");
            $(".price-per-period .per2yrs").addClass("btn-default");
        });

        $(".price-per-period .peryear").click(function() {
            $(".monthprice").hide();
            $(".yearprice").show();
            $(".twoyearprice").hide();
            $(".price-per-period .permonth").removeClass("btn-shared-checked");
            $(".price-per-period .permonth").addClass("btn-default");
            $(".price-per-period .peryear").addClass("btn-shared-checked");
            $(".price-per-period .peryear").removeClass("btn-default");
            $(".price-per-period .per2yrs").removeClass("btn-shared-checked");
            $(".price-per-period .per2yrs").addClass("btn-default");
        });

        $(".price-per-period .per2yrs").click(function() {
            $(".monthprice").hide();
            $(".yearprice").hide();
            $(".twoyearprice").show();
            $(".price-per-period .permonth").removeClass("btn-shared-checked");
            $(".price-per-period .permonth").addClass("btn-default");
            $(".price-per-period .peryear").addClass("btn-default");
            $(".price-per-period .peryear").removeClass("btn-shared-checked");
            $(".price-per-period .per2yrs").removeClass("btn-default");
            $(".price-per-period .per2yrs").addClass("btn-shared-checked");
        });

    });
    </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/569f88f9d34bfee320fe98c9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
