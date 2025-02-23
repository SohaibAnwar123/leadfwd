  <?php
$active_top_bar = 'sales';
$site_url_path = '/';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>B2B Sales Prospecting + Sales Outreach and Automation = Unstoppable Growth Platform | Leadfwd</title>
  <?php include 'includes/analytics_head.php';?>
    <!-- favicon start  -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- favicon end -->

<!-- animate css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="description" content="Leadfwd combines B2B Prospecting, Sales Outreach and Account-Based Marketing together with the power of Artificial Intelligence and Machine Learning. All in one unstoppable growth platform."/>
    <link href="<?php echo $site_url_path; ?>css/leadfwd_web.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $site_url_path; ?>css/leadfwd_v2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $site_url_path; ?>css/plan_builder.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/vnc6wft.css">
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
    <header class="light-blue-bg">
        
        <div class="flex2col2">
            <div class="header-text-left v2 w48p">
                <span class="f36">AI Sales Agents help SDRs save time and <span class="line-through">meet or</span> <i>exceed</i> their sales quota.</span>
                Let your sales reps focus their time and energy on closing revenue, while our AI Sales Agents leverage outbound engagement to build a pipeline of interested buyers.
                <div class="mt20">
                    <button class="v2-buttonS1">How it works</button>
                </div>
            </div>
            
            <div class="header-img-right2 sales">
                <img src="<?php echo $site_url_path; ?>images/ai-sales-graph2.png" width="1260" alt="">
            </div>
            
        </div>
        
    </header><!--END HEADER-->
    
    <div class="empty860"></div>
    
    <span id="how-it-works"></span>
    
    <h1 class="mb65">
       How it works
       <span>Sales Agents are powered by AI/ML and use Engage Sequences to automatically send<br>personalized sales emails, read prospect replies and take appropriate follow up action.</span>
       <!--<img class="hiw-roi" src="<?php echo $site_url_path; ?>images/roi-einstein-rocket.png" alt="">-->
    </h1>
    
    
    <article class="sales-col2">
       
        <section class="sc2-left">
            <img src="<?php echo $site_url_path; ?>images/ai-sales-graph3.png" width="410" alt="">
        </section>
        
        <section class="sc2-right">
           <span>AI Sales Agents scale sales revenue, without increasing your headcount.</span>
           <p>AI Sales Agents are members of your growing sales team. Give them a name, title, location (time zone), mailbox and profile pic.</p>
            <ul>
                <li>Fully customizable AI Agent persona builder.</li>
                <li>Connect every agent with a unique corporate mailbox.</li>
                <li>Create unique or template-driven email signatures.</li>
                <li>Localize your agents to serve a specific geographical region.</li>
            </ul>
        </section>
        
    </article>
    
    <article class="sales-col2 on-white">
       
        <section class="sc2-left">
            <img src="<?php echo $site_url_path; ?>images/ai-sales-graph4.png" width="432" alt="">
        </section>
        
        <section class="sc2-right">
            <span>Agents engage and follow up with unresponsive prospects.</span>
            <p>AI Sales Agents leverage Engage Sequences, so prospect follow ups are never forgotten. Engagement continues until a prospect replies to your Agent</p>
            <ul>
                <li>Agents can reach hundreds of prospects daily with personalized emails.</li>
                <li>Agents automatically handle OOO, DNC or Wrong Contact.</li>
                <li>Replies your Agent doesn’t understand can be set for human review.</li>
                <li>Agents keep your CRM updated in real-time.</li>
            </ul>
        </section>
        
    </article>
    
    <article class="sales-col2">
       
        <section class="sc2-left">
            <img src="<?php echo $site_url_path; ?>images/ai-sales-graph5.png" width="432" alt="">
        </section>
        
        <section class="sc2-right">
            <span>Agents introduce Sales Reps to qualified leads, automatically.</span>
            <p>Agents read every email reply, immediately. When genuine buyer interest is detected, Agents will automatically follow up with your qualified lead and introduce a human sales rep.</p>
            <ul>
                <li>Only qualified leads reach your human Sales reps.</li>
                <li>Agents end Sequences when leads are qualified.</li>
                <li>Connect your CRM for advanced Sales Rep. routing and alerts.</li>
                <li>Agents nudge Sales Reps if they don’t reply quickly.</li>
            </ul>
        </section>
        
    </article>
    
    
    <!--On blue w/ texture -->
    <section class="on-grad-texture">
        <span>AI Sales Agents Help SDRs Meet and Exceed Quota.</span>
        <button class="blue-btn mtb30" onclick="location.href='https://app.leadfwd.com/signup/'">Get started</button>
        <div>Immediate acces and <span class="normal-txt">no credit card required.</span></div>
        <!--<img class="texture-roi-2" src="<?php echo $site_url_path; ?>images/roi-einstein-coffee.png" alt="">-->
    </section>
    <!--END On blue w/ texture -->
    
    
    <!--What can your AI Sales Agents do today?-->
    <article class="on-gray3 bt0">

        <h1 class="mb65">
            What can your AI Sales Agents do today?
        </h1>
        
        <section class="use-cases">
            
            <div class="case">
                <img src="<?php echo $site_url_path; ?>images/case1-ic.png" width="38" alt="">
                
                <span class="f-24 fw-200">Email Prospecting</span>
                
                <p>With the right Target Account list (TAL) and messaging, cold email can be a very effective method for building the top of your sales funnel.</p>
                
                <p>But, it’s impossible for a human to personally write and engage with hundreds or thousands of prospects every week. And you need volume to realize an ROI with cold email.</p>
                
                <p>AI Sales Agents can get personal thousands of times per week and read hundreds of replies per minute. They’re battle tested and ideal for the front-lines of a cold email program.</p>
                
                <!--<a href="#" class="link-green">Learn more</a>-->
            </div>
            
            <div class="case">
                <img src="<?php echo $site_url_path; ?>images/case2-ic.png" width="38" alt="">
                
                <span class="f-24 fw-200">Recycle stale leads</span>
                
                <p>The last thing an SDR wants to hear about is anything that’s ‘old’ or ‘lost’. With a quota to meet, there’s only time for fresh interest and qualified leads.</p>
                
                <p>AI Sales Agents can be tasked with the grunt work of proactively engaging with an SDR’s lost causes.</p>
                
                <p>Whether it’s past webinar attendees, previously lost opportunities or leads that went radio silent last year, your trusted team of Sales Agents is ready to engage, now.</p>
                
                <!--<a href="#" class="link-green">Learn more</a>-->
            </div>
            
            <div class="case">
                <img src="<?php echo $site_url_path; ?>images/case3-ic.png" width="42" alt="">
                
                <span class="f-24 fw-200">Web events</span>
                
                <p>AI Sales Agents can take the lead on helping generate demand for online web events using popular platforms such as GoToWebinar, Zoom, Webex and more. Leverage web events for demand generation, onboarding new customers or to educate new prospects that are actively trialing your products.</p>
                
                <p>AI Sales Agents can engage leads or customers with event invites to enroll attendees and also post-event follow ups to gauge additional buyer interest.</p>
                
                <!--<a href="#" class="link-green">Learn more</a>-->
            </div>
            
        </section>

    </article><!--END What can your AI Sales Agents do today?-->
    
    
    
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
