<?php
$active_top_bar = 'none';
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
<html>
<head>
    <meta charset="UTF-8">
    <title>B2B Sales Prospecting + Sales Outreach and Automation = Unstoppable Growth Platform | Leadfwd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <meta name="description" content="Leadfwd combines B2B Prospecting, Sales Outreach and Account-Based Marketing together with the power of Artificial Intelligence and Machine Learning. All in one unstoppable growth platform."/>
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
    
    <link href="https://downloads.intercomcdn.com/i/o/223532/380d7e9f040321429b91a359/2c4f86a043ac0a9cdf792273f8850b69.png" rel="shortcut icon" type="image/png">
    
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
    <?php include 'includes/bar_v2.php';?>
    
    
    <!--HEADER-->
    <header>
       <span class="header-bg1"></span>
        <div class="header-main">
            <p>
                <span>Sugar Prospect</span>
                Find ideal accounts and leads with complete contact info, right from Sugar Sell. 
            </p>
        </div>
        <div class="header-img2">
            <img src="<?php echo $site_url_path; ?>images/header-image4.png" width="890" alt="Find accounts and leads with complete contact info right from CRM">
        </div>
    </header>
    
    <!--Video-->
    <div class="wrapper pt30 mb0">
        
        <!--Presentation for big screens-->
        <h1 class="h1">
            Fuel your pipeline with 100+ million B2B verified contacts.
            <span>Find buyers, grow your pipeline and drive revenue. Available to your sales team inside Sugar Sell.</span>
        </h1>
        
        <div class="video-1">
            <video preload="metadata" autoplay loop muted playsinline>
                <source src="<?php echo $site_url_path; ?>media/sugar-prospect.mp4" type="video/mp4">
                Sorry, your browser doesn't support embedded videos.
            </video>
        </div>
        
    </div>
    
    <!--wrapper 882px-->
    <div class="wrapper-882">
        
        <!--Touch-free sync to Sugar Sell-->
        <section class="col-25">
            <div>
                <p class="f-18">
                    <span class="title-24-light mb10">Touch-free sync to Sugar Sell</span>
                    Build a targeted list of qualified companies and key decision makers, then seamlessly push them to Sugar Selland your sales team.
                </p>
                <ul class="list-4">
                    <li>Auto-create Accounts and Contact relationships</li>
                    <li>Touch-free sync to Accounts, Contacts, Leads and Targets</li>
                    <li>Custom field mapping with enriched data insights</li>
                    <li>Real-time email address verification</li>
                </ul>
            </div>
            <img src="<?php echo $site_url_path; ?>images/drawer-screen.png" width="293" height="322" alt="lead flow without manual data entry">
        </section>
        <!--END Touch-free sync to Sugar Sell-->
        
        
        <!--Sync to Sugar Sell Campaigns-->
        <section class="col-26">
            <ul class="fields">
                <li>Create new campaign <span>&#9662;</span></li>
                <li><a href="" class="typewrite" data-period="2000" data-type='[ "Enter a new campaign name", "SaaS Companies in California" ]'><span class="wrap"></span></a></li>
            </ul>
            <p>
                <span class="title-24-light mb10">Sync to Sugar Sell Campaigns</span>
                Organize and segment your new prospects into a new or existing CRM  Campaign and Target List, with just one click. Enable your marketing and sales team to track performance and ROI for each set of prospects you add to your CRM.
            </p>
        </section>
        <!--END Sync to Sugar Sell Campaigns-->
        
        
        <!--Built-in lead routing to CRM users-->
        <section class="col-27">
            <p>
                <span class="title-24-light mb10">Built-in lead routing to CRM users</span>
                Automatically set record assignment for accounts and contacts that you acquire through Prospect. Customize  a lead routing policy for each prospect persona, then set it and forget it.
            </p>
            <img src="<?php echo $site_url_path; ?>images/lead-rooting-to-crm-users.png" width="384" height="228" alt="Built-in lead routing to CRM users">
            
        </section>
        <!--END Built-in lead routing to CRM users-->
        
        
        <!--Find key decision-makers at target accounts-->
        <section class="col-28">
            <img src="<?php echo $site_url_path; ?>images/prospect-by-account.png" width="340" height="393" alt="company insights and direct email addresses for key contacts 
