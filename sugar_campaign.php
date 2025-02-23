<?php
$active_top_bar = 'none';
$site_url_path = '/';

include_once 'includes/top_data.php';

//arrays
$pp = 0;
foreach ($stripe_products as $master_product_key => $master_product)
{
	if ($master_product['type']=='campaign')
		$pp++;
}
$ttl = $pp/2;
$pp = $rr = 0;
$campaign_string = '';
$campaign_credits = array();
foreach ($stripe_products as $master_product_key => $master_product)
{
	if ($master_product['type']=='campaign')
	{
		$rr++;
        $campaign_credits[$master_product['credits']][] = $master_product['cost'];
        if ($rr % 2 == 1)
        {
			$pp++;
            $campaign_string .= '
                <li class="numbers" style="'.(($pp==1) ? 'font-weight: 600; ' : '').(($pp==$ttl) ? 'right: 0; transform: translateX(50%);' : 'left: '.(($pp==1) ? '0' : intval(($pp-1)*100/($ttl-1)).'%')).'" data-id="'.$master_product['cost'].'">'.$master_product['credits'].'</li>';
        }
	}
}
?>
<!doctype html>
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
    <link rel="stylesheet" href="https://use.typekit.net/vnc6wft.css">
    <link rel="stylesheet" href="https://use.typekit.net/pxu2bwp.css" />
    <link rel="stylesheet" href="https://use.typekit.net/ycj0dcm.css">
    
    <link href="<?php echo $site_url_path; ?>css/jquery-ui.css" rel="stylesheet" type="text/css">
    
    <link href="https://downloads.intercomcdn.com/i/o/223532/380d7e9f040321429b91a359/2c4f86a043ac0a9cdf792273f8850b69.png" rel="shortcut icon" type="image/png">
    
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd.js"></script>
    <script>
        var campaignString = '<?php echo json_encode($campaign_credits); ?>';
        var stripeProducts = '<?php echo json_encode($stripe_products); ?>';
    </script>
</head>

