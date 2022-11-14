<html>
	<head>
	</head>
	<body>
		<div class="container_12">
			<div class="grid_4">
				<ul class="gallery galleria">
				<?php
					//echo var_dump($pictures->as_array());
					/*foreach($pictures->as_array() as $images){
						echo "<li class>";
						echo "<img src='" .url::site('imagegallery/render/' .$images->Filename)  ."'/>";
						echo "</li>";
					}*/
					
					for($i=1;$i<=$pictures->count();$i++){
						echo "<li class>";
						echo "<img src='" .url::site('imagegallery/render/' .$i)  ."'/>";
						echo "</li>";
						}
				?>
				</ul>
			</div>
		</div>
		<div class="grid_8">
			<div id ="main_image" class ="galleria_container">
				<div class="galleria_wrapper">
					<img src="../simplegallery/images/1.jpg" class="replaced" >
				</div>
				<span class = "caption">An HDR Field</span>
			</div>
		</div>
		<div class="clear">$nbsp;</div>
		<div class="container_16">
			<div class="grid_2">
				<p>&nbsp;</p>
			</div>
			<div class="grid_12" id="galleryInformation">
				<h2>Delta HDR Gallery</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at dapibus justo, 
				ut faucibus nunc. Duis ornare justo magna, eu ornare est pharetra quis. Interdum et 
				malesuada fames ac ante ipsum primis in faucibus. Sed pharetra tempus magna sit amet malesuada. 
				Donec fringilla ut neque vel auctor. Sed at pretium metus. Cras id consequat orci.</p>
			</div>
			<div class="grid_2">
				<p>&nbsp;</p>
			</div>
		</div>
	</body>
</html>
