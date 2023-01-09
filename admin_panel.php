<html>
    <title>Dungeons & Dragons - Admin Panel</title>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <center>
            <h1>Dungeons & Dragons</h1> 
            <br>
            <h2>Admin Panel</h2>
        </center>
    </head>
    <link href="default.css" rel="stylesheet" type="text/css">
<?php
    include "nav-bar.php";
    
    $sleep = 2;
    $person = $_GET["user"];
    include "config.php";
    
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);
    
    echo "<form>";
    //echo "<body class='select'>";
        //echo "<form action='#' method='post'>";
        echo "User:<br>";
        echo "<select name='user'>";
        echo "<option>Select</option>";
        while ($row = mysqli_fetch_assoc($result)) {
            $user = $row["username"];
            echo "<option value='$user'>". $user ."</option>";
            if($person) {
                if ($user == $person) {
                    $id = $row["id"];
                    $un = $row["username"];
                    $admin = $row["admin"];
                    $created = $row["created_at"];
                }
            }
         }
        echo "</select>";
        echo "<input type='submit' value='Select'>";
        echo "</form>";
    
    if ($admin == "1" || $admin == "true") {
        $checked = "checked";
    }
    else {
        $checked = "unchecked";
    }
    $date = date_parse($created);
    
    echo "<form method='post'>";
    echo "<center><h2>$un</h2></center>";
    echo "Username: $un <br>";
    echo "Member Since: ". $date['month'] . "-". $date["day"] ."-". $date["year"] ."<br>";
    echo "Admin: <input type='checkbox' name='admin' $checked><br>";
    echo "Change Password: <input name='password'><br>";
    echo "<p><input type='submit' name='update' value ='Update'></p>";
    echo "</form>";
    
    if ($_POST["update"]) {
        $password = $_POST["password"];
        $administrator = $_POST['admin'];
        $pass = password_hash($password, PASSWORD_DEFAULT);
        if ($administrator) {
            $ad = "true";
        }
        else {
            $ad = "false";
        }
        if($password) {
            $upsql = "UPDATE users SET password='$pass', admin='$ad' WHERE id='$id'";
        }
        else {
            $upsql = "UPDATE users SET admin='$ad' WHERE id='$id'";
        }
        if (mysqli_query($con, $upsql)) {
            echo "Updated";
            sleep($sleep);
            header("Location: admin_panel.php?user=$un");
        }
        else {
            echo "Error updating record: " . mysqli_error($con);
        }
    }
?>
    <p><a href="char_sheet.php">Test Page</a></p>
</html>