<body>
    <?php include 'includes/analytics_body.php';?>
    
    <!--Top Bar-->
    <?php include 'includes/bar_v2.php';?>
    
    
    <!--HEADER-->
    <header class="light-blue-bg">
        
        <div class="flex2col">
            <div class="header-text-left w48p">
                <span class="f36">Reach your audience at scale<br>with personalized marketing campaigns.</span>
                Combining the power of outbound email marketing and automation, Campaign drives growth through intelligent lead capture, scalable email campaigns and hyper-targeted customer journeys. 
            </div>
            
            <div class="header-img-right2">
                <img src="<?php echo $site_url_path; ?>images/campaign-graph2.png" width="636" alt="">
                
                <ul class="ht3-box w220 pos1 v2">
                    <li>
                        <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/katie-g.png" alt="">
                    </li>
                    <li class="ht3-box-title">Katie G <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                    <li class="ht3-box-details">Clicked <span>Email #1</span> in Palo Alto, CA </li>
                </ul>
                
                <ul class="ht3-box w220 pos2 v2">
                    <li>
                        <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/katie-g.png" alt="">
                    </li>
                    <li class="ht3-box-title">Katie G <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                    <li class="ht3-box-details">Clicked <span>Email #1</span> in Palo Alto, CA </li>
                </ul>
                
                <ul class="ht3-box w220 pos3 v2">
                    <li>
                        <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/katie-g.png" alt="">
                    </li>
                    <li class="ht3-box-title">Katie G <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                    <li class="ht3-box-details">Clicked <span>Email #2</span> in Palo Alto, CA </li>
                </ul>
                
                <ul class="ht3-box w220 pos4">
                    <li>
                        <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/katie-g.png" alt="">
                    </li>
                    <li class="ht3-box-title">Katie G <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                    <li class="ht3-box-details">Clicked <span>Email #2</span> in Palo Alto, CA </li>
                </ul>
                
            </div>
            
        </div>
        
    </header><!--END HEADER-->
    
    
    <div class="wrapper-1160 padd-top80">
          
          <p class="grid1-title">
              <span class="grid1-subtitle">SUGAR CAMPAIGN: FOR MARKETING TEAMS</span>
              Deliver high-volume, targeted email engagement<br>
              or trigger hyper-personalized customer journeys.
          </p>
           
        <!--Row-->
        <article class="grid1 p0">

           <section>
               <span>Powerful email builder</span>
               Create emails using your own HTML code or use a pre-designed reponsive layout with our flexible drag n’ drop builder.
           </section>

           <section>
               <span>Personalization</span>
               Make every email or subject-line unique and relevant using custom data fields, such as first name or profile insights like interests or location.
           </section>
           
           <b></b>

           <section>
               <span>A/B testing</span>
               Boost your email conversion rates by delivering the most optimal version of your email message to the largest segment of your targets.
           </section>

           <section>
               <span>Analytics suite</span>
               Geography, device, browser, platform, click frequency, popular links, opens, bot detection, website page visits and so much more.
           </section>
           
           <b></b>

           <section>
               <span>Landing pages and forms</span>
               Grow your contact list with organic signup forms that can be embedded on your website with HTML code or use a secure hosted link.
           </section>

           <section>
               <span>Shorter forms, more insights</span>
               Drive higher conversion rates with simpler forms and less fields. Campaign delivers dozens of lead insights from a simple email address.
           </section>
           
           <b></b>

           <section>
               <span>Automated journey <span class="grid1-badge">PRO</span> </span>
               Trigger a time release automation series with personalized messaging, when contacts meet specific rules and conditions. 
           </section>

           <section>
               <span>Contact manager and tagging</span>
               Import, manage and analyze all of your Accounts and contacts in one place. Create groups of contacts using tags or segments for advanced campaign targeting.
           </section>

           <section>
               <span>Unlimited inbox previews</span>
               Preview your emails before sending to ensure they consistently look great in more than 60 mobile and desktop clients. 
           </section>

           <section>
               <span>Smart segments <span class="grid1-badge">PRO</span> </span>
               Create and target custom audiences based on custom data fields or based on tracked behavior and profile insights.
           </section>

           <section>
               <span>Track site visits <span class="grid1-badge">PRO</span> </span>
               Identify email recipients and record their behavior on your website after they click-thru your emails. 
           </section>

           <section>
               <span>Snooze <span class="grid1-badge">PRO</span> </span>
               Reduce unsubscribe rates by giving contacts the option to temporarily snooze email deliveries for a set period of time.
           </section>

        </article><!--END Row-->

    </div>
    
    
    <!--On blue w/ texture -->
    <section class="on-grad-texture">
        <span class="f36">Get up and running in just minutes.</span>
        <button class="blue-btn mtb30" onclick="location.href='https://app.leadfwd.com/signup/'">Get started</button>
        <div>Immediate acces and <span class="normal-txt">no credit card required.</span></div>
        <img class="texture-roi" src="<?php echo $site_url_path; ?>images/roi-mailman-standing.png" alt="">
    </section>
    <!--END On blue w/ texture -->
    
    
    <!--3 col presentation-->
    <div class="container-gray">
        <div class="wrapper-1010">
            
            <h1 class="mt55b35">
                One source of ‘real-time’ truth.
                <span>Sugar Campaign lives inside Sugar Sell and provides the most in-depth data integration on the market.</span>
            </h1>
        
            <!--Row-->
            <article class="grid2">
                <section>
                    <span>One source of real-time truth</span>
                    Avoid clunky integrations that require maintaining separate databases. Our real-time, ‘mirroring’ sync ensures only one source of truth, your CRM.
                </section>
                <section>
                    <span>Sync any data fields</span>
                    Administrators have complete control over which fields in both SugarCRM and LeadFWD can receive updates during syncing.
                </section>
                <section>
                    <span>User mapping</span>
                    Manage user roles across both platforms. User account ownership in SugarCRM is automatically carried over to LeadFWD.
                </section>
                <section>
                    <span>Converted-lead detection</span>
                    LeadFWD knows when a lead is converted to a contact, and automatically syncs and updates the new contact.
                </section>
                <section>
                    <span>Manual syncing</span>
                    You are in complete control when it comes to syncing data between LeadFWD and Sugar. You can choose to sync manually at anytime.
                </section>
                <section>
                    <span>Sync audit log</span>
                    Sync log provides complete transparency, with the ability to easily retry failed syncs and troubleshoot errors, should they arise.
                </section>
            </article>
            <!--End Row-->
    
    </div>
    </div><!--3 col presentation-->
    
    
    <!--Automate your Customer Journey-->
    <div class="to-center mt30">
        <span class="grid1-badge mb12">PRO</span>
    </div>
    <h1>
        Automate your Customer Journey
        <span>Campaign integrates seamlessly into Sugar Sell, runs autonomously in the background, and takes your entire customer journey to the next level.</span>
    </h1>
    
    
    <article class="wrapper-1090 layout-6">
       
        <div class="header-img-right2 relative sugar-campaign">
            <img src="<?php echo $site_url_path; ?>images/sugar-campaign-graph2.png" class="block" width="647" alt="">

            <ul class="ht3-box w220 pos8 hide1">
                <li>
                    <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/katie-g.png" alt="">
                </li>
                <li class="ht3-box-title">Katie G <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                <li class="ht3-box-details">Clicked <span>Email #1</span> in Palo Alto, CA </li>
            </ul>

            <ul class="ht3-box w220 pos9 hide1">
                <li>
                    <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/katie-g.png" alt="">
                </li>
                <li class="ht3-box-title">Katie G <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                <li class="ht3-box-details">Clicked <span>Email #2</span> in Palo Alto, CA </li>
            </ul>

            <ul class="ht3-box w220 pos10 hide1">
                <li>
                    <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/katie-g.png" alt="">
                </li>
                <li class="ht3-box-title">Katie G <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                <li class="ht3-box-details">Clicked <span>Email #2</span> in Palo Alto, CA </li>
            </ul>

            <ul class="ht3-box w220 pos11 hide1">
                <li>
                    <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/katie-g.png" alt="">
                </li>
                <li class="ht3-box-title">Katie G <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                <li class="ht3-box-details">Clicked <span>Email #2</span> in Palo Alto, CA </li>
            </ul>
        </div>
        
        <div class="l6-right">
           
            <h3 class="mt0">Enroll and target</h3>
            <ul class="faq w100p orange">
                <li>
                    <span class="faq-title2">Accounts <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        <span>Import and sync (maintain) the Accounts data object and custom fields to target and reach with Campaign. Sugar Campaign will also automatically sync and identify relationships between Accounts + Contacts and Accounts + Opportunities (when enabled).</span>
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Contacts <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Import and sync (maintain) the Contacts data object and custom fields to target and reach with Campaign. Optionally import and sync Account-level data when a relationship exists between an Account Bean ID and a Contact. Account-level data is stored as custom fields for each Contact record.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Leads <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Import and sync (maintain) the Leads data object and custom fields to target and reach with Campaign.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Prospects <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Import and sync (maintain) the Prospects data object and custom fields to target and reach with Campaign.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Target lists <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Import and sync (maintain) one or many Target List(s) data objects including related accounts, contacts, leads and prospects to target and reach with Campaign.
                    </div>
                </li>
            </ul>
           
            <h3 class="mt80">Conditional building blocks</h3>
            <ul class="faq w100p orange">
                <li>
                    <span class="faq-title2">Custom fields <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger intelligent automation tracks based on custom field values for leads or contacts.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Tasks <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger intelligent automation tracks based on Task entries related to leads or contacts, including field-level data contained within a task entry.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Opportunities <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger intelligent automation tracks based on Opportunity entries related to contacts or accounts, including field-level data contained within an Opportunity.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Target Lists <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger intelligent automation tracks based on Accounts, Contacts, Leads or Prospects having (or not having) an assignment to a Target List(s).
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Calls <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger intelligent automation tracks based on a Call data object entry that’s related to a Accounts, Contacts, Leads or Prospects. Build logic around default Call data parameters or custom field values contained in the Call entry.
                    </div>
                </li>
                <!--<li class="link">
                    <a href="#">See all condition blocks</a>
                </li>-->
            </ul>
           
            <h3 class="mt80">Action blocks</h3>
            <ul class="faq w100p orange mb50">
                <li>
                    <span class="faq-title2">Update CRM data fields <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger custom field updates for specific leads or contacts that match conditional rule(s) for your automation track.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Create a task <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger a new task, assign a CRM user and relate the entry to the specific lead or contact that matches a conditional rule(s) within an automation track.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Schedule a Call <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger a new Call, assign a CRM user and relate the entry to the specific lead or contact that matches a conditional rule(s) within an automation track.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Schedule a Meeting <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger a new Call, assign a CRM user and relate the entry to the specific lead or contact that matches a conditional rule(s) within an automation track.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Create an Opportunity <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Trigger a new Opportunity and relate the entry to the specific Account or Contact that matches a conditional rule(s) within an automation track.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Assign record owner <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Set a CRM record owner for a lead or contact that matches a conditional rule(s) within an automation track.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Add to Campaign <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Create a relationship between a CRM Campaign and a lead or contact that matches a conditional rule(s) within an automation track.
                    </div>
                </li>
                <li>
                    <span class="faq-title2">Personalized email <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="26" alt=""></span>
                    <a class="toggle open" href="javascript:void(0)">+</a>
                    <a class="toggle close" href="javascript:void(0)">-</a>
                    <div class="faq-answers">
                        Send an email template (Text or Multipart/HTML) with dynamic personalization to a lead or contact that matches a conditional rule(s) within an automation track.
                    </div>
                </li>
                <!--<li class="link">
                    <a href="#">See all action blocks</a>
                </li>-->
            </ul>
            
        </div>
        
    </article><!--END Automate your Customer Journey-->
    
    
    <!--Deliverability, trust & compliance-->
    <article class="layout-5">
        <h1>
            Deliverability, trust &amp; compliance
            <span>Build and maintain a strong sender reputation with best practices and built-in compliance.</span>
        </h1>

        <ul class="grid4 left-txt">
            <li>
                <span>Authentication</span>
                Increase deliverability and trust by securely signing (DKIM) every email you send with your own domain.
            </li>
            <li>
                <span>Branded links</span>
                Brand every tracking link in your email message with the same domain that’s being used in the From: sender header
            </li>
            <li>
                <span>Data hygiene</span>
                We’ll take good care of your sender reputation by automatically processing hard bounces, opt-out requests and suppressing contacts that mark your message as spam.
            </li>
            <li>
                <span>Privacy Guard</span>
                In the age of GDPR, privacy can’t be an after-thought. Customer data needs to be protected and accessible, at every step of the engagement. <a href="<?php echo $site_url_path; ?>solutions/privacy-guard">Learn more</a>
            </li>
        </ul>

    </article> <!--END Deliverability, trust & compliance-->
    
    
    <!--Connect-->
    <?php include 'includes/connect.php';?>
    
    
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
