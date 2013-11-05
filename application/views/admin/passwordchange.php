
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Password Change</title>
</head>
<body>
	<?php echo form_open('admin/passwordChange') ?>
	<lable>Current Password</lable></br>
	<?php echo form_password('c_password') ?></br><?php echo form_error('c_password'); ?>
	<lable>Password</lable></br>
	<?php echo form_password('password') ?></br><?php echo form_error('password'); ?>
	<lable>Confirm Password</lable></br>
	<?php echo form_password('confirm_password') ?></br><?php echo form_error('confirm_password'); ?>

	<?php echo form_submit('change','Change')?>


	<?php echo form_close() ?>


</body>
</html>