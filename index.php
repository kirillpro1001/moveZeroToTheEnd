<!-- 

На вход подается строка из чисел, разделенных пробелами.

Переместите все нули в конец строки. Порядок остальных чисел должен сохраниться.
-->

<?php

function moveZero ($strNums) {
	$arrNums = explode (" ", $strNums);
	$countZero = 0;
	$newArr;
	foreach ($arrNums as $key => $value) {
		if ($value == 0) {
			$countZero++;
		}
		else {
			$newArr [] = $value;
		}

	}
	if ($countZero > 0) {
	for($i = 0; $i != $countZero; $i++) {
		array_push($newArr, '0');
	}
}

	return implode(" ", $newArr);
}

echo moveZero('54 41 0 543 0 512 54 0 52');

?>