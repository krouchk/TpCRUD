<?php session_start();
require_once(__DIR__ . "/config.php");
require_once(__DIR__ . "/element.php");


if (!isset($_GET["id"]) || !is_numeric ($_GET["id"]) ) {
    $_SESSION["ID"] = "il faut un identifiant"
    header("location: index.php")
    exit();
}
else {
    $retrieveEleve = $mysqlUser->prepare('SELECT * FROM eleve WHERE id=:id');
    $retrieveEleve->execute(['id'=> $_GET['id']]);
    $eleve=$retrieveEleve->fetch(PDO::FETCH_ASSOC);
} ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
</head>
<body>
<h1>Modifier un eleve</h1>
    <form action="check.php" method="POST">

        <div>
        <label for="id">identifiant</label>
        <input type="hidden" id="id">
        </div>

        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="nom" name="nom" required> 
        </div>

        <div>
            <label for="Prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>

        <div>
            <label for="Ville">Ville</label>
            <input type="text" id="ville" name="ville" required>
        </div>

        <div>
            <label for="Email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="Classe">Classe</label>
            <select name="ClasseId" id="ClasseId" required>
                <option value="" selected disabled>Selectionner classe</option>
                <?php  foreach ($classe as $cl) : ?>
                    <option value="<?php echo $cl["Id"];  ?>"><?php echo $cl["Libelle"]; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" name="okey">Ajouter</button>
    </form>
    
</body>
</html>
