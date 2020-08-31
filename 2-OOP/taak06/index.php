<?php

class Robot{
    public $naam;
    public $geluid;
    public $voortstuwing;

    function getSound($sound){
        return $this->geluid = $sound;
    }
}

$wally = new Robot();
$wally->naam = 'wal-e';
$wally->getSound('beepboop');
$wally->voortstuwing = 'rollend';

$wolly = new Robot();
$wolly->naam = 'wol-e';
$wolly->getSound('boopbeep');
$wolly->voorstuwing = 'lopend';

echo $wolly->geluid."<br>";
echo $wally->geluid."<br>";

?>