<?php
namespace yaConverter;

class USUnits {
	//Technical
	public static function Info() {
		echo "USUnits extension by ya_Bob_Jonez.\n";
		echo "Version 0.8\n";
	} public static function Usage() {
		echo "Usage of Extension:\n";
		echo "1 x 1: [From]To[To](Value)\n";
		echo "2 x 1: [From1][From2]To[To](Value1, Value2)\n";
		echo "1 x 2: [From]To[To1][To2](Value): Outputs as array, indexes are FULL NAMES of units\n";
		echo "Examples of usage:\n";
		echo "1 x 1: \echo \FtToIn(2); //Outputs: 24\n";
		echo "2 x 1: \echo \FtInToIn(2, 3); //Outputs: 27\n";
		echo "1 x 2: \$a = \InToFtIn(27); \echo \$a[\"inches\"]; //Outputs: 3\n";
	}
	
	//Inches - feet, inches - yards, inches - miles
	public static function InToFtIn($inches) {
		$feet = floor($inches / 12);
		$inches = $inches % 12;
		return array("feet" => $feet, "inches" => $inches);
	} public static function InToFt($inches) {
		$feet = $inches / 12;
		return $feet;
	} public static function FtInToIn($feet, $inches = 0) {
		$inches = ($feet * 12) + $inches;
		return $inches;
	} public static function FtToIn($feet, $inches = 0) {
		return self::FtInToIn($feet, $inches);
	} public static function InToYdIn($inches) {
		$yards = floor($inches / 36);
		$inches = $inches % 36;
		return array("yards" => $yards, "inches" => $inches);
	} public static function InToYd($inches) {
		$yards = $inches / 36;
		return $yards;
	} public static function YdInToIn($yards, $inches = 0) {
		$inches = ($yards * 36) + $inches;
		return $inches;
	} public static function YdToIn($yards, $inches = 0) {
		return self::YdInToIn($yards, $inches);
	} public static function InToMiIn($inches) {
		$miles = floor($inches / 63360);
		$inches = $inches % 63360;
		return array("miles" => $miles, "inches" => $inches);
	} public static function InToMi($inches) {
		$miles = $inches / 63360;
		return $miles;
	} public static function MiInToIn($miles, $inches = 0) {
		$inches = ($miles * 63360) + $inches;
		return $inches;
	} public static function MiToIn($miles, $inches = 0) {
		return self::MiInToIn($miles, $inches);
	}
	
	//Feet - yards, feet - miles
	public static function FtToYdFt($feet) {
		$yards = floor($feet / 3);
		$feet = $feet % 3;
		return array("yards" => $yards, "feet" => $feet);
	} public static function FtToYd($feet) {
		$yards = $feet / 3;
		return $yards;
	} public static function FtToMiFt($feet) {
		$miles = floor($feet / 5280);
		$feet = $feet % 5280;
		return array("miles" => $miles, "feet" => $feet);
	} public static function FtToMi($feet) {
		$miles = $feet / 5280;
		return $miles;
	} public static function MiFtToFt($miles, $feet = 0) {
		$feet = ($miles * 5280) + $feet;
		return $feet;
	} public static function MiToFt($miles, $feet = 0) {
		return self::MiFtToFt($miles, $feet);
	} public static function YdFtToFt($yards, $feet = 0) {
		$feet = ($yards * 3) + $feet;
		return $feet;
	} public static function YdToFt($yards, $feet = 0) {
		return self::YdFtToFt($yards, $feet);
	}
	
	//Yards - miles
	public static function YdToMiYd($yards) {
		$miles = floor($yards / 1760);
		$yards = $yards % 1760;
		return array("miles" => $miles, "yards" => $yards);
	} public static function YdToMi($yards) {
		$miles = $yards / 1760;
		return $miles;
	} public static function MiYdToYd($miles, $yards = 0) {
		$yards = ($miles * 1760) + $yards;
		return $yards;
	} public static function MiToYd($miles, $yards = 0) {
		return self::MiYdToYd($miles, $yards);
	}
	
