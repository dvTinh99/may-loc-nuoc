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
    <div class="main" style="position: relative;">
        <img class="_bgr-home " style="min-height: 60vh; overflow: hidden;" src="<?php bloginfo('template_directory')?>/images/l-shaped-kitchen-layout.png"
            alt="bgr" srcset="">
        <div class="_content-home">
            Sleek and modern design elevates the look of any kitchen
        </div>
    </div>
    <!-- footer -->
    <?php get_footer(); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>