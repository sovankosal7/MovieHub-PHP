<head><title>Add Slide</title></head>
<?php
  include('includes/header.php');
  include('includes/connection.php');
  include('includes/session.php');

  if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $desc  = $_POST['desc'];
    $duration = $_POST['duration'];
    $rating = $_POST['rating'];
    $quality = $_POST['quality'];
    $image = $_FILES['img']['name'];

    move_uploaded_file($_FILES['img']['tmp_name'],"images/slides/".$image);
    $create = "INSERT INTO tbl_slide(title, description, duration, rating, quality, image) VALUES('$title', '$desc', '$duration', '$rating','$quality', '$image')";
    $query = mysqli_query($conn, $create);
    if($query){
        ?>
        <script>
            alert("Slide added successfully"); 
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
            <label>Descipton</label><br>
            <textarea id="w3review" rows="3" cols="160" placeholder="Descripton" name="desc"></textarea>
          </div>
          <div class="form-group">
            <label>Duration</label>
            <input type="text" class="form-control" placeholder="Duration" name="duration">
          </div>
          <div class="form-group">
            <label>Rating</label>
            <input type="text" class="form-control" placeholder="Rating" name="rating">
          </div>
          <div class="form-group">
            <label>Quality</label>
            <input type="text" class="form-control" placeholder="quality" name="quality">
          </div>
          <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" placeholder="Image" name="img">
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
<?php
  include('includes/footer.php');
?>