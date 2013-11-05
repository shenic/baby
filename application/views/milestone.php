<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php

$array_count = count($milestone_data);


echo'<table border="1" width="800" align="center">';
			echo'<tr>';
			echo'<td>';
			echo'Child Age';
			echo'</td>';
			echo'<td>';
			echo' Mastered Skills';
			echo'</td>';
			echo'<td>';
			echo'Emerging Skills';
			echo'</td>';
			echo'<td>';
			echo'Advanced Skills';
			echo'</td>';
			echo'</tr>';

			$x=0;
			do{
				$child_age=$milestone_data[$x]->child_age;
				$milestone=$milestone_data[$x]->milestone;
				$description=$milestone_data[$x]->description;
		
				echo'<tr>';

				echo'<td>';
				echo $child_age;
				echo'</td>';

				echo'<td>';
				echo$milestone;
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
