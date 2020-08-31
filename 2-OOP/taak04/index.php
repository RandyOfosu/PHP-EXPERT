<?php

class Scooter{
    public $kleur;
    public $merk;
    public $tank;

    public function inhoudTank(){
        if($this->tank == 10){
            echo 'de emmer is vol!';
        }
        else{
            echo 'de emmer is niet vol!';
        }
    }
}

$piaggio = new Scooter();
$piaggio->kleur = 'rood';
$piaggio->inhoudTank(6);

$peugeot = new Scooter();
$peugeot->kleur = 'zwart';
$peugeot->inhoudTank(10);

echo $piaggio->inhoudTank()."<br>";
echo $peugeot->inhoudTank()."<br>";

?>