<?php
/*
 Template Name: ABOUT
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/style.css">

</head>

<body>
    <!-- header -->
    <?php get_header(); ?>
    <div class="main_heathy">
        <img class="_bgr-healthy" src="<?php bloginfo('template_directory')?>/images/bgr-bottom.png" alt="bgr" srcset="">
        <div class="_main-content container-fluid d-flex ">
            <div class="text-content"  style="pading: 0  5%">
                HydroThermal Electrolysis Technology (HTET) is at the heart of Letus SuperWater.
                <br />
                <br />
                HTET creates billions of hydrothermal events within our propriety SuperWater cell to break the water
                molecules into ions. At the right voltage and current applied through our proprietary circuit boards
                that modulate at right frequency, the right balance of ions is created through a shallow channel and
                pushed out to the output nozzle at a precisely controlled flowrate. Since HTET doesn’t need the
                impurities in water to create an electrical current through impurities in drinking water, our Letus
                SuperWater is the ONLY machine in the whole market that can electrolyze RO water (Reverse Osmosis
                water)
                Letus SuperWater machine includes tens of sensors and meters to create a smart, auto-adjust system
                that
                produces highest, therapeutic quality water that brings hosts of medical benefits for users. Letus
                SuperWater machine is the only system that doesn’t need a plumbed water source to work. Bring it to
                your
                vacation and use bottled water as the source of water and the machine will push out same quality
                water
                for you within seconds.
                <br />
                <br />
                Instead of wastewater, Letus SuperWater machine outputs Ozone water in the concentration that can be
                used for facewash or washing of vegetables.
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