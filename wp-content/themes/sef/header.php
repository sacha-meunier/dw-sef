<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">

    <meta name="author" content="Sacha Meunier">
    <meta name="description"
          content="Site web pour le SEF de Huy. Découvrez qui ils sont, ce qu'ils font et comment les aider.">
    <meta name="keywords"
          content="hébergement, accueil, sans-abrisme, travail social, seconde main">
    <meta property="og:url" content="https://sef.sacha-meunier.com">
    <meta property="og:title" content="SEF - accueil">
    <meta property="og:type" content="website">
    <meta property="og:description"
          content="Site web pour le SEF de Huy. Découvrez qui ils sont, ce qu'ils font et comment les aider.">
    <meta property="og:image" content="/content/images/logo.svg">
    <meta property="og:image:alt" content="Le logo du SEF"/>

    <!--<link rel="icon" type="image/svg+xml" href="../../../favicon.svg"/>
    <link rel="alternate icon" href="/favicon.ico"/>-->

    <?php wp_head(); ?>
</head>

<body>
<?= get_template_part('component/main-navigation'); ?>