	//Ounces - pounds, ounces - stones, ounces - tons
	public static function OzToLbOz($ounces) {
		$pounds = floor($ounces / 16);
		$ounces = $ounces % 16;
		return array("pounds" => $pounds, "ounces" => $ounces);
	} public static function OzToLb($ounces) {
		$pounds = $ounces / 16;
		return $pounds;
	} public static function LbOzToOz($pounds, $ounces = 0) {
		$ounces = ($pounds * 16) + $ounces;
		return $ounces;
	} public static function LbToOz($pounds, $ounces = 0) {
		return self::LbOzToOz($pounds, $ounces);
	} public static function OzToStOz($ounces) {
		$stones = floor($ounces / 224);
		$ounces = $ounces % 224;
		return array("stones" => $stones, "ounces" => $ounces);
	} public static function OzToSt($ounces) {
		$stones = $ounces / 224;
		return $stones;
	} public static function StOzToOz($stones, $ounces = 0) {
		$ounces = ($stones * 224) + $ounces;
		return $ounces;
	} public static function StToOz($stones, $ounces = 0) {
		return self::StOzToOz($stones, $ounces);
	} public static function OzToTOz($ounces) {
		$tons = floor($ounces / 32000);
		$ounces = $ounces % 32000;
		return array("tons" => $tons, "ounces" => $ounces);
	} public static function OzToT($ounces) {
		$tons = $ounces / 32000;
		return $tons;
	} public static function TOzToOz($tons, $ounces = 0) {
		$ounces = ($tons * 32000) + $ounces;
		return $ounces;
	} public static function TToOz($tons, $ounces = 0) {
		return self::TOzToOz($tons, $ounces);
	}
	
	//Pounds - stones, short tons - stones
	public static function LbToStLb($pounds) {
		$stones = floor($pounds / 14);
		$pounds = $pounds % 14;
		return array("stones" => $stones, "pounds" => $pounds);
	} public static function LbToSt($pounds) {
		$stones = $pounds / 14;
		return $stones;
	} public static function StLbToLb($stones, $pounds = 0) {
		$pounds = ($stones * 14) + $pounds;
		return $pounds;
	} public static function StToLb($stones, $pounds = 0) {
		return self::StLbToLb($stones, $pounds);
	} public static function StToTSt($stones) {
		$tons = floor($stones / 142.8571);
		$stones = $stones % 142.8571;
		return array("tons" => $tons, "stones" => $stones);
	} public static function StToT($stones) {
		$tons = $stones / 142.8571;
		return $tons;
	} public static function TStToSt($tons, $stones = 0) {
		$stones = ($tons * 142.8571) + $stones;
		return $stones;
	} public static function TToSt($tons, $stones = 0) {
		return self::TStToSt($tons, $stones);
	}
	
	//Pounds - short tons
	public static function LbToTLb($pounds) {
		$tons = floor($pounds / 2000);
		$pounds = $pounds % 2000;
		return array("tons" => $tons, "pounds" => $pounds);
	} public static function LbToT($pounds) {
		$tons = $pounds / 2000;
		return $tons;
	} public static function TLbToLb($tons, $pounds = 0) {
		$pounds = ($tons * 2000) + $pounds;
		return $pounds;
	} public static function TToLb($tons, $pounds = 0) {
		return self::TLbToLb($tons, $pounds);
	}
	
	//Feet per second - miles per hour, feet per second - knots
	public static function FpsToMph($feetpersecond) {
		$milesperhour = $feetpersecond / 1.466535;
		return $milesperhour;
	} public static function MphToFps($milesperhour) {
		$feetpersecond = $milesperhour * 1.466535;
		return $feetpersecond;
	} public static function FpsToKnots($feetpersecond) {
		$knots = $feetpersecond / 1.687664;
		return $knots;
	} public static function KnotsToFps($knots) {
		$feetpersecond = $knots * 1.466535;
		return $feetpersecond;
	}
	
	//Miles per hour - knots
	public static function MphToKnots($milesperhour) {
		$knots = $milesperhour / 1.150783;
		return $knots;
	} public static function KnotsToMph($knots) {
		$milesperhour = $knots * 1.150783;
		return $milesperhour;
	}
	
