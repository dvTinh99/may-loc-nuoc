<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/style.css">

</head>

<body>
    <!-- header -->
    <?php get_header(); ?>
    <div class="main_heathy">
        <img class="_bgr-healthy " src="<?php bloginfo('template_directory')?>/images/bgr-bottom.png" alt="bgr" srcset="">
        <div class="_main-content container-fluid d-flex row" style="padding: 0;">
            <div class=" col-12 col-md-8 text-center">
                <img style="width:65%" src="<?php bloginfo('template_directory')?>/images/LIVING MORE  THAN AN ORDINARY LIFE.png" alt="">
                <br />
                <img style="width:6%; margin: 20px;" src="<?php bloginfo('template_directory')?>/images/with.png" alt="">
                <br />
                <img style="width:20%" src="<?php bloginfo('template_directory')?>/images/Color Fill 2.png" alt="">

            </div>
            <div class="col-12 col-md-4 text-center">
                <img class="_img-produc-left" id="img-product" src="<?php bloginfo('template_directory')?>/images/product-left.png" alt="">
            </div>
            <div class="content-healthy_bottom col  text-center">
                Anti-oxidant rich water - Better hydration - Natural blood thinner - Protect cells from oxidation -
                Cancer prevention - Anti-inflammatory effects -
                Improve joint mobilities - Better blood sugar control - Improve stamina - Improve memory and mental
                alertness

            </div>
        </div>

    </div>
    <!-- footer -->
    <?php get_footer(); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>