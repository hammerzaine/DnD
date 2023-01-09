<html>
    <title>Dungeons & Dragons - Admin Panel</title>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <center>
            <h1>Dungeons & Dragons</h1> 
            <br>
            <h2>Profile</h2>
        </center>
    </head>
    <link href="default.css" rel="stylesheet" type="text/css">
<?php
    session_start();
    
    include "nav-bar.php";
    include "config.php";
    
    $user = $_SESSION["username"];
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);
    
    echo "<center><h2>$user</h2></center>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        $un = $row["username"];
        if ($un === $user) {
            echo $un ."<br>";
            $created = $row["created_at"];
            $id = $row["id"];
        }
    }
    
    $date = date_parse($created);
    
    echo "Member Since: ". $date['month'] . "-". $date["day"] ."-". $date["year"] ."<br>";
    echo "<form method='post'>";
    echo "Change Password: <input name='password'><br>";
    echo "<p><input type='submit' name='update' value ='Update'></p>";
    echo "</form>";
    
    if ($_POST["update"]) {
        $password = $_POST["password"];
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $upsql = "UPDATE users SET password='$pass' WHERE id='$id'";
        
        if (mysqli_query($con, $upsql)) {
            echo "Password Updated";
        }
        else {
            echo "Error updating record: " . mysqli_error($con);
        }
    }
?>
</html>