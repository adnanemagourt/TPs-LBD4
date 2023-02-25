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
    $naiss = "";

    $naiss_corr = true;
    $montant_corr = true;
    $total_corr = true;
    $continue = false;

    if(isset($_POST["submit"])){
        $continue = true;
    }
    if (isset($_POST["montant"])) {
        $montant = (float) $_POST["montant"];
        $montant_corr = (strval($montant) == $_POST["montant"]);
    }
    if (isset($_POST["naiss"])) {
        $naiss_mois = intval(explode('-', $_POST["naiss"])[0]);
        $naiss_an = intval(explode('-', $_POST["naiss"])[1]) + 62;
        $ce_mois = intval(date('m'));
        $cette_annee = intval(date('y'));
        $mois = intval($_POST["mois"]);

        for ($i = $ce_mois; $i <= $ce_mois + $mois - 1; $i++) {
            $ce_mois++;
            if ($ce_mois % 13 == 0) {
                $ce_mois = 1;
            }
            if ($i % 13 == 0) {
                $cette_annee++;
            }
            if ($ce_mois == $naiss_mois && $cette_annee == $naiss_an) {
                $naiss_corr = false;
                break;
            }
        }
    }
    if(isset($_POST["total"])){
        $total = $_POST["total"];
        $salaire = $_POST["salaire"];
        $fonction = intval($_POST["fonction"]);
        $mois = intval($_POST["mois"]);
        $assurance = floatval($_POST["assurance"]);
        $montant = floatval($_POST["montant"]);

        $taux = $fonction / 1200;
        $ce_mois = intval(date('m'));
        $cette_annee = intval(date('y'));
        $mensualite = ( $montant * $taux * pow((1 + $taux), $mois) / (pow((1 + $taux), $mois) - 1) ) + ($assurance * $montant / 100);
        if($mensualite + $total > $salaire/2){
            $total_corr = false;
            $montant = ($salaire * 0.52 - $total - ($assurance * $montant / 100)) / ($taux * pow((1 + $taux), $mois) / (pow((1 + $taux), $mois) - 1));
        }
    }
    if (!$montant_corr || !$naiss_corr || !$total_corr) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $fonction = $_POST["fonction"];
        $mois = $_POST["mois"];
        $assurance = $_POST["assurance"];
        $naiss = $_POST["naiss"];
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
        <label for="naiss">Date de naissance: </label>
        <input type="date" required name="naiss" id="" value="<?php echo $naiss; ?>"><br>
        <?php
        if (!$naiss_corr) {
            echo "<p style=\"color: red;\">La durée demandée n'est pas dans l'intervalle de fonction!</p>";
        }
        ?>
        <label for="salaire">Salaire mensuel: </label>
        <input type="number" name="salaire" id="" required><br>
        <label for="total">Montant mensuel total des crédits à payer: </label>
        <input type="number" name="total" id="" required><br>
        <label for="montant">Montant de financement: </label>
        <input type="text" required name="montant" value="<?php echo $montant; ?>">
        <?php
        if (!$montant_corr) {
            echo "<p style=\"color: red;\">Le montant doit être un nombre réel!</p>";
        }
        if (!$total_corr) {
            echo "<p style=\"color: red;\">Crédit Refusé! Montant maximal recommandé: $montant</p>";
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
    if ($montant_corr && $naiss_corr && $total_corr && $continue) {
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
                echo "<tr><td>01/" . ($i % 13) . "/20$cette_annee<td>" . round($mensualite + ($montant * $assurance / 100), 2) . "<td>" . round($interet, 2) . "<td>" . round(($montant * $assurance / 100), 2) . "<td>" . round($amortissment, 2);
                $restant -= $amortissment;
                echo "<td>" . round($restant, 2);
            }
            ?>

        </table>
    <?php
    }
    ?>


</body>

</html>