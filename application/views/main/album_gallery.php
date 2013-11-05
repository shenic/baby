<div>


<h1 style="font-size:25px;">Album Gallery</h1>



	

<div class="album_frame">

<div class="album_right">

		<form method="post" action="" id="x1">

		<?php echo "<br/>"; ?>

		<?php echo form_label('Insert album name','album_name'); ?>
		<?php echo form_input('album_name', set_value('album_name')) ?>

		<?php echo "<br/>"; ?>
		<?php echo "<br/>"; ?>

		<?php echo form_button('insert_album', 'Create','id=add_album') ?>

		<?php echo "<br/>"; ?>
		<?php echo "<br/>"; ?>

		<?php echo form_close() ?>

</div>

<?php for ($i=0; $i < count($albums) ; $i++) { ?>



<div class="album_right">
			<h2>Album: <?php echo $albums[$i]->album_name; ?></h2>

			<a href="<?php base_url(); ?>image_gallery?a_id=<?php echo $albums[$i]->album_id; ?>">

			<img  style="width:200px; height:150px;" src="<?php echo base_url(); ?>assets/images/<?php echo $albums[$i]->album_image; ?>"/>

			</a>



			<p><span class="remove_album">
				<a style="text_decoration: none;" rel="<?php echo $albums[$i]->album_id; ?>" href="#">
				Remove Album
				</a>
			</span>

			</p>	
			
</div>




<?php } ?>





</div>






<div>
