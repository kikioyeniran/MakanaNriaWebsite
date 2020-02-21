<?php
 include("includes/header.php")
?>
<?php
    if(isset($_GET['poetry'])){
        $id = $_GET['poetry'];
        $query2 = "SELECT * FROM poetry WHERE id={$id} LIMIT 1";
        $result = $mysqli->query($query2) or die($mysqli->error);
        $row = $result->fetch_assoc();
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
<!--================Home Banner Area =================-->
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Full Poem</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="#">Poetry In Full</a>
						</div>

					</div>
				</div>
            </div>
        </section>
    <!--================End Home Banner Area =================-->
 <!--================Portfolio Details Area =================-->
 <section class="portfolio_details_area p_120">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" src="admin/images/<?php echo $row['picture'];?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio_right_text">
                            <h4><?php echo $row['title'];?></h4>
                            <p><?php echo $row['summary'];?></p>
                            <ul class="list">
                                <li><span>Written By</span>:  <?php echo $row['author'];?></li>
                                <li><span>Website</span>:  makananria.com.ng</li>
                                <li><span>Date</span>:  <?php echo $day. " ". $month. ", ". $year; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><?php echo $row['main_post'];?></p>
            </div>
        </div>
    </section>
    <!--================End Portfolio Details Area =================-->

<?php
    include("includes/footer.php");
    }
    else{
    redirect_to("blog.php");
    }
?>