	//Sq. inches - sq. feet, sq. inches - sq. yards, sq. inches - sq. miles
	//sq. inches - acres
	public static function SqInToSqFt($sqinches) {
		$sqfeet = $sqinches / 144;
		return $sqfeet;
	} public static function SqFtToSqIn($sqfeet) {
		$sqinches = $sqfeet * 144;
		return $sqinches;
	} public static function SqInToSqYd($sqinches) {
		$sqyards = $sqinches / 1296;
		return $sqyards;
	} public static function SqYdToSqIn($sqyards) {
		$sqinches = $sqyards * 1296;
		return $sqinches;
	} public static function SqInToSqMi($sqinches) {
		$sqmiles = $sqinches / 4014489600;
		return $sqmiles;
	} public static function SqMiToSqIn($sqmiles) {
		$sqinches = $sqmiles * 4014489600;
		return $sqinches;
	} public static function SqInToAc($sqinches) {
		$acres = $sqinches / 6272640;
		return $acres;
	} public static function AcToSqIn($acres) {
		$sqinches = $acres * 6272640;
		return $sqinches;
	}
	
	//Sq. feet - sq. yards, sq. feet - sq. miles
	public static function SqFtToSqYd($sqfeet) {
		$sqyards = $sqfeet / 9;
		return $sqyards;
	} public static function SqYdToSqFt($sqyards) {
		$sqfeet = $sqyards * 9;
		return $sqfeet;
	} public static function SqFtToSqMi($sqfeet) {
		$sqmiles = $sqfeet / 27878400;
		return $sqmiles;
	} public static function SqMiToSqFt($sqmiles) {
		$sqfeet = $sqmiles * 27878400;
		return $sqfeet;
	}
	
	//Sq. yards - sq. miles
	public static function SqYdToSqMi($sqyards) {
		$sqmiles = $sqyards / 3097600;
		return $sqmiles;
	} public static function SqMiToSqYd($sqmiles) {
		$sqyards = $sqmiles * 3097600;
		return $sqyards;
	} public static function SqYdToAc($sqyards) {
		$acres = $sqyards / 4840;
		return $acres;
	} public static function AcToSqYd($acres) {
		$sqyards = $acres / 4840;
		return $sqyards;
	}
	
	//Sq. feet - acres, sq. miles - acres
	public static function SqFtToAc($sqfeet) {
		$acres = $sqfeet / 43560;
		return $acres;
	} public static function AcToSqFt($acres) {
		$sqfeet = $acres * 43560;
		return $sqfeet;
	} public static function SqMiToAc($sqmiles) {
		$acres = $sqmiles * 640;
		return $acres;
	} public static function AcToSqMi($acres) {
		$sqmiles = $acres / 640;
		return $sqmiles;
	}
	
	//Cu. inches - cu. feet, cu. feet - cu. yards, cu. feet - gallons
	//Cu. inches - cu. yards, cu. inches - gallons, cu. inches - fl. ounces
	//Cu. inches - pints, cu. inches - quarts
	public static function CuInToCuFt($cuinches) {
		$cufeet = $cuinches / 1728;
		return $cufeet;
	} public static function CuFtToCuIn($cufeet) {
		$cuinches = $cufeet * 1728;
		return $cuinches;
	} public static function CuFtToCuYd($cufeet) {
		$cuyards = $cufeet / 27;
		return $cuyards;
	} public static function CuYdToCuFt($cuyards) {
		$cufeet = $cuyards * 27;
		return $cufeet;
	} public static function CuFtToGal($cufeet) {
		$gallons = $cufeet * 7.480519;
		return $gallons;
	} public static function GalToCuFt($gallons) {
		$cufeet = $gallons / 7.480519;
		return $cufeet;
	} public static function CuInToCuYd($cuinches) {
		$cuyards = $cuinches / 46656;
		return $cuyards;
	} public static function CuYdToCuIn($cuyards) {
		$cuinches = $cuyards * 46656;
		return $cuinches;
	} public static function CuInToGal($cuinches) {
		$gallons = $cuinches / 231;
		return $gallons;
	} public static function GalToCuIn($gallons) {
		$cuinches = $gallons * 231;
		return $cuinches;
	} public static function CuInToFlOz($cuinches) {
		$flounces = $cuinches / 1.80469;
		return $flounces;
	} public static function FlOzToCuIn($flounces) {
		$cuinches = $flounces * 1.80469;
		return $cuinches;
	} public static function CuInToPt($cuinches) {
		$pints = $cuinches / 28.875;
		return $pints;
	} public static function PtToCuIn($pints) {
		$cuinches = $pints * 28.875;
		return $cuinches;
	} public static function CuInToQt($cuinches) {
		$quarts = $cuinches / 57.75;
		return $quarts;
	} public static function QtToCuIn($quarts) {
		$cuinches = $quarts * 57.75;
		return $cuinches;
	}
	
