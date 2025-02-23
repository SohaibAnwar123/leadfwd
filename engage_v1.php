<?php
$active_top_bar = 'engage';
$site_url_path = '/';
?>
<!doctype html>
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
    <link rel="stylesheet" href="https://use.typekit.net/kep1jfm.css">
    <link rel="stylesheet" href="https://use.typekit.net/ymb4dcp.css">
    <link rel="stylesheet" href="https://use.typekit.net/pxu2bwp.css" />
    <link href="https://downloads.intercomcdn.com/i/o/223532/380d7e9f040321429b91a359/2c4f86a043ac0a9cdf792273f8850b69.png" rel="shortcut icon" type="image/png">
    
    <link href="<?php echo $site_url_path; ?>css/modal.css" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd.js"></script>
    
    <link rel="stylesheet" href="<?php echo $site_url_path; ?>css/swiper-bundle.css">
    <link rel="stylesheet" href="<?php echo $site_url_path; ?>css/swiper-bundle.min.css">
</head>

<body>
    <?php include 'includes/analytics_body.php';?>

    <!--Top bar-->
    <?php include 'includes/top_bar.php';?>

    <!--Main Bar-->
    <?php include 'includes/main_bar.php';?>
    
    

    <!--HEADER-->
    <header class="light-blue-bg">
        
        <div class="flex2col">
            <div class="header-text-left">
                <span class="f36">Drive Growth with Automated Sales Outreach + AI/ML.</span>
                Sales reps don't have the time to personally write, send 
