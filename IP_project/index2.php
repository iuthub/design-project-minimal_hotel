<?php



session_start();
if(isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must log in first to view this page";
    header("location:reg.php");

}



if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location : reg.php ");


}

?>


<!DOCTYPE html>
<html>
<head>
    <title>This is homepage </title>
</head>
<body>
<h1> This is the homepage</h1>
<?php
if(isset($_SESSION['success']));?>

<div>
    <h3>
        <?php
 echo $_SESSION['success'];
 unset($_SESSION['success']);

?>
    </h3>
</div>
<?phpendif?>



<?php if (isset($_SESSION['username'])); ?>



<h3> Welcome <strong> <?php echo $_SESSION['username'];?></h3>
<button><a href="reg.php?logout='1' "></a> </button>
<?phpendif?>

</body>
</html>






