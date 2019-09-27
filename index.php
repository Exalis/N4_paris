<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>N4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="monStyle.css" rel="stylesheet">

  </head>
  <body>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Site de pari pour la N4</h1>
      <p class="lead">Vous connaissez les règles :D</p>
      <button style="gravity=center ;" class="btn btn-secondary btn-lg">
        <a href="./tableau.php">Voir les paris</a>
      </button>

    </div>
  </header>


  <section>
    
    <form action="addInDb.php" method="POST">
        <div class="form-group">
            <label for="nom">Mon nom :</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Mon nom">
        </div>
    
        <div class="form-group">
            <label for="paris">Quel pari ?</label>
            
            <select class="form-control" name="paris" id="paris">
            <?php include_once "requete.php";
              $paris = getParis();

              for ($i = 0; $i < count($paris) ; $i ++){
                echo'<option value='.$paris[$i]['Id'].'>'.$paris[$i]['NomPari'].'</option>';
              }
            
            ?>

            </select>

        </div>

        <div class="form-group">
            <label for="nomPari">Sur qui tu pari ?</label>
            <select class="form-control" name="who" id="nomPari">
            <?php include_once "requete.php";
              $paris = getJoueurs();

              for ($i = 0; $i < count($paris) ; $i ++){
                echo'<option value='.$paris[$i]['Id'].'>'.$paris[$i]['Nom'].'</option>';
              }
            
            ?>
            </select>
        </div>
              
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Une explication ?</label>
            <textarea class="form-control" name="why" id="exampleFormControlTextarea1" rows="3" placeholder="Pourquoi donc ? "></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg">C'est bon je pari !</button>

    </form>
    
  </section>

  </body>
</html>
