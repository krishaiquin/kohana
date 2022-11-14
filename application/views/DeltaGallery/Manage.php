<a href= "<?php echo URL::base() ?>manage/upload">Add a photo</a> | <a href= "<?php echo URL::base() ?>gallery">Cancel</a> 
<table cols='3' class='gallery'>
<?php 
	$count=0;
	foreach($pictures as $photos){				
		if($count==0){
			echo "<tr>";
		}
		echo "<td class ='oneimage'>";
		echo "<a href='" .$pathPic .HTML::entities($photos['filename']) ."' data-lightbox='gallery' data-title='" .HTML::entities($photos['title']) 
		." ... Posted " .$photos['uploaded'] ." by " .HTML::entities($photos['uploader']) .", in " .$photos['category'] ."'/>";
		echo "<img src='" .$pathThumb .$photos['filename'] ."'/>";
		echo "<ul style='list-style-type:none'>";
		echo  "<li><a href='" . URL::base() . "manage/edit/" .$photos['id'] ."'>Edit information</a></li>";
		echo  "<li><a href='" . URL::base() . "manage/delete/" .$photos['id'] ."'>Delete</a></li>";
		echo "</td>";
		$count++;
		
		if($count==3){
			echo "</tr>";
			$count=0;
		}
	}
?>
</table>
<h1> The image gallery, complete :) </h1>
<?php echo $javaScript;
		echo $javaScript2; ?>
