<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/formulaire.css">
    <link    href="https://fonts.googleapis.com/css?family=Anton|Archivo+Black|Cabin|Fredoka+One|Krona+One|Passion+One&display=swap"
    rel="stylesheet">

    <title>Page admin portfolio JJJ</title>
  </head>
<div class="website">
  <body>
  	<div class="row">
  		<div class="col-12">
        <div class="logo">
          <a href="index.html"><img src=images/left-arrow.png alt=""/></a>
        </div>
  			<h1 class="titre">Ajouter un TIP :</h1>
  		</div>
  	</div>
    <form action="traitement.php" method="post">
      <div class="name">
       <div class="row">
         <div class="col-6">
          <input type="text" class="form-control" placeholder="Titre du TIP" id="tip_titre" name="tip_titre">
         </div>
       </div>
      </div>
        <div class="row">
          <div class="col">
            <div class="text-area">
              <textarea class="text-area" id="tip_contenu" name="tip_contenu" placeholder="Entrez votre texte ici!" rows="10" cols="50"></textarea>
            </div>
          </div>
        </div>
        <div class="rows">
          <div class="col-12">
            <div class="bouton">
              <button type="submit" name='envoi' class="btn btn-primary mb-2">Envoyer</button>
            </div>
          </div>
        </div>
    </form>

  </body>
</div>
 </html>
