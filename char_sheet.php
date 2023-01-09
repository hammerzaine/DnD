<link href="css/charcreate.css" rel="stylesheet" type="text/css">
<form class="str" method="post">
<?php
include "functions.php";

 echo "<table>";
    echo "<tr>";
    echo "<td width='100px'>";
    if(array_key_exists('roll', $_POST)) {
            dice_roll(6,3);
            $total = $str;
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
 <input type='text' class='str' name='str'>