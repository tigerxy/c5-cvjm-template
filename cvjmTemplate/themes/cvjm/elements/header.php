<?php defined( 'C5_EXECUTE') or die(_( "Access Denied.")); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $c->getCollectionName(); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo $this->getThemePath(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath(); ?>/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php Loader::element( 'header_required'); ?>
</head>

<body id="backpage">
    <div class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">
                    <img alt="Titel" src="<?php echo $this->getThemePath(); ?>/img/logo.png">
                  </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <?php
                $nav = BlockType::getByHandle('autonav');
                $nav->controller->orderBy = 'display_asc';
                $nav->controller->displayPages = 'top';
                $nav->controller->displaySubPages = 'all';
                $nav->controller->displaySubPageLevels = 'custom';
                $nav->controller->displaySubPageLevelsNum = 1;
                $nav->render('templates/cvjm');
                ?>
            </div>
        </div>
    </div>
    <div id="page" class="container light">