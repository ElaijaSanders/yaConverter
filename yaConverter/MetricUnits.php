<?
namespace yaConverter;

class MetricUnits {
	//Technical
	public static function Info () {
		echo "MetricUnits extension by ya_Bob_Jonez.\n";
		echo "Version 0.1\n";
	} public static function Usage () {
		echo "Usage of Extension:\n";
		echo "1 x 1: [From]To[To](Value)\n";
		echo "2 x 1: [From1][From2]To[To](Value1, Value2)\n";
		echo "1 x 2: [From]To[To1][To2](Value): Outputs as array, indexes are FULL NAMES of units\n";
		echo "Examples of usage:\n";
		echo "1 x 1: \echo \CmToMm(3); //Outputs: 30\n";
		echo "2 x 1: \echo \MCmToCm(2, 3); //Outputs: 203\n";
		echo "1 x 2: \$a = \MToKmM(2700); \echo \$a[\"kilometers\"]; //Outputs: 2\n";
	}
	
	//Millimeters - centimeters, millimeters - decimeters, millimeters - meters, millimeters - kilometers
	public static function MmToCmMm ($millimeters) {
		$centimeters = floor($millimeters / 10);
		$millimeters = $millimeters % 10;
		return array("centimeters" => $centimeters, "millimeters" => $millimeters);
	} public static function MmToCm ($millimeters) {
		$centimeters = $millimeters / 10;
		return $centimeters;
	} public static function CmMmToMm ($centimeters, $millimeters) {
		$millimeters = ($centimeters * 10) + $millimeters;
		return $millimeters;
	} public static function CmToMm ($centimeters) {
		$millimeters = $centimeters * 10;
		return $millimeters;
	} public static function MmToDmMm ($millimeters) {
		$decimeters = floor($millimeters / 100);
		$millimeters = $millimeters % 100;
		return array("decimeters" => $decimeters, "millimeters" => $millimeters);
	} public static function MmToDm ($millimeters) {
		$decimeters = $millimeters / 100;
		return $decimeters;
	} public static function DmMmToMm ($decimeters, $millimeters) {
		$millimeters = ($decimeters * 100) + $millimeters;
		return $millimeters;
	} public static function DmToMm ($decimeters) {
		$millimeters = $decimeters * 100;
		return $millimeters;
	} public static function MmToMMm ($millimeters) {
		$meters = floor($millimeters / 1000);
		$millimeters = $millimeters % 1000;
		return array("meters" => $meters, "millimeters" => $millimeters);
	} public static function MmToM ($millimeters) {
		$meters = $millimeters / 1000;
		return $meters;
	} public static function MMmToMm ($meters, $millimeters) {
		$millimeters = ($meters * 1000) + $millimeters;
		return $millimeters;
	} public static function MToMm ($meters) {
		$millimeters = $meters * 1000;
		return $millimeters;
	} public static function MmToKmMm ($millimeters) {
		$kilometers = floor($millimeters / 1000000);
		$millimeters = $millimeters % 1000000;
		return array("kilometers" => $kilometers, "millimeters" => $millimeters);
	} public static function MmToKm ($millimeters) {
		$kilometers = $millimeters / 1000000;
		return $kilometers;
	} public static function KmMmToMm ($kilometers, $millimeters) {
		$millimeters = ($kilometers * 1000000) + $millimeters;
		return $millimeters;
	} public static function KmToMm ($kilometers) {
		$millimeters = $kilometers * 1000000;
		return $millimeters;
	}
	
	//Centimeters - decimeters, centimeters - meters, centimeters - kilometers
	public static function CmToDmCm ($centimeters) {
		$decimeters = floor($centimeters / 10);
		$centimeters = $centimeters % 10;
		return array("decimeters" => $decimeters, "centimeters" => $centimeters);
	} public static function CmToDm ($centimeters) {
		$decimeters = $centimeters / 10;
		return $decimeters;
	} public static function DmCmToCm ($decimeters, $centimeters) {
		$centimeters = ($decimeters * 10) + $centimeters;
		return $centimeters;
	} public static function DmToCm ($decimeters) {
		$centimeters = $decimeters * 10;
		return $centimeters;
	} public static function CmToMCm ($centimeters) {
		$meters = floor($centimeters / 100);
		$centimeters = $centimeters % 100;
		return array("meters" => $meters, "centimeters" => $centimeters);
	} public static function CmToM ($centimeters) {
		$meters = $centimeters / 100;
		return $meters;
	} public static function MCmToCm ($meters, $centimeters) {
		$centimeters = ($meters * 100) + $centimeters;
		return $centimeters;
	} public static function MToCm ($meters) {
		$centimeters = $meters * 100;
		return $centimeters;
	} public static function CmToKmCm ($centimeters) {
		$kilometers = floor($centimeters / 100000);
		$centimeters = $centimeters % 100000;
		return array("kilometers" => $kilometers, "centimeters" => $centimeters);
	} public static function CmToKm ($centimeters) {
		$kilometers = $centimeters / 100000;
		return $kilometers;
	} public static function KmCmToCm ($kilometers, $centimeters) {
		$centimeters = ($kilometers * 100000) + $centimeters;
		return $centimeters;
	} public static function KmToCm ($kilometers) {
		$centimeters = $kilometers * 100000;
		return $centimeters;
	}
	
	//TODO: dm, m, km, NOW: DM - KM TODO^
	
	//Decimeters - meters, decimeters - kilometers, meters - kilometers
	public static function DmToMDm ($decimeters) {
		$meters = floor($decimeters / 10);
		$decimeters = $decimeters % 10;
		return array("meters" => $meters, "decimeters" => $decimeters);
	} public static function DmToM ($decimeters) {
		$meters = $decimeters / 10;
		return $meters;
	} public static function MDmToDm ($meters, $decimeters) {
		$decimeters = ($meters * 10) + $decimeters;
		return $decimeters;
	} public static function MToDm ($meters) {
		$decimeters = $meters * 10;
		return $decimeters;
	}
}