<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head();?>
</head>
<body>
<div class="container">
    <div class="row header">
        <div class="col-sm-4">
            <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" class="img-responsive" alt="logo"></a>
        </div>
        <div class="col-sm-6 col-sm-offset-2">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Przełącznik</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                            wp_nav_menu(    array(
                                'menu'          => 'top-nav',
                                'menu_class'    =>  'nav navbar-nav',
                                'depth'         =>  1,
                            ));
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>