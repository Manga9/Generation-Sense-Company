<?php
    if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
        include 'languages/en.php';
    } else {
        include 'languages/ar.php';
    }

    include "connect.php";
?>


<?php
    if (isset($_GET['service']) && $_GET['service'] == 'google-ad') {
        include 'servNav.php';
?>
    <section class='show-services'>
        <div class='container'>
            <div class='info'>
                <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                    <h2><?php echo lang('service-one') ?></h2>
                <?php } else { ?>
                    <h2 class='ar'><?php echo lang('service-one') ?></h2>
                <?php } ?>
                <div class='row'>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                        <div class='col-sm-4'>
                            <div class='box google box1'>
                                <h3>Entry Level</h3>
                                <ul>
                                <li>3 Text Ads</li>
                                <li>150:180 clicks/day</li>
                                <li>Duration 7 days</li>
                                <li class='price'>$85/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box google box2'>
                                <h3>Extended</h3>
                                <ul>
                                <li>6 Text Ads</li>
                                <li>180:210 clicks/day</li>
                                <li>Duration 15 days</li>
                                <li class='price'>$170.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box google box3'>
                                <h3>Comprehensive</h3>
                                <ul>
                                <li>10 Text Ads</li>
                                <li>250:300 clicks/day</li>
                                <li>Duration 20 days</li>
                                <li class='price'>$250.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>

                    <div class='details'>
                        <h3><?php echo lang('service-one-list-head') ?></h3>
                        <ul>
                            <li><h4><?php echo lang('country') ?><h4></li>
                            <li><h4><?php echo lang('keys') ?><h4></li>
                            <li><h4><?php echo lang('much') ?><h4></li>
                            <li><h4><?php echo lang('always') ?><h4></li>
                            <li><h4><?php echo lang('stop') ?><h4></li>
                            <li><h4><?php echo lang('report') ?><h4></li>
                        </ul>
                    </div>
                    <?php
                    } else {
                    ?>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box google box3'>
                                <h3>الباقة الشاملة</h3>
                                <ul>
                                <li>10 اعلانات نصية مختلفة</li>
                                <li>250 –300 ضغطة/يوم</li>
                                <li>20 يوم</li>
                                <li class='price'>$250.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box google box2'>
                                <h3>باقة المستوى الثانى</h3>
                                <ul>
                                <li>6 اعلانات نصية مختلفة</li>
                                <li>180 –210 ضغطة/يوم</li>
                                <li>15يوم</li>
                                <li class='price'>$170.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box google box1'>
                                <h3>باقة المستوى الأول</h3>
                                <ul>
                                <li>3 اعلانات نصية مختلفة</li>
                                <li>150 – 180 ضغطة/يوم</li>
                                <li>7 أيام</li>
                                <li class='price'>$85.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box google box1'>
                                <h3>باقة المستوى الأول</h3>
                                <ul>
                                <li>3 اعلانات نصية مختلفة</li>
                                <li>150 – 180 ضغطة/يوم</li>
                                <li>7 أيام</li>
                                <li class='price'>$85.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box google box2'>
                                <h3>باقة المستوى الثانى</h3>
                                <ul>
                                <li>6 اعلانات نصية مختلفة</li>
                                <li>180 –210 ضغطة/يوم</li>
                                <li>15يوم</li>
                                <li class='price'>$170.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box google box3'>
                                <h3>الباقة الشاملة</h3>
                                <ul>
                                <li>10 اعلانات نصية مختلفة</li>
                                <li>250 –300 ضغطة/يوم</li>
                                <li>20 يوم</li>
                                <li class='price'>$250.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                    <div class='details ar'>
                        <h3><?php echo lang('service-one-list-head') ?></h3>
                        <ul>
                            <li><h4><?php echo lang('country') ?><h4></li>
                             <p><?php echo lang('country-text') ?></p>
                            <li><h4><?php echo lang('keys') ?><h4></li>
                             <p><?php echo lang('keys-text') ?></p>
                            <li><h4><?php echo lang('much') ?><h4></li>
                             <p><?php echo lang('much-text') ?></p>
                            <li><h4><?php echo lang('always') ?><h4></li>
                             <p><?php echo lang('always-text') ?></p>
                            <li><h4><?php echo lang('stop') ?><h4></li>
                             <p><?php echo lang('stop-text') ?></p>
                            <li><h4><?php echo lang('report') ?><h4></li>
                             <p><?php echo lang('report-text') ?></p>
                        </ul>
                    </div>
                <?php } ?>
                </div>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<a href='?lang=en#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    } else {
                        echo "<a href='?lang=ar#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    }
                ?>
            </div>
        </div>
    </section>
