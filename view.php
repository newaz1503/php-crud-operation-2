<?php 
    include "database.php";
?>
 <?php include('includes/header.php');?>  
 
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card p-3">
                <div class="card-header d-flex justify-content-between align-items-center p-0 px-3">
                    <h4>User details</h4>
                    <a href="index.php" class="btn btn-success btn-sm my-4">Home</a>
                </div>
                <div class="card-body">
                    <?php  
                        if(isset($_GET['id'])){
                            $id = mysqli_real_escape_string($connection, $_GET['id']);
                            $query = "SELECT * FROM user where id=$id";
                            $query_run = mysqli_query($connection, $query);
                            if(mysqli_num_rows($query_run) > 0){
                                $user = mysqli_fetch_assoc($query_run);
                                ?>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Fullname</label>
                                        <p class="form-control">
                                            <?php echo $user['name'] ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <p class="form-control">
                                            <?php echo $user['email'] ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                                        <p class="form-control">
                                            <?php echo $user['phone'] ?>
                                        </p>
                                    </div> 
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