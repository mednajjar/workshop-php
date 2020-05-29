<?php

    $name = $_GET['name'];
    $weightKg = $_GET['weightKg'];
    $heightCm = $_GET['heightCm'];
    $heightm = $heightCm/100; //------Convertir la hauteur en mètres.
    $height = $heightm * $heightm; //------Calculer la valeur de la hauteur au carré.
    $CMI = $weightKg/$height; //------Calculer l'IMC en divisant le poids de l'utilisateur par la valeur de la taille au carré.

?>

<form action="tracker.php" method='get'>
<h1>Bonjour <?php echo "$name"; ?> votre masse corporelle est : <?php echo "$CMI"; ?></h1></br>
<h3>Votre hauteur en metre: <?php echo "$heightm"; ?></h3></br>
        <b>Your Name :</b><input type="text" name='name'>
        <b>Weight (Kg) :</b><input type="text" name='weightKg'>
        <b>Height (Cm) :</b><input type="text" name='heightCm'><br>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>