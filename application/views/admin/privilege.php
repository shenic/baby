
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<title>User Privilege</title>
</head>
	<body>
		<table border="1" align="center">
			<?php echo form_open('baby/setPrivilege') ;?>
			<tr>
				<td>
					
				</td>
				<td>
					Connect
				</td>
				<td>
					Page
				</td>
				<td>
					Image Album
				</td>
				<td>
					Milestone
				</td>
				<td>
					Avievements
				</td>
			</tr>
			<tr>
				<td>
					Regisert User
				</td>
				
				<td>
					<?php echo form_checkbox('ru_comment', 'ru_comment'); ?>
				</td>
				<td>
					<?php echo form_checkbox('ru_page', 'ru_page'); ?>
				</td>
				<td>
					<?php echo form_checkbox('ru_image_album', 'ru_image_album'); ?>
				</td>
				<td>
					<?php echo form_checkbox('ru_milestone', 'ru_milestone'); ?>
				</td>
				<td>
					<?php echo form_checkbox('ru_avievements', 'ru_avievements'); ?>
				</td>
			</tr>
			<tr>
				<td>
					Genaral user
				</td>
				
				<td>
					<?php echo form_checkbox('gu_comment', 'gu_comment'); ?>
				</td>
				<td>
					<?php echo form_checkbox('gu_page', 'gu_page'); ?>
				</td>
				<td>
					<?php echo form_checkbox('gu_image_album', 'gu_image_album'); ?>
				</td>
				<td>
					<?php echo form_checkbox('gu_milestonement', 'gu_milestone'); ?>
				</td>
				<td>
					<?php echo form_checkbox('gu_avievements', 'gu_avievements'); ?>
				</td>
			</tr>
			<tr>
				
				<td>
				<?php echo form_submit('submit', 'Add!'); ?>
			</td>
			</tr>
			
			<?php echo form_close(); ?>
		</table>

		





	</body>
</html>
