<?php

include "inc/init.php";

$page->title = "Welcome to ". $set->site_name;

$presets->setActive("pricing"); // we highlight the home link


include 'header.php';
echo "

<!--==============Content Area=================-->

        <div class='container'> 

            <!--============== Pricing ==============-->

            <div class='row PageHead' id='pricing'>
                <div class='col-md-12'>
                    <h1>Plans & Pricing</h1>
                    <h3>Tailored plans and pricing suits your needs</h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-6 col-md-3 PlanPricing'>
                    <div class='planName'> <span class='price'>$15</span>
                        <h3>Standard</h3>
                        <p>Monthly Plan</p>
                    </div>
                    <div class='planFeatures'>
                        <ul>
                            <li> 1 GB Storage Space</li>
                            <li>10 GB Monthly Bandwidth</li>
                            <li>10 Sub-domains</li>
                            <li>25 Email Accounts</li>
                            <li>Control panel</li>
                            <li>24/7 Support</li>
                        </ul>
                    </div>
                    <p> <a href='#' role='button' class='btn btn-success btn-lg'>Sign Up </a> </p>
                </div>
                <div class='col-sm-6 col-md-3 PlanPricing'>
                    <div class='planName'> <span class='price'>$29</span>
                        <h3>Standard</h3>
                        <p>Monthly Plan</p>
                    </div>
                    <div class='planFeatures'>
                        <ul>
                            <li> 5 GB Storage Space</li>
                            <li>50 GB Monthly Bandwidth</li>
                            <li>20 Sub-domains</li>
                            <li>50 Email Accounts</li>
                            <li>Control panel</li>
                            <li>24/7 Support</li>
                        </ul>
                    </div>
                    <p> <a href='#' role='button' class='btn btn-success btn-lg'>Sign Up </a> </p>
                </div>
                <div class='col-sm-6 col-md-3 PlanPricing Recommended'>
                    <div class='planName'> <span class='price'>$67</span>
                        <h3>Standard</h3>
                        <p>Monthly Plan</p>
                    </div>
                    <div class='planFeatures'>
                        <ul>
                            <li> 10 GB Storage Space</li>
                            <li>Unlimited Bandwidth</li>
                            <li>50 Sub-domains</li>
                            <li>100 Email Accounts</li>
                            <li>Control panel</li>
                            <li>24/7 Support</li>
                        </ul>
                    </div>
                    <p> <a href='#' role='button' class='btn btn-danger btn-lg'>Sign Up </a> </p>
                </div>
                <div class='col-sm-6 col-md-3 PlanPricing'>
                    <div class='planName'> <span class='price'>$99</span>
                        <h3>Standard</h3>
                        <p>Monthly Plan</p>
                    </div>
                    <div class='planFeatures'>
                        <ul>
                            <li> 20 GB Storage Space</li>
                            <li>Unlimited Bandwidth</li>
                            <li>100 Sub-domains</li>
                            <li>200 Email Accounts</li>
                            <li>Control panel</li>
                            <li>24/7 Support</li>
                        </ul>
                    </div>
                    <p> <a href='#' role='button' class='btn btn-success btn-lg'>Sign Up </a> </p>
                </div>
            </div>
        </div>
        <!--Container Closed--> 

        <!--============== Domain Search ==============-->

        <div class='domain'>
            <div class='container'>
                <div class='row PageHead'>
                    <div class='col-md-12'>
                        <h1>Search Domain</h1>
                        <h3>Enter the domain name to register or transfer</h3>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-8 col-md-offset-2'>
                        <form action='https://yourwebsite.com/whmcs/domainchecker.php' method='post'>
                            <input type='hidden' name='direct' value='true' />
                            <div class='row'>
                                <div class='col-sm-12 form-group'>
                                    <div class='input-group'>
                                        <input class='form-control' type='text' name='domain' size='20' placeholder='your domain name' />
                                        <span class='input-group-btn'>
                                            <select class='btn btn-default' name='ext'>
                                                <option selected>.com</option>
                                                <option>.net</option>
                                                <option>.org</option>
                                                <option>.biz</option>
                                                <option>.com.au</option>
                                                <option>.net.au</option>
                                                <option>.info</option>
                                                <option>.asia</option>
                                                <option>.co.nz</option>
                                                <option>.org.au</option>
                                            </select>
                                        </span> </div>
                                </div>
                            </div>
                            <div class='submitbtn'>
                                <input type='submit' class='btn btn-success btn-lg' value='Search Domain' />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--==============Content Area=================-->

        <div class='container'> 

            <!--============== Compare Plans ==============-->

            <div class='row PageHead'>
                <div class='col-md-12'>
                    <h1>Compare Plans</h1>
                    <h3>Another Plans page with comparison table</h3>
                </div>
            </div>
            <div class='row ComparePlans'>
                <div class='col-md-3 CompareList hidden-sm hidden-xs'>
                    <div class='planHead1'></div>
                    <div class='planFeatures'>
                        <ul>
                            <li>Setup Fee</li>
                            <li> Multi Domain </li>
                            <li> Storage Space</li>
                            <li>Monthly Bandwidth</li>
                            <li> MySQL Databases</li>
                            <li>Sub-domains</li>
                            <li>Email Accounts</li>
                            <li> Shared 128bit SSL</li>
                            <li>Control panel</li>
                            <li>24/7 Support</li>
                        </ul>
                    </div>
                </div>
                <div class='col-sm-6 col-md-3 pricing1'>
                    <div class='planHead2'>
                        <h3>STANDARD</h3>
                    </div>
                    <div class='planFeatures'>
                        <ul class='visible-sm visible-xs'>
                            <li>Setup Fee : NA</li>
                            <li> Multi Domain : Up to 2 </li>
                            <li> Storage Space 1 GB</li>
                            <li>Monthly Bandwidth 10 GB</li>
                            <li> MySQL Databases : 5</li>
                            <li>Sub-domains : 2</li>
                            <li>Email Accounts : 25</li>
                            <li> Shared 128bit SSL : No</li>
                            <li>Control panel : Yes</li>
                            <li>24/7 Support : No</li>
                        </ul>
                        <ul class='hidden-sm hidden-xs'>
                            <li>NA</li>
                            <li> Up to 2 </li>
                            <li> 1 GB</li>
                            <li>10 GB</li>
                            <li> 5</li>
                            <li>2</li>
                            <li>25</li>
                            <li><img src='assets/images/cross.png' alt='cross'> </li>
                            <li> <img src='assets/images/tick.png' alt='tick'></li>
                            <li><img src='assets/images/cross.png' alt='cross'> </li>
                        </ul>
                    </div>
                    <p> <a href='#' role='button' class='btn btn-success btn-lg'>Sign Up </a> </p>
                </div>
                <div class='col-sm-6 col-md-3 pricing2'>
                    <div class='planHead3'>
                        <h3>DEDICATED</h3>
                    </div>
                    <div class='planFeatures'>
                        <ul class='visible-sm visible-xs'>
                            <li>Setup Fee : NA</li>
                            <li> Multi Domain : Up to 2 </li>
                            <li> Storage Space 1 GB</li>
                            <li>Monthly Bandwidth 10 GB</li>
                            <li> MySQL Databases : 5</li>
                            <li>Sub-domains : 2</li>
                            <li>Email Accounts : 25</li>
                            <li> Shared 128bit SSL : No</li>
                            <li>Control panel : Yes</li>
                            <li>24/7 Support : Yes</li>
                        </ul>
                        <ul class='hidden-sm hidden-xs'>
                            <li>NA</li>
                            <li> Up to 2 </li>
                            <li> 1 GB</li>
                            <li>10 GB</li>
                            <li> 5</li>
                            <li>2</li>
                            <li>25</li>
                            <li><img src='assets/images/cross.png' alt='cross'> </li>
                            <li> <img src='assets/images/tick.png' alt='tick'></li>
                            <li><img src='assets/images/tick.png' alt='tick'> </li>
                        </ul>
                    </div>
                    <p> <a href='#' role='button' class='btn btn-danger btn-lg'>Sign Up </a> </p>
                </div>
                <div class='col-sm-6 col-md-3 col-sm-offset-3 col-md-offset-0 pricing1'>
                    <div class='planHead2'>
                        <h3>MANAGED</h3>
                    </div>
                    <div class='planFeatures'>
                        <ul class='visible-sm visible-xs'>
                            <li>Setup Fee : NA</li>
                            <li> Multi Domain : Up to 2 </li>
                            <li> Storage Space 1 GB</li>
                            <li>Monthly Bandwidth 10 GB</li>
                            <li> MySQL Databases : 5</li>
                            <li>Sub-domains : 2</li>
                            <li>Email Accounts : 25</li>
                            <li> Shared 128bit SSL : Yes</li>
                            <li>Control panel : Yes</li>
                            <li>24/7 Support : Yes</li>
                        </ul>
                        <ul class='hidden-sm hidden-xs'>
                            <li>NA</li>
                            <li> Up to 2 </li>
                            <li> 1 GB</li>
                            <li>10 GB</li>
                            <li> 5</li>
                            <li>2</li>
                            <li>25</li>
                            <li><img src='assets/images/tick.png' alt='tick'> </li>
                            <li> <img src='assets/images/tick.png' alt='tick'></li>
                            <li><img src='assets/images/tick.png' alt='tick'> </li>
                        </ul>
                    </div>
                    <p> <a href='#' role='button' class='btn btn-success btn-lg'>Sign Up </a> </p>
                </div>
            </div>
        </div>
        <!--Container Closed--> 
		
		";
include 'footer.php';