<?php
namespace yaConverter;

class Weight {
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
	
	//Double-stacked
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
