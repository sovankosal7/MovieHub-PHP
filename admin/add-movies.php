<head><title>Add Movies</title></head>
<?php
  include('includes/header.php');
  include('includes/connection.php');
  include('includes/session.php');

  if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $desc  = $_POST['desc'];
    $duration = $_POST['duration'];
    $rating = $_POST['rating'];
    $catagory = $_POST['catagory'];
    $date = $_POST['date'];
    $url = $_POST['url'];
    $quality = $_POST['quality'];
    $image = $_FILES['img']['name'];

    move_uploaded_file($_FILES['img']['tmp_name'],"images/".$image);
    $create = "INSERT INTO tbl_movies(title, description, quality, date, duration, image, url, rating, cat_id ) VALUES('$title', '$desc', '$quality', '$date', '$duration', '$image', '$url', '$rating', '$catagory')";
    $query = mysqli_query($conn, $create);
    if($query){
        ?>
        <script>
            alert("Product added successfully"); 
        </script>
        <?php
      }
  }
?>
        <form method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Title" name="title">
          </div>

          <div class="form-group">
            <label>Description</label><br>
            <textarea rows="3" class="form-control" placeholder="Description" name="desc"></textarea>
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
            <input type="text" class="form-control" placeholder="Duration" name="duration">
          </div>

          <div class="form-group">
            <label>Quality</label>
            <input type="text" class="form-control" placeholder="Quality" name="quality">
          </div>

          <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="date">
          </div>

          <div class="form-group">
            <label>URL</label>
            <input type="url" class="form-control" placeholder="Enter movie link" name="url">
          </div>

          <div class="form-group">
            <label>Rating</label>
            <input type="text" class="form-control" placeholder="Rating" name="rating">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="img">
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

<?php
  include('includes/footer.php');
?>