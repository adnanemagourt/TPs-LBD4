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
    $assurance = "avec";
    $montant = 0;

    $montant_corr = true;
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
            <option value="salarie" <?php if ($fonction == "salarie") {
                                        echo "selected";
                                    } ?>>Salarié</option>
            <option value="fonctionnaire" <?php if ($fonction == "fonctionnaire") {
                                                echo "selected";
                                            } ?>>Fonctionnaire</option>
            <option value="liberal" <?php if ($fonction == "liberal") {
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
        <input type="radio" name="assurance" value="avec" id="" <?php if ($assurance == "avec") {
                                                                    echo "checked";
                                                                } ?>><label for="avec">Avec</label>
        <input type="radio" name="assurance" value="sans" id="" <?php if ($assurance == "sans") {
                                                                    echo "checked";
                                                                } ?>><label for="sans">Sans</label>
        <br><input type="submit" value="Calculer">

    </form>

    <?php
    if (!$montant_corr) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $fonction = $_POST["fonction"];
        $mois = intval($_POST["mois"]);
        $assurance = $_POST["assurance"];
        $montant = floatval($_POST["montant"]);

        $ce_mois = intval(date('m'));
        $cette_annee = intval(date('y'));
        $mensualité = $montant / $mois;
        if ($assurance == "avec") {
            $mensualité += ($montant * 0.0004);
        }
        if ($fonction == "salarie") {
            $amortissement = 0.05;
        } elseif ($fonction == "fonctionnaire") {
            $amortissement = 0.04;
        } elseif ($fonction == "liberal") {
            $amortissement = 0.06;
        }
    ?>
        <table border>

            <tr>
                <td>Date Ech
                <td>Mensualité (MAD)
                <td>Intérêt (MAD)
                <td>Amortissement (MAD)
                <td>Cap. Restant dû (MAD)
            </tr>

            <?php
            for ($i = $ce_mois; $i <= $ce_mois + $mois; $i++) {
                if ($i % 13 == 0) {
                    $cette_annee++;
                }
                echo "<tr><td>01/".($i % 13)."/$cette_annee<td>";
            }
            ?>

        </table>
    <?php
    }
    ?>


</body>

</html>