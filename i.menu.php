
			<?php if($page == "c.main.php" ){ ?>
			<nav class="nav nav-top nav-hide" data-state="collapsed">
			<?php } else{ ?>
			<nav class="nav nav-top" data-state="collapsed">
			<?php } ?>
				<ul class="main-menu-top">
					<li class="<?php if($page == 'c.main.php'){ echo 'active';}?>"><a href="home">Home</a></li>
					
					<li class="<?php if($page == 'c.whatwedo.php'){ echo 'active';}?>"><a href="whatwedo">What We Do</a></li>
					
					<li class="<?php if($page == 'c.team.php'
					|| $page == 'c.team_bio1.php' 
					|| $page == 'c.team_bio2.php' 
					|| $page == 'c.team_bio3.php' 
					|| $page == 'c.team_bio4.php' 
					|| $page == 'c.team_bio5.php' 
					|| $page == 'c.team_bio6.php' 
					|| $page == 'c.team_bio7.php' 
					|| $page == 'c.team_bio8.php' 
					|| $page == 'c.team_bio9.php' 
					|| $page == 'c.team_bio10.php' 
					|| $page == 'c.team_bio11.php' 
					|| $page == 'c.team_bio12.php' 
					|| $page == 'c.team_bio13.php' 
					|| $page == 'c.team_bio14.php' 
					|| $page == 'c.team_bio15.php' 
					|| $page == 'c.team_bio16.php' 
					|| $page == 'c.team_bio17.php' 
					|| $page == 'c.team_bio18.php' 
					|| $page == 'c.team_bio19.php'  
					){ echo 'active';}?>"><a href="team">Team</a></li>
					
					<li class="<?php if($page == 'c.projects.php' 
					|| $page == 'c.commercial_residential.php' 
					|| $page == 'c.educational_institutional.php' 
					|| $page == 'c.industrial_warehouse.php' 
					|| $page == 'c.institutional.php' 
					|| $page == 'c.medical_institutional.php' 
					|| $page == 'c.office_commercial_govt.php' 
					|| $page == 'c.recreational.php' 
					|| $page == 'c.residential.php' 
					|| $page == 'c.tenant_improvements.php' 
					|| $page == 'c.comm_res003.php'
					){ echo 'active';}?>"><a href="projects">Projects</a></li>
					
					<li class="<?php if($page == 'c.news.php' 
					|| $page == 'c.news1.php' 
					|| $page == 'c.news2.php' 
					|| $page == 'c.news3.php' 
					|| $page == 'c.news4.php'){ echo 'active';}?>"><a href="news">News</a></li>
					
					<li class="<?php if($page == 'c.story.php'){ echo 'active';}?>"><a href="story">Story</a></li>
					
					<li class="<?php if($page == 'c.contact.php'){ echo 'active';}?>"><a href="contact">Contact</a></li>
				</ul>
			</nav><!-- // End of nav -->