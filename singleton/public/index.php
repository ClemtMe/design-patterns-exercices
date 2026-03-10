<?php

use App\Config;

require('../vendor/autoload.php');


# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques
$settings = require('../config/config.php');
$config = Config::getConfig($settings);
var_dump($config->getSetting('db'));
echo "<br>";
$config2 = Config::getConfig([]);
var_dump($config2->getSetting('db'));
if($config === $config2){
    echo "<br>meme objet";
}