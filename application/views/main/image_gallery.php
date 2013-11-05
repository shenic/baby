<div>



<h1 style="font-size:25px;">Image Gallery</h1>   


		
        <div>         
         


<div  class="album_frame" style="width:300px;margin-bottom:30px;">


        <?php echo form_open_multipart('main/insert_images'); ?>

        <?php echo form_label('Insert Photos','Upload'); ?>
        <?php echo "<br/>"; ?>
        <?php echo form_upload('userfile') ?>

        <?php echo "<br/><br/>"; ?>
       
        <?php echo form_label('Say something about this image...'); ?>    
        <?php echo form_input('img_dis'); ?>

        <?php echo form_hidden('up_al_hidden', $albums[0]->album_id); ?>
        <?php echo form_hidden('up_user_hidden', $images[2]->user_id); ?>
        
        <?php echo "<br/><br/>"; ?>
       
        <?php echo form_submit('sub_upload', 'Upload') ?>

        <?php echo "<br/><br/>"; ?>
        
        <?php echo form_close(); ?>


</div>           
            
        <?php for ($i=0; $i <count($images); $i++) { ?>

<div class="album_frame" style="width:300px;margin-bottom:30px;padding-top:20px; padding-bottom:20px;">

            <a href="<?php echo base_url(); ?>assets/images/<?php echo $images[$i]->location; ?>" title="">

            <img src="<?php echo base_url(); ?>assets/images/<?php echo $images[$i]->location; ?>" width="200px" height="150px" alt="" />
            </a>     


                    <p>Discription: 

                            <?php if($images[$i]->image_dicription) {?>


                            <?php echo $images[$i]->image_dicription; ?>

                            <?php } ?>
                    </p>    



                        <form method="post" action="" id="my_form<?php echo $i; ?>">

                        <label>Add Comment:</label><br>
                        <?php echo form_input('insert_comment',set_value('comment')); ?>
                        <br>
                        <?php echo form_error('insert_comment'); ?><br>

                        <?php echo form_hidden('hidden_img_id', $images[$i]->img_id); ?>
                        <?php echo form_hidden('hidden_user_id', $images[$i]->user_id); ?>

                        <?php echo form_button('comment_submit', 'Comment','class=abc') ?>

                    <?php echo form_close() ?>



            
            
            	<?php for ($j=0; $j<count($images[$i]->comment); $j++) { ?>

            		<?php if ($images[$i]->comment[$j]); {?>

            		<P>
                        <?php echo $images[$i]->comment[$j]->comment; ?>&#xa0;&#xa0;<span class="comm_id">

                        <a href="#" rel="<?php echo $images[$i]->comment[$j]->comment_id; ?>">(remove)</a>

                        </span>

                    </P>

            		<?php } ?>
            		
            	            		
            	<?php } ?>

            

                      
		
</div>
        

        <?php } ?>







     


    </div>



     </div>
    