<div class="page1_bg">
	<div class="middle">
		<div class="container_16">
			<div class="wrapper">

				<?php foreach($produtct as $detail): ?>
					<div class="grid_16">
		            	<h2><?php echo str_replace("<br>", " ", $detail->title);?></h2>
		                <img src="<?php echo base_url()?>/images/<?php echo $detail->photo;?>" alt="" class="img_inner left">
		                <p><?php echo $detail->content;?></p>
		            </div>
	            <?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="page1_bot">
	<div class="top">
	</div>