<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<title>User Login</title>
</head>

<body>
	<div class="loginWidget">
		<table>
			<tr>
				<td>
				<?php echo form_open('admin/index'); ?>
				<label>Username</label>
				</td>
				<td>
				<?php echo form_input('username'); ?>
				</td>
				<td class="error">
				<?php echo form_error('username'); ?>
				</td>
			</tr>
			<tr>
				<td>
				<label>Password</label>
				</td>
				<td>
				<?php echo form_password('password') ?>
				</td>
				<td class="error">
				<?php echo form_error('password'); ?>
				</td>
			</tr>
			<tr>	
				<td>	
				<input type="submit" value="Submit" name="submit" />
				</td>
			</tr>	
		<?php echo form_close(); ?>
	</table>
	</div>	
</body>
</html>
