<?php
	$length= 5;
	$width= 5;
	$area= $length*$width;
	$perimeter= 2*($length+$width);
	if($length != $width)
	{
		echo "Area= ",$area ,"<br>";
		echo "Perimeter= ",$perimeter;
	}
	else
	{
		echo "the shape is a square";
	}
?>