<?php
 include("includes/header.php")
?>

<?php
    $query2 = "SELECT * FROM about WHERE id = 1 LIMIT 1";
    $result = $mysqli->query($query2) or die($mysqli->error);
    $row = $result->fetch_assoc();
?>
<!--================Home Banner Area =================-->
<section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="home_left_img">
								<img src="admin/images/<?php echo $row['picture']; ?>" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="banner_content">
								<h5>Hey There! I'm</h5>
								<h2>Makana Nria</h2>
								<p>Let's talk. I want to have conversations with you because I like gist too much. I must warn you though, that I always call a spade a spade. You should too.</p>
								<a class="banner_btn" href="#">Let's Talk</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4>About Myself</h4>
        					<p><?php echo $row['profile']; ?></p>
        					<div class="row">
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h4>$2.5M</h4>
        								<p>Total Donation</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>1465</h4>
        								<p>Total Projects</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4>3965</h4>
        								<p>Total Volunteers</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="tools_expert">
							<h3>Professional Prowess</h3>
        					<div class="skill_main">
								<div class="skill_item">
									<h4>Public Speaking <span class="counter">85</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill_item">
									<h4>Creative Writing <span class="counter">90</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill_item">
									<h4>Business Development <span class="counter">70</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill_item">
									<h4>Legal Practice <span class="counter">95</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill_item">
									<h4>Teaching <span class="counter">75</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->

        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Services</h2>
        			<p>Here are a few of the Prosessional Services I offer.</p>
        		</div>
        		<div class="feature_inner row">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-city"></i>
        					<h4>Legal Practice</h4>
        					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-skyline"></i>
        					<h4>Business Development</h4>
        					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-sketch"></i>
        					<h4>Writing</h4>
        					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
        				</div>
        			</div>
        			<!-- <div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-city"></i>
        					<h4>Architecture</h4>
        					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-skyline"></i>
        					<h4>Interior Design</h4>
        					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-sketch"></i>
        					<h4>Concept Design</h4>
        					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
        				</div>
        			</div> -->
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->

        <!--================Projects Area =================-->
        <section class="projects_area p_120">
        	<div class="container">
        		<div class="main_title">
					<h2>Spade</h2>
					<p>Explore the Latest Blog Posts</p>
				</div>
        		<div class="projects_fillter">
					<ul class="filter list">
						<li class="active" data-filter="*"><a href="#">All Categories</a></li>
						<li data-filter=".brand"><a href="#">Gospel</a></li>
						<li data-filter=".work"><a href="#">Business </a></li>
						<li data-filter=".web"><a href="#">Leadership</a></li>
					</ul>
				</div>

				<div class="projects_inner row">
					<?php
						$query2 = "SELECT * FROM spade WHERE category = 'Gospel' ORDER BY id DESC LIMIT 3";
						$result = $mysqli->query($query2) or die($mysqli->error);
						while ($row = $result->fetch_assoc())
						{
					?>
						<div class="col-lg-4 col-sm-6 brand">
							<div class="projects_item">
								<img class="img-fluid" src="admin/images/<?php echo $row['picture']; ?>" alt="">
								<div class="projects_text">
									<a href="spade.php"><h4><?php echo $row['title']; ?></h4></a>
									<p>Spade <?php echo $row['category'];?> /p>
								</div>
							</div>
						</div>
					<?php } ?>
					<?php
						$query2 = "SELECT * FROM spade WHERE category = 'Business' ORDER BY id DESC LIMIT 3";
						$result = $mysqli->query($query2) or die($mysqli->error);
						while ($row = $result->fetch_assoc())
						{
					?>
					<div class="col-lg-4 col-sm-6 work">
						<div class="projects_item">
							<img class="img-fluid" src="admin/images/<?php echo $row['picture']; ?>" alt="">
							<div class="projects_text">
								<a href="spade.php"><h4><?php echo $row['title']; ?></h4></a>
								<p>Spade <?php echo $row['category'];?></p>
							</div>
						</div>
					</div>
					<?php } ?>
						<?php
						$query2 = "SELECT * FROM spade WHERE category = 'Leadership' ORDER BY id DESC LIMIT 3";
						$result = $mysqli->query($query2) or die($mysqli->error);
						while ($row = $result->fetch_assoc())
						{
					?>
					<div class="col-lg-4 col-sm-6 web">
						<div class="projects_item">
							<img class="img-fluid" src="admin/images/<?php echo $row['picture']; ?>" alt="">
							<div class="projects_text">
								<a href="spade.php"><h4><?php echo $row['title']; ?></h4></a>
								<p>Spade <?php echo $row['category'];?></p>
							</div>
						</div>
					</div>
						<?php } ?>
				</div>
        	</div>
        </section>
        <!--================End Projects Area =================-->

        <!--================Latest Blog Area =================-->
        <section class="latest_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Latest Posts from Our Poetry</h2>
        			<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        		</div>
        		<div class="row latest_blog_inner">
					<?php
                        $query2 = "SELECT * FROM poetry ORDER BY id DESC LIMIT 3";
                        $result = $mysqli->query($query2) or die($mysqli->error);
                        while ($row = $result->fetch_assoc())
                        {
                            $dt = $row['dt'];
                            $new_dt = explode(" ", $dt);
                            $date = date("M, j, Y", strtotime($new_dt[0]));
                            $timw = $new_dt[1];
                            $new_dt2 = explode(",", $date);
                            $month = $new_dt2[0];
                            $day = $new_dt2[1];
                            $year= $new_dt2[2];
                            $timw = $new_dt[1];
                    ?>
        			<div class="col-lg-4">
        				<div class="l_blog_item">
        					<div class="l_blog_img">
        						<img class="img-fluid" src="admin/images/<?php echo $row['picture'];?>" alt="">
        					</div>
        					<div class="l_blog_text">
        						<div class="date">
        							<a href="#"><?php echo $day. " ". $month. ", ". $year?>  |  By <?php echo $row['author']; ?></a>
        						</div>
        						<a href="#"><h4><?php echo $row['title']?></h4></a>
        						<p><?php echo $row['summary']?></p>
        					</div>
        				</div>
        			</div>
						<?php } ?>

        		</div>
        	</div>
        </section>
        <!--================End Latest Blog Area =================-->

<?php
include("includes/footer.php");
?>