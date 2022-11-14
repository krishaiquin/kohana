<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2> My list of blog posts</h2>
		
		<?php
			echo HTML::anchor('blog/new', 'Post a new blog!');
			
			foreach($posts as $post){
				echo "<hr/>";
				echo "<h4>".$post->author . "</h4>" ;
				echo "<p>".$post->body ."</p><br/><br/>" ;
			}
		?>
	
	</body>
</html>