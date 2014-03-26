<?php

namespace RadHam;

//require __DIR__ . '/src/Narrative.php';
require __DIR__ . '/vendor/autoload.php';

/**
 * @param $stuff string I like strings!
 */
function hello($stuff) {
    echo $stuff;
}

/**
 * @package ClassyNarrative
 */
class Classy
{
    public static function forSure()
    {
        echo 'Yeah I am!';
    }
}

$narrator = new Narrative(__NAMESPACE__ . '\Classy : class');
echo $narrator->getComments();
