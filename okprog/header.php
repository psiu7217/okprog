<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Окей программист</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/man.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid text-center">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top_menu"
                        aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <?php
            wp_nav_menu(array(
                'menu_class' => 'main',
                'theme_location' => 'top',
                'menu_class' => 'nav navbar-nav',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'top_menu',
            ));
            ?>
        </div>
    </nav>
</header>