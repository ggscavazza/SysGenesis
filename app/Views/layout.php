<?php
    $page = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon.png">
    <title><?= $title ?? 'Sistema de Chamados' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/css/uikit.min.css" />
</head>
<body class="uk-background-cover uk-panel" style="background-image: url('images/fundo-tech.jpg'); height: 100vh;">
<header>        
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; end: + *; offset: 0">
        <nav class="uk-navbar-container uk-navbar-transparent uk-light">
            <div class="uk-container uk-container-expand">
                <div class="uk-navbar">
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo" href="/tickets" aria-label="Back to Home">
                            <img src="images/logo/oficial_genesis_darkbackground500px.png" class="uk-margin-small-right" width="150" height="150" alt="UIkit">
                        </a>                    
                    </div>

                    <?php if ($page != '/login' && $page != '/') { ?>
                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li>
                                <a href="#">Parent</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-active"><a href="#">Active</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li>
                                <a href="#">Parent</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-active"><a href="#">Active</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="uk-container uk-flex uk-flex-center uk-flex-middle uk-height-large uk-margin-top uk-width-1-3">    
    <?= $this->renderSection('content') ?>    
</div>

<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
</body>
</html>
