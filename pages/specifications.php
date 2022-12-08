<?php
/*
 Template Name: SPECIFICATIONS
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPECIFICATIONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/style.css">

</head>

<body>
    <!-- header -->
    <?php get_header(); ?>
    <div class="main_heathy">
        <img class="_bgr-healthy" src="<?php bloginfo('template_directory')?>/images/bgr-bottom.png" alt="bgr" srcset="">
        <div class="_main-content container-fluid d-flex row"   style="padding: 0 5%;">
            <div class ="text-specification col-12 col-md-8 ">
                The only water ionizer machine that can use ro (reverse osmosis) water
                <br/>
                <br/>
                Sleek and mordern design that can elevate the look of any space
                <br/>
                <br/>
                Easy to use interface with touch screens
                <br/>
                <br/>
                Stainless steel casing for maximum durability
                <br/>
                <br/>
                All food grade materials
                <br/>
                <br/>
                Votlage range that can be used in the US as well as Europe and Asia
            </div>
            <div class="col-12 col-md-4 text-center" id="img-product-specification">
                <img class="_img-produc-left" src="<?php bloginfo('template_directory')?>/images/product-left.png" alt="">
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