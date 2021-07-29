<?php

    if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
        include 'languages/en.php';
    } else {
        include 'languages/ar.php';
    }

?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'];
        $mail = $_POST['email'];
        $sub  = $_POST['subject'];
        $msg  = $_POST['msg'];

        $formErrors = array();

        if (isset($name)) {
            $filterUser = filter_var($name, FILTER_SANITIZE_STRING);
            if (empty($filterUser)) {
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
                    $formErrors[] = 'Name must not be empty';
                } else {
                    $formErrors[] = 'الاسم لا يجب ان يكون فارغ';
                }
            }
        }

        if (isset($mail)) {
            $filterEmail = filter_var($mail, FILTER_SANITIZE_STRING);
            if (empty($filterEmail)) {
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
                    $formErrors[] = 'Email must not be empty';
                } else {
                    $formErrors[] = 'الايميل لا يجب ان يكون فارغ';
                }
            }
        }

        if (isset($msg)) {
            $filterMsg = filter_var($msg, FILTER_SANITIZE_STRING);
            if (empty($filterMsg)) {
                if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
                    $formErrors[] = 'Message must not be empty';
                } else {
                    $formErrors[] = 'الرسالة لا يجب ان تكون فارغة';
                }
            }
        }

        if (empty($formErrors)) {
            mail ('info@generationsense.net', $sub, $msg, $mail);
            if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
                $success = 'Your message send successfully';
            } else {
                $success = 'تم إرسال الرسالة';
            }
        }
    }

?>

<?php include 'contactNav.php'; ?>

        <!-- Start Contact Us Section -->

        <section id='contact' class='contact'>
            <div class='container'>
                    <?php
                        if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                            echo "<h2>" .lang('get') . "</h2>";
                        } else {
                            echo "<h2 class='ar'>" .lang('get') . "</h2>";
                        }
                    ?>  
                <div class='row'>
                    <div class='col-md-6 wow fadeInLeft'>

                        <form action='#contact' method='POST'>
                        <?php
                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<div class='form-group'>";
                            } else {
                                echo "<div class='ar form-group'>";
                            }
                        ?>
                                <input class='form-control' type='text' name='name' placeholder='<?php echo lang("name"); ?>' autocomplete='off' required>
                            </div>

                        <?php
                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<div class='form-group'>";
                            } else {
                                echo "<div class='ar form-group'>";
                            }
                        ?>
                                <input class='form-control' type='email' name='email' placeholder='<?php echo lang("email"); ?>' autocomplete='off' required>
                            </div>

                        <?php
                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<div class='form-group'>";
                            } else {
                                echo "<div class='ar form-group'>";
                            }
                        ?>
                                <input class='form-control' type='text' name='subject' placeholder='<?php echo lang("subject"); ?>' autocomplete='off'>
                            </div>
                        <?php
                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<div class='form-group'>";
                            } else {
                                echo "<div class='ar form-group'>";
                            }
                        ?>                                <textarea class='form-control' name='msg' placeholder='<?php echo lang("msg"); ?>' autocomplete='off' required></textarea>
                            </div>
                            <input class='btn btn-info' type='submit' value='<?php echo lang("send"); ?>'>
                        </form>
                            <?php

                                if (!empty($formErrors) ) {
                                    foreach($formErrors as $error) {
                                        echo "<div class='btn btn-danger btn-block msg-error'>" . $error . "</div>";
                                    }
                                }

                                if (isset($success)) {
                                    echo "<div class='btn btn-success btn-block msg-success'>" . $success . "</div>";
                                }
                            
                            ?>
                    </div>
                    <div class='col-md-6 wow fadeInRight'>
                        <div class='info'>
                            <h3><?php echo lang('we'); ?></h3>
                            
                            <p><?php echo lang('address'); ?>
                            </p>
                            <span><?php echo lang('mail'); ?></span> <br> <span><?php echo lang('phone'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Contact Us Section -->

<?php include 'contactFooter.php'; ?>