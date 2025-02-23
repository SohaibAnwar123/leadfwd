<?php
$active_top_bar = 'prospect';
$site_url_path = '/';
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>B2B Sales Prospecting + Sales Outreach and Automation = Unstoppable Growth Platform | Leadfwd</title>
    <meta name="description"
        content="Leadfwd combines B2B Prospecting, Sales Outreach and Account-Based Marketing together with the power of Artificial Intelligence and Machine Learning. All in one unstoppable growth platform." />
    <?php include 'includes/analytics_head.php';?>
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
    <link
        href="https://downloads.intercomcdn.com/i/o/223532/380d7e9f040321429b91a359/2c4f86a043ac0a9cdf792273f8850b69.png"
        rel="shortcut icon" type="image/png">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
</head>

<body class="leadfwd-v2">
    <?php include 'includes/analytics_body.php';?>
    <div class="prospectPage">
      <!--Navigation-->
      <div class="v2-nav-wrapper no-bg light transpatent-white-btn full-width">
                    <!--Top Bar-->
                    <?php include 'includes/bar_v2.php';?>
                </div>
   

        <!--HEADER-->
        <header>
            <span class="darkBlue-bg"></span>

            <div class="header-1280">

                <div class="header-grid1 white-txt d_custom">

                    <div class="hg1-txt">
                        <h1 class="white">Built-In
                            B2B Data.</h1>
                        <b class="green2-txt">Platform + Data.</b> Prospect from <b class="green2-txt">200M</b> B2B
                        contacts
                        from <b class="green2-txt"> 50M </b> companies across
                        the globe using your key buyer persona.
                        <div class="hg1-buttons white">
                            <a href="#B2BAcoounts">Search</a>
                            <a class="mr20" href="#FindEmails">Chrome</a>
                            <a href="#privateBeta">API</a>
                        </div>
                    </div>

                    <div class="hg1-img">
                        <img src="/images/header1-prospect.png" height="561" alt="">
                    </div>

                </div>

            </div>

        </header>
        <!--END Header-->


        <!--100M+ B2B Accounts-->
        <article>
            <section class="v2-grid4 pb100">
                <h4 class="v2 darkBlue" id="B2BAcoounts">
                    <img class="mb15" src="/images/title-graph.png" width="48" alt=""><br>
                    200M+ B2B Accounts and Contacts.<br>
                    Find, Reach and Convert. <span class="highlight">Platform + Data.</span>
                </h4>

                <div class="description1">
                    Leadfwd has partnered with multiple data providers to deliver millions of B2B accounts and verified
                    contacts. Build highly-targeted lead lists based on dozens of filters including
                    <span>location</span>,<span>industry</span>,<span>revenue</span>,<span>size</span>,<span>title</span>,<span>department</span>
                    and much more.
                </div>

                <div class="video-2">
                    <video id="vid1" autoplay="" loop="" muted="" playsinline="" __idm_id__="43630593">
                        <source src="/media/leadfwd_prospect_main.mp4" type="video/mp4"></video>
                </div>
                <!-- <img src="/images/placeholder-2.jpg" width="1091" alt=""> -->
            </section>
        </article>


        <!--On blue-->
        <div class="on-grad-texture dark2">
            <span class="f-28">Get started with 50 free leads that you can <span class="green2-txt">engage
                    now</span></span>
            <button class="green-btn mtb30" onclick="location.href='https://app.leadfwd.com/signup/'">Let’s
                grow</button>
            <div>Immediate access and no credit card required.</div>
        </div>


        <!--Prospect from professional social networks-->
        <article class="blue-2 gradient_1">
            <section class="v2-grid1">


                <!--Left-->
                <div class="v2-txt v3">

                    <div class="v2-side-bar-text">
                        <h4 class="v2" id="FindEmails">Find Emails,
                            Anywhere.</h4>
                        <p>
                            Leverage two of the world's largest professional social networks with 1B+ members in more
                            than
                            200 countries and territories worldwide.
                        </p>
                        <p>
                            Leadfwd turns your LinkedIn Search or Sales
                            Navigator Lead List into a verified email list
                            that’s ready to be engaged.

                        </p>
                        <p class="green2-txt">
                            Built-in realtime email verification for accuracy
                            and risky or unverified emails are always free.
                        </p>
                    </div>

                </div>

                <!--Right-->
                <div class="v2-side-bar-graph findEmail_img">
                    <a href="/platform/linkedin-prospector" target="_blank"><img src="/images/find_email.png"
                            class="find_email" alt=""></a>
                </div>


            </section>
        </article>
        <!--END Prospect from professional social networks-->

        <!--Data + API Find, Sync and Reach.-->
        <article class="blue-2">
            <section class="v2-grid1">


                <!--Left-->
                <div class="v2-txt v3">

                    <div class="v2-side-bar-text">
                        <span class="upper-title" id="privateBeta">PRIVATE BETA</span>
                        <h4 class="v2"><b class="green2-txt">Prospect API:</b> Build your own
                            integration.</h4>
                        <b class="green2-txt f-18 mb5">Email Finder API</b>
                        <p>
                            Find email addresses for contacts by name and company.
                        </p>
                        <b class="green2-txt f-18 mb5">Contact API</b>
                        <p>
                            Find key contacts by role or title at specific companies.
                        </p>
                    </div>

                </div>

                <!--Right-->
                <div class="v2-side-bar-graph my_auto">
                    <div class="code">
                        GET <span class="orange"> ‘john calcagno’,’piper.com’</span> (

                        <span>'email' &#61;&gt;</span>'j******@piper.com',
                        <span>'email_status' &#61;&gt;</span>'valid',
                        <span>'linkedin' &#61;&gt;</span> 'john-c-1193853',
                        )

                        GET <span class="orange"> ‘c-suite’, ‘ceo’,’piper.com’</span> (
                        <span>'name' &#61;&gt;</span> 'John Calcagno',
                        <span>'title' &#61;&gt;</span> 'CEO',
                        <span>'email' &#61;&gt;</span> 'j******@piper.com',
                        <span>'email_status' &#61;&gt;</span> 'valid',
                        )

                    </div>
                </div>


            </section>
        </article>
        <!--END Data + API Find, Sync and Reach.-->

        <!--What’s included-->
        <div class="wrapper-1010">
            <!--What’s included-->
            <h3 class="plr-w1010 black">
                What’s included...
                <span>Over 200M b2b contacts , dozens of data insights, LinkedIn prospecting and realtime email
                    verification.</span>
            </h3>

            <ul class="list-3">
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-12.png" alt="Unlimited Prospect lists icon">
                    <span class="l3-title">Chrome Extension</span>
                    Find, Reach and Convert Prospects anywhere, right from your Chrome browser.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-13.png" alt="i360-degree intelligence con">
                    <span class="l3-title">Data Insights</span>
                    Biography, social handles, email and phone contact , geo location, employment history and more.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-14.png" alt="Prospect by Account icon">
                    <span class="l3-title">Account Filters</span>
                    Filter ideal accounts based on dozens of attributes, like geo, size, revenue, industry and more.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-15.png" alt="Role Based Filters icon">
                    <span class="l3-title">Role Filters</span>
                    Find and reach the right decision makers by filtering for specific roles and titles.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-16.png" alt="Technology Filters icon">
                    <span class="l3-title">AI Data Cleanup</span>
                    Our AI removes prefixes, suffixes,
                    emojis, org type (ltd, inc) and more,
                    so you don’t have to.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-17.png" alt="Scheduled delivery icon">
                    <!--<span class="badge green">COMING SOON</span>-->
                    <span class="l3-title">Cold Email, Done Right</span>
                    Find, select, sync and start engaging prospects with only a few clicks.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-18.png" alt="Email Verification icon">
                    <span class="l3-title">Email Verification</span>
                    Leadfwd verifies prospect emails in real-time, before a contact is exported.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-19.png" alt="Touch-free CRM icon">
                    <span class="l3-title">Seamless CRM Sync</span>
                    Automatically push fresh leads to your CRM, map fields and assign sales reps.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-20.png" alt="Export to CSV icon">
                    <span class="l3-title">CSV export</span>
                    Export your qualified prospects into a clean CSV, that can then be imported into any CRM or MAP.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-21.png" alt="Block list icon">
                    <span class="l3-title">Block list</span>
                    Never worry about acquiring dupes or existing customer accounts.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-22.png" alt="Predictive Persona icon">
                    <span class="l3-title">Powered by AI</span>
                    Our AI engine aggregates and verifies intelligence from multiple sources.
                </li>
                <li>
                    <img src="<?php echo $site_url_path; ?>images/ic-23.png" alt="Unlimited users icon">
                    <span class="l3-title">Multiple users</span>
                    Invite the whole team and assign credit limits or custom access rights.
                </li>
            </ul>

        </div>
        <!--END What’s included-->


        <!--Push sales-->
 <!-- Brands/Connect Section START -->
 <article class="v2-connect">
            <section>
                <div class="v2-connect-top">
                    <div class="h1-wrapper">
                        <h1 class="green2-txt lh1">
                            Simple, no-code connectors.
                        </h1>
                        <h1 class="white-txt lh1">
                            Click, create and automate.
                        </h1>
                    </div>
                    <p class="m-0 white-txt top-paragraph w1010">
                        Native integrations and our <a href="" class="clr_zinc textDec_none"> no-code </a> connectors
                        make
                        it simple to push prospects to the top of your
                        sales funnel, wherever
                        your pipeline may live. Easily create filtering rules to segment contacts for your sales team,
                        such as only pushing leads when
                        they are showing buying signals.
                    </p>
                </div>
                <!--Grid connectors-->
                <div class="grid-connectors" data-aos="fade-up">
                    <div>
                        <a href="/connectors/salesforce"
                            class="flex_align h100 w100 position_relative" target="_blank"><img
                                src="/images/v2-connect-logo-1.png" width="61" alt="">
                            <span class="connectorText">NATIVE</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://help.leadfwd.com/hc/en-us/sections/6366891810579-Zapier-Connector"
                            class="flex_align h100 w100 position_relative" target="_blank"><img
                                src="/images/v2-connect-logo-2.png" width="42" alt="">
                            <span class="connectorText">NATIVE</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://help.leadfwd.com/hc/en-us/sections/6366891810579-Zapier-Connector"
                            class="flex_align h100 w100" target="_blank"><img src="/images/v2-connect-logo-3.png"
                                width="48" alt=""></a>
                    </div>
                    <div>
                        <a href="https://help.leadfwd.com/hc/en-us/sections/6366891810579-Zapier-Connector"
                            class="flex_align h100 w100" target="_blank"><img src="/images/v2-connect-logo-4.png"
                                width="45" alt=""></a>
                    </div>
                    <div>
                        <a href="https://help.leadfwd.com/hc/en-us/sections/6366891810579-Zapier-Connector"
                            class="flex_align h100 w100" target="_blank"><img src="/images/v2-connect-logo-5.png"
                                width="51" alt=""></a>
                    </div>
                    <div>
                        <a href="/connectors/hubspot"
                            class="flex_align h100 w100 position_relative" target="_blank"><img
                                src="/images/v2-connect-logo-6.png" width="49" alt="">
                            <span class="connectorText">PLUGIN</span>
                        </a>
                    </div>
                    <div>
                        <a href="/connectors/sugarcrm" class="flex_align h100 w100 position_relative"
                            target="_blank"><img src="/images/v2-connect-logo-7.png" width="41" alt="">
                            <span class="connectorText">NATIVE</span>
                        </a>
                    </div>
                    <div>
                        <a href="/connectors/pipedrive"
                            class="flex_align h100 w100 position_relative" target="_blank"><img
                                src="/images/v2-connect-logo-8.png" width="31" alt="">
                            <span class="connectorText">PLUGIN</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://help.leadfwd.com/hc/en-us/sections/6366891810579-Zapier-Connector"
                            class="flex_align h100 w100" target="_blank"> <img src="/images/v2-connect-logo-9.png"
                                width="33" alt=""></a>
                    </div>
                    <div>
                        <a href="https://help.leadfwd.com/hc/en-us/sections/6366891810579-Zapier-Connector"
                            class="flex_align h100 w100" target="_blank"><img src="/images/v2-connect-logo-10.png"
                                width="52" alt=""></a>
                    </div>
                    <div>
                        <a href="https://help.leadfwd.com/hc/en-us/sections/6366891810579-Zapier-Connector"
                            class="flex_align h100 w100" target="_blank"> <img src="/images/v2-connect-logo-11.png"
                                width="45" alt=""></a>
                    </div>
                </div>
                <!--END Grid connectors-->

                <div class="grid-connectors-txt grid-connectors-txtN" data-aos="slide-left">
                    <div class="logosWrap">
                        <a href="https://help.leadfwd.com/hc/en-us/sections/6366891810579-Zapier-Connector"
                            target="_blank"><img src="/images/zapierSquare.png" alt=""></a>
                        <a href="https://help.leadfwd.com/hc/en-us/sections/16778727736339-Pabbly-Connector"
                            target="_blank"><img src="/images/pieCircle.png" alt=""></a>
                        <a href="https://help.leadfwd.com/hc/en-us/sections/16252144341011-Make-Formerly-Integromat-"
                            target="_blank"><img src="/images/mCircle.png" alt=""></a>
                    </div>
                    <p>
                        Sync with 5,000+ business apps using our <b class="green3-txt">no-code</b> connectors for 
                        <a class="fw_700 connectorsOrnage"
                            href="https://help.leadfwd.com/hc/en-us/sections/6366891810579-Zapier-Connector"
                            target="_blank">
                            Zapier </a>, <a class="fw_700 connectorsGreen"
                            href="https://help.leadfwd.com/hc/en-us/sections/16778727736339-Pabbly-Connector"
                            target="_blank"> Pabbly </a> and <a class="fw_700 connectorsPurple"
                            href="https://help.leadfwd.com/hc/en-us/sections/16252144341011-Make-Formerly-Integromat-"
                            target="_blank"> Make <span class="fw_500"> (Integromat)</span></a>
                    </p>
                </div>

            </section>
        </article>
        <!-- Brands/Connect Section END -->
    </div>

    <!--Footer-->
    <?php include 'includes/footer.php';?>




    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd_v2.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/navigation.js"></script>



    <script> </script>
    <!--chrome bug-->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
</body>

</html>