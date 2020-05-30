<?php
//-----------------------factorial------------------------
if($_GET['submit']){
$Nombre=$_GET["Nombre"];
$factorial=1;
for($i=1; $i<=$Nombre; $i++)
{
    $factorial=$factorial*$i;
}
}
//-----------------------somme------------------------
$Nombre1=$_GET['Nombre1'];
$Nombre2=$_GET['Nombre2'];
$Nombre3=$_GET['Nombre3'];
$Nombre4=$_GET['Nombre4'];
if($_GET['somme']){
    $sum=array($Nombre1,$Nombre2,$Nombre3,$Nombre4);
    
}
?>

<form action="calcul.php" method="get">
<h1>Le factorielle de nombre entrant est: <?php echo $factorial ?></h1>
<input type="text" name="Nombre" placeholder="Saisie un nombre...">
<input type="submit" name="submit" id="submit" value="submit">

</form>

<form action="calcul.php" method="get">
<h1>la somme des nombres entrants est:<?php echo array_sum($sum);  ?></h1>
<input type="text" name="Nombre1" placeholder="Saisie un nombre...">
<input type="text" name="Nombre2" placeholder="Saisie un nombre...">
<input type="text" name="Nombre3" placeholder="Saisie un nombre...">
<input type="text" name="Nombre4" placeholder="Saisie un nombre...">
<input type="submit" name="somme" id="somme" value="somme">

</form>