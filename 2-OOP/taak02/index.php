<?php 

class Auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
}

$nieuweAuto = new Auto();
$nieuweAuto->merk = 'Tesla';
$nieuweAuto->kleur = 'Rood';
$nieuweAuto->type = 'Model 3';
$nieuweAuto->uitvoering = 'Cabrio';
$nieuweAuto->brandstof = 'Elektrisch';

echo $nieuweAuto->merk;
echo "<br>";
echo $nieuweAuto->kleur;
echo "<br>";
echo $nieuweAuto->type;
echo "<br>";
echo $nieuweAuto->uitvoering;
echo "<br>";
echo $nieuweAuto->brandstof;

?>