at target accounts">
            <div>
                <span class="title-24-light mb10">Email Finder</span>
                Create your own target account list and instantly access key stakeholders and their verified work email address.
                <ul class="list-4">
                    <li>Filter by specific department and role</li>
                    <li>Enriched company and contact intelligence</li>
                    <li>Real-time email address verification</li>
                    <li>Touch-free sync to Accounts, Contacts, Leads and Targets</li>
                    <li>Access from Sugar Sell</li>
                </ul>
            </div>
        </section><!--END Find key decision-makers at target accounts-->
        
    </div>
    <!--END wrapper 882px-->
    
    
    <!--Testimonials-->
    <section class="on-blue-w-image">
        <div class="sugar-exchange">
            <img src="<?php echo $site_url_path; ?>images/sugar-crm-software-partner.png" alt="Sugar CRM software partner">
            Find us on the <span>SugarExchange</span>
        </div>
        <div class="testimonials">
            <ul>
               <li class="g2">
                   <img src="<?php echo $site_url_path; ?>images/g2-testimonials.png" width="51" height="53" alt="">
               </li>
                <li>
                    <span class="title">"Transforming Lead Gen"</span>
                    <span class="stars"></span>
                    <p>We love leads! And we like to know where they come from and if they are converting into real business.</p>
                </li>
                <li>
                    <span class="title">"Excellent Automation Platform for SugarCRM"</span>
                    <span class="stars"></span>
                    <p>We use it exclusively within SugarCRM itself; as far as we're concerned, it's simply part of that system.</p>
                </li>
                <li>
                    <span class="title">"The Best Direct Integration Marketing Automation For SugarCRM"</span>
                    <span class="stars"></span>
                    <p>Great team of people deploying a solution that cleanly integrates with Sugar/SuiteCRM, we're especially thrilled about inbound lead management for content campaigns + outbound email management for sales teams...</p>
                </li>
            </ul>
        </div>
    </section>
    <!--END Testimonials-->
    
    
    <!--Demand Generation-->
    <div class="on-gray3">
        <section class="wrapper-col-22 col-22">
            <img src="<?php echo $site_url_path; ?>images/demand-generation-ps1.png" width="662" alt="Qualified leads by combining ICP with automation">
            <p>
                <span class="badge green">COMING SOON</span>
                <span class="title-28-light">Demand Generation on Auto-Pilot</span>
                Prospect ensures your sales team never runs out of qualified leads by combining your ICP with the power of automation. All you need to do is choose a saved search profile, configure your routing preferences and set the delivery interval -- and Prospect will take care of the rest. Delivering unique and qualified accounts and key contacts to your sales team daily or weekly.
            </p>
        </section>
    </div><!--END Demand Generation-->
    
    
    <div class="wrapper-1010">
       
       <!--What's included-->
        <h3 class="plr-w1010">
            What’s included...
            <span class="f16B">Everything you need to build and maintain an explosive sales pipeline.</span>
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
                <span class="l3-title">Account based filters</span>
                Find qualified companies based on dozens of firmographics, like geography, size, revenue and more.
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
                <span class="l3-title">Scheduled delivery</span>
                Automatically import and route qualified prospects to your team daily or weekly.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-18.png" alt="Email Verification icon">
                <span class="l3-title">Real-time email verification</span>
                Prospect verifies every email address in real-time, before its  imported into your account.
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
                <span class="l3-title">Lead enrichment</span>
                We’ll help you identify your ideal customer persona -- based on your actual customer data.
            </li>
            <li>
                <img src="<?php echo $site_url_path; ?>images/ic-23.png" alt="Unlimited users icon">
                <span class="l3-title">Unlimited users</span>
                Invite the whole team and assign credit limits or custom access rights.
            </li>
        </ul>
        
    </div>
    
    
    <!--Have questions-->
    <section class="on-gray">
        
        <h1 class="mb35">
            Have questions?
            <span class="normal">Leadfwd understands that "one size fits all" doesn’t apply to most sales and marketing operations</span>
        </h1>
        
        <ul class="faq">
            <li>
                <span>What are your data sources?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>LeadFWD licenses data from multiple third-party partners, aggregates and enriches data in-house and relies on public sources.<br><br>

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
                    <span>Real-time. Each time you perform a search in Leadfwd Prospect, the contact and account data that you receive is updated. Leadfwd leverages artificial intelligence to enrich and verify contact data from multiple sources in real-time, every time. Email addresses are also verified during the export process, so you only ever pay for valid contact data.</span>
                </div>
            </li>
            <li>
                <span>What if the data isn’t accurate?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>With millions of records and high turnover at B2B companies, it can definitely happen. But when it does, you won’t pay for it. We make it easy to flag inaccurate data and we’ll return your credit on the spot. No haggling. Learn more about reporting inaccurate data.</span>
                </div>
            </li>
            <li>
                <span>What data attributes are included?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>The intelligence delivered will vary depending on what’s applicable for a specific account and what’s accessible. At a minimum, every valid export will include a full name, role, title, company name, domain URL and verified email address. In addition and when available, we’ll provide:<br><br>
                    
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
                    <span>Leadfwd includes our privacy compliance suite, Privacy Guard, to help sales and marketing teams build fully compliant outbound programs. Learn more about Privacy Guard and read our extensive help article.</span>
                </div>
            </li>
            <li>
                <span>How do Prospect credits work?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>When you conduct a Prospect search and build a custom prospect list, you’re charged 1 credit for each verified contact that you export or sync to your CRM. If we fail to verify the validity of an email address, it is not included with your export or sync and the Prospect credit is returned.</span>
                </div>
            </li>
            <li>
                <span>How does Email Finder work?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>Email Finder is a BYOL (Bring-You-Own-List) prospecting tool. You drop in a list of target accounts (by domain name), specify the types of decision makers you want to reach (by role) and viola! Within seconds we’ll provide up to 25 verified contacts with complete account intelligence.<br><br>

                    You’re charged one credit for each account that contains at least 1 and up to 25 contacts. Email finder credits are valid for one full year and can be shared among your team.

                    </span>
                </div>
            </li>
            <li>
                <span>How can I reach the contacts I acquire with Prospect?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>Our Engage (Sales Engagement Platform) and Campaign (Marketing Engagement Platform) solutions connect natively to Prospect. You can also export your Prospect list into a spreadsheet which can be imported to your favorite ESP, MAP or CRM.
                    </span>
                </div>
            </li>
            <li>
                <span>Does Leadfwd integrate with my CRM?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>
                        We currently offer fully built-in solutions for Salesforce, Sugar Sell and SuiteCRM. Export and sync solutions for Pipedrive and Hubspot are on our 2021 roadmap as well.
                    </span>
                </div>
            </li>
            <li>
                <span>Do my unused credits rollover each month?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>
                        Annual commitment plans include credits that will rollover each month for the entire year, as long as your subscription is current. Annual prepaid plans include credits that are loaded at one time for the entire year.
                    </span>
                </div>
            </li>
            <li>
                <span>Can I cancel my subscription?</span>
                <a class="toggle open" href="javascript:void(0)">+</a>
                <a class="toggle close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <span>
                        You can cancel your next renewal at any time by logging into your account and navigating to Settings and then selecting Plans and billing.
                    </span>
                </div>
            </li>
        </ul>
        
    </section><!--END Have questions-->
    
    
    <!--Reviews-->
    <ul class="reviews-row">
        <li class="whole">
            <img src="<?php echo $site_url_path; ?>images/high-performer-mid-market-summer-2020.png" width="96" alt="">
            <img src="<?php echo $site_url_path; ?>images/high-performer-summer-2020.png" width="96" alt="">
            <img src="<?php echo $site_url_path; ?>images/users-love.png" width="85" alt="">
        </li>
        <li class="review">
            <img src="<?php echo $site_url_path; ?>images/g2.png" width="124" alt="">
            <p class="f-26">"So many features for an excellent value. Seamless integration with CRM."</p>
            <a href="https://www.g2.com/products/inbox25/reviews" class="link-gray">Read G2 Crowd reviews</a>
        </li>
        <li class="review">
            <img src="<?php echo $site_url_path; ?>images/g2.png" width="124" alt="">
            <p class="f-22">"Very responsive to questions. Know the business, how it can be implemented and the technology behind it."</p>
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
    
    

<script> </script><!--chrome bug--> 
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
</body>
</html>
