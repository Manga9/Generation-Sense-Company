<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="generation-sense">
        <title>G sense</title>
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel='stylesheet' href='css/font-awesome.min.css'>
        <link rel='stylesheet' href='css/slick.css'>
        <link rel='stylesheet' href='css/slick-theme.css'>
        <link rel='stylesheet' href='css/style.css'>
        <link rel="stylesheet" href="css/animate.css">
        <link rel='shortcut icon' href='images/favicon.ico'>
        <link href="https://fonts.googleapis.com/css?family=Cairo|Changa" rel="stylesheet">
    </head>
    <body> 
        <nav id='nav' class="navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
            <button id='container' type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <div class="container" onclick='myFunction(this)'>
                <span class="sr-only">Toggle navigation</span>
                <span id="bar1" class="icon-bar"></span>
                <span id="bar2" class="icon-bar"></span>
                <span id="bar3" class="icon-bar"></span>
                </div>
            </button>
            <a class="navbar-brand" href="#home"><img src='images/1.png' alt='logo'></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php
                        if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                            echo "<li class='active'><a class='cur' href='#home'>" . lang('HOME') . "</a></li>";
                            echo "<li class='dropdown'>";
                            echo "<a href='#' class='dropdown-toggle element' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>" . lang('SERVICES') . "<span class='caret'></span></a>";
                                echo "<ul class='dropdown-menu'>";
                                    echo "<li><a href='?lang=en&service=google-ad'>" . lang('google-ad') . "</a></li>";
                                    echo "<li><a href='?lang=en&service=seo'>" . lang('search') . "</a></li>";
                                    echo "<li><a href='?lang=en&service=motion-graphic'>" . lang('motion') . "</a></li>";
                                    echo "<li><a href='?lang=en&service=content-writing'>" . lang('content') . "</a></li>";
                                    echo "<li><a href='?lang=en&service=smo'>" . lang('smo') . "</a></li>";
                                    echo "<li><a href='?lang=en&service=web'>" . lang('web') . "</a></li>";
                                    echo "<li><a href='?lang=en&service=graphic'>" . lang('graphic') . "</a></li>";
                                echo "</ul>";
                            echo "</li>";
                            echo "<li><a class='cur' href='#about'>" . lang('ABOUT') . "</a></li>";
                            echo "<li><a class='cur' href='#work'>" . lang('WORK') . "</a></li>";
                            echo "<li><a class='cur' href='blog.php'>" . lang('BLOG') . "</a></li>";
                            echo "<li><a class='cur' href='contact.php?lang=en'>" . lang('CONTACT') . "</a></li>";
                            echo "<li><a class='arab' href='?lang=ar'>عربى</a></li>";
                    } else {
                            echo "<li><a class='cur' href='contact.php?lang=ar'>" . lang('CONTACT') . "</a></li>";
                            echo "<li><a class='cur' href='blog.php'>" . lang('BLOG') . "</a></li>";
                            echo "<li><a class='cur' href='#work'>" . lang('WORK') . "</a></li>";
                            echo "<li><a class='cur' href='#about'>" . lang('ABOUT') . "</a></li>";
                            echo "<li class='dropdown'>";
                            echo "<a href='#' class='dropdown-toggle element' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>" . lang('SERVICES') . "<span class='caret'></span></a>";
                                echo "<ul class='dropdown-menu'>";
                                    echo "<li><a href='?lang=ar&service=google-ad'>" . lang('google-ad') . "</a></li>";
                                    echo "<li><a href='?lang=ar&service=seo'>" . lang('search') . "</a></li>";
                                    echo "<li><a href='?lang=ar&service=motion-graphic'>" . lang('motion') . "</a></li>";
                                    echo "<li><a href='?lang=ar&service=content-writing'>" . lang('content') . "</a></li>";
                                    echo "<li><a href='?lang=ar&service=smo'>" . lang('smo') . "</a></li>";
                                    echo "<li><a href='?lang=ar&service=web'>" . lang('web') . "</a></li>";
                                    echo "<li><a href='?lang=ar&service=graphic'>" . lang('graphic') . "</a></li>";
                                echo "</ul>";
                            echo "</li>";                            
                            echo "<li class='active'><a class='cur' href='#home'>" . lang('HOME') . "</a></li>";
                            echo "<li><a class='en' href='?lang=en'>English</a></li>";
                    }
                ?>
            </ul>
            </div>
        </div>
        </nav>