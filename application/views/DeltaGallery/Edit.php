<h1>Edit photo</h1>
<form id="upload-form" action="<?php echo URL::site('/Manage/update/')  ?>" method="post" enctype="multipart/form-data">
	<p>Photo:</p>
	<img src= "<?php echo $path .$image;?>"/></br>
	<?php echo Form::hidden('filename', $image); ?>
	<p><?php echo Form::label('category','Category:'); ?> &nbsp; 
			<select name ="category">
				<option value="landmark">Landmark</option>
				<option value="landscape">Landscape</option>
			</select>				
	</p>
	<p><?php echo Form::label('title','Title:'); ?> &nbsp; <?php echo Form::input('title');?></p>
	<p><?php echo Form::label('photographer','Photographer:'); ?> &nbsp; <?php echo Form::input('photographer');?></p>
	<p><input type="submit" name="submit" id="submit" value="Update" /></p>
</form>
