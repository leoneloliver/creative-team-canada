<!--Content--> 
<div class="page1_bg">
	<div class="middle">
		<div class="container_16">
			<div class="wrapper">
				<h2>Services
					<span>AT YOUR SERVICE</span>
				</h2>
				<?php foreach($service as $item): ?>
					<div class="grid_7 fixtam">
		            	<h4><?php echo $item->title;?></h4>
		                <p><?php echo $item->text;?></p>
		                <p><a href="<?php echo base_url()?>service/detail/<?php echo $item->id;?>">more >></a></p>
		           		<!-- <a href="about" class="btn">learn more</a> -->
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
		