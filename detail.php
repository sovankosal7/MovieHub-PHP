<?php
    include('includes/connection.php');
    include('includes/header.php');
    $movieId = $_GET['movie_id'];
    $read = "SELECT * FROM tbl_movies WHERE movie_id = $movieId ";
    $sql = mysqli_query($conn, $read);
    $movieDetail = mysqli_fetch_array($sql);
?>

<div class="container m-auto">
    <h2><?php echo $movieDetail['title']; ?></h2>
    <div class="row">
        <div class="col-6">
            <?php
                $url = $movieDetail['url'];
                $embedUrl = str_replace("watch?v=", "embed/", $url);
            ?>
            <iframe src="<?php echo $embedUrl; ?>" 
                title="<?php echo $movieDetail['title']; ?>" allowfullscreen>
            </iframe>
            <p class="mt-3"><b>Duration:</b> <?php echo $movieDetail['duration']; ?> mins</p>
            <p><b>Rating:</b> <?php echo $movieDetail['rating']; ?></p>
            <p><b>Quality:</b> <?php echo $movieDetail['quality']; ?></p>
        </div>
        <div class="col-6">
            <p>Description:</p>
            <p><?php echo $movieDetail['description']; ?></p>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Similar Product</h2>
        </div>
    </div>
    <div class="row m-5 justify-content-center">
        <?php
        $type = $movieDetail['cat_id'];
        $sql = "SELECT * FROM tbl_movies WHERE cat_id = $type ORDER BY movie_id DESC LIMIT 7";
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

<?php
    include('includes/footer.php');
?>