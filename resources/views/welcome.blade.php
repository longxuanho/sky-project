<html>
	<head>
		<title>Welcome</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<a href="{{ url('auth/login' )}}" style=" color: #428BCA; text-decoration: none; ">
				<div class="content">
					<div class="title">Skynet</div>
					<div class="quote">{{ Inspiring::quote() }}</div>
				</div>
			</a>
		</div>
	</body>
</html>
