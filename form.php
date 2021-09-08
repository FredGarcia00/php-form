<style>
    <?php include 'style.css'; ?>
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <h1>Members login</h1>
        <?php 


if(isset($_POST['submitted'])) {

    $vipList = ['Freddy', 'Jason', 'Chucky', 'Jeepers Creepers'];

    $username = $_POST['username'];
    $password = $_POST['password'];

    $max = 16;
    $min = 4;
    
    if(strlen($username) < $min || strlen($password) > $max) {
        echo "<script>alert('Username is has to be longer than 4 characters and MAXimum 16');</script>";
        
    }
    // if(strlen($username) > $max) {
    //     echo "<script>alert('Username cannot be longer than 8 characters');</script>";  
    // }
    if(!in_array($username,$vipList)) {
        echo "<script>alert('You are not on the vip list. Goodbye.');</script>";  
    }

    else {
        echo "Welcome {$username}";
    }
}

else {
    echo "failed";
}


?>
        <form action="form.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input class="button" type="submit" name="submitted"></input>
        </form>

    </div>
</body>
</html>