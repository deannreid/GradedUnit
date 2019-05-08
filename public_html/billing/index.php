<?php

include "inc/init.php";

$page->title = $set->site_name;

$presets->setActive("home"); // we highlight the home link


include 'header.php';


//Insert the Main Page Here
echo "
		
	        <!--==============HEADER =================-->
        <div class='jumbotron masthead'>
            <div class='container'> 

                <!--==============Hero Unit=================-->


                        <li>
                            <div class='hero-unit'>
                                <h1>XenoHost</h1>
                                <h3>Fast | Reliable | Affordable</h3>
                                <h4>High Performance hosting at affordable prices</h4>
                                <div class='slider-actions text-center'> <a href='features.php' class='btn btn-success btn-lg'>Explore Features </a> <a href='pricing.html' class='btn btn-primary btn-lg'>Plans and Pricing </a> </div>
                            </div>
                        </li>
            </div>
        </div>
		
        <div class='container'> 
            <!--============== Main Features ==============-->

            <div class='row mainFeatures' id='features'>
                <div class='col-sm-6 col-md-4'>
                    <div class='img-thumbnail'> <img src='../assets/images/secure_img.png' width='85' height='88' alt='secure'>
                        <div class='caption'>
                            <h4>Secure & Reliable</h4>
                            <p>All XenoHost services have high physical security and power redundancy so your data will always be secure.</p>
                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-md-4'>
                    <div class='img-thumbnail'> <img src='../assets/images/fast_img.png' width='85' height='88' alt='secure'>
                        <div class='caption'>
                            <h4>Anti-DDoS</h4>
                            <p>All our services come default with the best anti-DDoS solution on the market and provides round-the-clock protection against many types of attacks without limitations.</p>
                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0'>
                    <div class='img-thumbnail'> <img src='../assets/images/support_img.png' width='85' height='88' alt='secure'>
                        <div class='caption'>
                            <h4>Customer Support</h4>
                            <p>We have a dedicated team of support for sales and support to help you in anytime. You can also chat with us using out Live-Chat software.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--============== Other Features ==============-->

            <div class='row PageHead'>
                <div class='col-md-12'>
                    <h1>More Features</h1>
                    <h3>You will get lot of features with flathost</h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-6 features'> <img src='../assets/images/setup_icon.png' alt='icon' class='img-responsive'>
                    <h4>Instant Setup</h4>
                    <p>As soon as you make a successful payment via PayPal or Google Checkout, your web hosting and domain names will be activated immediately. No waiting time whatsoever.</p>
                </div>
                <div class='col-sm-6 features'> <img src='../assets/images/backup_icon.png' alt='icon' class='img-responsive'>
                    <h4>Constant Backups</h4>
                    <p>Your hosting account is backed up 4 times a day as standard, with our backup integration. We use dedicated backup servers, providing fast & easy individual file rollback abilities.</p>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-6 features'> <img src='../assets/images/git_icon.png' alt='icon' class='img-responsive'>
                    <h4>GIT/SVN Support</h4>
                    <p>Web Developers love using version control systems. All of our hosting accounts can use GIT & SVN command line tools on our servers. Simply request SSH access to get started.</p>
                </div>
                <div class='col-sm-6 features'> <img src='../assets/images/script_icon.png' alt='icon' class='img-responsive'>
                    <h4>280+ Install Scripts</h4>
                    <p>All our hosting accounts allow you to install popular software such as Wordpress, Drupal, Joolma and Magento in one easy step. Upgrading your software is just as easy!</p>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-6 features'> <img src='../assets/images/cpanel_icon.png' alt='icon' class='img-responsive'>
                    <h4>cPanel Included</h4>
                    <p>All hosting accounts come with the latest version of cPanel. This makes life easy for you to do routine tasks such as setting up email addresses and managing MySQL databases.</p>
                </div>
                <div class='col-sm-6 features'> <img src='../assets/images/php_icon.png' alt='icon' class='img-responsive'>
                    <h4>Latest PHP &amp; MySQL</h4>
                    <p>Our network runs the latest stable and secure versions of PHP & MySQL, You also have the option to select any version of PHP you want. We also implement strict security and firewall rules protecting your website from unwanted visitors 24/7.</p>
                </div>
            </div>
        </div>
        <!--Container Closed--> 
";




include 'footer.php';
