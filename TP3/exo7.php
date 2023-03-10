<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $nom = "";
    $prenom = "";
    $fonction = "";
    $mois = 6;
    $assurance = "0";
    $montant = 0;

    $montant_corr = true;
    $continue = false;

    if(isset($_POST["submit"])){
        $continue = true;
    }
    if (isset($_POST["montant"])) {
        $montant = (float) $_POST["montant"];
        $montant_corr = (strval($montant) == $_POST["montant"]);
    }
    if (!$montant_corr) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $fonction = $_POST["fonction"];
        $mois = $_POST["mois"];
        $assurance = $_POST["assurance"];
    }
    ?>

    <form action="" method="post">
        <label for="fonction">Fonction: </label>
        <select name="fonction" id="">
            <option value="4" <?php if ($fonction == "4") {
                                    echo "selected";
                                } ?>>Fonctionnaire</option>
            <option value="5" <?php if ($fonction == "5") {
                                    echo "selected";
                                } ?>>Salarié</option>
            <option value="6" <?php if ($fonction == "6") {
                                    echo "selected";
                                } ?>>Profession libérale</option>
        </select>
        <br>
        <label for="nom">Nom: </label>
        <input type="text" required name="nom" value="<?php echo $nom; ?>"><br>
        <label for="prenom">Prénom</label>
        <input type="text" required name="prenom" value="<?php echo $prenom; ?>"><br>
        <label for="montant">Montant de financement: </label>
        <input type="text" required name="montant" value="<?php echo $montant; ?>">
        <?php
        if (!$montant_corr) {
            echo "<p style=\"color: red;\">Le montant doit être un nombre réel!</p>";
        }
        ?>
        <br>
        <label for="mois">Durée(mois): </label>
        <input type="number" required max="300" min="6" value="<?php echo $mois; ?>" name="mois"><br>
        <label for="assurance">Assurance: </label>
        <input type="radio" name="assurance" value="0.04" id="" <?php if ($assurance == "0.04") {
                                                                    echo "checked";
                                                                } ?>><label for="avec">Avec</label>
        <input type="radio" name="assurance" value="0" id="" <?php if ($assurance == "0") {
                                                                    echo "checked";
                                                                } ?>><label for="sans">Sans</label>
        <br><input type="submit" value="Calculer" name="submit">

    </form>

    <?php
    if ($montant_corr && $continue) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $fonction = intval($_POST["fonction"]);
        $mois = intval($_POST["mois"]);
        $assurance = floatval($_POST["assurance"]);
        $montant = floatval($_POST["montant"]);

        $taux = $fonction / 1200;
        $ce_mois = intval(date('m'));
        $cette_annee = intval(date('y'));
        $mensualite = $montant * $taux * pow((1 + $taux), $mois) / (pow((1 + $taux), $mois) - 1);
        $restant = $montant;
    ?>
        <table border>

            <tr>
                <td>Date Ech
                <td>Mensualité (MAD)
                <td>Intérêt (MAD)
                <td>Assurance (MAD)
                <td>Amortissement (MAD)
                <td>Cap. Restant dû (MAD)
            </tr>

            <?php
            for ($i = $ce_mois; $i <= $ce_mois + $mois - 1; $i++) {
                $interet = $restant * $taux;
                $amortissment = $mensualite - $interet;
                if ($i % 13 == 0) {
                    $cette_annee++;
                }
                echo "<tr><td>01/" . ($i % 13) . "/20$cette_annee<td>".round($mensualite + ($montant*$assurance/100),2)."<td>".round($interet,2)."<td>".round(($montant*$assurance/100),2)."<td>".round($amortissment,2);
                $restant -= $amortissment;
                echo "<td>".round($restant,2);
            }
            ?>

        </table>
    <?php
    }
    ?>


</body>

</html>