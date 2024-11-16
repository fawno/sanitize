<?php
	declare(strict_types=1);

	namespace Fawno;

	const CHARS =  [
		'á' => 'a', 'à' => 'a', 'â' => 'a', 'ä' => 'a',
		'Á' => 'A', 'À' => 'A', 'Â' => 'A', 'Ä' => 'A',
		'é' => 'e', 'è' => 'e', 'ê' => 'e', 'ë' => 'e',
		'É' => 'E', 'È' => 'E', 'Ê' => 'E', 'Ë' => 'E',
		'í' => 'i', 'ì' => 'i', 'î' => 'i', 'ï' => 'i',
		'Í' => 'I', 'Ì' => 'I', 'Î' => 'I', 'Ï' => 'I',
		'ó' => 'o', 'ò' => 'o', 'ô' => 'o', 'ö' => 'o',
		'Ó' => 'O', 'Ò' => 'O', 'Ô' => 'O', 'Ö' => 'O',
		'ú' => 'u', 'ù' => 'u', 'û' => 'u', 'ü' => 'u',
		'Ú' => 'U', 'Ù' => 'U', 'Û' => 'U', 'Ü' => 'U',
		'ñ' => 'n', 'Ñ' => 'N', 'ç' => 'c', 'Ç' => 'C',
		'ý' => 'y', 'ÿ' => 'y', 'Ý' => 'Y',
		'$' => 's', '¿' => '-', '&' => 'y',
		'<' => '', '>' => '', '?' => '',
	];

	/**
	 * Sanitize string replacing accent letters with no accent letters
	 * @param string $string
	 * @return string
	 */
	function sanitize (string $string) : string {
		$string = str_replace(array_keys(CHARS), CHARS, $string);

		return $string;
	}
