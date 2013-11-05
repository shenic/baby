<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<title>User Login</title>
</head>



<?php echo 'Home Page';?><br/>
<a href="<?php echo base_url();?>baby/milestone">Baby Milestone</a>|<a href="<?php echo base_url();?>baby/relational">Family Tree</a>|<a href="<?php echo base_url();?>baby/achievement">Achievement</a>|<a href="<?php echo base_url();?>baby/setPrivilege">Preivilage</a>

<?php echo form_open('baby/logout');?>
<?php echo form_submit('logout', 'Logout'); ?>
<? echo form_close(); ?>


</body>
</html>
