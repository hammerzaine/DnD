<html>
<?php
$refresh_rate = '5';
$table = "test";
session_start();
$user = $_SESSION[ "username" ];
include "config.php";
include "functions.php";
//echo "<meta http-equiv='refresh' content='$refresh_rate'>";
?>

    <link href="css/charcreate.css" rel="stylesheet" type="text/css">
    <title> Dungeons & Dragons </title>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
<center>
    <img src="pics/d&dlogo.png">
    <h2>Character Creation</h2>
</center>
</head>
<?php
include "nav-bar.php";

$sql = "SELECT * FROM $table";
$result = mysqli_query( $con, $sql );
?>
<p>
    <br>
    <br>
<p>
    <center>
<table style="text-align: center">
<tr>
<td style="vertical-align:top">
    <form class="dice" method="post" action="">
        <?php
        echo "<table>";
        echo "<tr>";
        echo "<td width='100px'>";
        if ( array_key_exists( 'roll', $_POST ) ) {
            echo "Strength";
            dice_roll( 6, 3 );
            echo "<p>";
            echo "Dexterity";
            dice_roll( 6, 3 );
            echo "</p>";
            echo "<p>";
            echo "Constitution";
            dice_roll( 6, 3 );
            echo "</p>";
            echo "<p>";
            echo "Inteligence";
            dice_roll( 6, 3 );
            echo "</p>";
            echo "<p>";
            echo "Wisdom";
            dice_roll( 6, 3 );
            echo "</p>";
            echo "<p>";
            echo "Charisma";
            dice_roll( 6, 3 );
            echo "</p>";
            echo "<p>";
            
        }
        echo "</td>";

        echo " <td style='vertical-align:top'>";

        echo "<input type='submit' name='roll' value='Roll'>";

        //echo "<input type='text' class='str' name='str' value='Strength'>
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        ?>
    </form>
</td>
<td>

<form acon="#" method="post" class="char_sheet">
<!-- Character Info -->
<section>
<input type="text" class="char_name" name="char_name" value="Character Name">
<select class="class" name="class">
    <option>Class</option>
    <option value="Fighter">Fighter</option>
    <option value="Wizard">Wizard</option>
    <option value="Cleric">Cleric</option>
    <option value="Rogue">Rogue</option>
</select>
<select class="bg" name="bg">
    <option>Background</option>
    <option value="Criminal">Criminal</option>
    <option value="Folk Hero">Folk Hero</option>
    <option value="Noble">Noble</option>
    <option value="Acolyte">Acolyte</option>
    <option value="Soldier">Soldier</option>
</select>
<select class="race" name="race">
    <option>Race</option>
    <option value="Hill Dwarf">Hill Dwarf</option>
    <option value="High Elf">High Elf</option>
    <option value="Human">Human</option>
    <option value="Lightfoot Halfling">Lightfoot Halfling</option>
</select>
<select class="alignment" name="alignment">
    <option>Alignment</option>
    <option value="Good">Good</option>
    <option value="Nuetral">Neutral</option>
    <option value="Lawful Good">Lawful Good</option>
    <option value="Lawful Nuetral">Lawful Nuetral</option>
    <option value="Chaotic Good">Chaotic Good</option>
    <option value="Neutral Good">Nuetral Good</option>
</select>
<select>
    <input type="text" class="str" name="str">
</select>
</setion>
</form>
<input class="top_create" type ="submit" name="action" value="Create">
<input class="bottom_create" type ="submit" name="action" value="Create">
</p>
</td>
</tr>
</table>
<?php
if ( $_POST[ "action" ] == "Create" ) {
    $char_name = $_POST[ "char_name" ];
    $class = $_POST[ "class" ];
    $bg = $_POST[ 'bg' ];
    $alignment = $_POST[ "alignment" ];
    $str = $_POST["str"];

    $csql = "INSERT INTO " . $table . " (char_name, class, background, owner, alignment, strength) VALUES ('$char_name', '$class', '$bg', '$user', '$alignment', '$str')";
    if ( mysqli_query( $con, $csql ) ) {
        echo "Character Created";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $con );
    }
    mysqli_close( $con );
}

?>
</center>
</body>
</html>