<?php
        include 'serviceFooter.php';
    }  else if (isset($_GET['service']) && $_GET['service'] == 'seo') {
       include 'servNav.php';
?>
    <section class='show-services'>
        <div class='container'>
            <div class='info'>
                <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                    <h2><?php echo lang('service-two') ?></h2>
                <?php } else { ?>
                    <h2 class='ar'><?php echo lang('service-two') ?></h2>
                <?php } ?>
                <div class='row'>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                        <div class='col-sm-4'>
                            <div class='box seo box1'>
                                <h3>Lite</h3>
                                <ul>
                                <li>3 Keywords</li>
                                <li>Full Technical Website Analysis</li>
                                <li>Onpage Optimization</li>
                                <li>Optimize Page Titles & Description</li>
                                <li>50 Web Directories</li>
                                <li>300 Dofollow Backlinks</li>
                                <li>Create XML Sitemap</li>
                                <li>Create Robots.txt File</li>
                                <li>Google Search Console Registration</li>
                                <li>Google Analytics Registration</li>
                                <li>Social Media Accounts Connection</li>
                                <li class='price'>$225.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box seo box2'>
                                <h3>Pro</h3>
                                <ul>
                                <li>5 Keywords</li>
                                <li>Full Technical Website Analysis</li>
                                <li>Onpage Optimization</li>
                                <li>Optimize Page Titles & Description</li>
                                <li>150 Web Directories</li>
                                <li>500 Dofollow Backlinks</li>
                                <li>Create XML Sitemap</li>
                                <li>Create Robots.txt File</li>
                                <li>Google Search Console Registration</li>
                                <li>Google Analytics Registration</li>
                                <li>Social Media Accounts Connection</li>
                                <li>Weekly Reports</li>
                                <li class='price'>$340.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box seo box3'>
                                <h3>Expert</h3>
                                <ul>
                                <li>10 Keywords</li>
                                <li>Full Technical Website Analysis</li>
                                <li>Onpage Optimization</li>
                                <li>Optimize Page Titles & Description</li>
                                <li>300 Web Directories</li>
                                <li>1000 Dofollow Backlinks</li>
                                <li>Create XML Sitemap</li>
                                <li>Create Robots.txt File</li>
                                <li>Google Search Console Registration</li>
                                <li>Google Analytics Registration</li>
                                <li>Social Media Accounts Connection</li>
                                <li>Weekly Reports</li>
                                <li>Fix All Website Issues</li>
                                <li>Motion graphic starter package</li>
                                <li>Startup content writing package</li>
                                <li class='price'>$450.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box seo box3'>
                                <h3>الباقة المتخصصة</h3>
                                <ul>
                                <li>10 كلمات مفتاحية</li>
                                <li>تحليل فنى شامل للموقع</li>
                                <li>تهيئة المواقع داخليا</li>
                                <li>تركيب الاضافات اللازمة</li>
                                <li>تعديل/تجديد العنوان , الوصف</li>
                                <li>ادلة المواقع : 300 دليل</li>
                                <li>باك لينك دوفلو متنوع : 1000</li>
                                <li>تفعيل خريطة للموقع</li>
                                <li>انشاء ملف Robots.txt</li>
                                <li>تفعيل جوجل ويب ماستر</li>
                                <li>تفعيل جوجل اناليسيس</li>
                                <li>الربط بمواقع التواصل الاجتماعى</li>
                                <li>تقارير أسبوعية</li>
                                <li>تحليل ومتابعه</li>
                                <li>أضافة وحل مشاكل البيانات المنظمة</li>
                                <li>Motion graphic starter package</li>
                                <li>Startup content writing package</li>
                                <li class='price'>$450.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box seo box2'>
                                <h3>الباقة الإحترافية</h3>
                                <ul>
                                <li>5 كلمات مفتاحية</li>
                                <li>تحليل فنى شامل للموقع</li>
                                <li>تهيئة المواقع داخليا</li>
                                <li>تركيب الاضافات اللازمة</li>
                                <li>تعديل/تجديد العنوان , الوصف</li>
                                <li>ادلة المواقع : 150 دليل</li>
                                <li>باك لينك دوفلو متنوع : 500</li>
                                <li>تفعيل خريطة للموقع</li>
                                <li>انشاء ملف Robots.txt</li>
                                <li>تفعيل جوجل ويب ماستر</li>
                                <li>تفعيل جوجل اناليسيس</li>
                                <li>الربط بمواقع التواصل الاجتماعى</li>
                                <li>تقارير أسبوعية</li>
                                <li>تحليل ومتابعه</li>
                                <li class='price'>$340.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box seo box1'>
                                <h3>الباقة البسيطة</h3>
                                <ul>
                                <li>3 كلمات مفتاحية</li>
                                <li>تحليل فنى شامل للموقع</li>
                                <li>تهيئة المواقع داخليا</li>
                                <li>تركيب الاضافات اللازمة</li>
                                <li>تعديل/تجديد العنوان , الوصف</li>
                                <li>ادلة المواقع : 50 دليل</li>
                                <li>باك لينك دوفلو متنوع : 300</li>
                                <li>تفعيل خريطة للموقع</li>
                                <li>انشاء ملف Robots.txt</li>
                                <li>تفعيل جوجل ويب ماستر</li>
                                <li>تفعيل جوجل اناليسيس</li>
                                <li>الربط بمواقع التواصل الاجتماعى</li>
                                <li class='price'>$225.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box seo box1'>
                                <h3>الباقة البسيطة</h3>
                                <ul>
                                <li>3 كلمات مفتاحية</li>
                                <li>تحليل فنى شامل للموقع</li>
                                <li>تهيئة المواقع داخليا</li>
                                <li>تركيب الاضافات اللازمة</li>
                                <li>تعديل/تجديد العنوان , الوصف</li>
                                <li>ادلة المواقع : 50 دليل</li>
                                <li>باك لينك دوفلو متنوع : 300</li>
                                <li>تفعيل خريطة للموقع</li>
                                <li>انشاء ملف Robots.txt</li>
                                <li>تفعيل جوجل ويب ماستر</li>
                                <li>تفعيل جوجل اناليسيس</li>
                                <li>الربط بمواقع التواصل الاجتماعى</li>
                                <li class='price'>$225.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box seo box2'>
                                <h3>الباقة الإحترافية</h3>
                                <ul>
                                <li>5 كلمات مفتاحية</li>
                                <li>تحليل فنى شامل للموقع</li>
                                <li>تهيئة المواقع داخليا</li>
                                <li>تركيب الاضافات اللازمة</li>
                                <li>تعديل/تجديد العنوان , الوصف</li>
                                <li>ادلة المواقع : 150 دليل</li>
                                <li>باك لينك دوفلو متنوع : 500</li>
                                <li>تفعيل خريطة للموقع</li>
                                <li>انشاء ملف Robots.txt</li>
                                <li>تفعيل جوجل ويب ماستر</li>
                                <li>تفعيل جوجل اناليسيس</li>
                                <li>الربط بمواقع التواصل الاجتماعى</li>
                                <li>تقارير أسبوعية</li>
                                <li>تحليل ومتابعه</li>
                                <li class='price'>$340.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box seo box3'>
                                <h3>الباقة المتخصصة</h3>
                                <ul>
                                <li>10 كلمات مفتاحية</li>
                                <li>تحليل فنى شامل للموقع</li>
                                <li>تهيئة المواقع داخليا</li>
                                <li>تركيب الاضافات اللازمة</li>
                                <li>تعديل/تجديد العنوان , الوصف</li>
                                <li>ادلة المواقع : 300 دليل</li>
                                <li>باك لينك دوفلو متنوع : 1000</li>
                                <li>تفعيل خريطة للموقع</li>
                                <li>انشاء ملف Robots.txt</li>
                                <li>تفعيل جوجل ويب ماستر</li>
                                <li>تفعيل جوجل اناليسيس</li>
                                <li>الربط بمواقع التواصل الاجتماعى</li>
                                <li>تقارير أسبوعية</li>
                                <li>تحليل ومتابعه</li>
                                <li>أضافة وحل مشاكل البيانات المنظمة</li>
                                <li>Motion graphic starter package</li>
                                <li>Startup content writing package</li>
                                <li class='price'>$450.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                <?php } ?>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<a href='?lang=en#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    } else {
                        echo "<a href='?lang=ar#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    }
                ?>
            </div>
        </div>
    </section>
