<?php
 include("includes/header2.php")
?>
<section class="home_banner_area blog_banner">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay3 bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="blog_b_text text-center">
                    <h2>I am <br /> Makana Nria</h2>
                    <p>Get to Know about me and the Value I offer</p>
                    <a class="white_bg_btn" href="#">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
<?php
    $query2 = "SELECT * FROM about WHERE id = 1 LIMIT 1";
    $result = $mysqli->query($query2) or die($mysqli->error);
    $row = $result->fetch_assoc();
?>

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
<?php
include("includes/footer.php");
?>