	//Fl. ounces - pints, pints - quarts, pints - gallons
	//Cu. feet - fl. ounces, cu. feet - pints, cu. feet - quarts
	public static function FlOzToPt($flounces) {
		$pints = $flounces / 16;
		return $pints;
	} public static function PtToFlOz($pints) {
		$flounces = $pints * 16;
		return $flounces;
	} public static function PtToQt($pints) {
		$quarts = $pints / 2;
		return $quarts;
	} public static function QtToPt($quarts) {
		$pints = $quarts * 2;
		return $pints;
	} public static function PtToGal($pints) {
		$gallons = $pints / 8;
		return $gallons;
	} public static function GalToPt($gallons) {
		$pints = $gallons * 8;
		return $pints;
	} public static function CuFtToFlOz($cufeet) {
		$flounces = $cufeet * 957.5065;
		return $flounces;
	} public static function FlOzToCuFt($flounces) {
		$cufeet = $flounces / 957.5065;
		return $cufeet;
	} public static function CuFtToPt($cufeet) {
		$pints = $cufeet * 59.84416;
		return $pints;
	} public static function PtToCuFt($pints) {
		$cufeet = $pints / 59.84416;
		return $cufeet;
	} public static function CuFtToQt($cufeet) {
		$quarts = $cufeet * 29.92208;
		return $quarts;
	} public static function QtToCuFt($quarts) {
		$cufeet = $quarts / 29.92208;
		return $cufeet;
	}
	
	//Fl. ounces - quarts, fl. ounces - gallons, quarts - gallons
	//Cu. yards - gallons, cu. yards - fl. ounces, cu. yards - pints
	//Cu. yards - quarts
	public static function FlOzToQt($flounces) {
		$quarts = $flounces / 32;
		return $quarts;
	} public static function QtToFlOz($quarts) {
		$flounces = $quarts * 32;
		return $flounces;
	} public static function FlOzToGal($flounces) {
		$gallons = $flounces / 128;
		return $gallons;
	} public static function GalToFlOz($gallons) {
		$flounces = $gallons * 128;
		return $flounces;
	} public static function QtToGal($quarts) {
		$gallons = $quarts / 4;
		return $gallons;
	} public static function GalToQt($gallons) {
		$quarts = $gallons * 4;
		return $quarts;
	} public static function CuYdToGal($cuyards) {
		$gallons = $cuyards * 201.974;
		return $gallons;
	} public static function GalToCuYd($gallons) {
		$cuyards = $gallons / 201.974;
		return $cuyards;
	} public static function CuYdToFlOz($cuyards) {
		$flounces = $cuyards * 25852.68;
		return $flounces;
	} public static function FlOzToCuYd($flounces) {
		$cuyards = $flounces / 25852.68;
		return $cuyards;
	} public static function CuYdToPt($cuyards) {
		$pints = $cuyards * 1615.792;
		return $pints;
	} public static function PtToCuYd($pints) {
		$cuyards = $pints / 1615.792;
		return $cuyards;
	} public static function CuYdToQt($cuyards) {
		$quarts = $cuyards * 807.8961;
		return $quarts;
	} public static function QtToCuYd($quarts) {
		$cuyards = $quarts / 807.8961;
		return $cuyards;
	}
	
