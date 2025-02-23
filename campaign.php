<?php
$active_top_bar = 'campaign';
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

<body ontouchstart="">
   <?php include 'includes/analytics_body.php';?>
    
    <!--Top Bar-->
    <?php include 'includes/bar_v2.php';?>
    
    
    
    <!--HEADER-->
    <header class="light-blue-bg">
        
        <div class="flex2col">
            <div class="header-text-left w48p">
                <span class="f36">Reach your audience at scale with personalized marketing campaigns.</span>
                Combining the power of outbound email marketing and automation, Campaign drives growth through scalable email campaigns, intelligent lead capture and automated nurturing.
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
                    <li class="ht3-box-details">Clicked <span>Email #2</span> in Palo Alto, CA </li>
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
              <span class="grid1-subtitle">CAMPAIGN: FOR MARKETING TEAMS</span>
              Deliver high-volume, targeted email blasts or<br>
              trigger hyper-personalized email journeys.
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
               <span>Unlimited sending</span>
               Connect with more prospects in a personalized way. Automate follow up emails, CRM tasks and calls, LinkedIn connections and custom reminders
           </section>
           
           <b></b>

           <section>
               <span>Automation journey <span class="grid1-badge">PRO</span> </span>
               Trigger a time release email series with powerful automation, when contacts meet specific rules and conditions. 
           </section>

           <section>
               <span>Contact manager and tagging</span>
               Import, manage and analyze all of your Accounts and contacts in one place. Create groups of contacts using tags or segments for advanced campaign targeting.
           </section>

           <b></b>

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
    </section>
    <!--END On blue w/ texture -->
    
    
    <!--Campaign for CRM-->
    <article class="layout-4 mb0">
       <h1>
           Campaign inside your CRM
           <span>Campaigns and insights delivered where your sales team already lives. The CRM.</span>
       </h1>
       
    <!--Video presentation for BIG screens-->
    <div class="flex1 f1-w450">
       <ul class="l4-sub-nav flex1__links">
           <li class="active">Salesforce</li>
           <li>Sugar Sell</li>
           <li>SuiteCRM</li>
       </ul>

       <div class="f1-img">
           <img src="<?php echo $site_url_path; ?>images/salesforce-crm.png" width="1146" height="463" alt="">
           <span class="l4-link-container">
               <a class="l4-link v2" href="<?php echo $site_url_path; ?>solutions/salesforce">Learn more</a>
           </span>
       </div>

       <div class="f1-img">
           <img src="<?php echo $site_url_path; ?>images/sugarsell-crm.png" width="1146" height="463" alt="">
           <span class="l4-link-container">
               <a class="l4-link v2" href="<?php echo $site_url_path; ?>solutions/sugar-engage">Learn more</a>
           </span>
       </div>
       
       <div class="f1-img">
           <img src="<?php echo $site_url_path; ?>images/engage-crm-img1.png" width="1146" height="463" alt="">
           <span class="l4-link-container">
               <a class="l4-link v2" href="<?php echo $site_url_path; ?>solutions/suitecrm">Learn more</a>
           </span>
       </div>
    </div><!--END Video presentation for BIG screens-->
       
    <!--Video presentation for SMALL screens-->
    <ul class="faq f1-w450 f-16 no-padd">
        <li>
            <span class="pb10">Salesforce</span>
            <a class="toggle pb10 open" href="javascript:void(0)">+</a>
            <a class="toggle pb10 close" href="javascript:void(0)">-</a>
            <div class="faq-answers">
                <div class="f1-img1 f1-img">
                    <img src="<?php echo $site_url_path; ?>images/salesforce-crm.png" width="1146" height="463" alt="">
                    <span class="l4-link-container">
                        <a class="l4-link v2" href="#">Learn more</a>
                    </span>
                </div>
            </div>
        </li>
        <li>
            <span class="pb10">Sugar Sell</span>
            <a class="toggle pb10 open" href="javascript:void(0)">+</a>
            <a class="toggle pb10 close" href="javascript:void(0)">-</a>
            <div class="faq-answers">
                <div class="flex1-img f1-img2 f1-img">
                    <img src="<?php echo $site_url_path; ?>images/sugarsell-crm.png" width="1146" height="463" alt="">
                    <span class="l4-link-container">
                        <a class="l4-link v2" href="#">Learn more</a>
                    </span>
                </div>
            </div>
        </li>
        <li>
            <span class="pb10">SuiteCRM</span>
            <a class="toggle pb10 open" href="javascript:void(0)">+</a>
            <a class="toggle pb10 close" href="javascript:void(0)">-</a>
            <div class="faq-answers">
                <div class="flex1-img f1-img3 f1-img">
                    <img src="<?php echo $site_url_path; ?>images/engage-crm-img1.png" width="1146" height="463" alt="">
                    <span class="l4-link-container">
                        <a class="l4-link v2" href="#">Learn more</a>
                    </span>
                </div>
            </div>
        </li>
    </ul><!--END Video presentation for SMALL screens-->
        
    </article><!--END Campaign for CRM-->
    
    
    <!--Deliverability, trust & compliance-->
    <article class="layout-5">
        <h1>
           Deliverability, trust &amp; compliance
           <span>Engage Boost automates administrative tasks using machine learning, while your sales reps focus on closing deals.</span>
       </h1>
       
       <ul class="grid4">
           <li>
               <span>Authentication</span>
               Increase deliverability and trust by securely signing (DKIM) every email you send with your own domain.
           </li>
           <li>
               <span>Branded links</span>
               Brand every tracking link in your email message with the same domain that’s being used in the From: sender header.
           </li>
           <li id="sales-inbox">
               <span>Data hygiene</span>
               We’ll take good care of your sender reputation by automatically processing hard bounces, opt-out requests and suppressing contacts that mark your message as spam.
           </li>
           <li>
               <span>Privacy Guard</span>
               In the age of GDPR, privacy can’t be an after-thought. Customer data needs to be protected and accessible, at every step of the engagement. <a href="<?php echo $site_url_path; ?>solutions/privacy-guard">Learn more</a>
           </li>
       </ul>

    </article> <!--Deliverability, trust & compliance-->
    
    
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
   
    <!--Chrome bug-->
    <script> </script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
</body>

</html>
