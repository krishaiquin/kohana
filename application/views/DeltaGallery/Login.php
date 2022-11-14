<h4> Log In</h4>
<?php 
	echo Form::open();
	echo Form::label('user', 'Username:') ;
	echo Form::input('user',Arr::get($input, 'user')) ."<br/>";
	echo Form::label('pass','Password:');
	echo Form::password('pass') ."<br/>";
	echo Form::submit('submit','Submit') ."&nbsp;";
	echo Form::label('remember','Remember me:');
	echo Form::checkbox('remember');
	echo Form::close();
	echo $message;
?>
<p><a href = "<?php URL::base() ?> login/register">Create a new user!</a></p>
