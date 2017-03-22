<!DOCTYPE html>
<html lang="pt_BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-store">
	<meta http-equiv="Expires" content="-1">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BaseApp - A perfect Base Application</title>

    <link href="/assets/stylesheets/butistrapi.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/animate.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/styles.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/assets/javascripts/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/javascripts/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/assets/javascripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/javascripts/icheck.min.js"></script>
    <script type="text/javascript" src="/assets/javascripts/theme.js"></script>
    <script type="text/javascript" src="/assets/javascripts/toastr.js"></script>
</head>

<body class="blank">
	<div class="color-line"></div>

	<div class="login-container">
		<div class="row">
			<div class="col-md-12">

				<div class="text-center m-b-md">
					{{ HTML::image('assets/images/logo-pmf.png') }}
					
				</div>

				<div class="hpanel">
					<div class="panel-body">
						@yield("content")
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 text-center">
				<strong>PMF</strong>
				- Prefeitura Municipal de Fortaleza
				<br>
				2017 COGECT
			</div>
		</div>

		<div class="row"></div>
	</div>

	@include('partials.notifications')
</body>
</html>