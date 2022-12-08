<?php
/*
 Template Name: HEALTHYBENEFITS
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALTHYBENEFITS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/style.css">
</head>
<body>
    <!-- header -->
    <?php get_header(); ?>
    <div class="_main_">
        <img class="_bgr_" src="<?php bloginfo('template_directory')?>/images/bgr-bottom.png" alt="bgr" srcset="">

        <div class="container-fluid  text-center" id="accesories">
            <img class="col-12" style ="padding: 5%" 
                src="<?php bloginfo('template_directory')?>/images/healthy.png" alt="face" srcset="">
        </div>
    </div>

    <!-- footer -->
    <?php get_footer(); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>