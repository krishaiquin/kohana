<html>
    <head>
        <title></title>
    </head>
    <body>
		<?php
			echo Form::open();
			echo Form::label('username','Username: ');
			echo Form::input('username');
			echo Form::label('email', 'Email Address: ');
			echo Form::input('email');
			echo Form::label('password','Password');
			echo Form::password('password');
			echo Form::label('password_conform','Confirm Password: ');
			echo Form::password('password_confirm');
			echo Form::submit('submit','Create new account');
			echo Form::close();		
			
		?>
    </body>
</html>