<?php
    include 'serviceFooter.php';
    } else if (isset($_GET['service']) && $_GET['service'] == 'motion-graphic') {
       include 'servNav.php';
?>
    <section class='show-services'>
        <div class='container'>
            <div class='info'>
                <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                    <h2><?php echo lang('service-three') ?></h2>
                <?php } else { ?>
                    <h2 class='ar'><?php echo lang('service-three') ?></h2>
                <?php } ?>
                <div class='row'>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                        <div class='col-sm-4'>
                            <div class='box box1'>
                                <h3>Standard</h3>
                                <ul>
                                <li>30 Seconds Video</li>
                                <li>4 Videos Monthly</li>
                                <li>Animated Photos</li>
                                <li>2D Text</li>
                                <li>Background Music</li>
                                <li class='price'>$225.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box motion box2'>
                                <h3>Deluxe</h3>
                                <ul>
                                <li>60 Seconds Video</li>
                                <li>8 Videos Monthly</li>
                                <li>Animated Photos</li>
                                <li>Animated Text</li>
                                <li>Background Music</li>
                                <li>Sound Effects</li>
                                <li class='price'>$450.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box motion box3'>
                                <h3>Ultimate</h3>
                                <ul>
                                <li>120 Seconds Video</li>
                                <li>12 Videos Monthly</li>
                                <li>Animated Photos</li>
                                <li>Animated Text</li>
                                <li>Cartoon</li>
                                <li>Videos Scenario</li>
                                <li>Background Music</li>
                                <li>Sound Effects</li>
                                <li class='price'>$575.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box motion box3'>
                                <h3>الباقة القصوى</h3>
                                <ul>
                                <li>فيديو 120 ثانية</li>
                                <li>12 فيديو شهريا</li>
                                <li>سيناريو للفيديوهات</li>
                                <li>نص و صور و رسوم متحركة</li>
                                <li>خلفية موسيقية</li>
                                <li>مؤثرات صوتية خاصة</li>
                                <li class='price'>$575.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box motion box2'>
                                <h3>الباقة الثانوية</h3>
                                <ul>
                                <li>فيديو 60 ثانية</li>
                                <li>8 فيديوهات شهريا</li>
                                <li>نص و صور متحركة</li>
                                <li>خلفية موسيقية</li>
                                <li>مؤثرات صوتية خاصة</li>
                                <li class='price'>$450.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box box1'>
                                <h3>الباقة الأساسية</h3>
                                <ul>
                                <li>فيديو 30 ثانية</li>
                                <li>4 فيديوهات شهريا</li>
                                <li>صور متحركة</li>
                                <li>نص ثنائى الابعاد 2D</li>
                                <li>خلفية موسيقية</li>
                                <li class='price'>$225.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box box1'>
                                <h3>الباقة الأساسية</h3>
                                <ul>
                                <li>فيديو 30 ثانية</li>
                                <li>4 فيديوهات شهريا</li>
                                <li>صور متحركة</li>
                                <li>نص ثنائى الابعاد 2D</li>
                                <li>خلفية موسيقية</li>
                                <li class='price'>$225.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box motion box2'>
                                <h3>الباقة الثانوية</h3>
                                <ul>
                                <li>فيديو 60 ثانية</li>
                                <li>8 فيديوهات شهريا</li>
                                <li>نص و صور متحركة</li>
                                <li>خلفية موسيقية</li>
                                <li>مؤثرات صوتية خاصة</li>
                                <li class='price'>$450.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box motion box3'>
                                <h3>الباقة القصوى</h3>
                                <ul>
                                <li>فيديو 120 ثانية</li>
                                <li>12 فيديو شهريا</li>
                                <li>سيناريو للفيديوهات</li>
                                <li>نص و صور و رسوم متحركة</li>
                                <li>خلفية موسيقية</li>
                                <li>مؤثرات صوتية خاصة</li>
                                <li class='price'>$575.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                <?php } ?>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<a href='?lang=en#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    } else {
                        echo "<a href='?lang=ar#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    }
                ?>
            </div>
        </div>
    </section>

<?php 
    include 'serviceFooter.php';
     } else if (isset($_GET['service']) && $_GET['service'] == 'content-writing') {
       include 'servNav.php';
?>
    <section class='show-services'>
        <div class='container'>
            <div class='info'>
                <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                    <h2><?php echo lang('service-four') ?></h2>
                <?php } else { ?>
                    <h2 class='ar'><?php echo lang('service-four') ?></h2>
                <?php } ?>
                <div class='row'>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                        <div class='col-sm-4'>
                            <div class='box box1'>
                                <h3>Start Up</h3>
                                <ul>
                                <li>Home Page</li>
                                <li>Contact Us Page</li>
                                <li>About Us Page</li>
                                <li>Search Engine Optimized Content</li>
                                <li>One Extra Page</li>
                                <li class='price'>$170.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box box2'>
                                <h3>Economy</h3>
                                <ul>
                                <li>Home Page</li>
                                <li>Contact Us Page</li>
                                <li>About Us Page</li>
                                <li>Search Engine Optimized Content</li>
                                <li>Five Extra Page</li>
                                <li class='price'>$225.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box box3'>
                                <h3>Enterprise</h3>
                                <ul>
                                <li>Home Page</li>
                                <li>Contact Us Page</li>
                                <li>About Us Page</li>
                                <li>Search Engine Optimized Content</li>
                                <li>Ten Extra Page</li>
                                <li class='price'>$285.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box box3'>
                                <h3>الباقة الممتازة</h3>
                                <ul>
                                <li>الصفحة الرئيسية</li>
                                <li>صفحة اتصل بنا</li>
                                <li>صفحة من نحن</li>
                                <li>محتوى متوافق مع محركات البحث</li>
                                <li>اضافة عدد 10 صفحات</li>
                                <li class='price'>$285.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box box2'>
                                <h3>الباقة الإقتصادية</h3>
                                <ul>
                                <li>الصفحة الرئيسية</li>
                                <li>صفحة اتصل بنا</li>
                                <li>صفحة من نحن</li>
                                <li>محتوى متوافق مع محركات البحث</li>
                                <li>اضافة عدد 5 صفحات</li>
                                <li class='price'>$225.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box box1'>
                                <h3>باقة البداية</h3>
                                <ul>
                                <li>الصفحة الرئيسية</li>
                                <li>صفحة اتصل بنا</li>
                                <li>صفحة من نحن</li>
                                <li>محتوى متوافق مع محركات البحث</li>
                                <li>اضافة صفحة واحدة</li>
                                <li class='price'>$170.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box box1'>
                                <h3>باقة البداية</h3>
                                <ul>
                                <li>الصفحة الرئيسية</li>
                                <li>صفحة اتصل بنا</li>
                                <li>صفحة من نحن</li>
                                <li>محتوى متوافق مع محركات البحث</li>
                                <li>اضافة صفحة واحدة</li>
                                <li class='price'>$170.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box box2'>
                                <h3>الباقة الإقتصادية</h3>
                                <ul>
                                <li>الصفحة الرئيسية</li>
                                <li>صفحة اتصل بنا</li>
                                <li>صفحة من نحن</li>
                                <li>محتوى متوافق مع محركات البحث</li>
                                <li>اضافة عدد 5 صفحات</li>
                                <li class='price'>$225.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box box3'>
                                <h3>الباقة الممتازة</h3>
                                <ul>
                                <li>الصفحة الرئيسية</li>
                                <li>صفحة اتصل بنا</li>
                                <li>صفحة من نحن</li>
                                <li>محتوى متوافق مع محركات البحث</li>
                                <li>اضافة عدد 10 صفحات</li>
                                <li class='price'>$285.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                <?php } ?>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<a href='?lang=en#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    } else {
                        echo "<a href='?lang=ar#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    }
                ?>
            </div>
        </div>
    </section>