	//More Lenght:
	public static function FtInToFt($feet, $inches = 0) { return self::InToFt(self::FtInToIn($feet, $inches)); }
	public static function FtInToYd($feet, $inches = 0) { return self::InToYd(self::FtInToIn($feet, $inches)); }
	public static function FtInToMi($feet, $inches = 0) { return self::InToMi(self::FtInToIn($feet, $inches)); }
	public static function YdInToFt($yards, $inches = 0) { return self::InToFt(self::YdInToIn($yards, $inches)); }
	public static function YdInToYd($yards, $inches = 0) { return self::InToYd(self::YdInToIn($yards, $inches)); }
	public static function YdInToMi($yards, $inches = 0) { return self::InToMi(self::YdInToIn($yards, $inches)); }
	public static function YdFtToIn($yards, $feet = 0) { return self::FtToIn(self::YdFtToFt($yards, $feet)); }
	public static function YdFtToYd($yards, $feet = 0) { return self::FtToYd(self::YdFtToFt($yards, $feet)); }
	public static function YdFtToMi($yards, $feet = 0) { return self::FtToMi(self::YdFtToFt($yards, $feet)); }
	public static function MiInToFt($miles, $inches = 0) { return self::InToFt(self::MiInToIn($miles, $inches)); }
	public static function MiInToYd($miles, $inches = 0) { return self::InToYd(self::MiInToIn($miles, $inches)); }
	public static function MiInToMi($miles, $inches = 0) { return self::InToMi(self::MiInToIn($miles, $inches)); }
	public static function MiFtToIn($miles, $feet = 0) { return self::FtToIn(self::MiFtToFt($miles, $feet)); }
	public static function MiFtToYd($miles, $feet = 0) { return self::FtToYd(self::MiFtToFt($miles, $feet)); }
	public static function MiFtToMi($miles, $feet = 0) { return self::FtToMi(self::MiFtToFt($miles, $feet)); }
	public static function MiYdToIn($miles, $yards	= 0) { return self::YdToIn(self::MiYdToYd($miles, $yards)); }
	public static function MiYdToFt($miles, $yards	= 0) { return self::YdToFt(self::MiYdToYd($miles, $yards)); }
	public static function MiYdToMi($miles, $yards	= 0) { return self::YdToMi(self::MiYdToYd($miles, $yards)); }
	
	public static function FtToFtIn($feet) { return self::InToFtIn(self::FtToIn($feet)); }
	public static function YdToFtIn($yards) { return self::InToFtIn(self::YdToIn($yards)); }
	public static function MiToFtIn($miles) { return self::InToFtIn(self::MiToIn($miles)); }
	public static function FtToYdIn($feet) { return self::InToYdIn(self::FtToIn($feet)); }
	public static function YdToYdIn($yards) { return self::InToYdIn(self::YdToIn($yards)); }
	public static function MiToYdIn($miles) { return self::InToYdIn(self::MiToIn($miles)); }
	public static function InToYdFt($inches) { return self::FtToYdFt(self::InToFt($inches)); }
	public static function YdToYdFt($yards) { return self::FtToYdFt(self::YdToFt($yards)); }
	public static function MiToYdFt($miles) { return self::FtToYdFt(self::MiToFt($miles)); }
	public static function FtToMiIn($feet) { return self::InToMiIn(self::FtToIn($feet)); }
	public static function YdToMiIn($yards) { return self::InToMiIn(self::YdToIn($yards)); }
	public static function MiToMiIn($miles) { return self::InToMiIn(self::MiToIn($miles)); }
	public static function InToMiFt($inches) { return self::FtToMiFt(self::InToFt($inches)); }
	public static function YdToMiFt($yards) { return self::FtToMiFt(self::YdToFt($yards)); }
	public static function MiToMiFt($miles) { return self::FtToMiFt(self::MiToFt($miles)); }
	public static function InToMiYd($inches) { return self::YdToMiYd(self::InToYd($inches)); }
	public static function FtToMiYd($feet) { return self::YdToMiYd(self::FtToYd($feet)); }
	public static function MiToMiYd($miles) { return self::YdToMiYd(self::MiToYd($miles)); }
	
