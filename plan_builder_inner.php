                      
           <!-- =========== Plan builder TOP-->
           <div class="pb--top">
               BUILD AN UNSTOPPABLE GROWTH STACK
               <span class="top-line"></span>
           </div><!--END Plan builder TOP-->
           
           
           <!-- =========== Plan builder LEFT-->
           <div class="pb--left">
               
               <!--Prospect Product-->
               <article class="pb--product">
                  
                   <header class="pb--product-top">
                       <img src="<?php echo $site_url_path; ?>images/prospect-round-ic.png" alt="Prospect icon">
                       <p>
                           <span>Prospect</span>
                           Generate Pipeline from 100M+ B2B Contacts
                       </p>
                       <p class="pb--product-top-buttons">
                           <a href="javascript:void(0);" class="pb--product-see-features"><b>FEATURES</b></a>
                           <button class="pb--product-top-open"><b>+ BUILD</b></button>
						   <button class="pb--product-top-close"><b>-</b></button>
                       </p>
                   </header>
                   
				    <section class="pb--hide">
						<div class="pb--product-layout1 pb--product-layout">

							<ul class="pb--slider pb--slider-margin">
								<li><div id="prospect-slider"></div></li>
<?php echo $prospect_string; ?>
							</ul>
						   
							<ul class="pb--product-box mb34 pb--product-box-col2 center-leftAl" data-id="1">
								<li class="pb--product-badge gray">No term or contract</li>
								<li class="pb--product-contract">No commitment</li>
								<li class="pb--product-pay"><span id="prospect-cost-1">$<?php echo number_format(array_values($prospect_credits)[0], 0, '.', ''); ?></span> / per month</li>
								<li class="pb--product-perMonth">
									&nbsp;<br>
									<b id="prospect-leads-1"><?php echo array_keys($prospect_credits)[0]; ?></b> leads / month
								</li>
								<li class="pb--product-credits">&nbsp;</li>
							</ul>
 
							<ul class="pb--product-box mb34 center-leftAl" data-id="2">
								 <li class="pb--product-badge blue">Save 10% + 20% Bonus</li>
								 <li class="pb--product-contract">Annual contract</li>
								 <li class="pb--product-pay"><span id="prospect-cost-2">$<?php echo number_format(array_values($prospect_credits)[0]*9/10, 0, '.', ''); ?></span> / billed monthly</li>
								 <li class="pb--product-perMonth">
									 + 20% Bonus<br>
									 <span><?php echo array_keys($prospect_credits)[0]; ?></span> <b id="prospect-leads-2"><?php echo array_keys($prospect_credits)[0]*12/10; ?></b> leads / month
								 </li>
								 <li class="pb--product-credits"><img src="<?php echo $site_url_path; ?>images/pb--credits-rollover.png" alt="ok">Credits rollover</li>
							</ul>
 
							<ul class="pb--product-box mb34 center-leftAl" data-id="3">
								 <li class="pb--product-badge green">Save 20% + 50% Bonus</li>
								 <li class="pb--product-contract">Annual Prepay</li>
								 <li class="pb--product-pay"><span id="prospect-cost-3">$<?php echo number_format(array_values($prospect_credits)[0]*8*12/10, 0, '.', ''); ?></span> / per year</li>
								 <li class="pb--product-perMonth">
									 + 50% Bonus<br>
									 <span><?php echo array_keys($prospect_credits)[0]; ?></span> <b id="prospect-leads-4"><?php echo array_keys($prospect_credits)[0]*15/10; ?></b> leads / month
								 </li>
								 <li class="pb--product-credits"><img src="<?php echo $site_url_path; ?>images/pb--credits-rollover.png" alt="ok"><b id="prospect-leads-3"><?php echo array_keys($prospect_credits)[0]*15*12/10; ?></b>&nbsp;leads preloaded</li>
							</ul>
                           
                           <div class="pb--pricing">
								<span>
									&nbsp;
									<b>X leads</b>
									<label>billed yearly</label>
									<span class="pb--pricing-sum">$852.00</span>
									<button id="show_prospect" class="pb--bottom-buy m0" onclick="location.href='https://app.leadfwd.com/signup/'">GET STARTED</button>
									<input type="hidden" id="product_prospect" value="">
									<input type="hidden" id="price_prospect" value="">
								</span>
							</div>

                       </div>
                   </section>
                   
                   <section class="product-description pb--feature">

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
                   
               </article><!--END Prospect Product-->
               
               <!--Engage Product-->
               <article class="pb--product">
                  
                   <header class="pb--product-top">
                       <img src="<?php echo $site_url_path; ?>images/engage-ic.png" alt="Prospect icon">
                       <p>
                           <span>Engage</span>
                           AI/ML Sales Engagement Platform
                       </p>
                       <p class="pb--product-top-buttons">
                           <a href="javascript:void(0);" class="pb--product-see-features"><b>FEATURES</b></a>
                           <button class="pb--product-top-open"><b>+ BUILD</b></button>
						   <button class="pb--product-top-close"><b>-</b></button>
                       </p>
                   </header>
                   
                   <section class="pb--hide">
                       <div class="pb--product-layout5 v4 pb--product-layout">
                          
                           <div class="pb--product-box centerAl pb--product-box-col2" data-id="1">
                               <span class="pb--small-box-title">Essentials</span>
                               <ul class="box2-list pb">
                                   <li>600 emails / per day / per mailbox (max.)</li>
                                   <li>Automated human-like sending</li>
                                   <li>First delivery &amp; follow up schedules</li>
                                   <li>Open and click tracking</li>
                                   <li>Email personalization</li>
                                   <li>Bounce &amp; opt-out handling</li>
                                   <li>Duplicate contact and email detection</li>
                                   <li>Connect with G Suite and Office 365</li>
                                   <li>Reply detection</li>
                                   <li>Essential CRM Connectors</li>
                                   <li>Additional users $24 mo / billed annually</li>
                               </ul>
                               <span class="pb--small-box-subtitle bold"><span id="engage-cost-1">$<?php echo array_values($engage_credits)[0]/12; ?></span> / month billed yearly</span>
                               <span class="pb--small-box-lightText"><span id="engage-leads-1"><?php echo array_keys($engage_credits)[0]; ?></span> seat included ($<?php echo array_values($engage_credits)[2]/12; ?>  add'l.)</span>
                           </div>
                           <div class="pb--product-box centerAl mb35" data-id="2">
                               <span class="pb--small-box-title">Professional</span>
                               <ul class="box2-list pb">
                                   <li class="box2-sublist">
                                       <b>Everything in Essentials, plus:</b>
                                       <span>1800 emails / per day / per mailbox (max.)</span>
                                       <span>100 Email Finder <span class="f-green">credits</span> / per user / per month</span>
                                       <span>Sequence Action steps</span>
                                       <span>Automation workflow builder</span>
                                       <span>Attachment tracking</span>
                                       <span>Team sender groups</span>
                                       <span>Pro CRM Connectors</span>
                                       <span>Additional users $59 mo / billed annually</span>
                                   </li>
                               </ul>
                               <span class="pb--small-box-subtitle bold"><span id="engage-cost-2">$<?php echo array_values($engage_credits)[1]/12; ?></span> / month billed yearly</span>
                               <span class="pb--small-box-lightText"><span id="engage-leads-2"><?php echo array_keys($engage_credits)[1]; ?></span> seats included  ($<?php echo array_values($engage_credits)[3]/12; ?>  add'l.)</span>
                           </div>
                           
                           <div class="pb--pricing">
                               <span class="v2">
                                 <input class="pb--pricing-field" type="text" maxlength="2" placeholder="3" value="3" id="select_seats">
                                 
                                 <div class="field-add-remove">
                                     <img src="<?php echo $site_url_path; ?>images/add-ic.png" class="add" alt="" width="13">
                                     <img src="<?php echo $site_url_path; ?>images/remove-ic.png" class="remove" alt="" width="13">
                                 </div>
                                 
                                 
                                 <input type="hidden" id="leads_costs" value="<?php echo array_values($engage_credits)[2].'-'.array_values($engage_credits)[3]; ?>">
                                 <input type="hidden" id="leads_seats" value="<?php echo intval(array_keys($engage_credits)[2]).'-'.intval(array_keys($engage_credits)[3]); ?>">
                                 seat licenses | billed yearly
                                 <span class="pb--pricing-sum v2">$852.00</span>
                                 <button id="show_engage" class="pb--bottom-buy m0" onclick="location.href='https://app.leadfwd.com/signup/'">GET STARTED</button>
                                 <input type="hidden" id="product_engage" value="">
                                 <input type="hidden" id="price_engage" value="">
                               </span>
                           </div>
                           
                       </div>
                   </section>
                   
                   <section class="product-description  pb--feature">

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
                               <img src="<?php echo $site_url_path; ?>images/crm-logo7.png" width="28" alt="">
                               <!--<img src="<?php echo $site_url_path; ?>images/crm-logo8.png" width="29" alt="">-->
                           </li>
                       </ul>
                       <div class="pd-buttons">
                           <a href="https://app.leadfwd.com/signup/">Get started</a>
                           <a class="dark" href="<?php echo $site_url_path; ?>platform/engage">Learn more</a>
                       </div>
                   </section>
                   
               </article><!--END Engage Product-->
               
               <!--AI Sales Team Product-->
               <article class="pb--product">
                  
                   <header class="pb--product-top">
                       <img src="<?php echo $site_url_path; ?>images/bolt-round-ic.png" alt="Prospect icon">
                       <p>
                           <span>AI Sales Team</span>
                           Build a AI/ML Virtual Sales Team
                       </p>
                       <p class="pb--product-top-buttons">
                           <a href="javascript:void(0);" class="pb--product-see-features"><b>FEATURES</b></a>
                           <button class="pb--product-top-open"><b>+ BUILD</b></button>
                           <button class="pb--product-top-close"><b>-</b></button>
                       </p>
                   </header>
                   
                   <section class="pb--hide">
                       <div class="pb--product-layout">

                           <div class="pb--pricing" style="display:block;">
                               <span class="v2">
                                 <input class="pb--pricing-field" type="text" maxlength="2" placeholder="1" value="1" id="select_ai">
                                 
                                 <div class="field-add-remove">
                                     <img src="<?php echo $site_url_path; ?>images/add-ic.png" class="add" alt="" width="13">
                                     <img src="<?php echo $site_url_path; ?>images/remove-ic.png" class="remove" alt="" width="13">
                                 </div>
                                 
                                 <input type="hidden" id="leads_ai" value='<?php echo json_encode($ai_credits); ?>'>
                                 seat licenses | billed yearly
                                 <span class="pb--pricing-sum v2">$<?php echo array_values($ai_credits)[0][1]; ?></span>
                                 <button id="show_ai" class="pb--bottom-buy m0" onclick="location.href='https://app.leadfwd.com/signup/'">GET STARTED</button>
                                 <input type="hidden" id="product_ai" value="">
                                 <input type="hidden" id="price_ai" value="">
                               </span>
                           </div>

                       </div>
                   </section>
                   
                   <section class="product-description  pb--feature">

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
                   
           </article><!--END AI Sales Team Product-->
           
               <!--Campaign Product-->
               <article class="pb--product">

                   <header class="pb--product-top">
                       <img src="<?php echo $site_url_path; ?>images/campaign-round-ic.png" alt="Prospect icon">
                       <p>
                           <span>Campaign</span>
                           Personalized Customer Journeys to Nurture Leads
                       </p>
                       <p class="pb--product-top-buttons">
                           <a href="javascript:void(0);" class="pb--product-see-features"><b>FEATURES</b></a>
                           <button class="pb--product-top-open"><b>+ BUILD</b></button>
                           <button class="pb--product-top-close"><b>-</b></button>
                       </p>
                   </header>

                   <section class="pb--hide">
                       <div class="pb--product-layout5 v2 pb--product-layout">

                           <ul class="pb--slider pb--slider-margin grid44">
                               <li>
                                   <div id="campaign-slider"></div>
                               </li>
                               <?php echo $campaign_string; ?>
                           </ul>

                           <div class="pb--product-box centerAl pb--product-box-col2" data-id="1">
                               <span class="pb--small-box-title">Essentials</span>
                               <ul class="box2-list pb">
                                   <li>Reach <b id="campaign-leads-1" class="campaign-leads-1"><?php echo array_keys($campaign_credits)[0]; ?></b> contacts</li>
                                   <li>Unlimited team users</li>
                                   <li>Unlimited email sending</li>
                                   <li>1 landing page and form</li>
                                   <li>A/B testing</li>
                                   <li>Send now or schedule for later</li>
                                   <li>Open and click tracking</li>
                                   <li>Email personalization</li>
                                   <li>Bounce &amp; opt-out handling</li>
                                   <li>Essentials for Salesforce, Sugar Sell &amp; SuiteCRM</li>
                                   <li>Deliverability suite</li>
                               </ul>
                               <span class="pb--small-box-subtitle pb--product-pay"><span id="campaign-cost-1">$<?php echo array_values($campaign_credits)[0][0]; ?></span> / billed <label>monthly</label></span>
                               <!--<span class="pb--small-box-lightText"><b class="campaign-leads-1" id="campaign-leads-1"><?php echo array_keys($campaign_credits)[0]; ?></b> contacts</span>-->
                           </div>

                           <div class="pb--product-box centerAl" data-id="2">
                               <span class="pb--small-box-title">Professional</span>
                               <ul class="box2-list pb mb82">
                                   <li class="box2-sublist">
                                       <b>Everything in Essentials, plus:</b>
                                       <span>Automated email journeys</span>
                                       <span>Smart segments</span>
                                       <span>Unlimited landing pages and forms</span>
                                       <span>Track site visits</span>
                                       <span>Snooze email option</span>
                                       <span>Pro for Salesforce, Sugar Sell & SuiteCRM</span>
                                       <span>Sub-account support</span>
                                   </li>
                               </ul>
                               <span class="pb--small-box-subtitle pb--product-pay"><span id="campaign-cost-2">$<?php echo array_values($campaign_credits)[0][1]; ?></span> / billed <label>monthly</label></span>
                               <!--<span class="pb--small-box-lightText"><b class="campaign-leads-1"><?php echo array_keys($campaign_credits)[0]; ?></b> contacts</span>-->
                           </div>

                           <a href="javascript:void(0)" id="campaign-switch" data-id="0" class="pb--product-layout5-row4 mb20">Switch to yearly billing and Save 20%</a>

                           <div class="pb--pricing row5">
                               <span>
                                   &nbsp;
                                   <b>X targets</b>
                                   <label>billed yearly</label>
                                   <span class="pb--pricing-sum">$852.00</span>
                                   <button id="show_campaign" class="pb--bottom-buy m0" onclick="location.href='https://app.leadfwd.com/signup/'">GET STARTED</button>
                                   <input type="hidden" id="product_campaign" value="">
                                   <input type="hidden" id="price_campaign" value="">
                               </span>
                           </div>

                       </div>
                   </section>

                   <section class="product-description  pb--feature">

                       <div>
                           <img src="<?php echo $site_url_path; ?>images/ic-campaign.png" width="35" alt="">
                           <span class="pd-title">Campaign</span>
                           <span class="pd-subtitle">Personalized Customer Journeys to drive MQL.</span>
                           <p class="pd-text">Combining the power of AI and Marketing Automation, Campaign enables marketers to reach and track their target audience at every stage of the sales cycle using intelligent lead enrichment, targeted content and hyper-personalized customer journeys.</p>
                           <ul class="pd-list">
                               <li>Import Target Account Lists (TAL) from <a href="#">Prospect</a>, CSV or your CRM.</li>
                               <li>Trigger automated, hyper-targeted ABM email journeys</li>
                               <li>Measure message and content engagement</li>
                               <li>Measure message and content engagement</li>
                               <li>Real-time data sync, revenue attribution and sales alerts for:</li>
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

               </article><!--END Campaign Product-->
               
               <!--Discover Product-->
               <article class="pb--product">
                  
                   <header class="pb--product-top">
                       <img src="<?php echo $site_url_path; ?>images/discover-ic.png" alt="Prospect icon">
                       <p>
                           <span>Discover</span>
                           Turn Anonymous Visitors Into Identified Leads
                       </p>
                       <p class="pb--product-top-buttons">
                           <a href="javascript:void(0);" class="pb--product-see-features"><b>FEATURES</b></a>
                           <button class="pb--product-top-open pb-discover-to-bottom"><b>+ BUILD</b></button>
						   <button class="pb--product-top-close"><b>-</b></button>
                       </p>
                   </header>
                   
                   <section class="pb--hide">
                       <div class="pb--product-layout4 pb--product-layout">

							<ul class="pb--slider pb--slider-margin grid44">
								<li><div id="discover-slider"></div></li>
<?php echo $discover_string; ?>
							</ul>
                           
							<ul class="pb--product-box mb34 pb--product-box-col2 center-leftAl" data-id="1">
								<li class="pb--product-badge gray">No term or contract</li>
								<li class="pb--product-contract">No commitment</li>
								<li class="pb--product-pay"><span id="discover-cost-1">$<?php echo array_values($discover_credits)[0]; ?></span> / per month</li>
								<li class="pb--product-perMonth">
									&nbsp;<br>
									<b id="discover-leads-1"><?php echo array_keys($discover_credits)[0]; ?></b> visitors identified / month
								</li>
								<li class="pb--product-credits">&nbsp;</li>
							</ul>
 
							<ul class="pb--product-box mb34 center-leftAl" data-id="2">
								<li class="pb--product-badge green">Save 20%</li>
								<li class="pb--product-contract">Annual Prepay</li>
								<li class="pb--product-pay"><span id="discover-cost-2">$<?php echo array_values($discover_credits)[0]*8*12/10; ?></span> / per year</li>
								<li class="pb--product-perMonth">
									Save 20%<br>
									<b id="discover-leads-2"><?php echo array_keys($discover_credits)[0]; ?></b> visitors identified / month
								</li>
								<li class="pb--product-credits"><img src="<?php echo $site_url_path; ?>images/pb--credits-rollover.png" alt="ok">Credits rollover</li>
							</ul>
							
							<div class="pb--pricing">
								<span>
									&nbsp;
									<b>X leads</b>
									<label>billed yearly</label>
									<span class="pb--pricing-sum">$852.00</span>
									<button id="show_discover" class="pb--bottom-buy m0" onclick="location.href='https://app.leadfwd.com/signup/'">GET STARTED</button>
									<input type="hidden" id="product_discover" value="">
									<input type="hidden" id="price_discover" value="">
								</span>
							</div>

                       </div>
                   </section>
                   
                   <section class="product-description pb--feature">

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
                   
               </article><!--END Discover Product-->
            </div><!--END Plan builder LEFT-->

