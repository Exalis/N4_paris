<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Tableau</title>

        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
        <?php 
            include "bd.inc.php";
            include "requete.php";
        ?>

    </head>


    <body>    
        <table id="tab" class="display" style="width:100%">
            <thead> 
                <tr> 
                    <th>Nom</th> 
                    <th>Pari</th> 
                    <th>Parié sur</th> 
                    <th>Montant</th> 
                    <th>Pourquoi donc ?</th> 
                </tr> 
            </thead>

            <tbody>
            <?php
                $getData = getDataForPlayers(2);
                for($i = 0; $i < count($getData) ; $i++){
                    echo'
                    
                        <tr> 
                            <td>'.$getData[$i]['NomParieur'].'</td> 
                            <td>'.$getData[$i]['NomPari'].'</td> 
                            <td>'.$getData[$i]['NomJoueur'].'</td> 
                            <td>0.5 €</td> 
                            <td>'.$getData[$i]['Pourquoi'].'</td> 
                        </tr>
                    ';
                }
                $getData = getDataForNbGoals(2);
                for($i = 0; $i < count($getData) ; $i++){
                    echo'
                    
                        <tr> 
                            <td>'.$getData[$i]['NomParieur'].'</td> 
                            <td>'.$getData[$i]['NomPari'].'</td> 
                            <td>'.$getData[$i]['PariSur'].'</td> 
                            <td>0.5 €</td> 
                            <td>'.$getData[$i]['Pourquoi'].'</td> 
                        </tr>
                    ';
                }
            
            ?>
            
            </tbody>
            
            </table>    
    
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script>



<script>
    $(document).ready(function() {
        $('#tab').DataTable();
    } );
</script>