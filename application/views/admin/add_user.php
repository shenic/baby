<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<title>User Privilege</title>
</head>
	<body>
		<?php echo form_open('baby/addUser'); ?>
		
		<table>First Name</table>
		<?php echo form_input('f_name');?><br/>
		
		<table>Second Name</table>
		<?php echo form_input('s_name');?>

		<table>Lasr Name</table>
		<?php echo form_input('l_name');?>
	

		<?php echo form_close(); ?>
	</body>
</html>