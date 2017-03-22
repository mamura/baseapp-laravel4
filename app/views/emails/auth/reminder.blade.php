<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			Para restaurar sua senha acesse esse endereço: {{ URL::to('user/reset', array($token)) }}.<br/>
			Esse link expirará em {{ Config::get('auth.reminder.expire', 60) }} minutos.
		</div>
	</body>
</html>
