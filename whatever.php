<?php
	
	//
	// Authors: Mihai Daniel Patrascu & Mihaila N. Ioan
	// Grupa 3A, An 3
	// COPYRIGHT ©2012 by Ioan Mihaila & Mihai Daniel Patrascu.
	// All rights reserved!
	//
	
	require('dbConfig.php');
	
	$connect = mysql_connect($host, $username, $password);
	if($connect) {
		$create_db = mysql_query('CREATE DATABASE IF NOT EXISTS ' . $db);
		$select_db = mysql_query('USE '.$db);
		if($select_db) {
			$create_table = mysql_query('CREATE TABLE '. $table . ' (
ID INT(3), 
SpeciesFourLegs Bool,
SpeciesBarks Bool,
SpeciesTail Bool,
SpeciesVeryGoodSmell Bool,
BreedChiuaua Bool,
BreedPug Bool,
BreedBeagle Bool,
BreedPoodle Bool,
BreedBullTerrier Bool,
BreedChowChow Bool,
BreedHusky Bool,
BreedGermanPinscher Bool,
BreedRottweiler Bool,
BreedBoxer Bool,
BreedCollieRough Bool,
BreedDalmatian Bool,
BreedGoldenRetriever Bool,
BreedMastiff Bool,
BreedSaintBernard Bool,
BreedBlackTerrier Bool,
SizeSmall Bool,
SizeMedium Bool,
SizeLarge Bool,
SizeGiant Bool,
CharacteristicBigEars Bool,
CharacteristicBlackMouth Bool,
CharacteristicDistinctColoring Bool,
CharacteristicEasyToTrain Bool,
CharacteristicSmallEars Bool,
CharacteristicShortCompactBuilt Bool,
CharacteristicBlueEyes Bool,
CharacteristicCroppedEars Bool,
CharacteristicDoubleCoat Bool,
CharacteristicSpottedFur Bool,
CharacteristicGoldenFur Bool,
CharacteristicGentleGiants Bool,
CharacteristicGoodChildren Bool,
CharacteristicHardlyEverSheads Bool,
CharacteristicSmall Bool,
CharacteristicCannotSwim Bool,
CharacteristicSensitiveNose Bool,
CharacteristicAdaptable Bool,
CharacteristicEggShapedHead Bool,
CharacteristicCurledTail Bool,
CharacteristicWinterSledDog Bool,
CharacteristicHighlyInteligent Bool,
CharacteristicRustColouredCoat Bool,
CharacteristicVeryMuscularBody Bool,
CharacteristicEasiestToTrain Bool,
CharacteristicIncrediblyStrong Bool,
CharacteristicVeryProtective Bool,
HairShort Bool,
HairMedium Bool,
HairLong Bool,
HairShortMedium Bool,
HairMediumLong Bool,
FurSmooth Bool,
FurFluffy Bool,
FurRough Bool,
FurThick Bool,
FurSoft Bool,
FurFrizzy Bool,
FurSoftFluffy Bool,
FurThickSmooth Bool,
FurSmoothFrizzy Bool,
FurRoughFrizzy Bool,
DogGroupKennelClubToy Bool,
DogGroupKennelClubHound Bool,
DogGroupKennelClubUtility Bool,
DogGroupKennelClubTerrier Bool,
DogGroupKennelClubWorking Bool,
DogGroupKennelClubPastoral Bool,
DogGroupKennelClubGundog Bool,
CountryMexico Bool,
CountryChina Bool,
CountryGreatBritain Bool,
CountryFrance Bool,
CountrySYberia Bool,
CountryGermany Bool,
CountryYugoslavia Bool,
CountryRussia Bool,
CountryItaly Bool
										);') or die (mysql_error());
		}
		else {
			echo 'ERROR: ' .mysql_error();
		}
	}
	else {
		echo 'ERROR: ' . mysql_error();
	}
	
?>