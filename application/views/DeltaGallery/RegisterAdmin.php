<h4> Register as admin </h4>
<?php if($errors): ?>
	<ul>
		<?php foreach($errors as $errors): ?>
			<li><?php echo $errors; ?></li>
		<?php endforeach ?>
	</ul>
<?php endif; ?>
<?php
	print_r($errors);
	echo Form::open();
	echo Form::label('user', 'Username:') ;
	echo Form::input('user',Arr::get($input ,'user')) ."<br/>";
	echo Form::label('pass','Password:');
	echo Form::password('pass') ."<br/>";
	echo Form::label('email','Email Address:');
	echo Form::input('email',Arr::get($input,'email')) ."<br/>";
	echo Form::submit('submit','Register');
	echo Form::close();
?>
			