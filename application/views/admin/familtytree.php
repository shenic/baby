<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/common.js"></script>
	<title>User Login</title>
	<script type="text/javascript">
	var path = "<?php echo base_url(); ?>";
	</script>
</head>
<body>


<?php
$array_count = count($c_name);


echo'<table>';
			echo'<tr>';
			echo'<td>';
			echo' Name Of Cousin';
			echo'</td>';
			echo'<td>';
			echo' Name Of Cusn';
			echo'</td>';
			echo'<td>';
			echo'Image';
			echo'</td>';
			echo'</tr>';

			$x=0;
			do{
				$name=$c_name[$x]->fm_name;
				$relation=$c_name[$x]->relationship;
				$i_name=$c_name[$x]->image_name;
				$f_member_id=$c_name[$x]->f_member_id;

				echo'<tr>';

				echo'<td>';
				echo $f_member_id;
				echo'</td>';

				echo'<td>';
				echo$name;
				echo'</td>';

				echo'<td>';
				echo$relation;
				echo'</td>';

				echo'<td>';
				?><img src="<?php echo base_url();?>assets/uploads/thumbs/<?php echo $i_name ?>" width="100px" height="100px"/> <?php 
				echo'</td>';

				echo'<td>';
				?><input type="button" value="Remove" class="imageid" rel="<?php echo $f_member_id ?>"><?php 
				echo'</td>';

				echo'</tr>';


				$x++;	
			}while ($x<$array_count);
			echo'</table>';

?>
</body>