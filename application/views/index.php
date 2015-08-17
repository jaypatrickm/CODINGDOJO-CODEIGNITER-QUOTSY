<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>API - Quotsy</title>
	<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.get('quotes/index_html', function(res){
				console.log('helyyyyl');
				$('div#quotes').html(res);
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Quotsy</h1>
				<form action="/quotes/create" method="post">
					<div class="form-group">
						<label for="author">Author</label>
						<input type="text" name="author" class="form-control" id="author" placeholder="Enter Author">
					</div>
					<div class="form-group">
						<label for="quote">Quote</label>
						<input type="text" name="quote" class="form-control" id="quote" placeholder="Enter Quote">
					</div>
					<button type="submit" id="add_quote" class="btn btn-success" value="Add Quote">Add Quote</button>
				</form>
				<div id="quotes">
				</div>
			</div>
		</div>
	</div>
</body>
</html>