	//More Weight:
	public static function LbOzToLb($pounds, $ounces = 0) { return self::OzToLb(self::LbOzToOz($pounds, $ounces)); }
	public static function LbOzToSt($pounds, $ounces = 0) { return self::OzToSt(self::LbOzToOz($pounds, $ounces)); }
	public static function LbOzToT($pounds, $ounces = 0) { return self::OzToT(self::LbOzToOz($pounds, $ounces)); }
	public static function StOzToLb($stones, $ounces = 0) { return self::OzToLb(self::StOzToOz($stones, $ounces)); }
	public static function StOzToSt($stones, $ounces = 0) { return self::OzToSt(self::StOzToOz($stones, $ounces)); }
	public static function StOzToT($stones, $ounces = 0) { return self::OzToT(self::StOzToOz($stones, $ounces)); }
	public static function StLbToOz($stones, $pounds = 0) { return self::LbToOz(self::StLbToLb($stones, $pounds)); }
	public static function StLbToSt($stones, $pounds = 0) { return self::LbToSt(self::StLbToLb($stones, $pounds)); }
	public static function StLbToT($stones, $pounds = 0) { return self::LbToT(self::StLbToLb($stones, $pounds)); }
	public static function TOzToLb($tons, $ounces = 0) { return self::OzToLb(self::TOzToOz($tons, $ounces)); }
	public static function TOzToSt($tons, $ounces = 0) { return self::OzToSt(self::TOzToOz($tons, $ounces)); }
	public static function TOzToT($tons, $ounces = 0) { return self::OzToT(self::TOzToOz($tons, $ounces)); }
	public static function TLbToOz($tons, $pounds = 0) { return self::LbToOz(self::TLbToLb($tons, $pounds)); }
	public static function TLbToSt($tons, $pounds = 0) { return self::LbToSt(self::TLbToLb($tons, $pounds)); }
	public static function TLbToT($tons, $pounds = 0) { return self::LbToT(self::TLbToLb($tons, $pounds)); }
	public static function TStToOz($tons, $stones = 0) { return self::StToOz(self::TStToSt($tons, $stones)); }
	public static function TStToLb($tons, $stones = 0) { return self::StToLb(self::TStToSt($tons, $stones)); }
	public static function TStToT($tons, $stones = 0) { return self::StToT(self::TStToSt($tons, $stones)); }
	
	public static function LbToLbOz($pounds) { return self::OzToLbOz(self::LbToOz($pounds)); }
	public static function StToLbOz($stones) { return self::OzToLbOz(self::StToOz($stones)); }
	public static function TToLbOz($tons) { return self::OzToLbOz(self::TToOz($tons)); }
	public static function LbToStOz($pounds) { return self::OzToStOz(self::LbToOz($pounds)); }
	public static function StToStOz($stones) { return self::OzToStOz(self::StToOz($stones)); }
	public static function TToStOz($tons) { return self::OzToStOz(self::TToOz($tons)); }
	public static function OzToStLb($ounces) { return self::LbToStLb(self::OzToLb($ounces)); }
	public static function StToStLb($stones) { return self::LbToStLb(self::StToLb($stones)); }
	public static function TToStLb($tons) { return self::LbToStLb(self::TToLb($tons)); }
	public static function LbToTOz($pounds) { return self::OzToTOz(self::LbToOz($pounds)); }
	public static function StToTOz($stones) { return self::OzToTOz(self::StToOz($stones)); }
	public static function TToTOz($tons) { return self::OzToTOz(self::TToOz($tons)); }
	public static function OzToTLb($ounces) { return self::LbToTLb(self::OzToLb($ounces)); }
	public static function StToTLb($stones) { return self::LbToTLb(self::StToLb($stones)); }
	public static function TToTLb($tons) { return self::LbToTLb(self::TToLb($tons)); }
	public static function OzToTSt($ounces) { return self::StToTSt(self::OzToSt($ounces)); }
	public static function LbToTSt($pounds) { return self::StToTSt(self::LbToSt($pounds)); }
	public static function TToTSt($tons) { return self::StToTSt(self::TToSt($tons)); }
}
