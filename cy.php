<!DOCTYPE html>
<html lang="cy" >

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Geiriadur Cymraeg-Gwyddeleg</title>
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
          Iaith
        </button>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cy.php">Cymraeg</a>
          <a class="dropdown-item" href="ga.php">Gaeilge</a>
          <a class="dropdown-item" href="en.php">English</a>
        </div>
      </span>

      <ul class="navbar-nav ml-auto pull-right">
      <li class="nav-item">
        <a class="nav-link" href="#top">Hafan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#author">Yr Awdur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#buy">Prynu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Cysylltu</a>
      </li>
    	</ul>
      </div>
</nav>

	<div class="container-fluid">
		<section id="top" class="row">
			<div class="col-md">
				<img class="dictpic img-fluid" src="dictionary.png" alt="Geiriadur Cymraeg-Gwyddeleg" />
			</div>
			<div class="col-md">
				<h1>Geiriadur Cymraeg-Gwyddeleg</h1>
				<hr />
				<p class="p-1">Mae’r <i>Geiriadur Cymraeg-Gwyddeleg</i> gan Joe Mitchell yn benllanw ar 30 o flynyddoedd o astudio. Dyma’r geiriadur cyntaf o’i fath.</p>
				<p class="p-1">Mae’n cyflwyno cyfoeth o eirfa, o ymadroddion a gramadeg, gyda golwg cynhwysfawr ac ystod eang o ffynonellau llafar a llenyddol.</p>
				<p class="p-1">Mae’n adnodd delfrydol i Gymry sydd yn astudio’r Wyddeleg, mewn ysgolion a cholegau neu i ddysgwyr annibynnol. Bydd o ddefnydd hefyd i Wyddelod sydd yn dysgu’r Gymraeg.</p>
				<p class="p-1">Ceir yma astudiaeth trylwyr o eiriau ac ymadroddion mewn cyd-destun, a’r rheini wedi eu casglu’n ofalus a’u labelu’n fanwl. Gweithiodd Dr Diarmuid Johnson ar y prosiect fel golygydd ymgynghorol.</p>
				<a class="btn btn-primary buy-button p-1" href="https://www.abebooks.co.uk/servlet/SearchResults?bi=0&ds=30&isbn=0995760608&sortby=17&sts=t&vci=633805" role="button">Prynwch nawr</a>
			</div>
		</section>


		<section id="features" class="row">
			<div class="col-md feature">
				<h3>Cynhwysfawr</h3>
				<p>Geirfa llawn a chyfredol gyda mwy na 12,000 o eiriau pennawd.</p>
			</div>
			<div class="col-md feature">
				<h3>Manwl</h3>
				<p>Cyfieithiadau â labeli i amlygu rhychwant defnydd, gydag enghreifftiau o ddefnydd er mwyn egluro geiriau mewn cyd-destun. </p>

			</div>
			<div class="col-md feature">
				<h3>Canllaw Gramadeg</h3>
				<p>Canllaw i’r treigladau Cymraeg yn yr Wyddeleg, a gramadeg Gwyddeleg helaeth yn y Gymraeg.</p>
			</div>
		</section>

		<section class="row" id="author">
			<div class="col-md">
				<h2>Am yr awdur</h2>
				<p>Yn enedigol o Gaerfyrddin, wedi’i fagu yn Abererch a Gogledd Caerdydd, dysgodd Joe Mitchell yr Wyddeleg gyntaf yng Nghaerdydd gyda Barry Tobin. Enillodd radd MA mewn Gwyddeleg yn Aberystwyth gyda’r Athro Patrick Sims-Williams, Dr. Willy Mahon, Dr. Diarmuid Johnson a Dr. Ian Hughes. Y mae ei waith cyfieithu yn cynnwys straeon byrion a thraethodau Martín Ó Cadhain.</p>
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
				<h2>Prynu</h2>
				<p>Mae’r Geiriadur Cymraeg-Gwyddeleg ar werth yn Martin's Books ar ABE Books.</p>
				<img id="bottom-pic" class="dictpic img-fluid" src="dictionary.png" />
				<a id="buy-button-bottom" class="btn btn-primary buy-button" href="https://www.abebooks.co.uk/servlet/SearchResults?bi=0&ds=30&isbn=0995760608&sortby=17&sts=t&vci=633805" role="button">Prynwch nawr</a>
			</div>
		</section>

		<section id="contact" class="row">
			<div class="col-md-6 offset-md-3">  	
				<h2>Cysylltu</h2>
				<p>Defnyddiwch y ffurflen isod ar gyfer ymholiadau.</p>
				<div id="form-messages"></div>
				<form id="ajax-contact" action="mailer.php" method="post">
					<input type="hidden" name="lang" value="cy">
					<div class="form-row">
					<div class="form-group col-md-6">
						<label for="first-name">Enw cyntaf</label>
						<input type="text" class="form-control" id="first-name" name="first-name">
					</div>
					<div class="form-group col-md-6">
						<label for="last-name">Enw olaf</label>
						<input type="text" class="form-control" id="last-name" name="last-name">
					</div>
				</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">E-bost</label>
						<input type="text" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput">Neges</label>
						<textarea rows="4" class="form-control" id="message" name="message"></textarea>
					</div>
					<div class="form-group row">
						<label class="col-auto col-form-label" for="human">2 + 3 = </label>
						<div class="col-xs-3">
							<input type="text" class="form-control" id="human" name="human">
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Gyrru</button>
				</form>
			</div>

		</section>
	</div><!-- container -->

<?php require 'scripts.php'; ?>
</body>

</html>
