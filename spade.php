<?php
 include("includes/header2.php")
?>
<!--================Home Banner Area =================-->
<section class="home_banner_area blog_banner">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="blog_b_text text-center">
                    <h2>You're Welcome to <br /> SPADE</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first</p>
                    <a class="white_bg_btn" href="#">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/lead.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>Leadership</h5></a>
                                <div class="border_line"></div>
                                <p>Spade Leadership Posts</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/gospel.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>Gospel</h5></a>
                                <div class="border_line"></div>
                                <p>Spade Gospel Posts</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/business.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>Business</h5></a>
                                <div class="border_line"></div>
                                <p>Spade Business Posts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <?php
                            $query2 = "SELECT * FROM spade ORDER BY id DESC";
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
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Leadership,</a>
                                            <a class="active" href="#">Business,</a>
                                            <a href="#">Gospel</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Makana Nria<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"><?php echo $day. " ". $month. ", ". $year?><i class="lnr lnr-calendar-full"></i></a></li>
                                            <!-- <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="admin/images/<?php echo $row['picture'];?>" alt="">
                                        <div class="blog_details">
                                            <a href="spade-single.php?spade=<?php echo urlencode($row['id']); ?>"><h2><?php echo $row['title'];?></h2></a>
                                            <p><?php echo $row['summary'];?></p>
                                            <a href="spade-single.php?spade=<?php echo urlencode($row['id']); ?>" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php } ?>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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
                                <a href="https://free.facebook.com/makana.nria.3?v=info&ref_component=mfreebasic_home_header&ref_page=XMenuController"><i class="fa fa-facebook"></i></a>
                                <a href="https://mobile.twitter.com/makananria"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/makananria/"><i class="fa fa-instagram"></i></a>
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
?>