<!-- Take Home Question 1

 
Write a function or program that find the number of occurrence of a sub-string within another string ignoring case.  Also do this without regular expressions.  Use PHP or Python.
 
Example:
 Input1 = "tewrwaBcfasaBCabcgadfasdAbcsfaSFD"
 Input2 = "abc"
 Output = 4 -->

 <?php

$input1 = strtolower("tewrwaBcfasaBCabcgadfasdAbcsfaSFD");
$input2 = "abc";
$output = 4;
$counter = 0;

for ($i = 0; $i < strlen($input1); $i++) {

	if($input2[0] === $input1[$i]){
		$isSubString = true;
		for ($j = 0; $j < strlen($input2); $j++) {
			if($input1[$i+$j] !== $input2[$j]){
				$isSubString = false;
			}

		}
		if ($isSubString) {
			$counter += 1;
		}

	}
}

echo $counter;

?>