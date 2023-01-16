    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <?php
    session_start();
    include "config.php";
    $url = $_SERVER["REQUEST_URI"];
    $page = strrpos($url, "charactercreation.php")
    ?>

    <div class="navbar"> 
        <a href="/dandd">Home</a> 
        
        <?php
            $user = $_SESSION["username"];
            
            if (!$user) {
                echo "<a href='register.php'>Register</a>";
                echo "<a href='login.php'>Login</a>";
            }
            else {
                echo "<a href='character.php'>Characters</a>";
                if ($page) {
                    echo "<a href='https://www.dndbeyond.com/sources/basic-rules/step-by-step-characters' target='_blank'>Help</a>";
                }
                
                $sql = "SELECT * FROM users";
                $result = mysqli_query($con, $sql);
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $username = $row["username"];
                    $admin = $row["admin"];
                    if ($user == $username) {
                        echo "<div class='dropdown'>";
                            echo "<button class='dropbtn'>$username</button>";
                                echo "<div class='dropdown-content'>";
                                    if ($admin == "1" || $admin == "true") {
                                        echo "<a href='profile.php'>Profile</a>";
                                        echo "<a href='admin_panel.php'>Admin Panel</a>";    
                                    }
                                    else {
                                        echo "<a href='profile.php'>Profile</a>";
                                    }
                                    echo "<a href='logout.php'>Logout</a>";
                                    echo "</div>";
                            echo "</div>";
                        }
                    }
                }
        ?>
        </div>
    </div>
</div>