<?php
 include("includes/header2.php")
?>
<!--================Home Banner Area =================-->
<section class="home_banner_area blog_banner">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay2 bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="blog_b_text text-center">
                    <h2>POETRY</h2>
                    <p>Tell me, what is it you plan to do with your one wild and precious life?</p>
                    <a class="white_bg_btn" href="#">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Latest Blog Area =================-->
    <section class="latest_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Latest Posts from Our Poetry</h2>
        			<p>Tell me, what is it you plan to do with your one wild and precious life?</p>
        		</div>
        		<div class="row latest_blog_inner">
					<?php
                        $query2 = "SELECT * FROM poetry ORDER BY id DESC";
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
        						<a href="poetry-details.php?poetry=<?php echo urlencode($row['id']); ?>"><img class="img-fluid" src="admin/images/<?php echo $row['picture'];?>" alt=""></a>
        					</div>
        					<div class="l_blog_text">
        						<div class="date">
        							<a href="poetry-details.php?poetry=<?php echo urlencode($row['id']); ?>"><?php echo $day. " ". $month. ", ". $year?>  |  By <?php echo $row['author']; ?></a>
        						</div>
        						<a href="poetry-details.php?poetry=<?php echo urlencode($row['id']); ?>"><h4><?php echo $row['title']?></h4></a>
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