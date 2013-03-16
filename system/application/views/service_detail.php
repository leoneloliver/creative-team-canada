<!--Content--> 
<div class="page1_bg">
	<div class="middle">
		<div class="container_16">
			<div class="wrapper">

				<?php foreach($service as $item): ?>
					<div class="grid_16">
		            	<h2><?php echo $item->title;?>
		                <span>Services</span>
		            	</h2>
		                <!-- <img src="images/<?php echo $item->photo;?>" alt="" class="img_inner"> -->
		                <p><?php echo $item->text;?></p>
		                <hr>
		                <p class="border">
		                	<?php echo $item->extra_info;?>
		                </p>
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