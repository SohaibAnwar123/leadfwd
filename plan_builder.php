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
$engage_credits = array();
foreach ($stripe_products as $master_product_key => $master_product)
{
    if ($master_product['type']=='engage')
	{
        $engage_credits[$master_product['credits']] = $master_product['cost'];
    }
}
$ai_credits = array();
foreach ($stripe_products as $master_product_key => $master_product)
{
    if ($master_product['type']=='ai')
	{
        $pp = 0;
        foreach ($master_product['credits'] as $credits)
        {
            $ai_credits[] = array($credits, $master_product['cost'][$pp]);
            $pp++;
        }
    }
}
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
                <li class="numbers" style="'.(($pp==1) ? 'font-weight: 600; ' : '').(($pp==$ttl) ? 'right: 0; transform: translateX(40%);' : 'left: '.(($pp==1) ? '0' : intval(($pp-1)*100/($ttl-1)).'%')).'" data-id="'.$master_product['cost'].'">'.$master_product['credits'].'</li>';
        }
	}
}
$pp = 0;
foreach ($stripe_products as $master_product_key => $master_product)
{
	if ($master_product['type']=='discover')
		$pp++;
}
$ttl = $pp;
$pp = 0;
$discover_string = '';
$discover_credits = array();
foreach ($stripe_products as $master_product_key => $master_product)
{
	if ($master_product['type']=='discover')
	{
		$pp++;
		$discover_credits[$master_product['credits']] = $master_product['cost'];
		$discover_string .= '
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
    <link href="<?php echo $site_url_path; ?>css/plan_builder.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="https://use.typekit.net/kep1jfm.css">
    <link rel="stylesheet" href="https://use.typekit.net/ymb4dcp.css">
    <link rel="stylesheet" href="https://use.typekit.net/pxu2bwp.css" />
    
    <link href="<?php echo $site_url_path; ?>css/jquery-ui.css" rel="stylesheet" type="text/css">
    
    <link href="https://downloads.intercomcdn.com/i/o/223532/380d7e9f040321429b91a359/2c4f86a043ac0a9cdf792273f8850b69.png" rel="shortcut icon" type="image/png">
    
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd.js"></script>
    <script>
        var prospectString = '<?php echo json_encode($prospect_credits); ?>';
        var campaignString = '<?php echo json_encode($campaign_credits); ?>';
        var discoverString = '<?php echo json_encode($discover_credits); ?>';
        var stripeProducts = '<?php echo json_encode($stripe_products); ?>';
    </script>
</head>


<body>
    <?php include 'includes/analytics_body.php';?>
    
    <!--Top Bar-->
    <?php include 'includes/top_bar.php';?>
    
    <!--Main bar-->
    <?php include 'includes/main_bar.php';?>
    
    
    <!--Wrapper-->
    <div class="wrapper p0 no-header">
        
        <!--Plan Builder wrapper-->
        <div class="pb--wrapper">
            
            <?php include 'plan_builder_inner.php'; ?>
            
            <!-- =========== Plan builder RIGHT-->
            <div class="pb--right">
               
                <div class="pb--features default">
                    <ul>
                       <li><img src="<?php echo $site_url_path; ?>images/pb--features-default.png" width="232" alt=""></li>
                        <li class="title">Build your own</li>
                        <li>Unstoppable growth stack</li>
                    </ul>
                    
                </div>
                
                
                <!--Prospect-->
                <div class="pb--features product">
                    <section class="product-description">
  
                      <img src="<?php echo $site_url_path; ?>images/ic-3.png" width="30" alt="">
                      <span class="pd-title">Prospect</span>
                      <span class="pd-subtitle">Generate pipeline instantly</span>
                      <p class="pd-text">Stop hunting and start selling. Prospect gives you access to 100+ millionB2B contacts with verified work emails. Build highly tailored personas, find the right decision makers and instantly push fresh leads to your sales team.</p>
                      <ul class="pd-list">
                          <li>100+ million B2B decision makers</li>
                          <li>Real-time data enrichment and email verification</li>
                          <li>Search by industry, role, location, size and more</li>
                          <li>Find verified email addresses in seconds</li>
                          <li>Sync fresh prospects to:</li>
                          <li>
                              <img src="<?php echo $site_url_path; ?>images/crm-logo1.png" width="42" alt="">
                              <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="27" alt="">
                              <img src="<?php echo $site_url_path; ?>images/crm-logo3.png" width="25" alt="">
                              <img src="<?php echo $site_url_path; ?>images/header-engage.png" alt="" width="30">
                              <img src="<?php echo $site_url_path; ?>images/ic-campaign.png" alt="" width="28">
                              <img src="<?php echo $site_url_path; ?>images/bolt-big.png" alt="" width="17">
                          </li>
                      </ul>
                      <div class="pd-buttons">
                          <a href="https://app.leadfwd.com/signup/">Get started</a>
                          <a class="dark" href="<?php echo $site_url_path; ?>platform/prospect">Learn more</a>
                      </div>
                  </section>
                </div>
                
                
                <!--Engage-->
                <div class="pb--features product">
                    <section class="product-description">
  
                      <img src="<?php echo $site_url_path; ?>images/header-engage.png" width="30" alt="">
                      <span class="pd-title">Engage</span>
                      <span class="pd-subtitle">AI/ML Sales Engagement Platform</span>
                      <p class="pd-text">Create and deliver fully personalized sales sequences that turn prospects into qualified leads. Customizable schedules, human-like sending, goal-oriented rules and increased productivity for your sales team.</p>
                      <ul class="pd-list">
                          <li>Multi-step Sales Sequences</li>
                          <li>Personalization that scales</li>
                          <li>Automated follow-up schedule</li>
                          <li>Reply detection and Sentiment analysis</li>
                          <li>Attachment and Web site visit tracking</li>
                          <li class="logos">
                              <img src="<?php echo $site_url_path; ?>images/crm-logo1.png" width="42" alt="">
                              <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="27" alt="">
                              <img src="<?php echo $site_url_path; ?>images/crm-logo3.png" width="25" alt="">
                              <img src="<?php echo $site_url_path; ?>images/crm-logo6.png" width="23" alt="">
                              <!--<img src="<?php echo $site_url_path; ?>images/crm-logo7.png" width="28" alt="">-->
                              <!--<img src="<?php echo $site_url_path; ?>images/crm-logo8.png" width="29" alt="">-->
                          </li>
                      </ul>
                      <div class="pd-buttons">
                          <a href="https://app.leadfwd.com/signup/">Get started</a>
                          <a class="dark" href="<?php echo $site_url_path; ?>platform/engage">Learn more</a>
                      </div>
                  </section>
                </div>
                
                
                <!--Sales-->
                <div class="pb--features product">
                    <section class="product-description">
  
                        <img src="<?php echo $site_url_path; ?>images/bolt-big.png" alt="" width="26">
                        <span class="pd-title">AI Sales Agents</span>
                        <span class="pd-subtitle">Build a Virtual Sales Team with AI/ML</span>
                        <p class="pd-text">AI Sales Agents perform the heavy lifting of qualifying prospects, so your sales reps can focus on what they do best, closing deals. AI Sales Agents are capable of touching hundreds of prospects every day and only interested buyers are forwarded to your sales team.</p>
                        <ul class="pd-list">
                            <li>Scale up a front-line Sales Team in seconds</li>
                            <li>Personalize Sales Agent with a Name, Title, Profile Pic and Location</li>
                            <li>Sales Agents send email and reply from a true corporate mailbox</li>
                            <li>Automate OOO, Do Not Contact (DNC) and Alternate Contact Referrals</li>
                            <li>Sales Agents loop in human Sales Reps when leads become qualified</li>
                            <li>Feed fresh contacts to AI Sales Agents automatically with Prospect</li>
                            <li></li>
                        </ul>
                        <div class="pd-buttons">
                            <a href="https://app.leadfwd.com/signup/">Get started</a>
                            <a class="dark" href="<?php echo $site_url_path; ?>platform/ai-sales-agents">Learn more</a>
                        </div>
                    </section>
                </div>
                
                
                <!--Campaign-->
                <div class="pb--features product">
                    <section class="product-description">
  
                        <div>
                            <img src="<?php echo $site_url_path; ?>images/ic-campaign.png" width="35" alt="">
                            <span class="pd-title">Campaign</span>
                            <span class="pd-subtitle">Personalized Customer Journeys to drive MQL.</span>
                            <p class="pd-text">Combining the power of AI and Marketing Automation, Campaign enables marketers to reach and track their target audience at every stage of the sales cycle using intelligent lead enrichment, targeted content and hyper-personalized customer journeys.</p>
                            <ul class="pd-list">
                                <li>Import Target Account Lists (TAL) from <a href="#">Prospect</a>, CSV or your CRM.</li>
                                <li>Trigger automated, hyper-targeted ABM email journeys</li>
                                <li>Measure message and content engagement</li>
                                <li>Real-time data sync, revenue attribution and sales alerts for:</li>
                                <li>Only pay for contacts you're marketing to and reaching.</li>
                                <li>
                                    <img src="<?php echo $site_url_path; ?>images/crm-logo1.png" width="42" alt="">
                                    <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="27" alt="">
                                    <img src="<?php echo $site_url_path; ?>images/crm-logo3.png" width="25" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="pd-buttons">
                            <a href="https://app.leadfwd.com/signup/">Get started</a>
                            <a class="dark" href="<?php echo $site_url_path; ?>platform/campaign">Learn more</a>
                        </div>
                    </section>
                </div>
                
                
                <!--Discover-->
                <div class="pb--features product">
                    <section class="product-description">
  
                        <img src="<?php echo $site_url_path; ?>images/ic-5.png" width="43" alt="">
                        <span class="pd-title">Discover</span>
                        <span class="pd-subtitle">Reveal up to 40% of your Anonymous Visitors.</span>
                        <p class="pd-text">Get ahead of your competitors by identifying hidden buyers early in the sales cycle when they’re researching your brand and products. Intent-driven analytics in real-time.</p>
                        <ul class="pd-list">
                            <li>Reveal companies (large or small) researching your brand</li>
                            <li>Enroll identified companies into Engage Sequences</li>
                            <li>Find key people, work phone and verified emails</li>
                            <li>Sync identified Accounts, Contacts and activity to:</li>
                            <li>
                                <img src="<?php echo $site_url_path; ?>images/crm-logo1.png" width="42" alt="">
                                <img src="<?php echo $site_url_path; ?>images/crm-logo2.png" width="27" alt="">
                                <img src="<?php echo $site_url_path; ?>images/crm-logo3.png" width="25" alt="">
                            </li>
                        </ul>
                        <div class="pd-buttons">
                            <a href="https://app.leadfwd.com/signup/">Get started</a>
                            <a class="dark" href="<?php echo $site_url_path; ?>platform/discover">Learn more</a>
                        </div>
                    </section>
                </div>
              
            </div><!--END Plan builder RIGHT-->
            
            <!-- =========== Plan builder BOTTOM-->
            <div class="pb--bottom">
               &nbsp;
			</div><!--END Plan builder BOTTOM-->
            
        </div><!--END Plan builder wrapper-->
   
    </div>
    <!--END wrapper-->
    
    
    <!--Footer-->
    <?php include 'includes/footer.php';?>
    

    <!--Navigation-->   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.16.0/feather.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/navigation.js"></script>

<script> </script><!--chrome bug--> 
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
</body>
</html>
