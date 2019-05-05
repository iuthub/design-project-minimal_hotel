<?php include ('server.php')?>

<!DOCTYPE html>
<html>


<head>
    <title>Registration</title>
</head>
<body>

<div class="container">

    <div class="header">

        <h2>
            Log in
        </h2>

    </div>

    <form action="reg.php" method="post">


        <div>
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>



        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>


        <button type="submit" name="login_user"><a href="index2.php"> Log in</a></button>

        <p>Already a user?<a href="index.php"><b>Register here</b></a></p>
    </form>




</div>


</body>
</html>