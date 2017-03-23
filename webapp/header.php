<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Personal Address Book</title>
	<link rel="stylesheet" href="res/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php require_once 'php/sqlConnection.php'; ?>
</head>
<body>
	<div class="container">
		<div class="jumbotron text-center">
			<div class="row">
					<h1>Address Book</h1>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<a href="/index.php?table=org"><h2>Organisations</h2></a>
				</div>
				<div class="col-sm-6">
					<a href="/index.php?table=people"><h2>People</h2></a>
				</div>
			</div>
		</div>
	</div>