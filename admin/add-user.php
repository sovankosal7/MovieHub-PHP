<head><title>Add User</title></head>
<?php
  include('includes/header.php');
  include('includes/connection.php');
  include('includes/session.php');

  if(isset($_POST['adduser'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirm_password'];
    
    $sms="";
    if(empty($name) || empty($username) || empty($password) || empty($confirmPass)){
        $sms="All fields are required";
    }elseif($password != $confirmPass){
        $sms="Password do not match";
    }else{
        $encrypted_password = md5($password);
        $create = "INSERT INTO tbl_user(full_name, username, password) VALUES('$name', '$username', '$encrypted_password')";
        $query = mysqli_query($conn, $create);
        if($query){
            $sms="User added successfully";
        }
    }
?>
    <script>
        alert("<?php echo $sms; ?>"); 
    </script>
<?php
  }
?>
        <form method="POST" enctype="multipart/form-data">
          <h2>Add User</h2>
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="text" class="form-control" name="confirm_password">
          </div>
          
          <button type="submit" class="btn btn-primary" name="adduser">Create</button>
        </form>
<?php
  include('includes/footer.php');
?>