<?php 
    include 'serviceFooter.php';
     } else if (isset($_GET['service']) && $_GET['service'] == 'smo') {
       include 'servNav.php';
?>
    <section class='show-services'>
        <div class='container'>
            <div class='info'>
                <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                    <h2><?php echo lang('service-five') ?></h2>
                <?php } else { ?>
                    <h2 class='ar'><?php echo lang('service-five') ?></h2>
                <?php } ?>
                <div class='row'>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                        <div class='col-sm-4'>
                            <div class='box box1 smo'>
                                <h3>Small Business</h3>
                                <ul>
                                <li>2 Platforms</li>
                                <li>One Daily Post</li>
                                <li>One time/monthly Cover & Profile Alteration</li>
                                <li>10 Hours Comment Responding</li>
                                <li class='price'>$225.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box box2 smo'>
                                <h3>Business</h3>
                                <ul>
                                <li>4 Platforms</li>
                                <li>Two Daily Posts</li>
                                <li>Two times/monthly Cover & Profile Alteration</li>
                                <li>18 Hours Comment Responding</li>
                                <li class='price'>$395.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box box3 smo'>
                                <h3>Corporate</h3>
                                <ul>
                                <li>All Platforms</li>
                                <li>Three Daily Posts</li>
                                <li>Two times/monthly Cover & Profile Alteration</li>
                                <li>24 Hours Comment Responding</li>
                                <li class='price'>$575.00/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4 col-sm-offset-8'>
                            <div class='box box4 smo'>
                                <h3>Paid Ads</h3>
                                <ul>
                                <h4> Choose From :</h4>
                                <li>Website Traffic Campaign</li>
                                <li>Post Reach Campaign</li>
                                <li>Page Likes Campaign</li>
                                <li>Video Views Campaign</li>
                                <li>Post Engagement Campaign</li>
                                <li>Note: 10% of Campaign Cost will be added for Campaign management & Analysis.</li>
                                <li class='price'>All Campaign Start from 200 $/month</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box box3'>
                                <h3>باضة الشاركات الكبرى</h3>
                                <ul>
                                <li>السوشيال ميديا كاملة</li>
                                <li>4 بوست يوميا</li>
                                <li>تغيير كفر وبروفايل 2 مرة شهريا</li>
                                <li>الرد على جميع الكومنتات 24 ساعه</li>
                                <li class='price'>$575.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box box2'>
                                <h3>باقة الشركات المتوسطة</h3>
                                <ul>
                                <li>4 منصات  من اختيارك</li>
                                <li>3 بوست يوميا</li>
                                <li>تغيير كفر وبروفايل 2 مرة شهريا</li>
                                <li>الرد على جميع الكومنتات 24 ساعه</li>
                                <li class='price'>$395.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box box1'>
                                <h3>باقة الشركات الصغيرة</h3>
                                <ul>
                                <li>منصتين من اختيارك</li>
                                <li>بوست يوميا</li>
                                <li>تغيير كفر وبروفايل مرة شهريا</li>
                                <li>الرد على جميع الكومنتات 24 ساعه</li>
                                <li class='price'>$225.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4 col-sm-offset-8'>
                            <div class='ar box box4 smo'>
                                <h3>باقى الاعلانات المدفوعة</h3>
                                <ul>
                                <h4>اختر من بين :</h4>
                                <li>جلب الزوار الى موقعك</li>
                                <li>نشر و مشاهدة اعلانك لاكبر عدد ممكن</li>
                                <li>الحصزل على معجبين مستهدفين و مهتمين بالصفحة</li>
                                <li>زيادة عدد المشاهدات للففيديوهات الخاصة بك</li>
                                <li>زيادة التفاعل على منشوراتك كالتعليقات و الاعجابات و المشاركات</li>
                                <li>ملحوظة: يضاف على قيمة الحملة الاعلانية 10% للادارة و تحليل اداء الاعلان</li>
                                <li class='price'>السعر يبدا من $200/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box box1'>
                                <h3>باقة الشركات الصغيرة</h3>
                                <ul>
                                <li>منصتين من اختيارك</li>
                                <li>بوست يوميا</li>
                                <li>تغيير كفر وبروفايل مرة شهريا</li>
                                <li>الرد على جميع الكومنتات 24 ساعه</li>
                                <li class='price'>$225.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box box2'>
                                <h3>باقة الشركات المتوسطة</h3>
                                <ul>
                                <li>4 منصات  من اختيارك</li>
                                <li>3 بوست يوميا</li>
                                <li>تغيير كفر وبروفايل 2 مرة شهريا</li>
                                <li>الرد على جميع الكومنتات 24 ساعه</li>
                                <li class='price'>$395.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box box3'>
                                <h3>باضة الشاركات الكبرى</h3>
                                <ul>
                                <li>السوشيال ميديا كاملة</li>
                                <li>4 بوست يوميا</li>
                                <li>تغيير كفر وبروفايل 2 مرة شهريا</li>
                                <li>الرد على جميع الكومنتات 24 ساعه</li>
                                <li class='price'>$575.00/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box box4 smo'>
                                <h3>باقى الاعلانات المدفوعة</h3>
                                <ul>
                                <h4>اختر من بين :</h4>
                                <li>جلب الزوار الى موقعك</li>
                                <li>نشر و مشاهدة اعلانك لاكبر عدد ممكن</li>
                                <li>الحصزل على معجبين مستهدفين و مهتمين بالصفحة</li>
                                <li>زيادة عدد المشاهدات للففيديوهات الخاصة بك</li>
                                <li>زيادة التفاعل على منشوراتك كالتعليقات و الاعجابات و المشاركات</li>
                                <li>ملحوظة: يضاف على قيمة الحملة الاعلانية 10% للادارة و تحليل اداء الاعلان</li>
                                <li class='price'>السعر يبدا من $200/شهريا</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                <?php } ?>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<a href='?lang=en#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    } else {
                        echo "<a href='?lang=ar#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    }
                ?>
            </div>
        </div>
    </section>

<?php 
    include 'serviceFooter.php';
     } else if (isset($_GET['service']) && $_GET['service'] == 'web') {
       include 'servNav.php';
?>
    <section class='show-services'>
        <div class='container'>
            <div class='info'>
                <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                    <h2><?php echo lang('service-seven') ?></h2>
                <?php } else { ?>
                    <h2 class='ar'><?php echo lang('service-seven') ?></h2>
                <?php } ?>
                <div class='row'>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                        <div class='col-sm-4'>
                            <div class='box web box1'>
                                <h3>One Page Site</h3>
                                <ul>
                                <li>One Page Website</li>
                                <li>500 Mega Hosting</li>
                                <li>3 Emails</li>
                                <li>Duration 5 Days</li>
                                <li class='price'>$120.00</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box web box2'>
                                <h3>Beginners</h3>
                                <ul>
                                <li>Simple Website</li>
                                <li>5 Pages Websites</li>
                                <li>1 Giga Hosting</li>
                                <li>5 Emails</li>
                                <li>Customized Interface</li>
                                <li>Duration 10 Days</li>
                                <li class='price'>$225.00</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box web box3'>
                                <h3>Professional</h3>
                                <ul>
                                <li>Professional Website</li>
                                <li>20 Pages Website</li>
                                <li>3 Giga Hosting</li>
                                <li>10 Emails</li>
                                <li>Professional Interface</li>
                                <li>Content Management System</li>
                                <li>Duration 21 Days</li>
                                <li class='price'>$575.00</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box web box1'>
                                <h3>Advanced</h3>
                                <ul>
                                <li>Specialized Website</li>
                                <li>Professional interface</li>
                                <li>Suitable for Trading Companies, Real Estate Companies, Contracting Companies, Factories & Tourism Companies. </li>
                                <li>Content Management System</li>
                                <li>5 Giga Hosting</li>
                                <li>15 Emails</li>
                                <li>Duration 30 Days</li>
                                <li class='price'>$700.00</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box web box2'>
                                <h3>E-commerce</h3>
                                <ul>
                                <li>E-Commerce Website</li>
                                <li>Professional Interface</li>
                                <li>Suitable for online Markets, Haraj Websites, Classified Ads Websites and online Products Showrooms Websites.</li>
                                <li>Content Management System</li>
                                <li>10 Giga Hosting</li>
                                <li>20 Emails</li>
                                <li>Duration 2 Months</li>
                                <li class='price'>$850.00</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box web box3'>
                                <h3>Extras (Optional)</h3>
                                <ul>
                                <li>Blog</li>
                                <li>Online Payment System.</li>
                                <li>Online Cart.</li>
                                <li>Chat System</li>
                                <li>Website Development</li>
                                <li>Products Review</li>
                                <li>Responsiveness on All Devices</li>
                                <li>Product Sharing</li>
                                <li>Website Rebuilding</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>

                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box web box3'>
                                <h3>باقة الموقع الإحترافى</h3>
                                <ul>
                                <li>تصميم موقع إحترافى</li>
                                <li>تصميم واجهه احترافية</li>
                                <li>موقع 20 صفحة</li>
                                <li>لوحة تحكم بمحتوى الموقع</li>
                                <li>إستضافة 1 جيجا</li>
                                <li>عدد 10 إيميل</li>
                                <li class='price'>$575.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box web box2'>
                                <h3>باقة الموقع البسيط</h3>
                                <ul>
                                <li>تصميم موقع بسيط</li>
                                <li>تصميم واجهه معبرة عن الموقع</li>
                                <li>الموقع 5 صفحات</li>
                                <li>لوحة تحكم بمحتوى الموقع</li>
                                <li>عدد 3 إيميل</li>
                                <li class='price'>$225.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box web box1'>
                                <h3>باقة الصفحة الواحدة</h3>
                                <ul>
                                <li>عرض الصفحة الواحدة</li>
                                <li>موقع صفحة واحدة</li>
                                <li>500 ميجا استضافة</li>
                                <li>عدد 3 إيميل</li>
                                <li class='price'>$120.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box web box3'>
                                <h3>إضافات اختيارية</h3>
                                <ul>
                                <li>إضافات للمواقع اختيارية</li>
                                <li>تطوير مواقع</li>
                                <li>تحديث عرض الموقع</li>
                                <li>توافقية للأجهزة</li>
                                <li>تحسين لمحركات البحث</li>
                                <li>ادراج الموقع بمحركات البحث</li>
                                <li class='price'>السعر حسب الاضافات المطلوبة</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box web box2'>
                                <h3>باقة المواقع التجارية</h3>
                                <ul>
                                <li>المواقع التجارية للشركات</li>
                                <li>تصميم واجهه احترافية
