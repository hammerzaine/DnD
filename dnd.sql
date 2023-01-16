-- --------------------------------------------------------
-- Host:                         192.168.0.147
-- Server version:               10.5.15-MariaDB-0+deb11u1 - Debian 11
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for DandD
CREATE DATABASE IF NOT EXISTS `DandD` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `DandD`;

-- Dumping structure for table DandD.chars
CREATE TABLE IF NOT EXISTS `chars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `char_name` char(50) NOT NULL,
  `owner` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table DandD.chars: ~0 rows (approximately)

-- Dumping structure for table DandD.test
CREATE TABLE IF NOT EXISTS `test` (
  `char_name` char(50) NOT NULL,
  `class` char(50) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 1,
  `background` char(50) NOT NULL,
  `owner` char(50) NOT NULL,
  `race` char(50) NOT NULL,
  `alignment` char(50) NOT NULL,
  `strength` int(11) NOT NULL,
  `dexterity` int(11) NOT NULL,
  `constitution` int(11) NOT NULL,
  `inteligence` int(11) NOT NULL,
  `wisdom` int(11) NOT NULL,
  `charisma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table DandD.test: ~0 rows (approximately)

-- Dumping structure for table DandD.test_chars
CREATE TABLE IF NOT EXISTS `test_chars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `char_name` char(50) NOT NULL,
  `owner` char(50) NOT NULL,
  `class` char(50) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `background` char(50) NOT NULL,
  `race` char(50) NOT NULL,
  `alignment` char(50) NOT NULL,
  `xp` int(11) NOT NULL DEFAULT 0,
  `strength` int(11) NOT NULL DEFAULT 0,
  `dexterity` int(11) NOT NULL DEFAULT 0,
  `constitution` int(11) NOT NULL DEFAULT 0,
  `intel` int(11) NOT NULL DEFAULT 0,
  `wisdom` int(11) NOT NULL DEFAULT 0,
  `charisma` int(11) NOT NULL DEFAULT 0,
  `inspiration` int(11) NOT NULL DEFAULT 0,
  `prof_bonus` int(11) NOT NULL DEFAULT 0,
  `str_st` int(11) NOT NULL DEFAULT 0,
  `dex_st` int(11) NOT NULL DEFAULT 0,
  `const_st` int(11) NOT NULL DEFAULT 0,
  `intel_st` int(11) NOT NULL DEFAULT 0,
  `wisdom_st` int(11) NOT NULL DEFAULT 0,
  `charisma_st` int(11) NOT NULL DEFAULT 0,
  `class_focus` char(50) NOT NULL DEFAULT '0',
  `spellcast_ability` char(50) NOT NULL DEFAULT '0',
  `spell_save_dc` int(11) NOT NULL DEFAULT 0,
  `spell_atck_bonus` int(11) NOT NULL DEFAULT 0,
  `dex_mod` int(11) NOT NULL DEFAULT 0,
  `str_race_bonus` int(11) NOT NULL DEFAULT 0,
  `intel_race_bonus` int(11) NOT NULL DEFAULT 0,
  `dex_race_bonus` int(11) NOT NULL DEFAULT 0,
  `const_race_bonus` int(11) NOT NULL DEFAULT 0,
  `wise_race_bonus` int(11) NOT NULL DEFAULT 0,
  `char_race_bonus` int(11) NOT NULL DEFAULT 0,
  `armor` int(11) NOT NULL DEFAULT 0,
  `shield` int(11) NOT NULL DEFAULT 0,
  `misc` int(11) NOT NULL DEFAULT 0,
  `initiative` int(11) NOT NULL DEFAULT 0,
  `speed` int(11) NOT NULL DEFAULT 0,
  `hp_max` int(11) NOT NULL DEFAULT 0,
  `temp_hp` int(11) NOT NULL DEFAULT 0,
  `hit_dice` char(50) NOT NULL DEFAULT '0',
  `total_hit_dice` char(50) NOT NULL DEFAULT '0',
  `success_ds` int(11) NOT NULL DEFAULT 0,
  `fail_ds` int(11) NOT NULL DEFAULT 0,
  `weapon` char(50) NOT NULL DEFAULT '0',
  `type` char(50) NOT NULL DEFAULT '0',
  `range` int(11) NOT NULL DEFAULT 0,
  `atk_bonus` int(11) NOT NULL DEFAULT 0,
  `damage` int(11) NOT NULL DEFAULT 0,
  `weapon_1` char(50) NOT NULL DEFAULT '0',
  `type_1` char(50) NOT NULL DEFAULT '0',
  `range_1` int(11) NOT NULL DEFAULT 0,
  `atk_bonus_1` int(11) NOT NULL DEFAULT 0,
  `damage_1` int(11) NOT NULL DEFAULT 0,
  `weapon_2` char(50) NOT NULL DEFAULT '0',
  `type_2` char(50) NOT NULL DEFAULT '0',
  `range_2` int(11) NOT NULL DEFAULT 0,
  `atk_bonus_2` int(11) NOT NULL DEFAULT 0,
  `damage_2` int(11) NOT NULL DEFAULT 0,
  `passive_wisdom` int(11) NOT NULL DEFAULT 0,
  `proficiencies` text NOT NULL,
  `languages` text NOT NULL,
  `treasure` text NOT NULL,
  `notes` text NOT NULL,
  `acrobatics` int(11) DEFAULT 0,
  `animal_handling` int(11) DEFAULT 0,
  `arcana` int(11) DEFAULT 0,
  `athletics` int(11) DEFAULT 0,
  `deception` int(11) DEFAULT 0,
  `history` int(11) DEFAULT 0,
  `insight` int(11) DEFAULT 0,
  `intimidation` int(11) DEFAULT 0,
  `medicine` int(11) DEFAULT 0,
  `nature` int(11) DEFAULT 0,
  `persuasion` int(11) DEFAULT 0,
  `perception` int(11) DEFAULT 0,
  `performance` int(11) DEFAULT 0,
  `religion` int(11) DEFAULT 0,
  `slight_of_hand` int(11) DEFAULT 0,
  `stealth` int(11) DEFAULT 0,
  `survival` int(11) DEFAULT 0,
  `investigation` int(11) DEFAULT 0,
  `current_hp` int(11) DEFAULT 0,
  `atck_spell` varchar(50) DEFAULT NULL,
  `gold` int(11) DEFAULT 0,
  `silver` int(11) DEFAULT 0,
  `copper` int(11) DEFAULT 0,
  `platinum` int(11) DEFAULT 0,
  `electrum` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table DandD.test_chars: ~2 rows (approximately)
INSERT INTO `test_chars` (`id`, `char_name`, `owner`, `class`, `level`, `background`, `race`, `alignment`, `xp`, `strength`, `dexterity`, `constitution`, `intel`, `wisdom`, `charisma`, `inspiration`, `prof_bonus`, `str_st`, `dex_st`, `const_st`, `intel_st`, `wisdom_st`, `charisma_st`, `class_focus`, `spellcast_ability`, `spell_save_dc`, `spell_atck_bonus`, `dex_mod`, `str_race_bonus`, `intel_race_bonus`, `dex_race_bonus`, `const_race_bonus`, `wise_race_bonus`, `char_race_bonus`, `armor`, `shield`, `misc`, `initiative`, `speed`, `hp_max`, `temp_hp`, `hit_dice`, `total_hit_dice`, `success_ds`, `fail_ds`, `weapon`, `type`, `range`, `atk_bonus`, `damage`, `weapon_1`, `type_1`, `range_1`, `atk_bonus_1`, `damage_1`, `weapon_2`, `type_2`, `range_2`, `atk_bonus_2`, `damage_2`, `passive_wisdom`, `proficiencies`, `languages`, `treasure`, `notes`, `acrobatics`, `animal_handling`, `arcana`, `athletics`, `deception`, `history`, `insight`, `intimidation`, `medicine`, `nature`, `persuasion`, `perception`, `performance`, `religion`, `slight_of_hand`, `stealth`, `survival`, `investigation`, `current_hp`, `atck_spell`, `gold`, `silver`, `copper`, `platinum`, `electrum`) VALUES
	(1, 'Test', 'zaine', 'Cleric', 1, 'background', 'Elf', 'Good', 1300, 15, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 'spellcast ability', 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 30, 0, '1d6', '1d20', 0, 0, 'Axe', '1h', 0, 5, 0, 'Sword', '1h', 0, 3, 10, 'Bow', 'Ranged', 30, 2, 40, 0, 'proficiency', 'language', 'treasure', 'notes', 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'attack and spell', 0, 0, 0, 0, 0),
	(2, 'XO Test', 'xorace', 'Fighter', 1, 'background', 'Elf', 'Good', 500, 23, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '0', 'spellcast ability', 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 50, 0, '1d6', '1d20', 0, 0, 'Axe', '1h', 0, 5, 0, 'Sword', '1h', 0, 3, 10, '0', '0', 0, 0, 0, 0, 'proficiency', 'language', 'treasure', 'notes', 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'attack and spell', 0, 0, 0, 0, 0);

-- Dumping structure for table DandD.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `admin` char(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table DandD.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `admin`) VALUES
	(3, 'zaine', '$2y$10$Z3BBu3e6bm8lRKgvy3X8POOqVSTtwUe9GHPMxGBVn/l1/8oMof7e2', '2022-12-19 20:19:01', 'true'),
	(4, 'xorace', '$2y$10$JpNltvWq.uAQBcdEHw48rujJ7P910bxWcnPC.E2fghObnzOeLC0TS', '2022-12-28 23:10:00', 'true');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
