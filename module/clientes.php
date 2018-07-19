<style type="text/css">
    .owl-controls{
        display: none !important;
    }
</style>
<div class="owl-carousel owl-theme flat-row bg-scheme pad-top20px pad-bottom20px"">
    <?php
        $consultarCarrusel = "SELECT * FROM carrusel WHERE estado='1' ORDER BY orden";
        $resultadoCarrusel = mysqli_query($enlaces,$consultarCarrusel) or die('Consulta fallida: ' . mysqli_error($enlaces));
        while($filaCar = mysqli_fetch_array($resultadoCarrusel)){
            $xImagen    = $filaCar['imagen'];
    ?>
    <div class="item">
        <div class="clients-image style">
            <div class="item-img"><img src="/cms/assets/img/carrusel/<?php echo $xImagen; ?>" /></div>
        </div>
    </div>
    <?php
        }
        mysqli_free_result($resultadoCarrusel);
    ?>
</div>