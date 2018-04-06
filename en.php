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
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <span class="nav-item dropdown">
        <button type="button" class="btn dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Language
        </button>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cy.php">Cymraeg</a>
          <a class="dropdown-item" href="ga.php">Gaeilge</a>
          <a class="dropdown-item" href="en.php">English</a>
        </div>
      </span>

      <ul class="navbar-nav ml-auto pull-right">
      <li class="nav-item">
        <a class="nav-link" href="#top">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#author">Author</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#buy">Purchase</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    	</ul>
      </div>
</nav>

	<div class="container-fluid">
		<section id="top" class="row">
			<div class="col-md">
				<img class="dictpic img-fluid" src="dictionary.png" />
			</div>
			<div class="col-md">
				<h1>Welsh-Irish Dictionary</h1>
				<hr />
				<p class="p-1">The fruit of 30 years of study, Joseph Mitchell's <i>Geiriadur Cymraeg-Gwyddelig</i> is the first of its kind.</p>
				<p class="p-1">It presents a wealth of vocabulary, expression and grammar with a broad scope and wide range of sources, both colloquial and literary.</p>
				<p class="p-1">The dictionary is an ideal study aid for Welsh speaking students of Irish, whether in school, university or learning independently. It will also be of use to Irish speakers learning Welsh.</p>
				<p class="p-1">This work represents a precise study of word and phrase in context, is compiled clearly and well annotated. Dr Diarmuid Johnson worked as consultative editor for the project.</p>			<a class="btn btn-primary buy-button p-1" href="https://www.abebooks.co.uk/servlet/SearchResults?bi=0&ds=30&isbn=0995760608&sortby=17&sts=t&vci=633805" role="button">Buy Now</a>
			</div>
		</section>


		<section id="features" class="row">
			<div class="col-md feature">
				<h3>Comprehensive</h3>
				<p>A complete and up-to-date vocabulary with over 12,000 headwords.</p>
			</div>
			<div class="col-md feature">
				<h3>Precise</h3>
				<p>Annotated translations for different ranges of meaning and examples of usage to clarify words in context.</p>

			</div>
			<div class="col-md feature">
				<h3>Grammar Guide</h3>
				<p>A guide to Welsh mutation written in Irish and an extensive Irish grammar in Welsh.</p>
			</div>
		</section>

		<section class="row" id="author">
			<div class="col-md">
				<h2>About the author</h2>
				<p>Born in Carmarthen and raised in Abererch and North Cardiff, Joe Mitchell first learned Irish in Cardiff with Barry Tobin. He graduated with an MA in Irish at Aberystwyth 
				University in 2005 under Prof. Sims-Williams, Dr. Will Mahon, Dr. Diarmuid Johnson and Dr. Ian Hughes. His translations of Irish texts include short stories and essays by Martín Ó Cadhain.</p>
			</div>
			<div class="col-md text-center">
				<figure class="figure">
					<img id="joe-pic" class="img-fluid" src="joe.jpg" />
					<figcaption class="figure-caption">Joe Mitchell</figcaption>
				</figure>
			</div>
		</section>

		<section id="buy" class="row text-center">
			<div class="col">
				<h2>Purchase</h2>
				<p>The Welsh-Irish Dictionary is sold on the ABE page of our sponsor, Ystwyth Books.</p>
				<img id="bottom-pic" class="dictpic img-fluid" src="dictionary.png" />
				<a id="buy-button-bottom" class="btn btn-primary buy-button" href="https://www.abebooks.co.uk/servlet/SearchResults?bi=0&ds=30&isbn=0995760608&sortby=17&sts=t&vci=633805" role="button">Buy Now</a>
			</div>
		</section>

		<section id="contact" class="row">
			<div class="col-md-6 offset-md-3">  	
				<h2>Contact</h2>
				<p>For any queries please use the form below.</p>
				<form action="mail.php" method="post">
					<div class="form-row">
					<div class="form-group col-md-6">
						<label for="first-name">First Name</label>
						<input type="text" class="form-control" id="first-name" name="firstname">
					</div>
					<div class="form-group col-md-6">
						<label for="last-name">Last Name</label>
						<input type="text" class="form-control" id="last-name" name="lastname">
					</div>
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
			</div>

		</section>
	</div><!-- container -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
