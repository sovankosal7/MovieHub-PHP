<body>
    <?php
        include("includes/connection.php");
        include('includes/session.php');
        $deleteID = $_GET['delete_id'];
        $delete = "DELETE FROM tbl_movies WHERE movie_id = $deleteID";
        $query = mysqli_query($conn, $delete);
        if($query){
            echo "<script>alert('Deleted Successfully!'); window.location.href='movie-list.php'</script>";
            
        }else{
            echo "<script>alert('Delete Failed!');</script>";
        }
   ?>
</body>