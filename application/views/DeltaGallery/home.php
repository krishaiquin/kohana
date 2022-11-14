<div><?php echo $head; ?>
	<h1>Welcome back, <?php echo $user; ?>!</h1>
	<h3><?php echo $message; ?></h3>
</div>
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
			echo "<a href='" .$pathPic .$photos['filename'] ."' data-lightbox='gallery' data-title='" .HTML::entities($photos['title']) 
			." ... Posted " .$photos['uploaded'] ." by " .$photos['uploader'] .", in " .$photos['category'] ."'/>";
			echo "<img src='" .$pathThumb .$photos['filename'] ."'/>";
			echo "</td>";
			$count++;
			
			if($count==3){
				echo "</tr>";
				break;
			}
		}			
	?>
	</table>
<h1> This is just a  simple image gallery</h1>
<p>The images above are the three most recently posted and in alphabetic order.</p>