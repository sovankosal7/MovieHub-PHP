<?php
    include('includes/header.php');
    include('includes/connection.php');
?>
<style>
    .bx{
        color: #1570e8;
    }
</style>
    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <?php
                $read = "SELECT * FROM tbl_slide";
                $query = mysqli_query($conn, $read);
                for($i=0; $slide[$i]= mysqli_fetch_assoc($query); $i++){
                ?>
                <div class="hero-slide-item">
                    <img src="admin/images/slides/<?php echo $slide[$i]['image'];?>" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                <?php echo $slide[$i]['title'];?>
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <?php echo $slide[$i]['rating'];?>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span><?php echo $slide[$i]['duration']."mins";?></span>
                                </div>
                                <div class="movie-info">
                                    <span><?php echo $slide[$i]['quality'];?></span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                <?php echo $slide[$i]['description'];?>
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#"5 class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                 <?php
                $sql = "SELECT * FROM tbl_movies ORDER BY created  DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                 ?>
                <div class="movie-item">
                    <img src="admin/images/<?php echo $row['image'] ?>" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            <?php echo $row['title'] ?>
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span><?php echo $row['rating'] ?></span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span><?php echo $row['duration'] ?> mins</span>
                            </div>
                            <div class="movie-info">
                                <span><?php echo $row['duration'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- END TOP MOVIES SLIDE -->
    </div>
    <!-- END HERO SECTION -->

    <!-- LATEST MOVIES SECTION -->
     <?php
        $moType = "SELECT * FROM tbl_movietypes ORDER BY type_id DESC";
        $queryType = mysqli_query($conn, $moType);
        while($type = mysqli_fetch_assoc($queryType)){
     ?>
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest <?php echo $type['name'];?>
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                 <?php
                    $moId = $type['type_id'];
                    $sql = "SELECT * FROM tbl_movies WHERE cat_id = $moId ORDER BY created  DESC LIMIT 7";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                 ?>
                <a href="#" class="movie-item">
                    <img src="admin/images/<?php echo $row['image']?>">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            T<?php echo $row['title']?>
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span><?php echo $row['rating']?></span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span><?php echo $row['duration']?> mins</span>
                            </div>
                            <div class="movie-info">
                                <span><?php echo $row['duration'] ?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <?php
                    }
                ?>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <!-- END LATEST MOVIES SECTION -->

    <!-- PRICING SECTION -->
    <div class="section">
        <div class="container">
            <div class="pricing">
                <div class="pricing-header">
                    Fl<span class="main-color">i</span>x pricing
                </div>
                <div class="pricing-list">
                    <div class="row">
                        <div class="col-4 col-md-12 col-sm-12">
                            <div class="pricing-box">
                                <div class="pricing-box-header">
                                    <div class="pricing-name">
                                        Basic
                                    </div>
                                    <div class="pricing-price">
                                        Free
                                    </div>
                                </div>
                                <div class="pricing-box-content">
                                    <p>Originals</p>
                                    <p>Swich plans anytime</p>
                                    <p><del>65+ top Live</del></p>
                                    <p><del>TV Channels</del></p>
                                    <p><del>4K Video Quality</del></p>
                                </div>
                                <div class="pricing-box-action">
                                    <a href="#" class="btn btn-hover">
                                        <span>Register now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-12 col-sm-12">
                            <div class="pricing-box hightlight">
                                <div class="pricing-box-header">
                                    <div class="pricing-name">
                                        Premium
                                    </div>
                                    <div class="pricing-price">
                                        $15.99 <span>/month</span>
                                    </div>
                                </div>
                                <div class="pricing-box-content">
                                    <p>Originals</p>
                                    <p>Swich plans anytime</p>
                                    <p>Full HD Video Quality</p>
                                    <p>65+ top Live</p>
                                    <p><del>TV Channels</del></p>         
                                </div>
                                <div class="pricing-box-action">
                                    <a href="#" class="btn btn-hover">
                                        <span>Register now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-12 col-sm-12">
                            <div class="pricing-box">
                                <div class="pricing-box-header">
                                    <div class="pricing-name">
                                        VIP
                                    </div>
                                    <div class="pricing-price">
                                        $35.99 <span>/month</span>
                                    </div>
                                </div>
                                <div class="pricing-box-content">
                                    <p>Originals</p>
                                    <p>Swich plans anytime</p>
                                    <p>65+ top Live</p>
                                    <p>TV Channels</p>
                                    <p>4K Video Quality</p>
                                </div>
                                <div class="pricing-box-action">
                                    <a href="#" class="btn btn-hover">
                                        <span>Register now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRICING SECTION -->
<?php
    include('includes/footer.php');
?>
