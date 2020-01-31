<?php
namespace yaConverter;

class Area {
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
}
