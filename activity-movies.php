<?php
$list=array('author1' =>array("la gloire de mon pére",
"antigone",
"vendredi au la vie sauvage",
"le planet du sanges",
"balzac"),
'author2' => array("la gloire de mon pére2",
"antigone2",
"vendredi au la vie sauvage2",
"le planet du sanges2",
"balzac2"),
'author3' => array("la gloire de mon pére3",
"antigone3",
"vendredi au la vie sauvage3",
"le planet du sanges3",
"balzac3"),
'author4' =>array("la gloire de mon pére4",
"antigone4",
"vendredi au la vie sauvage4",
"le planet du sanges4",
"balzac4"),
'author5' => array("la gloire de mon pére5",
"antigone5",
"vendredi au la vie sauvage5",
"le planet du sanges5",
"balzac5"),
);


foreach($list as $cle=>$valeur)
{
echo "<h1> Les films de $cle : </h1><br>";
foreach($valeur as $ind=>$val)
{
echo "<li>". $val ."</li><br>
";
}
}


?>






