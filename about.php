<?php

    if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
        include 'languages/en.php';
    } else {
        include 'languages/ar.php';
    }

?>

<?php include 'aboutNav.php'; ?>


        <section class='about'>
            <div class='container'>
            <?php
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                    echo "<h2>" . lang('who-en') . "</h2>";
                } else {
                    echo "<h2 class='ar'>" . lang('who') . "</h2>";
                }
            ?>


            <?php
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                    echo "<h3>" . lang('about-head1') . "</h3>";
                } else {
                    echo "<h3 class='who-ar ar lead'>" . lang('about-head1') . "</h3>";
                }
            ?>

            <?php
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                    echo "<p class='lead'>" . lang('who-text') . "</p>";
                } else {
                    echo "<p class='who-ar ar lead'>" . lang('who-textIn') . "</p>";
                }
?>


            <?php
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                    echo "<h3>" . lang('about-head2') . "</h3>";
                } else {
                    echo "<h3 class='who-ar ar lead'>" . lang('about-head2') . "</h3>";
                }
?>

            <?php
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                    echo "<p>" . lang('about-head2Text') . "</p>";
                } else {
                    echo "<p class='who-ar ar lead'>" . lang('about-head2Text') . "</p>";
                }
?>


            <?php
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                    echo "<h3>" . lang('about-head3') . "</h3>";
                } else {
                    echo "<h3 class='who-ar ar lead'>" . lang('about-head3') . "</h3>";
                }
?>

            <?php
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                    echo "<p>" . lang('about-head3Text') . "</p>";
                } else {
                    echo "<p class='who-ar ar lead'>" . lang('about-head3Text') . "</p>";
                }
?>

            </div>
        </section>


<?php include 'aboutFooter.php'; ?>