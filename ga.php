<!DOCTYPE html>
<html lang="ga">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Foclóir Breatnais-Gaeilge</title>
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
          Teanga
        </button>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cy.php">Cymraeg</a>
          <a class="dropdown-item" href="ga.php">Gaeilge</a>
          <a class="dropdown-item" href="en.php">English</a>
        </div>
      </span>

      <ul class="navbar-nav ml-auto pull-right">
      <li class="nav-item">
        <a class="nav-link" href="#top">Baile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#author">Scribhneoir</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#buy">Ceannach</a>
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
				<h1>Foclóir Breatnais-Gaeilge</h1>
				<hr />
				<p class="p-1">Tar éis 30 bliain, seo toradh na hoibre as staidéir Joe Mitchell i <i>Foclóir Breatnais-Gaeilge</i>, an chéad leabhar dá short</p>
				<p class="p-1">Bailiúchán mór focal, frásaí agus gramadach atá ann, le réimse leathan as foinsí éagsúla idir chaighdeánach agus chanúnach.</p>
				<p class="p-1">Is áis iontach é seo don Bhreatnach atá ag foghlaim Gaeilge sa scoil, sa colaiste no as a stuaim fhéin. Ba bhreá é mar chabhair ar an nGael atá ag foghlaim na Breatnaise freisin</p>
				<p class="p-1">Seasann an obair seo mar staidéar chruinn ar úsaíd focal agus frásaí. Tá sé leagtha amach go soiléir le noda úsáideacha. Bhí lámh ag an Dr Diarmuid Johnson leis mar eagarthóír comhairleach.</p>			<a class="btn btn-primary buy-button p-1" href="https://www.abebooks.co.uk/servlet/SearchResults?bi=0&ds=30&isbn=0995760608&sortby=17&sts=t&vci=633805" role="button">Ceannach anois</a>
			</div>
		</section>


		<section id="features" class="row">
			<div class="col-md feature">
				<h3>Fairsing</h3>
				<p>Foclóir cuimsitheach de theanga ár linne agus breis ar 12,000 ceannfhocal</p>
			</div>
			<div class="col-md feature">
				<h3>Beacht</h3>
				<p>Aistriúcháin le notaí le haghaidh gach réimse ciall éagsúil, agus samplaí den úsáid chun soiléiriú a thabhairt ar an gcomhthéacs.</p>

			</div>
			<div class="col-md feature">
				<h3>Treoir Gramadaí</h3>
				<p>Treoir as nGaeilge ar arthuithe na dtúslitreacha sa gCymraeg agus treoir as Breatnais ar ghramadach na Gaeilge.</p>
			</div>
		</section>

		<section class="row" id="author">
			<div class="col-md">
				<h2>Faoin scribhneoir</h2>
				<p>Rugadh Joe i gCaerfyrddin sa Bhreatain Bheag agus tógadh é in Abererch agus Tuascairt Caerdydd. D’fhoghlaim sé a chuid Gaeilge i gCerdydd le Barra Tóibín. Fuair sé céim máistreachta sa Ghaeilge in Aberystwyth le Dr. Wil Mahon, Dr. Diarmuid Johnson agus Dr. Ian Hughes. Tá roinnt gearrscéalta de chuid Mhartín Uí Chadhain aistrithe go Breatnais aige.</p>
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
				<h2>Ceannach</h2>
				<p>Tá an Foclóir Breatnais-Gaeilge le fáil ó Martin's Books ar ABE Books.</p>
				<img id="bottom-pic" class="dictpic img-fluid" src="dictionary.png" />
				<a id="buy-button-bottom" class="btn btn-primary buy-button" href="https://www.abebooks.co.uk/servlet/SearchResults?bi=0&ds=30&isbn=0995760608&sortby=17&sts=t&vci=633805" role="button">Ceannach anois</a>
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
