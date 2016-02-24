<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: indianred;
				display: table;
				font-weight: 600;
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
			.sub{
				font-size:20%;
				background: indianred;
				color: #f4f4f4;
				border:2px solid indianred;
				-webkit-border-radius:8px;
				-moz-border-radius:8px;
				border-radius:8px;
				padding:2%;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5.1
				<span>
					<p class="sub">Customized for admin projects</p>
				</span>
				</div>

				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
