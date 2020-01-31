<?php
namespace yaConverter;

class yaConverter {
	public static function Info() {
		echo "yaConverter library by ya_Bob_Jonez.\n";
		echo "Version 1.2.\n";
		echo "GitHub: https://github.com/yaBobJonez/yaConverter \n";
	} public static function Usage() {
		echo "Usage in PHP:\n";
		echo "1 x 1: [From]To[To](Value) : double\n";
		echo "2 x 1: [From1][From2]To[To](Value1, Value2) : double\n";
		echo "1 x 2: [From]To[To1][To2](Value) : array('FULL_NAME_OF_UNIT'=>double, 'FULL_NAME_OF_UNIT'=>double)\n";
		echo "Examples of usage:\n";
		echo "1 x 1: \echo \Length::FtToIn(2); //Return: 24\n";
		echo "2 x 1: \echo \Length::FtInToIn(2, 3); //Return: 27\n";
		echo "1 x 2: \$a = \Length::InToFtIn(27); //Return: array('feet'=>2, 'inches'=>3)\n";
	}
}
