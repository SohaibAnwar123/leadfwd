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
    <meta name="description" content="Leadfwd combines B2B Prospecting, Sales Outreach and Account-Based Marketing together with the power of Artificial Intelligence and Machine Learning. All in one unstoppable growth platform."/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <meta name="description" content="">
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
    
    <!--Header-->
    <header>
        <h1 class="heading-2">
            Unstoppable Growth Platform Tour
            <span>Learn how Leadfwd works in &lt; 3 minutes.</span>
        </h1>
    </header>
    
    <!--Video-->
    <div class="main-iframe-container plr15">
        <div class="main-iframe">
            <iframe src="https://player.vimeo.com/video/536986228" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    
    <!--Content-->
    <article class="wrapper-790 mb80">
        <p>Leadfwd combines B2B Prospecting, Sales Outreach and Account-Based Marketing together with the power of Artificial Intelligence and Machine Learning. All in one unstoppable growth platform. Leadfwd is versatile and easy to use, delivering five major platform solutions: <a href="<?php echo $site_url_path; ?>platform/prospect">Prospect</a>, <a href="<?php echo $site_url_path; ?>platform/engage">Engage</a>, <a href="<?php echo $site_url_path; ?>platform/campaign">Campaign</a>, <a href="<?php echo $site_url_path; ?>platform/ai-sales-agents">A.I. Sales Agents</a> and <a href="<?php echo $site_url_path; ?>platform/discover">Discover</a>.</p>

        <p>Stop hunting and start selling. Prospect by Leadfwd gives sales teams access to 100 million plus B2B accounts and contacts. Build highly tailored personas, find the right decision makers and instantly push qualified leads into your pipeline. Harnessing the power of A.I., Prospect auto-updates key account and contact data during every search, ensuring the most up-to-date intelligence, including real-time email verification.</p>

        <p>Sales reps don't have the time to personally write, send and monitor email activities for hundreds of leads every day. But Engage does. At the heart of Engage is the sales sequence. Sequences help sales reps execute personalized and relevant customer interactions automatically. Sequences run in the background engaging prospects until they’re qualified to take the next step. With Sequences, Sales reps can focus more of their time on closing deals instead of finding them.</p>

        <p>AI-based machine learning can uncover key insights to help guide your sales reps to qualified sales opportunities and save valuable time by taking actions on your sales reps behalf, like auto-updating the CRM with key information or auto-pausing outreach while a prospect is out of the office. All automatically without any human input.</p>

        <p>Grow your sales force without increasing your head count. AI Sales Agents are a virtual extension of your sales team. Powered by machine learning, Agents are capable of touching hundreds of prospects through Leadfwd Engage every day with personalized email messaging. Agents will automatically loop in a human sales rep the moment a prospect is ready to take the next step. AI Sales Agents are constantly working to qualify prospects, while human sales reps can focus their time on closing revenue.</p>

        <p>From top of the funnel demand generation to automating outreach with a virtual army of sales agents, Leadfwd is ready to help build your organization's growth story.</p>

        <p><b>It’s time to grow forward.</b></p>

    </article>
    
    
    <!--Footer-->
    <?php include 'includes/footer.php';?>
   
    <!--Navigation-->   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.16.0/feather.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/navigation.js"></script>

<script> </script><!--chrome bug--> 

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
</body>
</html>