يناسب الشركات التجارية مواقع إعلانية – مواقع عرض المنتجات مواقع تفاعلية للمشاريع والأفكار الخاصة</li>
                                <li>لوحة تحكم بمحتوى الموقع
إستضافة 10 جيجا</li>
                                <li>مدة العمل تبدأ من شهر</li>
                                <li class='price'>$850.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box web box1'>
                                <h3>باقة المواقع المتقدمة</h3>
                                <ul>
                                <li>تصميم مواقع متخصصة</li>
                                <li>تصميم واجهة إحترافية</li>
                                <li>يناسب الشركات السياحية - شركات المقاولات و التسويق العقارى - المصانع و المؤسسات التجارية و الإعمال</li>
                                <li>لوحة تحكم بمحتوى الموقع</li>
                                <li>استضافة 5 جيجا</li>
                                <li>عدد 20 إيميل</li>
                                <li>مدة العمل شهر</li>
                                <li class='price'>$700.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box web box1'>
                                <h3>باقة الصفحة الواحدة</h3>
                                <ul>
                                <li>عرض الصفحة الواحدة</li>
                                <li>موقع صفحة واحدة</li>
                                <li>500 ميجا استضافة</li>
                                <li>عدد 3 إيميل</li>
                                <li class='price'>$120.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>


                        <div class='visible-xs col-sm-4'>
                            <div class='ar box web box2'>
                                <h3>باقة الموقع البسيط</h3>
                                <ul>
                                <li>تصميم موقع بسيط</li>
                                <li>تصميم واجهه معبرة عن الموقع</li>
                                <li>الموقع 5 صفحات</li>
                                <li>لوحة تحكم بمحتوى الموقع</li>
                                <li>عدد 3 إيميل</li>
                                <li class='price'>$225.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box web box3'>
                                <h3>باقة الموقع الإحترافى</h3>
                                <ul>
                                <li>تصميم موقع إحترافى</li>
                                <li>تصميم واجهه احترافية</li>
                                <li>موقع 20 صفحة</li>
                                <li>لوحة تحكم بمحتوى الموقع</li>
                                <li>إستضافة 1 جيجا</li>
                                <li>عدد 10 إيميل</li>
                                <li class='price'>$575.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box web box1'>
                                <h3>باقة المواقع المتقدمة</h3>
                                <ul>
                                <li>تصميم مواقع متخصصة</li>
                                <li>تصميم واجهة إحترافية</li>
                                <li>يناسب الشركات السياحية - شركات المقاولات و التسويق العقارى - المصانع و المؤسسات التجارية و الإعمال</li>
                                <li>لوحة تحكم بمحتوى الموقع</li>
                                <li>استضافة 5 جيجا</li>
                                <li>عدد 20 إيميل</li>
                                <li>مدة العمل شهر</li>
                                <li class='price'>$700.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box web box2'>
                                <h3>باقة المواقع التجارية</h3>
                                <ul>
                                <li>المواقع التجارية للشركات</li>
                                <li>تصميم واجهه احترافية
يناسب الشركات التجارية مواقع إعلانية – مواقع عرض المنتجات مواقع تفاعلية للمشاريع والأفكار الخاصة</li>
                                <li>لوحة تحكم بمحتوى الموقع
إستضافة 10 جيجا</li>
                                <li>مدة العمل تبدأ من شهر</li>
                                <li class='price'>$850.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box web box3'>
                                <h3>إضافات اختيارية</h3>
                                <ul>
                                <li>إضافات للمواقع اختيارية</li>
                                <li>تطوير مواقع</li>
                                <li>تحديث عرض الموقع</li>
                                <li>توافقية للأجهزة</li>
                                <li>تحسين لمحركات البحث</li>
                                <li>ادراج الموقع بمحركات البحث</li>
                                <li class='price'>السعر حسب الاضافات المطلوبة</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
     
                <?php } ?>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<a href='?lang=en#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    } else {
                        echo "<a href='?lang=ar#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    }
                ?>
            </div>
        </div>
    </section>

