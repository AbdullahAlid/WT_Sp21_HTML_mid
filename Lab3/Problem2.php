<?php 
	$marks=75;
	if($marks>=90)
	{
		echo $marks . " A+";
	}
	else if($marks>80 && $marks<90)
	{
		echo $marks ." A";
	}
	else if($marks>70 && $marks<80)
	{
		echo $marks ." B";
	}
	else if($marks>60 && $marks<70)
	{
		echo $marks ." C";
	}
	else
	{
		echo $marks ." F";
	}
?>