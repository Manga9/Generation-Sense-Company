<!DOCTYPE html>
<html lang='ar'>
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="generation-sense">
        <title>G sense</title>
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel='stylesheet' href='css/font-awesome.min.css'>
        <link rel='stylesheet' href='css/style.css'>
        <link rel="stylesheet" href="css/animate.css">
        <link rel='shortcut icon' href='images/favicon.ico'>
        <link href="https://fonts.googleapis.com/css?family=Cairo|Changa" rel="stylesheet">
    </head>
    <body>      
                <nav class="navbar navbar-default navbar-fixed-top serv-nav">
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
                    <a class="navbar-brand" href="../?lang=ar#home"><img src='images/1.png' alt='logo'></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<li><a class='cur' href='../?lang=en#home'>" . lang('HOME') . "</a></li>";
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
                                    echo "<li><a class='cur' href='../?lang=en#about'>" . lang('ABOUT') . "</a></li>";
                                    echo "<li><a class='cur' href='../?lang=en#work'>" . lang('WORK') . "</a></li>";
                                                                echo "<li><a class='cur' href='blog.php'>" . lang('BLOG') . "</a></li>";

                                    echo "<li><a class='cur' href='../contact.php?lang=en'>" . lang('CONTACT') . "</a></li>";
                                    if (isset($_GET['service']) && $_GET['service'] == 'google-ad') {
                                        echo "<li><a class='ar' href='?lang=en&service=google-ad'>عربى</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'search') {
                                        echo "<li><a class='ar' href='?lang=en&service=search'>عربى</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'motion') {
                                        echo "<li><a class='ar' href='?lang=en&service=motion'>عربى</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'conent') {
                                        echo "<li><a class='ar' href='?lang=en&service=content'>عربى</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'smo') {
                                        echo "<li><a class='ar' href='?lang=en&service=smo'>عربى</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'web') {
                                        echo "<li><a class='ar' href='?lang=en&service=web'>عربى</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'graphic') {
                                        echo "<li><a class='ar' href='?lang=en&service=graphic'>عربى</a></li>";
                                    } else {
                                        echo "<li><a class='ar' href='?lang=en'>عربى</a></li>";
                                    }
                            } else {
                                    echo "<li><a class='cur' href='contact.php?lang=ar'>" . lang('CONTACT') . "</a></li>";
                            echo "<li><a class='cur' href='blog.php'>" . lang('BLOG') . "</a></li>";

                                    echo "<li><a class='cur' href='../?lang=ar#work'>" . lang('WORK') . "</a></li>";
                                    echo "<li><a class='cur' href='../?lang=ar#about'>" . lang('ABOUT') . "</a></li>";
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
                                    echo "<li><a class='cur' href='../?lang=ar#home'>" . lang('HOME') . "</a></li>";
                                    if (isset($_GET['service']) && $_GET['service'] == 'google-ad') {
                                        echo "<li><a class='en' href='?lang=en&service=google-ad'>English</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'search') {
                                        echo "<li><a class='en' href='?lang=en&service=search'>English</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'motion') {
                                        echo "<li><a class='en' href='?lang=en&service=motion'>English</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'conent') {
                                        echo "<li><a class='en' href='?lang=en&service=content'>English</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'smo') {
                                        echo "<li><a class='en' href='?lang=en&service=smo'>English</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'web') {
                                        echo "<li><a class='en' href='?lang=en&service=web'>English</a></li>";
                                    } else if (isset($_GET['service']) && $_GET['service'] == 'graphic') {
                                        echo "<li><a class='en' href='?lang=en&service=graphic'>English</a></li>";
                                    } else {
                                        echo "<li><a class='en' href='?lang=en'>English</a></li>";
                                    }
                            }
                        ?>
                    </ul>
                    </div>
                </div>
                </nav>