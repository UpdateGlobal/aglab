    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <?php
        $consultarMet = 'SELECT * FROM metatags';
        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaMet = mysqli_fetch_array($resultadoMet);
            $xCodigo    = $filaMet['cod_meta'];
            $xTitulo    = $filaMet['titulo'];
            $xSlogan    = $filaMet['slogan'];
            $xDes       = $filaMet['description'];
            $xKey       = $filaMet['keywords'];
            $xUrl       = $filaMet['url'];
            $xIco       = $filaMet['ico'];
    ?>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?php echo $xTitulo; ?><?php if($xSlogan!=""){ echo " | ".$xSlogan; } ?></title>
    <meta name="description" content="<?php echo $xDes; ?>" />
    <meta name="keywords" content="<?php echo $xKey; ?>" />
    <link rel="canonical" href="<?php echo $xUrl; ?>" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/bootstrap.css" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/style.css" />
    <link rel="stylesheet" type="text/css" href="/style.css" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/responsive.css" />

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/colors/color1.css" id="colors" />

	<!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/animate.css" />
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/all.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="/stylesheets/custom.css" />

    <!-- Favicon and touch icons  -->
    <link href="/cms/assets/img/meta/<?php echo $xIco; ?>" rel="apple-touch-icon-precomposed" sizes="48x48" />
    <link href="/cms/assets/img/meta/<?php echo $xIco; ?>" rel="apple-touch-icon-precomposed" />
    <link href="/cms/assets/img/meta/<?php echo $xIco; ?>" rel="shortcut icon" />
    <?php
        mysqli_free_result($resultadoMet);
    ?>