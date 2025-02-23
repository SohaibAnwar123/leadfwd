<?php
$active_top_bar = 'none';
$site_url_path = '/';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>B2B Sales Prospecting + Sales Outreach and Automation = Unstoppable Growth Platform | Leadfwd</title>
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
    
    <link rel="stylesheet" href="https://use.typekit.net/pxu2bwp.css" />
    <link rel="stylesheet" href="https://use.typekit.net/ycj0dcm.css">
    <link href="https://downloads.intercomcdn.com/i/o/223532/380d7e9f040321429b91a359/2c4f86a043ac0a9cdf792273f8850b69.png" rel="shortcut icon" type="image/png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd.js"></script>
</head>

<body ontouchstart="">
   <?php include 'includes/analytics_body.php';?>
    
    <!--Top Bar-->
    <?php include 'includes/bar_v2.php';?>
    
    
    <!--HEADER-->
    <header>
       <span class="blue-bg"></span>
        <div class="header-main">
            <p>
                <span id="typedtext">Unstoppable Growth Platform.</span>
                <span class="hm-small">Fill your pipeline , engage key accounts, track their journey , close the revenue... automate and repeat.</span>
            </p>
        </div>
    </header><!--END HEADER-->
    
    
    <!--Generate Pipeline, Instantly.-->
    <article class="solution-section" id="pipeline">
        <img class="prospect-graph desktop" src="<?php echo $site_url_path; ?>images/prospect-graph.png" alt="">
        
        <section class="product-description toRight w520 pt45">

            <a class="pd-label" href="<?php echo $site_url_path; ?>platform/prospect">PROSPECT</a>
            <span class="pd-title2">Generate Pipeline, Instantly.</span>
            <img class="prospect-graph mobile" src="<?php echo $site_url_path; ?>images/prospect-graph.png" alt="">
            <p class="pd-text">Stop hunting and start selling. Prospect gives you access to 100+ million B2B contacts with verified work emails. Build highly tailored personas, find the right decision makers and instantly push fresh leads to your sales team.</p>
            <ul class="pd-list2">
                <li>
                    <span></span>
                    <p>100+ million B2B decision makers</p>
                </li>
                <li>
                    <span></span>
                    <p>Real-time data enrichment and email verification</p>
                </li>
                <li id="salesE">
                    <span></span>
                    <p>Search by industry, role, location, size and more</p>
                </li>
                <li>
                    <span></span>
                    <p>Find verified email addresses in seconds</p>
                </li>
            </ul>
        </section>
        
    </article><!--END Generate Pipeline, Instantly.-->
    
    
    <!--Sales Engagement-->
    <article class="solution-section onBlue">
        
        <section class="product-description toLeft2 w450 pt105b30">

            <a class="pd-label" href="<?php echo $site_url_path; ?>platform/engage">ENGAGE</a>
            <span class="pd-title2">Sales Engagement Platform</span>
            <img class="engage-graph spill mobile" src="<?php echo $site_url_path; ?>images/engage-graph.png" alt="">
            <p class="pd-text">Create multi-step sales sequences with emails, tasks,  calls, to automate your work and boost your sales productivity.</p>
            <ul class="pd-list2 onDark">
                <li>
                    <span></span>
                    <p>Human-like sending and personalization with AI/ML.</p>
                </li>
                <li>
                    <span></span>
                    <p>Never forget to follow up with prospects again.</p>
                </li>
                <li>
                    <span></span>
                    <p>Goal oriented. If a prospect replies, their sequence ends</p>
                </li>
                <li>
                    <span></span>
                    <p>Send on behalf of your entire sales team, with their mailbox</p>
                </li>
                <li>
                    <span></span>
                    <p>Track opens, clicks, attachments and site visits.</p>
                </li>
            </ul>
        </section>
        
        <img class="engage-graph spill desktop" src="<?php echo $site_url_path; ?>images/engage-graph.png" alt="">
        
        <img class="roi-sitting" src="<?php echo $site_url_path; ?>images/roi-sitting.png" alt="Mascot Roi sitting with laptop">
    </article><!--END Sales Engagement-->
    <span id="salesI"></span>
    
    
    <!--Sales Intelligence & Productivity-->
    <article class="solution-section">
        <img class="sales-graph solutions desktop" src="<?php echo $site_url_path; ?>images/sales-graph.png" alt="">
        
        <section class="product-description toRight w520 pt145">

            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/campaign">CAMPAIGN</a>
            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/engage">ENGAGE</a>
            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/discover">DISCOVER</a>
            <span class="pd-title2">Sales Intelligence &amp; Productivity</span>
            <img class="sales-graph solutions mobile" src="<?php echo $site_url_path; ?>images/sales-graph.png" alt="">
            <p class="pd-text">Building a meaningful dialog and relationship takes more than just transactional data. Leadfwd provides marketers and sales teams with instant access to the DNA of your leads and customers. </p>
            <ul class="pd-list2">
                <li>
                    <span></span>
                    <p>360-degree enriched profiles for every account and contact.</p>
                </li>
                <li>
                    <span></span>
                    <p>Follow the entire buyer journey and every interaction.</p>
                </li>
                <li>
                    <span></span>
                    <p>Quickly identify sales ready behavior and route leads to sales reps.</p>
                </li>
                <li>
                    <span></span>
                    <p>Monitor sales-ready behavior and alert sales teams when a lead is ready to buy.</p>
                </li>
                <li>
                    <span></span>
                    <p>Native intelligence views delivered inside Salesforce, Sugar Sell and SuiteCRM -- where your sales reps live.</p>
                </li>
            </ul>
        </section>
        
        
    </article><!--END Sales Intelligence & Productivity-->
    <span id="abm"></span>
    
    
    <!--Virtual AI/ML Sales Team-->
    <article class="solution-section onGreen">
        
        <section class="product-description toLeft2 w470 pt70">

            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/ai-sales-agents">AI SALES TEAM</a>
            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/engage">ENGAGE</a>
            <span class="pd-title2">Virtual AI/ML Sales Team</span>
            <img class="ai-sales-graph2 solutions mobile" src="<?php echo $site_url_path; ?>images/ai-sales-graph6.png" alt="">
            <p class="pd-text">AI Sales Agents perform the heavy lifting of qualifying prospects, so your sales reps can focus on what they do best, closing deals. AI Sales Agents are capable of touching hundreds of prospects every day and only interested buyers are forwarded to your sales team.</p>
            <ul class="pd-list2 onGreen">
                <li>
                    <span></span>
                    <p>AI Sales Agents  can touch hundreds of prospects each day</p>
                </li>
                <li>
                    <span></span>
                    <p>SDRs can focus on  closing deals and not prospecting.</p>
                </li>
                <li>
                    <span></span>
                    <p>Sync fresh leads for AI Sales Agents daily from Prospect.</p>
                </li>
                <li>
                    <span></span>
                    <p>AI Sales Agents initiate contact, follow up automatically and loop in human sales reps when they detect interest.</p>
                </li>
            </ul>
        </section>
        
        <img class="ai-sales-graph2 solutions desktop" src="<?php echo $site_url_path; ?>images/ai-sales-graph6.png" alt="">
        
    </article><!--END Virtual AI/ML Sales Team-->
    <span id="content_marketing"></span>
    
    
    <!--Hyper-targeted Customer Journeys-->
    <article class="solution-section">
        <img class="customer-journey-graph desktop" src="<?php echo $site_url_path; ?>images/customer-journey-graph.png" alt="">
        
        <section class="product-description toRight w520 pt145b30">

            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/campaign">CAMPAIGN</a>
            <span class="pd-title2">Hyper-targeted Customer Journey's</span>
            <img class="customer-journey-graph mobile" src="<?php echo $site_url_path; ?>images/customer-journey-graph.png" alt="">
            <p class="pd-text">Combining the power of AI and Marketing Automation, Campaign enables marketers to reach and track their target audience at every stage of the sales cycle using intelligent lead enrichment, targeted content and hyper-personalized customer journeys.</p>
            <ul class="pd-list2">
                <li>
                    <span></span>
                    <p>Build smart automated journey’s that target specific audiences.</p>
                </li>
                <li>
                    <span></span>
                    <p>Automate outbound marketing outreach and follow-ups.</p>
                </li>
                <li>
                    <span></span>
                    <p>Deploy content marketing campaigns and track downloads.</p>
                </li>
                <li>
                    <span></span>
                    <p>Align with your sales team by alerting reps of buyer intent</p>
                </li>
                <li>
                    <span></span>
                    <p>Sync with Salesforce, Sugar Sell, SuiteCRM</p>
                </li>
            </ul>
        </section>
        
    </article><!--END Hyper-targeted Customer Journey’s-->
    <span id="inbound_marketing"></span>
    
    
    <!--Email Marketing-->
    <article class="solution-section onBlue2">
        
        <section class="product-description toLeft2 w470">

            <a class="pd-label" href="<?php echo $site_url_path; ?>platform/campaign">CAMPAIGN</a>
            <span class="pd-title2">Email Marketing</span>
            <img class="email-marketing-graph mobile" src="<?php echo $site_url_path; ?>images/email-marketing-graph.png" alt="">
            <p class="pd-text">Reach your target audience at scale with personalized email marketing campaigns. Create smart segments to target your message, build impactful and rich email creatives and track recipient engagement across any device or platform.</p>
            <ul class="pd-list2 onDark">
                <li>
                    <span></span>
                    <p>Powerful drag n’ drop email builder to create high-impact creatives.</p>
                </li>
                <li>
                    <span></span>
                    <p>Personalize content for every recipient.</p>
                </li>
                <li>
                    <span></span>
                    <p>A/B split testing to optimize your recipient engagement.</p>
                </li>
                <li>
                    <span></span>
                    <p>Track opens, clicks, downloads and site visit activity.</p>
                </li>
                <li>
                    <span></span>
                    <p>Sync activities to Salesforce, Sugar Sell or SuiteCRM.</p>
                </li>
            </ul>
        </section>
        
        <img class="email-marketing-graph desktop" src="<?php echo $site_url_path; ?>images/email-marketing-graph.png" alt="">
        
    </article><!--END Email Marketing-->
    
    
    <!--On blue w/ texture -->
    <section class="on-grad-texture">
        <span class="f36">only 60 seconds away from growing sale pipeline.</span>
        <button class="blue-btn mtb30" onclick="location.href='https://app.leadfwd.com/signup/'">Get started now</button>
        <div>Immediate acces and <span class="normal-txt">no credit card required.</span></div>
    </section>
    <!--END On blue w/ texture -->
    <span id="personalization"></span>
    
    
    <!--Account-Based Marketing (ABM)-->
    <article class="solution-section onGreen">
        
        <section class="product-description toLeft2 w580">

            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/campaign">CAMPAIGN</a>
            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/prospect">PROSPECT</a>
            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/discover">DISCOVER</a>
            <span class="pd-title2">Account-Based Marketing (ABM)</span>
            <img class="abm-campaigns-graph mobile" src="<?php echo $site_url_path; ?>images/abm-campaigns-graph.png" alt="">
            <p class="pd-text">Leadfwd delivers comprehensive ABM solutions with everything  revenue teams need. Find the right audiences, get relevant messages in front of them and automate follow-ups, measure engagement and key metrics, and stay aligned with your sales team through the entire buyer journey .</p>
            <ul class="pd-list2 onGreen">
                <li>
                    <span></span>
                    <p>Build a target account list using Prospect and reach key decision makers by email.</p>
                </li>
                <li>
                    <span></span>
                    <p>Automate emails from your reps or agents and follow-ups to using Campaign or Engage.</p>
                </li>
                <li>
                    <span></span>
                    <p>ABM Analytics — Track opens, clicks, attachments, site visits, conversions and more.</p>
                </li>
                <li>
                    <span></span>
                    <p>CRM Connectors— Native ABM solutions for Salesforce, Sugar Sell or SuiteCRM.</p>
                </li>
                <li>
                    <span></span>
                    <p>Turn anonymous visitors browsing your website into identified accounts with Discover.</p>
                </li>
            </ul>
        </section>
        
        <img class="abm-campaigns-graph desktop" src="<?php echo $site_url_path; ?>images/abm-campaigns-graph.png" alt="">
        
    </article><!--END Account-Based Marketing (ABM)-->
    <span id="anonymous"></span>
    
    
    <!--Anonymous Visitor ID and Retargetting-->
    <article class="solution-section">
        <img class="anonymous-graph desktop" src="<?php echo $site_url_path; ?>images/anonymous-graph.png" alt="">
        
        <section class="product-description toRight w550 pt145b30">

            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/discover">DISCOVER</a>
            <a class="pd-label blue" href="<?php echo $site_url_path; ?>platform/campaign">CAMPAIGN</a>
            <span class="pd-title2">Anonymous Visitor ID and Retargetting</span>
            <img class="anonymous-graph mobile" src="<?php echo $site_url_path; ?>images/anonymous-graph.png" alt="">
            <p class="pd-text">Get ahead of your competitors by identifying hidden buyers early in the sales cycle when they’re researching your brand and products. Intent-driven analytics in real-time.</p>
            <ul class="pd-list2">
                <li>
                    <span></span>
                    <p>Turn anonymous website visitors into identified Accounts.</p>
                </li>
                <li>
                    <span></span>
                    <p>Find key decision makers with verified contact info.</p>
                </li>
                <li>
                    <span></span>
                    <p>Enriched 360-degree intelligence for Accounts and key contacts.</p>
                </li>
                <li>
                    <span></span>
                    <p>Sync to Salesforce, Sugar Sell or SuiteCRM and auto-assign to reps.</p>
                </li>
                <li>
                    <span></span>
                    <p>Automate email outreach using Engage or Campaign.</p>
                </li>
            </ul>
        </section>
        
    </article><!--END Anonymous Visitor ID and Retargetting-->
    
    
    <!--Connect your apps -->
    <article class="solution-section onBlue2">
        
        <section class="product-description toRight w550">

            <span class="pd-title2">Connect your apps</span>
            <p class="pd-text">By seamlessly mirroring data between Leadfwd and your existing apps, you can create responsive and personalized campaigns. Sync activity in real-time from your email campaigns, content downloads, site visits, event registrations, and anything else you track in your CRM side-by-side with your Leadfwd campaigns at the account and contact level.</p>
            <ul class="pd-list2 onDark">
                <li>
                    <span></span>
                    <p>Generate pipeline, automate sales outreach and drive revenue with Salesforce.</p>
                </li>
                <li>
                    <span></span>
                    <p>Generate pipeline from 100M+ B2B contacts in Sugar Sell using Sugar Prospect.</p>
                </li>
                <li>
                    <span></span>
                    <p>Automate sales outreach using AI/ML in Sugar Sell using Sugar Engage.</p>
                </li>
                <li>
                    <span></span>
                    <p>Create, deliver and measure hyper-targeted campaigns with Sugar Campaign.</p>
                </li>
                <li>
                    <span></span>
                    <p>Generate pipeline, automate sales outreach and drive revenue with SuiteCRM.</p>
                </li>
            </ul>
        </section>
        
        <ul class="apps-grid">
            <li>
                <a href="<?php echo $site_url_path; ?>integrations/salesforce">
                    <span class="tooltip">Salesforce</span>
                    <img src="<?php echo $site_url_path; ?>images/app-salesforce.png" width="61" alt="">
                </a>
            </li>
            <li>
               <a href="<?php echo $site_url_path; ?>integrations/sugarcrm">
                    <span class="tooltip">Sugar Sell</span>
                    <img src="<?php echo $site_url_path; ?>images/app-sugar-sell.png" width="48" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo $site_url_path; ?>integrations/suitecrm">
                    <span class="tooltip">SuiteCRM</span>
                    <img src="<?php echo $site_url_path; ?>images/app-suite-crm.png" width="44" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo $site_url_path; ?>integrations/gotowebinar">
                    <span class="tooltip">GoToWebinar</span>
                    <img src="<?php echo $site_url_path; ?>images/app-gotowebinar.png" width="41" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo $site_url_path; ?>integrations/twilio">
                    <span class="tooltip">Twilio</span>
                    <img src="<?php echo $site_url_path; ?>images/app-twilio.png" width="49" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo $site_url_path; ?>integrations/livechat">
                    <span class="tooltip">Livechat</span>
                    <img src="<?php echo $site_url_path; ?>images/app-livechat.png" width="45" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo $site_url_path; ?>integrations/zendesk">
                    <span class="tooltip">Zendesk</span>
                    <img src="<?php echo $site_url_path; ?>images/app-zendesk.png" width="42" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo $site_url_path; ?>platform/engage">
                    <span class="tooltip w170">Google Workspace</span>
                    <img src="<?php echo $site_url_path; ?>images/app-gsuite.png" width="45" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo $site_url_path; ?>platform/engage">
                    <span class="tooltip">SendGrid</span>
                    <img src="<?php echo $site_url_path; ?>images/app-sendgrid.png" width="46" alt="">
                </a>
            </li>
        </ul>
        
    </article><!--END Connect your apps -->
    
    
    <!--Calendly-->
    <!--<h3 class="alone">
        Ready to see Engage in action?
        <span>Watch a pre-recorded demo or schedule a personal demo with our team of product experts.</span>
    </h3>-->
    
    <!--<div class="calendly-buttons">
        <button class="button-style-1 blue mlr15" id="video-show">Watch a video</button>
        <button class="button-style-1 green mlr15" id="calendly-show">Personal demo</button>
    </div>-->
    
    <!-- Calendly inline widget begin -->
    <!--<div class="calendly-container">
        <div class="calendly-inline-widget" data-url="https://calendly.com/tryleadfwd/engage" style="min-width:320px;height:630px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
         Calendly inline widget end 
    </div>-->
    
    
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
   
    <!--Chrome bug-->
    <script> </script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
</body>

</html>
