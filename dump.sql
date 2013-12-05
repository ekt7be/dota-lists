-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: stardock.cs.virginia.edu    Database: cs4750ekt7be
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.12.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `hero_build_items`
--

DROP TABLE IF EXISTS `hero_build_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hero_build_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hero_build_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hero_build_id` (`hero_build_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `hero_build_items_ibfk_1` FOREIGN KEY (`hero_build_id`) REFERENCES `hero_builds` (`id`) ON DELETE CASCADE,
  CONSTRAINT `hero_build_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hero_build_items`
--

LOCK TABLES `hero_build_items` WRITE;
/*!40000 ALTER TABLE `hero_build_items` DISABLE KEYS */;
INSERT INTO `hero_build_items` VALUES (1,1,71),(3,1,81),(7,2,39),(8,2,21),(12,2,79),(13,1,21),(14,1,81);
/*!40000 ALTER TABLE `hero_build_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hero_builds`
--

DROP TABLE IF EXISTS `hero_builds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hero_builds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hero_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hero_id` (`hero_id`),
  CONSTRAINT `hero_builds_ibfk_1` FOREIGN KEY (`hero_id`) REFERENCES `heroes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hero_builds`
--

LOCK TABLES `hero_builds` WRITE;
/*!40000 ALTER TABLE `hero_builds` DISABLE KEYS */;
INSERT INTO `hero_builds` VALUES (1,5,'anti-mage carry1','2013-12-03 03:50:11','2013-12-03 03:50:17'),(2,4,'hook city','2013-12-03 08:33:19','2013-12-03 08:33:19');
/*!40000 ALTER TABLE `hero_builds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heroes`
--

DROP TABLE IF EXISTS `heroes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `heroes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `biography` text NOT NULL,
  `hit_points` int(8) NOT NULL,
  `damage` int(8) DEFAULT NULL,
  `armor` int(8) DEFAULT NULL,
  `movespeed` int(8) NOT NULL,
  `strength` int(8) NOT NULL,
  `agility` int(8) NOT NULL,
  `intelligence` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heroes`
--

LOCK TABLES `heroes` WRITE;
/*!40000 ALTER TABLE `heroes` DISABLE KEYS */;
INSERT INTO `heroes` VALUES (1,'Earthshaker','Like a golem or gargoyle, Earthshaker was one with the earth but now walks freely upon it. Unlike those other entities, he created himself through an act of will, and serves no other master. In restless slumbers, encased in a deep seam of stone, he became aware of the life drifting freely above him. He grew curious. During a season of tremors, the peaks of Nishai shook themselves loose of avalanches, shifting the course of rivers and turning shallow valleys into bottomless chasms. When the land finally ceased quaking, Earthshaker stepped from the settling dust, tossing aside massive boulders as if throwing off a light blanket. He had shaped himself in the image of a mortal beast, and named himself Raigor Stonehoof. He bleeds now, and breathes, and therefore he can die. But his spirit is still that of the earth; he carries its power in the magical totem that never leaves him. And on the day he returns to dust, the earth will greet him as a prodigal son.',568,46,3,300,22,12,16),(2,'Sven','Sven is the bastard son of a Vigil Knight, born of a Pallid Meranth, raised in the Shadeshore Ruins. With his father executed for violating the Vigil Codex, and his mother shunned by her wild race, Sven believes that honor is to be found in no social order, but only in himself. After tending his mother through a lingering death, he offered himself as a novice to the Vigil Knights, never revealing his identity. For thirteen years he studied in his father\'s school, mastering the rigid code that declared his existence an abomination. Then, on the day that should have been his In-Swearing, he seized the Outcast Blade, shattered the Sacred Helm, and burned the Codex in the Vigil\'s Holy Flame. He strode from Vigil Keep, forever solitary, following his private code to the last strict rune. Still a knight, yes...but a Rogue Knight. He answers only to himself.',587,54,2,295,23,21,14),(3,'Axe','As a grunt in the Army of Red Mist, Mogul Khan set his sights on the rank of Red Mist General. In battle after battle he proved his worth through gory deed. His rise through the ranks was helped by the fact that he never hesitated to decapitate a superior. Through the seven year Campaign of the Thousand Tarns, he distinguished himself in glorious carnage, his star of fame shining ever brighter, while the number of comrades in arms steadily dwindled. On the night of ultimate victory, Mogul declared himself the new Red Mist General, and took on the ultimate title of \'Axe.\' But his troops now numbered zero. Of course, many had died in battle, but a significant number had also fallen to Axe\'s blade. Needless to say, most soldiers now shun his leadership. But this matters not a whit to Axe, who knows that a one-man army is by far the best.',625,49,2,290,25,20,18),(4,'Pudge','In the Fields of Endless Carnage, far to the south of Quoidge, a corpulent figure works tirelessly through the night--dismembering, disembowelling, piling up the limbs and viscera of the fallen that the battlefield might be clear by dawn. In this cursed realm, nothing can decay or decompose; no corpse may ever return to the earth from which it sprang, no matter how deep you dig the grave. Flocked by carrion birds who need him to cut their meals into beak-sized chunks, Pudge the Butcher hones his skills with blades that grow sharper the longer he uses them. Swish, swish, thunk. Flesh falls from the bone; tendons and ligaments part like wet paper. And while he always had a taste for the butchery, over the ages, Pudge has developed a taste for its byproduct as well. Starting with a gobbet of muscle here, a sip of blood there...before long he was thrusting his jaws deep into the toughest of torsos, like a dog gnawing at rags. Even those who are beyond fearing the Reaper, fear the Butcher.',625,52,1,285,25,14,14),(5,'Anti-Mage','The monks of Turstarkuri watched the rugged valleys below their mountain monastery as wave after wave of invaders swept through the lower kingdoms. Ascetic and pragmatic, in their remote monastic eyrie they remained aloof from mundane strife, wrapped in meditation that knew no gods or elements of magic. Then came the Legion of the Dead God, crusaders with a sinister mandate to replace all local worship with their Unliving Lord\'s poisonous nihilosophy. From a landscape that had known nothing but blood and battle for a thousand years, they tore the souls and bones of countless fallen legions and pitched them against Turstarkuri. The monastery stood scarcely a fortnight against the assault, and the few monks who bothered to surface from their meditations believed the invaders were but demonic visions sent to distract them from meditation. They died where they sat on their silken cushions. Only one youth survived--a pilgrim who had come as an acolyte, seeking wisdom, but had yet to be admitted to the monastery. He watched in horror as the monks to whom he had served tea and nettles were first slaughtered, then raised to join the ranks of the Dead God\'s priesthood. With nothing but a few of Turstarkuri\'s prized dogmatic scrolls, he crept away to the comparative safety of other lands, swearing to obliterate not only the Dead God\'s magic users--but to put an end to magic altogether.',530,49,2,315,20,22,15),(6,'Drow Ranger','Drow Ranger\'s given name is Traxexâ€”a name well suited to the short, trollish, rather repulsive Drow people. But Traxex herself is not a Drow. Her parents were travelers in a caravan set upon by bandits, whose noisy slaughter of innocents roused the ire of the quiet Drow people. After the battle settled, the Drow discovered a small girl-child hiding in the ruined wagons, and agreed she could not be abandoned. Even as child, Traxex showed herself naturally adept at the arts they prized: Stealth, silence, subtlety. In spirit, if not in physique, she might have been a Drow changeling, returned to her proper home. But as she grew, she towered above her family and came to think of herself as ugly. After all, her features were smooth and symmetrical, entirely devoid of warts and coarse whiskers. Estranged from her adopted tribe, she withdrew to live alone in the woods. Lost travelers who find their way from the forest sometimes speak of an impossibly beautiful Ranger who peered at them from deep among the trees, then vanished like a dream before they could approach. Lithe and stealthy, icy hot, she moves like mist in silence. That whispering you hear is her frozen arrows finding an enemy\'s heart.',473,44,1,300,17,26,15),(7,'Bloodseeker','Strygwyr the Bloodseeker is a ritually sanctioned hunter, Hound of the Flayed Twins, sent down from the mist-shrouded peaks of Xhacatocatl in search of blood. The Flayed Ones require oceanic amounts of blood to keep them sated and placated, and would soon drain their mountain empire of its populace if the priests of the high plateaus did not appease them. Strygwyr therefore goes out in search of carnage. The vital energy of any blood he lets, flows immediately to the Twins through the sacred markings on his weapons and armor. Over the years, he has come to embody the energy of a vicious hound; in battle he is savage as a jackal. Beneath the Mask of the Bloodseeker, in the rush of bloody quenching, it is said that you can sometime see the features of the Flayers taking direct possession of their Hound.',587,53,3,300,23,24,18),(8,'Shadow Fiend','Shadow Fiend has the soul of a poet, and in fact he has thousands of them. Over the ages he has claimed the souls of poets, priests, emperors, beggars, slaves, philosophers, criminals and (naturally) heroes; no sort of soul escapes him. What he does with them is unknown. No one has ever peered into the Abysm whence Shadow Fiend reaches out like an eel from among astral rocks. Does he devour them one after another? Does he mount them along the halls of an eldritch temple, or pickle the souls in necromantic brine? Is he merely a puppet, pushed through the dimensional rift by a demonic puppeteer? Such is his evil, so intense his aura of darkness, that no rational mind may penetrate it. Of course, if you really want to know where the stolen souls go, there\'s one sure way to find out: Add your soul to his collection. Or just wait for Nevermore.',435,35,2,305,15,20,18),(9,'Crystal Maiden','Born in a temperate realm, raised with her fiery older sister Lina, Rylai the Crystal Maiden soon found that her innate elemental affinity to ice created trouble for all those around her. Wellsprings and mountain rivers froze in moments if she stopped to rest nearby; ripening crops were bitten by frost, and fruiting orchards turned to mazes of ice and came crashing down, spoiled. When their exasperated parents packed Lina off to the equator, Rylai found herself banished to the cold northern realm of Icewrack, where she was taken in by an Ice Wizard who had carved himself a hermitage at the crown of the Blueheart Glacier. After long study, the wizard pronounced her ready for solitary practice and left her to take his place, descending into the glacier to hibernate for a thousand years. Her mastery of the Frozen Arts has only deepened since that time, and now her skills are unmatched.',454,38,1,280,16,16,21),(10,'Puck','While Puck seems at first glance a mischievous, childish character, this quality masks an alien personality. The juvenile form of a Faerie Dragon, a creature that lives for eons, Puck spends countless millennia in its childish form. So while it is technically true that Puck is juvenile, it will continue to be so when the cities of the present age have sloughed away into dust. Its motives are therefore inscrutable, and what appears to be play may in fact indicate a darker purpose or just its endless fondness for mischief.',435,47,2,295,15,22,25),(11,'Bane','When the gods have nightmares, it is Bane Elemental who brings them. Also known as Atropos, Bane was born from the midnight terrors of the goddess Nyctasha. A force of terror too powerful to be contained by sleep, he surfaced from her slumbers, fed upon her immortality, and stole his vaporous form from her inky blood. He is the essence of fear. Mortals who hear his voice hear their darkest secrets whispered in their ear. He calls to the hidden fear in every Hero\'s heart. Wakefulness is no protection, for Bane\'s black blood, continuously dripping, is a tar that traps his enemies in nightmare. In the presence of Bane, every Hero remembers to fear the dark.',568,55,4,315,22,22,22),(12,'Lich','In life, the frost-mage Ethreain (not yet a Lich) had used the threat of destructive ice to enslave entire kingdoms. His subjects, aided by a few desperate magicians, eventually grew bold enough to ambush him. Armed with enough charmed rope to bind him forever, they tied the frost mage to adamant weights and dropped him in a pool known chiefly for being bottomless. It wasn\'t. He only fell for a year or so before an outcrop snagged him. There he rested, dead but undecaying, until the geomancer Anhil thought to verify the legend of the supposedly bottomless Black Pool. Anhil\'s plumbline snarled with the ropes that bound the drowned magician, and up he hauled an unexpected prize. Thinking that by rendering the dead undead, he could question the Lich about the properties of the pool, he removed the bindings and commenced a simple rite of resurrection. Even the descendants of Ethreain\'s enemies were long forgotten by time, so there were none to warn Anhil against imprudence. But he learned the error of his judgment almost immediately, as Lich threw off the shackles and consumed him.',492,42,1,315,18,15,18);
/*!40000 ALTER TABLE `heroes` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`cs4750ekt7be`@`%`*/ /*!50003 TRIGGER `chk_attribute_trig` BEFORE INSERT ON `heroes`
FOR EACH ROW
BEGIN
    IF NEW.strength < 0 OR NEW.agility < 0 OR NEW.intelligence < 0 THEN
        SIGNAL SQLSTATE '45000'
	      SET MESSAGE_TEXT = 'An error occurred. Attributes must be greater than 0.';
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `stats` text NOT NULL,
  `cost` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (2,'Iron Branch','A seemingly ordinary branch, its ironlike qualities are bestowed upon the bearer.','+ 1 All Attributes',53),(3,'Gauntlets of Strength','Studded leather gloves that add brute strength','+3 Strength',150),(4,'Slippers of Agility','Light boots made from spider skin that tingles your senses.','+3 Agility',150),(5,'Mantle of Intelligence','A beautiful sapphire mantle worn by generations of queens.','+3 Intelligence',150),(6,'Circlet','An elegant circlet designed for human princesses.','+2 Strength\r\n+2 Agility\r\n+2 Intelligence',185),(7,'Belt of Strength','A valued accessory for improving vitality.','+6 Strength',450),(8,'Band of Elvenskin','A tensile fabric often used for its light weight and ease of movement.','+6 Agility',450),(9,'Robe of the Magi','This robe corrupts the soul of the user, but provides wisdom in return.','+6 Intelligence',450),(10,'Ultimate Orb','A mystical orb containing the essence of life.','+10 Strength\r\n+10 Agility\r\n+10 Intelligence',2100),(11,'Ogre Club','You grow stronger just by holding it.','+10 Strength',1000),(12,'Blade of Alacrity','A long blade imbued with time magic.','+10 Agility',1000),(13,'Staff of Wizardry','A staff of magical powers passed down from the eldest mages.','+10 Intelligence',1000),(14,'Ring of Protection','A glimmering ring that defends its bearer.','+2 Armor',175),(15,'Quelling Blade','The axe of a fallen gnome, it allows you to effectively maneuver the forest.','Active: Destroy Tree/Ward - Destroy a target tree, or deals 100 damage to a ward.\r\nPassive: Quell - Gives bonus attack damage against non-hero units, depending on the type of hero you are. \r\nMELEE BONUS: 32%\r\nRANGED BONUS: 12%',225),(16,'Stout Shield','One man\'s wine barrel bottom is another man\'s shield.','Passive: Damage Block - Gives a chance to block damage, depending on the type of hero you are. \r\nMELEE BLOCK: 20\r\nRANGED BLOCK: 10\r\nBLOCK CHANCE: 60% ',250),(17,'Blades of Attack','The damage of these small, concealable blades should not be underestimated.','+9 Damage',450),(18,'Chainmail','A medium weave of metal chains.','+5 Armor',550),(19,'Quarterstaff','A basic staff that allows you to strike quickly.','+10 Damage\r\n+10 Attack speed',900),(20,'Helm of Iron Will','The helmet of a legendary warrior who fell in battle.','+3 HP regeneration\r\n+5 Armor',950),(21,'Broadsword','The classic weapon of choice for knights, this blade is sturdy and reliable for slaying enemies.','+18 Damage',1200),(22,'Claymore','A sword that can cut through armor, it\'s a commonly chosen first weapon for budding swordsmen.','+21 Damage',1400),(23,'Javelin','A rather typical spear that can sometimes pierce through an enemy\'s armor when used to attack.','Passive: Pierce - Grants a chance to deal bonus damage. \r\n+ 21 Damage\r\nCHANCE TO PIERCE: 20%\r\nPIERCE DAMAGE: 40 ',1500),(24,'Mithril Hammer','A hammer forged of pure mithril.','+24 Damage',1600),(25,'Magic Stick','A simple wand used to channel magic energies, it is favored by apprentice wizards and great warlocks alike.','Active: Energy Charge - Gains charges (max 10) based on enemies using abilities in a nearby area. When activated, it restores health and mana based on the number of charges stored.\r\nRESTORE PER CHARGE: 15',200),(26,'Sage\'s Mask','A mask commonly used by mages and warlocks for various rituals.','+50% Mana regeneration',325),(27,'Ring of Regen','This ring is considered a good luck charm among the Gnomes.','+2 HP regeneration',350),(28,'Boots of Speed','Fleet footwear, increasing movement.','+50 Movement speed',450),(29,'Gloves of Haste','A pair of magical gloves that seems to render weapons weightless.','+15 Attack speed',500),(30,'Cloak','A cloak made of a magical material that works to dispel any magic cast on it.','+15% Magic resistance',550),(31,'Morbid Mask','A mask that drains the energy of those caught in its gaze.','Passive: Lifesteal - Gives lifesteal on attacks.\r\nLIFESTEAL: 15%',900),(32,'Ghost Scepter','Imbues the wielder with a ghostly presence, allowing them to evade physical damage.','Active: Ghost Form - Enter ghost form, unable to attack or be attacked, but take -40% extra magic damage. Using a Teleport Scroll or Boots of Travel dispels Ghost Form.\r\n+ 7 All Attributes\r\nGHOST DURATION: 4',1600),(33,'Shadow Amulet','Active: Fade - Go invisible over 1.8 seconds. If you move, you will become visible. ','+30 Attack speed',1600),(34,'Talisman of Evasion','A necklace that allows you to anticipate enemy attacks.','+25% Evasion',1800),(35,'Blink Dagger','The fabled dagger used by the fastest assassin ever to walk the lands.','Active: Blink - Teleport to a target point up to 1200 units away. If damage is taken from an enemy hero, Blink Dagger cannot be used for 3 seconds. ',2150),(36,'Wraith Band','A circlet with faint whispers echoing about it. ','+ 3 Strength\r\n+ 6 Agility\r\n+ 3 Intelligence\r\n+ 3 Damage',485),(37,'Null Talisman','A small gemstone attached to several chains.','+ 3 Strength\r\n+ 3 Agility\r\n+ 6 Intelligence\r\n+ 3 Damage',470),(38,'Magic Wand','A simple wand used to channel magic energies, it is favored by apprentice wizards and great warlocks alike.','Active: Energy Charge - Gains charges (max 15) based on enemies using abilities in a nearby area. When activated, it restores health and mana based on the number of charges stored.\r\n+ 3 All Attributes',509),(39,'Bracer','The bracer is a common choice to toughen up defenses and increase longevity. ','+ 6 Strength\r\n+ 3 Agility\r\n+ 3 Intelligence\r\n+ 3 Damage',525),(40,'Poor Man\'s Shield','A busted old shield that seems to block more than it should. ','Passive: Damage Block - Blocks physical attack damage, depending on the type of hero you are. Poor Man\'s Shield will always block attacks from enemy Heroes, but has a chance to block damage from creeps.\r\nMELEE BLOCK: 20\r\nRANGED BLOCK: 10\r\nBLOCK CHANCE: 60%\r\n+ 6 Agility',550),(41,'Soul Ring','A ring that feeds on the souls of those around it. ','Active: Sacrifice - Consume 150 HP to temporarily gain 150 Mana. Lasts 10 seconds.\r\n+ 3 HP Regeneration\r\n+ 50% Mana Regeneration',800),(42,'Phase Boots','Boots that allow the wearer to travel between the ether.','Active: Phase - Gives increased movement speed and lets you move through units. Phase is cancelled upon using another item or ability.\r\nFlat movement speed bonuses from multiple pairs of boots do not stack.\r\nPHASE DURATION: 4\r\nPHASE MOVE BOOST: 16%\r\n+ 50 Movement Speed\r\n+ 24 Damage ',1350),(43,'Power Treads','A pair of tough-skinned boots that change to meet the demands of the wearer. ','Active: Switch Attribute - Changes selected attribute between Strength, Agility and Intelligence.\r\nFlat movement speed bonuses from multiple pairs of boots do not stack.\r\n+ 50 Movement Speed\r\n+ 8 Selected Attribute\r\n+ 30 Attack Speed ',1400),(44,'Oblivion Staff','Deceptively hidden as an ordinary quarterstaff, it is actually very powerful, much like the Eldritch who originally possessed it. ','+ 6 Intelligence\r\n+ 10 Attack Speed\r\n+ 15 Damage\r\n+ 75% Mana Regeneration ',1675),(45,'Perserverance','A gem that grants heart to the bearer. ','+ 10 Damage\r\n+ 5 HP Regeneration\r\n+ 125% Mana Regeneration ',1750),(46,'Hand of Midas','Preserved through unknown magical means, the Hand of Midas is a weapon of greed, sacrificing animals to line the owner\'s pockets.','Active: Transmute - Kills a non-hero target for 190 gold and 2.5x experience. Cannot be used on Ancients. \r\n+ 30 Attack Speed ',1900),(47,'Boots of Travel','Winged boots that grant omnipresence. ','Active: Teleport - Teleports you to an allied non-hero unit or structure.\r\nFlat movement speed bonuses from multiple pairs of boots do not stack.\r\n+ 100 Movement Speed ',2450),(48,'Ring of Basilius','Ring given as a reward to the greatest mages. ','Passive: Basilius Aura - Grants mana regeneration and armor in a 900 AoE.\r\nActive: Toggle whether the aura affects other non-hero units.\r\nMultiple instances of Basilius Aura do not stack. \r\n+ 6 Damage\r\nAURA MANA REGEN: 0.65\r\nAURA BONUS ARMOR: 2\r\n+ 1 Armor ',500),(49,'Headdress','Creates a soothing aura that restores allies in battle. ','Passive: Regeneration Aura - Restores HP to allies in a 750 unit radius.\r\nMultiple instances of Regeneration Aura do not stack. \r\n+ 2 All Attributes\r\nBONUS REGEN: 3',603),(50,'Buckler','A powerful shield that imbues the bearer with the strength of heroes past, it is capable of protecting entire armies in battle. ','Active: Armor Bonus - Gives +2 to all nearby allied units. Lasts 25 seconds on heroes, 30 seconds on units. \r\n+ 5 Armor\r\n+ 2 All Attributes',803),(51,'Urn of Shadows','Contains the ashes of powerful demons. ','Gains charges every time an enemy hero dies within 1400 units. Only the closest Urn to the dying hero will gain a charge.\r\nActive: Soul Release - Heals HP over time for friendly units, but deals damage over time for enemy units. The healing effect is lost if the affected unit takes damage from an enemy hero or tower. \r\n+ 50% Mana Regeneration\r\n+ 6 Strength\r\nURN HEAL: 400\r\nDURATION: 8\r\nURN DAMAGE: 150 ',875),(52,'Ring of Aquila','The ring of the fallen Warlord Aquila continues to support armies in battle. ','Passive: Aquila Aura - Grants mana regeneration and armor in a 900 AoE.\r\nActive: Toggle whether the aura affects other non-hero units.\r\nMultiple instances of Aquila Aura do not stack. \r\n+ 9 Damage\r\n+ 3 All Attributes\r\n+ 3 Agility\r\n+ 1 Armor\r\nAURA MANA REGEN: 0.65\r\nAURA BONUS ARMOR: 2',985),(53,'Tranquil Boots','While they increase the longevity of the wearer, this boot is not particularly reliable. ','Active: Heal - Restores 250 HP over 20 seconds while out of combat.\r\nPassive: Break - Tranquil Boots lose their bonuses and only provide 25 MS until the last 10 seconds don\'t have 3 instances of damage. \r\n+ 85 Movement Speed\r\n+ 4 Armor\r\n+ 10 HP Regeneration ',975),(54,'Medallion of Courage','The bearer has no fear of combat.','Active: Valor - Reduces the armor of you and your target. Lasts 7 seconds.\r\n+ 6 Armor\r\n+ 50% Mana Regeneration\r\nARMOR REDUCTION: 6',1075),(55,'Arcane Boots','Magi equipped with these boots are valued in battle.','Active: Replenish Mana - Restores mana in an area around the hero.\r\nFlat movement speed bonuses from multiple pairs of boots do not stack. \r\n+ 55 Movement Speed\r\n+ 250 Mana\r\nMANA RESTORED: 135',1450),(56,'Drum of Endurance','A relic that enchants the bodies of those around it for swifter movement in times of crisis. ','Active: Endurance - Gives bonus +10 attack and +10% movement speed to surrounding allies.\r\nPassive: Swiftness Aura - Gives bonus attack and movement speed to surrounding allies.\r\nMultiple instances of Swiftness Aura do not stack. \r\n+ 9 All Attributes\r\n+ 3 Damage\r\nAURA ATTACK SPEED: 5\r\nAURA MOVE SPEED: 5%',1775),(57,'Vladmir\'s Offering','An eerie mask that is haunted with the malice of a fallen vampire.','Passive: Vladmir\'s Aura - Grants a variety of bonuses to nearby allies. Lifesteal bonuses from Vladmir\'s Aura only affect melee units. \r\nMultiple instances of Vladmir\'s Aura do not stack.\r\nAURA LIFESTEAL: 16%\r\nAURA BONUS DAMAGE: 15%\r\nAURA BONUS ARMOR: 5\r\nAURA MANA REGEN: 0.8\r\n+ 2 HP Regeneration  ',2050),(58,'Mekansm','A glowing jewel formed out of assorted parts that somehow fit together perfectly. ','Active: Restore - Heals 250 HP and gives +2 armor in an area.\r\nPassive: Mekansm Aura - Bonus HP Regen in an area.\r\nMultiple instances of Mekansm Aura do not stack. \r\n+ 5 All Attributes\r\n+ 5 Armor\r\nBONUS HP REGEN: 4 ',2306),(59,'Pipe of Insight','A powerful artifact of mysterious origin, it creates barriers against magical forces. ','Active: Barrier - Gives nearby friendly units a shield that blocks 400 spell damage.\r\nMultiple instances of spell resistance from items do not stack.\r\n+ 11 HP Regeneration\r\n+ 30% Spell Resistance ',3628),(60,'Force Staff','Allows you to manipulate others, for good or evil.','Active: Force - Pushes any target unit 600 units in the direction it is facing. Double click to self-cast.\r\n+ 10 Intelligence\r\n+ 3 HP Regeneration ',2250),(61,'Necronomicon','Considered the holy grail of necromancy and demonology, a powerful malefic force is locked within its pages.','Active: Demonic Summoning - Summons a Necronomicon Warrior and a Necronomicon Archer to fight for you. Their strength and abilities increase as Necronomicon increases in level. Lasts 40 seconds.\r\n+ 15/21/24 Intelligence\r\n+ 8/12/16 Strength',2700),(62,'Eul\'s Scepter of Divinity','A mysterious scepter passed down through the ages, its disruptive winds can be used for good or evil.','Active: Cyclone - Target unit is swept up in a cyclone for 2.5 seconds, and is invulnerable.\r\nFlat movement speed bonuses from multiple Eul\'s Scepters do not stack.\r\n+ 10 Intelligence\r\n+ 150% Mana Regeneration\r\n+ 40 Movement Speed ',2700),(63,'Dagon','A lesser wand that grows in power the longer it is used, it brings magic to the fingertips of the user.','Active: Energy Burst - Burst of damage to target enemy unit. Upgradable. \r\n+ 13/15/17/19/21 Intelligence\r\n+ 3 All Attributes\r\n+ 9 Damage\r\nBURST DAMAGE: 400/500/600/700/800 ',2800),(64,'Veil of Discord','The headwear of corrupt magi.','Active: Magic Weakness - Emits a weakening blast that increases the magic damage enemies take. Lasts 25.0 seconds. \r\n+ 6 Armor\r\n+ 6 Intelligence\r\n+ 6 HP Regeneration\r\nRADIUS: 600\r\nBONUS MAGIC DAMAGE: 25%\r\n+ 3 Strength\r\n+ 3 Agility\r\n+ 3 Damage ',2675),(65,'Rod of Atos','Atos, the Lord of Blight, has his essence stored in this deceptively simple wand. ','Active: Cripple - Slows the target\'s movement speed. \r\n+ 25 Intelligence\r\n+ 325 Health\r\nCRIPPLE SLOW: 60%\r\nDURATION: 4',3100),(66,'Aghanim\'s Scepter','The scepter of a wizard with demigod-like powers.','Passive: Ultimate Upgrade - Upgrades the ultimates of certain heroes. \r\n+ 10 All Attributes\r\n+ 200 Health\r\n+ 150 Mana ',4200),(67,'Orchid Malevolence','A garnet rod constructed from the essence of a fire demon.','Active: Soul Burn - Silences target unit for 5.0 seconds and amplifies the damage it takes by 30.0%. \r\n+ 25 Intelligence\r\n+ 30 Attack Speed\r\n+ 30 Damage\r\n+ 150% Mana Regeneration ',5025),(68,'Refresher Orb','A powerful artifact created for wizards.','Active: Reset Cooldowns - Resets the cooldowns of all your items and abilities.\r\n+ 5 HP Regeneration\r\n+ 200% Mana Regeneration\r\n+ 40 Damage\r\n+ 6 Intelligence ',5300),(69,'Scythe of Vyse','The most guarded relic among the cult of Vyse, it is the most coveted weapon among magi.','Active: Hex - Turns a target unit into a harmless critter for 3.5 seconds. Destroys illusions. \r\n+ 10 Strength\r\n+ 10 Agility\r\n+ 35 Intelligence\r\n+ 150% Mana Regeneration',5675),(70,'Crystalys','A blade forged from rare crystals, it seeks weak points in enemy armor','Passive: Critical Strike - Grants a chance to deal critical damage on an attack. \r\n+ 30 Damage\r\nCRITICAL CHANCE: 20%\r\nCRITICAL DAMAGE: 175% ',2150),(71,'Armlet of Mordiggian','Weapon of choice among brutes, the bearer sacrifices his life energy to gain immense strength and power.','Active: Unholy Strength - Gives +31 damage, +10 attack speed, and +25 strength while active, but drains 40 HP per second. You cannot die from the health loss when the bonus strength is gone, or the health drain per second. \r\n+ 9 Damage\r\n+ 15 Attack Speed\r\n+ 5 Armor\r\n+ 7 HP Regeneration ',2600),(72,'Skull Basher','A feared weapon in the right hands, this maul\'s ability to shatter the defenses of its opponents should not be underestimated.','Passive: Bash - Gives a chance to stun for 1.4 seconds.\r\n+ 40 Damage\r\n+ 6 Strength\r\nMELEE CHANCE: 25%\r\nRANGED CHANCE: 10%',2950),(73,'Shadow Blade','The blade of a fallen king, it allows you to move unseen and strike from the shadows. ','Active: Shadow Walk - Makes you invisible until the duration ends, or until you attack or cast a spell. While Shadow Walk is active, you move 20% faster and can move through units. If attacking to break the invisibility, you gain 150 bonus damage on that attack. Lasts 12 seconds. \r\n+ 22 Damage\r\n+ 30 Attack Speed ',3000),(74,'Battle Fury','The bearer of this mighty axe gains the ability to cut down swaths of enemies at once.','Passive: Cleave - Deals a percent of attack damage in a 225 AoE around the target. Ranged units cannot Cleave.\r\n+ 65 Damage\r\n+ 6 HP Regeneration\r\n+ 150% Mana Regeneration\r\nCLEAVE DAMAGE: 35% ',4350),(75,'Ethereal Blade','A flickering blade of a ghastly nature, it is capable of dealing damage in both magical and physical planes. ','Active: Ether Blast - Converts you and your target into ethereal form. Target unit is slowed and cannot attack or be attacked, and takes 2.0x of your primary attribute + 75 as damage.\r\n+ 40 Agility\r\n+ 10 Strength\r\n+ 10 Intelligence\r\nENEMY DURATION: 3\r\nALLY/SELF DURATION: 4 \r\n',4900),(76,'Radiance','A divine weapon that causes damage and a bright burning effect that lays waste to nearby enemies.','Active: Toggles Burn Damage on or off.\r\nPassive: Burn Damage - Deals damage per second in a 700 radius.\r\n+ 60 Damage\r\nBURN DAMAGE: 50',5150),(77,'Monkey King Bar','A powerful staff used by a master warrior. ','Passive: Mini-Bash - Gives a chance to minibash and deal bonus damage.\r\nPassive: True Strike - Prevents your attacks from missing. \r\n+ 88 Damage\r\n+ 15 Attack Speed\r\nCHANCE TO MINI-BASH: 35%\r\nMINI-BASH DAMAGE: 100 ',5400),(78,'Daedalus','A weapon of incredible power that is difficult for even the strongest of warriors to control. ','Passive: Critical Strike - Grants a chance to deal critical damage on an attack. \r\n+ 81 Damage\r\nCRITICAL CHANCE: 25%\r\nCRITICAL DAMAGE: 240% ',5550),(79,'Butterfly','Only the mightiest and most experienced of warriors can wield the Butterfly, but it provides incredible dexterity in combat.','+ 30 Agility\r\n+ 30 Damage\r\n+ 35% Evasion\r\n+ 30 Attack Speed ',6000),(80,'Divine Rapier','So powerful, it cannot have a single owner.','Drops on death. Divine Rapier is muted to anyone but the owner, as long as he or his teammates pick it up. As soon as an enemy picks it up, Divine Rapier is unmuted, but cannot be dropped except on death. \r\n+ 300 Damage ',6200),(81,'Abyssal Blade','The lost blade of the Commander of the Abyss, this edge cuts into an enemy\'s soul. ','Active: Stun a target enemy unit for 2.0 seconds. Goes through Magic Immunity. Passive: Bash - Gives a chance to stun for 1.4 seconds. \r\n+ 100 Damage\r\n+ 10 Strength\r\nMELEE CHANCE: 25%\r\nRANGED CHANCE: 10%',6750),(82,'Hood of Defiance','A furred, magic resistant headpiece that is feared by wizards. ','Multiple instances of spell resistance from items do not stack. \r\n+ 8 HP Regeneration\r\n+ 30% Spell Resistance ',2125),(83,'Blade Mail','A razor-sharp coat of mail, it is the choice of selfless martyrs in combat.','Active: Damage Return - Returns any damage you take to the unit that dealt the damage. Lasts 4.5 seconds. \r\n+ 22 Damage\r\n+ 6 Armor\r\n+ 10 Intelligence',2200),(84,'Vanguard','A powerful shield that defends its wielder from even the most vicious of attacks. ','Passive: Damage Block - Gives a chance to block damage, depending on the type of hero you are. \r\n+ 250 Health\r\n+ 6 HP Regeneration\r\nBLOCK CHANCE: 80%\r\nRANGED BLOCK: 20\r\nMELEE BLOCK: 40',2225),(85,'Soul Booster','Regain lost courage.','+ 450 Health\r\n+ 400 Mana\r\n+ 4 HP Regeneration\r\n+ 100% Mana Regeneration ',3300),(86,'Black King Bar','A powerful staff imbued with the strength of giants. ','Active: Avatar - Grants magic immunity. Duration and cooldown decrease with each use. Some Ultimate abilities are able to disable through Black King Bar. \r\n+ 10 Strength\r\n+ 24 Damage\r\nDURATION: 10/9/8/7/6/5/4',3975),(87,'Shiva\'s Guard','Said to have belonged to a goddess, today it retains much of its former power. ','Active: Arctic Blast - Emits a freezing wave that does 200 damage to enemies and slows their movement by -40% for 4.0 seconds.\r\nPassive: Freezing Aura - Reduces attack speed on enemies.\r\nMultiple instances of Freezing Aura do not stack. \r\n+ 30 Intelligence\r\n+ 15 Armor\r\nAURA SLOW: 40% ',4700),(88,'Manta Style','An axe made of reflective materials that causes confusion amongst enemy ranks. ','Active: Mirror Image - Creates 2 illusions of your hero that last 20 seconds.\r\nMelee illusions deal 33% damage and take 250% bonus damage. Ranged illusions deal 28% damage and take 300% bonus damage.\r\nPercentage based movement speed bonuses from multiple items do not stack. \r\n+ 10 Strength\r\n+ 26 Agility\r\n+ 10 Intelligence\r\n+ 15 Attack Speed\r\n+ 10% Movement Speed',5050),(89,'Bloodstone','The Bloodstone\'s bright ruby color is unmistakable on the battlefield, as the owner seems to have infinite vitality and spirit. ','Active: Pocket Suicide - Instantly commits suicide.\r\n\r\nPassive: Bloodpact - Starts with 8 charges. Gains 1 charge each time an enemy hero dies within 1675 range. Each charge bestows 1 mana regeneration per second, reduces gold lost from death by 25, and reduces respawn time by 4 seconds. When the bearer dies, restores 400 HP + 30 HP per charge to allied units within 1675 units, then loses a third of its charges. While dead, the bearer continues to receive experience at the death location and gives 1800 unit vision there. \r\n+ 500 Health\r\n+ 400 Mana\r\n+ 9 HP Regeneration\r\n+ 200% Mana Regeneration ',5050),(90,'Linken\'s Sphere','This magical sphere once protected one of the most famous heroes in history. ','Passive: Spellblock - Blocks most targeted spells once every 17 seconds. \r\n+ 15 All Attributes\r\n+ 6 HP Regeneration\r\n+ 150% Mana Regeneration\r\n+ 10 Damage ',5175),(91,'Assault Cuirass','Forged in the depths of the nether reaches, this hellish mail provides an army with increased armor and attack speed.','Passive: Assault Aura - Grants attack speed and armor to nearby allied units, and decreases armor for nearby enemies.\r\nMultiple instances of Assault Aura do not stack. \r\n+ 35 Attack Speed\r\n+ 10 Armor\r\nAURA ATTACK SPEED: 20\r\nAURA BONUS ARMOR: 5\r\nARMOR REDUCTION: 5 ',5250),(92,'Heart of Tarrasque','Preserved heart of an extinct monster, it bolsters the bearer\'s fortitude. ','Passive: Health Regeneration - Restores a percentage of max health per second. \r\nThis ability is disabled if damage is taken from an enemy Hero or Roshan within the last 4 seconds if your hero is melee or 6 seconds if your hero is ranged. \r\n+ 40 Strength\r\n+ 300 Health\r\nHEALTH RESTORED: 2% ',5500),(93,'Helm of the Dominator','The powerful headpiece of a dead necromancer. ','Active: Dominate - Take control of a non-hero, non-ancient target unit.\r\nPassive: Lifesteal - Gives lifesteal on attacks.\r\nHelm of the Dominator is a Unique Attack Modifier, and does not stack with other Unique Attack Modifiers.\r\n+ 20 Damage\r\n+ 5 Armor\r\nLIFESTEAL: 15% ',1850),(94,'Mask of Madness','Once this mask is worn, it\'s bearer becomes an uncontrollable aggressive force. ','Active: Berserk - Gives 100 attack speed and 30% movement speed but causes you to take extra 30% damage. Lasts 12 seconds.\r\nPassive: Lifesteal - Grants lifesteal on attacks.\r\nMask of Madness is a Unique Attack Modifier, and does not stack with other Unique Attack Modifiers. \r\nLIFESTEAL: 17% ',1900),(95,'Sange','Sange is an unusually accurate weapon, seeking weak points automatically.','Passive: Lesser Maim - Gives a chance on attack to slow movement speed for 4.0 seconds. \r\n+ 10 Damage\r\n+ 16 Strength\r\nMAIM CHANCE: 15%\r\nSLOW: 20%',2050),(96,'Yasha','Yasha is regarded as the swiftest weapon ever created. ','Percentage based movement speed bonuses from multiple items do not stack. \r\n+ 16 Agility\r\n+ 15 Attack Speed\r\n+ 10% Movement Speed ',2050),(97,'Maelstrom','A hammer forged for the gods themselves, Maelstrom allows its user to harness the power of lightning. ','Passive: Chain Lightning - Grants a chance on attack to release a Chain Lightning that hits 4 targets, dealing damage.\r\nMaelstrom is a Unique Attack Modifier that stacks with other Unique Attack Modifiers, but overrides them when Chain Lightning occurs. \r\n+ 24 Damage\r\n+ 25 Attack Speed\r\nCHANCE TO CHAIN: 25%\r\nCHAIN DAMAGE: 120 ',2700),(98,'Diffusal Blade','An enchanted blade that allows the user to cut straight into the enemy\'s soul. ','Active: Purge - Purges a target unit, removing buffs, slowing, and dealing damage if it is a summoned unit.\r\nPassive: Feedback - Your attacks burn 20/36 mana and deal the same amount in physical damage. Upgradable.\r\nDiffusal Blade is a Unique Attack Modifier, and does not stack with other Unique Attack Modifiers. \r\n+ 22/26 Agility\r\n+ 6/10 Intelligence ',3300),(99,'Desolator','A wicked weapon, used in torturing political criminals.','Passive: Corruption - Your attacks reduce target\'s armor for 15 seconds.\r\nDesolator is a Unique Attack Modifier, and does not stack with other Unique Attack Modifiers. \r\n+ 60 Damage\r\nARMOR REDUCTION: 7',4100),(100,'Heaven\'s Halberd','This halberd moves with the speed of a smaller weapon, allowing the bearer to win duels that a heavy edge would not. ','Active: Disarms the target for 4.5 seconds. Lasts 3.0 on Melee targets. \r\nPassive: Lesser Maim - Gives a chance on attack to slow movement speed for 4.0 seconds. \r\n+ 25 Damage\r\n+ 20 Strength\r\nMAIM CHANCE: 15%\r\nSLOW: 20%\r\n+ 25% Evasion ',3850),(101,'Sange and Yasha','Sange and Yasha, when attuned by the moonlight and used together, become a very powerful combination. ','Passive: Greater Maim - Gives a chance on attack to slow movement speed for 4.0 seconds.\r\nPercentage based movement speed bonuses from multiple items do not stack. \r\n+ 16 Damage\r\n+ 16 Strength\r\n+ 16 Agility\r\n+ 16 Attack Speed\r\n+ 16% Movement Speed\r\nMAIM CHANCE: 16%\r\nSLOW: 30% ',4100),(102,'Mjollnir','Thor\'s magical hammer, made for him by the dwarves Brok and Eitri.','Active: Static Charge - Places a charged shield on a target unit\r\nPassive: Chain Lightning - Grants a chance to release Chain Lighting on attack, dealing damage to multiple targets.\r\nMjollnir is a Unique Attack Modifier that stacks with other Unique Attack Modifiers, but overrides them when Chain Lightning occurs. \r\n+ 24 Damage\r\n+ 80 Attack Speed\r\nCHANCE TO CHAIN: 25%\r\nCHAIN DAMAGE: 160 ',5300),(103,'Eye of Skadi','Extremely rare artifact, guarded by the azure dragons. ','Passive: Cold Attack - Attacks slow the movement and attack speed of the target.\r\nEye of Skadi is a Unique Attack Modifier, and does not stack with other Unique Attack Modifiers. On ranged heroes, Eye of Skadi can be combined with Lifesteal Attack Modifiers. \r\n+ 25 All Attributes\r\n+ 250 Health\r\n+ 250 Mana\r\nMOVE SLOW: 35%\r\nATTACK SLOW: 35%',5675),(104,'Satanic','Immense power at the cost of your soul. ','Active: Unholy Rage - Increases Lifesteal by 175% for 3.5 seconds.\r\nPassive: Lifesteal - Gives Lifesteal on attacks.\r\nSatanic is a Unique Attack Modifier, and does not stack with other Unique Attack Modifier. \r\n+ 20 Damage\r\n+ 25 Strength\r\n+ 5 Armor\r\nLIFESTEAL: 25% ',6150),(105,'Demon Edge','One of the oldest weapons forged by the Demon-Smith Abzidian, it killed its maker when he tested its edge. ','+ 46 Damage ',2400),(106,'Eaglesong','Capturing the majestic call of an eagle, this mystical horn brings limitless dexterity to those who hear it. ','+ 25 Agility',3300),(107,'Reaver','A massive axe capable of tearing whole mountains down. ','+ 25 Strength ',3200),(108,'Sacred Relic','An ancient weapon that often turns the tides of war.','+ 60 Damage ',3800),(109,'Hyperstone','A mystical, carved stone that boosts the fervor of the holder.','+ 55 Attack Speed ',2000),(110,'Ring of Health','A shiny ring found beneath a fat halfling\'s corpse.','+ 5 HP Regeneration ',875),(111,'Void Stone','Jewelry that was once used to channel nether realm magic, this ring pulses with energy. ','+ 100% Mana Regeneration ',875),(112,'Mystic Staff','Enigmatic staff made of only the most expensive crystals. ','+ 25 Intelligence ',2700),(113,'Energy Booster','This lapis gemstone is commonly added to the collection of wizards seeking to improve their presence in combat. ','+ 250 Mana ',1000),(114,'Point Booster','A perfectly formed amethyst that nourishes body and mind when held. ','+ 150 Mana\r\n+ 200 Health ',1200),(115,'Vitality Booster','A ruby gemstone that has been passed down through generations of warrior kin. ','+ 250 Health',1100),(116,'Orb of Venom','Envenoms your veapon with the venom of a venomous viper.','Passive: Poison Attack - Poisons the target, dealing damage over time and slowing, depending on whether your hero is melee or ranged.\r\nOrb of Venom is a Unique Attack Modifier, and does not stack with other Unique Attack Modifiers. \r\nMELEE SLOW: 12%\r\nRANGED SLOW: 4%\r\nDURATION: 4\r\nPOISON DAMAGE: 3 ',275),(117,'Platemail','Thick metal plates that protect the entire upper body. Avoid dropping on feet.','+ 10 Armor',1400);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_list_heroes`
--

DROP TABLE IF EXISTS `my_list_heroes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_list_heroes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `my_list_id` int(11) NOT NULL,
  `hero_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `my_list_id` (`my_list_id`),
  KEY `hero_id` (`hero_id`),
  CONSTRAINT `my_list_heroes_ibfk_1` FOREIGN KEY (`my_list_id`) REFERENCES `my_lists` (`id`) ON DELETE CASCADE,
  CONSTRAINT `my_list_heroes_ibfk_2` FOREIGN KEY (`hero_id`) REFERENCES `heroes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_list_heroes`
--

LOCK TABLES `my_list_heroes` WRITE;
/*!40000 ALTER TABLE `my_list_heroes` DISABLE KEYS */;
INSERT INTO `my_list_heroes` VALUES (3,3,4),(4,6,12),(6,3,6),(7,3,1);
/*!40000 ALTER TABLE `my_list_heroes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_lists`
--

DROP TABLE IF EXISTS `my_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `my_lists_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_lists`
--

LOCK TABLES `my_lists` WRITE;
/*!40000 ALTER TABLE `my_lists` DISABLE KEYS */;
INSERT INTO `my_lists` VALUES (3,4,'test','2013-12-02 23:53:24','2013-12-02 23:53:24'),(4,3,'test123','2013-12-03 01:55:21','2013-12-03 01:55:21'),(5,3,'test1234ekt7be','2013-12-03 02:05:41','2013-12-03 02:05:41'),(6,4,'test3','2013-12-03 04:46:16','2013-12-03 04:46:16'),(7,3,'test3asdf','2013-12-03 07:37:40','2013-12-03 07:37:40'),(8,3,'test242342','2013-12-03 08:41:46','2013-12-03 08:41:46');
/*!40000 ALTER TABLE `my_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipe_items`
--

DROP TABLE IF EXISTS `recipe_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipe_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `recipe_id` (`recipe_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `recipe_items_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `recipe_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipe_items`
--

LOCK TABLES `recipe_items` WRITE;
/*!40000 ALTER TABLE `recipe_items` DISABLE KEYS */;
INSERT INTO `recipe_items` VALUES (1,1,6),(2,1,4),(3,2,6),(4,2,5),(5,3,2),(6,3,2),(7,3,2),(8,3,25),(9,4,6),(10,4,3),(11,5,4),(12,5,4),(13,5,16),(14,6,27),(15,6,26),(16,7,28),(17,7,17),(18,7,17),(19,8,29),(20,8,28),(21,8,7),(22,9,19),(23,9,26),(24,9,9),(25,10,110),(26,10,111),(27,11,29),(28,12,28),(29,13,26),(30,13,14),(31,14,27),(32,14,2),(33,15,18),(34,15,2),(35,16,26),(36,16,3),(37,16,3),(38,17,36),(39,17,48),(40,18,28),(41,18,14),(42,18,27),(43,19,18),(44,19,26),(45,20,113),(46,20,28),(47,21,39),(48,21,9),(49,22,27),(50,22,48),(51,22,31),(52,23,49),(53,23,50),(54,24,82),(55,24,49),(56,25,13),(57,25,27),(58,26,13),(59,26,7),(60,27,13),(61,27,26),(62,27,111),(63,28,13),(64,28,37),(65,29,20),(66,29,37),(67,30,13),(68,30,13),(69,30,115),(70,31,114),(71,31,13),(72,31,11),(73,31,12),(74,32,44),(75,32,44),(76,33,44),(77,33,45),(78,34,112),(79,34,10),(80,34,111),(81,35,21),(82,35,17),(83,36,20),(84,36,29),(85,36,17),(86,37,7),(87,37,23),(88,38,33),(89,38,22),(90,39,21),(91,39,22),(92,39,45),(93,40,106),(94,40,32),(95,41,108),(96,42,105),(97,42,23),(98,42,23),(99,43,70),(100,43,105),(101,44,34),(102,44,19),(103,44,106),(104,45,108),(105,45,105),(106,46,72),(107,46,108),(108,47,110),(109,47,30),(110,47,27),(111,47,27),(112,48,21),(113,48,18),(114,48,9),(115,49,110),(116,49,115),(117,49,16),(118,50,115),(119,50,113),(120,50,114),(121,51,11),(122,51,24),(123,52,117),(124,52,112),(125,53,96),(126,53,10),(127,54,45),(128,54,85),(129,55,10),(130,55,45),(131,56,117),(132,56,109),(133,56,18),(134,57,107),(135,57,115),(136,58,31),(137,58,20),(138,59,31),(139,60,11),(140,60,7),(141,61,12),(142,61,8),(143,62,29),(144,62,24),(145,63,12),(146,63,12),(147,63,9),(148,64,24),(149,64,24),(150,65,95),(151,65,34),(152,66,96),(153,66,95),(154,67,109),(155,67,97),(156,68,10),(157,68,10),(158,68,114),(159,68,116),(160,69,107),(161,69,93);
/*!40000 ALTER TABLE `recipe_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (1,36,'Wraith Band Recipe',150),(2,37,'Null Talisman Recipe',135),(3,38,'Magic Wand Recipe',150),(4,39,'Bracer Recipe',190),(5,40,'Poor Man\'s Shield Recipe',0),(6,41,'Soul Ring Recipe',125),(7,42,'Phase Boots Recipe',0),(8,43,'Power Treads Recipe',0),(9,44,'Oblivion Staff Recipe',0),(10,45,'Perserverance Recipe',0),(11,46,'Hand of Midas Recipe',1400),(12,47,'Boots of Travel Recipe',2000),(13,48,'Ring of Basilius Recipe',0),(14,49,'Headdress Recipe',200),(15,50,'Buckler Recipe',200),(16,51,'Urn of Shadows Recipe',250),(17,52,'Ring of Aquila Recipe',0),(18,53,'Tranquil Boots Recipe',0),(19,54,'Medallion of Courage Recipe',200),(20,55,'Arcane Boots Recipe',0),(21,56,'Drum of Endurance Recipe',800),(22,57,'Vladmir\'s Offering Recipe',300),(23,58,'Mekansm Recipe',900),(24,59,'Pipe of Insight Recipe',900),(25,60,'Force Staff Recipe',900),(26,61,'Necronomicon Recipe',1250),(27,62,'Eul\'s Scepter of Divinity',500),(28,63,'Dagon Recipe',1250),(29,64,'Veil of Discord Recipe',1250),(30,65,'Rod of Atos Recipe',0),(31,66,'Aghanim\'s Scepter Recipe',0),(32,67,'Orchid Malevolence Recipe',775),(33,68,'Refresher Orb Recipe',1875),(34,69,'Scythe of Vyse Recipe',0),(35,70,'Crystalys Recipe',500),(36,71,'Armlet of Mordiggian',700),(37,72,'Skull Basher Recipe',1000),(38,73,'Shadow Blade Recipe',0),(39,74,'Battle Fury Recipe',0),(40,75,'Ethereal Blade Recipe',0),(41,76,'Radiance Recipe',1350),(42,77,'Monkey King Bar Recipe',0),(43,78,'Daedalus Recipe',1000),(44,79,'Butterfly Recipe',0),(45,80,'Divine Rapier Recipe',0),(46,81,'Abyssal Blade Recipe',0),(47,82,'Hood of Defiance Recipe',0),(48,83,'Blade Mail Recipe',0),(49,84,'Vanguard Recipe',0),(50,85,'Soul Booster Recipe',0),(51,86,'Black King Bar Recipe',1375),(52,87,'Shiva\'s Guard Recipe',600),(53,88,'Manta Style Recipe',900),(54,89,'Bloodstone Recipe',0),(55,90,'Linken\'s Sphere Recipe',1325),(56,91,'Assault Cuirass Recipe',1300),(57,92,'Heart of Tarrasque Recipe',1200),(58,93,'Helm of the Dominator Recipe',0),(59,94,'Mask of Madness Recipe',1000),(60,95,'Sange Recipe',600),(61,96,'Yasha Recipe',600),(62,97,'Maelstrom Recipe',600),(63,98,'Diffusal Blade Recipe',850),(64,99,'Desolator Recipe',900),(65,100,'Heaven\'s Halberd Recipe',0),(66,101,'Sange and Yasha Recipe',0),(67,102,'Mjollnir Recipe',600),(68,103,'Eye of Skadi Recipe',0),(69,104,'Satanic Recipe',1100);
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hero_id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` text NOT NULL,
  `ability_type` varchar(10) NOT NULL,
  `damage` int(8) DEFAULT NULL,
  `mana_cost` int(8) DEFAULT NULL,
  `cooldown` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hero_id` (`hero_id`),
  CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`hero_id`) REFERENCES `heroes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (1,1,'Fissure','Slams the ground with a mighty totem, fissuring the earth while stunning and damaging enemy units in a line. Creates an impassable ridge of stone.','magical',125,125,15),(2,1,'Enchant Totem','Empowers Earthshaker\'s totem, causing it to deal extra damage on the next attack.','passive',0,50,5),(3,1,'Aftershock','Causes the earth to shake underfoot, adding additional damage and stuns to nearby enemy units when Earthshaker casts his abilities.','magical',50,0,0),(4,1,'Echo Slam','Shockwaves travel through the ground, damaging enemy units. Each enemy hit causes an echo to damage nearby units.','magical',160,145,150),(5,2,'Storm Hammer','Sven unleashes his magical gauntlet that deals damage and stuns enemy units.','magical',100,140,13),(6,2,'Great Cleave','Sven strikes with great force, cleaving all nearby enemy units with his attack.\r\n\r\nCleave damage on non-primary targets is not reduced by armor values.','passive',0,0,0),(7,2,'Warcry','Sven\'s Warcry heartens his allies for battle, increasing their movement speed and armor. Lasts 7 seconds.','passive',0,25,36),(8,2,'God\'s Strength','Sven channels his rogue strength, granting bonus damage for 25 seconds.','passive',0,100,80),(9,3,'Beserker\'s Call','Axe taunts nearby enemy units, forcing them to attack him, while he gains bonus armor during the duration.','passive',0,80,10),(10,3,'Battle Hunger','Enrages an enemy unit, causing it to be slowed and take damage over time until it kills another unit or the duration ends. Axe gains movement speed for each unit affected with Battle Hunger.','magical',15,75,20),(11,3,'Counter Helix','When attacked, Axe performs a helix counter attack, dealing damage to all nearby enemies.','physical',0,0,0),(12,3,'Culling Blade','Axe spots weakness and strikes, dealing moderate damage but instantly killing an enemy unit with low health. When an enemy unit is killed in this way, Axe and nearby allied units gain bonus movement speed.','magical',150,60,75),(13,4,'Meat Hook','Launches a bloody hook at a unit or location. The hook will snag the first unit it encounters, dragging the unit back to Pudge and dealing damage if it is an enemy.','pure',90,110,14),(14,4,'Rot','A toxic cloud that deals intense damage and slows movement--harming not only enemy units but Pudge himself.','magical',35,0,0),(15,4,'Flesh Heap','Gives Pudge resistance to magic damage, as well as bonus strength that increases each time Pudge kills an enemy Hero or it dies in his vicinity. Flesh Heap is retroactive, meaning it can gain charges before it is skilled, which then become active.','passive',0,0,0),(16,4,'Dismember','CHANNELED - Pudge chows down on an enemy unit, disabling it and dealing damage over time. Lasts 3 seconds on Heroes, 6 seconds on creeps.','magical',75,100,30),(17,5,'Mana Break','Burns an opponent\'s mana on each attack. Mana Break deals 60% of the mana burned as damage to the target.','physical',0,0,0),(18,5,'Blink','Short distance teleportation that allows Anti-Mage to move in and out of combat.','passive',0,60,12),(19,5,'Spell Shield','Increases Anti-Mage\'s resistance to magic damage.','passive',0,0,0),(20,5,'Mana Void','For each point of mana missing by the target unit, damage is dealt to it and surrounding enemies. The primary target is stunned for a short duration.','magical',1,125,70),(21,6,'Frost Arrows','Adds a freezing effect to Drow\'s attacks, slowing enemy movement. Lasts 1.5 seconds on Heroes, and 7 seconds on creeps.','passive',0,12,0),(22,6,'Silence','Stops all enemy units in a target area from casting spells.','passive',0,90,13),(23,6,'Precision Aura','Adds bonus damage to the physical attack of allied Hero units on the map based on a percentage of Drow\'s agility. Affects creeps for 30 seconds when cast.','passive',0,0,120),(24,6,'Marksmanship','Passively provides bonus agility. If there are nearby enemy heroes, the bonus agility is removed.','passive',0,0,0),(25,7,'Bloodrage','Drives a unit into a bloodthirsty rage, during which it has higher attack damage, but cannot cast spells and takes damage every second. Bloodrage dispels the target before applying its buff.','magical',20,80,12),(26,7,'Blood Bath','Bloodseeker revels in combat, gaining health with every unit he kills. The health gained is a percentage of the killed unit\'s maximum HP. If a hero dies within a radius of 325 of Bloodseeker and he is not the killer, he is healed for half the normal hero kill effect.','passive',0,0,0),(27,7,'Thirst','Enables Bloodseeker to sense enemy Heroes with health below a certain percentage, giving him vision of that unit and increased movement speed. Bloodseeker gains True Sight of enemy heroes below half their visiblity threshold.','passive',0,0,0),(28,7,'Rupture','Causes an enemy unit\'s skin to rupture, dealing massive damage. If the unit moves while under the effect of Rupture, it takes a percentage of the distance traveled as damage.','pure',150,150,70),(29,8,'Shadowraze','Shadow Fiend razes the area in front of him, dealing damage to enemy units in an area.','magical',75,75,10),(30,8,'Necromastery','Shadow Fiend steals the soul from units he kills, gaining bonus damage. If the killed unit is a hero, he gains 12 souls. On death, he releases half of them from bondage.','passive',0,0,0),(31,8,'Presence of the Dark Lord','Shadow Fiend\'s presence reduces the armor of nearby enemies.','passive',0,0,0),(32,8,'Requiem of Souls','Captured souls are released to deal massive damage, as well as slowing and reducing the attack damage of nearby enemy units. Requiem of Souls creates one wave of damage for every 2 souls stored by Necromastery. The closest enemy units are hit the hardest. Requiem has a 1 second cast time before it is activated. Also, the half the souls you lose on death are released in as if the spell was cast.','magical',80,150,120),(33,9,'Crystal Nova','A burst of damaging frost slows enemy movement and attack rate in the targeted area.','magical',100,100,15),(34,9,'Frostbite','Encases an enemy unit in ice, prohibiting movement and attack, while dealing damage per second.','magical',70,115,10),(35,9,'Arcane Aura','Gives additional mana regeneration to all friendly units on the map.','passive',0,0,0),(36,9,'Freezing Field','CHANNELED - Surrounds Crystal Maiden with random icy explosions that slow enemies and deal massive damage. Lasts 7 seconds.','magical',105,200,150),(37,10,'Illusory Orb','Puck launches a magic orb that floats in a straight path, damaging enemy units along the way. At any point, Puck may teleport to the orb\'s location using Ethereal Jaunt.','magical',70,150,12),(38,10,'Waning Rift','Puck releases a burst of faerie dust that deals damage and silences enemy units nearby.','magical',70,100,16),(39,10,'Phase Shift','Puck briefly shifts into another dimension where it is immune from harm','passive',0,0,6),(40,10,'Dream Coil','Creates a coil of volatile magic that latches onto enemy Heroes, stunning them for .5 seconds and damaging them. If the enemy hero stretches the coil by moving too far away, it snaps, deals damage again and stuns.','magical',100,100,85),(41,11,'Enfeeble','Weakens an enemy unit, reducing its physical damage. Lasts 20 seconds.','passive',0,95,10),(42,11,'Brain Sap','Feasts on the vital energies of an enemy unit, dealing damage and gaining health equal to the damage dealt.','pure',90,125,14),(43,11,'Nightmare','Puts the target enemy or friendly Hero to sleep and deals damage per second. Sleeping units are awakened when attacked, but the Nightmare passes to the attacking unit.','pure',20,165,15),(44,11,'Fiend\'s Grip','CHANNELED - Grips an enemy unit, disabling it and causing heavy damage over time, while stealing mana every second based on the unit\'s maximum mana.','magical',100,200,100),(45,12,'Frost Blast','Blasts the target enemy unit with damaging frost, dealing area damage and slowing movement and attack rates for 4 seconds. The primary target takes the most damage.','magical',50,125,8),(46,12,'Ice Armor','Creates a shield around the target friendly unit, which adds armor and slows attacking melee units. Lasts 40 seconds','pasive',0,50,5),(47,12,'Sacrifice','Sacrifices a friendly creep and converts its current HP into mana for Lich.','pasive',0,25,44),(48,12,'Chain Frost','Releases an orb of frost that bounces up to 10 times, slowing and damaging enemy units. The first target is mini-stunned.','magical',280,200,145);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`cs4750ekt7be`@`%`*/ /*!50003 TRIGGER `chk_skill_trig` BEFORE INSERT ON `skills`
FOR EACH ROW
BEGIN
    IF NEW.cooldown < 0 THEN
        SIGNAL SQLSTATE '45000'
	      SET MESSAGE_TEXT = 'An error occurred. Cooldown can’t be negative.';
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `role` varchar(20) DEFAULT 'user',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'test','e35ddad72adca1fa1de9e528192618134e87da4c','user','2013-12-02 21:09:17','2013-12-02 21:09:17'),(3,'ekt7be','5cf8f36b2b051589ea6702b2136559438738f7de','admin','2013-12-02 21:37:51','2013-12-02 21:37:51'),(4,'test2','8d6ffb40cf8de8f0a0990a82e5420e8a6c24e809','user','2013-12-02 22:16:48','2013-12-03 06:01:40');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-03  9:58:53
1
