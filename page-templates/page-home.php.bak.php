<?php
/*
 * Template Name: Home
 */

get_header(); ?>

<?php echo do_shortcode('[nggallery id=1 template=searchamericas]'); ?>

<div id="main-content" class="main-content">

<div class="blueheadline">
	<div class="celebtop"><img src="<?php bloginfo('template_url');?>/images/whitebar.png" alt=""> Searchamericas Celebrating <img src="<?php bloginfo('template_url');?>/images/whitebar.png" alt=""></div>
	<div class="celebbottom">25 YEARS AND STILL GROWING</div>
</div>
<br><br>
<div class="smallcontainer bluetext">
	<h2 class="center">Value Proposition</h2>
	<br>
	<div class="row">
		<div class="col-xs-6"><p><span class="red">PEOPLE</span> are the most important asset to every company! <span class="red">TIMELY DELIVERY</span> is an essential element in every corporation’s success! <span class="red">FOLLOW-UP</span> is a key ingredient to every corporate transaction! SearchAmericas has been delivering excellent product in a timely manner with <span class="red">&ldquo;HIGHER THAN EXPECTED RESULTS&rdquo;</span>. Our primary goal is to ensure that the employee fits the culture of the organization, has the skills to produce long term results and is promotable.</p></div>
		<div class="col-xs-6"><p>Our seasoned recruiters have spent over 150 years combined in Corporate America in Executive Recruiting, Human Resources and/or Executive Management and fully understand the entire hiring process. Our Team is relationship-focused and work in unison to achieve common goals thereby satisfying the customers’ needs. Our <span class="red">60,000+ CANDIDATE DRIVEN INDUSTRY FOCUSED DATABASE</span> developed over these 25 years is second to none. We recruit the best candidates in a timely manner driving quantifiable results into your organization.</p></div>
	</div>
</div>
<br>
<div class="container" style="text-align:center;">
	<h3>RECRUITING GAME CHANGING TALENT IS WHAT WE&rsquo;RE ALL ABOUT!</h3>
	<h6>HIRE SEARCHAMERICAS FOR YOUR NEXT PEOPLE PROJECT!</h6>
	<h3><img src="<?php bloginfo('template_url');?>/images/logo-icon.png" alt="">&ldquo;We Care!&rdquo;</h3>
	<br>
	<h6>VETERAN OWNED AND OPERATED</h6>
</div>

<div id="homeslides">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h6>Industries Served</h6>
				<div class="servedcontainer"><?php echo do_shortcode('[nggallery id=4 template=searchamericas-served]'); ?></div>
			</div>
			<div class="col-xs-6">
				<h6>Companies Served</h6>
				<div class="servedcontainer"><?php echo do_shortcode('[nggallery id=5 template=searchamericas-served]'); ?></div>
			</div>
		</div>
	</div>
	<br><br>
	<h6 style="font-size:18px; text-transform:uppercase" class="red">Our management team concentrates on mid to top level executives in these industries</h6>
</div>

<div class="blueheadline managementhead">
	<h2><img src="<?php bloginfo('template_url');?>/images/whitebar-pin.png" alt=""> MANAGEMENT TEAM <img src="<?php bloginfo('template_url');?>/images/whitebar-pin-right.png" alt=""></h2>
</div>

<div class="management container">
	<div class="row">
		<div class="col-xs-4"></div>
		<div class="col-xs-4"><img src="<?php bloginfo('template_url');?>/images/thomassnow.jpg" alt="Thomas J. Snow"></div>
		<div class="col-xs-4">
			<div class="profile">
				<br><br>
				<h6>Thomas J. Snow</h6>
				<p><strong>Founder, Chairman &amp; CEO</strong><br>Tom has dedicated his entire 40 year career to Sales, Marketing, and General Management in the Consumer Products, Industrial and Executive Search Industries at International Corporations such as General Electric Lighting Business Group, Sherwin-Williams, American Standard (Artesian Indus <br>You may contact Tom at 440.572.0450 or <a href="mailto:tSnow@SearchAmericas.com">tSnow@SearchAmericas.com</a> <br><a href="<?php bloginfo('url');?>/management-team/">Read More</a></p>
			</div>
		</div>
	</div>
	<br>
	<div class="row" style="position:relative;">
		<div class="col-xs-4">
			<img src="<?php bloginfo('template_url');?>/images/philipbogner.jpg" alt="Philip Bogner">
			<div class="profile" style="margin:0 auto">
				<h6>Philip Bogner</h6>
				<p><strong>Partner / President</strong><br>Philip has dedicated a 29 year career to the consumer and industrial goods industries specializing in general management, sales, marketing, product development and operations. He possesses vast knowledge and experiences in multiple industries and product categories which includes House<br>You may contact Phil at 316.253.3315 or <a href="mailto:pBogner@SearchAmericas.com">pBogner@SearchAmericas.com</a><br><a href="<?php bloginfo('url');?>/management-team/">Read More</a></p>
			</div>
		</div>
		<div class="col-xs-4"></div>
		<div class="col-xs-4">
			<img src="<?php bloginfo('template_url');?>/images/John-Roach.jpg" alt="John Roach">
			<div class="profile" style="margin:0 auto">
				<h6>John Roach</h6>
				<p><strong>Partner / Senior Vice President</strong><br>John earned his Bachelor of Science degree from Southern Illinois University.  He has a 30+ years career of Sales and Product Management in several product categories including consumer photo, and lawn &amp; garden.  <br>You may contact John at 847.293.8557 or  <a href="mailto:jRoach@SearchAmericas.com">jRoach@SearchAmericas.com</a><br><a href="<?php bloginfo('url');?>/management-team/">Read More</a></p>
			</div>
		</div>
		<div class="wecare">
			<h3>WE CARE</h3>
			<p>and are committed to understanding your business by providing performance laden culturally fit talent to produce higher than expected results in a timely fashion.</p>
		</div>
	</div>
	
</div>


</div><!-- #main-content -->
<?php get_footer();
