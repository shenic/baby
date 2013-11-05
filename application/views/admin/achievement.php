<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
		<title>Achivements</title>
	</head>
	
	<body>
	<?php echo form_open('admin/achievement') ;?>
	<label>Achievement</label><br/>
	<input type="text" name="achievement" value=""  /><br/><?php echo form_error('achievement'); ?>
	<label>Description</label><br/>
	<textarea name="description" cols="40" rows="5" ></textarea><br/><?php echo form_error('description'); ?>
	

	<?php echo form_submit('submit', 'Add!'); ?>
	<?php echo form_close(); ?>

	<?php 
if ($e_msg != 'null' || $e_msg != '') {
echo $e_msg;
}
?>
</body>
</html>
