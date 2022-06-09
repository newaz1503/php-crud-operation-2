<?php 
    session_start();
    include "database.php"; 
?>
 <?php include('includes/header.php');?>   

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <?php    
                        include "message.php";
                    ?>
                    <div class="card-header d-flex justify-content-between align-items-center p-0 px-3">
                        <h4>User List</h4>
                        <a href="create.php" class="btn btn-primary">Create User</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-stripe tabled table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM user";
                                    $query_run = mysqli_query($connection, $query);
                                    if(mysqli_num_rows($query_run) > 0){
                                        foreach($query_run as $key=>$user){
                                        ?>
                                            <tr>
                                                <td><?php echo $key + 1 ?></td>
                                                <td><?php echo $user['name']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td><?= $user['phone']; ?></td>
                                                <td>
                                                    <a href="view.php?id=<?php echo $user['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="main.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_user" value="<?php echo $user['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php  
                                        }
                                    }else{
                                        echo "Data not found";
                                    }

                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php include('includes/footer.php');?>  