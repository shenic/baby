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

<pre>
<?php
$array_count = count($c_name);



?>
</pre>
<table border="0" width="800px" align="center">
		<tr>
			<td>
				<?php
				echo $c_name['6']->fm_name;
				?><br/>
				<?php
				echo $c_name['6']->relationship;
				?><br/>
				<?php
				
				?>
				<img src="<?php echo base_url();?>assets/uploads/thumbs/<?php echo $c_name['0']->image_name; ?>" width="100px" height="100px"/>
			</td>

			<td>
				<?php
				echo $c_name['7']->fm_name;
				?><br/>
				<?php
				echo $c_name['7']->relationship;
				?><br/>
				<?php
				
				?>
				<img src="<?php echo base_url();?>assets/uploads/thumbs/<?php echo $c_name['0']->image_name; ?>" width="100px" height="100px"/>	
			</td>

			<td>	
			</td>

			<td>	
			</td>

			<td>	
			</td>

			<td>	
			</td>
			
			<td>
				<?php
				echo $c_name['5']->fm_name;
				?><br/>
				<?php
				echo $c_name['5']->relationship;
				?><br/>
				<img src="<?php echo base_url();?>assets/uploads/thumbs/<?php echo $c_name['5']->image_name; ?>" width="100px" height="100px"/>	
			</td>
			
			<td>
				<?php
				echo $c_name['4']->fm_name;
				?><br/>
				<?php
				echo $c_name['4']->relationship;
				?><br/>
				<img src="<?php echo base_url();?>assets/uploads/thumbs/<?php echo $c_name['4']->image_name; ?>" width="100px" height="100px"/>
			</td>
		</tr>
		<tr>
			<td>	
			</td>

			<td>
				<?php
				echo $c_name['2']->fm_name;
				?><br/>
				<?php
				echo $c_name['2']->relationship;
				?><br/>
				<img src="<?php echo base_url();?>assets/uploads/thumbs/<?php echo $c_name['2']->image_name; ?>" width="100px" height="100px"/>
			</td>

			<td>	
			</td>

			<td>	
			</td>

			<td>	
			</td>

			<td>	
			</td>
			
			<td>
				<?php
				echo $c_name['1']->fm_name;
				?><br/>
				<?php
				echo $c_name['1']->relationship;
				?><br/>
				<img src="<?php echo base_url();?>assets/uploads/thumbs/<?php echo $c_name['1']->image_name; ?>" width="100px" height="100px"/>
			</td>
			
			<td>	
			</td>
		</tr>
		<tr>
			<td>	
			</td>

			<td>	
			</td>

			<td>	
			</td>
			<td align="center">
			
				
				<?php
				echo $c_name['0']->fm_name;
				?><br/>
				<?php
				echo $c_name['0']->relationship;
				?><br/>
				<img src="<?php echo base_url();?>assets/uploads/thumbs/<?php echo $c_name['0']->image_name; ?>" width="100px" height="100px"/>
	
				
			</td>
		</tr>	
	</table>
</body>