and monitor activities of hundreds of leads every day. <b>But Engage does.</b>
            </div>
            
            <div class="header-img-right">
                <img src="<?php echo $site_url_path; ?>images/engage-graph.png" width="712" alt="">
            </div>
        </div>
        
    </header>

   
   <!--Sub Nav Bar-->
   <div class="sub-nav-center">
       <div class="sub-nav" id="features">
           <a href="#features">Features</a>
           <a href="#sales-assistant">AI Sales Agents</a>
           <a href="#machine-learning">AI Productivity</a>
           <a href="#engage-crm">Engage for CRM</a>
           <a href="#pricing">Pricing</a>
           <a href="#demo">Demo</a>
       </div>
   </div>
   
   <!--Video-->
   <div class="flex1 mt-var1">
       <div class="video-2">
            <video preload="metadata" autoplay loop muted playsinline>
                <source src="<?php echo $site_url_path; ?>media/engage_sequences_main_page.mp4" type="video/mp4">
                Sorry, your browser doesn't support embedded videos.
            </video>
        </div>
    </div>
   
    <!--Features-->
    <div class="wrapper-1160 padd-top50">
           
        <!--Row-->
        <article class="grid1 mt-var2 mb0 p0">

          <div class="grid1-full">

              <section>
                 <p class="grid1-title">Engage lets you get personal. Hundreds of times a day.</p>
                  <span>Multi-step sales sequences</span>
                  Connect with more prospects in a personalized way. Automate follow up emails, CRM tasks and calls, LinkedIn connections and custom reminders.
              </section>
              
              <section>
                  <span>Personalization that scales</span>
                  Make every email unique and relevant without losing efficiency.. Personalize your message with dozens of account-centric firmographics or custom data objects from your CRM.
              </section>
              
              <section>
                  <span>Sales email library</span>
                  Borrow from some of the top sales and marketing minds by leveraging a library of 450+ industry leading sales email templates and series.
              </section>
              
              <section>
                  <span>Reply detection</span>
                  Automatically end sequences when a recipient replies to a message.
              </section>
              
              <!--<div class="grid1-img">
                    <div class="dg-layout1">
                        <img src="<?php echo $site_url_path; ?>images/features-screen-1.png" width="759" alt="">
                    </div>
                    <div class="dg-layout2">
                        <img class="grid1-img2" src="<?php echo $site_url_path; ?>images/features-screen-2.png" width="994" alt="">
                    </div>
                    <div class="dg-layout3">
                        <img src="<?php echo $site_url_path; ?>images/features-screen-3.png" width="804" alt="">
                    </div>
                    <div class="dg2-dots mt100">
                        <a class="dg-link1 on" href="javascript:void(0)">1</a>
                        <a class="dg-link2" href="javascript:void(0)">2</a>
                        <a class="dg-link3" href="javascript:void(0)">3</a>
                    </div>
              </div>-->
              <section class="features-carousel">
                  <div class="swiper-container">
                      <div class="swiper-wrapper" style="padding:0;">
                          <div class="swiper-slide">
                              <img src="<?php echo $site_url_path; ?>images/features-screen-1.png" alt="">
                          </div>
                          <div class="swiper-slide" style="width: 994px;">
                              <img class="full" src="<?php echo $site_url_path; ?>images/features-screen-2.png" width="994" alt="">
                          </div>
                          <div class="swiper-slide">
                              <img src="<?php echo $site_url_path; ?>images/features-screen-3.png" alt="">
                          </div>
                      </div>
                      <!-- Add Pagination -->
                      <div class="swiper-pagination"></div>
                      <!-- Add Navigation -->
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                  </div>
              </section>
              
          </div>

           <section>
               <span>Shared team inbox <span class="grid1-badge">BOOST</span></span>
               Monitor, measure and engage with your orgs entire pipeline of prospects from a single view. Sales inbox helps sales teams stay organized and focued on the right leads.
           </section>

           <section>
               <span>Attachment tracking <span class="grid1-badge">PRO</span> </span>
               Give your sales team insight into which prospects have opened and engaged with attachments from your sales emails.
           </section>

           <section>
               <span>Unlimited leads and contacts</span>
               Import your Target Account Lists (TAL) and Contacts using a CSV or from your CRM.
           </section>

           <section>
               <span>Team and group sending</span>
               Marketing and Sales Managers can easily launch sequences on behalf of their entire sales force, from each reps email address and mailbox.
           </section>

           <section>
               <span>Enriched 360° insights</span>
               Engage will enrich each of your accounts and contacts to deliver dozens of insights. Bio, social handles, phone numbers, location, org history and more.
           </section>

           <section>
               <span>Collision warning</span>
               Avoid overlapping sequences and excessive email frequency with collision alerts for sales reps when they're enrolling contacts.
           </section>

           <section>
               <span>Revenue attribution</span>
               Connect your CRM to analyze how sequences are influencing opportunities and which content is driving revenue.
           </section>

           <section>
               <span>Human-like sending with AI</span>
               Engage sends messages using your sales reps actual mailbox. Messages are throttled automatically using AI to replicate a human sending rate. This helps maximize deliverability to better position your messages in the inbox.
           </section>

           <section>
               <span>Boost AI/ML Productivity <span class="grid1-badge">BOOST</span> </span>
               Boost productivity with AI/ML technology that automates administrative tasks on behalf of your sales reps.
           </section>

        </article><!--END Row-->

    </div><!-- END Features-->

        
    <!--WRAPPER-->
    <div class="wrapper pt50 pb0">
        
        <!--On blue-->
        <div class="on-grad-texture">
            <span class="f36">Start engaging prospects and growing your pipeline.</span>
            <button class="blue-btn mtb30"  onclick="location.href='https://app.leadfwd.com/signup/'">Get started</button>
            <div>Immediate acces and <span class="normal-txt">no credit card required.</span></div>
            <img class="texture-roi" src="<?php echo $site_url_path; ?>images/roi-mailman-standing.png" alt="">
        </div>


    </div>
    <!--END WRAPPER-->
    
    <!--Build a Virtual Sales Team with AI/ML-->
    <span id="sales-assistant"></span>
    <article class="layout-4 mb0">
     
      <div class="to-center">
          <span class="grid1-badge mb12">PRO</span>
          <span class="grid1-badge mb12 pink">BETA</span>
      </div>
      
       <h1>
           Build a Virtual Sales Team with AI/ML
           <span>AI Sales Agents handle qualifying prospects, so your sales reps can focus on what they do best, closing deals.</span>
       </h1>
       
       <img class="sales-inbox-big" src="<?php echo $site_url_path; ?>images/sales-inbox-graph.png" width="1215" alt="">
       
       <ul class="grid5">
           <li>
               <div class="sales-inbox-small">
                   <img src="<?php echo $site_url_path; ?>images/sales-inbox-graph-1.png" width="410" alt="">
               </div>
               <span class="g5-small-title">STEP 1</span>
               <span class="g5-title">Build your AI Sales Agent</span>
               Create and personalize your virtual Sales Agent and give them a unique identity, including a name, profile picture, job title, work time zone and mailbox.
           </li>
           <li>
               <div class="sales-inbox-small">
                   <img src="<?php echo $site_url_path; ?>images/sales-inbox-graph-2.png" width="432" alt="">
               </div>
               <span class="g5-small-title">STEP 2</span>
               <span class="g5-title">Activate your AI Sales Agent</span>
               Assign your Sales Agent as the sender for one or many sequences. Their automated follow-ups are personalized and sent from their own mailbox, just like a real sales rep.
           </li>
           <li>
               <div class="sales-inbox-small mb20">
                   <img src="<?php echo $site_url_path; ?>images/sales-inbox-graph-3.png" width="436" alt="">
               </div>
               <span class="g5-small-title">STEP 3</span>
               <span class="g5-title">Qualified Leads Sent to Human Reps</span>
               When your Sales Agent detects buyer interest, they’ll automatically loop in a human sales rep to take over the new sales opportunity.
           </li>
       </ul>
        
    </article>
    
    <article class="layout-4 light-blue-bg mb0 pt55pb60">
        <ul class="grid5 mt0">
           <li>
               <span class="g5-title">Build a virtual sales force</span>
               Instantly build and deploy a front-line sales force that’s responsible for converting cold prospects into qualified, sales-ready leads for your sales team
           </li>
           <li>
               <span class="g5-title">Personalize your Sales Agents</span>
               AI Sales Agents bring immediate credibility with new faces and titles to instantly extend your team regionally and globally.
           </li>
           <li>
               <span class="g5-title">Manage thousands of propects</span>
               It’s a challenge to focus on both closing deals and building a consistent sales pipeline. AI Sales Agents can manage thousands of prospects daily - without missing a beat.
           </li>
           <li>
               <span class="g5-title">Agents qualify. Humans close.</span>
               AI Sales Agents can touch thousands of prospects each day to ensure your sales team has a steady stream of qualified leads to develop into opportunities.
           </li>
           <li>
               <span class="g5-title">Reduce noise for your humans</span>
               AI  Sales Agents manage the large volume of email replies from prospects and only loop in sales reps when a lead is interested in next steps.
           </li>
           <li>
               <span class="g5-title">Keeps your CRM updated</span>
               AI Sales Agents can update your CRM to reflect lead conversions, assign leads to sales reps, change contact settings and update data fields.
           </li>
       </ul>
    </article><!--END Build a Virtual Sales Team with AI/ML-->

   
    <div class="on-blue3">
        <img src="<?php echo $site_url_path; ?>images/bolt-big-white.png" width="16" alt=""><a href="<?php echo $site_url_path; ?>platform/ai-sales-agents" class="link-white">Learn more about what a AI Sales Team can do for you</a><img src="<?php echo $site_url_path; ?>images/more-arrow-white2.png" width="42" alt="">
    </div>
    
    <span id="machine-learning"></span>
    
    <!--Machine learning-->
    <article class="layout-5 on-blue">
        <span class="grid1-badge pro mb12">BOOST</span>
        <h1>
            Boost productivity with machine learning.
            <span>Engage Boost automates administrative tasks using machine learning, while your sales reps focus on closing deals.</span>
        </h1>

        <ul class="grid4 left-txt">
            <li>
                <span>Buyer interest</span>
                Leverage NLP to automatically detect the intent and sentiment of an email reply from a prospect.
            </li>
            <li>
                <span>Referrals</span>
                Not the right contact? Automatically detect contact referrals and enroll them into a sequence.
            </li>
            <li>
                <span>OOO</span>
                Automatically detect Out of Office notices and pause sequences until your prospect returns.
            </li>
            <li>
                <span>DNC handling</span>
                Automatically detect requests to cease further communcation and opt-out contacts instantly.
            </li>
        </ul>

    </article> <!--END Machine learning-->
    
    
    <!--Sales inbox-->
    <div class="wrapper-1160 padd-top50 ">
        <div class="grid6">

            <section>
                <span class="title-badge mb15">BOOST</span>
                <p class="grid1-title">Sales inbox helps sales people stay organized and focused on the right leads.</p>
                <img class="grid6-img-mobile" src="<?php echo $site_url_path; ?>images/sales-inbox.png" height="688" alt="">
                <span class="title">Shared team inbox</span>
                One shared experience to monitor, measure and engage with every reply or outbound action that is generated by Engage and your sales team.
            </section>

            <section>
                <span class="title">Organized by what matters</span>
                Replies are automatically classified by Boost using AI/ML to empower sales people and managers to find.and focus on the leads that matter most.
            </section>

            <section>
                <span class="title">Email reply as</span>
                Take ownership of leads from other team members, reply as a team member, initiate introductions or enroll a lead into a new sequence.
            </section>

            <section>
                <span class="title">Works inside your CRM</span>
                Adoption is simple. There’s no new apps for your team to learn or logins to remember. Sales Inbox is delivered natively inside Salesforce, Sugar Sell and SuiteCRM.
            </section>

            <section class="grid1-img grid6-img-desktop">
                <img src="<?php echo $site_url_path; ?>images/sales-inbox.png" height="688" alt="">
            </section>

        </div>
    </div>
    <!--END ales inbox-->
    
    
    <span id="engage-crm"></span>
    <!--Engage for CRM-->
    <article class="layout-4 mb0">
       <h1>
           Engage inside your CRM
           <span>Our Sales Engagement Platform is deployed where your sales team already lives. Their CRM.</span>
       </h1>
       
       
        <div class="flex1 f1-w450">

           <ul class="l4-sub-nav flex1__links">
               <li class="active">Salesforce</li>
               <li>Sugar Sell</li>
               <li>SuiteCRM</li>
           </ul>

            <div class="f1-img">
                <div class="video-4">
                    <video autoplay="" loop="" muted="" playsinline="">
                        <source src="<?php echo $site_url_path; ?>media/salesforce_one-click-engage.mp4" type="video/mp4">
                    </video>
                </div>
                <span class="l4-link-container">
                    <a class="l4-link" href="<?php echo $site_url_path; ?>solutions/salesforce">Learn more</a>
                </span>
            </div>

           <div class="f1-img">
               <!--<img src="<?php echo $site_url_path; ?>images/engage-crm-img2.png" width="1146" height="463" alt="">-->
               <div class="video-4">
                    <video autoplay="" loop="" muted="" playsinline="">
                        <source src="<?php echo $site_url_path; ?>media/sugar_engage_nov2020_engage.mp4" type="video/mp4">
                    </video>
                </div>
               <span class="l4-link-container">
                   <a class="l4-link" href="<?php echo $site_url_path; ?>solutions/sugar-engage">Learn more</a>
               </span>
           </div>

           <div class="f1-img">
               <!--<img src="<?php echo $site_url_path; ?>images/engage-crm-img1.png" width="1146" height="463" alt="">-->
               <div class="video-4">
                    <video autoplay="" loop="" muted="" playsinline="">
                        <source src="<?php echo $site_url_path; ?>media/suitecrm_engage_2021.mp4" type="video/mp4">
                    </video>
                </div>
               <span class="l4-link-container">
                   <a class="l4-link" href="#">Learn more</a>
               </span>
           </div>

        </div>
        
        <!--Video presentation for SMALL screens-->
        <ul class="faq f1-w450 f-16 no-padd">
            <li>
                <span class="pb10">Salesforce</span>
                <a class="toggle pb10 open" href="javascript:void(0)">+</a>
                <a class="toggle pb10 close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <div class="video-4 mb20">
                        <video autoplay="" loop="" muted="" playsinline="">
                            <source src="<?php echo $site_url_path; ?>media/salesforce_one-click-engage.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </li>
            <li>
                <span class="pb10">Sugar Sell</span>
                <a class="toggle pb10 open" href="javascript:void(0)">+</a>
                <a class="toggle pb10 close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <div class="video-4 mb20">
                        <video autoplay="" loop="" muted="" playsinline="">
                            <source src="<?php echo $site_url_path; ?>media/sugar_engage_nov2020_engage.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </li>
            <li>
                <span class="pb10">SuiteCRM</span>
                <a class="toggle pb10 open" href="javascript:void(0)">+</a>
                <a class="toggle pb10 close" href="javascript:void(0)">-</a>
                <div class="faq-answers">
                    <div class="video-4 mb20">
                        <video autoplay="" loop="" muted="" playsinline="">
                            <source src="<?php echo $site_url_path; ?>media/suitecrm_engage_2021.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </li>
        </ul><!--END Video presentation for SMALL screens-->
        
    </article><!--END Engage for CRM-->
    
    
    <!--WRAPPER-->
    <!--<div class="wrapper pt80 pb0">
        
        
        <dl class="cols2-type10">
            <dt>
                <span>Send automated emails, with a human touch</span>
                Create custom alert policies based on dozens of filters and our platform will deploy a real-time alert to your sales team, when a company or person matches your policy rules and visits your site (or even a specific page!).
            </dt>
            <dd>
                <span>Personalization</span>
                Emails are most effective when they’re personalized. Use placeholders, drop-downs, and dynamic fields to quickly send the perfect message to every recipient.
            </dd>
            <dd>
                <span>Automation that sends like a human</span>
                Have your emails sent one by one with irregular frequency thanks to our email throttling algorithm and keep away from anti-spam filters, thus increasing your deliverability.
            </dd>
            <dd>
                <span>Sales templates</span>
                Build a library of prewritten messages. View useful metrics and learn which types of emails work best. Create an email once and reuse it at the click of a button to free up hours per day.
            </dd>
            <dd>
                <span>Bounce and opt-out handling</span>
                We’ll take good care of your sender reputation by automatically processing hard bounces, opt-out requests and suppressing contacts that mark your message as spam.
            </dd>
            <dd>
                <span>Never send the same message twice</span>
                Every outbound message is deduped against past email messages sent to ensure a recipient never receives the same content twice.
            </dd>
            <dd>
                <span>Unlimited contacts</span>
                Add or import your contacts
            </dd>
            <dd>
                <span>Deliverability</span>
                Leverage enriched field-level data, CRM data or template snippets to create a unique email experience for each recipient.
            </dd>
            <dd>
                <span>Enhanced for CRM</span>
                Leverage enriched field-level data, CRM data or template snippets to create a unique email experience for each recipient.
            </dd>
        </dl>
        END Send automated emails

    </div>-->
    <!--END WRAPPER-->
    
    
    <!--essential / proffessional boxes-->
    <section class="wrapper-846 col-24 mt20b40auto">

        <h3 class="mb50">
            Plans and Pricing
            <span>Start free trial today, no card required.</span>
        </h3>

        <!--Essentials-->
        <section class="box2">
            <img class="b2-icon" src="<?php echo $site_url_path; ?>images/engage-ic.png" alt="Discover icon - turns anonymous visitors into identified companies and leads">
            <h1 class="b2-title">Essentials</h1>
            <span class="b2-subtitle">
                <span class="seats seat1"></span><span>1 user</span> included
            </span>
            <ul class="box2-list">
                <li>600 emails / per day / per mailbox (max.)</li>
                <li>Automated human-like sending</li>
                <li>First delivery &amp; follow up schedules</li>
                <li>Open and click tracking</li>
                <li>Email personalization</li>
                <li>Bounce &amp; opt-out handling</li>
                <li>Duplicate contact and email detection</li>
                <li>Google Workspace or Custom IMAP + SMTP</li>
                <li>Reply detection</li>
                <li>Essential CRM Connectors</li>
                <li>Additional users $24 mo / billed annually</li>
                <!--<li><a class="link-green modal-show" href="javascript:void(0)">Compare all features</a></li>-->
            </ul>
            <div class="b2-price" id="starter-annual">
                <span>$39</span>
                per month. billed annually.
            </div>
            <div class="b2-price" id="starter-monthly">
                <span>$24</span>
                per month. billed monthly.
            </div>
            <button class="btn-1 omnes bw280 mb25" onclick="location.href='https://app.leadfwd.com/signup/'">Get started</button>
            <!--<a class="link-green" href="javascript:void(0)" id="starter-switch-monthly">Switch to monthly billing</a>
            <a class="link-green" href="javascript:void(0)" id="starter-switch-annual">Switch to annual billing</a>-->
            <a class="button-blue modal-show" href="javascript:void(0)">Compare all features</a>
        </section>

        <!--Professional-->
        <section class="box2">
            <img class="b2-icon" src="<?php echo $site_url_path; ?>images/engage-ic.png" alt="Discover icon - turns anonymous visitors into identified companies and leads">
            <h1 class="b2-title">Professional</h1>
            <span class="b2-subtitle">
                <span class="seats seat3"></span><span>3 users</span> included
            </span>
            <ul class="box2-list">
                <li class="box2-sublist">
                    <b>Everything in Essentials, plus:</b>
                    <span>1800 emails / per day / per mailbox (max.)</span>
                    <span>100 Email Finder <span class="f-green">credits</span> / per user / per month</span>
                    <span>Sequence Action steps</span>
                    <span>Automation workflow builder</span>
                    <span>Attachment tracking</span>
                    <span>Team  sender groups</span>
                    <span>Pro CRM Connectors</span>
                    <span>Pro Integrations</span>
                    <span>Send SMS</span>
                    <span>Add users $59 per user / mo / billed annually</span>
                    <!--<span><a class="link-green modal-show" href="javascript:void(0)">Compare all features</a></span>-->
                </li>
            </ul>
            <div class="b2-price" id="team-annual">
                <span>$249</span>
                per month. billed annually.
            </div>
            <div class="b2-price" id="team-monthly">
                <span>$98</span>
                per month. billed monthly.
            </div>
            <button class="btn-1 omnes bw280 mb25" onclick="location.href='https://app.leadfwd.com/signup/'">Get started</button>
            <!--<a class="link-green" href="javascript:void(0)" id="team-switch-monthly">Switch to monthly billing</a>
            <a class="link-green" href="javascript:void(0)" id="team-switch-annual">Switch to annual billing</a>-->
            <a class="button-blue modal-show" href="javascript:void(0)">Compare all features</a>
        </section>

    </section>
       
        
    <span id="demo"></span>
    
    <h3 class="alone">
        Ready to see Engage in action?
        <span>Watch a pre-recorded demo or schedule a personal demo with our team of product experts.</span>
    </h3>
    
    <!--<div class="calendly-buttons">
        <button class="button-style-1 blue mlr15" id="video-show">Watch a video</button>
        <button class="button-style-1 green mlr15" id="calendly-show">Personal demo</button>
    </div>-->
    
    <!-- Calendly inline widget begin -->
    <div class="calendly-container">
        <div class="calendly-inline-widget" data-url="https://calendly.com/tryleadfwd/engage" style="min-width:320px;height:630px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
    </div><!-- Calendly inline widget end -->
    
    
    
    <span id="pricing"></span>
    <!--Additional Features & Products-->
    <div class="on-gray2">
        <div class="wrapper-1010 col-24 plr15">
            <h5>
                Additional Features &amp; Products
                <span>Rev up the top of your funnel by identifying buyer intent and automatically engaging your prospects.</span>
            </h5>
            
            <!--Campaign-->
            <section class="box1 nopadd">
                <div class="box1-top pb20">
                    <img class="b1-icon" src="<?php echo $site_url_path; ?>images/campaign-round-ic.png" alt="Prospect icon - access to 100+ million B2B contacts with verified work emails">
                    <span class="b1-title">Campaign</span>
                    <span class="b1-description-2">Reach your audience at scale</span>
                    <p>
                        Combining the power of outbound email marketing and automation, Campaign drives growth through scalable email campaigns, intelligent lead capture and hyper-personalized nurturing.
                    </p><br>
                    <a class="link-green" href="<?php echo $site_url_path; ?>platform/campaign">Learn more</a>
                </div>
                <div class="box1-bottom">
                    <span class="b1-price">$99</span>
                    <span class="b1-per">starting, per month</span>
                    <button class="btn-1 bw280 mb25 mt25" onclick="location.href='https://app.leadfwd.com/signup/'">Get started</button>
                    <a class="link-green centerAl" href="<?php echo $site_url_path; ?>pricing"><b>Build your custom growth plan</b></a>
                </div>
            </section>
            
            <!--Prospect-->
            <section class="box1 nopadd">
                <div class="box1-top pb20">
                    <img class="b1-icon" src="<?php echo $site_url_path; ?>images/prospect-round-ic.png" alt="Create and deliver highly personalized email icon">
                    <span class="b1-title">Prospect</span>
                    <span class="b1-description-2"><span>Generate pipeline now</span></span>
                    <p>Stop hunting and start selling. Prospect gives sales teams access to 100+ million B2B contacts with fully enriched profiles and verified work emails.<br><br></p><br>
                    <a class="link-green" href="<?php echo $site_url_path; ?>platform/prospect">Learn more</a>
                </div>
                <div class="box1-bottom">
                    <span class="b1-price">$99</span>
                    <span class="b1-per">starting, per month</span>
                    <button class="btn-1 bw280 mb25 mt25" onclick="location.href='https://app.leadfwd.com/signup/'">Get started</button>
                    <a class="link-green centerAl" href="<?php echo $site_url_path; ?>pricing"><b>Build your custom growth plan</b></a>
                </div>
            </section>
            
        </div>
        
        
        <!--AI Sales Agents-->
        <section class="wrapper-846 grid3 mt40">

            <section class="box3">
                <img class="b3-icon" src="<?php echo $site_url_path; ?>images/bolt-round-ic.png" alt="">
                <h1 class="b3-title">AI Sales Agents (IVA)</h1>
                <span class="b3-subtitle f-18 black mb60"><b class="f-36">$99</b> / per month / billed annually</span>
                <ul class="b3-list2">
                    <li class="b3-l2-title">
                        <b>Additional AI Sales Agents (seats)</b><br>
                        <span class="f14">Monthly rates per agent. Billed annually.</span>
                    </li>
                    <li>2 - 9 seats: $99 per agent</li>
                    <li>10 - 24 seats: $79 per agent</li>
                    <li>25+ seats: $59 per agent</li>
                </ul>
            </section>

            <section class="box4 left">
                <ul class="box4-list">
                    <li><b>Included with every AI Sales Agent Plan</b></li>
                    <li>(1) AI Sales Agent</li>
                    <li>Reply detection + AI/ML intent detection</li>
                    <li>Connect a corporate mailbox</li>
                    <li>Send up to 1,000 emails / day / per agent</li>
                    <li>Engage unlimited prospects</li>
                    <li>Assign to unlimited Sequences</li>
                    <li>Salesforce and Sugar Sell connectors</li>
                    <li>Requires Enage Professional plan</li>
                </ul>
                <button class="btn-1 omnes bw280 mt20" onclick="location.href='https://app.leadfwd.com/signup/'">Get started</button>
            </section>

        </section><!--End AI Sales Agents-->
        
        
    </div><!--END Additional Features & Products-->
    
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
    
    <!--Modals-->
    <div class="modal-container">

            <!--Modal for big screens-->
            <div class="modal" id="hide-modal">

                <!--Modal top-->
                <div class="modal-top">
                    <div class="modal-top-get-started">
                        Start growing your pipeline today.<a class="button-style1 bs1-blue ml20" href="">Start engaging</a>
                    </div>
                    <div class="modal-top-package">
                        <span class="mt-seat">1 sales user included</span>
                        <span class="mt-title">Essentials</span>
                        <span class="mt-price">$39</span>
                        per month. billed annually.
                    </div>
                    <div class="modal-top-package mtp2">
                        <span class="mt-seat">3 sales users included</span>
                        <span class="mt-title">Professional</span>
                        <span class="mt-price">$249</span>
                        per month. billed annually.
                    </div>
                    <a href="javascript:void(0)" class="modal-close">&#10006;</a>
                </div>

                <!--Modal content-->
                <div class="modal-content">
                    <div class="modal-content-table">

                        <!--Features-->
                        <dl class="modal-section">
                            <dt>Features</dt>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Additional sales users
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>$24 / user/month</span></div>
                                <div class="ms-package msp2"><span>$59 / user/month</span></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Emails sent per day / per mailbox (max.)
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>600</span></div>
                                <div class="ms-package msp2"><span>1800</span></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Google Workspace or Custom IMAP/SMTP
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Reply detection
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <span class="ms-title">
                                   <img class="mst-ic" src="<?php echo $site_url_path; ?>images/modal-ic-1.png" width="25" alt="">
                                    Boost AI/ML
                                    <span class="ms-bun"></span>
                                </span>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                        </dl>

                        <!--Sales automation-->
                        <dl class="modal-section">
                            <dt>Sales automation</dt>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Multi-step email sequences
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Unlimited sequences and steps
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                   <img class="mst-ic" src="<?php echo $site_url_path; ?>images/modal-ic-2.png" width="15" alt="">
                                    Engage Sales Inbox
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Customizable follow-up schedule
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Personalize each email by recipient
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Open and click-thru tracking
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Email attachments
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>1 MB (max.)</span></div>
                                <div class="ms-package msp2"><span>6 MB (max.)</span></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Track attachment downloads
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Automated Human-like sending with AI
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Email templates and Asset storage
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Track recipients on your web site
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package">
                                    <img class="ms-dollar" src="<?php echo $site_url_path; ?>images/dollar.png" alt="">
                                    <span>Add-on <a href="">Discover</a></span>
                                </div>
                                <div class="ms-package msp2">
                                    <img class="ms-dollar" src="<?php echo $site_url_path; ?>images/dollar.png" alt="">
                                    <span>Add-on <a href="">Discover</a></span>
                                </div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Send SMS
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                        </dl>

                        <!--Connect and integrate-->
                        <dl class="modal-section">
                            <dt>Connect and integrate</dt>
                            <dd class="ms-w-submenu">
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Salesforce
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <ul class="ms-submenu">
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Sync and target Leads and contacts
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Sync and target Campaign Lists
                                            <img class="mst-ic2" src="<?php echo $site_url_path; ?>images/modal-ic-3.png" width="16" alt="">
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Sync opens, clicks and opt-outs
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Personalize with custom fields
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Personalize sender based on CRM record owner
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><span>--</span></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Create tasks using automation
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><span>--</span></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                </ul>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Built-in to Salesforce. Sales team never leaves CRM.
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row msr-submenu" href=""></a>
                                <div class="ms-title">
                                    <a href="">SugarEngage</a>&nbsp;for Sugar Sell
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <ul class="ms-submenu">
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Built-in to Sugar Sell. Sales teams never leave the CRM.
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Sync Accounts, Contacts, Leads, Targets and Target Lists
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Sync opens, clicks, bounces and opt-outs 
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Personalize with custom fields
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Personalize sender based on CRM record owner
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><span>--</span></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Create tasks, calls or meetings with Action Steps
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><span>--</span></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Email signature templates
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><span>--</span></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Sync CRM email templates
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><span>--</span></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                    <li>
                                        <a class="ms-row" href=""></a>
                                        <div class="ms-title">
                                            Account-based Sales for Accounts and Opportunities
                                            <span class="ms-bun"></span>
                                        </div>
                                        <div class="ms-package"><span>--</span></div>
                                        <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                    </li>
                                </ul>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Zendesk
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    GoToWebinar
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Olark
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Livechat
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    SuiteCRM
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    BCC to CRM
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Access&nbsp;<u>100+ million</u>&nbsp;qualified accounts and verified contacts
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package">
                                    <img class="ms-dollar" src="<?php echo $site_url_path; ?>images/dollar.png" alt="">
                                    <span>Add-on <a href="">Prospect</a></span>
                                </div>
                                <div class="ms-package msp2">
                                    <span class="ms-font-fix">100 Email Finder credits<br>per user / per month</span>
                                </div>
                            </dd>
                        </dl>

                        <!--Deliverability and compliance-->
                        <dl class="modal-section">
                            <dt>Deliverability and compliance</dt>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Global suppression list
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Automated opt-out management
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Hard and soft bounce management
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    SPF, DKIM and CNAME personalization
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Empty custom field fallback
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Privacy Guard for GDPR compliance
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    CANSPAM compliance built-in
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                        </dl>

                        <!--Team management-->
                        <dl class="modal-section">
                            <dt>Team management</dt>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Unlimited platform users
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Custom permissions and roles
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Send on behalf of your sales team
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Multiple mailbox support for single sales user(s)
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Email signature templates
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                        </dl>

                        <!--Onboarding and support-->
                        <dl class="modal-section">
                            <dt>Onboarding and support</dt>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    24/7 helpdesk access
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Training videos and live webinars
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Email and chat support
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Dedicated Customer Success Manager
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                            <dd>
                                <a class="ms-row" href=""></a>
                                <div class="ms-title">
                                    Personalized onboarding session
                                    <span class="ms-bun"></span>
                                </div>
                                <div class="ms-package"><span>--</span></div>
                                <div class="ms-package msp2"><img class="check" src="<?php echo $site_url_path; ?>images/check.png" alt="yes"></div>
                            </dd>
                        </dl>
                    </div>
                </div>

            </div><!--END Modal for big screens-->


            <!--Modal for small screens-->
            <div class="modal-s">

               <!--Modal top-->
               <div class="modal-top-s-cols">
                  <!--Left-->
                   <div class="modal-top-s">
                      <a href="javascript:void(0)" class="modal-close">&#10006;</a>
                       <div class="mt-title">
                           Essentials <span>1 seat</span>
                       </div>
                       <span class="mt-price">$39</span>
                       <span>per month. billed annually.</span>
                       <span><a class="button-style1 bs1-blue mt20" href="https://app.leadfwd.com/signup/">Get started</a></span>
                       <span class="mt-show">
                           <a id="mt-starter-hide" href="javascript:void(0)">Hide details</a>
                           <a id="mt-starter-show" href="javascript:void(0)">Show details</a>
                       </span>
                   </div>

                   <!--Right-->
                   <div class="modal-top-s">
                      <a href="javascript:void(0)" class="modal-close">&#10006;</a>
                       <div class="mt-title">
                           Professional <span>3 seats</span>
                       </div>
                       <span class="mt-price">$249</span>
                       <span>per month. billed annually.</span>
                       <span><a class="button-style1 bs1-blue mt20" href="https://app.leadfwd.com/signup/">Get started</a></span>
                       <span class="mt-show">
                           <a id="mt-team-hide" href="javascript:void(0)">Hide details</a>
                           <a id="mt-team-show" href="javascript:void(0)">Show details</a>
                       </span>
                   </div>
               </div><!--END Modal top-->


               <!--Modal content-->
               <div class="modal-content-s-cols">
                   <!--Left-->
                   <div class="modal-content-s">
                       <dl id="mt-starter-content">
                           <dt>Features</dt>
                           <dd><a href="javascript:void(0)">$24/ additional sales user/month</a></dd>
                           <dd>600 Emails sent per day / per mailbox (max.)</dd>
                           <dd><a href="javascript:void(0)">Google Workspace or Custom IMAP/SMTP</a></dd>
                           <dd><a href="javascript:void(0)">Reply detection</a></dd>
                           <dd class="difference"><a href="javascript:void(0);">Boost AI/ML</a></dd>

                           <dt>Sales automation</dt>
                           <dd><a href="javascript:void(0)">Multi-step email sequences</a></dd>
                           <dd><a href="javascript:void(0)">Unlimited sequences and steps</a></dd>
                           <dd class="difference"><a href="javascript:void(0)">Engage Sales Inbox</a></dd>
                           <dd><a href="javascript:void(0)">Customizable follow-up schedule</a></dd>
                           <dd><a href="javascript:void(0)">Personalize each email by recipient</a></dd>
                           <dd><a href="javascript:void(0)">Open and click-thru tracking</a></dd>
                           <dd><a href="javascript:void(0)">1 MB Email attachments</a></dd>
                           <dd class="difference"><a href="javascript:void(0)">Track attachment downloads</a></dd>
                           <dd><a href="javascript:void(0)">Automated Human-like sending with AI</a></dd>
                           <dd><a href="javascript:void(0)">Email templates and Asset storage</a></dd>
                           <dd><a href="javascript:void(0)">Track recipients on your web site</a></dd>
                           <dd class="difference">Send SMS</dd>

                           <dt>Connect and integrate</dt>
                           <dd><a href="javascript:void(0)">Salesforce</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync and target Leads and contacts</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync and target Campaign Lists</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync opens, clicks and opt-outs</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Personalize with custom fields</a></dd>
                               <dd class="in difference">Personalize sender based on CRM record owner</dd>
                               <dd class="in difference">Create tasks using automation</dd>
                           
                           <dd><a href="javascript:void(0)">Built-in to Salesforce. Sales team never leaves CRM</a></dd>
                                   
                           <dd><a href="javascript:void(0)">SugarEngage for Sugar Sell</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Built-in to Sugar Sell. Sales teams never leave the CRM.</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync Accounts, Contacts, Leads, Targets and Target Lists</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync opens, clicks, bounces and opt-outs</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Personalize with custom fields</a></dd>
                               <dd class="in difference">Personalize sender based on CRM record owner</dd>
                               <dd class="in difference">Create tasks, calls or meetings with Action Steps</dd>
                               <dd class="in difference">Email signature templates</dd>
                               <dd class="in difference">Sync CRM email templates</dd>
                               <dd class="in difference">Account-based Sales for Accounts and Opportunities</dd>
                           <dd class="difference">Zendesk</dd>
                           <dd class="difference">GoToWebinar</dd>
                           <dd class="difference">Olark</dd>
                           <dd class="difference">Livechat</dd>
                           <dd><a href="javascript:void(0)">SuiteCRM</a></dd>
                           <dd class="difference">BCC to CRM</dd>
                           <dd><a href="javascript:void(0)">Access 100+ million qualified accounts and verified contacts</a></dd>

                           <dt>Deliverability and compliance</dt>
                           <dd><a href="javascript:void(0)">Global suppression list</a></dd>
                           <dd><a href="javascript:void(0)">Automated opt-out management</a></dd>
                           <dd><a href="javascript:void(0)">Hard and soft bounce management</a></dd>
                           <dd><a href="javascript:void(0)">SPF, Sender ID, DKIM and CNAME personalization</a></dd>
                           <dd><a href="javascript:void(0)">Empty custom field fallback</a></dd>
                           <dd><a href="javascript:void(0)">Privacy Guard for GDPR compliance</a></dd>
                           <dd><a href="javascript:void(0)">CANSPAM compliance built-in</a></dd>

                           <dt>Team management</dt>
                           <dd><a href="javascript:void(0)">Unlimited platform users</a></dd>
                           <dd><a href="javascript:void(0)">Custom permissions and roles</a></dd>
                           <dd class="difference">Send on behalf of your sales team</dd>
                           <dd class="difference">Multiple mailbox support for single sales user(s)</dd>
                           <dd class="difference">Email signature templates</dd>

                           <dt>Onboarding and support</dt>
                           <dd><a href="">24/7 helpdesk access</a></dd>
                           <dd><a href="">Training videos and live webinars</a></dd>
                           <dd><a href="">Email and chat support</a></dd>
                           <dd class="difference">Dedicated Customer Success Manager</dd>
                           <dd class="difference">Personalized onboarding session</dd>

                       </dl>
                   </div>

                   <!--Right-->
                   <div class="modal-content-s">
                       <dl id="mt-team-content">
                           <dt>Features</dt>
                           <dd><a href="javascript:void(0);">$59/ additional sales user/month</a></dd>
                           <dd>1800 Emails sent per day / per mailbox (max.)</dd>
                           <dd><a href="javascript:void(0);">Google Workspace or Custom IMAP/SMTP</a></dd>
                           <dd><a href="javascript:void(0);">Reply detection</a></dd>
                           <dd><a href="javascript:void(0);">Boost AI/ML</a></dd>

                           <dt>Sales automation</dt>
                           <dd><a href="javascript:void(0)">Multi-step email sequences</a></dd>
                           <dd><a href="javascript:void(0)">Unlimited sequences and steps</a></dd>
                           <dd><a href="javascript:void(0)">Engage Sales Inbox</a></dd>
                           <dd><a href="javascript:void(0)">Customizable follow-up schedule</a></dd>
                           <dd><a href="javascript:void(0)">Personalize each email by recipient</a></dd>
                           <dd><a href="javascript:void(0)">Open and click-thru tracking</a></dd>
                           <dd><a href="javascript:void(0)">6 MB Email attachments</a></dd>
                           <dd><a href="javascript:void(0)">Track attachment downloads</a></dd>
                           <dd><a href="javascript:void(0)">Automated Human-like sending with AI</a></dd>
                           <dd><a href="javascript:void(0)">Email templates and Asset storage</a></dd>
                           <dd><a href="javascript:void(0)">Track recipients on your web site</a></dd>
                           <dd>Send SMS</dd>

                           <dt>Connect and integrate</dt>
                           <dd><a href="javascript:void(0)">Salesforce</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync and target Leads and contacts</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync and target Campaign Lists</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync opens, clicks and opt-outs</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Personalize with custom fields</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Personalize sender based on CRM record owner</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Create tasks using automation</a></dd>
                           <dd><a href="javascript:void(0)">Built-in to Salesforce. Sales team never leaves CRM</a></dd>
                           <dd><a href="javascript:void(0)">SugarEngage for Sugar Sell</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Built-in to Sugar Sell. Sales teams never leave the CRM.</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync Accounts, Contacts, Leads, Targets and Target Lists</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync opens, clicks, bounces and opt-outs</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Personalize with custom fields</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Personalize sender based on CRM record owner</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Create tasks, calls or meetings with Action Steps</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Email signature templates</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Sync CRM email templates</a></dd>
                               <dd class="in"><a href="javascript:void(0)">Account-based Sales for Accounts and Opportunities</a></dd>
                           <dd><a href="javascript:void(0)">Zendesk</a></dd>
                           <dd><a href="javascript:void(0)">GoToWebinar</a></dd>
                           <dd><a href="javascript:void(0)">Olark</a></dd>
                           <dd><a href="javascript:void(0)">Livechat</a></dd>
                           <dd><a href="javascript:void(0)">SuiteCRM</a></dd>
                           <dd><a href="javascript:void(0)">BCC to CRM</a></dd>
                           <dd><a href="javascript:void(0)">Access 100+ million qualified accounts and verified contacts</a></dd>

                           <dt>Deliverability and compliance</dt>
                           <dd><a href="">Global suppression list</a></dd>
                           <dd><a href="">Automated opt-out management</a></dd>
                           <dd><a href="">Hard and soft bounce management</a></dd>
                           <dd><a href="">SPF, Sender ID, DKIM and CNAME personalization</a></dd>
                           <dd><a href="">Empty custom field fallback</a></dd>
                           <dd><a href="">Privacy Guard for GDPR compliance</a></dd>
                           <dd><a href="">CANSPAM compliance built-in</a></dd>

                           <dt>Team management</dt>
                           <dd><a href="javascript:void(0)">Unlimited platform users</a></dd>
                           <dd><a href="javascript:void(0)">Custom permissions and roles</a></dd>
                           <dd><a href="javascript:void(0)">Send on behalf of your sales team</a></dd>
                           <dd><a href="javascript:void(0)">Multiple mailbox support for single sales user(s)</a></dd>
                           <dd><a href="javascript:void(0)">Email signature templates</a></dd>

                           <dt>Onboarding and support</dt>
                           <dd><a href="">24/7 helpdesk access</a></dd>
                           <dd><a href="">Training videos and live webinars</a></dd>
                           <dd><a href="">Email and chat support</a></dd>
                           <dd><a href="">Dedicated Customer Success Manager</a></dd>
                           <dd><a href="">Personalized onboarding session</a></dd>
                       </dl>
                   </div>
               </div><!--END Modal content-->

            </div><!--END Modal for small screens-->

        </div><!--END Modals-->

   
    <!--Footer-->
    <?php include 'includes/footer.php';?>

   
    <!--Navigation-->   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.16.0/feather.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/navigation.js"></script>
    
    <script src="<?php echo $site_url_path; ?>js/swiper-bundle.js"></script>
    <script src="<?php echo $site_url_path; ?>js/swiper-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    
    <!--Typewritter-->
    <script>
        // set up text to print, each item in array is new line
        var aText = new Array(
            "Nurture cold prospects into new customers."
        );
        var iSpeed = 70; // time delay of print out
        var iIndex = 0; // start printing array at this posision
        var iArrLength = aText[0].length; // the length of the text array
        var iScrollAt = 20; // start scrolling up at this many lines

        var iTextPos = 0; // initialise text position
        var sContents = ''; // initialise contents variable
        var iRow; // initialise current row

        function typewriter() {
            sContents = ' ';
            iRow = Math.max(0, iIndex - iScrollAt);
            var destination = document.getElementById("typedtext");

            while (iRow < iIndex) {
                sContents += aText[iRow++] + '<br />';
            }
            destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "";
            if (iTextPos++ == iArrLength) {
                iTextPos = 0;
                iIndex++;
                if (iIndex != aText.length) {
                    iArrLength = aText[iIndex].length;
                    setTimeout("typewriter()", 500);
                }
            } else {
                setTimeout("typewriter()", iSpeed);
            }
        }
        
        typewriter();
    </script>
    
    
    <script> </script>
    <!--chrome bug-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
</body>

</html>
