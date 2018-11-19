<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World Wildlife Foundation</title>
    <link rel='stylesheet' href="./panda1.css" />
</head>
<body>
<div id="main_wrapper">
        <div id="top_logo">
        </div>
        <header id="navbar">
            <?php include('panda_header.php');?>
        </header>
        <div id="main_content">
            <div id="center_wrapper">
                <div class="top_content">
                    <?php
                    include 'donate_bar2.php';
                    ?>
                </div>
                <div id="submit_form">
                    <form class="monthly_form" action="" method="">
                        <div id="monthly_gift_content">
                            <h4> Your Monthly Donation </h4>
                                <input type='radio' name='donate_dollars' id='ten_dollars' class='bucks'>
                                <input type='radio' name='donate_dollars' id='fifteen_dollars' class='bucks'>
                                <input type='radio' name='donate_dollars' id='twenty_dollars' class='bucks'>
                                <input type='radio' name='donate_dollars' id='twenty5_dollars' class='bucks'>
                                <input type='radio' name='donate_dollars' id='fifty_dollars' class='bucks'>
                                <input type='text' name='donate_dollars' id='other_amount' class='bucks'>
                        </div>
                        <div id ="giftoptions">
                            <?php
                            include 'gift_options.php';
                            ?>
                        </div>
                        <div id="donor_content">
                            <?php
                            include 'donor_information.php';
                            ?>
                        </div>
                        <div id="payment_content">
                            <?php
                            include 'payment_info.php';
                            ?>
                        </div>
                    </form>
                </div>
                <div id="last_content">
                    When you click submit, your monthly donation will be processed.<br/><br/>
                    <b>World Wildlife Fund is a 501(c)(3) charitable organization. </b><br/><br>
                    <a href="https://sealsplash.geotrust.com/splash?&dn=support.worldwildlife.org" target="_blank"><img src="https://sealsplash.geotrust.com/images/ssl-valid-en-M.gif" alt="geotrust"></a><br/><br>
                    To donate by phone, call 1-800-CALL-WWF. <br><br>
                    To donate by mail, download, print, and complete <a href="https://gifts.worldwildlife.org/gift-center/mailform/mail_form_join.html" target="_blank">this form.</a>
                </div>
            </div>
            <aside class="side_banner">
                <?php
                include 'panda_aside.php';
                ?>
            </aside>
        </div>
        <footer id="footer">
            <div id="footer_wrapper">
                <div id ="footer_links">
                    <a href="https://www.worldwildlife.org/about/careers" target="_blank">Careers</a>
                    <a href="https://www.worldwildlife.org/about/contact" target="_blank">Contact</a>
                    <a href="https://www.worldwildlife.org/about/news_press" target="_blank">News & Press</a>
                    <a href="https://www.worldwildlife.org/pages/privacy-policy" target="_blank">Privacy Policy / Your Privacy Rights</a>
                    <a href="https://www.worldwildlife.org/pages/site-terms" target="_blank">Site Terms</a>
                    <a href="https://www.worldwildlife.org/pages/state-disclosures" target="_blank">State Disclosures</a>
                    <a href="https://help.worldwildlife.org/" target="_blank">Help</a>
                    <a href="https://support.worldwildlife.org/site/SPageServer?pagename=SupporterCenter" target="_blank">Login</a>
                </div>
                <img src="https://support.worldwildlife.org/images/wrpr_fy13/logo-footer.png" alt="Footer Logo" id="footer_logo">
                <p>
                    <b>World Wildlife Fund </b><br>
                    1250 24th Street, N.W. <br>
                    Washington, DC 20037
                </p>
                <div id="sns_icons">
                    <a href="https://www.facebook.com/worldwildlifefund"><img src="./WWF_img/facebook.png" alt="facebook icon"></a>
                    <a href="https://twitter.com/world_wildlife"><img src="./WWF_img/facebook.png" alt="twitter icon"></a>
                    <a href="https://www.instagram.com/World_Wildlife/"><img src="./WWF_img/facebook.png" alt="instagram icon"></a>
                    <a href="http://www.youtube.com/subscription_center?add_user=wwfus"><img src="./WWF_img/facebook.png" alt="youtube icon"></a>
                    <a href="http://plus.google.com/107924515603459001334/posts"><img src="./WWF_img/facebook.png" alt="google plus icon"></a>
                    <a href="https://www.worldwildlife.org/pages/rss-feeds"><img src="./WWF_img/facebook.png" alt="rss icon"></a>
                </div>
                <!-- Facebook
                l
                Twitter
                o
                Instagram
                B
                YouTube
                r
                Google+
                q
                RSS Feeds
                I -->
                <p id="grey_copyright">© 2018 World Wildlife Fund</p>
            </div>
        </footer>
    </div>
<script src="panda1.js"></script>
</body>