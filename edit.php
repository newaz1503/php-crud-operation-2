<?php 
    session_start();
    include "database.php";
?>
 <?php include('includes/header.php');?>  

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card p-3">
                <div class="card-header d-flex justify-content-between align-items-center p-0 px-3">
                    <h4>Edit user</h4>
                    <a href="index.php" class="btn btn-success btn-sm my-4">Home</a>
                </div>
                <?php include "message.php"; ?>
                <div class="card-body">
                    <?php  
                        if(isset($_GET['id'])){
                            $id = mysqli_real_escape_string($connection, $_GET['id']);
                            $query = "SELECT * FROM user where id=$id";
                            $query_run = mysqli_query($connection, $query);
                            if(mysqli_num_rows($query_run) > 0){
                                $user = mysqli_fetch_assoc($query_run);
                                ?>
                                     <form action="main.php" method="POST">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Fullname</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user['name'] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $user['email'] ?>" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $user['phone'] ?>" required>
                                        </div>
                                        <input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-primary mt-3">Update</button>
                                    </form>
                                <?php
                                
                            }else{
                                echo "<h4>Id not found</h4>";
                            }
                        }
                    ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php include('includes/footer.php');?>  