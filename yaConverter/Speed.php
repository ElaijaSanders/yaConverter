<?php
namespace yaConverter;

class Speed {
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
}
