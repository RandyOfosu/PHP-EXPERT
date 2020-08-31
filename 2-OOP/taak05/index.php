<?php 

class Lamp{
    public $kleur;
    public $helderheid;
    public $isAan;

    function setStatus($status){
        $this->isAan = $status;
    }
}

$woonkamerLamp = new Lamp();
$woonkamerLamp->kleur = 'geel';
$woonkamerLamp->heldereid = 'zacht';
$woonkamerLamp->setStatus('uit');

$keukenLamp = new Lamp();
$keukenLamp->kleur = 'wit';
$keukenLamp->helderheid = 'fel';
$keukenLamp->setStatus('aan');

echo "Woonkamerlamp is ".$woonkamerLamp->isAan.".<br>";
echo "Keukenlamp is ".$keukenLamp->isAan.".<br>";

?>