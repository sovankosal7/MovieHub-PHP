<?php
  include('includes/header.php');
  include('includes/connection.php');
  include('includes/session.php');
  $updateID = $_GET['update_id'];
  $select = "SELECT * FROM tbl_movies WHERE movie_id=$updateID";
  $query = mysqli_query($conn, $select);
  $result = mysqli_fetch_assoc($query);
?>
<head><title>Update Movie</title></head>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" value="<?php echo $result['title']?>" name="title">
        </div>

        <div class="form-group">
        <label>Description</label><br>
        <textarea rows="3" class="form-control" name="desc"><?php echo $result['description']?></textarea>
        </div>

        <div class="form-group">
        <label for="">Catagory</label><br>
            <select class="form-control form-select" aria-label="Default select example" name="catagory">
            <?php
                $select = "SELECT * FROM tbl_movietypes";
                $query  = mysqli_query($conn, $select);
                for($i = 0; $type[$i] = mysqli_fetch_array($query); $i++){
            ?>
            <option value="<?php echo $type[$i]['type_id'] ?>"><?php echo $type[$i]['name'] ?></option>
            <?php
                }
            ?>
            </select>
        </div>

        <div class="form-group">
        <label>Duration</label>
        <input type="text" class="form-control" value="<?php echo $result['duration']?>" name="duration">
        </div>

        <div class="form-group">
        <label>Quality</label>
        <input type="text" class="form-control" value="<?php echo $result['quality']?>" name="quality">
        </div>

        <div class="form-group">
        <label>Date</label>
        <input type="date" class="form-control" name="date" value="<?php echo $result['date']?>">
        </div>

        <div class="form-group">
        <label>URL</label>
        <input type="url" class="form-control" value="<?php echo $result['url']?>" name="url">
        </div>

        <div class="form-group">
        <label>Rating</label>
        <input type="text" class="form-control" value="<?php echo $result['rating']?>" name="rating">
        </div>

        <div class="form-group">
        <label>Image</label>
        <img src="images/<?php echo $result['image']?>" width="100" height="100">
        <input type="file" class="form-control" name="image">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $catagory = $_POST['catagory'];
            $duration = $_POST['duration'];
            $quality = $_POST['quality'];
            $date = $_POST['date'];
            $url = $_POST['url'];
            $rating = $_POST['rating'];
            $old_image = $result['image'];

            if(!empty($_FILES['image']['name'])){
                $image = $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],"images/".$image);
            }else{
                $image = $old_image;
            }

            $update = "UPDATE tbl_movies SET title='$title', description='$desc', quality='$quality', 
            date='$date', duration='$duration', image='$image', url='$url', rating='$rating', cat_id='$catagory'
            WHERE movie_id=$updateID";
            $query_update = mysqli_query($conn, $update);
            if($query_update){
                echo "<script>alert('Movie Updated Successfully');</script>";
                echo "<script>window.location.href='movie-list.php';</script>";
            }
        }
    ?>
<?php
  include('includes/footer.php');
?>