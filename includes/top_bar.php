
<ul class="top-bar">
   
    <li class="logo">
        <a href="<?php echo $site_url_path; ?>">
            <img class="colored" src="<?php echo $site_url_path; ?>images/leadfwd_top-logo-colored.png" alt="LeadFWD logo" width="100">
        </a>
    </li>
    
    <li<?php echo (isset($active_top_bar) && $active_top_bar=='prospect') ? ' class="prospect active"' : ''; ?> class="prospect"><a href="<?php echo $site_url_path; ?>platform/prospect">Prospect</a></li>
    
    <li<?php echo (isset($active_top_bar) && $active_top_bar=='engage') ? ' class="engage active"' : ''; ?> class="engage"><a href="<?php echo $site_url_path; ?>platform/engage">Engage</a></li>
    
    <li<?php echo (isset($active_top_bar) && $active_top_bar=='sales') ? ' class="sales active"' : ''; ?> class="sales"><a href="<?php echo $site_url_path; ?>platform/ai-sales-agents">AI Sales Team</a></li>
    
    <li<?php echo (isset($active_top_bar) && $active_top_bar=='campaign') ? ' class="campaign active"' : ''; ?> class="campaign"><a href="<?php echo $site_url_path; ?>platform/campaign">Campaign</a></li>
    
    <li<?php echo (isset($active_top_bar) && $active_top_bar=='discover') ? ' class="discover active"' : ''; ?> class="discover"><a href="<?php echo $site_url_path; ?>platform/discover">Discover</a></li>
    
    <!--<li<?php echo (isset($active_top_bar) && $active_top_bar=='growth') ? ' class="active"' : ''; ?>><a href="<?php echo $site_url_path; ?>growth-suite">Growth Suite</a></li>-->
    
    <li class="login-top"><a href="https://app.leadfwd.com/signup/">Login</a></li>
    
    <li class="announcekit"><div class="announcekit-widget">What's New</div></li>
    
</ul>

<ul class="top-bar-s">
   <li class="logo">
        <a href="<?php echo $site_url_path; ?>">
            <img class="colored" src="<?php echo $site_url_path; ?>images/leadfwd_top-logo-colored.png" alt="LeadFWD logo" width="100">
        </a>
    </li>
    <li class="tbs-<?php echo $active_top_bar; ?>"><?php echo ucfirst($active_top_bar); ?></li>
    <!--<li class="tbs-engage">Engage</li>-->
    <!--<li class="tbs-discover">Discover</li>
    <li class="tbs-journey">Journey</li>
    <li class="tbs-growth">Growth Suite</li>-->
    <li class="tbs-more">
        <input type="checkbox" id="tbs-more">
        <label for="tbs-more">Platform <span>&#10095;</span></label>
        <ul>
            <?php if ($active_top_bar!='prospect') { ?><li><a href="<?php echo $site_url_path; ?>platform/prospect">Prospect</a></li><?php } ?>
            
            <?php if ($active_top_bar!='engage') { ?><li><a href="<?php echo $site_url_path; ?>platform/engage">Engage</a></li><?php } ?>
            
            <?php if ($active_top_bar!='sales') { ?><li><a href="<?php echo $site_url_path; ?>platform/ai-sales-agents">AI Sales Team</a></li><?php } ?>
            
            <?php if ($active_top_bar!='campaign') { ?><li><a href="<?php echo $site_url_path; ?>platform/campaign">Campaign</a></li><?php } ?>
            
            <?php if ($active_top_bar!='discover') { ?><li><a href="<?php echo $site_url_path; ?>platform/discover">Discover</a></li><?php } ?>
            
            <!--<li><a href="<?php echo $site_url_path; ?>growth-suite">Growth Suite</a></li>-->
        </ul>
    </li>
    <li class="login-top"><a href="#">Login</a></li>
    
</ul>

