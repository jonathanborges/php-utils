<?php

namespace PHPUtils;

class PHPUtils {

	/**
	 * Convert formatted string money to float.
	 * 
	 * @param  string $moneyString Formatted string to be converted.
	 * @return float
	 */
	public static function convertMoneyToFloat(string $moneyString) {
		return floatval(str_replace(',', '.', str_replace(array('R$', '$', ' '), '', $moneyString)));
	}

	/**
	 * Concat a lot of arrays in sequence.
	 * 
	 * @param  array $arrays A lot of arrays
	 * @return array
	 */
	public static function concatArraysInSequence(array ...$arrays) {
		if (count($arrays) < 2)
			trigger_error('You need at least 2 arrays to complete this mission!', E_USER_ERROR);

		for ($i=0; $i < count($arrays); $i++) {
			$keyName = key($arrays[$i]);
			for ($j=0; $j < count($arrays[$i][$keyName]); $j++) {
				$concat[$j][$keyName] = $arrays[$i][$keyName][$j];
			}
		}

		return $concat;
	}


	/**
	 * [fillArrayWithValue description]
	 * @param  array  $array
	 * @param  int  $start
	 * @param  int  $end
	 * @param  mixed  $value
	 * @param  boolean $ignoreEmpty
	 * @return array
	 */
	public static function fillArrayWithValue($array, $start, $end, $value, $ignoreEmpty = false) {
		if ( !$ignoreEmpty) {
			for ($i=$start; $i < $end; $i++) {
				if (!isset($array[$i]) || is_null($array[$i])) {
					$array[$i] = $value;
				}
			}
			return $array;
		}
		return array_fill($start, $end, $value);
	}
}