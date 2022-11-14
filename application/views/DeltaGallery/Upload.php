<h1>Upload a photo</h1>
<form id="upload-form" action="<?php echo URL::site('/manage/upload') ?>" method="post" enctype="multipart/form-data">
	<p>Choose file:</p>
	<p><input type="file" name="picture" id="picture" /></p>
	<p><?php echo Form::label('category','Category:'); ?> &nbsp; 
			<select name ="category">
				<option value="landmark">Landmark</option>
				<option value="landscape">Landscape</option>
			</select>				
	</p>
	<p><?php echo Form::label('title','Title:'); ?> &nbsp; <?php echo Form::input('title',Arr::get($input,'title'));?></p>
	<p><?php echo Form::label('photographer','Photographer:'); ?> &nbsp; <?php echo Form::input('photographer',Arr::get($input,'photographer'));?></p>
	<?php echo  $error_message; ?>
	<p><input type="submit" name="submit" id="submit" value="Upload" /></p>
</form>
