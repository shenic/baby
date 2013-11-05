<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Achievement</title>
</head>

<body>
	<?php

$array_count = count($achievement);


echo'<table border="1" width="800" align="center">';
			echo'<tr>';
			echo'<td>';
			echo'Achievement';
			echo'</td>';
			echo'<td>';
			echo' Description';
			echo'</td>';
			echo'</tr>';

			$x=0;
			do{
				$title=$achievement[$x]->title;
				$description=$achievement[$x]->description;
		
				echo'<tr>';

				echo'<td>';
				echo $title;
				echo'</td>';

				echo'<td>';
				echo$description;
				echo'</td>';

			
				echo'</tr>';


				$x++;	
			}while ($x<$array_count);
			echo'</table>';


	?>
</body>
</html>
