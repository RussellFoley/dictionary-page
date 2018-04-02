<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Welsh-Irish Dictionary</title>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

<form action="mail.php" method="post">
	<div class="form-group">
		<label for="first-name">First Name</label>
		<input type="text" class="form-control" id="first-name" name="firstname">
	</div>
	<div class="form-group">
		<label for="last-name">Last Name</label>
		<input type="text" class="form-control" id="last-name" name="lastname">
	</div>
	<div class="form-group">
		<label for="formGroupExampleInput2">E-mail</label>
		<input type="text" class="form-control" id="email" name="email">
	</div>
	<div class="form-group">
		<label for="formGroupExampleInput">Message</label>
		<textarea rows="4" class="form-control" id="message" name="message"></textarea>
	</div>
	<div class="form-group row">
		<label class="col-auto col-form-label" for="human">2 + 3 = </label>
		<div class="col-xs-3">
			<input type="text" class="form-control" id="human" name="human">
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>