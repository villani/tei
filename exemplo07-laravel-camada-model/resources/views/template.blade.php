<!DOCTYPE html>
<html lang="{{ $app->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>@yield('titulo')</title>
	<!--COPIAR ELEMENTO link DO BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@yield('conteudo')
			</div>
		</div>
	</div>
</body>
</html>