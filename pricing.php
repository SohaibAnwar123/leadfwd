<?php
$active_top_bar = 'none';
$site_url_path = '/';
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Leadfwd combines B2B Prospecting, Sales Outreach and Account-Based Marketing together with the power of Artificial Intelligence and Machine Learning. All in one unstoppable growth platform." />
    <?php include 'includes/analytics_head.php'; ?>
    <!-- favicon start  -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- favicon end -->

    <!-- animate css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="<?php echo $site_url_path; ?>css/leadfwd_web.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $site_url_path; ?>css/leadfwd_v2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $site_url_path; ?>css/modal.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $site_url_path; ?>css/pricing_modal.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/pxu2bwp.css" />
    <link rel="stylesheet" href="https://use.typekit.net/ycj0dcm.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

    <title>B2B Sales Prospecting + Sales Outreach and Automation = Unstoppable Growth Platform | Leadfwd</title>


</head>

<body class="leadfwd-v2">
    <?php include 'includes/analytics_body.php'; ?>

    <!--Navigation-->
    <div class="v2-nav-wrapper no-bg dark-1 dark-blue-btn dbb-white">
        <!--Top Bar-->
        <?php include 'includes/bar_v2.php'; ?>
    </div>



    <!--Create Prospect Lists-->
    <div class="header-type5 w1150 pb30">
        <span class="ht5-title-1">SCALE ON-DEMAND. UNLIMITED MAILBOXES.</span>
        <span class="ht5-title-2 heavy">Flexible Growth Plans for Teams of Any Size.</span>
        <p>Get started today with our Starter plan. No cost. No credit card required.</p>
    </div>
    <!--END Create Prospect Lists-->


    <!--Modal Nav-->
    <div class="pricing_tabs">
        <ul class="modal-nav pricing_nav">
            <li><a href="#" class="active" data-rel="tab-1"> Leadfwd Platform</a></li>
            <li><a href="#" data-rel="tab-2">Email Finder </a></li>
            <li><a href="#" data-rel="tab-3">DFY Growth Services </a></li>
        </ul>
    </div>
    <!--END Modal Nav-->
    <section class="tab-box" id="tab-1" style="display:block;">

        <ul class="modal-nav2">
            <li>
                <ul class="modal-switch pricingMY">
                    <!-- <input type="checkbox">
                    <span class="modal-slider"></span> -->
                    <li><span class="txt v1  flex_align active" data-target-class="tabM">MONTHLY</span></li>
                    <li><span class="txt v2 flex_align" data-target-class="tabY">YEARLY</span></li>
                </ul>
            </li>
            <li class="mn2-off">
                <img src="/images/party-ic.png" width="20" alt="">
                <b>20% Off</b>
            </li>
        </ul>


        <!--Pricing plans-->
        <div class="pp-container">
            <!-- monthly pricing start  -->

            <div class="tab-box tabM" style="display:block;">
                <ul class="pp-option">

                    <!--Starter-->
                    <li>
                        <span class="pp-title">Starter</span>
                        <span>AI-powered prospecting and automated email outreach.</span>
                        <hr class="pp-line-purple">
                        <div class="pp-price">
                            <span>$0</span>
                            <span class="f-13">&nbsp;</span>
                        </div>
                        <a href="https://app.leadfwd.com/signup/" target="_blank"><button class="pp-button blue">Sign
                                Up</button></a>
                        <div class="pp-details">
                            <span>Connect <b>1 Mailbox</b></span>
                            <span>Single user</span>
                            <span>Engage 100
                                contacts
                            </span>
                            <span>50 Email Finder credits</span>
                        </div>
                        <ul class="pp-list-1">
                            <li class="pp-blue-txt fw_700">Features</li>
                            <li>Contact Management</li>
                            <li>Contact History</li>
                            <li>Custom Fields</li>
                            <li>Data Hygiene</li>
                            <li>Email Sequences</li>
                            <li>Bounce Protection</li>
                            <li>Open, Click and Reply Tracking</li>
                            <li>Email Icebreakers</li>
                            <li>Spintax</li>
                            <li>LinkedIn Prospector</li>
                            <li>Hubspot, Pipedrive, Gmail and Outlook 365 Plugin</li>
                        </ul>
                    </li>

                    <!--Solopreneur-->
                    <li class="soloPlan soloPlanM">
                        <span class="pp-title">Solopreneur</span>
                        <span>Enhanced prospecting and sales outreach for Founder-led growth.</span>
                        <hr class="pp-line-orange">
                        <div class="pp-price">
                            <span class="priceTitle">$39</span>
                            <span class="f-13">Per Month / Auto-pay</span>
                        </div>
                        <a href="https://app.leadfwd.com/signup/" target="_blank"><button class="pp-button orange">Sign
                                Up</button></a>
                        <div class="pp-details">
                            <span>Connect <b>Unlimited Mailboxes</b></span>
                            <span>Engage
                                <select name="monthlyListSolo1" class="pp-select orange select_one price_picklist">
                                    <option value="1" selected="">1000</option>
                                    <option value="2">20000</option>
                                </select>
                                contacts
                            </span>
                            <span>Single User</span>
                            <span>1,000 Email Finder credits</span>
                        </div>
                        <dl class="pp-list-2">
                            <dt class="pp-orange-txt">Startup Plan, Plus:</dt>
                            <dd>Unified Inbox</dd>
                            <dd>Smart Sender Inbox Rotation</dd>
                            <dd>Automated Workflows</dd>
                            <dd>SMS Outreach (Twilio)</dd>
                            <dd>Task Management</dd>
                            <dd>Sales Navigator Prospector</dd>
                            <dd>Zapier Connector</dd>
                            <dd>Webhooks</dd>
                            <dd>Custom Alert Policies</dd>
                        </dl>
                    </li>

                    <!--Pro-->
                    <li class="proPlanM">
                        <span class="pp-title">Pro</span>
                        <span>For revops teams focused on pipeline growth and sales acceleration.</span>
                        <hr class="pp-line-green">
                        <div class="pp-price">
                            <span class="priceTitle">$139</span>
                            <span class="f-13">Per Month / Auto-pay</span>
                        </div>
                        <a href="https://app.leadfwd.com/signup/" target="_blank"><button class="pp-button green">Sign
                                Up</button></a>
                        <div class="pp-details">
                            <span>Connect <b>Unlimited Mailboxes</b></span>
                            <span>
                                Engage
                                <select name="monthlyListPro1" class="pp-select select_one green price_picklist">
                                    <option value="1" selected="">25000</option>
                                    <option value="2">50000</option>
                                    <option value="3">75000</option>
                                    <option value="4">100000</option>
                                </select>
                                contacts
                            </span>
                            <span>Invite your team</span>
                            <span>3,000 Email Finder credits</span>
                        </div>
                        <dl class="pp-list-2 green">
                            <dt class="pp-green-txt">Solopreneur Plan, Plus:</dt>
                            <dd>Team Roles and Permissions</dd>
                            <dd>OpenAI Connector</dd>
                            <dd>ChatGPT Powered Icebreakers</dd>
                            <dd>Dynamic ChatGPT Prompts for Email</dd>
                            <dd>Advanced Workflow Rules</dd>
                            <dd>LinkedIn Automation</dd>
                            <dd>Visitor ID and Intent Data</dd>
                            <dd>Voicemail Drops</dd>
                            <dd>Lead Intent Scoring</dd>
                            <dd>Salesforce Connector*</dd>
                            <dd>SugarCRM Connector*</dd>
                            <dd>Advanced Analytics</dd>
                        </dl>
                    </li>

                    <!--Custom-->
                    <li>
                        <span class="pp-title">Custom</span>
                        <span>Agency, multi-brand, whitelabel resellers or larger organizations.</span>
                        <hr class="pp-line-blue">
                        <div class="pp-price">
                            <span class="f-28">Let’s chat</span>
                            <span class="f-13"></span>
                        </div>
                        <button class="pp-button blue">Contact us</button>
                        <dl class="pp-list-2 blue">
                            <dt>Pro Plan, plus:</dt>
                            <dd>Engage 50,000+ contacts</dd>
                            <dd>Unlimited Email Finder credits</dd>
                            <dd>Agency Edition</dd>
                            <dd>Sub-accounts</dd>
                            <dd>Client Manager</dd>
                            <!-- <dd>Whitelabel Platform + Chrome Extension</dd> -->
                            <dd>Custom reporting</dd>
                            <dd>API Access</dd>
                            <dd>Onboarding Expert</dd>
                            <dd>Customer Success Manager</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!-- monthly pricing end -->

            <!-- Yearly pricing start -->
            <div class="tab-box tabY">
                <ul class="pp-option">

                    <!--Starter-->
                    <li>
                        <span class="pp-title">Starter</span>
                        <span>AI-powered prospecting and automated email outreach.</span>
                        <hr class="pp-line-purple">
                        <div class="pp-price">
                            <span>$0</span>
                            <span class="f-13">&nbsp;</span>
                        </div>
                        <a href="https://app.leadfwd.com/signup/" target="_blank"><button class="pp-button blue">Sign
                                Up</button></a>
                        <div class="pp-details">
                            <span>Connect <b>1 Mailbox</b></span>
                            <span>Single user</span>
                            <span>Engage 100
                                contacts
                            </span>
                            <span>50 Email Finder credits</span>
                        </div>
                        <ul class="pp-list-1">
                            <li class="pp-blue-txt fw_700">Features</li>
                            <li>Contact Management</li>
                            <li>Contact History</li>
                            <li>Custom Fields</li>
                            <li>Data Hygiene</li>
                            <li>Email Sequences</li>
                            <li>Bounce Protection</li>
                            <li>Open, Click and Reply Tracking</li>
                            <li>Email Icebreakers</li>
                            <li>Spintax</li>
                            <li>LinkedIn Prospector</li>
                            <li>Hubspot, Pipedrive, Gmail and Outlook 365 Plugin</li>
                        </ul>
                    </li>

                    <!--Solopreneur-->
                    <li class="soloPlan soloPlanY">
                        <span class="pp-title">Solopreneur</span>
                        <span>Enhanced prospecting and sales outreach for Founder-led growth.</span>
                        <hr class="pp-line-orange">
                        <div class="pp-price">
                            <span class="priceTitle">$566</span>
                            <span class="f-13">Billed Yearly</span>
                        </div>
                        <a href="https://app.leadfwd.com/signup/" target="_blank"><button class="pp-button orange">Sign
                                Up</button></a>
                        <div class="pp-details">
                            <span>Connect <b>Unlimited Mailboxes</b></span>
                            <span>Engage
                                <select name="yearlyListSolo1" class="pp-select orange select_one price_picklist">
                                    <option value="1" selected="">1000</option>
                                    <option value="2">20000</option>
                                </select>
                                contacts
                            </span>
                            <span>Single User</span>
                            <span>1,000 Email Finder credits</span>
                        </div>
                        <dl class="pp-list-2">
                            <dt class="pp-orange-txt">Startup Plan, Plus:</dt>
                            <dd>Shared Unibox</dd>
                            <dd>Smart Sender Rotation</dd>
                            <dd>Automated Workflows</dd>
                            <dd>SMS Outreach (Twilio)</dd>
                            <dd>Task Management</dd>
                            <dd>Sales Navigator Prospector</dd>
                            <dd>Zapier Connector</dd>
                            <dd>Webhooks</dd>
                            <dd>Custom Alert Policies</dd>
                        </dl>
                    </li>

                    <!--Pro-->
                    <li class="proPlanY">
                        <span class="pp-title">Pro</span>
                        <span>For revops teams focused on pipeline growth and sales acceleration.</span>
                        <hr class="pp-line-green">
                        <div class="pp-price">
                            <span class="priceTitle">$1526</span>
                            <span class="f-13">Billed Yearly</span>
                        </div>
                        <a href="https://app.leadfwd.com/signup/" target="_blank"><button class="pp-button green">Sign
                                Up</button></a>
                        <div class="pp-details">
                            <span>Connect <b>Unlimited Mailboxes</b></span>
                            <span>
                                Engage
                                <select name="yearlyListPro1" class="pp-select select_one green price_picklist">
                                    <option value="1" selected="">25000</option>
                                    <option value="2">50000</option>
                                    <option value="3">75000</option>
                                    <option value="4">100000</option>
                                </select>
                                contacts
                            </span>
                            <span>Unlimited users</span>
                            <span>3,000 Email Finder credits</span>
                        </div>
                        <dl class="pp-list-2 green">
                            <dt class="pp-green-txt">Solopreneur Plan, Plus:</dt>
                            <dd>Team Roles and Permissions</dd>
                            <dd>GPT Prompt for Email</dd>
                            <dd>GPT for Icebreakers</dd>
                            <dd>Advanced Workflow Rules</dd>
                            <dd>LinkedIn Automation</dd>
                            <dd>Visitor ID and Intent Data</dd>
                            <dd>Voicemail Drops</dd>
                            <dd>Lead Intent Scoring</dd>
                            <dd>Salesforce Connector</dd>
                            <dd>SugarCRM Connector</dd>
                            <dd>Advanced Analytics</dd>
                        </dl>
                    </li>

                    <!--Custom-->
                    <li>
                        <span class="pp-title">Custom</span>
                        <span>Agency, multi-brand, whitelabel resellers or larger organizations.</span>
                        <hr class="pp-line-blue">
                        <div class="pp-price">
                            <span class="f-28">Let’s chat</span>
                            <span class="f-13"></span>
                        </div>
                        <button class="pp-button blue">Contact us</button>
                        <dl class="pp-list-2 blue">
                            <dt>Pro Plan, plus:</dt>
                            <dd>Engage 50,000+ contacts</dd>
                            <dd>Unlimited Email Finder credits</dd>
                            <dd>Agency Edition</dd>
                            <dd>Sub-accounts</dd>
                            <dd>Client Manager</dd>
                            <!-- <dd>Whitelabel Platform + Chrome Extension</dd> -->
                            <dd>Custom reporting</dd>
                            <dd>API Access</dd>
                            <dd>Onboarding Expert</dd>
                            <dd>Customer Success Manager</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!-- Yearly pricing end -->
            <div class="see-all-features"><a href="#price_compare">See all features and compare</a></div>

        </div>
        <!--END Pricing plans-->


        <!--Scale Up On-Demand-->
        <div class="scale-on-demand">

            <div class="header-type5 w1150">
                <span class="ht5-title-2 heavy white">Scale Up On-Demand</span>
                <p>Expand your services ondemand based on changing needs and actual usage. No long term commitments.
                    <u>Pay
                        as you grow.</u>
                </p>
            </div>


            <ul class="sod-list">
                <li class="emailCredits">
                    <span class="sod-list-title">Email Verification Credits</span>
                    <span class="mb50">Protect your sender reputation and limit the number of invalid email addresses on
                        your contact lists by instantly verifying each contact that’s enrolled in a sequence.</span>
                    <select class="sod-list-drop" name="">
                        <option value="1">5000 email verification credits</option>
                        <option value="2">10000 email verification credits</option>
                        <option value="3">50000 email verification credits</option>
                        <option value="4">100000 email verification credits</option>
                    </select>
                    <div class="sod-list-price"><b>$25</b> / bulk credits / never expire</div>
                </li>

                <li class="d_flex flex_column justify_between">
                    <div>
                        <span class="sod-list-title dBlock">Email Finder Credits</span>
                        <span class="mb50">Grow your pipeline faster by finding, enriching and verifying more decision
                            makers using
                            Leadfwd.
                            <a href="#">Risky emails are always free!</a></span>
                    </div>
                    <div class="sod-list-price"><b>$49 - $99</b> / month / auto-pay</div>
                </li>

                <li class="voiceCredits">
                    <span class="sod-list-title">+ Voicemail Drop Credits</span>
                    <span class="mb50">Engage inbound leads or upsell existing customers at scale, without ever dialing
                        a phone. One credit equals one successful voicemail drop <a href="#">Learn more about
                            RVM</a></span>
                    <select class="sod-list-drop" name="">
                        <option value="1">500 voicemail drop credits</option>
                        <option value="2">2000 voicemail drop credits</option>
                        <option value="3">5000 voicemail drop credits</option>
                    </select>
                    <div class="sod-list-price"><b>$40</b> / bulk credits / never expire</div>
                </li>
                <li>
                    <span class="sod-list-badge">Done with you</span>
                    <span class="sod-list-title">Growth Platform Launch Kit</span>
                    <span class="mb50">Personalized white glove account setup, configuration and user on boarding. Our
                        kickstart is a collective-joint project and effort, design to help you launch as
                        quickly as possible.
                        <br><br>
                        Available for Pro and Custom plans. <a href="#">See what’s included</a></span>
                    <div class="sod-list-price"><b>$999</b> / one-time</div>
                </li>
            </ul>

            <span class="sod-more">Book more meetings with our done-for-you <a href="/services/dfy-lead-generation"
                    target="_blank">DFY Growth Services</a> <img src="/images/double-arrow.png" width="21"
                    alt=""></span>

        </div>
        <!--END Scale Up On-Demand-->


        <!--Pricing table-->
        <div class="modal-container-v2" id="price_compare">

            <div class="modal-v2">
                <div class="tab-box tabM" style="display:block;">
                    <div class="position_relative">
                        <dl class="modal-table tableOverflow">

                            <!--Top-->
                            <div id="stickThis">

                                <dd class="modal-top-v2 ">
                                    <span></span>
                                    <p>
                                        <span class="t1">Starter</span>
                                        <span class="t2">$0</span>
                                        <span class="t3">&nbsp;</span>
                                    </p>
                                    <p class="team-monthly soloPlanM">
                                        <span class="t1">Solopreneur</span>
                                        <span class="t2 priceTitle">$39</span>
                                        <span class="t3">per month</span>
                                    </p>
                                    <p class="overlay pro-monthly proPlanM">
                                        <img src="/images/price-bg2.png" width="225" alt="">
                                        <span class="t5">UNLIMITED USERS</span>
                                        <span class="t1 f32">Pro</span>
                                        <span class="t2 priceTitle">$139</span>
                                        <span class="t3">per month</span>
                                    </p>
                                    <p>
                                        <span class="t1 ">Custom</span>
                                        <span class="t4">Chat<br>with us</span>
                                        <!-- <span class="t2">$299</span> -->

                                    </p>
                                </dd>
                                <!-- END Top-->

                            </div>
                            <!--END Top-->


                            <!--Email Accounts-->
                            <dd>
                                <p class="title">
                                    Connected Email Accounts
                                    <b class="f14">
                                        Connected email accounts for outbound<br>
                                        sequences and automated workflows.
                                    </b>
                                </p>
                                <p>1</p>
                                <p>No Limit</p>
                                <p>No Limit</p>
                                <p>No Limit</p>
                            </dd>

                            <!--Contact Management-->
                            <dd>
                                <p class="title subrow d_flex flex_row">
                                    <a href="https://help.leadfwd.com/hc/en-us/categories/9594601671571-Contact-Management"
                                        target="_blank"> Contact Management </a>
                                    <a class="subrow-open" href="javascript:void(0)"><img src="/images/modal-more.png"
                                            width="16" alt=""></a>
                                    <a class="subrow-close" href="javascript:void(0)"><img
                                            src="/images/modal-close-row.png" width="16" alt=""></a>
                                </p>
                                <p>100</p>
                                <div class="soloPlanM">
                                    <select name="monthlyListSolo2"
                                        class="pp-select price_picklist hide orange select_one">
                                        <option value="1" selected="">1000</option>
                                        <option value="2">20000</option>
                                    </select>
                                </div>
                                <div class="proPlanM">
                                    <select name="monthlyListPro2"
                                        class="pp-select select_one green price_picklist hide">
                                        <option value="1" selected="">25000</option>
                                        <option value="2">50000</option>
                                        <option value="3">75000</option>
                                        <option value="4">100000</option>
                                    </select>
                                </div>
                                <p>100,000+</p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/9609558860307-Create-and-edit-custom-fields"
                                            target="_blank"> Custom Fields </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span>10</span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981787923-Create-list-segments"
                                            target="_blank"> Segments </a><a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p> <a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/9609714056851-Timeline-report"
                                            target="_blank"> Engagement Timeline </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401989758099-Getting-started"
                                            target="_blank">Lead Scoring </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <span>Custom</span>
                                    <span>Custom</span>
                                </div>
                                <div>
                                    <p>Duplicate Detection <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981864851-Managing-Unsubscribe-Options"
                                            target="_blank">Do Not Contact List </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401989445651-Sales-Inbox"
                                            target="_blank">Shared Sales Inbox </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981246227-Importing-Contacts"
                                            target="_blank">Import or Export via CSV </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/9609849228691-Tag-contacts"
                                            target="_blank">Tags </a><a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/categories/1500001929981-App-Connectors-and-Integrations"
                                            target="_blank">Import from CRM </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--B2B Prospect Data-->
                            <dd>
                                <p class="title subrow v2">
                                    <span>
                                        <a href="https://help.leadfwd.com/hc/en-us/categories/1500001929921-B2B-Prospect-Data"
                                            target="_blank"> B2B Prospect Data </a>
                                        <a class="subrow-open v2" href="javascript:void(0)"><img
                                                src="/images/modal-more.png" width="16" alt=""></a><a
                                            class="subrow-close v2" href="javascript:void(0)"><img
                                                src="/images/modal-close-row.png" width="16" alt=""></a>
                                    </span>
                                    <b class="f14">200M+ B2B Accounts and Contacts with Email<br>Verification. Risky
                                        Emails,
                                        Always
                                        Free.</b>
                                </p>
                                <p>
                                    50
                                    <b>credits / per month</b>
                                </p>
                                <p>
                                    1,000
                                    <b>credits / per month</b>
                                </p>
                                <p>
                                    3,000
                                    <b>credits / per month</b>
                                </p>
                                <p>No Limit</p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981184531-Create-a-new-search"
                                            target="_blank"> Create Custom Persona Searches </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5603695303315-Email-Finder"
                                            target="_blank">Email Finder (By Name or Domain) </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5603562044947-LinkedIn-Prospecting"
                                            target="_blank">LinkedIn Prospector </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Account Intelligence and Insights <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5606922248979--Email-Verification-Status-Verified-and-Risky-"
                                            target="_blank">Real-time Email Verification </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--Chrome Extension-->
                            <dd>
                                <p class="title subrow v2">
                                    <span>
                                        <a
                                            href="https://help.leadfwd.com/hc/en-us/categories/5603322479251-Chrome-Extension">
                                            Chrome Extension </a>
                                        <a class="subrow-open v2" href="javascript:void(0)"><img
                                                src="/images/modal-more.png" width="16" alt=""></a><a
                                            class="subrow-close v2" href="javascript:void(0)"><img
                                                src="/images/modal-close-row.png" width="16" alt=""></a>
                                    </span>
                                    <b class="f14">Task Management, Social Prospecting, Email Finder, <br>Alerts,
                                        Hubspot,
                                        Pipedrive, SugarCRM and more.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5603562044947-LinkedIn-Prospecting"
                                            target="_blank">LinkedIn, Sales Navigator and Crunchbase Prospecting </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5604326343187-Engage-from-Gmail-and-Outlook-365"
                                            target="_blank">Sync and Enage Contacts from Gmail or Outlook 365 </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5604318190739-Sidebar-CRM-Plugins"
                                            target="_blank">Sync Prospects to Salesforce and SugarCRM </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5604178240915-Task-Management"
                                            target="_blank">Task Management </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Reminders and alerts <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5603695303315-Email-Finder"
                                            target="_blank">Email Finder </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--Multichannel Sequences-->
                            <dd>
                                <p class="title subrow d_flex flex_row">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/1500002553742-Sequences"
                                        target="_blank"> Multichannel Sequences </a>
                                    <a class="subrow-open v2" href="javascript:void(0)"><img
                                            src="/images/modal-more.png" width="16" alt=""></a><a
                                        class="subrow-close v2" href="javascript:void(0)"><img
                                            src="/images/modal-close-row.png" width="16" alt=""></a>

                                </p>
                                <p>
                                    Email
                                    <b>Sequences</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p>Automated Emails <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>SMS <a href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Voicemail Drops <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Custom Tasks <a href="#"><img src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>LinkedIn Automation Tasks <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Direct Mail <a href="#"><img src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Shared team access or private <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981193235-Delivery-Schedule-Setup"
                                            target="_blank">Custom schedules </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401989451667-Reply-Detection"
                                            target="_blank">Reply detection </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981125651-Create-a-Sequence"
                                            target="_blank">Custom delays between touchpoints </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Open, clicks and attachment tracking <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981231635-Add-Email-Personalization"
                                            target="_blank">Custom email personalization </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981231635-Add-Email-Personalization"
                                            target="_blank">Missing variable fallback protection </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981281939-Unenroll-a-Contact-from-a-Sequence"
                                            target="_blank">End and transfer to a different sequence </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>

                                <div>
                                    <p>Duplicate detection <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/13306787268243-Webhooks"
                                            target="_blank">Webhooks </a> <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--Task Management-->
                            <dd>
                                <p class="title subrow">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/5604178240915-Task-Management"
                                        target="_blank">Task Management</a>
                                    <a class="subrow-open v2" href="javascript:void(0)"><img
                                            src="/images/modal-more.png" width="16" alt=""></a><a
                                        class="subrow-close v2" href="javascript:void(0)"><img
                                            src="/images/modal-close-row.png" width="16" alt=""></a>
                                </p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607107900435--Execute-Tasks-with-Step-flow"
                                            target="_blank">Execute Tasks at Scale with Step-flow </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607118619923--Contact-Intelligence"
                                            target="_blank">Account and Contact Intelligence </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Click-to-Call from Side Bar <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/12663773396883--Create-Custom-Task-Types-Outcomes-and-Objections"
                                            target="_blank">Create Custom Task Types </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607228541459--Complete-a-Task"
                                            target="_blank">Log Notes, Outcomes and Objections </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/9509980987411--Icebreakers-for-Email-Personalization"
                                            target="_blank">Personalize Emails with Icebreakers </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607261451795--Schedule-a-Follow-up"
                                            target="_blank">Schedule Follow-up Tasks </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607152529299--Snooze-a-Task-Until-Later"
                                            target="_blank">Snooze Tasks and Reassign </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5609367646355--LinkedIn-Tasks-View-Profile-Send-Invite-and-Send-Message"
                                            target="_blank">LinkedIn Automation (Invites and Messages) </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--LinkedIn Automation-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/categories/9608484832019-LinkedIn-Automation"
                                        target="_blank"> LinkedIn Automation </a>
                                    <b class="f14">Execute LinkedIn touches in rapid succession <br>with just
                                        one-click.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>

                            <!--Boost AI-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/1500002703121-AI-Productivity"
                                        target="_blank"> Boost AI </a>
                                    <b class="f14">Sentiment analysis, OOO detection,<br>DNC detection and more.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Essential Mailbox Connectors-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/1500002585001-Getting-Started"
                                        target="_blank"> Essential Mailbox Connectors </a>
                                    <b class="f14">Gmail, Outlook 365 and Custom IMAP / SMTP</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Advanced Email Threading-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/13365634035091-Email-Outreach"
                                        target="_blank"> Next/Gen Cold Email Outreach </a>
                                    <b class="f14">Bypass spam and reach the primary inbox with a <br><a
                                            href="/platform/cold-email-software"> next generation cold email
                                            platform.</a></b>
                                </p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Automation Builder-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/categories/9306853693971-Automation-Workflow"
                                        target="_blank"> Automation Workflow </a>
                                    <b class="f14">Replace manual tasks with automation<br>workflows powered by AI.</b>
                                </p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Visitor ID and Page Tracking-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/categories/1500001899482-Visitor-ID-and-Intent"
                                        target="_blank"> Visitor Intent Data </a>
                                    <b class="f14">Reveal your anonymous web traffic and<br>identify leads browsing your
                                        site
                                        pages.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Reports and Analytics-->
                            <dd>
                                <p class="title">
                                    Reports and Analytics
                                    <b class="f14">Real-time reporting and insights to see<br>what’s working and what’s
                                        not.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--AI Delivery Optimization-->
                            <dd>
                                <p class="title">
                                    AI Delivery Optimization
                                    <b class="f14">Human-like sending, auto ramp up<br>and deliverability
                                        monitoring.</b>
                                </p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>



                            <!--B2B Email Template Library-->
                            <dd>
                                <p class="title">
                                    B2B Email Template Library
                                    <b class="f14">450+ proven sales templates to start<br>engaging prospects with
                                        today.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Salesforce Connector-->
                            <dd>
                                <p class="title subrow v2">
                                    <span>
                                        <a href="https://help.leadfwd.com/hc/en-us/sections/1500002703101-Salesforce"
                                            target="_blank"> Salesforce Connector </a>
                                        <a class="subrow-open v2" href="javascript:void(0)"><img
                                                src="/images/modal-more.png" width="16" alt=""></a><a
                                            class="subrow-close v2" href="javascript:void(0)"><img
                                                src="/images/modal-close-row.png" width="16" alt=""></a>
                                    </span>
                                    <b class="f14">Native data sync and built-in Sales<br>Engagement experience.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p>Sync Contacts and Leads <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Smart Sync for Campaign Lists <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Platform delivered natively inside CRM <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Enroll into Sequences directly from CRM <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>LinkedIn Prospector Sync to CRM <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Personalize Emails with Custom Fields <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Sequences: Create CRM Tasks and Assign Owners <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Sync tasks to CRM <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--SugarCRM Connector-->
                            <dd>
                                <p class="title subrow v2">
                                    <span>
                                        <a href="https://help.leadfwd.com/hc/en-us/sections/1500002585121-SugarCRM">
                                            SugarCRM Connector </a>
                                        <a class="subrow-open v2" href="javascript:void(0)"><img
                                                src="/images/modal-more.png" width="16" alt=""></a><a
                                            class="subrow-close v2" href="javascript:void(0)"><img
                                                src="/images/modal-close-row.png" width="16" alt=""></a>
                                    </span>
                                    <b class="f14">Native real-time data sync and built-in Sales<br>Engagement
                                        experience.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p>Sync Accounts, Contacts, Targets and Leads <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Smart Sync for Target Lists <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Platform delivered natively inside CRM <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Enroll into Sequences directly from CRM <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>LinkedIn Prospector Sync to CRM <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Personalize Emails with Custom Fields <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Sequences: Create CRM Tasks, Calls and Assign Owners <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Sync tasks to CRM <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--API-->
                            <dd>
                                <p class="title">
                                    API
                                    <b class="f14">Our REST API provides an easy way to access,<br>extend and interact
                                        with
                                        your
                                        Leadfwd
                                        data.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Integrations-->
                            <dd>
                                <p class="title">
                                    Integrations
                                    <b class="f14">Connect and engage leads from LiveChat, Olark,<br>Zendesk, SuiteCRM,
                                        GoToWebinar and
                                        more.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Team Management-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/9769684039187-User-Management"
                                        target="_blank"> Team Management </a>
                                    <b class="f14">Build custom access roles, create unlimited users,<br>and monitor
                                        user
                                        activity with
                                        usage
                                        logs.</b>
                                </p>
                                <span></span>
                                <span></span>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Trust and Compliance-->
                            <dd>
                                <p class="title">
                                    Trust and Compliance
                                    <b class="f14">Built-in features to help organizations meet<br>their obligations
                                        under
                                        CANSPAM, the
                                        GDPR<br>and CCPA.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Agency and Sub-accounts-->
                            <dd>
                                <p class="title">
                                    Agency and Sub-accounts
                                    <b class="f14">Create and manage multiple client sub-accounts<br>or separate
                                        departments
                                        and
                                        brands.</b>
                                </p>
                                <span></span>
                                <span></span>
                                <span></span>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Knowledge base-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/" target="_blank"> Knowledge base </a>
                                    <b class="f14">Browser dozens of help articles, video tutorials<br>and best practice
                                        guides.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Customer Success Helpdesk-->
                            <dd>
                                <p class="title">
                                    Customer Success Helpdesk
                                </p>
                                <p>Email</p>
                                <p>Email + Chat</p>
                                <p>Email + Chat</p>
                                <p>Dedicated CSM<br>+ Onboarding</p>
                            </dd>

                        </dl>
                        <button class="seeAllButton">See All Features</button>
                    </div>
                </div>
                <div class="tab-box tabY">
                    <div class="position_relative">
                        <dl class="modal-table tableOverflow">

                            <!--Top-->
                            <div id="stickThis">

                                <dd class="modal-top-v2">
                                    <span></span>
                                    <p>
                                        <span class="t1">Starter</span>
                                        <span class="t2">$0</span>
                                        <span class="t3">&nbsp;</span>
                                    </p>
                                    <p class="team-monthly soloPlanY">
                                        <span class="t1">Solopreneur</span>
                                        <span class="t2 priceTitle">$566</span>
                                        <span class="t3">billed yearly</span>
                                    </p>
                                    <p class="overlay pro-monthly proPlanY">
                                        <img src="/images/price-bg2.png" width="225" alt="">
                                        <span class="t5">UNLIMITED USERS</span>
                                        <span class="t1 f32">Pro</span>
                                        <span class="t2 priceTitle">$1526</span>
                                        <span class="t3">billed yearly</span>
                                    </p>
                                    <p>
                                        <span class="t1 ">Custom</span>
                                        <span class="t4">Chat<br>with us</span>
                                        <!--<span class="t2">$299</span>
                        <span class="t3">Per month. Billed monthly.</span>-->
                                    </p>
                                </dd>
                                <!--END Top-->

                            </div>
                            <!--END Top-->


                            <!--Email Accounts-->
                            <dd>
                                <p class="title">
                                    Connected Email Accounts
                                    <b class="f14">
                                        Connected email accounts for outbound<br>
                                        sequences and automated workflows.
                                    </b>
                                </p>
                                <p>1</p>
                                <p>No Limit</p>
                                <p>No Limit</p>
                                <p>No Limit</p>
                            </dd>

                            <!--Contact Management-->
                            <dd>
                                <p class="title subrow d_flex flex_row">
                                    <a href="https://help.leadfwd.com/hc/en-us/categories/9594601671571-Contact-Management"
                                        target="_blank"> Contact Management </a>
                                    <a class="subrow-open" href="javascript:void(0)"><img src="/images/modal-more.png"
                                            width="16" alt=""></a>
                                    <a class="subrow-close" href="javascript:void(0)"><img
                                            src="/images/modal-close-row.png" width="16" alt=""></a>
                                </p>
                                <p>100</p>
                                <div class="soloPlanY">
                                    <select name="yearlyListSolo2"
                                        class="pp-select price_picklist hide orange select_one">
                                        <option value="1" selected="">1000</option>
                                        <option value="2">20000</option>
                                    </select>
                                </div>
                                <div class="proPlanY">
                                    <select name="yearlyListPro2"
                                        class="pp-select select_one green price_picklist hide">
                                        <option value="1" selected="">25000</option>
                                        <option value="2">50000</option>
                                        <option value="3">75000</option>
                                        <option value="4">100000</option>
                                    </select>
                                </div>
                                <p>100,000+</p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/9609558860307-Create-and-edit-custom-fields"
                                            target="_blank"> Custom Fields </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span>10</span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981787923-Create-list-segments"
                                            target="_blank"> Segments </a><a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p> <a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/9609714056851-Timeline-report"
                                            target="_blank"> Engagement Timeline </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401989758099-Getting-started"
                                            target="_blank">Lead Scoring </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <span>Custom</span>
                                    <span>Custom</span>
                                </div>
                                <div>
                                    <p>Duplicate Detection <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981864851-Managing-Unsubscribe-Options"
                                            target="_blank">Do Not Contact List </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401989445651-Sales-Inbox"
                                            target="_blank">Shared Sales Inbox </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981246227-Importing-Contacts"
                                            target="_blank">Import or Export via CSV </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/9609849228691-Tag-contacts"
                                            target="_blank">Tags </a><a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/categories/1500001929981-App-Connectors-and-Integrations"
                                            target="_blank">Import from CRM </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--B2B Prospect Data-->
                            <dd>
                                <p class="title subrow v2">
                                    <span>
                                        <a href="https://help.leadfwd.com/hc/en-us/categories/1500001929921-B2B-Prospect-Data"
                                            target="_blank"> B2B Prospect Data </a>
                                        <a class="subrow-open v2" href="javascript:void(0)"><img
                                                src="/images/modal-more.png" width="16" alt=""></a><a
                                            class="subrow-close v2" href="javascript:void(0)"><img
                                                src="/images/modal-close-row.png" width="16" alt=""></a>
                                    </span>
                                    <b class="f14">200M+ B2B Accounts and Contacts with Email<br>Verification. Risky
                                        Emails,
                                        Always
                                        Free.</b>
                                </p>
                                <p>
                                    50
                                    <b>credits / per month</b>
                                </p>
                                <p>
                                    1,000
                                    <b>credits / per month</b>
                                </p>
                                <p>
                                    3,000
                                    <b>credits / per month</b>
                                </p>
                                <p>No Limit</p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981184531-Create-a-new-search"
                                            target="_blank"> Create Custom Persona Searches </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5603695303315-Email-Finder"
                                            target="_blank">Email Finder (By Name or Domain) </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5603562044947-LinkedIn-Prospecting"
                                            target="_blank">LinkedIn Prospector </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Account Intelligence and Insights <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5606922248979--Email-Verification-Status-Verified-and-Risky-"
                                            target="_blank">Real-time Email Verification </a> <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--Chrome Extension-->
                            <dd>
                                <p class="title subrow v2">
                                    <span>
                                        <a
                                            href="https://help.leadfwd.com/hc/en-us/categories/5603322479251-Chrome-Extension">
                                            Chrome Extension </a>
                                        <a class="subrow-open v2" href="javascript:void(0)"><img
                                                src="/images/modal-more.png" width="16" alt=""></a><a
                                            class="subrow-close v2" href="javascript:void(0)"><img
                                                src="/images/modal-close-row.png" width="16" alt=""></a>
                                    </span>
                                    <b class="f14">Task Management, Social Prospecting, Email Finder, <br>Alerts,
                                        Hubspot,
                                        Pipedrive, SugarCRM and more.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5603562044947-LinkedIn-Prospecting"
                                            target="_blank">LinkedIn, Sales Navigator and Crunchbase Prospecting </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5604326343187-Engage-from-Gmail-and-Outlook-365"
                                            target="_blank">Sync and Enage Contacts from Gmail or Outlook 365 </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5604318190739-Sidebar-CRM-Plugins"
                                            target="_blank">Sync Prospects to Salesforce and SugarCRM </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5604178240915-Task-Management"
                                            target="_blank">Task Management </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Reminders and alerts <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/5603695303315-Email-Finder"
                                            target="_blank">Email Finder </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--Multichannel Sequences-->
                            <dd>
                                <p class="title subrow d_flex flex_row">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/1500002553742-Sequences"
                                        target="_blank"> Multichannel Sequences </a>
                                    <a class="subrow-open v2" href="javascript:void(0)"><img
                                            src="/images/modal-more.png" width="16" alt=""></a><a
                                        class="subrow-close v2" href="javascript:void(0)"><img
                                            src="/images/modal-close-row.png" width="16" alt=""></a>

                                </p>
                                <p>
                                    Email
                                    <b>Sequences</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p>Automated Emails <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>SMS <a href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Voicemail Drops <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Custom Tasks <a href="#"><img src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>LinkedIn Automation Tasks <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Direct Mail <a href="#"><img src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Shared team access or private <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981193235-Delivery-Schedule-Setup"
                                            target="_blank">Custom schedules </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401989451667-Reply-Detection"
                                            target="_blank">Reply detection </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981125651-Create-a-Sequence"
                                            target="_blank">Custom delays between touchpoints </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Open, clicks and attachment tracking <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981231635-Add-Email-Personalization"
                                            target="_blank">Custom email personalization </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981231635-Add-Email-Personalization"
                                            target="_blank">Missing variable fallback protection </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/4401981281939-Unenroll-a-Contact-from-a-Sequence"
                                            target="_blank">End and transfer to a different sequence </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>

                                <div>
                                    <p>Duplicate detection <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/sections/13306787268243-Webhooks"
                                            target="_blank">Webhooks </a> <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--Task Management-->
                            <dd>
                                <p class="title subrow">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/5604178240915-Task-Management"
                                        target="_blank">Task Management</a>
                                    <a class="subrow-open v2" href="javascript:void(0)"><img
                                            src="/images/modal-more.png" width="16" alt=""></a><a
                                        class="subrow-close v2" href="javascript:void(0)"><img
                                            src="/images/modal-close-row.png" width="16" alt=""></a>
                                </p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607107900435--Execute-Tasks-with-Step-flow"
                                            target="_blank">Execute Tasks at Scale with Step-flow </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607118619923--Contact-Intelligence"
                                            target="_blank">Account and Contact Intelligence </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Click-to-Call from Side Bar <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/12663773396883--Create-Custom-Task-Types-Outcomes-and-Objections"
                                            target="_blank">Create Custom Task Types </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607228541459--Complete-a-Task"
                                            target="_blank">Log Notes, Outcomes and Objections </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/9509980987411--Icebreakers-for-Email-Personalization"
                                            target="_blank">Personalize Emails with Icebreakers </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607261451795--Schedule-a-Follow-up"
                                            target="_blank">Schedule Follow-up Tasks </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5607152529299--Snooze-a-Task-Until-Later"
                                            target="_blank">Snooze Tasks and Reassign </a><a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p><a class="customField"
                                            href="https://help.leadfwd.com/hc/en-us/articles/5609367646355--LinkedIn-Tasks-View-Profile-Send-Invite-and-Send-Message"
                                            target="_blank">LinkedIn Automation (Invites and Messages) </a><a
                                            href="#"><img src="/images/modal-info.png" width="14" alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--LinkedIn Automation-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/categories/9608484832019-LinkedIn-Automation"
                                        target="_blank"> LinkedIn Automation </a>
                                    <b class="f14">Execute LinkedIn touches in rapid succession <br>with just
                                        one-click.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>

                            <!--Boost AI-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/1500002703121-AI-Productivity"
                                        target="_blank"> Boost AI </a>
                                    <b class="f14">Sentiment analysis, OOO detection,<br>DNC detection and more.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Essential Mailbox Connectors-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/1500002585001-Getting-Started"
                                        target="_blank"> Essential Mailbox Connectors </a>
                                    <b class="f14">Gmail, Outlook 365 and Custom IMAP / SMTP</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Advanced Email Threading-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/13365634035091-Email-Outreach"
                                        target="_blank"> Next/Gen Cold Email Outreach </a>
                                    <b class="f14">Bypass spam and reach the primary inbox with a <br><a
                                            href="/platform/cold-email-software"> next generation cold email
                                            platform.</a></b>
                                </p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Automation Builder-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/categories/9306853693971-Automation-Workflow"
                                        target="_blank"> Automation Workflow </a>
                                    <b class="f14">Replace manual tasks with automation<br>workflows powered by AI.</b>
                                </p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Visitor ID and Page Tracking-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/categories/1500001899482-Visitor-ID-and-Intent"
                                        target="_blank"> Visitor Intent Data </a>
                                    <b class="f14">Reveal your anonymous web traffic and<br>identify leads browsing your
                                        site
                                        pages.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Reports and Analytics-->
                            <dd>
                                <p class="title">
                                    Reports and Analytics
                                    <b class="f14">Real-time reporting and insights to see<br>what’s working and what’s
                                        not.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--AI Delivery Optimization-->
                            <dd>
                                <p class="title">
                                    AI Delivery Optimization
                                    <b class="f14">Human-like sending, auto ramp up<br>and deliverability
                                        monitoring.</b>
                                </p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>



                            <!--B2B Email Template Library-->
                            <dd>
                                <p class="title">
                                    B2B Email Template Library
                                    <b class="f14">450+ proven sales templates to start<br>engaging prospects with
                                        today.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Salesforce Connector-->
                            <dd>
                                <p class="title subrow v2">
                                    <span>
                                        <a href="https://help.leadfwd.com/hc/en-us/sections/1500002703101-Salesforce"
                                            target="_blank"> Salesforce Connector </a>
                                        <a class="subrow-open v2" href="javascript:void(0)"><img
                                                src="/images/modal-more.png" width="16" alt=""></a><a
                                            class="subrow-close v2" href="javascript:void(0)"><img
                                                src="/images/modal-close-row.png" width="16" alt=""></a>
                                    </span>
                                    <b class="f14">Native data sync and built-in Sales<br>Engagement experience.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p>Sync Contacts and Leads <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Smart Sync for Campaign Lists <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Platform delivered natively inside CRM <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Enroll into Sequences directly from CRM <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>LinkedIn Prospector Sync to CRM <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Personalize Emails with Custom Fields <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Sequences: Create CRM Tasks and Assign Owners <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Sync tasks to CRM <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--SugarCRM Connector-->
                            <dd>
                                <p class="title subrow v2">
                                    <span>
                                        <a href="https://help.leadfwd.com/hc/en-us/sections/1500002585121-SugarCRM">
                                            SugarCRM Connector </a>
                                        <a class="subrow-open v2" href="javascript:void(0)"><img
                                                src="/images/modal-more.png" width="16" alt=""></a><a
                                            class="subrow-close v2" href="javascript:void(0)"><img
                                                src="/images/modal-close-row.png" width="16" alt=""></a>
                                    </span>
                                    <b class="f14">Native real-time data sync and built-in Sales<br>Engagement
                                        experience.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>
                            <dt class="subrow">
                                <div>
                                    <p>Sync Accounts, Contacts, Targets and Leads <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Smart Sync for Target Lists <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Platform delivered natively inside CRM <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Enroll into Sequences directly from CRM <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>LinkedIn Prospector Sync to CRM <a href="#"><img src="/images/modal-info.png"
                                                width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Personalize Emails with Custom Fields <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Sequences: Create CRM Tasks, Calls and Assign Owners <a href="#"><img
                                                src="/images/modal-info.png" width="14" alt=""></a></p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                                <div>
                                    <p>Sync tasks to CRM <a href="#"><img src="/images/modal-info.png" width="14"
                                                alt=""></a>
                                    </p>
                                    <span></span>
                                    <span></span>
                                    <img src="/images/check-blue.png" width="20" alt="">
                                    <img src="/images/check-blue.png" width="20" alt="">
                                </div>
                            </dt>


                            <!--API-->
                            <dd>
                                <p class="title">
                                    API
                                    <b class="f14">Our REST API provides an easy way to access,<br>extend and interact
                                        with
                                        your
                                        Leadfwd
                                        data.</b>
                                </p>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Integrations-->
                            <dd>
                                <p class="title">
                                    Integrations
                                    <b class="f14">Connect and engage leads from LiveChat, Olark,<br>Zendesk, SuiteCRM,
                                        GoToWebinar and
                                        more.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Team Management-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/hc/en-us/sections/9769684039187-User-Management"
                                        target="_blank"> Team Management </a>
                                    <b class="f14">Build custom access roles, create unlimited users,<br>and monitor
                                        user
                                        activity with
                                        usage
                                        logs.</b>
                                </p>
                                <span></span>
                                <span></span>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Trust and Compliance-->
                            <dd>
                                <p class="title">
                                    Trust and Compliance
                                    <b class="f14">Built-in features to help organizations meet<br>their obligations
                                        under
                                        CANSPAM, the
                                        GDPR<br>and CCPA.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Agency and Sub-accounts-->
                            <dd>
                                <p class="title">
                                    Agency and Sub-accounts
                                    <b class="f14">Create and manage multiple client sub-accounts<br>or separate
                                        departments
                                        and
                                        brands.</b>
                                </p>
                                <span></span>
                                <span></span>
                                <span></span>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Knowledge base-->
                            <dd>
                                <p class="title">
                                    <a href="https://help.leadfwd.com/" target="_blank"> Knowledge base </a>
                                    <b class="f14">Browser dozens of help articles, video tutorials<br>and best practice
                                        guides.</b>
                                </p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                                <p class="check"><span></span></p>
                            </dd>


                            <!--Customer Success Helpdesk-->
                            <dd>
                                <p class="title">
                                    Customer Success Helpdesk
                                </p>
                                <p>Email</p>
                                <p>Email + Chat</p>
                                <p>Email + Chat</p>
                                <p>Dedicated CSM<br>+ Onboarding</p>
                            </dd>

                        </dl>
                        <button class="seeAllButton">See All Features</button>
                    </div>
                </div>

                <!--Have questions-->
                <section class="pt100pb50">

                    <h1 class="mb35 heading-3">
                        FAQ
                    </h1>

                    <ul class="faq w100p">
                        <li>
                            <span class="f16b">What is considered a ‘Contact’ for the purposes of my plan limit?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Records that are imported to your Contacts database and that are set to an active
                                    record status are eligible to be engaged by the Leadfwd platform. Records that are
                                    set to inactive, bounced or unsubscribed do not count against your limit. <a
                                        href="https://help.leadfwd.com/hc/en-us/articles/4401981655187-Record-Status-Types"
                                        target="_blank">Read more</a></span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Do you have a free trial that I can test-drive?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Our Starter Plan is available at no-cost and allows you to test-drive many of the
                                    features of the platform. For a more in-depth overview, you can also review our self
                                    guided product tour as well.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Is there an annual agreement required?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>If you choose a monthly plan, there is no annual agreement or term. If you choose
                                    an annual plan that is billed yearly, then your term is for a full 12 months.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">How do the unlimited mailbox plans work?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Simple, you can connect as many email accounts as you’d like for the purposes of
                                    executing your outbound Sequences. Usage must be in accordance with our Terms and
                                    Conditions, AUP and Fair Usage Policy. </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Is there an email sending limit?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Each connected email account / mailbox will be capable of sending a maximum of 1
                                    email per minute, which works out to 1,440 emails within a 24 hour period. This goes
                                    way beyond the recommended daily volume for a single email mailbox. If you’re
                                    looking for scale with your volume, you should follow best practices and connect
                                    more mailboxes. You may also face a daily volume restriction with your mailbox
                                    provider (i.e. Google, Microsoft, etc). </span>
                            </div>
                        </li>
                    </ul>

                </section>
                <!--END Have questions-->

            </div>

        </div>
        <!--END Pricing table-->
    </section>
    <section class="tab-box" id="tab-2">
        <!--Pricing table-->
        <div class="modal-container-v2 email_finder" id="price_compare">
            <div class="ht5-title-2">For teams focused on building top-of-the-funnel lead-flow, today.</div>
            <div class="modal-v2">
                <div class="position_relative">
                    <dl class="modal-table tableOverflow">

                        <!--Top-->
                        <div id="stickThis">

                            <dd class="modal-top-v2">
                                <div class="btnz_wrap">
                                    <a href="" class="flex_align btn_wrap">Start with 50 free leads</a>
                                    <span>NO CREDIT CARD REQUIRED.</span>
                                </div>
                                <p>
                                    <span class="t1">Starter</span>
                                    <span class="t2">$0</span>
                                    <span class="t3">&nbsp;</span>
                                </p>
                                <p class="team-monthly">
                                    <span class="t1">Basic</span>
                                    <span class="t2">$49</span>
                                    <span class="t3">billed monthly</span>
                                </p>
                                <p class="overlay pro-monthly">
                                    <img src="/images/price-bg2.png" width="225" alt="">
                                    <span class="t5">MOST POPULAR</span>
                                    <span class="t1 f32">Growth</span>
                                    <span class="t2">$99</span>
                                    <span class="t3">billed monthly</span>
                                </p>
                                <p>
                                    <span class="t1 ">Custom</span>
                                    <span class="t4">Chat<br>with us</span>
                                </p>
                            </dd>
                            <!--END Top-->


                        </div>
                        <!--END Top-->


                        <!--Email Accounts-->
                        <dd class="risk_dd">
                            <div>
                                <p class="risk_email"><img src="/images/round_tick.svg" alt=""> Risky Emails are
                                    always <a href="" class="clr_zinc">Free.</a> </p>
                                <p class="title ">
                                    Prospect Credits
                                    <b class="f14">
                                        1 credit = 1 <a href="" class="clr_zinc">verified</a> email contact
                                    </b>
                                </p>
                            </div>
                            <p>50</p>
                            <p>3,000
                                <b class="f14 fw_700 clrBlack">0.01633 / per additional</b>
                            </p>
                            <p>10,000
                                <b class="f14 fw_700 clrBlack">0.0099 / per additional</b>
                            </p>
                            <p>Custom</p>
                        </dd>

                        <!--Credits Rollover-->
                        <dd>
                            <p class="title">
                                Prospect Search
                                <b class="f14">
                                    200M+ B2B Accounts and Contacts with Email Verification. Risky
                                    Emails, Always Free.

                                </b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>

                        <!--Chrome Extension Data-->
                        <dd>
                            <p class="title subrow v2">
                                <span>
                                    Export to CSV
                                </span>
                                <b class="f14">Generate and export a spreadsheet of <br>
                                    enriched contacts and verified emails.</b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>

                        <!--Chrome Extension-->
                        <dd>
                            <p class="title subrow v2">
                                <span>
                                    Chrome Extension
                                </span>
                                <b class="f14">Find Emails on LinkedIn, Crunchbase or <br>
                                    any company website.
                                </b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>

                        <!--LinkedIn Sales Navigator-->
                        <dd>
                            <p class="title subrow">
                                <span> LinkedIn Sales Navigator
                                </span>
                                <b class="f14">
                                    Build highly-targeted prospect emails lists <br>
                                    using Sales Navigator.
                                </b>

                            </p>
                            <p></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>

                        <!--CRM Connectors-->
                        <dd>
                            <p class="title subrow">
                                <span>CRM Connectors
                                </span>
                                <b class="f14">Connect and push prospects to Salesforce, <br>
                                    Hubspot, Pipedrive or Sugar Sell.</b>
                            </p>
                            <p></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>

                        <!-- Zapier Connector-->
                        <dd>
                            <p class="title">
                                Zapier Connector
                                <b class="f14">Connect and push prospects to 4,000+ apps using <br>
                                    simple and customizable ‘no code’ webhooks.</b>
                            </p>
                            <p></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>

                        <!--API Access-->
                        <dd>
                            <p class="title">
                                API Access
                                <b class="f14">Find verified emails and enriched company <br>
                                    insights and integrate with any app.</b>
                            </p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p class="check"><span></span></p>
                        </dd>


                        <!--Trust and Compliance-->
                        <dd>
                            <p class="title">
                                Trust and Compliance
                                <b class="f14">Built-in features to help organizations meet <br>
                                    their obligations under CANSPAM, the GDPR
                                    and CCPA.</b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>


                        <!--Agency Sub-accounts-->
                        <dd>
                            <p class="title">
                                Agency Sub-accounts
                                <b class="f14">Create separate sub-accounts for different clients <br>
                                    or brands and allocate prospect credits.</b>
                            </p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p class="check"><span></span></p>
                        </dd>


                        <!--Knowledge Base (KB) -->
                        <dd>
                            <p class="title">
                                Knowledge Base (KB)
                                <b class="f14">Browser dozens of help articles, video tutorials <br>
                                    and best practice guides.</b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>


                        <!--Customer Support-->
                        <dd>
                            <p class="title">
                                Customer Support
                            </p>
                            <p class="title text_center">Helpdesk</p>
                            <p class="title text_center">Helpdesk +
                                Email Support</p>
                            <p class="title text_center">Helpdesk +
                                Email Support</p>
                            <p class="title text_center">Dedicated CSM
                                + Onboarding</p>
                        </dd>
                    </dl>

                    <button class="seeAllButton">See All Features</button>
                </div>
                <!--Have questions-->
                <section class="pt100pb50">

                    <h1 class="mb35 heading-3">
                        FAQ
                    </h1>

                    <ul class="faq w100p">
                        <li>
                            <span class="f16b">Do I need a paid Leadfwd plan to add an Email Finder plan?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Nope! You can add a paid Email Finder plan to any paid plan or to a starter plan.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">If I add a Basic or Growth Email Finder plan to my paid Leadfwd plan,
                                does this add to my existing Email Finder credits?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Yup! The credits delivered from your Basic or Growth Email Finder plan will be in
                                    addition to the credits provided by your Solopreneur or Pro platform plan.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">What is a risky email address? Does it cost a credit?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>We deem any email address that has a domain configured to accept-all (or
                                    catch-all) and that has not been observed in recent history as being successfully
                                    delivered to as potentially risky. We just can’t be sure it will be deliverable, but
                                    we give you the option to attempt it if it fits into your program parameters. Risky
                                    email addresses will not cost an email credit either.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b"> Which prospecting tools can I use email finder credits?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Email finder credits are universal for all of our prospecting and list building
                                    tools. Email finder credits can be used with our Chrome Extension (Sidebar) which
                                    gives you access to our LinkedIn and Sales Navigator Prospecting tool and our direct
                                    Email Finder search tool. They can also be used with our Prospect Search tool to
                                    build lead lists from scratch (United States accounts only).
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Do unused email finder credits roll-over?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>No, they do not as this time with our current plans. Your monthly quota will be
                                    refreshed automatically on your monthly renewal date.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Can I use Leadfwd to find an email address using someone’s name?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Yup! You just need to know their first and last name along with their company.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">If I use all of my email credits before the month is up, can I add more?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Yup! We’ll bill you for actual usage on a per email rate / per credit rate based
                                    on your plan. You can see that rate by scrolling above and reviewing the ‘per
                                    additional’ cost in each plan column.
                                </span>
                            </div>
                        </li>
                    </ul>

                </section>
                <!--END Have questions-->
            </div>

        </div>
        <!--END Pricing table-->
    </section>
    <section class="tab-box" id="tab-3">
        <!--Pricing table-->
        <div class="modal-container-v2 email_finder DYI_wrap" id="price_compare">
            <div class="ht5-title-2">For busy solopreneurs and founders that have a million other things to do.</div>
            <p class="DYI_title text_center">Let Leadfwd (humans + platform) take care of discovery, prospecting and
                outreach. Leads arrive right to your inbox. </p>
            <div class="modal-v2">
                <div class="position_relative">
                    <dl class="modal-table tableOverflow">

                        <!--Top-->
                        <div id="stickThis">

                            <dd class="modal-top-v2">
                                <p></p>
                                <p class="overlay pro-monthly">
                                    <img src="/images/price-bg2.png" width="225" alt="">
                                    <span class="t5">FULLY MANAGED</span>
                                    <span class="t1 f32">Autopilot</span>
                                    <span class="t2">$1495</span>
                                    <span class="t3">billed monthly. <br>
                                        3 month minimum.</span>
                                </p>
                                <p>
                                    <span class="t1 ">Custom</span>
                                    <span class="t4">Chat<br>with us</span>
                                    <!--<span class="t2">$299</span>
           
                            </p>
                        </dd>
                        <!--END Top-->

                        </div>
                        <!--END Top-->


                        <!--Leadfwd Growth Platform-->
                        <dd>
                            <p class="title ">
                                Leadfwd Growth Platform
                                <b class="f14">
                                    Included with Autopilot
                                </b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>

                        <!--Credits Rollover-->
                        <dd>
                            <p class="title">
                                Email Mailbox Setup and Management
                                <b class="f14">
                                    Cold Email Domains, Mailboxes and Ramp up
                                </b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>
                        <!--Ideal Customer Persona (ICP) Discovery-->
                        <dd>
                            <p class="title subrow v2">
                                <span>
                                    Ideal Customer Persona (ICP) Discovery
                                </span>
                                <b class="f14">We’ll help define your ICP based on existing customers</b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>

                        <!--Prospect List Building-->
                        <dd>
                            <p class="title subrow v2">
                                <span>
                                    Prospect List Building
                                </span>
                                <b class="f14">Assembled by human sales pro’s and verified using AI
                                </b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>


                        <!--Targeted Prospects-->
                        <dd>
                            <p class="title subrow">
                                <span> Targeted Prospects
                                </span>
                                <b class="f14">
                                    Personalized outreach and automated follow ups
                                </b>
                            </p>
                            <p>
                                <span class="text_center">3,000 - 8,000</span>
                                <b class="fw_500">reached per month</b>
                            </p>
                            <p>
                                <span class="text_center">25,000+</span>
                                <b class="fw_500">reached per month</b>
                            </p>
                        </dd>


                        <!--Qualified Leads (est. range)-->
                        <dd>
                            <p class="title subrow">
                                <span>Qualified Leads (est. range)
                                </span>
                                <b class="f14">Meetings, demo requests or trial signups</b>
                            </p>
                            <p>
                                <span class="text_center">3 - 18</span>
                                <b class="fw_500">Estimated range. <a href="">Learn more</a></b>
                            </p>
                            <p>
                                <span class="text_center">25+</span>
                                <b class="fw_500">Estimated range. <a href="">Learn more</a></b>
                            </p>
                        </dd>

                        <!-- Leads Forwarded-->
                        <dd>
                            <p class="title">
                                Leads Forwarded
                                <b class="f14">Qualified leads sent directly to your inbox</b>
                            </p>
                            <p class="check"><span></span></p>
                            <p>
                                <span class="text_center">CRM, Zapier or Webhook</span>
                                <b class="fw_500">lead sync</a></b>
                            </p>
                        </dd>

                        <!--Visitor Intent Data-->
                        <dd>
                            <p class="title">
                                Visitor Intent Data
                                <b class="f14">Reveal and reach anonymous companies visiting your site</b>
                            </p>
                            <p></p>
                            <p>
                                <span class="text_center">1</span>
                                <b class="fw_500">website / domain</a></b>
                            </p>

                        </dd>


                        <!--LinkedIn Outreach-->
                        <dd>
                            <p class="title">
                                LinkedIn Outreach
                                <b class="f14">Identify key decision makers, connect and engage</b>
                            </p>
                            <p></p>
                            <p>
                                <span class="text_center">Multiple</span>
                                <b class="fw_500">LinkedIn profiles</a></b>
                            </p>
                        </dd>


                        <!--Trust and Compliance-->
                        <dd>
                            <p class="title">
                                Third-Party Intent Data
                                <b>We’ll convert intent data into verified outreach lists</b>
                            </p>
                            <p></p>
                            <p class="check"><span></span></p>
                        </dd>


                        <!--Daily / Weekly / Monthly Reporting-->
                        <dd>
                            <p class="title">
                                Daily / Weekly / Monthly Reporting
                                <b>Monitor and measure progress</b>
                            </p>
                            <p class="check"><span></span></p>
                            <p class="check"><span></span></p>
                        </dd>
                    </dl>
                    <button class="seeAllButton">See All Features</button>
                </div>
                <!--Have questions-->
                <section class="pt100pb50" id="faqsSec">

                    <h1 class="mb35 heading-3">
                        FAQ
                    </h1>

                    <ul class="faq w100p">

                        <li>
                            <span class="f16b">Who is this service not suited for?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Our Growth Services are not suitable for any B2C / Ecommerce orgs and certain B2B
                                    orgs that don’t have a firm handle on their ideal customer persona. Autopilot can be
                                    a valuable option to test different market segments for fit, but expectations should
                                    be reserved while you attempt to find or refine market-fit. It takes time.
                                    <br>
                                    <br>
                                    <b>We also don’t spam or ‘spray and pray’. </b>
                                    <br>
                                    <br>
                                    If you’re looking for a vendor to commit to sending thousands of emails on your
                                    behalf, then we are not a good fit. If your measure of the value of our service is
                                    in some way based on email volume, then you’re probably not a good fit. The optimal
                                    daily email limit that we employ will be based entirely on how well we are
                                    delivering to the inboxes of your customer persona. Inbox placement and
                                    deliverability come first.
                                    <br>
                                    <br>
                                    <b>You’re in a cash crunch now and need sales.</b>
                                    <br>
                                    <br>
                                    You need revenue yesterday, today, next week, etc. Or, in other words, now. While we
                                    feel that and understand the stress, we can’t deliver a solution to meet those
                                    expectations. We find that engagements don’t start or progress well when everything
                                    quickly turns to short-term thinking. The engagement will degrade as expectations
                                    simply cannot be managed or met. Even once we stand up this program, warm up
                                    mailboxes, optimize email copy and then start getting replies… 99% of those
                                    “interested” replies will only be the start of a conversation. You still need to run
                                    the ball down the field from there and close the sale. At the end of the day this is
                                    still a sales cycle and our service is at the top of the funnel.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">How exactly does Autopilot work?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Our team becomes an extension of your operation for the sole purpose of executing
                                    a full outbound sales program. The bulk of your involvement will be during the
                                    pre-launch phase while we get up to speed on your product, org and value
                                    proposition. After the launch we’ll collaborate with you to optimize your results,
                                    but for the most part you’ll define a primary contact that we’ll introduce
                                    interested prospects to after they reply to your outreach.</span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Shouldn’t I just hire a full-desk sales rep or BDR?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>We routinely work with inside sales teams to help generate prospects that
                                    ultimately get forwarded to full-desk sales reps and BDRs for further qualification
                                    and opportunity building. It doesn’t necessarily have to be one or the other. But if
                                    it is, you’ll quickly find that in the current market it can be very expensive to
                                    hire and onboard an inside sales rep or sales team. All without any guarantees,
                                    other than payroll.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">What can I expect for an ROI?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Too many variables to say. We’re asked this quite a bit but a better question that
                                    aligns with our services would be “how many meetings can I expect?”. Some products
                                    and services fall flat and generate minimal interest with only one viable meeting
                                    per month, while others can generate 3-4 meetings per week. Reach out to us for a
                                    more detailed discussion.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">What is the expected CaC associated with Autopilot?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>CaC will vary greatly among every product and service. We recommend a minimum LTV
                                    or ACV of $2,500.00 to make Autopilot a viable option. Comparable services to
                                    Autopilot that work on a pay-per-lead model, typically charge $350 - $650 per
                                    identified lead or meeting. Our fixed rate offers the potential to acquire leads at
                                    a much lower cost per lead, while offering predictable costs.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Does cold prospecting actually work?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>When done properly, absolutely. You might be browsing Leadfwd right now due to an
                                    email from our sales team :)</span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">How does setup and onboarding work?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Simple. We have a step-by-step data collection process that we utilize to get a
                                    handle on the basics of your org and offering. That is then combined with our own
                                    research that we’ll utilize to create the first round of outreach copy/content. At
                                    the same time our team will begin building a prospect list of potential leads to
                                    reach.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">What are the technical requirements?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Our team handles all of the IT related to the outbound program, including
                                    acquiring cold email domains and properly configuring them to send email for your
                                    program. This is all included in the package.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Can I approve messaging before it’s used in outreach?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Absolutely and we encourage you to review and offer any changes you think are
                                    necessary to better position your offering.
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Is this service international or country specific?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>We’re currently focusing on the U.S. but we’re open to exploring other markets.
                                    Some are simply off limits due to privacy and compliance issues that would make
                                    outbound efforts too difficult. Reach out and we can discuss over email or chat.
                                </span>
                            </div>
                        </li>

                        <li>
                            <span class="f16b">Who is this service best suited for?</span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>Our Done-For-You Growth Services can be a powerful add-on for B2B startups,
                                    founder-led sales operations and can successfully augment existing sales teams that
                                    just don’t have time to build top of the funnel lead flow. We align best with orgs
                                    or founders that know their ideal customer and have already sold their products or
                                    services to customers. In other words, a playbook exists and we’re helping to scale
                                    reach and awareness. From a revenue perspective we recommend an annual contract
                                    value (ACV) or lifetime value (LTV) of at least $5,000.00 for our DFY Growth
                                    Services to make economical sense. Our program is designed to deliver interested
                                    prospects and spark conversations. We are not delivering sales-ready leads, although
                                    from time to time we may catch someone that is currently in-market. But those
                                    prospects and discoveries using cold outreach are typically outliers. </span>
                            </div>
                        </li>
                        <li>
                            <span class="f16b">Do you recommend this service for orgs testing new markets? </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>This depends on you and your ability to set realistic expectations. If you don’t
                                    yet have experience or a track record of selling into a specific market, you can
                                    expect a much longer time-to-value or time-to-reply. Without a track record and
                                    identified market-fit for a customer persona, we will be essentially starting from
                                    scratch and doing a lot of experimentation. Things to consider are the buying
                                    committee (titles and roles to target), messaging and the specific value proposition
                                    (some orgs have a few to choose from) that resonate. When you come to the table
                                    knowing who your customers are and how to sell to them, we’re basically extending
                                    the reach of your existing playbook. That’s much faster. If you’re coming to the
                                    table with just a product or service and no track record, that’s OK, but expect a
                                    long ramp up period and experimentation before there are any results.

                                </span>
                            </div>
                        </li>

                        <li>
                            <span class="f16b">How many contacts will you reach and how emails will you send each month?
                            </span>
                            <a class="toggle open" href="javascript:void(0)">+</a>
                            <a class="toggle close" href="javascript:void(0)">-</a>
                            <div class="faq-answers">
                                <span>This is a variable and it depends. With Autopilot we include 6 domains and 6
                                    mailboxes. At the optimal daily delivery rate (30 - 55 emails / mailbox) you can
                                    expect to deliver 180 - 330 emails safely per day. However, it’s not that simple and
                                    those figures are just estimates.
                                    <br>
                                    <br>
                                    The optimal daily email output per mailbox will greatly depend on the types of
                                    companies you’re reaching in your persona. Banking, Finance, Healthcare, Fortune
                                    500, Large nationwide or global companies generally have much more aggressive email
                                    filtering and typically require a slower daily email output. Larger buying
                                    committees that include multiple contacts from the same company, using the same
                                    email domain must also be sent to at a slower pace. As we can’t deliver to the same
                                    domain with any velocity that could appear automated. Emails that get delivered to
                                    the spam/bulk/junk folder have a significantly lower chance of ever being seen, let
                                    alone replied to. Our primary focus is inbox delivery, first and foremost.
                                </span>
                            </div>
                        </li>

                    </ul>

                </section>
                <!--END Have questions-->

            </div>

        </div>
        <!--END Pricing table-->
    </section>
    </div>


    <!--Footer-->
    <?php include 'includes/footer.php'; ?>



    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd_v2.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/navigation.js"></script>
    <script>
    $(document).ready(function() {
        $('.seeAllButton').click(function() {
            var index = $(this).index('.seeAllButton');
            $('.tableOverflow').eq(index).toggleClass('showAll');
            $(this).text(function(i, text) {
                return text === 'See All Features' ? 'Show Less' : 'See All Features';
            });
        });
    });
    </script>



    <script> </script>
    <!--chrome bug-->


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    // pricing_nav tabs start 

    $('.pricing_nav li a').on('click', function() {
        var target = $(this).attr('data-rel');
        $('.pricing_nav li a').removeClass('active');
        $(this).addClass('active');
        $("#" + target).fadeIn('slow').siblings(".tab-box").hide();
        return false;
    });
    // pricing_nav tabs end
    </script>
    <script>
    $('.pricingMY span').on('click', function() {
        var targetClass = $(this).attr('data-target-class');
        $('.pricingMY span').removeClass('active');
        $(this).addClass('active');
        $('.' + targetClass).fadeIn('slow').siblings(".tab-box").hide();
        return false;
    });
    </script>
</body>

</html>