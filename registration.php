<?php include"db.php"; ?>
<?php session_start();?>

<?php

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $branch = $_POST['branch'];
    $password_repeat = $_POST['password_repeat'];

    $username = mysqli_real_escape_string($connection,$username);
    $firstname = mysqli_real_escape_string($connection,$firstname);
    $lastname = mysqli_real_escape_string($connection,$lastname);
    $password = mysqli_real_escape_string($connection,$password);
    $password_repeat = mysqli_real_escape_string($connection,$password_repeat);
    $branch = mysqli_real_escape_string($connection,$branch);


    if($password==$password_repeat)
    {
        $message = "";
        if(strlen($password)<7)
        {
            $message = "password too small";
        }
        $query = "SELECT * FROM users where username = '$username'";
        $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0)
        {
            $message = "this username is already taken";
        }
        else{
            $query  = "INSERT INTO users(username,firstname,lastname,branch,password)";
            $query .= "VALUES('{$username}','{$firstname}','{$lastname}','{$branch}','{$password}')";
            $register_user_query = mysqli_query($connection,$query);
            if(!$register_user_query)
            {
                die("QUERY FAILED ".mysqli_error($connection));
            }
            header("Location: index.php");

        }

    }
    else
    {
        $message = "password not matching";
    }
}
else{
    $message="";
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("https://i.redd.it/51h0kd9yrjdz.jpg");
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            margin-right: 23%;
            margin-left: 23%;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 40px;
            background: rgba(64, 58, 57 ,0.95);
            padding-bottom: 20px;

        }

        /* Full-width input fields */
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]
        {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            display: inline;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background: rgba(64, 58, 57 ,0.95);
            text-align: center;
            padding-top: 1px;
        }
        .my_color{
            color:floralwhite !important;
        }
    </style>
</head>
<body>

<form action="registration.php" method="post">
    <div class="container">
        <center><h1>Register</h1></center>
        <p><center>Please fill in this form to create an account.</center></p>
        <hr>
        <center><p class="my_color"><?php echo $message; ?></p></center>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="firstname"><b>Firstname</b></label>
        <input type = "text" placeholder="First name" name="firstname" required>

        <label for="lastname"><b>Lastname</b></label>
        <input type = "text" placeholder="last name" name="lastname"  required>
        <br/>
        <label for="branch"><b>Branch</b></label>
        <input type = "text" placeholder="branch" name="branch" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="password-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password_repeat" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="registerbtn" name="submit">Register</button>
        <hr>
    </div>
    <div class="container signin">

        <p>Already have an account? <a href="login_1/index.php">Sign in</a>.</p>
    </div>
</form>

</body>
</html>
