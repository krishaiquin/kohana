<div>
	<p style="text-align:right"><a href= "<?php echo URL::base() ?>manage/index">Manage your photos</a> | 
		<a href= "<?php echo URL::base() ?>manage/admin">Manage all photos</a></p>
	<form id="upload-form" action="<?php echo URL::site('/gallery/filter') ?>" method="post" enctype="multipart/form-data">
		<p><?php echo Form::label('category','Category:'); ?> &nbsp; 
			<select name ="ddCat">
				<option value="all">All</option>
				<option value="landmark">Landmark</option>
				<option value="landscape">Landscape</option>
			</select>				
		</p>
		<p><?php echo Form::label('users','Users:'); ?> &nbsp; 
			<select name ="ddUser">
				<option value="all">All</option>
				<option value="mickey">mickey</option>
				<option value="donald">donald</option>
			</select>
		</p>
		<p><input type="submit" name="submit" id="submit" value="Filter" /></p>
</div>
<span style="text-align:center"><?php echo $pager_links ?></span>
<table cols='3' class='gallery'>
<?php 
	echo HTML::script("/imagegallery/js/jquery-1.11.0.min.js");
	echo HTML::script("/imagegallery/js/lightbox.min.js");
	
	$pathThumb = URL::base() ."imagegallery/data/thumb/";
	$pathPic = URL::base() ."imagegallery/data/";
	$count=0;
	foreach($pictures as $photos){				
		if($count==0){
			echo "<tr>";
		}
		echo "<td class ='oneimage'>";
		echo "<a href='" .$pathPic .HTML::entities($photos['filename']) ."' data-lightbox='gallery' data-title='" .HTML::entities($photos['title']) 
		." ... Posted " .$photos['uploaded'] ." by " .HTML::entities($photos['uploader']) .", in " .$photos['category'] ."'/>";
		echo "<img src='" .$pathThumb .$photos['filename'] ."'/>";
		echo "</td>";
		$count++;
		
		if($count==3){
			echo "</tr>";
			$count=0;
		}
	}
?>
</table>
<span style="text-align:center"><?php echo $pager_links ?></span>
<h1> The image gallery, complete :) </h1>
