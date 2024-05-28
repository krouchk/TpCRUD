<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter un eleve</h1>
    <form action="check.php" method="POST">

        <?php if (isset($_SESSION["CHAMPS"])):?>
            <div>
                <?php echo $_SESSION["CHAMPS"];
                unset($_SESSION["CHAMPS"]); ?>

            </div>
        <?php endif; ?>





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