<?php
  include('includes/header.php');
  include('includes/connection.php');
  include('includes/session.php');
  
  if(isset($_POST['submit'])){
    $catagory = $_POST['Catagory'];

    $create = "INSERT INTO tbl_movietypes(name) VALUES('$catagory')";
    $query = mysqli_query($conn, $create);
    if($query){
        ?>
        <script>
            alert("Catagory added successfully"); 
        </script>
        <?php
      }
  }
?>
        <form method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Catagory</label>
            <input type="text" class="form-control" placeholder="Catagory" name="Catagory">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
<?php
  include('includes/footer.php');
?>