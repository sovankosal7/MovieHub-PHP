<?php
    include('includes/header.php');
    include('includes/session.php');
?>
<head><title>Manage Movie</title></head>
<style>
    h3:hover{
        color : red;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="movie-list.php" class="link-success"><h3>Movies List</h3></a>
        </div>
        <div class="col-md-4">
            <a href="add-movies.php" class="link-success"><h3>Add Movie</h3></a>
        </div>
        <div class="col-md-4">
            <a href="add-movies-type.php" class="link-success"><h3>Add Catagories</h3></a>
        </div>
    </div>
</div>
<?php
    include('includes/footer.php')
?>