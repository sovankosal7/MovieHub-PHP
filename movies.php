<?php
    include('includes/header.php');
    include('includes/connection.php');
    $type = $_GET['type_id'];
?>
<style>
    .bx{
        color: #1570e8;
    }
</style>
            <!-- TOP MOVIES SLIDE -->
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                 <?php
                $sql = "SELECT * FROM tbl_movies WHERE cat_id = $type ORDER BY created  DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                 ?> 
                <a href="detail.php?movie_id=<?php echo $row['movie_id'] ?>">
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
                </a>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- END TOP MOVIES SLIDE -->
    
    <!-- LATEST MOVIES SECTION -->
    <div class="section">
       <div class="container mt-5">
            <div class="section-header">
                <nav>
                    <?php
                    $catSql = "SELECT * FROM tbl_movietypes WHERE type_id = $type";
                    $catQuery = mysqli_query($conn, $catSql);
                    $catRow = mysqli_fetch_assoc($catQuery);
                ?>
                latest <?php echo $catRow['name'];?>
                </nav>
                <nav>
                    <form method="GET" style="text-align:center; margin:20px;">
                        <input type="text" name="search" placeholder="Search movie by title" style="padding:8px; width:250px;">
                        <button type="submit" style="padding:8px;">Search</button>
                    </form>
                </nav>
            </div>
            <div class="row m-5 justify-content-center">
                <?php
                $sql = "SELECT * FROM tbl_movies WHERE cat_id = $type";
                $query = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($query)){
                ?>
                <a href="detail.php?movie_id=<?php echo $row['movie_id'] ?>">
                    <div class="movies-grid justify-content-center">
                        <div class="card h-100">
                            <img src="admin/images/<?php echo $row['image'] ?>" 
                                class="card-img-top" 
                                style="height:250px; object-fit:cover; width:210px;" 
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                                <p>
                                    <small>
                                        <span><i class="bx bxs-star"></i> <?php echo $row['rating'] ?></span>
                                        <span><i class="bx bxs-time"></i> <?php echo $row['duration'] ?> mins</span>
                                        <span><?php echo $row['quality'] ?></span>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                    
                <?php
                }
                ?>
            </div>
        </div> 
    </div>
        

    <!-- END LATEST MOVIES SECTION -->
     
<?php
    include('includes/footer.php');
?>
