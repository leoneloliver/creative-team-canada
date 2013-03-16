<!--Content--> 
<div class="page1_bg">
	<div class="middle">
		<div class="container_16">
			<div class="wrapper">

				<?php foreach($home as $item): ?>
					<div class="grid_10">
		            	<h2><?php echo $item->title;?>
		                <span><?php echo $item->slogan;?></span></h2>
		                <img src="<?php echo base_url()?>/images/<?php echo $item->photo;?>" alt="" class="img_inner">
		                <p><span class="negrito">Creative Team</span> <?php echo $item->review;?>
						</p>
		           		<a href="about" class="btn">read more</a>
		            </div>
	            <?php endforeach; ?>


	            <?php foreach($sidebar as $side): ?>
					<div class="grid_5 prefix_1">
		            	<h2><?php echo $side->title;?></h2>

		            	<?php echo $side->content;?>
		                
						<a href="contact" class="btn">contact us</a>
		               
		            </div>
	            <?php endforeach; ?>

			</div>
		</div>
	</div>
	<div class="page1_bot">
		<div class="top">
	    	<div class="container_16">

	    		<?php foreach($itemhome as $itemh): ?>
	    		<div class="grid_4">
	    			<h4>Client: <?php echo $itemh->title;?></h4>
	    			<a href="<?php echo base_url()?>product/detail/<?php echo $itemh->id;?>">
	    			<img src="<?php echo base_url()?>/images/<?php echo $itemh->photo;?>" alt="" class="img_inner">
	    			</a>
	    			<p><?php echo substr($itemh->content,0,120);?>...</p>
	    		</div>
	    		<?php endforeach; ?>
	    		
	    		<div class="clear"></div>
	    	</div>
	    </div>
		