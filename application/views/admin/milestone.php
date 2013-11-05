
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php echo form_open('admin/milestone') ;?>
	
	<label>Milestone </label><br/>
	<textarea name="milestone" cols="40" rows="5" ></textarea><br/>
	<?php echo form_error('milestone'); ?>
	<label>Description</label><br/>
	<textarea name="description" cols="40" rows="5" ></textarea><br/>
	<?php echo form_error('description'); ?>
	<label>Child Age</label><br/>
	<input type="text" name="child_age" value=""  /><br/>
	<?php echo form_error('child_age'); ?>


	<?php echo form_submit('submit', 'Add!'); ?>
	<?php echo form_close(); ?>

<?php 
if ($e_msg != 'null' || $e_msg != '') {
echo $e_msg;
}

// die();
 ?>
</body>
</html>
