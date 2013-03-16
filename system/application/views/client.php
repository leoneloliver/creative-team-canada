<!--Content--> 
<div class="page1_bg">
	<div class="middle">
		<div class="container_16">
			<div class="wrapper">
				<h2>Our Clients
            	<span>Meet our customers</span>
            </h2>
				<div class="clients">
					<?php foreach($client as $cli): ?>
			            <div class="grid_4 alpha">
			            	<img class="img_inner" src="<?php echo base_url()?>/images/<?php echo $cli->photo; ?>" alt="">
			            	<span><?php echo $cli->company; ?></span>
		                    <?php echo $cli->text; ?><br>
			            	<a href="<?php echo $cli->site; ?>">Go to site</a>
			            </div>
			        <?php endforeach; ?>
		    
		            <div class="clear"></div>
	            </div>

			</div>
		</div>
	</div>
	<div class="page1_bot">
		<div class="top">
	    	<div class="container_16">

	    		
	    		<div class="clear"></div>
	    	</div>
	    </div>