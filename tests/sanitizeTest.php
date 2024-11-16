<?php
  declare(strict_types=1);

	namespace Fawno\Sanitize\Tests;

	use PHPUnit\Framework\TestCase;

	use function Fawno\sanitize;

	class sanitizeTest extends TestCase {
		public function testSanitize () {
			$raw = 'Álava';
			$actual = sanitize($raw);
			$expected = 'Alava';

			$this->assertEquals($expected, $actual);
		}
	}
