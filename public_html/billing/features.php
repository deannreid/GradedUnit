<?php

include "inc/init.php";

$page->title = "Welcome to ". $set->site_name;

$presets->setActive("features"); // we highlight the home link


include 'header.php';


echo "

<div class='container'> 
  
  <!--============== Features Layout ==============-->
  
  <div class='row FeatLayout'>
    <div class='col-md-5 Featimg'> <img src='../assets/images/features_img.png' alt='feature' class='img-responsive center-block'></div>
    <div class='col-md-7'>
      <h1>Our Features</h1>
      <p class='lead'>These are some of the major features that we support!</p>
      <p>As soon as you make a successful payment via PayPal or Google Checkout, your web hosting and domain names will be activated immediately. No waiting time whatsoever. Our network runs the latest stable and secure versions of PHP &amp; MySQL. </p>
      <ul class='ticklist'>
        <li>Dedicated Servers</li>
        <li>cPanel Access</li>
        <li>MySQL Databases</li>
        <li>Super Bandwidth</li>
        <li>Web Builder</li>
        <li>Web Secutity</li>
      </ul>
    </div>
  </div>
  
  <!--============== Other Features ==============-->
  
  <div class='row PageHead'>
    <div class='col-md-12'>
      <h1>More Features</h1>
      <h3>You will get lot of features with XenoHost</h3>
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
      <p>Our network runs the latest stable and secure versions of PHP & MySQL. We also implement strict security and firewall rules protecting your website from unwanted visitors 24/7.</p>
    </div>
  </div>
</div>
<!--Container Closed--> 
";
include 'footer.php';
