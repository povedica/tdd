<?php declare ( strict_types=1 );

use PHPUnit\Framework\TestCase;
require_once '../LuhnValidator.php';

class Test_Luhn extends TestCase {
	public function testShouldValidateAllZeros(): void {
		$validator = new LuhnValidator();
		$this->assertTrue( $validator->isValid( '00000000000' ) );
	}
}
