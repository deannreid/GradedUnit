<?php
    if(!isset($_SESSION['token']))
        $_SESSION['token'] = sha1(rand()); // random token

echo "
<div class='modal fade LoginSignup' id='Login' role='dialog'>
    <div class='modal-dialog'>
        <button type='button' class='close' data-dismiss='modal'>✕</button>
        <h3>Login</h3>
    </div>
        <div class='modal-body' style='text-align:center;'>
        <div class='row-fluid'>
            <div class='span10 offset1'>
                <div id='modalTab'>
                    <div class='tab-content'>
                        <div class='tab-pane active' id='login'>
                            <form method='post' action='$set->url/login.php' name='login_form'>
                                <p><input type='text' class='span12' name='name' placeholder='Username'></p>
                                <p><input type='password' class='span12' name='password' placeholder='Password'></p>
                                <p>
                                	<input class='pull-left' type='checkbox' name='r' value='1' id='rm'>  
                                	<label class='pull-left' for='rm'>Remember Me</label>
                                </p>
                                <div class='clearfix'></div>

                                <input type='hidden' name='token' value='".$_SESSION['token']."'>
                                
                                <p><button type='submit' class='btn btn-primary'>Sign in</button>
                                <a href='#forgotpassword' data-toggle='tab'>Forgot Password?</a>
                                </p>
                            </form>
                        </div>
                        <div class='tab-pane fade' id='forgotpassword'>
                            <form method='post' action='$set->url/login.php?forget=1' name='forgot_password'>
                                <p>These things happen, fortunetly we can fix it!. Send us your email and we'll reset it for you!</p>
                                <input type='text' class='span12' name='email' placeholder='Email'>
                                <p><button type='submit' class='btn btn-primary'>Submit</button>
                                
                                <input type='hidden' name='token' value='".$_SESSION['token']."'>

                                <a href='#login' data-toggle='tab'>Wait, I remember it now!</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";

?>
        <div class="footer">
            <div class="container">
                <div class="row footerlinks">
                    <div class="col-sm-4 col-md-2">
                        <p>CALL US</p>
                        <ul>
                            <li> +44 1111 111 111</li>
                            <li> +44 1111 111 111</li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <p>FOLLOW US</p>
                        <ul>
                            <li><a href="" target="_blank">Follow on Twitter</a></li>
                            <li><a href="" target="_blank">Like us on Facebook</a></li>
                            <li><a href="" target="_blank">Join on Linkedin</a> </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <p>COMPANY</p>
                        <ul>
                            <li> <a href="#">About us</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Our Team</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <p>EMAIL US</p>
                        <ul>
                            <li><a href="mailto:support@mail.in" target="_blank">support@xenohost.co.uk</a></li>
                            <li><a href="mailto:mail@mail.in" target="_blank">sales@xenohost.co.uk</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <p>LEGAL TERMS</p>
                        <ul>
                            <li><a href="../tos.html">Terms of service</a></li>
                            <li><a href="../tou.html">Terms of use</a></li>
                            <li><a href="../privacy.html">Privacy Policy</a></li>
                            <li><a href="../refunds.html">Refund Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <p>Live Chat</p>
                        <ul>
                            <li> <a href="#" class="btn btn-success btn-small">CHAT WITH US </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="pull-right"><img src="../assets/images/logosmall.png" alt="logo"></div>
                    <center><a href="https://www.xenohost.co.uk/">© Copyright 2016-2019 XenoHost</a>
                        <a class="pipe"> | </a><a href="https://www.xenohost.co.uk/tac.html/" title="Terms &amp; conditions ">Terms &amp; conditions </a>
                        <a class="pipe"> | </a><a href="contracts.html" title="Contracts">Contracts</a>
                        <a class="pipe"> | </a><a href="privacy.html" title="Privacy">Privacy</a>
                        <a class="pipe"> | </a><a href="payment.xml" title="Xenohost payment methods ">Payments</a>
                        <a class="pipe"> | </a><a href="support" title="Contact OVH">Support</a></center>
                </div>

                <center>In accordance with the 2006/112/CE Directive, modified on 01/01/2015, prices incl. VAT may vary according to the customer's country of residence 
                    (by default, the prices displayed are inclusive of the UK VAT in force).</center>
            </div>
        </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

<!--<script src="<?php echo $set->url;?>/js/vendor/bootstrap.min.js"></script> -->
<script src='../assets/js/bootstrap.min.js'></script>
<!-- Validate Plugin -->
<script src="../assets/js/vendor/jquery.validate.min.js"></script>

<script src="../assets/js/main.js"></script>

<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>