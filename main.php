<?php 
    session_start();
    include "database.php";
    //user create/store
    if(isset($_POST['create_btn'])){
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);

        $query = "INSERT INTO user (name, email, phone) VALUES('$name', '$email', '$phone')";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            $_SESSION["message"] = "User created successfully";
            header("Location: index.php");
            exit();
        }else{
            $_SESSION["message"] = "User not created successfully";
            header("Location: index.php");
            exit();
        }
    }
    //user update
    if(isset($_POST['edit_btn'])){
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $id = mysqli_real_escape_string($connection, $_POST['user_id']);

        $query = "UPDATE user SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            $_SESSION['message'] = "User updated successfully";
            header('Location: index.php');
            exit();
        }else{
            $_SESSION['message'] = "User not updated successfully";
            header('Location: index.php');
            exit();
        }
    }
    //user delete
    if(isset($_POST['delete_user'])){
        $id = mysqli_escape_string($connection ,$_POST['delete_user']);
        $query = "DELETE FROM user WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            $_SESSION['message'] = "User Deleted successfully";
            header('Location: index.php');
            exit();
        }else{
            $_SESSION['message'] = "User not Deleted successfully";
            header('Location: index.php');
            exit();
        }
      
    }





?>