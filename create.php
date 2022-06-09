<?php 
    session_start();
?>

    <?php include('includes/header.php');?>   

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card p-3">
                <div class="card-header d-flex justify-content-between align-items-center p-0 px-3">
                    <h4>Craete new user</h4>
                    <a href="index.php" class="btn btn-success btn-sm my-4">Home</a>
                </div>
                <?php include "message.php";  ?>
                <div class="card-body">
                <form action="main.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fullname</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fullname" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone Number" required>
                    </div>
                    <button type="submit" name="create_btn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php');?>   