<?php 
    include 'serviceFooter.php';
     } else if (isset($_GET['service']) && $_GET['service'] == 'graphic') {
       include 'servNav.php';
?>
     <section class='show-services'>
        <div class='container'>
            <div class='info'>
                <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                    <h2><?php echo lang('service-eight') ?></h2>
                <?php } else { ?>
                    <h2 class='ar'><?php echo lang('service-eight') ?></h2>
                <?php } ?>
                <div class='row'>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { ?>
                        <div class='col-sm-4'>
                            <div class='box graphic box1'>
                                <h3>Bronze</h3>
                                <ul>
                                <h4>Choose 3 Products From :</h4>
                                <li>Company Logo Design</li>
                                <li>Official Documents Design</li>
                                <li>Business Card Design</li>
                                <li>Exchange, Receipt & Bills Design</li>
                                <li>Official Memorandum Design</li>
                                <li>Stamp Design</li>
                                <h4 class='border'>Modifications to selected products</h4>
                                <li>Duration 3 Days</li>
                                <li class='price'>$225.00</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box graphic box2'>
                                <h3>Silver</h3>
                                <ul>
                                <h4>Choose 6 Products From :</h4>
                                <li>Company Logo Design</li>
                                <li>Official Documents Design</li>
                                <li>Business Card Design</li>
                                <li>Exchange, Receipt & Bills Design</li>
                                <li>Official Memorandum Design</li>
                                <li>Stamp Design</li>
                                <li>Medium & A4 Envelope Design</li>
                                <h4 class='border'>Modifications to selected products</h4>
                                <li>Duration 7 Days</li>
                                <li class='price'>$350.00</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-4'>
                            <div class='box graphic box3'>
                                <h3>Gold</h3>
                                <ul>
                                <li>Company Logo Design</li>
                                <li>Official Documents Design</li>
                                <li>Business Card Design</li>
                                <li>Exchange, Receipt & Bills Design</li>
                                <li>Official Memorandum Design</li>
                                <li>Stamp Design</li>
                                <li>Medium & A4 Envelope Design</li>
                                <li>Advertising Banners Design</li>
                                <h4 class='border'>Modifications to selected products</h4>
                                <li>Duration 9 Days</li>
                                <li class='price'>$450.00</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                        <div class='col-sm-offset-8 col-sm-4'>
                            <div class='box graphic box4'>
                                <h3>Platinum</h3>
                                <ul>
                                <li>Company Logo Design</li>
                                <li>Official Documents Design</li>
                                <li>Business Card Design</li>
                                <li>Exchange, Receipt & Bills Design</li>
                                <li>Official Memorandum Design</li>
                                <li>Stamp Design</li>
                                <li>Medium & A4 Envelope Design</li>
                                <li>Advertising Banners Design</li>
                                <li>Company Profile Design</li>
                                <li>One Page Site Offer from Web Development Package </li>
                                <li>3 Products from Web Development Extras Package </li>
                                <h4 class='border border-z'>Suitable for Newly Established Companies OR to Rebrand a Well Established Companies</h4>
                                <li>Duration 15 Days</li>
                                <li class='price'>$570.00</li>
                                </ul>
                                <a href='contact.php?lang=en'><button class='btn btn-info btn-block'>Order Now</button></a>                            
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>

                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box graphic box3'>
                                <h3>الباقة الذهبية</h3>
                                <ul>
                                <li>تصميم شعار شركة</li>
                                <li>تصميم ورق رسمى</li>
                                <li>تصميم بزنس كارد</li>
                                <li>تصميم مستندات كارد و صرف و فواتير</li>
                                <li>تصميم مذكرة ملاحظات</li>
                                <li>تصميم ختم</li>
                                <li>تصميم ظروف متوسطة و A4</li>
                                <li>تصميمات اللوحة الإعلانية</li>
                                <h4 class='border'>تعديلات مفتوحة على جميع المنتجات</h4>
                                <li>مدة العمل : 9  أيام</li>
                                <li class='price'>$450.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box graphic box2'>
                                <h3>الباقة الفضية</h3>
                                <ul>
                                <h4>إختيار 6 خدمات من : </h4>
                                <li>تصميم شعار شركة</li>
                                <li>تصميم ورق رسمى</li>
                                <li>تصميم بزنس كارد</li>
                                <li>تصميم مستندات كارد و صرف و فواتير</li>
                                <li>تصميم مذكرة ملاحظات</li>
                                <li>تصميم ختم</li>
                                <li>تصميم ظروف متوسطة و A4</li>
                                <li>تصميمات اللوحة الإعلانية</li>
                                <h4 class='border'>تعديلات على المنتجات المرشحة</h4>
                                <li>مدة العمل : 7  أيام</li>
                                <li class='price'>$350.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='hidden-xs col-sm-4'>
                            <div class='ar box graphic box1'>
                                <h3>الباقة البرونزية</h3>
                                <ul>
                                <h4>إختيار 3 خدمات من : </h4>
                                <li>تصميم شعار شركة</li>
                                <li>تصميم ورق رسمى</li>
                                <li>تصميم بزنس كارد</li>
                                <li>تصميم مستندات كارد و صرف و فواتير</li>
                                <li>تصميم مذكرة ملاحظات</li>
                                <li>تصميم ختم</li>
                                <li>تصميمات اللوحة الإعلانية</li>
                                <h4 class='border'>تعديلات على المنتجات المرشحة</h4>
                                <li>مدة العمل : 3  أيام</li>
                                <li class='price'>$225.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='hidden-xs col-sm-offset-8 col-sm-4'>
                            <div class='ar box graphic box4'>
                                <h3>الباقة البلاتينية</h3>
                                <ul>
                                <li>تصميم شعار شركة</li>
                                <li>تصميم ورق رسمى</li>
                                <li>تصميم بزنس كارد</li>
                                <li>تصميم مستندات كارد و صرف و فواتير</li>
                                <li>تصميم مذكرة ملاحظات</li>
                                <li>تصميم ختم</li>
                                <li>تصميمات اللوحة الإعلانية</li>
                                <li>تصميم بروفايلات</li>
                                <h4 class='border border-x'>عرض الصفحة الواحدة من باقات تصميم المواقع</h4>
                                <h4 class='border border-y'>3 خدمات من قائمة إضافات للمواقع الإختيارية</h4>
                                <h4 class='border border-z'>تناسب الشركة الحديثة او لتجديد هوية الشركة</h4>
                                <li>مدة العمل : 15  أيام</li>
                                <li class='price'>$570.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>
                        <div class='visible-xs col-sm-4'>
                            <div class='ar box graphic box1'>
                                <h3>الباقة البرونزية</h3>
                                <ul>
                                <h4>إختيار 3 خدمات من : </h4>
                                <li>تصميم شعار شركة</li>
                                <li>تصميم ورق رسمى</li>
                                <li>تصميم بزنس كارد</li>
                                <li>تصميم مستندات كارد و صرف و فواتير</li>
                                <li>تصميم مذكرة ملاحظات</li>
                                <li>تصميم ختم</li>
                                <li>تصميمات اللوحة الإعلانية</li>
                                <h4 class='border'>تعديلات على المنتجات المرشحة</h4>
                                <li>مدة العمل : 3  أيام</li>
                                <li class='price'>$225.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>


                        <div class='visible-xs col-sm-4'>
                            <div class='ar box graphic box2'>
                                <h3>الباقة الفضية</h3>
                                <ul>
                                <h4>إختيار 6 خدمات من : </h4>
                                <li>تصميم شعار شركة</li>
                                <li>تصميم ورق رسمى</li>
                                <li>تصميم بزنس كارد</li>
                                <li>تصميم مستندات كارد و صرف و فواتير</li>
                                <li>تصميم مذكرة ملاحظات</li>
                                <li>تصميم ختم</li>
                                <li>تصميم ظروف متوسطة و A4</li>
                                <li>تصميمات اللوحة الإعلانية</li>
                                <h4 class='border'>تعديلات على المنتجات المرشحة</h4>
                                <li>مدة العمل : 7  أيام</li>
                                <li class='price'>$350.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box graphic box3'>
                                <h3>الباقة الذهبية</h3>
                                <ul>
                                <li>تصميم شعار شركة</li>
                                <li>تصميم ورق رسمى</li>
                                <li>تصميم بزنس كارد</li>
                                <li>تصميم مستندات كارد و صرف و فواتير</li>
                                <li>تصميم مذكرة ملاحظات</li>
                                <li>تصميم ختم</li>
                                <li>تصميم ظروف متوسطة و A4</li>
                                <li>تصميمات اللوحة الإعلانية</li>
                                <h4 class='border'>تعديلات مفتوحة على جميع المنتجات</h4>
                                <li>مدة العمل : 9  أيام</li>
                                <li class='price'>$450.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                        <div class='visible-xs col-sm-4'>
                            <div class='ar box graphic box4'>
                                <h3>الباقة البلاتينية</h3>
                                <ul>
                                <li>تصميم شعار شركة</li>
                                <li>تصميم ورق رسمى</li>
                                <li>تصميم بزنس كارد</li>
                                <li>تصميم مستندات كارد و صرف و فواتير</li>
                                <li>تصميم مذكرة ملاحظات</li>
                                <li>تصميم ختم</li>
                                <li>تصميمات اللوحة الإعلانية</li>
                                <li>تصميم بروفايلات</li>
                                <h4 class='border border-x'>عرض الصفحة الواحدة من باقات تصميم المواقع</h4>
                                <h4 class='border border-y'>3 خدمات من قائمة إضافات للمواقع الإختيارية</h4>
                                <h4 class='border border-z'>تناسب الشركة الحديثة او لتجديد هوية الشركة</h4>
                                <li>مدة العمل : 15  أيام</li>
                                <li class='price'>$570.00</li>
                                </ul>
                                <a href='contact.php?lang=ar'><button class='btn btn-info btn-block'>أطلب الان</button></a>                            
                            </div>
                        </div>

                <?php } ?>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<a href='?lang=en#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    } else {
                        echo "<a href='?lang=ar#services'><button class='btn btn-info'><i class='fa fa-long-arrow-left' aria-hidden='true'></i>" . lang('back') . "</button></a>";
                    }
                ?>
            </div>
        </div>
    </section>

