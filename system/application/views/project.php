<!--Content--> 
<div class="page1_bg molde">
	<div class="page1_bot">
		<div class="top">
	    	<div class="container_16">
	    		<h2>Projects Creative team
	    			<span>Web Design | Production</span>
	    		</h2>
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
		