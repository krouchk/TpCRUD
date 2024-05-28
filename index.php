<?php require_once(__DIR__ . "/element.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des eleves</h1>
    <table>
        <thead>
            <tr>
                <th>      Nom          </th>
                <th>     Prénom       </th>
                <th>       Ville       </th>
                <th>     Email         </th>
                <th>     Classe          </th>
                <th>                </th>
                <th>                     </th>

                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eleve as $e):?>
                <tr>
                    <td><?php echo $e["nom"]; ?></td>
                    <td><?php echo $e["prenom"]; ?></td>
                    <td><?php echo $e["ville"]; ?></td>
                    <td><?php echo $e["email"]; ?></td>
                    <td><?php echo $e["Libelle"]; ?></td>
                    <td><a href="modifier.php?id=<?php echo ($e["id"]); ?>">Modifier</a></td>
                    <td><a href="supprimer.php?id=<?php echo ($e["id"]); ?>">Supprimer</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>