<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2> Write a new post!</h2>
		<?php
			if($errors){
				echo "<ul>";
				foreach($errors as $error){
					echo "<li>" . $error ."</li>";
				}
				echo "</ul>";
			}
			echo Form::open();
			
			echo Form::label('author', 'Author');
			echo Form::input('author', Arr::get($values,'author'))."<br/>";
			
			echo Form::label('body','Post Body')."<br/>";
			echo Form::textarea('body', Arr::get($values,'body'))."<br/>";
			
			echo Form::submit('submit','Submit Post');
			
			echo Form::close();
		?>
	
	</body>
</html>