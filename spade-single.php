<?php
 include("includes/header.php")
?>
<?php
    if(isset($_GET['spade'])){
        $id = $_GET['spade'];
        $query2 = "SELECT * FROM spade WHERE id={$id} LIMIT 1";
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
						<h2>SPADE FULL STORY</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="#">SPADE DETAILS</a>
						</div>

					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->


        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="admin/images/<?php echo $row['picture']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Leadership,</a>
                                        <a class="active" href="#">Business,</a>
                                        <a href="#">Gospel</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Makana Nria<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#"><?php echo $day. " ". $month. ", ". $year?><i class="lnr lnr-calendar-full"></i></a></li>

                                    </ul>
                                    <ul class="social-links">
                                    <a href="https://free.facebook.com/makana.nria.3?v=info&ref_component=mfreebasic_home_header&ref_page=XMenuController"><i class="fa fa-facebook"></i></a>
                                    <a href="https://mobile.twitter.com/makananria"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/makananria/"><i class="fa fa-instagram"></i></a>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2><?php echo $row['title'];?></h2>
                                <p class="excert"><?php echo $row['summary'];?></p>
                                <p><?php echo $row['main_post'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <!-- <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div>/input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="img/makanasquare.png" alt="">
                                <h4>Makana Nria</h4>
                                <p>Spade Author</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <p>I am Makana Nria an inspired bloggeer with excellent content that leaves you in thoughts for a long time birthing long lasting impact.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Leadership</p>
                                            <p>37</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Business</p>
                                            <p>24</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Gospel</p>
                                            <p>59</p>
                                        </a>
                                    </li>
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Adventure</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
<?php
    include("includes/footer.php");
    }
    else{
    redirect_to("blog.php");
    }
?>