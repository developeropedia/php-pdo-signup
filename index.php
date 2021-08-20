<?php

include('includes/functions.php');

signup();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =============================bootstrap4=========================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body class="" style="height: 100vh">
<div class="d-flex h-100 justify-content-center align-items-center">
    <div class="border w-50 p-5 mx-5">
        <!-- Show message from sign up -->
        <?php
        if(isset($message) && $message !== '' && $message !== 'Success'){
            echo "<p class='alert alert-danger'>$message</p>";
        }
        if(isset($message) && $message == 'Success'){
            echo "<p class='alert alert-success'>Signed up successfully!</p>";
        }
        ?>
        <div id="">

            <div class="">
                <h3 class="text-center">Sign Up</h3>
            </div>

            <!-- Login Form -->
            <form method="POST" class="">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control" name="fname" placeholder="Enter first name" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control" name="lname" placeholder="Enter last name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter email" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control" name="username" placeholder="Enter username" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
            </form>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>