<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
		<title>User Login</title>
	</head>
	
	<body>
	<table>
	
<?php echo form_open_multipart('baby/do_upload');?>
<tr>
	<td>
	<lable>Name</lable>
	</td>
	<td>
	<input type="text" name="name"/>
	</td>
</tr>
<tr>
	<td>
	<lable>Relationship</lable>
	</td>
	<td>
	<input type="text" name="relationship"/>
	</td>
</tr>
<tr>
	<td>	
	<lable>Image</lable>
	</td>
	<td>
	<input type="file" name="image_upoad" size="20" />
	</td>
	<td>
	<td>
	<input type="submit" value="Addd Member" name="add_member"  />
	</td>
</form>
</table>

<?php
//print_r($result['$image_name']);
?>
	</body>
</html>