
<html>
    <?php
        $table = "test_chars";
        $char_table = "test_chars";
        $refresh_rate = '5';
        include "config.php";
        $char = $_GET["char"];
    
        if (!$char) {
            $page_title = "Character Select";
        }
        else {
            $page_title = $char;
        }
    ?>
    <link href="default.css" rel="stylesheet" type="text/css">
    <title>
        Dungeons & Dragons
    </title>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <center>
            <img src="pics/d&dlogo.png">
            <h2><?php echo $page_title; ?></h2>
        </center>
    </head>
    <?php
        include"nav-bar.php"; 
        
        $sql = "SELECT * FROM $table";
        $result = mysqli_query($con, $sql);
    
        if (!$char) {
            echo "<body class='select'>";
            echo "<form id = 'L' methond='post'>";
            echo "Character Select:<br>";
            echo "<select name='char'>";
            echo "<option>Select</option>";
            while ($row = mysqli_fetch_assoc($result)) {
                $owner = $row["owner"];
                $char_name = $row["char_name"];
                $id = $row["id"];
                if ($owner == $user) {
                     echo "<option value='$char_name'>". $char_name ."</option>";
                }
             }
            echo "</select>";
            echo "<input type='submit' value='Select'>";
            echo "</form>";
            echo "<p><a href='charactercreation.php'>Create Character</a></p>";
        }
        
        elseif ($char) {
            echo "<meta http-equiv='refresh' content='$refresh_rate'>";
            echo "<body class='sheet'>";
            $sql = "SELECT * FROM $char_table";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $char_name = $row[ "char_name" ];
                if ($char_name == $char) {
                    $owner = $row[ "owner" ];
                    $class = $row[ "class" ];
                    $level = $row["level"];
                    $background = $row[ "background" ];
                    $race = $row[ "race" ];
                    $align = $row["alignment"];
                    $xp = $row["xp"];
                    $str = $row["strength"];
                    $dex = $row["dexterity"];
                    $const = $row["constitution"];
                    $intel = $row["intel"];
                    $wis = $row["wisdom"];
                    $charisma = $row["charisma"];
                    $insp = $row["inspiration"];
                    $prof_bon = $row["prof_bonus"];
                    $str_st = $row["str_st"];
                    $dex_st = $row["dex_st"];
                    $const_st = $row["const_st"];
                    $intel_st = $row["intel_st"];
                    $wise_st = $row["wisdom_st"];
                    $char_st = $row["charisma_st"];
                    $class_focus = $row["class_focus"];
                    $spell_ability = $row["spellcast_ability"];
                    $spellsave_dc = $row["spell_save_dc"];
                    $spell_atck_bo = $row["spell_atck_bonus"];
                    $str_race_bonus = $row["str_race_bonus"];
                    $dex_race_bonus = $row["dex_race_bonus"];
                    $const_race_bonus = $row["const_race_bonus"];
                    $intel_race_bonus = $row["intel_race_bonus"];
                    $wise_race_bonus = $row["wise_race_bonus"];
                    $char_race_bonus = $row["char_race_bonus"];
                    $dex_mod = $row["dex_mod"];
                    $armor = $row["armor"];
                    $shield = $row["shield"];
                    $misc = $row["misc"];
                    $initiative = $row["initiative"];
                    $speed = $row["speed"];
                    $hpmax = $row["hp_max"];
                    $temphp = $row["temp_hp"];
                    $hitdice = $row["hit_dice"];
                    $total_hit_dice = $row["total_hit_dice"];
                    $succ_ds = $row["success_ds"];
                    $fail_ds = $row["fail_ds"];
                    $weapon = $row["weapon"];
                    $type = $row["type"];
                    $atck_bonus = $row["atk_bonus"];
                    $dmg = $row["damage"];
                    $weapon1 = $row["weapon_1"];
                    $type1 = $row["type_1"];
                    $range1 = $row["range_1"];
                    $atck_bonus1 = $row["atk_bonus_1"];
                    $dmg1 = $row["damage_1"];
                    $weapon2 = $row["weapon_2"];
                    $type2 = $row["type_2"];
                    $range2 = $row["range_2"];
                    $atck_bonus2 = $row["atk_bonus_2"];
                    $dmg2 = $row["damage_2"];
                    $pass_wise = $row["passive_wisdom"];
                    $prof = $row["proficiencies"];
                    $lang = $row["languages"];
                    $treasure = $row["treasure"];
                    $notes = $row["notes"];
                    $acrobatics = $row["acrobatics"];
                    $animal = $row["animal_handling"];
                    $arcana = $row["arcana"];
                    $athletics = $row["athletics"];
                    $deception = $row["deception"];
                    $history = $row["history"];
                    $insight = $row["insight"];
                    $intimidation = $row["intimidation"];
                    $invest = $row["investigation"];
                    $medicine = $row["medicine"];
                    $nature = $row["nature"];
                    $perception = $row["perception"];
                    $perform = $row["performance"];
                    $persuasion = $row["persuasion"];
                    $religion = $row["religion"];
                    $slight = $row["slight_of_hand"];
                    $stealth = $row["stealth"];
                    $survival = $row["survival"];
                    $hp = $row["current_hp"];
                    $atck_spell = $row["atck_spell"];
                    $copper = $row["copper"];
                    $silver = $row["silver"];
                    $gold = $row["gold"];
                    $platinum = $row["platinum"];
                    $electrum = $row["electrum"];
                }
            }        
    ?>
    
    <center>
        <p>
            <form class="char_sheet" >
                
                <!-- Character Info -->
                <section>
                    <label class="char_name"><?php echo $char; ?></label>
                    <label class="class"><?php echo $class ." / ". $level; ?></label>
                    <label class="bg"><?php echo $background; ?></label>
                    <label class="owner"><?php echo ucwords($owner); ?></label>
                    <label class="race"><?php echo $race; ?></label>
                    <label class="alignment"><?php echo $align; ?></label>
                    <label class="xp"><input name="xp" class="exp" placeholder=<?php echo $xp; ?>></label>
                </setion>
                
                <!-- Character Stats -->
                <section>
                    <label class="str"><input name="str" class="strength" placeholder=<?php echo $str; ?>></label>
                    <label class="str_race_bonus"><input name="str_race_bonus" class="strength_race_bonus" placeholder=<?php echo "+". $str_race_bonus; ?>></label>
                    <label class="dex"><input name="dex" class="dexterity" placeholder=<?php echo $dex; ?>></label>
                    <label class="dex_race_bonus"><input name="dex_race_bonus" class="dexterity_race_bonus" placeholder=<?php echo "+". $dex_race_bonus; ?>></label>
                    <label class="const"><input name="const" class="constitution" placeholder=<?php echo $const; ?>></label>
                    <label class="const_race_bonus"><input name="const_race_bonus" class="constitution_race_bonus" placeholder=<?php echo "+". $const_race_bonus; ?>></label>
                    <label class="intel"><input name="intel" class="intelligence" placeholder=<?php echo $const; ?>></label>
                    <label class="intel_race_bonus"><input name="intel_race_bonus" class="intelligence_race_bonus" placeholder=<?php echo "+". $const_race_bonus; ?>></label>
                    <label class="wise"><input name="wise" class="wisdom" placeholder=<?php echo $wis; ?>></label>
                    <label class="wise_race_bonus"><input name="wise_race_bonus" class="wisdom_race_bonus" placeholder=<?php echo "+". $wise_race_bonus; ?>></label>
                    <label class="char"><input name="char" class="charisma" placeholder=<?php echo $charisma; ?>></label>
                    <label class="char_race_bonus"><input name="char_race_bonus" class="charisma_race_bonus" placeholder=<?php echo "+". $char_race_bonus; ?>></label>
                    <label class="pass_wise"><input name="pass_wise" class="passive_wise" placeholder=<?php echo $pass_wise; ?>></label>
                </section>
                
                <!-- Proficiencies & Languages -->
                <section>
                    <label class="prof"><textarea name="prof" class="proficiencies" placeholder=<?php echo $prof; ?>></textarea></label>
                    <label class="lang"><textarea name="lang" class="language" placeholder=<?php echo $lang; ?>></textarea></label>
                </section>
                
                <!-- Character Savings Throw -->
                <section>
                    <label class="inspir"><input name="inspir" class="inpiration" placeholder=<?php echo $insp; ?>></label>
                    <label class="prof_bon"><input name="prof_bon" class="prof_bonus" placeholder=<?php echo $prof_bon; ?>></label>
                    <?php
                        if ($str_st == 0){
                            echo "<input type='radio' class='str_radio'>";
                        }
                        elseif ($str_st >= 1) {
                            echo "<input type='radio' class='str_radio' checked>";
                        }
                        
                        if ($dex_st == 0) {
                            echo "<input type='radio' class='dex_radio'>";
                        }
                        elseif ($dex_st >= 1) {
                            echo "<input type='radio' class='dex_radio' checked>";
                        }
        
                        if ($const_st == 0) {
                            echo "<input type='radio' class='const_radio'>";
                        }
                        elseif ($const_st >= 1) {
                            echo "<input type='radio' class='const_radio' checked>";
                        }
                        
                        if ($intel_st == 0) {
                            echo "<input type='radio' class='intel_radio'>"; 
                        }
                        elseif ($intel_st >= 1) {
                            echo "<input type='radio' class='intel_radio' checked>"; 
                        }
            
                        if ($wise_st == 0) {
                            echo "<input type='radio' class='wise_radio'>";
                        }
                        elseif ($wise_st >= 1) {
                            echo "<input type='radio' class='wise_radio' checked>";
                        }
            
                        if ($char_st == 0) {
                            echo "<input type='radio' class='char_radio'>";
                        }
                        elseif ($char_st >= 1) {
                            echo "<input type='radio' class='char_radio' checked>";
                        }
                    ?>
                    <input class="str_st" placeholder=<?php echo $str_st; ?>></input>
                    <input class="dex_st" placeholder=<?php echo $dex_st; ?>></input>
                    <input class="const_st" placeholder=<?php echo $const_st; ?>></input>
                    <input class="intel_st" placeholder=<?php echo $intel_st; ?>></input>
                    <input class="wise_st" placeholder=<?php echo $wise_st; ?>></input>
                    <input class="char_st" placeholder=<?php echo $char_st; ?>></input>
                </section>

                <!-- Chracter Skills -->
                <section>
                    <?php
                        if ($acrobatics == 0) {
                            echo "<input type='radio' class='acro_radio'>";
                        }
                        elseif ($acrobatics >= 1) {
                            echo "<input type='radio' class='acro_radio' checked>";
                        }
                        
                        if ($animal == 0) {
                            echo "<input type='radio' class='animal_radio'>";
                        }
                        elseif ($animal >= 1) {
                            echo "<input type='radio' class='animal_radio' checked>";
                        }
            
                        if ($arcana == 0) {
                            echo "<input type='radio' class='arcana_radio'>";
                        }
                        elseif ($arcana >= 1) {
                            echo "<input type='radio' class='arcana_radio' checked>";
                        }
            
                        if ($athletics == 0) {
                            echo "<input type='radio' class='ath_radio'>";
                        }
                        elseif ($athletics >= 1) {
                            echo "<input type='radio' class='ath_radio' checked>";
                        }
            
                        if ($deception == 0) {
                            echo "<input type='radio' class='decep_radio'>";
                        }
                        elseif ($deception >= 1) {
                            echo "<input type='radio' class='decep_radio' checked>";
                        }
            
                        if ($history == 0) {
                            echo "<input type='radio' class='history_radio'>";
                        }
                        elseif ($history >= 1) {
                            echo "<input type='radio' class='history_radio' checked>";
                        }
            
                        if ($insight == 0) {
                            echo "<input type='radio' class='insight_radio'>";
                        }
                        elseif ($insight >= 1) {
                            echo "<input type='radio' class='insight_radio' checked>";
                        }
            
                        if ($intimidation == 0) {
                            echo "<input type='radio' class='intim_radio'>";
                        }
                        elseif ($acrobatics >= 1) {
                            echo "<input type='radio' class='intim_radio' checked>";
                        }
            
                        if ($intimidation == 0) {
                            echo "<input type='radio' class='intimidation_radio'>";
                        }
                        elseif ($intimidation >= 1) {
                            echo "<input type='radio' class='intimidation_radio' checked>";
                        }
            
                        if ($invest == 0) {
                            echo "<input type='radio' class='invest_radio'>";
                        }
                        elseif ($invest >= 1) {
                            echo "<input type='radio' class='invest_radio' checked>";
                        }
                        
                        if ($medicine == 0) {
                            echo "<input type='radio' class='medicine_radio'>";
                        }
                        elseif ($medicine >= 1) {
                            echo "<input type='radio' class='medicine_radio' checked>";
                        }
            
                        if ($nature == 0) {
                            echo "<input type='radio' class='nature_radio'>";
                        }
                        elseif ($nature >= 1) {
                            echo "<input type='radio' class='nature_radio' checked>";
                        }
            
                        if ($perception == 0) {
                            echo "<input type='radio' class='perception_radio'>";
                        }
                        elseif ($perception >= 1) {
                            echo "<input type='radio' class='perception_radio' checked>";
                        }
            
                        if ($perform == 0) {
                            echo "<input type='radio' class='perform_radio'>";
                        }
                        elseif ($perform >= 1) {
                            echo "<input type='radio' class='perform_radio' checked>";
                        }
            
                        if ($persuasion == 0) {
                            echo "<input type='radio' class='persuasion_radio'>";
                        }
                        elseif ($persuasion >= 1) {
                            echo "<input type='radio' class='persuasion_radio' checked>";
                        }
            
                        if ($religion == 0) {
                            echo "<input type='radio' class='religion_radio'>";
                        }
                        elseif ($religion >= 1) {
                            echo "<input type='radio' class='religion_radio' checked>";
                        }
            
                        if ($slight == 0) {
                            echo "<input type='radio' class='slight_radio'>";
                        }
                        elseif ($slight >= 1) {
                            echo "<input type='radio' class='slight_radio' checked>";
                        }
            
                        if ($stealth == 0) {
                            echo "<input type='radio' class='stealth_radio'>";
                        }
                        elseif ($stealth >= 1) {
                            echo "<input type='radio' class='stealth_radio' checked>";
                        }
            
                        if ($survival == 0) {
                            echo "<input type='radio' class='survival_radio'>";
                        }
                        elseif ($survival >= 1) {
                            echo "<input type='radio' class='survival_radio' checked>";
                        }
                    ?>
                    
                    <input class="acrobatics" placeholder=<?php echo $acrobatics; ?>></input>
                    <input class="animal" placeholder=<?php echo $animal; ?>></input>
                    <input class="arcana" placeholder=<?php echo $arcana; ?>></input>
                    <input class="athletics" placeholder=<?php echo $athletics; ?>></input>
                    <input class="deception" placeholder=<?php echo $deception; ?>></input>
                    <input class="history" placeholder=<?php echo $history; ?>></input>
                    <input class="insight" placeholder=<?php echo $insight; ?>></input>
                    <input class="intimidation" placeholder=<?php echo $intimidation; ?>></input>
                    <input class="invest" placeholder=<?php echo $invest; ?>></input>
                    <input class="medicine" placeholder=<?php echo $medicine; ?>></input>
                    <input class="nature" placeholder=<?php echo $nature; ?>></input>
                    <input class="perception" placeholder=<?php echo $perception; ?>></input>
                    <input class="perform" placeholder=<?php echo $perform; ?>></input>
                    <input class="persuasion" placeholder=<?php echo $persuasion; ?>></input>
                    <input class="religion" placeholder=<?php echo $religion; ?>></input>
                    <input class="slight" placeholder=<?php echo $slight; ?>></input>
                    <input class="stealth" placeholder=<?php echo $stealth; ?>></input>
                    <input class="survival" placeholder=<?php echo $survival; ?>></input>
                </section>

                <!-- Character HP -->
                <section>
                    <label class="max_hp"><?php echo $hpmax; ?></label>
                    <input class="hp" placeholder=<?php echo $hp; ?>></input>
                    <input class="temp_hp" placeholder=<?php echo $temphp; ?>></input>
                </section>

                <!-- Character Dice & Death Saves -->
                <section>
                    <label class="total_hd"><?php echo $total_hit_dice; ?></label>
                    <input class="hit_dice" placeholder=<?php echo $hitdice; ?>></input>
                    <input type="radio" value="dss1" class="dss1"></input>
                    <input type="radio" value="dss2" class="dss2"></input>
                    <input type="radio" value="dss3" class="dss3"></input>
                    <input type="radio" value="dsf1" class="dsf1"></input>
                    <input type="radio" value="dsf2" class="dsf2"></input>
                    <input type="radio" value="dsf3" class="dsf3"></input>
                </section>

                <!-- Character Weapons -->
                <section>
                    <input class="weapon1" placeholder=<?php echo $weapon; ?>></input>
                    <input class="weapon2" placeholder=<?php echo $weapon1; ?>></input>
                    <input class="weapon3" placeholder=<?php echo $weapon2; ?>></input>
                    <input class="attack1" placeholder="+<?php echo $atck_bonus; ?>"></input>
                    <input class="attack2" placeholder="+<?php echo $atck_bonus1; ?>"></input>
                    <input class="attack3" placeholder="+<?php echo $atck_bonus2; ?>">
                    <input class="damage1" placeholder=<?php echo $dmg; ?>>
                    <input class="damage2" placeholder=<?php echo $dmg1; ?>>
                    <input class="damage3" placeholder=<?php echo $dmg2; ?>>
                    <textarea class="atck_spell" placeholder=<?php echo $atck_spell; ?>></textarea>
                </section>

                <!-- Character Inventory -->
                <section>
                    <label class="cp"><input name="pass_wise" class="copper" placeholder=<?php echo $copper; ?>>CP</label>
                    <label class="sp"><input name="pass_wise" class="silver" placeholder=<?php echo $silver; ?>>SP</label>
                    <label class="gp"><input name="pass_wise" class="gold" placeholder=<?php echo $gold; ?>>GP</label>
                    <label class="pp"><input name="pass_wise" class="platinum" placeholder=<?php echo $platinum; ?>>PP</label>
                    <label class="ep"><input name="pass_wise" class="electrum" placeholder=<?php echo $electrum; ?>>EP</label>
                </section>
            </form>
        </p>
    </center>
            
    <?php        
        }
    ?>
   
    </center>
    </body>
</html>