<?php 
    include 'serviceFooter.php';
     } else {
 ?>
        <?php include 'navbar.php'; ?>
        <!-- Start Home Section -->
        <section id='home' class='home'>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class='overlay-one'></div>
                <div class="item active one">
                        <div class="carousel-caption">
                            <div class='row'>
                                <div class='col-sm-6'>
                                    <div class='wow bounceInDown ginfo' data-wow-duration="1.5s">
                                        <?php
                                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                                echo "<h1>" . lang('Making1') . "</h1>";
                                            } else {
                                                echo "<h1 class='ar'>" . lang('Making1') . "</h1>";
                                            }
                                        ?>
                                        <?php
                                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                                echo "<p>" . lang('p1') . "</p>";
                                            } else {
                                                echo "<p class='ar'>" . lang('p1') . "</p>";
                                            }
                                        ?>           
                                    </div>
                                </div>
                                <div class='col-sm-6'>
                                    <div class='wow bounceInUp gimage' data-wow-duration="1.5s">
                                        <img class='web' src='images/web-dev-copy.png' alt='slider'>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="item two">
                        <div class="carousel-caption">
                            <div class='row'>
                                <div class='col-sm-6'>
                                    <div class='wow bounceInDown ginfo' data-wow-duration="1.5s">
                                        <?php
                                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                                echo "<h1>" . lang('Making2') . "</h1>";
                                            } else {
                                                echo "<h1 class='ar'>" . lang('Making2') . "</h1>";
                                            }
                                        ?>           
                                        <?php
                                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                                echo "<p>" . lang('p2') . "</p>";
                                            } else {
                                                echo "<p class='ar'>" . lang('p2') . "</p>";
                                            }
                                        ?>           
                                    </div>
                                </div>
                                <div class='col-sm-6'>
                                    <div class='wow bounceInUp gimage' data-wow-duration="1.5s">
                                        <img src='images/social-media-copy.png' alt='slider'>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="item three">
                        <div class="carousel-caption">
                            <div class='row'>
                                <div class='col-sm-6'>
                                    <div class='wow bounceInDown ginfo' data-wow-duration="1.5s">
                                        <?php
                                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                                echo "<h1>" . lang('Making3') . "</h1>";
                                            } else {
                                                echo "<h1 class='ar'>" . lang('Making3') . "</h1>";
                                            }
                                        ?>
                                        <?php
                                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                                echo "<p>" . lang('p3') . "</p>";
                                            } else {
                                                echo "<p class='ar'>" . lang('p3') . "</p>";
                                            }
                                        ?>           
                                    </div>
                                </div>
                                <div class='col-sm-6'>
                                    <div class='wow bounceInUp gimage' data-wow-duration="1.5s">
                                        <img src='images/seo-copy.png' alt='slider'>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="item four">
                        <div class="carousel-caption">
                            <div class='row'>
                                <div class='col-sm-6'>
                                    <div class='wow bounceInDown ginfo' data-wow-duration="1.5s">
                                        <?php
                                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                                echo "<h1>" . lang('making4') . "</h1>";
                                            } else {
                                                echo "<h1 class='ar'>" . lang('making4') . "</h1>";
                                            }
                                        ?>      
                                        <?php
                                            if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                                echo "<p>" . lang('p4') . "</p>";
                                            } else {
                                                echo "<p class='ar'>" . lang('p4') . "</p>";
                                            }
                                        ?>                
                                    </div>
                                </div>
                                <div class='col-sm-6'>
                                    <div class='wow bounceInUp gimage graphic' data-wow-duration="1.5s">
                                        <img class='g' src='images/multimediaa.png' alt='slider'>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </section>
        <!-- End Home Section -->
        <!-- Start Services Section -->
        <section id='services' class='service'>
            <div class='container text-center'>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<h2>" .lang('Service-Head') . "</h2>";
                    } else {
                        echo "<h2 class='ar'>" .lang('Service-Head') . "</h2>";
                    }
                ?>
                <div class='row'>
                <div id='slider' class="slider">
                        <div class='wow fadeInDown serv text-center' data-wow-duration="1.2s">
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<a href='?lang=en&service=google-ad'><img src='images/Google-Adwards.png' alt='icon'></a>";
                                } else {
                                echo "<a href='?lang=ar&service=google-ad'><img src='images/Google-Adwards.png' alt='icon'></a>" ;
                                }
                            ?>
                            <h3><?php echo lang('google-ad'); ?></h3>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<p>" . lang('google-ad-smText') . "<p>";
                                } else {
                                    echo "<p class='ar'>" . lang('google-ad-smText-ar') . "</p>";
                                }
                            ?>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<a href='?lang=en&service=google-ad'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                } else {
                                    echo "<a href='?lang=ar&service=google-ad'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                }
                            ?>
                        </div>
                        <div class='wow fadeInDown serv text-center' data-wow-duration="1.2s">
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<a href='?lang=en&service=seo'><img src='images/SEO.png' alt='icon'></a>";
                                } else {
                                echo "<a href='?lang=ar&service=seo'><img src='images/SEO.png' alt='icon'></a>" ;
                                }
                            ?>
                            <h3><?php echo lang('search'); ?></h3>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<p>" . lang('google-ad-smText') . "<p>";
                                } else {
                                    echo "<p class='ar'>" . lang('google-ad-smText-ar') . "</p>";
                                }
                            ?>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<a href='?lang=en&service=seo'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                } else {
                                    echo "<a href='?lang=ar&service=seo'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                }
                            ?>
                        </div>
                        <div class='wow fadeInDown serv text-center' data-wow-duration="1.2s">
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<a href='?lang=en&service=motion-graphic'><img src='images/MG.png' alt='icon'></a>";
                                } else {
                                echo "<a href='?lang=ar&service=motion-graphic'><img src='images/MG.png' alt='icon'></a>" ;
                                }
                            ?>
                            <h3><?php echo lang('motion'); ?></h3>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<p>" . lang('google-ad-smText') . "<p>";
                                } else {
                                    echo "<p class='ar'>" . lang('google-ad-smText-ar') . "</p>";
                                }
                            ?>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<a href='?lang=en&service=motion-graphic'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                } else {
                                    echo "<a href='?lang=ar&service=motion-graphic'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                }
                            ?>
                        </div>
                        <div class='wow fadeInDown serv text-center' data-wow-duration="1.2s">
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<a href='?lang=en&service=content-writing'><img src='images/CR.png' alt='icon'></a>";
                                } else {
                                echo "<a href='?lang=ar&service=content-writing'><img src='images/CR.png' alt='icon'></a>" ;
                                }
                            ?>
                            <h3><?php echo lang('content'); ?></h3>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<p>" . lang('google-ad-smText') . "<p>";
                                } else {
                                    echo "<p class='ar'>" . lang('google-ad-smText-ar') . "</p>";
                                }
                            ?>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<a href='?lang=en&service=content-writing'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                } else {
                                    echo "<a href='?lang=ar&service=content-writing'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                }
                            ?>
                        </div>
                        <div class='wow fadeInDown serv text-center' data-wow-duration="1.2s">
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<a href='?lang=en&service=smo'><img src='images/SMO.png' alt='icon'></a>";
                                } else {
                                echo "<a href='?lang=ar&service=smo'><img src='images/SMO.png' alt='icon'></a>" ;
                                }
                            ?>
                            <h3><?php echo lang('smo'); ?></h3>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<p>" . lang('google-ad-smText') . "<p>";
                                } else {
                                    echo "<p class='ar'>" . lang('google-ad-smText-ar') . "</p>";
                                }
                            ?>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<a href='?lang=en&service=smo'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                } else {
                                    echo "<a href='?lang=ar&service=smo'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                }
                            ?>
                        </div>
                        <div class='wow fadeInDown serv text-center' data-wow-duration="1.2s">
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<a href='?lang=en&service=web'><img src='images/web-development.png' alt='icon'></a>";
                                } else {
                                echo "<a href='?lang=ar&service=web'><img src='images/web-development.png' alt='icon'></a>" ;
                                }
                            ?>
                            <h3><?php echo lang('web'); ?></h3>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<p>" . lang('google-ad-smText') . "<p>";
                                } else {
                                    echo "<p class='ar'>" . lang('google-ad-smText-ar') . "</p>";
                                }
                            ?>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<a href='?lang=en&service=web'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                } else {
                                    echo "<a href='?lang=ar&service=web'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                }
                            ?>
                        </div>
                        <!-- ss -->
                        <div class='wow fadeInDown serv text-center' data-wow-duration="1.2s">
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                echo "<a href='?lang=en&service=graphic'><img src='images/graphic.png' alt='icon'></a>";
                                } else {
                                echo "<a href='?lang=ar&service=graphic'><img src='images/graphic.png' alt='icon'></a>" ;
                                }
                            ?>
                            <h3><?php echo lang('graphic'); ?></h3>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<p>" . lang('google-ad-smText') . "<p>";
                                } else {
                                    echo "<p class='ar'>" . lang('google-ad-smText-ar') . "</p>";
                                }
                            ?>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<a href='?lang=en&service=graphic'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                } else {
                                    echo "<a href='?lang=ar&service=graphic'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                }
                            ?>
                        </div>
                    </div>
            <span class='next'><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
            <span class='prev'><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span>
            </div>
        </section>
        <!-- End Services Section -->
        <!-- Start Who We Are Section -->
        <section id='about' class='who'>
            <div class='overlay'>
                <div class='wow zoomIn container' data-wow-duration="2s">
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<h2>" .lang('who') . "</h2>";
                    } else {
                        echo "<h2 class='ar'>" .lang('who') . "</h2>";
                    }
                ?>
                <?php
                    if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                        echo "<p>" . lang('who-text') . "<p>";
                    } else {
                        echo "<p class='who-ar ar lead'>" . lang('who-text') . "</p>";
                    }
                ?>
                            <?php
                                if (isset($_GET['lang']) && $_GET['lang'] == 'en') { 
                                    echo "<a href='about.php?lang=en'><button class='btn btn-info'>". lang('read') ."</button></a>";
                                } else {
                                    echo "<a href='about.php?lang=ar'><button class='w-ar btn btn-info'>". lang('read') ."</button></a>";
                                }
                            ?>
                </div>
            </div>
        </section>
        <!-- End Who Are We Section -->
        
        <!-- Start Blog Section -->

