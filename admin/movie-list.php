<head><title>Movie List</title></head>
<?php
    include('includes/connection.php');
    include('includes/header.php');
    include('includes/session.php');
    $read = "SELECT * FROM tbl_movies";
    $query = mysqli_query($conn, $read);
?>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-hover table-bordered table-sm text-center" id="myTable">
                <thead class="table-info">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    while($row=mysqli_fetch_assoc($query)){  
                    ?>
                    <tr>
                        <td><?php echo ++$i;?></td>
                        <td><strong><?php echo $row['title']?></strong></td>
                        <?php
                        $type = $row['cat_id'];
                        $read = "SELECT * FROM tbl_movietypes WHERE type_id = $type";
                        $sql = mysqli_query($conn, $read);
                        $show = mysqli_fetch_assoc($sql);
                        ?>
                        <td><?php echo $show['name']; ?></td>
                        <td width="350px"><?php echo substr($row['description'],0,30);?>...</td>
                        <td><?php echo $row['date']?></td>
                        <td><img src="images/<?php echo $row['image'] ?>" width="40" height="40" class="rounded-circle"></td>
                        <td>
                            <a href="update.php?update_id=<?php echo $row['movie_id']?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="delete.php?delete_id=<?php echo $row['movie_id']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
<?php
    include('includes/footer.php');
?>