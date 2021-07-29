
        <!-- Start Footer Section -->

        <section class='footer'>
            <div class='container text-center'>
                <div class='row'>
                    <div class='col-xs-12'>
                    <?php
                        if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                            echo "<p>All Rights Reserved At <a href='?lang=ar'><span>Generation Sense</span></a> 2017</p>";
                        } else {
                            echo "<p>كل الحقوق محفوظة لشركة <a href='?lang=ar'><span>جنريشن سينس</span></a> 2017</p>";
                        }
                    ?>  
                    </div>
                    <div class='col-xs-12'>

                    <?php    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
          
                        <ul class='english'>
                            <li><a href='https://www.facebook.com/generationsense/' target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href='https://twitter.com/generationsense' target='_blank'><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href='https://www.instagram.com/generationsense/' target='_blank'><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href='https://www.linkedin.com/company/generation-sense' target='_blank'><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>

                    <?php } else { ?>
                        <ul class='ar araby'>
                            <li><a href='https://www.instagram.com/generationsense/' target='_blank'><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href='https://www.linkedin.com/company/generation-sense' target='_blank'><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href='https://twitter.com/generationsense' target='_blank'><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href='https://www.facebook.com/generationsense/' target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                    <?php } ?> 
                    </div>
                </div>
            </div>
        </section>

        <!-- End Footer Section -->

        <script src='js/jquery-1.11.3.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/slick.min.js'></script>
        <script src='js/main.js'></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>
    </body>
</html>