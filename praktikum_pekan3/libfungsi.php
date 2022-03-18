<?php
function kelulusan($nilai_total){
 	if ($nilai_total > 55){
 		return 'LULUS';
 	}else{
 		return 'TIDAK LULUS';
 	}
}

function grade($nilai) {
	if ($nilai >= 85){
		return 'A';
	}elseif($nilai >= 70){
	   return 'B';
	}elseif($nilai >= 56){
		return 'C';
	}elseif($nilai >= 36){
		return 'D';
	}elseif ($nilai >= 10){
		return 'E';
	}else{
		return '(tidak ada nilai)';
	}
}

function predikat($grade){
	switch ($grade)
	{
		case 'A':
			return "(Sangat Memuaskan)";
			break;

		case 'B':
			return "(Memuaskan)";
			break;

		case 'C':
			return "(Cukup)";
			break;

		case 'D':
			return "(Kurang)";
			break;

		case 'E':
			return "(Sangat Kurang)";
			break;
	}   
}
?>