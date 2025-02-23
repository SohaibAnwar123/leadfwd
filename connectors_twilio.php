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
    <link href="<?php echo $site_url_path; ?>css/modal.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="https://use.typekit.net/pxu2bwp.css" />
    <link rel="stylesheet" href="https://use.typekit.net/ycj0dcm.css">
    
    <link href="https://downloads.intercomcdn.com/i/o/223532/380d7e9f040321429b91a359/2c4f86a043ac0a9cdf792273f8850b69.png" rel="shortcut icon" type="image/png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    
    
</head>

<body>
    <?php include 'includes/analytics_body.php';?>
    
    
    <div class="v2-nav-wrapper blue">
        <!--Top Bar-->
        <?php include 'includes/bar_v2.php';?>
    </div>
    
    
    <!--HEADER-->
    <header>
       <span class="blue-bg"></span>
        <div class="header-main noImg hm-dark">
           
            <div class="icons-flex">
                <a class="cursor" href="javascript:void(0)">
                    <img src="<?php echo $site_url_path; ?>images/app-twilio.png" width="49" alt="">
                </a>
                <span href="javascript:void(0)">
                    <img src="<?php echo $site_url_path; ?>images/connectors-arrows.png" width="29" alt="">
                </span>
                <a class="cursor" href="javascript:void(0)">
                    <img src="<?php echo $site_url_path; ?>images/leadfwd-ic.png" width="53" alt="">
                </a>
            </div>
            
        </div>
    </header>
    
    
    <main class="wrapper-940">
        
        <h5 class="centerAl">Twilio + Leadfwd</h5>
        
        <div class="connectors-img">
            <img class="mb20" src="<?php echo $site_url_path; ?>images/twilio-leadfwd.png" width="909" alt="">
            
            <ul class="ht3-box w230 pos1">
                <li>
                    <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/george-w.png" alt="">
                </li>
                <li class="ht3-box-title blue">George Williams <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                <li class="ht3-box-subtitle">Lead</li>
                <li class="ht3-box-details">Post-webinar thank you txt msg</li>
            </ul>
            
            <ul class="ht3-box w230 pos2" style="width: 280px;">
                <li>
                    <img class="ht3-box-img1" src="<?php echo $site_url_path; ?>images/doug-j.png" alt="">
                </li>
                <li class="ht3-box-title blue">Doug James <img class="ht3-box-img2" src="<?php echo $site_url_path; ?>images/salesforce-small.png" alt=""></li>
                <li class="ht3-box-subtitle">SDR</li>
                <li class="ht3-box-details">Alert Stale Sales Opp / Website Return</li>
            </ul>
            
        </div>
        
    </main>
    
    <main class="wrapper-700 v2">
        <p class="f-24 mb40">
            <a href="#" class="red">Twilio</a> allows software applications to programmatically send text messages using its web service framework.
            <br><br>
            Our Twilio connector enables outbound messaging to leads or customers and instant alerts for your sales team.
        </p>
        
        <p class="f-16 mb20">
            <span class="f-18 block">Import Accounts and Contacts</span>
            Import all of your accounts and contacts directly into Leadfwd and begin adding them to Engage Sequences and Campaigns that automate communication, follow up, and track engagement.
        </p>
        
        <p class="f-16 mb20">
            <span class="f-18 block">Campaign workflow</span>
            Trigger personalized SMS messages to leads and contacts as part of an automated customer journey.
        </p>
        
        <p class="f-16 mb20">
            <span class="f-18 block">Sales alerts</span>
            Create custom alert policies that reach sales agents instantly on their mobile devices.
        </p>
        
        
        <div class="icons-flex v2">
            <a href="javascript:void(0)">
                <span class="tooltip">Engage</span>
                <img src="<?php echo $site_url_path; ?>images/app-twilio.png" width="28" alt="">
                <img src="<?php echo $site_url_path; ?>images/connectors-arrows-s.png" width="9" alt="">
                <img src="<?php echo $site_url_path; ?>images/connector-engage.png" width="28" alt="">
            </a>
            <a href="javascript:void(0)">
                <span class="tooltip">Campaign</span>
                <img src="<?php echo $site_url_path; ?>images/app-twilio.png" width="28" alt="">
                <img src="<?php echo $site_url_path; ?>images/connectors-arrows-s.png" width="9" alt="">
                <img src="<?php echo $site_url_path; ?>images/connector-campaign.png" width="27" alt="">
            </a>
        </div>
        
        <div class="ptb20">
            <a class="button-style-1 red mr10" href="#">Integration article</a>
            <a class="button-style-1 dark" href="https://app.leadfwd.com/signup/">Get started now</a>
        </div>
        
    </main>
    
    
    <!--Connect your apps-->
    <?php include 'includes/connect.php';?>
    
    
    <!--Footer-->
    <?php include 'includes/footer.php';?>

    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/leadfwd.js"></script>
    
    <!--Navigation-->   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.16.0/feather.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url_path; ?>js/navigation.js"></script>
    


<script> </script><!--chrome bug--> 

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
</body>
</html>
