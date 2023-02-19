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
    include "../TP2/func.php";
    $err = true;

    if (isset($_POST["pswd"]) && isset($_POST["pswdr"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["civilite"]) && isset($_POST["naissance"]) && isset($_POST["formations"])) {
        $pswd = $_POST["pswd"];
        $pswdr = $_POST["pswdr"];
        $formations = $_POST["formations"];

        $err = false;

        if ($pswd != $pswdr) {
            echo "<p style=\"color: red;\">Mots de passses non identiques !</p>";
            $err = true;
        }

        if ($err) {
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $naissance = $_POST["naissance"];
            $civilite = $_POST["civilite"];
        } else {
            $pswd = "";
            $pswdr = "";
            $formations = [];
            $civilite = "M.";
            $nom = "";
            $prenom = "";
            $naissance = "";
        }
    } else {
        if (isset($_POST["pswd"])) {
            $pswd = $_POST["pswd"];
        } else {
            $pswd = "";
        }
        if (isset($_POST["pswdr"])) {
            $pswdr = $_POST["pswdr"];
        } else {
            $pswdr = "";
        }
        if (isset($_POST["nom"])) {
            $nom = $_POST["nom"];
        } else {
            $nom = "";
        }
        if (isset($_POST["prenom"])) {
            $prenom = $_POST["prenom"];
        } else {
            $prenom = "";
        }
        if (isset($_POST["civilite"])) {
            $civilite = $_POST["civilite"];
        } else {
            $civilite = "M.";
        }
        if (isset($_POST["naissance"])) {
            $naissance = $_POST["naissance"];
        } else {
            $naissance = "";
        }
        if (isset($_POST["formations"])) {
            $formations = $_POST["formations"];
        } else {
            $formations = [];
        }
    }
    ?>


    <form action="" method="post">
        <?php
        if ($civilite == "") {
            echo "<p style=\"color: red;\">Choisissez une civilité !</p>";
        }
        ?>
        <label for="civilite">Civilité: </label>
        <input type="radio" name="civilite" value="M." <?php if ($civilite == "M.") {
                                                            echo "checked";
                                                        } ?>><label for="">M.</label>
        <input type="radio" name="civilite" value="Mlle." <?php if ($civilite == "Mlle.") {
                                                                echo "checked";
                                                            } ?>><label for="">Mlle.</label>
        <input type="radio" name="civilite" value="Mme." <?php if ($civilite == "Mme.") {
                                                                echo "checked";
                                                            } ?>><label for="">Mme.</label><br>
        <?php
        if ($nom == "" && $err) {
            echo "<p style=\"color: red;\">Le nom est vide !</p>";
        }
        ?>
        <label for="nom">Nom: </label><input type="text" name="nom" value="<?php echo $nom; ?>"><br>
        <?php
        if ($prenom == "" && $err) {
            echo "<p style=\"color: red;\">Le prénom est vide !</p>";
        }
        ?>
        <label for="prenom">Prénom: </label><input type="text" name="prenom" value="<?php echo $prenom; ?>"><br>
        <?php
        if ($naissance == "" && $err) {
            echo "<p style=\"color: red;\">Saisissez une date de naissance!</p>";
        }
        ?>
        <label for="naissance">Date de naissance</label><input type="date" name="naissance" id="" value="<?php echo $naissance; ?>"><br>
        <?php
        if (sizeof($formations) == 0 && $err) {
            echo "<p style=\"color: red;\">Choisissez au moins une formation !</p>";
        }
        ?>
        <input type="checkbox" name="formations[]" id="" value="formation1" <?php if (in_array("formation1", $formations)) {
                                                                                echo "checked";
                                                                            } ?>><label for="">Formation 1</label>
        <input type="checkbox" name="formations[]" id="" value="formation2" <?php if (in_array("formation2", $formations)) {
                                                                                echo "checked";
                                                                            } ?>><label for="">Formation 2</label>
        <input type="checkbox" name="formations[]" id="" value="formation3" <?php if (in_array("formation3", $formations)) {
                                                                                echo "checked";
                                                                            } ?>><label for="">Formation 3</label>
        <input type="checkbox" name="formations[]" id="" value="formation4" <?php if (in_array("formation4", $formations)) {
                                                                                echo "checked";
                                                                            } ?>><label for="">Formation 4</label>
        <input type="checkbox" name="formations[]" id="" value="formation5" <?php if (in_array("formation5", $formations)) {
                                                                                echo "checked";
                                                                            } ?>><label for="">Formation 5</label><br>
        <input type="checkbox" name="formations[]" id="" value="formation6" <?php if (in_array("formation6", $formations)) {
                                                                                echo "checked";
                                                                            } ?>><label for="">Formation 6</label>
        <input type="checkbox" name="formations[]" id="" value="formation7" <?php if (in_array("formation7", $formations)) {
                                                                                echo "checked";
                                                                            } ?>><label for="">Formation 7</label>
        <input type="checkbox" name="formations[]" id="" value="formation8" <?php if (in_array("formation8", $formations)) {
                                                                                echo "checked";
                                                                            } ?>><label for="">Formation 8</label>
        <input type="checkbox" name="formations[]" id="" value="formation9" <?php if (in_array("formation9", $formations)) {
                                                                                echo "checked";
                                                                            } ?>><label for="">Formation 9</label>
        <input type="checkbox" name="formations[]" id="" value="formation10" <?php if (in_array("formation10", $formations)) {
                                                                                    echo "checked";
                                                                                } ?>><label for="">Formation 10</label><br>
        <?php
        if ($pswd == "" && $err) {
            echo "<p style=\"color: red;\">Saisissez un mot de passe !</p>";
        }
        ?>
        <label for="">Mot de passe: </label><input type="password" name="pswd" id="" value="<?php echo $pswd; ?>">
        <?php
        if ($pswdr == "" && $err) {
            echo "<p style=\"color: red;\">Confirmez le mot de passe !</p>";
        }
        ?>
        <label for="">Réecrire mot de passe: </label><input type="password" name="pswdr" id="" value="<?php echo $pswdr; ?>"><br>
        <?php
        if ($pswd != $pswdr && $err) {
            echo "<p style=\"color: red;\">Mots de passses non identiques !</p>";
        }
        ?>
        <input type="submit" value="Sousmettre">

    </form>


    <?php
    if (!$err) {
        $pswd = $_POST["pswd"];
        $pswdr = $_POST["pswdr"];
        $formations = $_POST["formations"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $naissance = $_POST["naissance"];

    ?>

        <table border>
            <tr>
                <td>Civilité
                <td>Nom
                <td>Prénom
                <td>Date de naissance
                <td>Formations
                <td>Mot de passe
            </tr>
            <tr>
                <td><?php echo $civilite; ?>
                <td><?php echo $nom; ?>
                <td><?php echo $prenom; ?>
                <td><?php echo $naissance; ?>
                <td><?php echo str_arr_v($formations); ?>
                <td><?php echo $pswd; ?>
            </tr>
        </table>

    <?php
    }
    ?>

</body>

</html>