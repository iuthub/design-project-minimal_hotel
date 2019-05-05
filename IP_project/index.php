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
            registor
        </h2>

    </div>

    <form action="index.php" method="post">

<?php include('errors.php') ?>





        <div>
            <label for="username">Username</label>
            <input type="text" name="username" required>

        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label for="password_2">Password2</label>
            <input type="password_2" name="password_2" required>
        </div>

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="phonenumber">Phonenumber</label>
            <input type="phonenumber" name="phonenumber" required>
        </div>

        <div>
            <label for="country">Country</label>
            <input type="country" name="country" required>
        </div>

<button type="submit">Submit</button>
        <p>Not a user?<a href="reg.php"><b>Registration</b></a></p>

    </form>




</div>


</body>
</html>