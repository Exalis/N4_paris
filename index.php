<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>N4 - goalers</title>

    <link href="style/style.css" rel="stylesheet">

  </head>
  <body class="main_page">

  <header class="first_banner col">
      <img class="logo" src="./images/logo.svg" alt="">
      <h1>Site de pari pour la N4</h1>
      <p class="">Vous connaissez les règles :D</p>
      <a class="btn" href="./tableau.php">Voir les paris</a>
  </header>


  <section>
    
    <form action="addInDb.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="nom" id="nom" >
            <label for="nom">Je suis</label>
        </div>
    
        <?php include_once "requete.php";
              $paris = getParis();
              
              for ($i = 0; $i < count($paris)-2 ; $i ++){
                echo'<div class="form-group">';
                echo'<div class="fake_label '.$paris[$i]['NomPari'].'">'.$paris[$i]['NomPari'].'</div>';

                echo'<div class="select_container"><select class="form-control" name="who'.$i.'" id="nomPari_'.$i.'">';
                  $players = getJoueurs();
                  echo'<option value="nom du joueur"></option>';

                  for ($j = 0; $j < count($players) ; $j ++){
                    echo'<option value='.$players[$j]['Id'].'>'.$players[$j]['Nom'].'</option>';
                  }
                  echo'</select></div>';
                echo'</div>';
              }

              echo'
              <div class="form-group">
                <textarea class="form-control" name="who'.(count($paris)-2).'" id="exampleFormControlTextarea1" rows="1" ></textarea>
                  <label for="exampleFormControlTextarea1">'.$paris[count($paris)-2]['NomPari'].'</label>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="who'.(count($paris)-1).'" id="exampleFormControlTextarea1" rows="1" ></textarea>
                  <label for="exampleFormControlTextarea1">'.$paris[count($paris)-1]['NomPari'].'</label>
              </div>
              ';
            ?>

        
              
        <div class="form-group">
          <textarea class="form-control" name="why" id="exampleFormControlTextarea1" rows="3" ></textarea>
            <label for="exampleFormControlTextarea1">Une explication ?</label>
        </div>

        <button type="submit" class="btn btn-primary btn-lg">C'est bon je pari !</button>

    </form>
    
  </section>

  </body>
</html>