<?php

$stmt = $con->prepare("SELECT *, LEFT(post, 100) AS part FROM content ORDER BY ID DESC LIMIT 3");
$stmt->execute();
$rows = $stmt->fetchAll();
$count = $stmt->rowCount();

if ($count > 0) {

?>

        <section class='recent-posts'>
            <div class='container'>
                <h2 class='text-center'><?php echo lang('blog') ?></h2>
                <div class='row'>
                    <?php

                        if(!empty($rows)) {
                            foreach($rows as $row) {
                                echo "<div class='col-md-4'>";
                                    echo "<a href='blog.php?do=post&id=" . $row['ID'] ."' class='thumbnail'>";
                                        echo "<div class='overlay text-center'>";
                                            echo "<h3>" . $row['title'] . "</h3>";
                                            echo "<p class='lead'>" . $row['part'] . "...</p>";
                                        echo "</div>";
                                        echo "<img src='admin/uploaded/". $row['image'] ."' alt='recent-post-image'>";
                                    echo "</a>";
                                echo "</div>";
                            }
                        }
                    ?>
                </div>
            </div>
        </section>

<?php } ?>

        <!-- End Blog Section -->

        <!-- Start Our Work Section -->

        <section id='work' class='work'>
            <div class='container text-center'>
                <h2><?php echo lang('work') ?></h2>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeIn thumbnail" data-wow-duration="1.5s">
                        <img src="images/1.jpg" alt="our-work1">
                            <div class="caption">
                                <h3><?php echo lang('project1') ?></h3>
                                <p><?php echo lang('project1-details') ?></p>
                                <p><a href="http://www.generationsense.net/lacreperie/" class="btn btn-primary" role="button"><?php echo lang('view-project') ?></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeIn thumbnail" data-wow-duration="1.5s">
                        <img src="images/2.jpg" alt="our-work1">
                            <div class="caption">
                                <h3><?php echo lang('project2') ?></h3>
                                <p><?php echo lang('project2-details') ?></p>
                                <p><a href="http://soortechnology.com/" class="btn btn-primary" role="button"><?php echo lang('view-project') ?></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-offset-3 col-md-offset-0 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0">
                        <div class="wow fadeIn thumbnail" data-wow-duration="1.5s">
                        <img src="images/work3.jpg" alt="our-work1">
                            <div class="caption">
                                <h3><?php echo lang('project3') ?></h3>
                                <p><?php echo lang('project3-details') ?></p>
                                <p class='jeda'><a href="http://arabiangc.com/en/" class="btn btn-primary" role="button"><?php echo lang('view-project') ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Our Work Section -->
        <!-- Start Our Clients Section -->
        <section class='clients'>
            <div class='container'>
                <div class='row'>
                <div class='brands-container'>
                    <div class='col-xs-12 col-sm-6 col-md-3'>
                        <div class='client wow fadeIn' data-wow-duration='2s'>
                            <img src='images/c1.png' aly='client1'>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-3'>
                        <div class='client wow fadeIn' data-wow-duration='2s'>
                            <img class='small' src='images/c2.png' alt='client1'>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-3'>
                        <div class='client wow fadeIn' data-wow-duration='2s'>
                            <img src='images/c3.png' alt='client1'>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-3'>
                        <div class='client wow fadeIn' data-wow-duration='2s'>
                            <img class='small' src='images/c4.png' alt='client1'>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>


        <!-- End Our Clients Section -->


        <?php include 'footer.php';  } ?>