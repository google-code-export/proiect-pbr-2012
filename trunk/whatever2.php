<?php
	
	// Modul 2
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
			$create_table = mysql_query('CREATE TABLE '. $table2 . ' (
	ID INT(3),
	FourLegs BOOL,
	Barks BOOL,
	Tail BOOL,
	Breed VARCHAR(30),
	VeryGoodSmell BOOL,	
	SizeSmall BOOL,
	SizeMedium BOOL,
	SizeLarge BOOL,
	SizeGiant BOOL,
	BigEars BOOL,
	BlackMouth BOOL,
	DistinctColoring BOOL,
	EasyToTrain BOOL,
	SmallEars BOOL,
	ShortCompactBuilt BOOL,
	BlueEyes BOOL,
	CroppedEars BOOL,
	DoubleCoat BOOL,
	SpottedFur BOOL,
	GoldenFur BOOL,
	GentleGiants BOOL,
	GoodChildren BOOL,
	HardlyEverSheads BOOL,
	Small BOOL,
	CannotSwim BOOL,
	SensitiveNose BOOL,
	Adaptable BOOL,
	EggShapedHead BOOL,
	CurledTail BOOL,
	WinterSledDog BOOL,
	HighlyInteligent BOOL,
	RustColouredCoat BOOL,
	VeryMuscularBody BOOL,
	EasiestToTrain BOOL,
	IncrediblyStrong BOOL,
	Protective BOOL,
	Shorter BOOL,
	Medium BOOL,
	Longer BOOL,
	ShortMedium BOOL,
	MediumLong BOOL,
	Smooth BOOL,
	Fluffy BOOL,
	Rough BOOL,
	Thick BOOL,
	Soft BOOL,
	Frizzy BOOL,
	SoftFluffy BOOL,
	ThickSmooth BOOL,
	SmoothFrizzy BOOL,
	RoughFrizzy BOOL,
	DogGroupKennelClubToy BOOL,
	DogGroupKennelClubHound BOOL,
	DogGroupKennelClubUtility BOOL,
	DogGroupKennelClubTerrier BOOL,
	DogGroupKennelClubWorking BOOL,
	DogGroupKennelClubPastoral BOOL,
	DogGroupKennelClubGundog BOOL,
	CountryMexico BOOL,
	CountryChina BOOL,
	CountryGreatBritain BOOL,
	CountryFrance BOOL,
	CountrySYberia BOOL,
	CountryGermany BOOL,
	CountryYugoslavia BOOL,
	CountryRussia BOOL,
	CountryItaly BOOL
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