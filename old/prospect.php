<?php
$active_top_bar = 'prospect';
$site_url_path = '/';

include_once 'includes/top_data.php';

//arrays
$pp = 0;
foreach ($stripe_products as $master_product_key => $master_product)
{
	if ($master_product['type']=='prospect')
		$pp++;
}
$ttl = $pp;
$pp = 0;
$prospect_string = '';
$prospect_credits = array();
foreach ($stripe_products as $master_product_key => $master_product)
{
	if ($master_product['type']=='prospect')
	{
		$pp++;
		$prospect_credits[$master_product['credits']] = $master_product['cost'];
		$prospect_string .= '
			<li class="numbers" style="'.(($pp==1) ? 'font-weight: 600; ' : '').(($pp==$ttl) ? 'right: 0; transform: translateX(50%);' : 'left: '.(($pp==1) ? '0' : intval(($pp-1)*100/($ttl-1)).'%')).'" data-id="'.$master_product['cost'].'">'.$master_product['credits'].'</li>';
	}
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>B2B Sales Prospecting + Sales Outreach and Automation = Unstoppable Growth Platform | Leadfwd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
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
    <link href="<?php echo $site_url_path; ?>css/plan_builder.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/pxu2bwp.css" />
    <link rel="stylesheet" href="https://use.typekit.net/ycj0dcm.css">

    <link href="<?php echo $site_url_path; ?>css/jquery-ui.css" rel="stylesheet" type="text/css">

    <link
        href="https://downloads.intercomcdn.com/i/o/223532/380d7e9f040321429b91a359/2c4f86a043ac0a9cdf792273f8850b69.png"
        rel="shortcut icon" type="image/png">

    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd.js"></script>
    <script>
        var prospectString = '<?php echo json_encode($prospect_credits); ?>';
        var stripeProducts = '<?php echo json_encode($stripe_products); ?>';
    </script>

</head>

<body>
    <?php include 'includes/analytics_body.php';?>

    <!--Top Bar-->
    <div class="v2-nav-container">
        <ul class="v2-nav">
            <li><a href="#"><img src="/images/leadfwd-v2-logo-grey.png" width="154" alt=""></a></li>
            <li>
                <a href="#">Find New B2B Leads</a>
                <a href="#">Sales Outreach + Acceleration</a>
                <a href="#">AI Sales Assistants</a>
                <a href="#">Pricing</a>
            </li>
            <li><a href="#"><b>Login</b></a></li>
            <li><a href="#" class="v2-signup"><b>Signup now</b></a></li>
        </ul>
    </div>


    <!--HEADER-->
    <header class="header-office">

        <div class="header-office-text">Grow sales faster by instantly growing your pipeline with qualified prospects.
        </div>

        <ul class="header-office-box pos1">
            <li><img src="<?php echo $site_url_path; ?>images/header-office-box-bg.png" alt=""></li>
            <li>Hernan Asorey</li>
            <li>Chief Data Officer</li>
            <li>h*******@salesforce.com <img src="<?php echo $site_url_path; ?>images/header-office-box-check.png"
                    width="10" alt=""></li>
        </ul>

        <ul class="header-office-box pos2">
            <li><img src="<?php echo $site_url_path; ?>images/header-office-box-bg.png" alt=""></li>
            <li>Mallory Stein</li>
            <li>Senior Sales Recruiter</li>
            <li>m*******@salesforce.com <img src="<?php echo $site_url_path; ?>images/header-office-box-check.png"
                    width="10" alt=""></li>
        </ul>

        <ul class="header-office-box pos3">
            <li><img src="<?php echo $site_url_path; ?>images/header-office-box-bg.png" alt=""></li>
            <li>Marc Benioff</li>
            <li>CEO</li>
            <li>m*******@salesforce.com <img src="<?php echo $site_url_path; ?>images/header-office-box-check.png"
                    width="10" alt=""></li>
        </ul>

        <ul class="header-office-box pos4">
            <li><img src="<?php echo $site_url_path; ?>images/header-office-box-bg.png" alt=""></li>
            <li>Alexa Vignone</li>
            <li>SVP Enterprise Sales</li>
            <li>a*******@salesforce.com <img src="<?php echo $site_url_path; ?>images/header-office-box-check.png"
                    width="10" alt=""></li>
        </ul>

        <ul class="header-office-box pos5">
            <li><img src="<?php echo $site_url_path; ?>images/header-office-box-bg.png" alt=""></li>
            <li>Stephanie Buscemi </li>
            <li>Chief Marketing Officer</li>
            <li>s*******@salesforce.com <img src="<?php echo $site_url_path; ?>images/header-office-box-check.png"
                    width="10" alt=""></li>
        </ul>

    </header>


    <!--CONTENT-->
    <div class="wrapper pt60">

        <!--Presentation for big screens-->
        <h1 class="h1">
            Grow your pipeline from 100+ million B2B contacts.
            <span>Find qualified accounts and key decision makers with complete intelligence profiles, instantly.</span>
        </h1>

        <!--Carousel-->
        <!--<div class="guided-carousel">
           
           <div class="guided-carousel-screen" id="gcs-2">
              <div class="guided-carousel-description">
                  <span>Catch buyers earlier in their journey</span>
                  Discover leverages the power of AI to capture visitor interest, identify the specific companies browsing your website, identify key decision-makers.
                  <a href="javascript:void(0)">Browse Qualified Accounts and Contacts</a>
              </div>
               <img src="<?php echo $site_url_path; ?>images/guided-carousel-screen-1.png" width="935" height="439" alt="">
           </div>
           <div class="guided-carousel-screen gcs-dn" id="gcs-3">
              <div class="guided-carousel-description">
                  <span>2Catch buyers earlier in their journey</span>
                  Discover leverages the power of AI to capture visitor interest, identify the specific companies browsing your website, identify key decision-makers.
                  <a href="javascript:void(0)">Browse Qualified Accounts and Contacts</a>
              </div>
               <img src="<?php echo $site_url_path; ?>images/guided-carousel-screen-2.png" width="935" height="439" alt="">
           </div>
           <div class="guided-carousel-screen gcs-dn" id="gcs-4">
              <div class="guided-carousel-description">
                  <span>3Catch buyers earlier in their journey</span>
                  Discover leverages the power of AI to capture visitor interest, identify the specific companies browsing your website, identify key decision-makers.
                  <a href="javascript:void(0)">Browse Qualified Accounts and Contacts</a>
              </div>
               <img src="<?php echo $site_url_path; ?>images/guided-carousel-screen-3.png" width="935" height="439" alt="">
           </div>
           <div class="guided-carousel-screen gcs-dn" id="gcs-5">
              <div class="guided-carousel-description">
                  <span>4Catch buyers earlier in their journey</span>
                  Discover leverages the power of AI to capture visitor interest, identify the specific companies browsing your website, identify key decision-makers.
                  <a href="javascript:void(0)">Browse Qualified Accounts and Contacts</a>
              </div>
               <img src="<?php echo $site_url_path; ?>images/guided-carousel-screen-1.png" width="935" height="439" alt="">
           </div>
           <div class="guided-carousel-screen gcs-dn" id="gcs-6">
              <div class="guided-carousel-description">
                  <span>5Catch buyers earlier in their journey</span>
                  Discover leverages the power of AI to capture visitor interest, identify the specific companies browsing your website, identify key decision-makers.
                  <a href="javascript:void(0)">Browse Qualified Accounts and Contacts</a>
              </div>
               <img src="<?php echo $site_url_path; ?>images/guided-carousel-screen-2.png" width="935" height="439" alt="">
           </div>
           
           <ul class="guided-carousel-timeline">
               <li class="gct-prev">
                   <a href="javascript:void(0)"></a>
               </li>
               <li class="active">
                   <a href="javascript:void(0)"><span></span></a>
                   <p>Build your Ideal<br>Customer Persona (ICP)</p>
               </li>
               <li>
                   <a href="javascript:void(0)"><span></span></a>
                   <p>Browse Qualified<br>Accounts and Contacts</p>
               </li>
               <li>
                   <a href="javascript:void(0)"><span></span></a>
                   <p>Save time with 360<br>Intelligence Profiles</p>
               </li>
               <li>
                   <a href="javascript:void(0)"><span></span></a>
                   <p>Select Key Accounts<br>&amp; Contacts with ease</p>
               </li>
               <li>
                   <a href="javascript:void(0)"><span></span></a>
                   <p>Export &amp;<br>Engage</p>
               </li>
               <li class="gct-next">
                   <a href="javascript:void(0)"></a>
               </li>
           </ul>
            
        </div>-->
        <!--END Carousel-->

        <!--Video presentation for BIG screens-->
        <div class="flex1 f1-prospect pb100">

            <ul class="l4-sub-nav noWidth grayBlue mb60 flex1__links">
                <li class="active">Search</li>
                <li>Email Finder</li>
                <li>Data enrichment</li>
                <li>Export</li>
                <li>Verification</li>
                <li class="link"><a href="<?php echo $site_url_path; ?>platform/engage" target="_blank">Engage</a></li>
            </ul>

            <div class="f1-img">
                <div class="video-2">
                    <video id="vid1" autoplay loop muted playsinline></video>
                </div>
                <div class="f1-img-description pt35 bottomLeft">
                    <a href="javascript:void(0);" class="auto-close f1-img-close">&#215;</a>
                    <p class="f-24 fw-200">Search</p>
                    <p>Target your search based on your ideal buyer using location, industry, revenue, employee count
                        and much more. Account intelligence is enriched and updated in real-time using AI and contact
                        emails are validated to ensure only the highest quality data is delivered.</p>
                </div>
            </div>

            <div class="f1-img">
                <div class="video-2">
                    <video id="vid2" autoplay loop muted playsinline></video>
                </div>
                <div class="f1-img-description pt35 bottomLeft">
                    <a href="javascript:void(0);" class="auto-close f1-img-close">&#215;</a>
                    <p class="f-24 fw-200">Email finder</p>
                    <p>Find verified email addresses for key decision makers that fit your ideal buyer persona using
                        just a company website address. Import a target account list (TAL) to prospect hundreds of
                        companies for intelligence and verified contacts, in only minutes.</p>
                </div>
            </div>

            <div class="f1-img">
                <div class="video-2">
                    <video id="vid3" autoplay loop muted playsinline></video>
                </div>
                <div class="f1-img-description pt35 bottomLeft">
                    <a href="javascript:void(0);" class="auto-close f1-img-close">&#215;</a>
                    <p class="f-24 fw-200">Intelligence</p>
                    <p>Customize your export to include or exclude specific data fields and intelligence, map data
                        fields automatically to your CRM or choose to import your leads to Leadfwd for instant sales
                        engagement.</p>
                </div>
            </div>

            <div class="f1-img">
                <div class="video-2">
                    <video id="vid4" autoplay loop muted playsinline></video>
                </div>
                <div class="f1-img-description pt35 bottomLeft">
                    <a href="javascript:void(0);" class="auto-close f1-img-close">&#215;</a>
                    <p class="f-24 fw-200">Export</p>
                    <p>Customize your export to include or exclude specific data fields and intelligence, map data
                        fields automatically to your CRM or choose to import your leads to Leadfwd for instant sales
                        engagement.</p>
                </div>
            </div>

            <div class="f1-img">
                <div class="video-2">
                    <video id="vid5" autoplay loop muted playsinline></video>
                </div>
                <div class="f1-img-description pt35 bottomLeft">
                    <a href="javascript:void(0);" class="auto-close f1-img-close">&#215;</a>
                    <p class="f-24 fw-200">Verification</p>
                    <p>You only pay for good data. Prospect validates all email addresses in real-time as part of our
                        export process. Email contacts that do not pass, are excluded from your export automatically and
                        you’re not charged for them.</p>
                </div>
            </div>

        </div>
        <!--END Video presentation for big screens-->


        <!--Video presentation for SMALL screens-->
        <ul class="faq f1-prospect f-16">
            <li>
                <span>Search</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <div class="video-3-description">
                        <p>Target your search based on your ideal buyer using location, industry, revenue, employee
                            count and much more. Account intelligence is enriched and updated in real-time using AI and
                            contact emails are validated to ensure only the highest quality data is delivered.</p>
                    </div>
                    <div class="video-3">
                        <video id="mvid1" autoplay loop muted playsinline></video>
                    </div>
                </div>
            </li>
            <li>
                <span>Email Finder</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <div class="video-3-description">
                        <p>Find verified email addresses for key decision makers that fit your ideal buyer persona using
                            just a company website address. Import a target account list (TAL) to prospect hundreds of
                            companies for intelligence and verified contacts, in only minutes.</p>
                    </div>
                    <div class="video-3">
                        <video id="mvid2" autoplay loop muted playsinline></video>
                    </div>
                </div>
            </li>
            <li>
                <span>Data enrichment</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <div class="video-3-description">
                        <p>Customize your export to include or exclude specific data fields and intelligence, map data
                            fields automatically to your CRM or choose to import your leads to Leadfwd for instant sales
                            engagement.</p>
                    </div>
                    <div class="video-3">
                        <video id="mvid3" autoplay loop muted playsinline></video>
                    </div>
                </div>
            </li>
            <li>
                <span>Export</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <div class="video-3-description">
                        <p>Customize your export to include or exclude specific data fields and intelligence, map data
                            fields automatically to your CRM or choose to import your leads to Leadfwd for instant sales
                            engagement.</p>
                    </div>
                    <div class="video-3">
                        <video id="mvid4" autoplay loop muted playsinline></video>
                    </div>
                </div>
            </li>
            <li>
                <span>Verification</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <div class="video-3-description">
                        <p>You only pay for good data. Prospect validates all email addresses in real-time as part of
                            our export process. Email contacts that do not pass, are excluded from your export
                            automatically and you’re not charged for them.</p>
                    </div>
                    <div class="video-3">
                        <video id="mvid5" autoplay loop muted playsinline></video>
                    </div>
                </div>
            </li>
        </ul>
        <!--END Video presentation for SMALL screens-->


        <!--On blue-->
        <div class="on-grad-texture">
            <!--<img src="<?php echo $site_url_path; ?>images/roi5.png" class="roi5" alt="">-->
            <span class="f36">only 60 seconds away from pitching to fresh prospects.</span>
            <button class="blue-btn mtb30" onclick="location.href='https://app.leadfwd.com/signup/'">Get
                started</button>
            <div>Immediate acces and <span class="normal-txt">no credit card required.</span></div>
        </div>

    </div>


    <div class="wrapper-1010">

        <!--Touch-free CRM-->
        <section class="col-21">

            <img src="<?php echo $site_url_path; ?>images/touch-free-crm-screen.png" width="441" height="354"
                alt="import prospecrs to crm to a marketing list or export prospects to CSV file">

            <div>
                <!--<span class="title-28-light">Touch free CRM for <a href="" class="typewrite" data-period="2000" data-type='[ "Salesforce", "SugarCRM", "SuiteCRM" ]'><span class="wrap"></span></a></span>-->

                <span class="title-28-light">Sync with your CRM and sales team</span>
                Keep your sales team freshly stocked with targeted leads and fully automate first-touch engagement, so
                SDR’s only focus on leads that are responding.
                <ul class="list-4">
                    <li>Native integrations for <a
                            href="<?php echo $site_url_path; ?>solutions/salesforce">Salesforce</a>, <a
                            href="<?php echo $site_url_path; ?>solutions/sugar-engage">Sugar Sell</a> and <a
                            href="<?php echo $site_url_path; ?>solutions/suitecrm">SuiteCRM</a>.</li>
                    <li>Automated Import, <a href="#">Lead Routing</a> and <a href="#">Automated Outreach</a></li>
                    <li>Automatically enroll leads in CRM Campaigns</li>
                    <li>Enrich <a href="#">CRM data fields</a> with hundreds of valuable insights</li>
                </ul>
            </div>

        </section>
        <!--END Touch-free CRM-->

        <!--Find verified emails in seconds.-->
        <section class="full-col2">

            <p>
                <span class="title-28-light">Find Emails for Specific People</span>
                <b>Turn a company domain into verified contacts.</b> With just a few clicks Prospect will deliver
                enriched insights for each account along with the key decision makers you're looking for, including
                their verified email address. Eliminate hours of research or 'best guess' tactics for your sales team.
                Instead, your sales team can focus on selling.
            </p>

            <div>
                <img src="<?php echo $site_url_path; ?>images/find-verified-emails-ps1.gif" width="346" height="192"
                    alt="vmware.com">
            </div>

            <div>
                <img src="<?php echo $site_url_path; ?>images/find-verified-emails-ps2.png" width="525" height="299"
                    alt="VMware Dell Technologies that provides cloud computing and platform visualization software and services">
            </div>

            <img class="find-verified-emails-arrow"
                src="<?php echo $site_url_path; ?>images/find-verified-emails-arrow.png"
                alt="arrow pointing from company domain to verified contacts">

        </section>
        <!--END Prospect by Account-->

    </div>
    <!--END CONTENT-->


    <!--Demand Generation-->
    <div class="on-gray3">
        <section class="wrapper-col-22 col-22">
            <img src="<?php echo $site_url_path; ?>images/demand-generation-ps1.png" width="662"
                alt="Qualified leads by combining ICP with automation">
            <p>
                <span class="badge green">COMING SOON</span>
                <span class="title-28-light">Demand Generation on Auto-Pilot</span>
                Prospect ensures your sales team never runs out of qualified leads by combining your ICP with the power
                of automation. All you need to do is choose a saved search profile, configure your routing preferences
                and set the delivery interval -- and Prospect will take care of the rest. Delivering unique and
                qualified accounts and key contacts to your sales team daily or weekly.<br><br>
                Integrates with <a href="<?php echo $site_url_path; ?>platform/engage">Engage</a>, <a
                    href="<?php echo $site_url_path; ?>platform/campaign">Campaign</a>, <a
                    href="<?php echo $site_url_path; ?>solutions/salesforce">Salesforce</a>, <a
                    href="<?php echo $site_url_path; ?>solutions/sugar-engage">Sugar Sell</a> and <a
                    href="<?php echo $site_url_path; ?>solutions/suitecrm">SuiteCRM</a>.
            </p>
        </section>
    </div>
    <!--END Demand Generation-->


    <div class="wrapper-1010">

        <!--Technology used-->
        <section class="col-23">
            <p>
                <span class="title-28-light">Filter by technology stack and spend</span>
                Identify qualified prospects by filtering accounts that use specific technologies, such as the CRM they
                deploy. Choose from more than 16,000 technologies and find the ideal prospect in seconds.
            </p>
            <img src="<?php echo $site_url_path; ?>images/technology-ps1.gif" width="422" height="425" alt="f
            Filter accounts that use specific technologies">
        </section>
        <!--END Technology used-->

    </div>


    <!--Unlimited Leads-->
    <div class="grey-badge-container">
        <div class="grey-badge">
            <p>
                Looking for Unlimited Leads? <span class="green">Ask us about Enterprise Plans</span>
            </p>
        </div>
    </div>
    <!--END Unlimited Leads-->



    <!--What’s included-->
    <div class="wrapper-1010">
        <!--What’s included-->
        <h3 class="plr-w1010">
            What’s included...
            <span>Everything you need to build and maintain an explosive sales pipeline.</span>
        </h3>

        <ul class="list-3">
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-12.png" alt="Unlimited Prospect lists icon">
                <span class="l3-title">Unlimited Prospect lists</span>
                Create fully exportable lists and segments for any number of personas and prospects.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-13.png" alt="i360-degree intelligence con">
                <span class="l3-title">360-degree intelligence</span>
                Bio, social handles, verified email, phone numbers, location, org history and more.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-14.png" alt="Prospect by Account icon">
                <span class="l3-title">Prospect by Account</span>
                Find qualified prospects based on dozens of firmographics, like geography, size, revenue and more.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-15.png" alt="Role Based Filters icon">
                <span class="l3-title">Role Based Filters</span>
                Connect with the right decision makers by filtering for specific roles and titles.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-16.png" alt="Technology Filters icon">
                <span class="l3-title">Technology Filters</span>
                Find accounts based on the tech stack they have deployed or their monthly tech spend.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-17.png" alt="Scheduled delivery icon">
                <span class="badge green">COMING SOON</span>
                <span class="l3-title">Auto-pilot lead delivery</span>
                Automatically import and route qualified prospects to your team daily or weekly.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-18.png" alt="Email Verification icon">
                <span class="l3-title">Email Verification</span>
                Our platform verifies every email address in real-time, before its imported into your account.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-19.png" alt="Touch-free CRM icon">
                <span class="l3-title">Touch-free CRM</span>
                Automatically push fresh leads to your CRM, map fields and assign sales agents.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-20.png" alt="Export to CSV icon">
                <span class="l3-title">Export to CSV</span>
                Export your qualified prospects into a clean CSV, that can then be imported into any CRM or MAP.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-21.png" alt="Block list icon">
                <span class="l3-title">Block list</span>
                Never worry about acquiring dupes or existing customer accounts.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-22.png" alt="Predictive Persona icon">
                <span class="l3-title">Predictive ICP</span>
                We’ll help you identify your ideal customer persona -- based on your actual customer data.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-23.png" alt="Unlimited users icon">
                <span class="l3-title">Unlimited users</span>
                Invite the whole team and assign credit limits or custom access rights.
            </li>
        </ul>

    </div>
    <!--END What’s included-->


    <!--Have questions-->
    <section class="on-gray">

        <h1 class="mb35">
            Have questions?
            <span>Leadfwd understands that "one size fits all" doesn’t apply to most sales and marketing
                operations</span>
        </h1>

        <ul class="faq">
            <li>
                <span>What are your data sources?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>LeadFWD licenses data from multiple third-party partners, aggregates and enriches data
                        in-house and relies on public sources.<br><br>

                        Our data sources, include:<br><br>

                        <div class="ml20">
                            1. Licensing partnerships with third parties<br>
                            2. Data Aggregation in-house<br>
                            3. Acquisition or licensing from private data sources<br>
                            4. Social Media and online news<br>
                            5. Public/Government records and filings<br>
                            6. Public directories<br>
                            7. Web based resources
                        </div>
                    </span>
                </div>
            </li>
            <li>
                <span>How frequently is your data verified and updated?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>Real-time. Each time you perform a search in Leadfwd Prospect, the contact and account data
                        that you receive is updated. Leadfwd leverages artificial intelligence to enrich and verify
                        contact data from multiple sources in real-time, every time. Email addresses are also verified
                        during the export process, so you only ever pay for valid contact data.</span>
                </div>
            </li>
            <li>
                <span>What if the data isn’t accurate?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>With millions of records and high turnover at B2B companies, it can definitely happen. But
                        when it does, you won’t pay for it. We make it easy to flag inaccurate data and we’ll return
                        your credit on the spot. No haggling. Learn more about reporting inaccurate data.</span>
                </div>
            </li>
            <li>
                <span>What data attributes are included?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>The intelligence delivered will vary depending on what’s applicable for a specific account and
                        what’s accessible. At a minimum, every valid export will include a full name, role, title,
                        company name, domain URL and verified email address. In addition and when available, we’ll
                        provide:<br><br>

                        <b class="faq-answers-subtitle">Account intelligence</b>
                        Company Name<br>
                        Geography<br>
                        Twitter<br>
                        LinkedIn<br>
                        Facebook<br>
                        Employees<br>
                        Industry<br>
                        Email<br>
                        Phone<br>
                        Company Biography<br>
                        Logo<br>
                        Company URL<br>
                        Keywords<br>
                        Traffic ranking<br>
                        Technographics (Current and Historical)<br><br>

                        <b class="faq-answers-subtitle">Contact intelligence</b>
                        First Name<br>
                        Last Name<br>
                        Full Name<br>
                        Education<br>
                        Title<br>
                        Age<br>
                        Birthday<br>
                        Gender<br>
                        Geography<br>
                        Physical address<br>
                        Twitter URL<br>
                        Twitter Handle<br>
                        LinkedIn URL<br>
                        LinkedIn Bio
                    </span>
                </div>
            </li>
            <li>
                <span>What about the GDPR and CCPA?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>Leadfwd includes our privacy compliance suite, Privacy Guard, to help sales and marketing
                        teams build fully compliant outbound programs. Learn more about Privacy Guard and read our
                        extensive help article.</span>
                </div>
            </li>
            <li>
                <span>How do Prospect credits work?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>When you conduct a Prospect search and build a custom prospect list, you’re charged 1 credit
                        for each verified contact that you export or sync to your CRM. If we fail to verify the validity
                        of an email address, it is not included with your export or sync and the Prospect credit is
                        returned.</span>
                </div>
            </li>
            <li>
                <span>How does Email Finder work?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>Email Finder is a BYOL (Bring-You-Own-List) prospecting tool. You drop in a list of target
                        accounts (by domain name), specify the types of decision makers you want to reach (by role) and
                        viola! Within seconds we’ll provide up to 25 verified contacts with complete account
                        intelligence.<br><br>

                        You’re charged one credit for each account that contains at least 1 and up to 25 contacts. Email
                        finder credits are valid for one full year and can be shared among your team.

                    </span>
                </div>
            </li>
            <li>
                <span>How can I reach the contacts I acquire with Prospect?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>Our Engage (Sales Engagement Platform) and Campaign (Marketing Engagement Platform) solutions
                        connect natively to Prospect. You can also export your Prospect list into a spreadsheet which
                        can be imported to your favorite ESP, MAP or CRM.
                    </span>
                </div>
            </li>
            <li>
                <span>Does Leadfwd integrate with my CRM?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>
                        We currently offer fully built-in solutions for Salesforce, Sugar Sell and SuiteCRM. Export and
                        sync solutions for Pipedrive and Hubspot are on our 2021 roadmap as well.
                    </span>
                </div>
            </li>
            <li>
                <span>Do my unused credits rollover each month?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>
                        Annual commitment plans include credits that will rollover each month for the entire year, as
                        long as your subscription is current. Annual prepaid plans include credits that are loaded at
                        one time for the entire year.
                    </span>
                </div>
            </li>
            <li>
                <span>Can I cancel my subscription?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>
                        You can cancel your next renewal at any time by logging into your account and navigating to
                        Settings and then selecting Plans and billing.
                    </span>
                </div>
            </li>
        </ul>

    </section>
    <!--END Have questions-->


    <!--Reviews-->
    <ul class="reviews-row">
        <li class="whole">
            <img src="<?php echo $site_url_path; ?>images/high-performer-mid-market-summer-2020.png" width="96" alt="">
            <img src="<?php echo $site_url_path; ?>images/high-performer-summer-2020.png" width="96" alt="">
            <img src="<?php echo $site_url_path; ?>images/users-love.png" width="85" alt="">
        </li>
        <li class="review">
            <img src="<?php echo $site_url_path; ?>images/g2.png" width="124" alt="">
            <p class="f-20">"So many features for an excellent value. Seamless integration with CRM."</p>
            <a href="https://www.g2.com/products/inbox25/reviews" class="link-gray">Read G2 Crowd reviews</a>
        </li>
        <li class="review">
            <img src="<?php echo $site_url_path; ?>images/g2.png" width="124" alt="">
            <p class="f-18">"Very responsive to questions. Know the business, how it can be implemented and the
                technology behind it."</p>
            <a href="https://www.g2.com/products/inbox25/reviews" class="link-gray">Read G2 Crowd reviews</a>
        </li>
        <li class="review">
            <img src="<?php echo $site_url_path; ?>images/g2.png" width="124" alt="">
            <p class="f-26">"Our Best SugarCRM Integration."</p>
            <a href="https://www.g2.com/products/inbox25/reviews" class="link-gray">Read G2 Crowd reviews</a>
        </li>
    </ul>
    <!--END Reviews-->



    <!--Footer-->
    <?php include 'includes/footer.php';?>

    <!--Navigation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.16.0/feather.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/navigation.js"></script>





    <!--video-->
    <script>
        $(document).ready(function () {

            var videoSrcs = ['<?php echo $site_url_path; ?>media/leadfwd_prospect_main.mp4',
                '<?php echo $site_url_path; ?>media/prospect_email_finder_v2.mp4',
                '<?php echo $site_url_path; ?>media/prospect_data_enrichment_v2.mp4',
                '<?php echo $site_url_path; ?>media/prospect_data_export_v2.mp4',
                '<?php echo $site_url_path; ?>media/prospect_data_verification_v2.mp4'
            ];
            loadVideo('1', videoSrcs[0], '');
            loadVideo('2', videoSrcs[1], '');
            loadVideo('3', videoSrcs[2], '');
            loadVideo('4', videoSrcs[3], '');
            loadVideo('5', videoSrcs[4], '');

            var flagMobile = 0;
            $("ul.faq li a.toggle.open").click(function () {
                if ($(this).parents('li').parent().hasClass('f1-prospect')) {
                    flagMobile = $(this).parents('li').index();
                    loadVideo((flagMobile + 1), videoSrcs[flagMobile], 'm');
                }
            });

            function loadVideo(cnt, src, mob) {
                var video = document.getElementById(mob + 'vid' + cnt);

                var breakpoint = 750;

                // Remove existing source tags for mobile
                if ($(document).width() < breakpoint + 1) {
                    while (video.firstChild) {
                        video.removeChild(video.firstChild);
                    }
                }

                // Add source tags if not already present
                if ($(document).width() > breakpoint || mob) {
                    if (document.querySelectorAll('#' + mob + 'vid' + cnt + ' > source').length < 1) {
                        var source1 = document.createElement('source');

                        source1.setAttribute('src', src);
                        source1.setAttribute('type', 'video/mp4');

                        video.appendChild(source1);
                    }

                    // Play the video
                    $('#' + mob + 'vid' + cnt)[0].play();
                }
            }
        });
    </script>

    <script> </script>
    <!--chrome bug-->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
</body>

</html>