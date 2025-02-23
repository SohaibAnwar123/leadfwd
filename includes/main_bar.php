<?php $nav = substr(strrchr($_SERVER['PHP_SELF'], "/"), 1); ?>
<nav class="main toggle" id="nav">
    <!--Logo-->
    <a class="top-logo" href="<?php echo $site_url_path; ?>">
        <!--<img class="white" src="<?php echo $site_url_path; ?>images/leadfwd_top-logo-white.png" alt="LeadFWD logo">-->
        <img class="colored" src="<?php echo $site_url_path; ?>images/leadfwd_top-logo-colored.png" alt="LeadFWD logo">
    </a>

    

    <div class="header">
        <!--Main Navigation-->
        <section>
            <nav class="nav">
                <button class="nav-link" data-nav="platform">Platform</button>
                <button class="nav-link" data-nav="solutions">Solutions</button>
                <button onclick="location.href='<?php echo $site_url_path; ?>pricing'" class="nav-link" data-nav="plans">Plans</button>
                <!--<button class="nav-link" data-nav="services">Growth services</button>-->
                <button onclick="location.href='<?php echo $site_url_path; ?>partners'" class="nav-link" data-nav="partners">Partners</button>
                <button class="nav-link" data-nav="resources">Resources</button>
            </nav>
        </section>

        <div class="popover">
            <div class="content">

                <!--Drop down PLATFORM-->
                <section class="section section-platform">
                    <div class="drop2">

                       <!--Menu items-->
                        <ul class="drop2-menu">
                            <li class="prospect">
                                <a href="<?php echo $site_url_path; ?>platform/prospect">
                                    <span>Prospect</span>
                                    Generate Pipeline from 100M+ verified B2B contacts
                                </a>
                            </li>
                            <li class="engage">
                                <a href="<?php echo $site_url_path; ?>platform/engage">
                                    <span>Engage</span>
                                    Sales Engagement Platform
                                </a>
                            </li>
                            <li class="sales">
                                <a href="<?php echo $site_url_path; ?>platform/ai-sales-agents">
                                    <span>AI Sales Team</span>
                                    Build a Virtual Sales Team with AI/ML
                                </a>
                            </li>
                            <li class="discover">
                                <a href="<?php echo $site_url_path; ?>platform/discover">
                                    <span>Discover</span>
                                    Turn Anonymous Visitors into Identified Leads
                                </a>
                            </li>
                            <li class="campaign">
                                <a href="<?php echo $site_url_path; ?>platform/campaign">
                                    <span>Campaign</span>
                                    Marketing Engagement Platform
                                </a>
                            </li>
                        </ul>

                        <!--Menu description default-->
                        <div class="drop2-menu-description drop2-menu-default">
                           <span class="f23">Unstoppable Growth Platform Tour</span>
                           <span class="f17">Learn how Leadfwd works in &lt; 3 minutes.</span>
                           <a href="<?php echo $site_url_path; ?>platform/tour"><img src="<?php echo $site_url_path; ?>images/platform-video-ps.png" width="315" alt=""></a>
                            
                        </div>

                        <!--Menu description Prospect-->
                        <!--<div class="drop2-menu-description drop2-menu-product" id="menu-prospect">
                           <img src="<?php echo $site_url_path; ?>images/menu-prospect-img.png" width="232" alt="">
                            Stop hunting and start selling. Prospect gives you access to 100+ million B2B contacts. Find your ideal accounts and key people with verified contact information.
                        </div>-->

                        <!--Menu description Engage-->
                        <!--<div class="drop2-menu-description drop2-menu-product" id="menu-engage">
                           <img src="<?php echo $site_url_path; ?>images/menu-engage-img.png" width="261" alt="">
                            Sales reps don’t have the time to personally write, send and monitor activities of hundreds of leads every day. But Engage does.
                        </div>-->

                        <!--Menu description Ai Sales-->
                        <!--<div class="drop2-menu-description drop2-menu-product" id="menu-sales">
                           <img src="<?php echo $site_url_path; ?>images/menu-ai-sales-img.png" width="240" alt="">
                            AI Sales Agents perform the heavy-lifting of qualifying prospects, so your sales reps can focus on what they do best, closing deals.  Capable of touching hundrds of prospects each day, Agents identify interest and loop in human reps.
                        </div>-->

                        <!--Menu description Discover-->
                        <!--<div class="drop2-menu-description drop2-menu-product" id="menu-discover">
                            <img src="<?php echo $site_url_path; ?>images/menu-discover-img.png" width="235" alt="">
                            Get ahead of your competitors by identifying hidden buyers early in the sales cycle when they’re researching your brand and products. Intent-driven analytics in real-time.
                        </div>-->

                        <!--Menu description campaign-->
                        <!--<div class="drop2-menu-description drop2-menu-product" id="menu-journey">
                            <img src="<?php echo $site_url_path; ?>images/menu-campaign-img.png" width="197" alt="">
                            Combining the power of AI/ML with Marketing Automation, Campaign enables marketers to reach and track their target audience at every stage of the sales cycle, using hyper-personalized customer journeys.
                        </div>-->

                        <!--Menu details-->
                        <div class="drop2-menu-details">
                            <a href="<?php echo $site_url_path; ?>platform/ai-sales-agents"><span class="green2-txt">AI Sales Agents</span> Focus on Qualifying Leads, While SDRs Focus on Closing Deals</a>
                            <img src="<?php echo $site_url_path; ?>images/menu-arrow.png" width="23" height="17" alt="arow">
                        </div>


                    </div>
                </section>

                <!--Drop down SOLUTIONS-->
                <section class="section section-solutions">
                    <div class="drop2 solutions">

                       <!--Menu items-->
                        <ul class="drop2-menu2">
                            <li>
                                <a href="<?php echo (($nav=='solutions.php') ? '#pipeline' : $site_url_path.'solutions'); ?>">Generate Pipeline, Instantly</a>
                            </li>
                            <li>
                                <a href="<?php echo (($nav=='solutions.php') ? '#salesE' : $site_url_path.'solutions'); ?>">Sales Engagement Platform </a>
                            </li>
                            <li>
                                <a href="<?php echo (($nav=='solutions.php') ? '#salesI' : $site_url_path.'solutions'); ?>">Sales Intelligence &amp; Productivity</a>
                            </li>
                            <li>
                                <a href="<?php echo (($nav=='solutions.php') ? '#abm' : $site_url_path.'solutions'); ?>">Virtual AI/ML Sales Team</a>
                            </li>
                            <li>
                                <a href="<?php echo (($nav=='solutions.php') ? '#content_marketing' : $site_url_path.'solutions'); ?>">Hyper-targeted Customer Journeys</a>
                            </li>
                            <li>
                                <a href="<?php echo (($nav=='solutions.php') ? '#inbound_marketing' : $site_url_path.'solutions'); ?>">Email Marketing</a>
                            </li>
                            <li>
                                <a href="<?php echo (($nav=='solutions.php') ? '#personalization' : $site_url_path.'solutions'); ?>">Account-Based Marketing (ABM)</a>
                            </li>
                            <li>
                                <a href="<?php echo (($nav=='solutions.php') ? '#anonymous' : $site_url_path.'solutions'); ?>">Anonymous Visitor ID and Retargetting</a>
                            </li>
                        </ul>

                        <!--Menu description-->
                        <div class="drop2-menu2-description">

                            <ul class="d2m2-list">
                                <li class="sugar">
                                    <a href="<?php echo $site_url_path; ?>solutions/sugar-prospect">
                                       <span>Sugar Prospect</span>
                                        Generate pipeline now from 100M+ B2B contacts
                                    </a>
                                </li>
                                <li class="sugar">
                                    <a href="<?php echo $site_url_path; ?>solutions/sugar-engage">
                                       <span>Sugar Engage</span>
                                        #1 Sales Engagement Platform for Sugar Sell
                                    </a>
                                </li>
                                <li class="sugar">
                                    <a href="<?php echo $site_url_path; ?>solutions/sugar-campaign">
                                       <span>Sugar Campaign</span>
                                        Robust outbound marketing for Sugar Sell
                                    </a>
                                </li>
                                <li class="salesforce">
                                    <a href="<?php echo $site_url_path; ?>solutions/salesforce">
                                       <span>Salesforce</span>
                                        Find New Accounts, Automate Sales Outreach and Close more deals.
                                    </a>
                                </li>
                                <li class="suite">
                                    <a href="<?php echo $site_url_path; ?>solutions/suitecrm">
                                       <span>SuiteCRM</span>
                                        Find New Accounts, Automate Sales Outreach and Close more deals.
                                    </a>
                                </li>
                            </ul>
                            
                        </div>

                        <!--Menu details-->
                        <div class="drop2-menu-details">
                            <a href="<?php echo $site_url_path; ?>platform/ai-sales-agents"><span class="green2-txt">AI Sales Agents</span> Focus on Qualifying Leads, While SDRs Focus on Closing Deals</a>
                            <img src="<?php echo $site_url_path; ?>images/menu-arrow.png" width="23" height="17" alt="arow">
                        </div>


                    </div>
                </section>

                <!--Drop down plans-->
                <section class="section section-plans" style="padding: 20px;">
                    Plans
                </section>

                <!--Drop down services-->
                <section class="section section-services" style="padding: 20px;">
                    Services
                </section>

                <!--Drop down partners-->
                <section class="section section-partners"></section>

                <!--Drop down resources-->
                <section class="section section-resources" style="padding: 45px;">
                    <ul class="drop3">
                        <li>
                            <a href="http://532850bcf0ee08aff589-351ed221d8e14d4d071a217678a133f1.r33.cf5.rackcdn.com/IN25/leadfwd/IN25-PRIVACY-LEADFWD-RESOURCES-APR2019.pdf" target="_blank"><img class="resources-ic" src="<?php echo $site_url_path; ?>images/resources-ic-1.png" alt=""></a>
                            <span class="resources-title">PRIVACY AND COMPLIANCE</span>
                            <span class="resources-txt">Built from the  ground-up with data privacy in mind.</span>
                        </li>
                        <li>
                           <a href="https://2ea60949dbcf5d67fe94-351ed221d8e14d4d071a217678a133f1.ssl.cf5.rackcdn.com/IN25/leadfwd/IN25-SECURITY-LEADFWD-RESOURCES-APR2019.pdf" target="_blank"><img class="resources-ic" src="<?php echo $site_url_path; ?>images/resources-ic-2.png" alt=""></a>
                            <span class="resources-title">SECURITY</span>
                            <span class="resources-txt">Industry leading partners in network infrastructure, security and availability.</span>
                        </li>
                        <li>
                           <a href="http://532850bcf0ee08aff589-351ed221d8e14d4d071a217678a133f1.r33.cf5.rackcdn.com/IN25/leadfwd/IN25-ABM-LEADFWD-RESOURCES-APR2019.pdf" target="_blank"><img class="resources-ic" src="<?php echo $site_url_path; ?>images/resources-ic-3.png" alt=""></a>
                            <span class="resources-title">DISCOVER GUIDE</span>
                            <span class="resources-txt">Automated ABM in 60 seconds or less. No forms. No humans.</span>
                        </li>
                        <li>
                           <a href="http://532850bcf0ee08aff589-351ed221d8e14d4d071a217678a133f1.r33.cf5.rackcdn.com/IN25/leadfwd/IN25-REALTIME-NURTURING-LEADFWD-RESOURCES-APR2019.pdf" target="_blank"><img class="resources-ic" src="<?php echo $site_url_path; ?>images/resources-ic-4.png" alt=""></a>
                            <span class="resources-title">DISCOVER + ENGAGE GUIDE</span>
                            <span class="resources-txt">AI-driven email nurturing that engages anonymous visitors within seconds of arriving.</span>
                        </li>
                    </ul>
                </section>

            </div>
            <div class="background"></div>
        </div>
    </div>

    <!--END Main Navigation-->

    <!--Secondary navigation-->
    <ul class="sec-nav">
        <li><a href="https://app.leadfwd.com/login/">Login</a></li>
        <li><a href="https://app.leadfwd.com/signup/">Get started</a></li>
    </ul>
    
    
    <!--<a class="menu-tel" href="tel:+1.718.873.2623">+1.718.873.2623</a>-->
    
    <!--Main navigation for small screens-->
    <nav role="navigation" class="menu-toggle">

        <input class="burger" type="checkbox">
        <span class="burger b1"></span>
        <span class="burger b2"></span>
        <span class="burger b3"></span>

        <div class="menu-mobile">
           
           <img class="mm-logo" src="<?php echo $site_url_path; ?>images/leadfwd_top-logo-mixed.png" alt="">
           
            <dl>
                <dt class="mm-arrow">Platform</dt>
                <dd>
                    <div class="mm-sub-el">
                        <a href="<?php echo $site_url_path; ?>platform/prospect">Prospect</a>
                        <a href="<?php echo $site_url_path; ?>platform/engage">Engage</a>
                        <a href="<?php echo $site_url_path; ?>platform/ai-sales-agents">Ai Sales Team</a>
                        <a href="<?php echo $site_url_path; ?>platform/campaign">Campaign</a>
                        <a href="<?php echo $site_url_path; ?>platform/discover">Discover</a>
                    </div>
                </dd>
                
                <dt class="mm-arrow">Solutions</dt>
                <dd>
                    <div class="mm-sub-el">
                        <a class="mm-anchor" href="<?php echo (($nav=='solutions.php') ? '#pipeline' : $site_url_path.'solutions'); ?>">Generate Pipeline</a>
                        <a class="mm-anchor" href="<?php echo (($nav=='solutions.php') ? '#salesE' : $site_url_path.'solutions'); ?>">Sales Engagement </a>
                        <a class="mm-anchor" href="<?php echo (($nav=='solutions.php') ? '#salesI' : $site_url_path.'solutions'); ?>">Sales Intelligence &amp; Productivity</a>
                        <a class="mm-anchor" href="<?php echo (($nav=='solutions.php') ? '#abm' : $site_url_path.'solutions'); ?>">Hyper-targeted ABM Campaigns</a>
                        <a class="mm-anchor" href="<?php echo (($nav=='solutions.php') ? '#content_marketing' : $site_url_path.'solutions'); ?>">Friction-free Content Marketing</a>
                        <a class="mm-anchor" href="<?php echo (($nav=='solutions.php') ? '#inbound_marketing' : $site_url_path.'solutions'); ?>">Inbound Marketing</a>
                        <a class="mm-anchor" href="<?php echo (($nav=='solutions.php') ? '#personalization' : $site_url_path.'solutions'); ?>">Web Personalization</a>
                        <a class="mm-anchor" href="<?php echo (($nav=='solutions.php') ? '#anonymous' : $site_url_path.'solutions'); ?>">Visitor ID and Retargeting</a>
                        <a href="<?php echo $site_url_path; ?>solutions/sugar-prospect">Sugar Prospect</a>
                        <a href="<?php echo $site_url_path; ?>solutions/sugar-engage">Sugar Engage</a>
                        <a href="<?php echo $site_url_path; ?>solutions/sugar-campaign">Sugar Campaign</a>
                        <a href="<?php echo $site_url_path; ?>solutions/salesforce">Salesforce</a>
                        <a href="<?php echo $site_url_path; ?>solutions/suitecrm">SuiteCRM</a>
                    </div>
                </dd>
                
                <dt><a href="<?php echo $site_url_path; ?>pricing">Plans</a></dt>
                
                <dt><a href="<?php echo $site_url_path; ?>partners">Partners</a></dt>
                
                <dt><a href="#">Resources</a></dt>
                
                <dt><a href="#">Help and support</a></dt>
                
                <dt><a href="#">What’s new</a></dt>
                
            </dl>

           
            <button onclick="location.href='https://app.leadfwd.com/signup/'" class="btn-1 omnes darkGrey">Get started</button>
            
            <a href="https://app.leadfwd.com/login/" class="mm-sub-link">Existing users, login</a>
            
            
        </div>

    </nav><!--END Main navigation for small screens-->

</nav>